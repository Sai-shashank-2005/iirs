CREATE DATABASE intranet_search;

USE intranet_search;

CREATE TABLE search_index (

    id INT AUTO_INCREMENT PRIMARY KEY,

    title VARCHAR(255),

    url VARCHAR(255),

    category VARCHAR(100),

    keywords TEXT,

    content TEXT

);