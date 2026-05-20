# 🛡️ IIRS: Intelligent Intranet Retrieval System

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](#-license--credits)
[![PHP Version](https://img.shields.io/badge/PHP-8.x-777bb4.svg)](#-technology-stack)
[![MySQL Version](https://img.shields.io/badge/MySQL-FULLTEXT-4479A1.svg)](#-technology-stack)
[![Environment](https://img.shields.io/badge/Environment-XAMPP-fb7a24.svg)](#-installation--setup)

> **A lightweight, air-gapped enterprise search engine designed for internal corporate discovery.**
>
> IIRS simulates a dedicated internal search portal, allowing users to instantly locate enterprise services, dashboards, and organizational resources. Built with a custom crawler and metadata-based indexing, it provides rapid, categorized discovery while running completely offline — making it ideal for isolated lab environments, internal network experimentation, and SOC infrastructure simulations.

---

# ✨ Core Features

| Feature | Description |
|---|---|
| 🔍 Intelligent Intranet Search | Powered by MySQL FULLTEXT indexing for rapid results |
| 🕷️ Automated Crawler & Indexer | Automatically parses internal portals to build a searchable metadata index |
| ⚡ Live Portal Filtering | Instant search experience without external API dependencies |
| 🏢 Enterprise Dashboard UI | Clean, corporate-grade interface for service discovery |
| 📂 Categorized Resources | Logical grouping of internal services (HR, VPN, SOC, Payroll, etc.) |
| 🌐 100% Air-Gapped | Fully local offline architecture with zero external calls |
| 🖥️ XAMPP Compatible | Plug-and-play setup for local Windows environments |

---

# 🗺️ System Architecture

```text
                +----------------------+
                |      Employee        |
                +----------+-----------+
                           |
                           v
                +----------------------+
                |      portal.php      |
                | Enterprise Dashboard |
                +----------+-----------+
                           |
                           v
                +----------------------+
                |  search_backend.php  |
                |     Search Engine    |
                +----------+-----------+
                           |
                           v
                +----------------------+
                | MySQL FULLTEXT Index |
                +----------+-----------+
                           ^
                           |
                +----------------------+
                |     crawler.php      |
                | Metadata Indexer     |
                +----------+-----------+
                           |
                           v
                +----------------------+
                |      portal.php      |
                | Extract Metadata     |
                +----------------------+
```

---

# 🛠️ Technology Stack

| Category | Technologies |
| --- | --- |
| **Frontend** | HTML5, CSS3, Vanilla JavaScript |
| **Backend** | PHP 8.x |
| **Database** | MySQL / MariaDB (FULLTEXT Engine) |
| **Environment** | XAMPP (Apache + MySQL) |
| **UI/UX** | Custom Enterprise Dashboard Design |

---

# 📁 Project Structure

```text
iirs/
├── portal.php
├── crawler.php
├── search_backend.php
├── db.php
├── schema.sql
├── assets/
└── README.md
```

---

# 🚀 Installation & Setup

## 1. Prerequisites

Download and install XAMPP:

https://www.apachefriends.org/index.html

Start:
- Apache
- MySQL

from the XAMPP Control Panel.

---

## 2. Deploy the Project

Copy the entire `iirs` directory into your XAMPP `htdocs` folder.

Final path:

```text
C:\xampp\htdocs\iirs\
```

---

## 3. Database Initialization

1. Navigate to:

```text
http://localhost/phpmyadmin
```

2. Create a database named:

```text
intranet_search
```

3. Open the **SQL** tab and run:

```sql
USE intranet_search;

CREATE TABLE search_index (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    url VARCHAR(255),
    category VARCHAR(100),
    keywords TEXT,
    content TEXT
);

ALTER TABLE search_index
ADD FULLTEXT(title, keywords, content);
```

---

## 4. Configure Connection

Open:

```text
db.php
```

Verify credentials:

```php
<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "intranet_search"
);

if($conn->connect_error){
    die("Database Connection Failed");
}

?>
```

---

# 🕹️ Usage & Workflows

## Step 1 — Build the Index (Crawler)

Before users can search, the system must index the available services.

Open:

```text
http://localhost/iirs/crawler.php
```

The crawler will:
- Parse `portal.php`
- Extract metadata & keywords
- Categorize resources
- Populate the MySQL database

### Crawler Workflow

```text
portal.php
    ↓
Extract Links & Metadata
    ↓
Categorize Services
    ↓
Store Indexed Records
    ↓
MySQL FULLTEXT Database
```

---

## Step 2 — Launch the Portal

Open:

```text
http://localhost/iirs/portal.php
```

Try searching:
- VPN
- HR
- Payroll
- SOC
- Tickets
- Security

### Search Flow

```text
User Search
     ↓
Portal Search UI
     ↓
Search Backend
     ↓
MySQL FULLTEXT Search
     ↓
Ranked Search Results
```

---

# 🖼️ Application Preview

## 🖥️ Enterprise Portal Dashboard

<img src="./assets/home.png" width="100%" alt="Enterprise Portal Dashboard">

---

## 🏢 Internal Systems & Services

<img src="./assets/internal_systems.png" width="100%" alt="Internal Systems & Services">

---

## 🔎 Enterprise Search & Discovery

<img src="./assets/search.png" width="100%" alt="Enterprise Search & Discovery">

---

## 📂 Indexed Search Results

<img src="./assets/results.png" width="100%" alt="Indexed Search Results">

---

## 🚀 Portal Navigation Simulation

<img src="./assets/navigation.png" width="100%" alt="Portal Navigation Simulation">

---

## 🏷️ Indexed Keywords & Metadata

<img src="./assets/metadata.png" width="100%" alt="Indexed Keywords & Metadata">

---

# 🔒 Security Posture

- SQL Injection protection using prepared statements
- Fully local/offline architecture
- No external APIs or CDN dependencies
- Designed for isolated enterprise/lab environments

---

# 🚧 Future Enhancements

- [ ] AJAX live search
- [ ] Role-Based Access Control (RBAC)
- [ ] Search analytics dashboard
- [ ] Typo-tolerant search
- [ ] Elasticsearch integration
- [ ] Semantic ranking engine
- [ ] Real recursive crawler engine

---

# 📄 License & Credits

MIT License © 2026 IIRS

Built for Enterprise Infrastructure & Internal Discovery Systems.
