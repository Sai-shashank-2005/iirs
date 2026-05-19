
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- =============================================
         META TAGS — Critical for search indexing
         ============================================= -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO / Crawler Meta Tags -->
    <meta name="description"
          content="NEXCORP Enterprise Intranet Portal — Employee self-service, HR systems, payroll, leave management, IT helpdesk, VPN access, compliance, and more.">
    <meta name="keywords"
          content="intranet, employee portal, HR systems, payroll, leave management, VPN, IT helpdesk, SOC dashboard, attendance, training, compliance, procurement, finance, internal wiki, asset management, ticketing system">
    <meta name="robots" content="index, follow">
    <meta name="author" content="NEXCORP IT Division">
    <meta name="department" content="Information Technology">
    <meta name="classification" content="INTERNAL USE ONLY">
    <meta name="revisit-after" content="1 day">

    <!-- Open Graph (for internal share previews) -->
    <meta property="og:title" content="NEXCORP Employee Intranet Portal">
    <meta property="og:description" content="Your central hub for all internal systems, services, and enterprise tools.">
    <meta property="og:type" content="website">

    <title>NEXCORP Intranet | Employee Portal — Home</title>

    <!-- =============================================
         GOOGLE FONTS — Loaded locally-safe fallbacks
         ============================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* ==============================================
           CSS CUSTOM PROPERTIES — Design System Tokens
           ============================================== */
        :root {
            --navy:        #0b1f3a;
            --navy-mid:    #132d52;
            --navy-light:  #1e4276;
            --accent:      #c8922a;
            --accent-lt:   #e6aa44;
            --green:       #1e7d4a;
            --green-lt:    #d4edda;
            --red:         #c0392b;
            --red-lt:      #fdecea;
            --amber:       #b45309;
            --amber-lt:    #fff3cd;
            --blue-link:   #1a5fa8;
            --gray-900:    #111827;
            --gray-800:    #1f2937;
            --gray-700:    #374151;
            --gray-500:    #6b7280;
            --gray-300:    #d1d5db;
            --gray-100:    #f3f4f6;
            --gray-50:     #f9fafb;
            --white:       #ffffff;
            --border:      #d5dce8;
            --shadow-sm:   0 1px 3px rgba(0,0,0,.10);
            --shadow-md:   0 4px 12px rgba(0,0,0,.12);
            --shadow-lg:   0 8px 24px rgba(0,0,0,.16);
            --radius-sm:   4px;
            --radius-md:   8px;
            --radius-lg:   12px;
            --font-sans:   'IBM Plex Sans', 'Segoe UI', Arial, sans-serif;
            --font-mono:   'IBM Plex Mono', 'Courier New', monospace;
            --font-serif:  'Merriweather', Georgia, serif;
            --transition:  all 0.22s ease;
        }

        /* ==============================================
           RESET & BASE
           ============================================== */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; font-size: 15px; }
        body {
            font-family: var(--font-sans);
            background: #eceff4;
            color: var(--gray-900);
            line-height: 1.6;
            min-height: 100vh;
        }
        a { color: var(--blue-link); text-decoration: none; transition: var(--transition); }
        a:hover { color: var(--navy); text-decoration: underline; }
        ul { list-style: none; }
        img { display: block; max-width: 100%; }

        /* ==============================================
           UTILITY CLASSES
           ============================================== */
        .container  { max-width: 1380px; margin: 0 auto; padding: 0 20px; }
        .badge      { display: inline-block; padding: 2px 8px; border-radius: 20px; font-size: .72rem; font-weight: 600; letter-spacing: .04em; text-transform: uppercase; }
        .badge-red  { background: var(--red-lt);   color: var(--red);   }
        .badge-green{ background: var(--green-lt);  color: var(--green); }
        .badge-amber{ background: var(--amber-lt);  color: var(--amber); }
        .badge-navy { background: #dce7f5;          color: var(--navy);  }
        .sr-only    { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0,0,0,0); }

        /* ==============================================
           TOP ANNOUNCEMENT TICKER
           ============================================== */
        .ticker-bar {
            background: var(--navy);
            color: #a8c4e0;
            font-size: .78rem;
            font-family: var(--font-mono);
            padding: 6px 0;
            overflow: hidden;
            white-space: nowrap;
            border-bottom: 2px solid var(--accent);
        }
        .ticker-inner {
            display: inline-block;
            animation: ticker-scroll 48s linear infinite;
        }
        .ticker-inner span { margin: 0 50px; }
        .ticker-inner .tick-label {
            color: var(--accent-lt);
            font-weight: 600;
            margin-right: 8px;
        }
        @keyframes ticker-scroll {
            0%   { transform: translateX(100vw); }
            100% { transform: translateX(-100%); }
        }

        /* ==============================================
           NAVBAR — Top Navigation Bar
           ============================================== */
        .navbar {
            background: var(--navy);
            border-bottom: 3px solid var(--accent);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-md);
        }
        .navbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            max-width: 1380px;
            margin: 0 auto;
            height: 62px;
            gap: 16px;
        }

        /* Logo Block */
        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-shrink: 0;
            text-decoration: none;
        }
        .logo-mark {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, var(--accent), var(--accent-lt));
            border-radius: 6px;
            display: flex; align-items: center; justify-content: center;
            font-family: var(--font-mono);
            font-weight: 600;
            font-size: 1rem;
            color: var(--navy);
            letter-spacing: -.03em;
            flex-shrink: 0;
        }
        .brand-text { line-height: 1.15; }
        .brand-name {
            font-size: 1.08rem;
            font-weight: 700;
            color: var(--white);
            letter-spacing: .04em;
        }
        .brand-sub {
            font-size: .68rem;
            color: #7a9abf;
            font-family: var(--font-mono);
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        /* Nav Links */
        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 2px;
            flex: 1;
            justify-content: center;
        }
        .nav-link {
            color: #b0c8e0;
            font-size: .82rem;
            font-weight: 500;
            padding: 6px 13px;
            border-radius: var(--radius-sm);
            transition: var(--transition);
            white-space: nowrap;
            letter-spacing: .02em;
            text-decoration: none;
        }
        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,.10);
            color: var(--white);
            text-decoration: none;
        }
        .nav-divider { width: 1px; height: 18px; background: rgba(255,255,255,.15); margin: 0 4px; }

        /* User Info Block */
        .navbar-user {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }
        .nav-icon-btn {
            position: relative;
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 6px;
            width: 34px; height: 34px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            color: #a0bfd8;
            font-size: 1rem;
        }
        .nav-icon-btn:hover { background: rgba(255,255,255,.18); color: #fff; }
        .notif-dot {
            position: absolute; top: 5px; right: 5px;
            width: 7px; height: 7px; border-radius: 50%;
            background: var(--accent);
            border: 1.5px solid var(--navy);
        }
        .user-chip {
            display: flex; align-items: center; gap: 9px;
            background: rgba(255,255,255,.06);
            border: 1px solid rgba(255,255,255,.14);
            border-radius: 6px;
            padding: 5px 11px 5px 7px;
            cursor: pointer;
            transition: var(--transition);
        }
        .user-chip:hover { background: rgba(255,255,255,.14); }
        .user-avatar {
            width: 28px; height: 28px; border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), #8b5e1a);
            display: flex; align-items: center; justify-content: center;
            font-size: .72rem; font-weight: 700; color: #fff;
            letter-spacing: -.02em;
        }
        .user-info-mini { line-height: 1.2; }
        .user-name-mini { font-size: .78rem; color: var(--white); font-weight: 600; }
        .user-id-mini   { font-size: .65rem; color: #7a9abf; font-family: var(--font-mono); }

        /* ==============================================
           BREADCRUMB / SYSTEM BAR
           ============================================== */
        .sysbar {
            background: #1c3a5c;
            border-bottom: 1px solid rgba(255,255,255,.07);
            padding: 7px 0;
        }
        .sysbar-inner {
            max-width: 1380px; margin: 0 auto; padding: 0 20px;
            display: flex; align-items: center; justify-content: space-between;
            font-size: .72rem;
        }
        .breadcrumb { display: flex; align-items: center; gap: 6px; color: #7fa8cc; font-family: var(--font-mono); }
        .breadcrumb a { color: #7fa8cc; }
        .breadcrumb .sep { color: #3d6080; }
        .breadcrumb .current { color: #b0cfea; }
        .sysbar-right { display: flex; align-items: center; gap: 16px; color: #6a8faa; }
        .sys-status { display: flex; align-items: center; gap: 5px; }
        .status-dot { width: 7px; height: 7px; border-radius: 50%; background: #22c55e; animation: pulse 2.5s ease infinite; }
        @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.5} }

        /* ==============================================
           SEARCH BAR — Central Search Area
           ============================================== */
        .search-section {
            background: linear-gradient(180deg, var(--navy-mid) 0%, #1a3558 100%);
            padding: 32px 20px 28px;
            border-bottom: 1px solid rgba(255,255,255,.06);
        }
        .search-container { max-width: 860px; margin: 0 auto; }
        .search-label {
            text-align: center;
            margin-bottom: 16px;
        }
        .search-label h2 {
            font-family: var(--font-serif);
            font-size: 1.35rem;
            color: var(--white);
            font-weight: 700;
            margin-bottom: 4px;
        }
        .search-label p { font-size: .8rem; color: #7fa8cc; }

        .search-form {
            display: flex;
            gap: 0;
            box-shadow: var(--shadow-lg);
            border-radius: var(--radius-md);
            overflow: hidden;
            border: 1.5px solid rgba(200,146,42,.4);
            background: rgba(255,255,255,.04);
        }
        .search-scope {
            background: rgba(255,255,255,.06);
            border: none;
            border-right: 1px solid rgba(255,255,255,.1);
            color: #a0bfd8;
            font-family: var(--font-mono);
            font-size: .78rem;
            padding: 0 14px;
            cursor: pointer;
            min-width: 130px;
        }
        .search-scope:focus { outline: none; }
        .search-input {
            flex: 1;
            background: rgba(255,255,255,.06);
            border: none;
            color: var(--white);
            font-family: var(--font-sans);
            font-size: .95rem;
            padding: 14px 18px;
        }
        .search-input::placeholder { color: #5a7d9e; }
        .search-input:focus { outline: none; background: rgba(255,255,255,.1); }
        .search-btn {
            background: var(--accent);
            border: none;
            color: var(--navy);
            font-family: var(--font-sans);
            font-size: .88rem;
            font-weight: 700;
            padding: 0 28px;
            cursor: pointer;
            transition: var(--transition);
            letter-spacing: .04em;
            text-transform: uppercase;
        }
        .search-btn:hover { background: var(--accent-lt); }

        .search-tags {
            display: flex; flex-wrap: wrap; gap: 8px;
            margin-top: 12px;
            justify-content: center;
        }
        .search-tag {
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 20px;
            color: #8ab0d0;
            font-size: .72rem;
            padding: 3px 11px;
            cursor: pointer;
            transition: var(--transition);
            font-family: var(--font-mono);
        }
        .search-tag:hover { background: rgba(255,255,255,.15); color: #fff; }

        /* ==============================================
           MAIN LAYOUT — Sidebar + Content
           ============================================== */
        .main-layout {
            max-width: 1380px;
            margin: 24px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 22px;
            align-items: start;
        }

        /* ==============================================
           SIDEBAR — Employee Quick Access Panel
           ============================================== */
        .sidebar { display: flex; flex-direction: column; gap: 16px; }

        /* Profile Card */
        .profile-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }
        .profile-header {
            background: linear-gradient(135deg, var(--navy), var(--navy-light));
            padding: 20px 18px 16px;
            text-align: center;
        }
        .profile-avatar {
            width: 60px; height: 60px; border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), #7a4d10);
            margin: 0 auto 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.4rem; font-weight: 700; color: #fff;
            border: 3px solid rgba(255,255,255,.25);
            letter-spacing: -.04em;
        }
        .profile-name {
            font-size: .95rem; font-weight: 700; color: #fff; margin-bottom: 3px;
        }
        .profile-role { font-size: .72rem; color: #90b8d8; font-family: var(--font-mono); }
        .profile-id {
            display: inline-block; margin-top: 7px;
            background: rgba(255,255,255,.12); color: var(--accent-lt);
            font-family: var(--font-mono); font-size: .68rem;
            padding: 2px 9px; border-radius: 12px;
        }
        .profile-body { padding: 14px 16px; }
        .profile-stat {
            display: flex; justify-content: space-between; align-items: center;
            padding: 7px 0;
            border-bottom: 1px solid var(--gray-100);
            font-size: .8rem;
        }
        .profile-stat:last-child { border-bottom: none; }
        .stat-label { color: var(--gray-500); }
        .stat-val { font-weight: 600; color: var(--gray-800); font-family: var(--font-mono); font-size: .78rem; }

        /* Leave Balance Widget */
        .leave-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            padding: 16px;
            box-shadow: var(--shadow-sm);
        }
        .widget-title {
            font-size: .78rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: .08em; color: var(--navy);
            margin-bottom: 12px;
            display: flex; align-items: center; gap: 7px;
        }
        .widget-title::after {
            content: ''; flex: 1; height: 1px; background: var(--gray-200);
        }
        .leave-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; }
        .leave-item {
            background: var(--gray-50);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            text-align: center;
            padding: 10px 6px;
        }
        .leave-count { font-size: 1.5rem; font-weight: 700; color: var(--navy); font-family: var(--font-mono); line-height: 1; }
        .leave-type  { font-size: .65rem; color: var(--gray-500); text-transform: uppercase; letter-spacing: .06em; margin-top: 4px; }

        /* Quick Links Sidebar Widget */
        .quicklink-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            padding: 16px;
            box-shadow: var(--shadow-sm);
        }
        .qlink-list { display: flex; flex-direction: column; gap: 3px; }
        .qlink {
            display: flex; align-items: center; gap: 9px;
            padding: 7px 10px;
            border-radius: var(--radius-sm);
            font-size: .82rem; color: var(--gray-700);
            transition: var(--transition);
            text-decoration: none;
        }
        .qlink:hover {
            background: #eef3fa;
            color: var(--navy);
            text-decoration: none;
            padding-left: 14px;
        }
        .qlink-icon {
            width: 24px; height: 24px; border-radius: 5px;
            display: flex; align-items: center; justify-content: center;
            font-size: .78rem; flex-shrink: 0;
        }
        .qi-hr    { background: #dce7f5; color: #1a5fa8; }
        .qi-pay   { background: #d4edda; color: var(--green); }
        .qi-it    { background: #fdecea; color: var(--red); }
        .qi-sec   { background: #fff3cd; color: var(--amber); }
        .qi-train { background: #e8dff5; color: #6b3fa0; }
        .qi-rep   { background: #d6e8ff; color: #0055a5; }

        /* Ticket Counter Widget */
        .ticket-widget {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            padding: 16px;
            box-shadow: var(--shadow-sm);
        }
        .ticket-row {
            display: flex; align-items: center; justify-content: space-between;
            padding: 7px 0;
            border-bottom: 1px dashed var(--gray-200);
            font-size: .8rem;
        }
        .ticket-row:last-child { border-bottom: none; }
        .t-count {
            font-family: var(--font-mono); font-weight: 700; font-size: .95rem;
        }

        /* ==============================================
           CONTENT AREA
           ============================================== */
        .content-area { display: flex; flex-direction: column; gap: 22px; }

        /* ==============================================
           ALERT / ANNOUNCEMENT BANNERS
           ============================================== */
        .alerts-strip { display: flex; flex-direction: column; gap: 8px; }
        .alert-bar {
            border-radius: var(--radius-md);
            padding: 11px 16px;
            display: flex; align-items: flex-start; gap: 11px;
            font-size: .83rem;
            border-left: 4px solid;
        }
        .alert-bar.maint {
            background: #fff8e6;
            border-color: var(--accent);
            color: #7a4a00;
        }
        .alert-bar.info {
            background: #e6f0ff;
            border-color: #1a5fa8;
            color: #0c3566;
        }
        .alert-bar.critical {
            background: #fdecea;
            border-color: var(--red);
            color: #8c1b13;
        }
        .alert-icon { font-size: 1rem; margin-top: 1px; flex-shrink: 0; }
        .alert-text strong { display: block; margin-bottom: 1px; font-weight: 600; }

        /* ==============================================
           SECTION TITLE
           ============================================== */
        .section-head {
            display: flex; align-items: center; justify-content: space-between;
            margin-bottom: 14px;
        }
        .section-title {
            font-family: var(--font-serif);
            font-size: 1.02rem;
            font-weight: 700;
            color: var(--navy);
            display: flex; align-items: center; gap: 9px;
        }
        .section-title-bar {
            width: 4px; height: 18px;
            background: var(--accent);
            border-radius: 2px;
        }
        .see-all-link { font-size: .78rem; color: var(--blue-link); }

        /* ==============================================
           ANNOUNCEMENTS — Notice Board Section
           ============================================== */
        .announcements-section {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            padding: 20px;
            box-shadow: var(--shadow-sm);
        }
        .announce-list { display: flex; flex-direction: column; gap: 1px; }
        .announce-item {
            display: grid;
            grid-template-columns: 54px 1fr auto;
            gap: 14px; align-items: start;
            padding: 14px 12px;
            border-radius: var(--radius-sm);
            transition: var(--transition);
        }
        .announce-item:hover { background: var(--gray-50); }
        .announce-date {
            text-align: center;
            background: var(--navy);
            color: var(--white);
            border-radius: var(--radius-sm);
            padding: 6px 4px;
            line-height: 1.2;
        }
        .date-day  { font-size: 1.3rem; font-weight: 700; font-family: var(--font-mono); display: block; }
        .date-mon  { font-size: .62rem; text-transform: uppercase; letter-spacing: .08em; color: #a0c0d8; display: block; }
        .announce-content h4 { font-size: .88rem; font-weight: 600; color: var(--gray-900); margin-bottom: 3px; }
        .announce-content p  { font-size: .78rem; color: var(--gray-500); line-height: 1.5; }
        .announce-divider { height: 1px; background: var(--gray-100); margin: 0 12px; }

        /* ==============================================
           DEPARTMENT CARD GRID — Main Link Hub
           ============================================== */
        .dept-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(310px, 1fr));
            gap: 16px;
        }

        /* Individual Department Card */
        .dept-card {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        .dept-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-2px);
            border-color: #b8cce0;
        }
        .card-header {
            padding: 13px 16px;
            display: flex; align-items: center; gap: 11px;
            border-bottom: 1px solid var(--border);
        }
        .card-icon {
            width: 36px; height: 36px; border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem; flex-shrink: 0;
        }
        .card-header-text h3 { font-size: .9rem; font-weight: 700; color: var(--navy); line-height: 1.2; }
        .card-header-text p  { font-size: .7rem; color: var(--gray-500); }
        .card-count {
            margin-left: auto; flex-shrink: 0;
            background: var(--gray-100);
            color: var(--gray-600);
            font-family: var(--font-mono);
            font-size: .7rem; font-weight: 600;
            padding: 2px 7px; border-radius: 10px;
        }
        .card-links {
            padding: 10px 14px 12px;
            display: flex; flex-direction: column; gap: 1px;
        }
        /* Individual Link Item inside Card */
        .card-link {
            display: flex; align-items: center; gap: 8px;
            padding: 6px 8px;
            border-radius: var(--radius-sm);
            font-size: .8rem; color: var(--gray-700);
            text-decoration: none;
            transition: var(--transition);
            position: relative;
        }
        .card-link::before {
            content: '';
            width: 5px; height: 5px; border-radius: 50%;
            background: var(--gray-300);
            flex-shrink: 0;
            transition: var(--transition);
        }
        .card-link:hover {
            background: #eef3fa;
            color: var(--navy);
            text-decoration: none;
            padding-left: 12px;
        }
        .card-link:hover::before { background: var(--accent); }
        .link-badge {
            margin-left: auto;
            font-size: .62rem; padding: 1px 6px;
        }

        /* Card accent colours by category */
        .ci-hr    { background: #dce7f5; color: #1a5fa8; }
        .ci-pay   { background: #d4f5e2; color: #166534; }
        .ci-attn  { background: #fef3c7; color: #92400e; }
        .ci-leave { background: #e0f2fe; color: #0369a1; }
        .ci-net   { background: #fde8d8; color: #9a3412; }
        .ci-vpn   { background: #f3e8ff; color: #6b21a8; }
        .ci-emp   { background: #d1fae5; color: #065f46; }
        .ci-it    { background: #fecaca; color: #991b1b; }
        .ci-sec   { background: #fef9c3; color: #854d0e; }
        .ci-train { background: #e8effe; color: #1e40af; }
        .ci-fin   { background: #d0f5e2; color: #14532d; }
        .ci-proc  { background: #f0fdf4; color: #166534; }
        .ci-admin { background: #e0e7ff; color: #3730a3; }
        .ci-app   { background: #fdf4ff; color: #86198f; }
        .ci-rep   { background: #eff6ff; color: #1d4ed8; }
        .ci-comp  { background: #fff7ed; color: #c2410c; }
        .ci-proj  { background: #f0f9ff; color: #0c4a6e; }
        .ci-doc   { background: #fafaf8; color: #44403c; }

        /* ==============================================
           STATISTICS ROW
           ============================================== */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 14px;
        }
        .stat-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 16px;
            display: flex; align-items: center; gap: 14px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }
        .stat-card:hover { box-shadow: var(--shadow-md); transform: translateY(-1px); }
        .stat-icon-wrap {
            width: 46px; height: 46px; border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1.2rem; flex-shrink: 0;
        }
        .stat-data { flex: 1; }
        .stat-num  { font-size: 1.55rem; font-weight: 700; font-family: var(--font-mono); color: var(--navy); line-height: 1; }
        .stat-desc { font-size: .72rem; color: var(--gray-500); margin-top: 3px; }
        .stat-delta { font-size: .72rem; font-weight: 600; margin-top: 4px; }
        .delta-up   { color: var(--green); }
        .delta-dn   { color: var(--red); }

        /* ==============================================
           FOOTER
           ============================================== */
        .footer {
            background: var(--navy);
            color: #6a8faa;
            margin-top: 40px;
            border-top: 3px solid var(--accent);
        }
        .footer-main {
            max-width: 1380px; margin: 0 auto;
            padding: 30px 20px;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 30px;
        }
        .footer-brand { }
        .footer-logo-row {
            display: flex; align-items: center; gap: 11px; margin-bottom: 10px;
        }
        .footer-logo-box {
            width: 34px; height: 34px; border-radius: 5px;
            background: linear-gradient(135deg, var(--accent), var(--accent-lt));
            display: flex; align-items: center; justify-content: center;
            font-family: var(--font-mono); font-size: .88rem;
            font-weight: 700; color: var(--navy);
        }
        .footer-brand-name { font-size: .95rem; font-weight: 700; color: #fff; }
        .footer-brand-sub  { font-size: .65rem; color: #4a6d88; font-family: var(--font-mono); letter-spacing: .06em; text-transform: uppercase; }
        .footer-brand p { font-size: .77rem; line-height: 1.65; max-width: 280px; }
        .footer-col h4 { font-size: .78rem; font-weight: 700; text-transform: uppercase; letter-spacing: .08em; color: #a0bfd8; margin-bottom: 12px; }
        .footer-col ul li { margin-bottom: 7px; }
        .footer-col ul li a {
            font-size: .78rem; color: #5a7d9e;
            transition: var(--transition); text-decoration: none;
        }
        .footer-col ul li a:hover { color: #a0bfd8; }
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,.06);
            padding: 14px 20px;
            max-width: 1380px; margin: 0 auto;
            display: flex; align-items: center; justify-content: space-between;
            font-size: .72rem; color: #3d6080;
            font-family: var(--font-mono);
        }
        .footer-bottom a { color: #3d6080; }
        .footer-bottom a:hover { color: #6a8faa; }
        .footer-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 12px; }
        .footer-tag {
            background: rgba(255,255,255,.05);
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 12px;
            font-family: var(--font-mono);
            font-size: .65rem; color: #3d6080;
            padding: 2px 8px;
        }

        /* ==============================================
           SEARCH RESULTS PANEL (JS-Powered)
           ============================================== */
        #search-results-panel {
            display: none;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            margin-top: 8px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            max-height: 400px;
            overflow-y: auto;
        }
        .result-group-title {
            background: var(--gray-50);
            border-bottom: 1px solid var(--border);
            padding: 8px 16px;
            font-size: .72rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: .08em; color: var(--gray-500);
            font-family: var(--font-mono);
        }
        .result-item {
            padding: 10px 16px;
            border-bottom: 1px solid var(--gray-100);
            display: flex; align-items: center; gap: 10px;
            cursor: pointer; transition: var(--transition);
        }
        .result-item:hover { background: var(--gray-50); }
        .result-item-icon { font-size: .9rem; width: 22px; text-align: center; color: var(--gray-500); }
        .result-item-text { flex: 1; }
        .result-item-name { font-size: .85rem; font-weight: 600; color: var(--gray-900); }
        .result-item-path { font-size: .7rem; color: var(--gray-500); font-family: var(--font-mono); }

        /* ==============================================
           RESPONSIVE BREAKPOINTS
           ============================================== */
        @media (max-width: 1100px) {
            .main-layout { grid-template-columns: 240px 1fr; }
            .stats-row   { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 860px) {
            .main-layout { grid-template-columns: 1fr; }
            .navbar-nav  { display: none; }
            .footer-main { grid-template-columns: 1fr 1fr; }
            .stats-row   { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 540px) {
            .footer-main { grid-template-columns: 1fr; }
            .dept-grid   { grid-template-columns: 1fr; }
            .stats-row   { grid-template-columns: 1fr 1fr; }
        }

        /* ==============================================
           MISC COMPONENTS
           ============================================== */
        .section-block {
            background: var(--white);
            border-radius: var(--radius-lg);
            border: 1px solid var(--border);
            padding: 20px;
            box-shadow: var(--shadow-sm);
        }
        .emp-stats-grid {
            display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;
        }
        .emp-stat-item {
            background: var(--gray-50);
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 12px 14px;
        }
        .emp-stat-num  { font-size: 1.25rem; font-weight: 700; font-family: var(--font-mono); color: var(--navy); }
        .emp-stat-desc { font-size: .72rem; color: var(--gray-500); margin-top: 2px; }
        .tag-strip { display: flex; flex-wrap: wrap; gap: 6px; margin-top: 14px; }
        .keyword-tag {
            background: var(--gray-100); color: var(--gray-600);
            font-family: var(--font-mono); font-size: .68rem;
            padding: 3px 9px; border-radius: 12px;
            border: 1px solid var(--gray-200);
        }
        .print-hide { }
        @media print { .print-hide { display: none; } }
    </style>
</head>
<body>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  TICKER — System-wide broadcast / scroll alerts     ║
     ╚══════════════════════════════════════════════════════╝ -->
<div class="ticker-bar" role="marquee" aria-label="System Announcements">
    <span class="ticker-inner">
        <span><span class="tick-label">⚠ SCHEDULED MAINTENANCE:</span> Payroll System offline Sun 02:00–06:00 IST</span>
        <span><span class="tick-label">📢 NOTICE:</span> Mandatory Cybersecurity Awareness Training due by 30 May 2026</span>
        <span><span class="tick-label">🔐 SECURITY:</span> Enforce MFA on all VPN connections effective immediately</span>
        <span><span class="tick-label">🏢 HR UPDATE:</span> Annual Performance Review cycle open — submit self-assessments by EOD Friday</span>
        <span><span class="tick-label">💉 HEALTH:</span> Corporate health check-up camp — Block B Medical Room, every Thursday</span>
        <span><span class="tick-label">📋 POLICY:</span> Work-from-Home Policy v2.4 in effect from 16 May 2026</span>
    </span>
</div>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  NAVBAR — Primary navigation bar                    ║
     ╚══════════════════════════════════════════════════════╝ -->
<nav class="navbar" role="navigation" aria-label="Main Navigation">
    <div class="navbar-inner">

        <!-- Organization Logo Placeholder -->
        <a href="index.php" class="navbar-brand" aria-label="NEXCORP Home">
            <div class="logo-mark" aria-hidden="true">NX</div>
            <div class="brand-text">
                <div class="brand-name">NEXCORP</div>
                <div class="brand-sub">Employee Intranet Portal</div>
            </div>
        </a>

        <!-- Primary Navigation Links -->
        <ul class="navbar-nav" role="menubar">
            <li role="none"><a href="index.php" class="nav-link active" role="menuitem">🏠 Home</a></li>
            <li role="none"><div class="nav-divider" aria-hidden="true"></div></li>
            <li role="none"><a href="hr_portal.php" class="nav-link" role="menuitem">👤 HR Portal</a></li>
            <li role="none"><a href="it_helpdesk.php" class="nav-link" role="menuitem">🖥 IT Helpdesk</a></li>
            <li role="none"><a href="finance_portal.php" class="nav-link" role="menuitem">💰 Finance</a></li>
            <li role="none"><a href="training_portal.php" class="nav-link" role="menuitem">🎓 Training</a></li>
            <li role="none"><a href="security_portal.php" class="nav-link" role="menuitem">🔐 Security</a></li>
            <li role="none"><div class="nav-divider" aria-hidden="true"></div></li>
            <li role="none"><a href="reports_dashboard.php" class="nav-link" role="menuitem">📊 Reports</a></li>
            <li role="none"><a href="internal_wiki.php" class="nav-link" role="menuitem">📚 Wiki</a></li>
            <li role="none"><a href="admin_panel.php" class="nav-link" role="menuitem">⚙ Admin</a></li>
        </ul>

        <!-- User Info / Notification Block -->
        <div class="navbar-user">
            <div class="nav-icon-btn print-hide" title="System Alerts" aria-label="Notifications">
                🔔
                <span class="notif-dot" aria-label="3 new notifications"></span>
            </div>
            <div class="nav-icon-btn print-hide" title="Help Center" aria-label="Help">❓</div>
            <div class="user-chip" role="button" tabindex="0" aria-label="User profile menu">
                <div class="user-avatar" aria-hidden="true">JM</div>
                <div class="user-info-mini">
                    <div class="user-name-mini">John A. Mitchell</div>
                    <div class="user-id-mini">EMP-2041-KX</div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Breadcrumb / System Status Bar -->
<div class="sysbar" role="navigation" aria-label="Breadcrumb">
    <div class="sysbar-inner">
        <nav class="breadcrumb" aria-label="Page path">
            <a href="index.php">Intranet</a>
            <span class="sep" aria-hidden="true">›</span>
            <span class="current">Employee Portal — Home</span>
        </nav>
        <div class="sysbar-right">
            <span class="sys-status" title="All systems operational">
                <span class="status-dot" aria-label="System online"></span>
                All Systems Operational
            </span>
            <span>Server: INTRA-SRV-04</span>
            <span>Build: v3.4.1</span>
            <span>16 May 2026</span>
        </div>
    </div>
</div>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  SEARCH SECTION — Internal Enterprise Search Bar    ║
     ╚══════════════════════════════════════════════════════╝ -->
<section class="search-section" aria-label="Internal Search">
    <div class="search-container">
        <div class="search-label">
            <h2>Enterprise Search &amp; Discovery</h2>
            <p>Search across all internal systems, documents, employees, tickets, and knowledge base articles</p>
        </div>

        <!-- Search Bar Placeholder -->
        <div style="position:relative;">
<form class="search-form" role="search" action="search_backend.php" method="GET">
                    <select class="search-scope" aria-label="Search scope" id="search-scope">
                    <option value="all">🔎 All Systems</option>
                    <option value="hr">👤 HR Portal</option>
                    <option value="it">🖥 IT / Helpdesk</option>
                    <option value="finance">💰 Finance</option>
                    <option value="docs">📄 Documents</option>
                    <option value="people">👥 People</option>
                    <option value="tickets">🎫 Tickets</option>
                </select>
                <input
                    type="search"
                    class="search-input"
                    name="q"
                    id="search-input"
                    placeholder="Search employees, systems, documents, tickets…"
                    aria-label="Search query"
                    autocomplete="off"
                >
                <button class="search-btn" id="search-btn" aria-label="Search">Search</button>
</form>

            <!-- JS-powered live search results dropdown -->
            <div id="search-results-panel" role="listbox" aria-label="Search suggestions"></div>
        </div>

        <!-- Quick Search Tags -->
        <div class="search-tags" aria-label="Quick search shortcuts">
            <span class="search-tag" tabindex="0" data-query="salary slip" role="button">Salary Slip</span>
            <span class="search-tag" tabindex="0" data-query="apply leave" role="button">Apply Leave</span>
            <span class="search-tag" tabindex="0" data-query="vpn access" role="button">VPN Access</span>
            <span class="search-tag" tabindex="0" data-query="it ticket" role="button">IT Ticket</span>
            <span class="search-tag" tabindex="0" data-query="soc dashboard" role="button">SOC Dashboard</span>
            <span class="search-tag" tabindex="0" data-query="asset request" role="button">Asset Request</span>
            <span class="search-tag" tabindex="0" data-query="training certification" role="button">Training</span>
            <span class="search-tag" tabindex="0" data-query="employee directory" role="button">Directory</span>
            <span class="search-tag" tabindex="0" data-query="expense claim" role="button">Expense Claim</span>
        </div>
    </div>
</section>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  ALERT BANNERS — Notices / Maintenance              ║
     ╚══════════════════════════════════════════════════════╝ -->
<div style="max-width:1380px;margin:18px auto;padding:0 20px;">
    <div class="alerts-strip" role="alertdialog" aria-label="System notices">
        <div class="alert-bar maint" role="alert">
            <span class="alert-icon">🔧</span>
            <div class="alert-text">
                <strong>Scheduled Maintenance — Payroll &amp; Finance Systems</strong>
                Payroll Portal and Finance ERP will be under maintenance this Sunday 02:00–06:00 IST. Please complete all salary-related transactions before Saturday midnight.
            </div>
        </div>
        <div class="alert-bar info" role="status">
            <span class="alert-icon">📋</span>
            <div class="alert-text">
                <strong>Policy Update — Remote Work &amp; VPN Access Policy v2.4</strong>
                The updated Remote Work Policy is now in effect. All employees must register their home devices in the MDM portal and connect exclusively via corporate VPN.
                <a href="policy_remote_work.php" style="margin-left:8px;font-weight:600;">Read Policy →</a>
            </div>
        </div>
        <div class="alert-bar critical" role="alert">
            <span class="alert-icon">🚨</span>
            <div class="alert-text">
                <strong>SECURITY ADVISORY — Phishing Campaign Detected</strong>
                The SOC team has identified an active phishing campaign targeting @nexcorp.local email accounts. Do NOT click links from unknown senders. Report suspicious emails to <a href="incident_report.php"><strong>security@nexcorp.local</strong></a>.
            </div>
        </div>
    </div>
</div>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  MAIN LAYOUT — Sidebar + Content columns            ║
     ╚══════════════════════════════════════════════════════╝ -->
<main class="main-layout" role="main">

    <!-- ═══════════════════════════════════
         SIDEBAR — Employee Quick Access
         ═══════════════════════════════════ -->
    <aside class="sidebar" role="complementary" aria-label="Employee quick access">

        <!-- Employee Profile Card -->
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-avatar" aria-hidden="true">JM</div>
                <div class="profile-name">John A. Mitchell</div>
                <div class="profile-role">Senior Systems Engineer</div>
                <span class="profile-id">EMP-2041-KX</span>
            </div>
            <div class="profile-body">
                <div class="profile-stat">
                    <span class="stat-label">Department</span>
                    <span class="stat-val">Information Technology</span>
                </div>
                <div class="profile-stat">
                    <span class="stat-label">Location</span>
                    <span class="stat-val">HQ – Block C, Floor 4</span>
                </div>
                <div class="profile-stat">
                    <span class="stat-label">Last Login</span>
                    <span class="stat-val">Sat, 16 May 2026 01:13:14 IST</span>
                </div>
                <div class="profile-stat">
                    <span class="stat-label">Open Tickets</span>
                    <span class="stat-val" style="color:var(--red);">3 active</span>
                </div>
            </div>
        </div>

        <!-- Leave Balance Widget -->
        <div class="leave-card">
            <div class="widget-title">Leave Balance</div>
            <div class="leave-grid">
                <div class="leave-item">
                    <div class="leave-count">8</div>
                    <div class="leave-type">Casual</div>
                </div>
                <div class="leave-item">
                    <div class="leave-count">5</div>
                    <div class="leave-type">Sick</div>
                </div>
                <div class="leave-item">
                    <div class="leave-count">14</div>
                    <div class="leave-type">Earned</div>
                </div>
            </div>
            <a href="hr_leave.php" class="card-link" style="margin-top:10px;display:flex;">→ Apply for Leave</a>
        </div>

        <!-- Quick Access Links Widget -->
        <div class="quicklink-card">
            <div class="widget-title">Quick Access</div>
            <ul class="qlink-list" role="list">
                <li><a href="hr_leave.php" class="qlink"><span class="qlink-icon qi-hr">👤</span>Apply Leave</a></li>
                <li><a href="payroll_salary_slip.php" class="qlink"><span class="qlink-icon qi-pay">💰</span>Download Salary Slip</a></li>
                <li><a href="it_ticket_new.php" class="qlink"><span class="qlink-icon qi-it">🎫</span>Raise IT Ticket</a></li>
                <li><a href="vpn_access.php" class="qlink"><span class="qlink-icon qi-sec">🔐</span>VPN Access Request</a></li>
                <li><a href="training_portal.php" class="qlink"><span class="qlink-icon qi-train">🎓</span>My Training Dashboard</a></li>
                <li><a href="reports_dashboard.php" class="qlink"><span class="qlink-icon qi-rep">📊</span>Reports Dashboard</a></li>
                <li><a href="asset_management.php" class="qlink"><span class="qlink-icon qi-it">🖥</span>Request Asset</a></li>
                <li><a href="visitor_pass.php" class="qlink"><span class="qlink-icon qi-hr">🪪</span>Visitor Pass</a></li>
                <li><a href="expense_claim.php" class="qlink"><span class="qlink-icon qi-pay">🧾</span>Expense Claim</a></li>
                <li><a href="employee_directory.php" class="qlink"><span class="qlink-icon qi-hr">📇</span>Employee Directory</a></li>
                <li><a href="soc_dashboard.php" class="qlink"><span class="qlink-icon qi-sec">🛡</span>SOC Dashboard</a></li>
                <li><a href="internal_wiki.php" class="qlink"><span class="qlink-icon qi-train">📚</span>Internal Wiki</a></li>
            </ul>
        </div>

        <!-- Open Ticket Widget -->
        <div class="ticket-widget">
            <div class="widget-title">My IT Tickets</div>
            <div class="ticket-row">
                <span>TKT-2024-0891</span>
                <span class="badge badge-amber t-count">In Progress</span>
            </div>
            <div class="ticket-row">
                <span>TKT-2024-0876</span>
                <span class="badge badge-green t-count">Resolved</span>
            </div>
            <div class="ticket-row">
                <span>TKT-2024-0863</span>
                <span class="badge badge-navy t-count">Open</span>
            </div>
            <a href="it_my_tickets.php" class="card-link" style="margin-top:10px;display:flex;">→ View All Tickets</a>
        </div>

        <!-- Employee Stats Sidebar -->
        <div class="section-block">
            <div class="widget-title">Organisation Stats</div>
            <div class="emp-stats-grid">
                <div class="emp-stat-item">
                    <div class="emp-stat-num">4,812</div>
                    <div class="emp-stat-desc">Total Employees</div>
                </div>
                <div class="emp-stat-item">
                    <div class="emp-stat-num">38</div>
                    <div class="emp-stat-desc">Departments</div>
                </div>
                <div class="emp-stat-item">
                    <div class="emp-stat-num">96.4%</div>
                    <div class="emp-stat-desc">Attendance Today</div>
                </div>
                <div class="emp-stat-item">
                    <div class="emp-stat-num">142</div>
                    <div class="emp-stat-desc">Open IT Tickets</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- ═══════════════════════════════════
         CONTENT AREA — Main Portal Content
         ═══════════════════════════════════ -->
    <section class="content-area">

        <!-- ── Stats Row ── -->
        <div class="stats-row" aria-label="System statistics">
            <div class="stat-card">
                <div class="stat-icon-wrap" style="background:#dce7f5;font-size:1.3rem;">👤</div>
                <div class="stat-data">
                    <div class="stat-num">4,812</div>
                    <div class="stat-desc">Active Employees</div>
                    <div class="stat-delta delta-up">↑ +23 this month</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrap" style="background:#d4f5e2;font-size:1.3rem;">🎫</div>
                <div class="stat-data">
                    <div class="stat-num">142</div>
                    <div class="stat-desc">Open IT Tickets</div>
                    <div class="stat-delta delta-dn">↓ –8 from yesterday</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrap" style="background:#fef3c7;font-size:1.3rem;">📅</div>
                <div class="stat-data">
                    <div class="stat-num">96.4%</div>
                    <div class="stat-desc">Attendance Today</div>
                    <div class="stat-delta delta-up">↑ Normal range</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon-wrap" style="background:#fecaca;font-size:1.3rem;">🚨</div>
                <div class="stat-data">
                    <div class="stat-num">7</div>
                    <div class="stat-desc">Security Incidents</div>
                    <div class="stat-delta delta-dn">↑ +3 — phishing detected</div>
                </div>
            </div>
        </div>

        <!-- ── Announcements Section ── -->
        <div class="announcements-section" aria-label="Announcements and notices">
            <div class="section-head">
                <h2 class="section-title"><span class="section-title-bar" aria-hidden="true"></span>Announcements &amp; Notices</h2>
                <a href="announcements.php" class="see-all-link">View All →</a>
            </div>
            <div class="announce-list" role="feed">

                <article class="announce-item">
                    <div class="announce-date" aria-label="16 May">
                        <span class="date-day">16</span>
                        <span class="date-mon">May</span>
                    </div>
                    <div class="announce-content">
                        <h4>Annual Performance Review — Self-Assessment Portal Now Open</h4>
                        <p>All employees must complete their self-assessment on the Performance Management System by Friday EOD. Log in to <a href="pms_self_assessment.php">pms_self_assessment.php</a> using your LDAP credentials.</p>
                    </div>
                    <span class="badge badge-navy">HR</span>
                </article>
                <div class="announce-divider" aria-hidden="true"></div>

                <article class="announce-item">
                    <div class="announce-date" aria-label="12 May">
                        <span class="date-day">12</span>
                        <span class="date-mon">May</span>
                    </div>
                    <div class="announce-content">
                        <h4>Mandatory Cybersecurity Awareness Training — Deadline Extended</h4>
                        <p>The deadline for completing Module 4 (Phishing &amp; Social Engineering) has been extended to 30 May 2026. Access via <a href="training_cybersecurity.php">Cybersecurity Training Portal</a>. Non-completion will be escalated to department heads.</p>
                    </div>
                    <span class="badge badge-red">MANDATORY</span>
                </article>
                <div class="announce-divider" aria-hidden="true"></div>

                <article class="announce-item">
                    <div class="announce-date" aria-label="10 May">
                        <span class="date-day">10</span>
                        <span class="date-mon">May</span>
                    </div>
                    <div class="announce-content">
                        <h4>Network Infrastructure Upgrade — Building C WiFi Reconfiguration</h4>
                        <p>IT Infrastructure team will reconfigure the 5GHz wireless network across Block C floors 3–6 this weekend. Employees should use wired connections or connect to <code>NEXCORP-CORP-5G</code> during transition.</p>
                    </div>
                    <span class="badge badge-amber">IT</span>
                </article>
                <div class="announce-divider" aria-hidden="true"></div>

                <article class="announce-item">
                    <div class="announce-date" aria-label="08 May">
                        <span class="date-day">08</span>
                        <span class="date-mon">May</span>
                    </div>
                    <div class="announce-content">
                        <h4>Quarterly Finance Audit — Document Submission Required</h4>
                        <p>Finance division requires all department heads to submit Q2 expenditure reports and vendor invoices by end of week. Submit via the <a href="finance_audit_portal.php">Finance Audit Portal</a>.</p>
                    </div>
                    <span class="badge badge-green">FINANCE</span>
                </article>
                <div class="announce-divider" aria-hidden="true"></div>

                <article class="announce-item">
                    <div class="announce-date" aria-label="05 May">
                        <span class="date-day">05</span>
                        <span class="date-mon">May</span>
                    </div>
                    <div class="announce-content">
                        <h4>New Asset Request Workflow — Hardware Procurement Process Updated</h4>
                        <p>Effective immediately, all hardware asset requests must be raised via the updated <a href="asset_management.php">Asset Management Portal</a> and approved by L2 manager before routing to Procurement. Old requisition forms are discontinued.</p>
                    </div>
                    <span class="badge badge-navy">ADMIN</span>
                </article>
            </div>
        </div>

        <!-- ─────────────────────────────────────────────────────────
             DEPARTMENT LINK CARDS — Crawlable Internal System Links
             Each card represents a category with multiple sub-links
             ───────────────────────────────────────────────────────── -->
        <div>
            <div class="section-head">
                <h2 class="section-title"><span class="section-title-bar" aria-hidden="true"></span>Internal Systems &amp; Services</h2>
                <a href="site_map.php" class="see-all-link">Full Site Map →</a>
            </div>
            <div class="dept-grid" role="list" aria-label="Department system categories">

                <!-- ══ CARD 1: HR Systems ══ -->
                <article class="dept-card" role="listitem" aria-label="HR Systems">
                    <div class="card-header">
                        <div class="card-icon ci-hr">👤</div>
                        <div class="card-header-text">
                            <h3>HR Systems</h3>
                            <p>Human Resources &amp; Employee Lifecycle</p>
                        </div>
                        <span class="card-count">9 links</span>
                    </div>
                    <nav class="card-links" aria-label="HR Systems links">
                        <a href="hr_portal.php"            class="card-link">Employee Self Service Portal</a>
                        <a href="hr_leave.php"             class="card-link">Apply Leave / Leave Request</a>
                        <a href="hr_leave_status.php"      class="card-link">Leave Status Tracker</a>
                        <a href="hr_employee_profile.php"  class="card-link">Employee Profile &amp; Update</a>
                        <a href="hr_onboarding.php"        class="card-link">New Employee Onboarding</a>
                        <a href="employee_directory.php"   class="card-link">Employee Directory &amp; Org Chart</a>
                        <a href="hr_policy_hub.php"        class="card-link">HR Policy Documents Hub</a>
                        <a href="hr_exit_clearance.php"    class="card-link">Exit &amp; Clearance Form</a>
                        <a href="hr_grievance.php"         class="card-link">Grievance Redressal Portal <span class="badge badge-navy link-badge">New</span></a>
                    </nav>
                </article>

                <!-- ══ CARD 2: Payroll Systems ══ -->
                <article class="dept-card" role="listitem" aria-label="Payroll Systems">
                    <div class="card-header">
                        <div class="card-icon ci-pay">💰</div>
                        <div class="card-header-text">
                            <h3>Payroll Systems</h3>
                            <p>Salary, Reimbursements &amp; Benefits</p>
                        </div>
                        <span class="card-count">8 links</span>
                    </div>
                    <nav class="card-links" aria-label="Payroll links">
                        <a href="payroll_system.php"          class="card-link">Payroll Processing System</a>
                        <a href="payroll_salary_slip.php"     class="card-link">Salary Slip Download Portal</a>
                        <a href="payroll_tax_declaration.php" class="card-link">Income Tax Declaration</a>
                        <a href="payroll_form16.php"          class="card-link">Form 16 / Tax Certificate</a>
                        <a href="expense_claim.php"           class="card-link">Expense Reimbursement Claim</a>
                        <a href="payroll_pf_portal.php"       class="card-link">Provident Fund (PF) Portal</a>
                        <a href="payroll_advance.php"         class="card-link">Salary Advance Request</a>
                        <a href="payroll_arrears.php"         class="card-link">Arrears &amp; Deductions Log</a>
                    </nav>
                </article>

                <!-- ══ CARD 3: Attendance System ══ -->
                <article class="dept-card" role="listitem" aria-label="Attendance">
                    <div class="card-header">
                        <div class="card-icon ci-attn">📅</div>
                        <div class="card-header-text">
                            <h3>Attendance System</h3>
                            <p>Time Tracking &amp; Workforce Monitoring</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Attendance links">
                        <a href="attendance_portal.php"         class="card-link">Attendance Dashboard</a>
                        <a href="attendance_mark.php"           class="card-link">Mark Attendance (Manual Override)</a>
                        <a href="attendance_regularize.php"     class="card-link">Regularize Attendance Entry</a>
                        <a href="attendance_report.php"         class="card-link">Monthly Attendance Report</a>
                        <a href="attendance_biometric.php"      class="card-link">Biometric Device Management</a>
                        <a href="wfh_register.php"              class="card-link">Work-From-Home Register <span class="badge badge-green link-badge">Updated</span></a>
                    </nav>
                </article>

                <!-- ══ CARD 4: Leave Management ══ -->
                <article class="dept-card" role="listitem" aria-label="Leave Management">
                    <div class="card-header">
                        <div class="card-icon ci-leave">🏖</div>
                        <div class="card-header-text">
                            <h3>Leave Management</h3>
                            <p>Leave Requests, Approvals &amp; Encashment</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Leave management links">
                        <a href="hr_leave.php"            class="card-link">Apply for Leave</a>
                        <a href="leave_approvals.php"     class="card-link">Manager Leave Approval Queue</a>
                        <a href="leave_calendar.php"      class="card-link">Team Leave Calendar</a>
                        <a href="leave_encashment.php"    class="card-link">Leave Encashment Request</a>
                        <a href="leave_policy.php"        class="card-link">Leave Policy &amp; Holiday List</a>
                        <a href="comp_off_request.php"    class="card-link">Compensatory Off Request</a>
                    </nav>
                </article>

                <!-- ══ CARD 5: Network Tools ══ -->
                <article class="dept-card" role="listitem" aria-label="Network Tools">
                    <div class="card-header">
                        <div class="card-icon ci-net">🌐</div>
                        <div class="card-header-text">
                            <h3>Network Tools</h3>
                            <p>Infrastructure, Monitoring &amp; Diagnostics</p>
                        </div>
                        <span class="card-count">7 links</span>
                    </div>
                    <nav class="card-links" aria-label="Network tools links">
                        <a href="network_monitoring.php"   class="card-link">Network Monitoring Dashboard</a>
                        <a href="bandwidth_monitor.php"    class="card-link">Bandwidth Usage Monitor</a>
                        <a href="dns_lookup_tool.php"      class="card-link">Internal DNS Lookup Tool</a>
                        <a href="ip_request.php"           class="card-link">Static IP / VLAN Request</a>
                        <a href="firewall_rule_request.php" class="card-link">Firewall Rule Request Form</a>
                        <a href="network_topology.php"     class="card-link">Network Topology Map</a>
                        <a href="noc_dashboard.php"        class="card-link">NOC Live Dashboard <span class="badge badge-red link-badge">Live</span></a>
                    </nav>
                </article>

                <!-- ══ CARD 6: VPN Access ══ -->
                <article class="dept-card" role="listitem" aria-label="VPN Access">
                    <div class="card-header">
                        <div class="card-icon ci-vpn">🔒</div>
                        <div class="card-header-text">
                            <h3>VPN &amp; Remote Access</h3>
                            <p>Secure Remote Connectivity</p>
                        </div>
                        <span class="card-count">5 links</span>
                    </div>
                    <nav class="card-links" aria-label="VPN links">
                        <a href="vpn_access.php"              class="card-link">VPN Access Request Portal</a>
                        <a href="vpn_client_download.php"     class="card-link">VPN Client Download &amp; Setup Guide</a>
                        <a href="vpn_mfa_setup.php"           class="card-link">MFA / 2FA Enrollment for VPN <span class="badge badge-red link-badge">Required</span></a>
                        <a href="remote_desktop.php"          class="card-link">Remote Desktop Gateway (RDP)</a>
                        <a href="vpn_usage_policy.php"        class="card-link">VPN Acceptable Use Policy</a>
                    </nav>
                </article>

                <!-- ══ CARD 7: Employee Services ══ -->
                <article class="dept-card" role="listitem" aria-label="Employee Services">
                    <div class="card-header">
                        <div class="card-icon ci-emp">🏢</div>
                        <div class="card-header-text">
                            <h3>Employee Services</h3>
                            <p>Facilities, Identity &amp; General Services</p>
                        </div>
                        <span class="card-count">8 links</span>
                    </div>
                    <nav class="card-links" aria-label="Employee services links">
                        <a href="employee_id_request.php"   class="card-link">Employee ID Card Request</a>
                        <a href="visitor_pass.php"          class="card-link">Visitor Pass System</a>
                        <a href="parking_management.php"    class="card-link">Parking Slot Management</a>
                        <a href="cafeteria_menu.php"        class="card-link">Cafeteria Menu &amp; Meal Booking</a>
                        <a href="transport_booking.php"     class="card-link">Corporate Transport Booking</a>
                        <a href="relocation_support.php"    class="card-link">Relocation &amp; Transfer Support</a>
                        <a href="health_insurance.php"      class="card-link">Health Insurance Policy &amp; Claims</a>
                        <a href="employee_benefits.php"     class="card-link">Employee Benefits &amp; Perks</a>
                    </nav>
                </article>

                <!-- ══ CARD 8: IT Helpdesk ══ -->
                <article class="dept-card" role="listitem" aria-label="IT Helpdesk">
                    <div class="card-header">
                        <div class="card-icon ci-it">🖥</div>
                        <div class="card-header-text">
                            <h3>IT Helpdesk</h3>
                            <p>Support Tickets &amp; IT Service Management</p>
                        </div>
                        <span class="card-count">8 links</span>
                    </div>
                    <nav class="card-links" aria-label="IT Helpdesk links">
                        <a href="it_helpdesk.php"         class="card-link">IT Helpdesk Home</a>
                        <a href="it_ticket_new.php"       class="card-link">Raise New IT Support Ticket</a>
                        <a href="it_my_tickets.php"       class="card-link">My Open Tickets</a>
                        <a href="it_faq.php"              class="card-link">IT FAQ &amp; Self-Help Knowledge Base</a>
                        <a href="software_request.php"    class="card-link">Software License Request</a>
                        <a href="password_reset.php"      class="card-link">Password Reset &amp; Account Unlock</a>
                        <a href="mdm_portal.php"          class="card-link">Mobile Device Management (MDM)</a>
                        <a href="it_sla_dashboard.php"    class="card-link">IT SLA &amp; Response Metrics</a>
                    </nav>
                </article>

                <!-- ══ CARD 9: Cybersecurity ══ -->
                <article class="dept-card" role="listitem" aria-label="Cybersecurity">
                    <div class="card-header">
                        <div class="card-icon ci-sec">🛡</div>
                        <div class="card-header-text">
                            <h3>Cybersecurity</h3>
                            <p>SOC, Incident Response &amp; Security Tools</p>
                        </div>
                        <span class="card-count">8 links</span>
                    </div>
                    <nav class="card-links" aria-label="Cybersecurity links">
                        <a href="soc_dashboard.php"          class="card-link">SOC Live Dashboard <span class="badge badge-red link-badge">Live</span></a>
                        <a href="incident_report.php"        class="card-link">Incident Reporting Portal</a>
                        <a href="threat_intel_feed.php"      class="card-link">Threat Intelligence Feed</a>
                        <a href="phishing_report.php"        class="card-link">Report Phishing Email</a>
                        <a href="vulnerability_scan.php"     class="card-link">Vulnerability Scan Request</a>
                        <a href="dlp_portal.php"             class="card-link">Data Loss Prevention (DLP) Portal</a>
                        <a href="security_awareness.php"     class="card-link">Security Awareness Hub</a>
                        <a href="pen_test_request.php"       class="card-link">Penetration Testing Request Form</a>
                    </nav>
                </article>

                <!-- ══ CARD 10: Training Portals ══ -->
                <article class="dept-card" role="listitem" aria-label="Training Portals">
                    <div class="card-header">
                        <div class="card-icon ci-train">🎓</div>
                        <div class="card-header-text">
                            <h3>Training &amp; Learning</h3>
                            <p>LMS, Certifications &amp; Skill Development</p>
                        </div>
                        <span class="card-count">7 links</span>
                    </div>
                    <nav class="card-links" aria-label="Training links">
                        <a href="training_portal.php"             class="card-link">Learning Management System (LMS)</a>
                        <a href="training_cybersecurity.php"      class="card-link">Cybersecurity Awareness Training <span class="badge badge-red link-badge">Due</span></a>
                        <a href="training_certification.php"      class="card-link">Certification Request &amp; Reimbursement</a>
                        <a href="training_induction.php"          class="card-link">New Employee Induction Program</a>
                        <a href="training_compliance.php"         class="card-link">Compliance &amp; Ethics Training</a>
                        <a href="training_leadership.php"         class="card-link">Leadership Development Program</a>
                        <a href="training_my_courses.php"         class="card-link">My Enrolled Courses &amp; Progress</a>
                    </nav>
                </article>

                <!-- ══ CARD 11: Finance Systems ══ -->
                <article class="dept-card" role="listitem" aria-label="Finance Systems">
                    <div class="card-header">
                        <div class="card-icon ci-fin">💳</div>
                        <div class="card-header-text">
                            <h3>Finance Systems</h3>
                            <p>ERP, Budgets &amp; Financial Reporting</p>
                        </div>
                        <span class="card-count">7 links</span>
                    </div>
                    <nav class="card-links" aria-label="Finance links">
                        <a href="finance_portal.php"        class="card-link">Finance ERP Home</a>
                        <a href="finance_budget.php"        class="card-link">Department Budget Tracker</a>
                        <a href="finance_invoice.php"       class="card-link">Vendor Invoice Processing</a>
                        <a href="finance_audit_portal.php"  class="card-link">Internal Audit Portal</a>
                        <a href="finance_expense.php"       class="card-link">Travel &amp; Business Expense Approval</a>
                        <a href="finance_petty_cash.php"    class="card-link">Petty Cash Requests</a>
                        <a href="finance_gst_reports.php"   class="card-link">GST / Tax Compliance Reports</a>
                    </nav>
                </article>

                <!-- ══ CARD 12: Procurement ══ -->
                <article class="dept-card" role="listitem" aria-label="Procurement">
                    <div class="card-header">
                        <div class="card-icon ci-proc">📦</div>
                        <div class="card-header-text">
                            <h3>Procurement</h3>
                            <p>Vendor Management &amp; Purchase Orders</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Procurement links">
                        <a href="procurement_portal.php"     class="card-link">Procurement Portal Home</a>
                        <a href="purchase_order.php"         class="card-link">Create Purchase Order</a>
                        <a href="vendor_registration.php"    class="card-link">Vendor Registration &amp; Empanelment</a>
                        <a href="indent_request.php"         class="card-link">Indent / Material Request</a>
                        <a href="goods_receipt.php"          class="card-link">Goods Receipt Note (GRN)</a>
                        <a href="procurement_reports.php"    class="card-link">Procurement Analytics &amp; Reports</a>
                    </nav>
                </article>

                <!-- ══ CARD 13: Admin Systems ══ -->
                <article class="dept-card" role="listitem" aria-label="Admin Systems">
                    <div class="card-header">
                        <div class="card-icon ci-admin">⚙</div>
                        <div class="card-header-text">
                            <h3>Admin Systems</h3>
                            <p>Administration, Facilities &amp; Operations</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Admin systems links">
                        <a href="admin_panel.php"          class="card-link">Administration Control Panel</a>
                        <a href="facility_booking.php"     class="card-link">Conference Room / Facility Booking</a>
                        <a href="asset_management.php"     class="card-link">Asset Management &amp; Inventory</a>
                        <a href="housekeeping_request.php" class="card-link">Housekeeping &amp; Maintenance Request</a>
                        <a href="access_card_request.php"  class="card-link">Building Access Card Request</a>
                        <a href="stationery_request.php"   class="card-link">Stationery &amp; Supplies Request</a>
                    </nav>
                </article>

                <!-- ══ CARD 14: Internal Applications ══ -->
                <article class="dept-card" role="listitem" aria-label="Internal Applications">
                    <div class="card-header">
                        <div class="card-icon ci-app">🧩</div>
                        <div class="card-header-text">
                            <h3>Internal Applications</h3>
                            <p>Custom Tools &amp; Enterprise Apps</p>
                        </div>
                        <span class="card-count">7 links</span>
                    </div>
                    <nav class="card-links" aria-label="Internal applications links">
                        <a href="internal_wiki.php"        class="card-link">Internal Knowledge Wiki</a>
                        <a href="intranet_search.php"      class="card-link">Intranet Search &amp; Indexer</a>
                        <a href="org_chart.php"            class="card-link">Interactive Org Chart</a>
                        <a href="policy_repository.php"    class="card-link">Policy &amp; SOP Repository</a>
                        <a href="app_sso_portal.php"       class="card-link">Single Sign-On (SSO) Dashboard</a>
                        <a href="workflow_engine.php"      class="card-link">Workflow Automation Engine</a>
                        <a href="internal_newsletter.php"  class="card-link">Internal Newsletter Archive</a>
                    </nav>
                </article>

                <!-- ══ CARD 15: Reports Dashboard ══ -->
                <article class="dept-card" role="listitem" aria-label="Reports Dashboard">
                    <div class="card-header">
                        <div class="card-icon ci-rep">📊</div>
                        <div class="card-header-text">
                            <h3>Reports Dashboard</h3>
                            <p>Analytics, BI &amp; Executive Reporting</p>
                        </div>
                        <span class="card-count">7 links</span>
                    </div>
                    <nav class="card-links" aria-label="Reports links">
                        <a href="reports_dashboard.php"    class="card-link">Executive Analytics Dashboard</a>
                        <a href="reports_hr.php"           class="card-link">HR Headcount &amp; Attrition Report</a>
                        <a href="reports_finance.php"      class="card-link">Financial Performance Report</a>
                        <a href="reports_it.php"           class="card-link">IT Infrastructure Health Report</a>
                        <a href="reports_security.php"     class="card-link">Monthly Security Posture Report</a>
                        <a href="reports_attendance.php"   class="card-link">Attendance &amp; Punctuality Analytics</a>
                        <a href="reports_custom.php"       class="card-link">Custom Report Builder <span class="badge badge-navy link-badge">Beta</span></a>
                    </nav>
                </article>

                <!-- ══ CARD 16: Compliance ══ -->
                <article class="dept-card" role="listitem" aria-label="Compliance">
                    <div class="card-header">
                        <div class="card-icon ci-comp">⚖</div>
                        <div class="card-header-text">
                            <h3>Compliance &amp; Legal</h3>
                            <p>Regulatory, Audit &amp; Governance</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Compliance links">
                        <a href="compliance_portal.php"      class="card-link">Compliance Management Portal</a>
                        <a href="compliance_checklist.php"   class="card-link">Regulatory Compliance Checklist</a>
                        <a href="gdpr_data_requests.php"     class="card-link">GDPR / Data Subject Requests</a>
                        <a href="whistleblower_portal.php"   class="card-link">Whistleblower &amp; Ethics Hotline</a>
                        <a href="legal_contract_review.php"  class="card-link">Legal Contract Review Request</a>
                        <a href="audit_log_viewer.php"       class="card-link">Audit Log Viewer (Read-Only)</a>
                    </nav>
                </article>

                <!-- ══ CARD 17: Project Management ══ -->
                <article class="dept-card" role="listitem" aria-label="Project Management">
                    <div class="card-header">
                        <div class="card-icon ci-proj">🗂</div>
                        <div class="card-header-text">
                            <h3>Project Management</h3>
                            <p>Projects, Tasks &amp; Collaboration</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Project management links">
                        <a href="pmo_dashboard.php"         class="card-link">PMO Dashboard &amp; Portfolio View</a>
                        <a href="project_tracker.php"       class="card-link">Project Tracker &amp; Milestones</a>
                        <a href="task_manager.php"          class="card-link">Team Task Manager</a>
                        <a href="timesheet_portal.php"      class="card-link">Timesheet Entry &amp; Approval</a>
                        <a href="sprint_board.php"          class="card-link">Agile Sprint Board</a>
                        <a href="resource_planner.php"      class="card-link">Resource Allocation Planner</a>
                    </nav>
                </article>

                <!-- ══ CARD 18: Document Systems ══ -->
                <article class="dept-card" role="listitem" aria-label="Document Systems">
                    <div class="card-header">
                        <div class="card-icon ci-doc">📄</div>
                        <div class="card-header-text">
                            <h3>Document Systems</h3>
                            <p>DMS, Archives &amp; Records Management</p>
                        </div>
                        <span class="card-count">6 links</span>
                    </div>
                    <nav class="card-links" aria-label="Document systems links">
                        <a href="dms_home.php"              class="card-link">Document Management System (DMS)</a>
                        <a href="dms_upload.php"            class="card-link">Upload &amp; Version Control</a>
                        <a href="dms_search.php"            class="card-link">Full-Text Document Search</a>
                        <a href="records_archive.php"       class="card-link">Records Retention &amp; Archive</a>
                        <a href="digital_signature.php"     class="card-link">Digital Signature Portal (DSC)</a>
                        <a href="template_library.php"      class="card-link">Corporate Template Library</a>
                    </nav>
                </article>

            </div><!-- /dept-grid -->
        </div>

        <!-- ── Search Keyword Cloud (for crawler visibility) ── -->
        <div class="section-block" aria-label="System tags and keywords">
            <div class="section-head" style="margin-bottom:10px;">
                <h2 class="section-title"><span class="section-title-bar" aria-hidden="true"></span>System Tags &amp; Keywords</h2>
            </div>
            <p style="font-size:.8rem;color:var(--gray-500);margin-bottom:10px;">
                Browse the portal by topic. These tags are indexed by the enterprise search engine to improve discoverability of internal systems and documents.
            </p>
            <div class="tag-strip" role="list" aria-label="Searchable keywords">
                <span class="keyword-tag" role="listitem">employee self-service</span><span class="keyword-tag" role="listitem">leave management</span><span class="keyword-tag" role="listitem">payroll</span><span class="keyword-tag" role="listitem">salary slip</span><span class="keyword-tag" role="listitem">attendance</span><span class="keyword-tag" role="listitem">biometric</span><span class="keyword-tag" role="listitem">VPN</span><span class="keyword-tag" role="listitem">remote access</span><span class="keyword-tag" role="listitem">MFA</span><span class="keyword-tag" role="listitem">two-factor authentication</span><span class="keyword-tag" role="listitem">firewall</span><span class="keyword-tag" role="listitem">SOC</span><span class="keyword-tag" role="listitem">SIEM</span><span class="keyword-tag" role="listitem">incident response</span><span class="keyword-tag" role="listitem">threat intelligence</span><span class="keyword-tag" role="listitem">phishing</span><span class="keyword-tag" role="listitem">DLP</span><span class="keyword-tag" role="listitem">vulnerability assessment</span><span class="keyword-tag" role="listitem">penetration testing</span><span class="keyword-tag" role="listitem">VAPT</span><span class="keyword-tag" role="listitem">IT helpdesk</span><span class="keyword-tag" role="listitem">ITSM</span><span class="keyword-tag" role="listitem">ticketing system</span><span class="keyword-tag" role="listitem">asset management</span><span class="keyword-tag" role="listitem">software license</span><span class="keyword-tag" role="listitem">password reset</span><span class="keyword-tag" role="listitem">MDM</span><span class="keyword-tag" role="listitem">training</span><span class="keyword-tag" role="listitem">LMS</span><span class="keyword-tag" role="listitem">certification</span><span class="keyword-tag" role="listitem">compliance</span><span class="keyword-tag" role="listitem">GDPR</span><span class="keyword-tag" role="listitem">audit</span><span class="keyword-tag" role="listitem">whistleblower</span><span class="keyword-tag" role="listitem">finance ERP</span><span class="keyword-tag" role="listitem">budget</span><span class="keyword-tag" role="listitem">invoice</span><span class="keyword-tag" role="listitem">procurement</span><span class="keyword-tag" role="listitem">purchase order</span><span class="keyword-tag" role="listitem">vendor</span><span class="keyword-tag" role="listitem">project management</span><span class="keyword-tag" role="listitem">PMO</span><span class="keyword-tag" role="listitem">timesheet</span><span class="keyword-tag" role="listitem">sprint</span><span class="keyword-tag" role="listitem">agile</span><span class="keyword-tag" role="listitem">document management</span><span class="keyword-tag" role="listitem">digital signature</span><span class="keyword-tag" role="listitem">records management</span><span class="keyword-tag" role="listitem">HR</span><span class="keyword-tag" role="listitem">onboarding</span><span class="keyword-tag" role="listitem">grievance</span><span class="keyword-tag" role="listitem">org chart</span><span class="keyword-tag" role="listitem">SSO</span><span class="keyword-tag" role="listitem">workflow</span><span class="keyword-tag" role="listitem">internal wiki</span><span class="keyword-tag" role="listitem">knowledge base</span><span class="keyword-tag" role="listitem">policy repository</span><span class="keyword-tag" role="listitem">bandwidth</span><span class="keyword-tag" role="listitem">DNS</span><span class="keyword-tag" role="listitem">network monitoring</span><span class="keyword-tag" role="listitem">NOC</span><span class="keyword-tag" role="listitem">VLAN</span><span class="keyword-tag" role="listitem">expense claim</span><span class="keyword-tag" role="listitem">Form 16</span><span class="keyword-tag" role="listitem">PF portal</span><span class="keyword-tag" role="listitem">performance review</span><span class="keyword-tag" role="listitem">exit clearance</span><span class="keyword-tag" role="listitem">relocation</span><span class="keyword-tag" role="listitem">parking</span><span class="keyword-tag" role="listitem">transport booking</span><span class="keyword-tag" role="listitem">health insurance</span><span class="keyword-tag" role="listitem">cafeteria</span><span class="keyword-tag" role="listitem">visitor pass</span><span class="keyword-tag" role="listitem">access card</span><span class="keyword-tag" role="listitem">stationery request</span><span class="keyword-tag" role="listitem">cybersecurity awareness</span><span class="keyword-tag" role="listitem">MITRE ATT&amp;CK</span><span class="keyword-tag" role="listitem">Splunk</span><span class="keyword-tag" role="listitem">endpoint detection</span>            </div>
        </div>

    </section><!-- /content-area -->
</main>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  FOOTER — Site map, legal, and indexed links        ║
     ╚══════════════════════════════════════════════════════╝ -->
<footer class="footer" role="contentinfo" aria-label="Site footer">
    <div class="footer-main">

        <!-- Footer Brand Block -->
        <div class="footer-brand">
            <div class="footer-logo-row">
                <div class="footer-logo-box" aria-hidden="true">NX</div>
                <div>
                    <div class="footer-brand-name">NEXCORP INTRANET PORTAL</div>
                    <div class="footer-brand-sub">Version 3.4.1 | Build 2026.06</div>
                </div>
            </div>
            <p>
                The NEXCORP Employee Intranet Portal is the official internal platform for all
                enterprise systems, HR services, IT support, financial tools, compliance, and
                knowledge management. Access is restricted to authorised NEXCORP employees only.
                All activity is monitored and logged per Information Security Policy v6.2.
            </p>
            <div class="footer-tags" aria-label="Footer system tags">
                <span class="footer-tag">INTERNAL USE ONLY</span>
                <span class="footer-tag">PHP 8.4.20</span>
                <span class="footer-tag">APACHE / XAMPP</span>
                <span class="footer-tag">CLASSIFIED: CONFIDENTIAL</span>
                <span class="footer-tag">ISO 27001 CERTIFIED</span>
            </div>
        </div>

        <!-- Footer Navigation Columns -->
        <div class="footer-col">
            <h4>HR &amp; Payroll</h4>
            <ul>
                <li><a href="hr_portal.php">HR Portal</a></li>
                <li><a href="hr_leave.php">Apply Leave</a></li>
                <li><a href="payroll_salary_slip.php">Salary Slip</a></li>
                <li><a href="payroll_tax_declaration.php">Tax Declaration</a></li>
                <li><a href="attendance_portal.php">Attendance</a></li>
                <li><a href="employee_directory.php">Employee Directory</a></li>
                <li><a href="pms_self_assessment.php">Performance Review</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>IT &amp; Security</h4>
            <ul>
                <li><a href="it_helpdesk.php">IT Helpdesk</a></li>
                <li><a href="it_ticket_new.php">Raise Ticket</a></li>
                <li><a href="vpn_access.php">VPN Access</a></li>
                <li><a href="soc_dashboard.php">SOC Dashboard</a></li>
                <li><a href="incident_report.php">Report Incident</a></li>
                <li><a href="network_monitoring.php">Network Monitor</a></li>
                <li><a href="security_portal.php">Security Portal</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>Tools &amp; Resources</h4>
            <ul>
                <li><a href="internal_wiki.php">Internal Wiki</a></li>
                <li><a href="training_portal.php">Training LMS</a></li>
                <li><a href="reports_dashboard.php">Reports Dashboard</a></li>
                <li><a href="compliance_portal.php">Compliance Portal</a></li>
                <li><a href="dms_home.php">Document System</a></li>
                <li><a href="policy_repository.php">Policy Repository</a></li>
                <li><a href="site_map.php">Full Site Map</a></li>
            </ul>
        </div>
    </div>

    <!-- Footer Bottom Bar -->
    <div class="footer-bottom">
        <div>
            &copy; 2026 NEXCORP Corporation Ltd. All Rights Reserved.
            | <a href="privacy_policy.php">Privacy Policy</a>
            | <a href="acceptable_use_policy.php">Acceptable Use</a>
            | <a href="security_policy.php">Information Security Policy</a>
            | <a href="contact_it.php">Contact IT</a>
        </div>
        <div>
            Powered by NEXCORP ITS &nbsp;|&nbsp; Server: INTRA-SRV-04 &nbsp;|&nbsp;
            16 May 2026 01:13 IST
        </div>
    </div>
</footer>

<!-- ╔══════════════════════════════════════════════════════╗
     ║  JAVASCRIPT — Search, interactivity, crawler demo   ║
     ╚══════════════════════════════════════════════════════╝ -->
<script>
/**
 * NEXCORP INTRANET — Client-Side JavaScript
 * ==========================================
 * - Live search index (in-memory, simulates crawler index)
 * - Search result dropdown
 * - Quick-tag search triggers
 * - Keyboard accessibility
 */

// ─── SEARCH INDEX ───────────────────────────────────────────
// This represents what a crawler would extract and index from
// every internal page. In a real system this would come from
// a MySQL database or a Whoosh / Lucene search backend.
const SEARCH_INDEX = [
    // HR Systems
    { name: 'Employee Self Service Portal',      url: 'hr_portal.php',             cat: 'HR Systems',         icon: '👤' },
    { name: 'Apply Leave / Leave Request',       url: 'hr_leave.php',              cat: 'HR Systems',         icon: '🏖' },
    { name: 'Leave Status Tracker',              url: 'hr_leave_status.php',       cat: 'HR Systems',         icon: '📋' },
    { name: 'Employee Profile Update',           url: 'hr_employee_profile.php',   cat: 'HR Systems',         icon: '👤' },
    { name: 'New Employee Onboarding',           url: 'hr_onboarding.php',         cat: 'HR Systems',         icon: '🆕' },
    { name: 'Employee Directory & Org Chart',   url: 'employee_directory.php',    cat: 'HR Systems',         icon: '📇' },
    { name: 'HR Policy Documents Hub',           url: 'hr_policy_hub.php',         cat: 'HR Systems',         icon: '📄' },
    { name: 'Grievance Redressal Portal',        url: 'hr_grievance.php',          cat: 'HR Systems',         icon: '⚖' },
    { name: 'Exit & Clearance Form',            url: 'hr_exit_clearance.php',     cat: 'HR Systems',         icon: '🚪' },
    // Payroll
    { name: 'Payroll Processing System',         url: 'payroll_system.php',        cat: 'Payroll',            icon: '💰' },
    { name: 'Salary Slip Download Portal',       url: 'payroll_salary_slip.php',   cat: 'Payroll',            icon: '🧾' },
    { name: 'Income Tax Declaration',            url: 'payroll_tax_declaration.php', cat: 'Payroll',          icon: '📋' },
    { name: 'Form 16 / Tax Certificate',         url: 'payroll_form16.php',        cat: 'Payroll',            icon: '📑' },
    { name: 'Expense Reimbursement Claim',       url: 'expense_claim.php',         cat: 'Payroll',            icon: '💳' },
    { name: 'Provident Fund (PF) Portal',        url: 'payroll_pf_portal.php',     cat: 'Payroll',            icon: '🏦' },
    { name: 'Salary Advance Request',            url: 'payroll_advance.php',       cat: 'Payroll',            icon: '💵' },
    // Attendance
    { name: 'Attendance Dashboard',              url: 'attendance_portal.php',     cat: 'Attendance',         icon: '📅' },
    { name: 'Regularize Attendance Entry',       url: 'attendance_regularize.php', cat: 'Attendance',         icon: '✏' },
    { name: 'Biometric Device Management',       url: 'attendance_biometric.php',  cat: 'Attendance',         icon: '🖐' },
    { name: 'Work-From-Home Register',           url: 'wfh_register.php',          cat: 'Attendance',         icon: '🏠' },
    // IT Helpdesk
    { name: 'IT Helpdesk Home',                  url: 'it_helpdesk.php',           cat: 'IT Helpdesk',        icon: '🖥' },
    { name: 'Raise New IT Support Ticket',       url: 'it_ticket_new.php',         cat: 'IT Helpdesk',        icon: '🎫' },
    { name: 'My Open Tickets',                   url: 'it_my_tickets.php',         cat: 'IT Helpdesk',        icon: '📋' },
    { name: 'IT FAQ & Self-Help Knowledge Base', url: 'it_faq.php',                cat: 'IT Helpdesk',        icon: '❓' },
    { name: 'Software License Request',          url: 'software_request.php',      cat: 'IT Helpdesk',        icon: '💿' },
    { name: 'Password Reset & Account Unlock',  url: 'password_reset.php',        cat: 'IT Helpdesk',        icon: '🔑' },
    { name: 'Mobile Device Management (MDM)',     url: 'mdm_portal.php',            cat: 'IT Helpdesk',        icon: '📱' },
    // Network Tools
    { name: 'Network Monitoring Dashboard',      url: 'network_monitoring.php',    cat: 'Network Tools',      icon: '🌐' },
    { name: 'Bandwidth Usage Monitor',           url: 'bandwidth_monitor.php',     cat: 'Network Tools',      icon: '📶' },
    { name: 'Internal DNS Lookup Tool',          url: 'dns_lookup_tool.php',       cat: 'Network Tools',      icon: '🔍' },
    { name: 'Firewall Rule Request Form',        url: 'firewall_rule_request.php', cat: 'Network Tools',      icon: '🔥' },
    { name: 'NOC Live Dashboard',                url: 'noc_dashboard.php',         cat: 'Network Tools',      icon: '📡' },
    // VPN
    { name: 'VPN Access Request Portal',         url: 'vpn_access.php',            cat: 'VPN & Remote',       icon: '🔒' },
    { name: 'VPN Client Download & Setup',      url: 'vpn_client_download.php',   cat: 'VPN & Remote',       icon: '⬇' },
    { name: 'MFA / 2FA Enrollment for VPN',     url: 'vpn_mfa_setup.php',         cat: 'VPN & Remote',       icon: '🔐' },
    { name: 'Remote Desktop Gateway (RDP)',      url: 'remote_desktop.php',        cat: 'VPN & Remote',       icon: '🖥' },
    // Cybersecurity
    { name: 'SOC Live Dashboard',                url: 'soc_dashboard.php',         cat: 'Cybersecurity',      icon: '🛡' },
    { name: 'Incident Reporting Portal',         url: 'incident_report.php',       cat: 'Cybersecurity',      icon: '🚨' },
    { name: 'Threat Intelligence Feed',          url: 'threat_intel_feed.php',     cat: 'Cybersecurity',      icon: '🕵' },
    { name: 'Report Phishing Email',             url: 'phishing_report.php',       cat: 'Cybersecurity',      icon: '🎣' },
    { name: 'Vulnerability Scan Request',        url: 'vulnerability_scan.php',    cat: 'Cybersecurity',      icon: '🔬' },
    { name: 'Data Loss Prevention (DLP)',        url: 'dlp_portal.php',            cat: 'Cybersecurity',      icon: '🛑' },
    { name: 'Penetration Testing Request',       url: 'pen_test_request.php',      cat: 'Cybersecurity',      icon: '💉' },
    // Training
    { name: 'Learning Management System (LMS)', url: 'training_portal.php',       cat: 'Training',           icon: '🎓' },
    { name: 'Cybersecurity Awareness Training', url: 'training_cybersecurity.php', cat: 'Training',           icon: '🔐' },
    { name: 'Certification Reimbursement',      url: 'training_certification.php', cat: 'Training',           icon: '🏅' },
    { name: 'Compliance & Ethics Training',     url: 'training_compliance.php',   cat: 'Training',           icon: '⚖' },
    // Finance
    { name: 'Finance ERP Home',                  url: 'finance_portal.php',        cat: 'Finance',            icon: '💳' },
    { name: 'Department Budget Tracker',         url: 'finance_budget.php',        cat: 'Finance',            icon: '📊' },
    { name: 'Vendor Invoice Processing',         url: 'finance_invoice.php',       cat: 'Finance',            icon: '📄' },
    { name: 'Internal Audit Portal',             url: 'finance_audit_portal.php',  cat: 'Finance',            icon: '🔍' },
    { name: 'GST / Tax Compliance Reports',     url: 'finance_gst_reports.php',   cat: 'Finance',            icon: '📋' },
    // Procurement
    { name: 'Procurement Portal Home',           url: 'procurement_portal.php',    cat: 'Procurement',        icon: '📦' },
    { name: 'Create Purchase Order',             url: 'purchase_order.php',        cat: 'Procurement',        icon: '🛒' },
    { name: 'Vendor Registration',               url: 'vendor_registration.php',   cat: 'Procurement',        icon: '🏢' },
    { name: 'Indent / Material Request',         url: 'indent_request.php',        cat: 'Procurement',        icon: '📋' },
    // Reports
    { name: 'Executive Analytics Dashboard',     url: 'reports_dashboard.php',     cat: 'Reports',            icon: '📊' },
    { name: 'IT Infrastructure Health Report',   url: 'reports_it.php',            cat: 'Reports',            icon: '🖥' },
    { name: 'Monthly Security Posture Report',   url: 'reports_security.php',      cat: 'Reports',            icon: '🛡' },
    { name: 'Custom Report Builder',             url: 'reports_custom.php',        cat: 'Reports',            icon: '🛠' },
    // Compliance
    { name: 'Compliance Management Portal',      url: 'compliance_portal.php',     cat: 'Compliance',         icon: '⚖' },
    { name: 'GDPR / Data Subject Requests',     url: 'gdpr_data_requests.php',    cat: 'Compliance',         icon: '🔏' },
    { name: 'Whistleblower & Ethics Hotline',   url: 'whistleblower_portal.php',  cat: 'Compliance',         icon: '📞' },
    { name: 'Audit Log Viewer',                  url: 'audit_log_viewer.php',      cat: 'Compliance',         icon: '📋' },
    // Project Management
    { name: 'PMO Dashboard & Portfolio View',   url: 'pmo_dashboard.php',         cat: 'Project Mgmt',       icon: '🗂' },
    { name: 'Project Tracker & Milestones',     url: 'project_tracker.php',       cat: 'Project Mgmt',       icon: '📌' },
    { name: 'Timesheet Entry & Approval',       url: 'timesheet_portal.php',      cat: 'Project Mgmt',       icon: '⏱' },
    { name: 'Agile Sprint Board',                url: 'sprint_board.php',          cat: 'Project Mgmt',       icon: '🏃' },
    // Document Systems
    { name: 'Document Management System (DMS)', url: 'dms_home.php',              cat: 'Documents',          icon: '📄' },
    { name: 'Full-Text Document Search',         url: 'dms_search.php',            cat: 'Documents',          icon: '🔍' },
    { name: 'Digital Signature Portal (DSC)',    url: 'digital_signature.php',     cat: 'Documents',          icon: '✍' },
    { name: 'Corporate Template Library',        url: 'template_library.php',      cat: 'Documents',          icon: '📁' },
    // Admin / Other
    { name: 'Visitor Pass System',               url: 'visitor_pass.php',          cat: 'Employee Services',  icon: '🪪' },
    { name: 'Asset Management & Inventory',     url: 'asset_management.php',      cat: 'Admin Systems',      icon: '🖥' },
    { name: 'Conference Room Booking',           url: 'facility_booking.php',      cat: 'Admin Systems',      icon: '🏢' },
    { name: 'Internal Knowledge Wiki',           url: 'internal_wiki.php',         cat: 'Internal Apps',      icon: '📚' },
    { name: 'Single Sign-On (SSO) Dashboard',   url: 'app_sso_portal.php',        cat: 'Internal Apps',      icon: '🔑' },
    { name: 'Intranet Search & Indexer',        url: 'intranet_search.php',       cat: 'Internal Apps',      icon: '🔎' },
];

// ─── LIVE SEARCH LOGIC ─────────────────────────────────────
const searchInput  = document.getElementById('search-input');
const resultsPanel = document.getElementById('search-results-panel');
const searchBtn    = document.getElementById('search-btn');

/**
 * filterIndex — searches the in-memory index for matching entries.
 * Simulates what a real enterprise crawler / search engine does:
 * tokenise the query, match against name and category, rank results.
 */
function filterIndex(query) {
    if (!query || query.trim().length < 2) return [];
    const q = query.toLowerCase().trim();
    return SEARCH_INDEX
        .filter(item =>
            item.name.toLowerCase().includes(q) ||
            item.cat.toLowerCase().includes(q) ||
            item.url.toLowerCase().includes(q)
        )
        .slice(0, 12); // max 12 results
}

/** renderResults — builds the dropdown HTML */
function renderResults(results, query) {
    if (!results.length) {
        resultsPanel.innerHTML = `
            <div style="padding:16px;font-size:.82rem;color:#6b7280;text-align:center;">
                No internal systems found matching "<strong>${escHtml(query)}</strong>"
                &nbsp;— try the <a href="intranet_search.php?q=${encodeURIComponent(query)}">full search</a>.
            </div>`;
        resultsPanel.style.display = 'block';
        return;
    }
    // Group by category
    const groups = {};
    results.forEach(r => {
        if (!groups[r.cat]) groups[r.cat] = [];
        groups[r.cat].push(r);
    });
    let html = '';
    for (const [cat, items] of Object.entries(groups)) {
        html += `<div class="result-group-title">${escHtml(cat)}</div>`;
        items.forEach(item => {
            html += `
            <div class="result-item" role="option" tabindex="0" data-url="${escHtml(item.url)}"
                 aria-label="${escHtml(item.name)}">
                <span class="result-item-icon">${item.icon}</span>
                <div class="result-item-text">
                    <div class="result-item-name">${highlightQuery(item.name, query)}</div>
                    <div class="result-item-path">${escHtml(item.url)}</div>
                </div>
                <span style="font-size:.72rem;color:#9ca3af;">→</span>
            </div>`;
        });
    }
    resultsPanel.innerHTML = html;
    resultsPanel.style.display = 'block';

    // Bind click / keyboard events on result items
    resultsPanel.querySelectorAll('.result-item').forEach(el => {
        el.addEventListener('click',    () => navigateTo(el.dataset.url));
        el.addEventListener('keydown',  e => { if (e.key === 'Enter') navigateTo(el.dataset.url); });
    });
}

function highlightQuery(text, query) {
    const q = query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
    return escHtml(text).replace(new RegExp(`(${q})`, 'gi'),
        '<mark style="background:#fef08a;border-radius:2px;padding:0 2px;">$1</mark>');
}
function escHtml(str) {
    return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}
function navigateTo(url) {
    // In a real system this would navigate; here we show a demo alert
    resultsPanel.style.display = 'none';
    searchInput.value = '';
    alert('DEMO — Would navigate to: ' + url + '\n\nIn production this PHP page would be served by XAMPP/Apache.');
}
function closePanel() { resultsPanel.style.display = 'none'; }

// ─── EVENT LISTENERS ────────────────────────────────────────
searchInput.addEventListener('input', function () {
    const q = this.value.trim();
    if (q.length < 2) { closePanel(); return; }
    renderResults(filterIndex(q), q);
});

searchInput.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closePanel();
    if (e.key === 'Enter') {
        const q = this.value.trim();
        if (q) window.location.href = 'intranet_search.php?q=' + encodeURIComponent(q);
    }
});

searchBtn.addEventListener('click', function () {
    const q = searchInput.value.trim();
    if (q) window.location.href = 'intranet_search.php?q=' + encodeURIComponent(q);
});

// Close panel when clicking outside
document.addEventListener('click', function (e) {
    if (!e.target.closest('#search-results-panel') && !e.target.closest('#search-input')) {
        closePanel();
    }
});

// Quick search tags
document.querySelectorAll('.search-tag').forEach(tag => {
    tag.addEventListener('click', function () {
        const q = this.dataset.query;
        searchInput.value = q;
        renderResults(filterIndex(q), q);
        searchInput.focus();
    });
    tag.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.click();
        }
    });
});

// ─── CONSOLE BRAND (for DevTools inspection) ────────────────
console.log('%cNEXCORP INTRANET PORTAL', 'font-size:16px;font-weight:bold;color:#c8922a;');
console.log('%cVersion 3.4.1 | Internal Enterprise Search Demo | PHP + Vanilla JS', 'color:#6b7280;font-size:12px;');
console.log('%cSearch index contains ' + SEARCH_INDEX.length + ' indexed internal endpoints.', 'color:#1a5fa8;');
</script>

</body>
</html>
