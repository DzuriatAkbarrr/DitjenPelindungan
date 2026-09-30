<!doctype html> 
<html lang="id">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f7fb">
<title>RuangKerja — KP2MI</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
    :root{--ink:#16223b;
    --muted:#8290a8;
    --line:#edf0f5;
    --blue:#4668e8;
    --bg:#f5f7fb;
    --mint:#dff7ee;
    --amber:#fff1d9;
    --shadow:0 12px 40px #1b2a4a0d}
*{box-sizing:border-box}
body{margin:0;
    background:var(--bg);
    color:var(--ink);
    font-family:'DM Sans',sans-serif;
    font-size:14px}
button,input,select{font:inherit}
button{cursor:pointer}
.app{display:grid;
    grid-template-columns:246px minmax(0,1fr);
    min-height:100vh}
.sidebar{background:#fff;
    border-right:1px solid var(--line);
    padding:26px 17px;
    display:flex;
    flex-direction:column}
.brand{display:flex;
    align-items:center;
    gap:11px;
    padding:0 10px 29px}
.brand-mark{width:38px;
    height:38px;
    border-radius:13px;
    background:linear-gradient(145deg,#6786ff,#425bd8);
    display:grid;
    place-items:center;
    color:#fff;
    box-shadow:0 7px 16px #536fe33b}
.brand-mark svg{width:21px}
.brand-name{font-family:Manrope;
    font-weight:800;
    font-size:16px;
    letter-spacing:-.5px}
.brand-name small{display:block;
    font:500 10px 'DM Sans';
    color:#98a2b4;
    letter-spacing:.4px;
    margin-top:2px}
.workspace{margin:0 7px 26px;
    padding:11px;
    border:1px solid var(--line);
    border-radius:13px;
    display:flex;
    align-items:center;
    gap:10px}
.seal{width:31px;
    height:31px;
    border-radius:10px;
    background:#fff3df;
    color:#bd7812;
    display:grid;
    place-items:center;
    font-size:12px;
    font-weight:700}
.workspace b{font-size:12px;
    display:block}
.workspace span{font-size:10px;
    color:var(--muted)}
.nav-label{font-size:10px;
    font-weight:700;
    color:#a1aabc;
    letter-spacing:1px;
    padding:0 12px;
    margin:5px 0 8px}
.nav{display:grid;
    gap:4px}
.nav button{border:0;
    background:transparent;
    color:#77849b;
    text-align:left;
    padding:11px 12px;
    border-radius:11px;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:12px}
.nav button:hover{background:#f7f8fc}
.nav button.active{background:#eef1ff;
    color:var(--blue)}
.nav svg{width:18px;
    height:18px;
    stroke:currentColor}
.nav .count{margin-left:auto;
    background:#fff;
    border-radius:7px;
    padding:3px 7px;
    font-size:10px}
.side-bottom{margin-top:auto}
.help-card{background:#f6f8ff;
    border:1px solid #e9edff;
    border-radius:14px;
    padding:14px;
    margin:12px 4px 18px}
.help-card strong{font-size:12px}
.help-card p{font-size:11px;
    color:#8792a7;
    line-height:1.6;
    margin:6px 0 10px}
.help-card a{color:var(--blue);
    font-size:11px;
    font-weight:700;
    text-decoration:none}
.profile{display:flex;
    align-items:center;
    gap:10px;
    padding:12px 8px 0;
    border-top:1px solid var(--line)}
.avatar{width:35px;
    height:35px;
    border-radius:12px;
    background:#dce5ff;
    color:#425ed4;
    display:grid;
    place-items:center;
    font-weight:700}
.profile b{font-size:12px;
    display:block}
.profile span{font-size:10px;
    color:var(--muted)}
.main{min-width:0}
.topbar{height:76px;
    background:#ffffffc7;
    backdrop-filter:blur(14px);
    border-bottom:1px solid var(--line);
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 38px;
    position:sticky;
    top:0;
    z-index:4}
.crumb{font-size:12px;
    color:#95a0b1}
.crumb b{color:var(--ink)}
.top-actions{display:flex;
    gap:11px;
    align-items:center}
.role-select{border:1px solid var(--line);
    background:#fff;
    padding:9px 12px;
    border-radius:10px;
    color:#475570;
    font-size:12px;
    font-weight:600}
.icon-btn{width:36px;
    height:36px;
    border:1px solid var(--line);
    border-radius:11px;
    background:white;
    color:#71809a;
    position:relative}
.icon-btn svg{width:17px;
    vertical-align:middle}
.dot{width:6px;
    height:6px;
    background:#ef8765;
    border-radius:50%;
    position:absolute;
    right:8px;
    top:7px}
.content{max-width:1500px;
    padding:31px 38px 50px;
    margin:auto}
.heading{display:flex;
    justify-content:space-between;
    align-items:flex-end;
    margin-bottom:23px}
.eyebrow{text-transform:uppercase;
    font-size:10px;
    letter-spacing:1.5px;
    color:#8a97ad;
    font-weight:700;
    margin-bottom:8px}
.heading h1{font:800 27px Manrope;
    margin:0;
    letter-spacing:-1px}
.heading p{color:var(--muted);
    margin:7px 0 0;
    font-size:13px}
.date-chip{background:white;
    border:1px solid var(--line);
    color:#65728a;
    border-radius:10px;
    padding:10px 13px;
    font-size:11px;
    font-weight:600}
.insight{position:relative;
    overflow:hidden;
    border-radius:18px;
    padding:20px 22px;
    background:linear-gradient(105deg,#202f59 0%,#334f9d 55%,#526fe0 100%);
    color:#fff;
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:20px;
    box-shadow:0 14px 30px #29428224}
.insight:after{content:"";
    position:absolute;
    width:220px;
    height:220px;
    border:1px solid #ffffff18;
    border-radius:50%;
    right:8%;
    top:-150px;
    box-shadow:0 0 0 24px #ffffff09,0 0 0 48px #ffffff08}
.spark{width:39px;
    height:39px;
    flex:none;
    border:1px solid #ffffff37;
    background:#ffffff17;
    border-radius:13px;
    display:grid;
    place-items:center}
.spark svg{width:20px}
.insight-copy{position:relative;
    z-index:1;
    flex:1}
.insight-copy b{font:700 13px Manrope}
.insight-copy p{font-size:12px;
    color:#e0e8ff;
    margin:5px 0 0}
.insight strong{font:800 23px Manrope;
    position:relative;
    z-index:1}
.insight strong small{font:500 10px 'DM Sans';
    display:block;
    text-align:right;
    color:#cfdbff}
.stats{display:grid;
    grid-template-columns:repeat(4,minmax(0,1fr));
    gap:14px;
    margin-bottom:20px}
.stat,.panel{background:#fff;
    border:1px solid #eef0f5;
    border-radius:16px;
    box-shadow:var(--shadow)}
.stat{padding:17px 18px;
    position:relative;
    overflow:hidden}
.stat-top{display:flex;
    justify-content:space-between;
    align-items:center;
    color:#7c8aa1;
    font-size:11px;
    font-weight:600}
.stat-icon{width:31px;
    height:31px;
    border-radius:10px;
    display:grid;
    place-items:center}
.stat-icon svg{width:16px}
.stat:nth-child(1) .stat-icon{background:#eef1ff;
    color:#536de3}
.stat:nth-child(2) .stat-icon{background:#e4f8ef;
    color:#36a875}
.stat:nth-child(3) .stat-icon{background:#fff2de;
    color:#d38a29}
.stat:nth-child(4) .stat-icon{background:#f3eafe;
    color:#9567cd}
.stat-value{font:800 25px Manrope;
    letter-spacing:-1px;
    margin:9px 0 2px}
.stat-foot{font-size:10px;
    color:#9ba5b5}
.trend{color:#38a676;
    font-weight:700}
.grid-main{display:grid;
    grid-template-columns:minmax(0,1.55fr) minmax(290px,.85fr);
    gap:16px;
    margin-bottom:17px}
.panel{padding:19px}
.panel-head{display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:15px}
.panel-title{font:700 14px Manrope}
.panel-sub{font-size:10px;
    color:#98a2b2;
    margin-top:4px}
.text-btn{border:0;
    background:transparent;
    color:var(--blue);
    font-size:11px;
    font-weight:700}
.chart-legend{display:flex;
    gap:14px;
    color:#8995a9;
    font-size:10px}
.legend-dot{display:inline-block;
    width:7px;
    height:7px;
    border-radius:50%;
    margin-right:5px;
    background:#5671e4}
.legend-dot.alt{background:#a6b4ef}
.chart-wrap{height:177px;
    position:relative}
.chart-wrap svg{width:100%;
    height:100%;
    overflow:visible}
.chart-labels{display:flex;
    justify-content:space-between;
    color:#a0aabc;
    font-size:9px;
    margin-top:2px;
    padding:0 4px}
.approval-list{display:grid;
    gap:9px}
.approval-item{display:flex;
    align-items:center;
    gap:10px;
    padding:10px;
    border:1px solid #f0f2f6;
    border-radius:12px}
.doc-icon{width:34px;
    height:36px;
    background:#fff4e5;
    color:#d09133;
    border-radius:9px;
    display:grid;
    place-items:center;
    flex:none}
.doc-icon svg{width:16px}
.approval-info{min-width:0;
    flex:1}
.approval-info b{display:block;
    font-size:11px;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis}
.approval-info span{font-size:9px;
    color:#9aa5b4;
    display:block;
    margin-top:4px}
.pill{font-size:9px;
    font-weight:700;
    padding:5px 8px;
    border-radius:20px;
    white-space:nowrap}
.pending{background:#fff4e2;
    color:#c38425}
.approved{background:#e5f7ef;
    color:#32936b}
.rejected{background:#feebeb;
    color:#d45d5d}
.lower-grid{display:grid;
    grid-template-columns:minmax(0,1.5fr) minmax(270px,.8fr);
    gap:16px}
.table-head{display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:12px}
.search{border:1px solid var(--line);
    border-radius:9px;
    padding:8px 10px;
    color:#8995a9;
    font-size:10px;
    width:144px}
.employee-table{width:100%;
    border-collapse:collapse;
    text-align:left}
.employee-table th{font-size:9px;
    text-transform:uppercase;
    letter-spacing:.6px;
    color:#9aa5b5;
    padding:9px 8px;
    border-bottom:1px solid var(--line)}
.employee-table td{font-size:10px;
    padding:11px 8px;
    border-bottom:1px solid #f3f4f7;
    color:#64728a}
.employee-table tr:last-child td{border-bottom:0}
.person-cell{display:flex;
    align-items:center;
    gap:8px;
    color:#25324b!important;
    font-weight:600}
.mini-avatar{width:27px;
    height:27px;
    border-radius:9px;
    background:#e7ecff;
    color:#536add;
    display:grid;
    place-items:center;
    font-size:9px}
.mini-avatar.green{background:#e6f6ed;
    color:#46a479}
.mini-avatar.orange{background:#fff0df;
    color:#cc8b39}
.mini-avatar.pink{background:#fdeaf1;
    color:#c96989}
.progress{height:5px;
    background:#f0f2f6;
    border-radius:8px;
    width:66px;
    display:inline-block;
    vertical-align:middle;
    margin-right:5px}
.progress i{height:100%;
    display:block;
    background:#627ce8;
    border-radius:8px}
.attendance-foot{font-size:9px;
    color:#a1aaba;
    margin-top:9px}
.activity{display:grid}
.activity-row{display:grid;
    grid-template-columns:27px 1fr;
    gap:10px;
    padding:9px 0;
    position:relative}
.activity-row:not(:last-child):after{content:"";
    position:absolute;
    left:13px;
    top:32px;
    height:calc(100% - 16px);
    border-left:1px dashed #e2e7f0}
.activity-bullet{width:27px;
    height:27px;
    border-radius:9px;
    background:#edf1ff;
    color:#6078e4;
    display:grid;
    place-items:center;
    z-index:1}
.activity-bullet svg{width:13px}
.activity-row:nth-child(2) .activity-bullet{background:#e4f7ed;
    color:#44a77a}
.activity-row:nth-child(3) .activity-bullet{background:#fff3df;
    color:#c89141}
.activity-copy{font-size:10px;
    color:#6f7c92;
    line-height:1.5}
.activity-copy b{color:#34415a}
.activity-copy time{display:block;
    color:#a5aebc;
    font-size:9px;
    margin-top:3px}
.primary{background:#4d69e4;
    color:white;
    border:0;
    border-radius:10px;
    padding:10px 14px;
    font-weight:700;
    font-size:11px;
    box-shadow:0 6px 15px #4d69e433}
.primary:hover{background:#3e5bd8;
    transform:translateY(-1px)}
.section-view{display:none}
.section-view.visible{display:block}
.section-view .panel{min-height:300px}
.toast{position:fixed;
    right:24px;
    bottom:22px;
    background:#20315a;
    color:#fff;
    padding:12px 17px;
    border-radius:12px;
    font-size:12px;
    box-shadow:0 10px 30px #16223b30;
    opacity:0;
    transform:translateY(12px);
    transition:.25s;
    z-index:10}
.toast.show{opacity:1;
    transform:translateY(0)}
.modal-backdrop{position:fixed;
    inset:0;
    background:#16223b70;
    backdrop-filter:blur(4px);
    display:none;
    place-items:center;
    z-index:9;
    padding:20px}
.modal-backdrop.open{display:grid}
.modal{width:min(480px,100%);
    background:#fff;
    border-radius:18px;
    padding:23px;
    box-shadow:0 25px 80px #1020443b}
.modal-head{display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px}
.modal h2{font:800 18px Manrope;
    margin:0}
.close{border:0;
    background:#f4f6fa;
    border-radius:9px;
    width:31px;
    height:31px;
    color:#66738a}
.form-grid{display:grid;
    grid-template-columns:1fr 1fr;
    gap:13px}
.field{display:grid;
    gap:6px}
.field.full{grid-column:1/-1}
.field label{font-size:10px;
    font-weight:700;
    color:#65728a}
.field input,.field select{padding:10px;
    border:1px solid #e8ebf1;
    border-radius:9px;
    color:#45536c;
    outline:none}
.field input:focus,.field select:focus{border-color:#8295ed;
    box-shadow:0 0 0 3px #536fe31a}
.modal-actions{display:flex;
    justify-content:flex-end;
    gap:8px;
    margin-top:18px}
.secondary{border:1px solid var(--line);
    background:#fff;
    border-radius:9px;
    padding:9px 13px;
    color:#748099;
    font-size:11px;
    font-weight:600}
.mobile-toggle{display:none}

    @media(max-width:1100px){.app{grid-template-columns:215px 1fr}
.content{padding:27px 24px}
.topbar{padding:0 24px}
.stats{grid-template-columns:repeat(2,1fr)}
}

    @media(max-width:760px){.app{display:block}
.sidebar{position:fixed;
    z-index:8;
    left:-260px;
    top:0;
    bottom:0;
    width:246px;
    transition:.25s;
    box-shadow:12px 0 30px #14213b17}
.sidebar.open{left:0}
.mobile-toggle{display:inline-grid;
    place-items:center}
.topbar{height:64px;
    padding:0 16px}
.content{padding:24px 15px}
.heading{align-items:flex-start;
    gap:10px}
.heading h1{font-size:23px}
.date-chip{font-size:9px;
    padding:9px}
.insight{padding:15px;
    gap:10px}
.insight-copy p{line-height:1.5}
.insight strong{font-size:19px}
.grid-main,.lower-grid{grid-template-columns:1fr}
.stats{gap:9px}
.stat{padding:13px}
.stat-value{font-size:22px}
.chart-wrap{height:155px}
.panel{padding:15px}
.hide-mobile{display:none}
.crumb{font-size:11px}
.role-select{font-size:10px;
    padding:8px}
.top-actions{gap:7px}
}

    </style>
</head>
<body>  
<div class="app">
<aside class="sidebar" id="sidebar">
    <div class="brand">
<div class="brand-mark">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M12 3v18M3 12h18M5.6 5.6l12.8 12.8m0-12.8L5.6 18.4"/>
<circle cx="12" cy="12" r="8.5"/>
</svg>
</div>
<div class="brand-name">RuangKerja<small>KP2MI · WORKSPACE</small>
</div>
</div>
    <div class="workspace">
<div class="seal">KP</div>
<div>
<b>Kementerian P2MI</b>
<span>Dashboard kepegawaian</span>
</div>
</div>
    <div class="nav-label">MENU UTAMA</div>
    <nav class="nav" id="nav">
        <button class="active" data-page="overview">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<rect x="3" y="3" width="8" height="8" rx="2"/>
<rect x="14" y="3" width="7" height="5" rx="2"/>
<rect x="14" y="11" width="7" height="10" rx="2"/>
<rect x="3" y="14" width="8" height="7" rx="2"/>
</svg>Ringkasan</button>
        <button data-page="attendance">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<rect x="3" y="5" width="18" height="16" rx="3"/>
<path d="M16 3v4M8 3v4M3 10h18m-13 5 2 2 4-4"/>
</svg>Rekap absensi</button>
        <button data-page="letters">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<path d="M7 3h7l5 5v13H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"/>
<path d="M14 3v6h6M8 13h7m-7 4h7"/>
</svg>Surat perjalanan dinas <span class="count" id="letter-count">03</span>
</button>
        <button data-page="approvals">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<circle cx="12" cy="12" r="9"/>
<path d="m8 12 2.5 2.5L16 9"/>
</svg>Persetujuan <span class="count" id="pending-count">03</span>
</button>
        <div class="nav-label" style="margin-top:22px">PENGELOLAAN</div>
        <button data-page="employees">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<circle cx="9" cy="8" r="4"/>
<path d="M2 21v-2a7 7 0 0 1 14 0v2M16 4a4 4 0 0 1 0 8m2 3a6 6 0 0 1 4 6"/>
</svg>Data pegawai</button>
        <button data-page="reports">
<svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
<path d="M4 19V5m0 14h17M7 15l4-4 3 2 6-7"/>
</svg>Laporan</button>
        @if (auth()->user()->role === 'kepegawaian')<a href="{{ route('users.index') }}" style="text-decoration:none;color:#77849b;padding:11px 12px;border-radius:11px;font-weight:600;display:flex;align-items:center;gap:12px;font-size:13px">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" style="width:18px;height:18px">
<circle cx="9" cy="8" r="4"/>
<path d="M2 21v-2a7 7 0 0 1 14 0v2m2-13a4 4 0 0 1 0 8m1 2a6 6 0 0 1 3 5"/>
</svg>Pengguna</a>
@endif
    </nav>
    <div class="side-bottom">
<div class="help-card">
<strong>Butuh bantuan?</strong>
<p>Temukan panduan penggunaan dashboard kepegawaian.</p>
<a href="#" onclick="toast('Pusat bantuan segera tersedia');return false">Buka pusat bantuan ↗</a>
</div>
<div class="profile">
<div class="avatar">{{ collect(explode(' ', auth()->user()->name))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}</div>
<div>
<b id="profile-name">{{ auth()->user()->name }}</b>
<span id="profile-role">{{ auth()->user()->role === 'sesditjen' ? 'Sesditjen · Approver' : 'Administrator · Kepegawaian' }}</span>
</div>
</div>
</div>
</aside>
<main class="main">
<header class="topbar">
<div style="display:flex;align-items:center;gap:11px">
<button class="icon-btn mobile-toggle" id="menu-toggle" aria-label="Buka menu">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M4 7h16M4 12h16M4 17h16"/>
</svg>
</button>
<div class="crumb">Workspace <span style="margin:0 7px">/</span> <b id="crumb-page">Ringkasan</b>
</div>
</div>
<div class="top-actions">
<button class="icon-btn hide-mobile" aria-label="Bantuan">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="12" cy="12" r="9"/>
<path d="M9.6 9a2.5 2.5 0 1 1 4.6 1.4c-1 1.1-2.2 1.2-2.2 3.1M12 17h.01"/>
</svg>
</button>
<span class="role-select">{{ auth()->user()->role === 'sesditjen' ? 'Sesditjen' : 'Kepegawaian' }}</span>
<form method="POST" action="{{ route('logout') }}">
@csrf<button class="role-select" type="submit">Keluar</button>
</form>
</div>
</header>
<div class="content">
    <section id="overview" class="section-view visible">
        <div class="heading">
<div>
<div class="eyebrow">SENIN, 28 SEPTEMBER 2026</div>
<h1>Selamat pagi, <span id="greeting-name">Nadia</span> <span style="font-size:22px">✦</span>
</h1>
<p>Ringkasan aktivitas dan kondisi kepegawaian hari ini.</p>
</div>
<div class="date-chip">◷ &nbsp; Periode · September 2026</div>
</div>
        <div class="insight">
<div class="spark">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
<path d="m12 2 1.8 6.2L20 10l-6.2 1.8L12 18l-1.8-6.2L4 10l6.2-1.8L12 2Zm7 13 .9 3.1L23 19l-3.1.9L19 23l-.9-3.1L15 19l3.1-.9L19 15Z"/>
</svg>
</div>
<div class="insight-copy">
<b>Insight kepegawaian hari ini</b>
<p>Disiplin kehadiran naik <b>4,8%</b> dibanding minggu lalu. Ada 3 surat perjalanan dinas menunggu persetujuan.</p>
</div>
<strong>96,4%<small>tingkat kehadiran</small>
</strong>
</div>
        <div class="stats">
            <article class="stat">
<div class="stat-top">
<span>Total pegawai</span>
<span class="stat-icon">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="9" cy="8" r="4"/>
<path d="M2 21v-2a7 7 0 0 1 14 0v2m2-13a4 4 0 0 1 0 8m1 2a6 6 0 0 1 3 5"/>
</svg>
</span>
</div>
<div class="stat-value">1.284</div>
<div class="stat-foot">
<span class="trend">↗ 2,4%</span> dari bulan lalu</div>
</article>
            <article class="stat">
<div class="stat-top">
<span>Hadir hari ini</span>
<span class="stat-icon">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M20 7 10 17l-5-5"/>
<circle cx="12" cy="12" r="10"/>
</svg>
</span>
</div>
<div class="stat-value">1.239</div>
<div class="stat-foot">
<span class="trend">96,4%</span> dari total pegawai</div>
</article>
            <article class="stat">
<div class="stat-top">
<span>Menunggu persetujuan</span>
<span class="stat-icon">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="12" cy="12" r="9"/>
<path d="M12 7v5l3 2"/>
</svg>
</span>
</div>
<div class="stat-value" id="pending-stat">03</div>
<div class="stat-foot">Surat perjalanan dinas perlu ditinjau</div>
</article>
            <article class="stat">
<div class="stat-top">
<span>Surat perjalanan dinas bulan ini</span>
<span class="stat-icon">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M7 3h7l5 5v13H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"/>
<path d="M14 3v6h6m-12 4h7m-7 4h5"/>
</svg>
</span>
</div>
<div class="stat-value" id="letter-stat">28</div>
<div class="stat-foot">
<span class="trend">↗ 12%</span> dari bulan lalu</div>
</article>
        </div>
        <div class="grid-main">
            <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Tren kehadiran</div>
<div class="panel-sub">Rata-rata kehadiran pegawai · 7 hari terakhir</div>
</div>
<div class="chart-legend">
<span>
<i class="legend-dot">
</i>Hadir</span>
<span>
<i class="legend-dot alt">
</i>Izin / dinas</span>
</div>
</div>
<div class="chart-wrap">
<svg viewBox="0 0 650 190" preserveAspectRatio="none">
<defs>
<linearGradient id="area" x1="0" x2="0" y1="0" y2="1">
<stop offset="0" stop-color="#5e79e9" stop-opacity=".17"/>
<stop offset="1" stop-color="#5e79e9" stop-opacity="0"/>
</linearGradient>
</defs>
<g stroke="#f0f2f7" stroke-width="1">
<path d="M35 25H645M35 65H645M35 105H645M35 145H645"/>
</g>
<g fill="#a4afbf" font-size="9">
<text x="3" y="28">100%</text>
<text x="9" y="68">90%</text>
<text x="9" y="108">80%</text>
<text x="9" y="148">70%</text>
</g>
<path d="M40 69 C75 61 91 72 125 55S180 62 210 49 260 63 295 41 345 54 380 38 430 49 465 32 520 45 550 28 605 35 640 22 V160 H40Z" fill="url(#area)"/>
<path d="M40 69 C75 61 91 72 125 55S180 62 210 49 260 63 295 41 345 54 380 38 430 49 465 32 520 45 550 28 605 35 640 22" fill="none" stroke="#5873e5" stroke-width="3" stroke-linecap="round"/>
<path d="M40 123 C75 118 91 128 125 112S180 119 210 109 260 118 295 103 345 112 380 98 430 109 465 94 520 105 550 90 605 97 640 84" fill="none" stroke="#a9b6ee" stroke-width="2" stroke-dasharray="5 5"/>
<circle cx="550" cy="28" r="4" fill="#fff" stroke="#5873e5" stroke-width="2"/>
</svg>
</div>
<div class="chart-labels">
<span>Sen</span>
<span>Sel</span>
<span>Rab</span>
<span>Kam</span>
<span>Jum</span>
<span>Sab</span>
<span>Min</span>
</div>
</article>
            <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Perlu perhatian</div>
<div class="panel-sub">Hal yang membutuhkan tindak lanjut</div>
</div>
<button class="text-btn" data-goto="approvals">Lihat semua →</button>
</div>
<div class="approval-list" id="attention-list">
</div>
</article>
        </div>
        <div class="lower-grid">
            <article class="panel">
<div class="table-head">
<div>
<div class="panel-title">Kehadiran per unit kerja</div>
<div class="panel-sub">Status kehadiran hari ini</div>
</div>
<input class="search" placeholder="⌕  Cari unit..." id="unit-search">
</div>
<table class="employee-table">
<thead>
<tr>
<th>Unit kerja</th>
<th>Hadir</th>
<th>Persentase</th>
<th>Status</th>
</tr>
</thead>
<tbody id="unit-table">
</tbody>
</table>
<div class="attendance-foot">Data diperbarui otomatis · 09.42 WIB</div>
</article>
            <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Aktivitas terbaru</div>
<div class="panel-sub">Jejak aktivitas workspace</div>
</div>
<button class="text-btn" onclick="toast('Menampilkan aktivitas terbaru')">Semua</button>
</div>
<div class="activity" id="activity-list">
</div>
</article>
        </div>
    </section>
    <section id="attendance" class="section-view">
<div class="heading">
<div>
<div class="eyebrow">DATA KEHADIRAN</div>
<h1>Rekap absensi</h1>
<p>Pantau kehadiran seluruh pegawai dalam satu tampilan.</p>
</div>
<button class="primary" data-add="attendance">＋ Input absensi</button>
</div>
<div class="stats">
<article class="stat">
<div class="stat-top">Hadir hari ini<span class="stat-icon">✓</span>
</div>
<div class="stat-value">1.239</div>
<div class="stat-foot">96,4% dari total pegawai</div>
</article>
<article class="stat">
<div class="stat-top">Terlambat<span class="stat-icon">◷</span>
</div>
<div class="stat-value">18</div>
<div class="stat-foot">1,4% dari total pegawai</div>
</article>
<article class="stat">
<div class="stat-top">Izin / sakit<span class="stat-icon">✦</span>
</div>
<div class="stat-value">21</div>
<div class="stat-foot">1,6% dari total pegawai</div>
</article>
<article class="stat">
<div class="stat-top">Belum absen<span class="stat-icon">!</span>
</div>
<div class="stat-value">06</div>
<div class="stat-foot">Perlu konfirmasi unit kerja</div>
</article>
</div>
<article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Ringkasan kehadiran · September 2026</div>
<div class="panel-sub">Pilih periode untuk melihat rekap harian dan bulanan.</div>
</div>
<select class="role-select">
<option>September 2026</option>
<option>Agustus 2026</option>
</select>
</div>
<table class="employee-table">
<thead>
<tr>
<th>Unit kerja</th>
<th>Total pegawai</th>
<th>Hadir</th>
<th>Izin</th>
<th>Terlambat</th>
<th>Kehadiran</th>
</tr>
</thead>
<tbody id="attendance-table">
</tbody>
</table>
</article>
</section>
    <section id="letters" class="section-view">
<div class="heading">
<div>
<div class="eyebrow">ADMINISTRASI PERJALANAN DINAS</div>
<h1>Surat perjalanan dinas</h1>
<p>Kelola pengajuan dan pantau status surat perjalanan dinas lintas unit.</p>
</div>
<button class="primary" data-add="letter" id="new-letter">＋ Buat surat perjalanan dinas</button>
</div>
<div class="stats">
<article class="stat">
<div class="stat-top">Total bulan ini<span class="stat-icon">▤</span>
</div>
<div class="stat-value" id="letter-total-view">28</div>
<div class="stat-foot">Semua surat perjalanan dinas</div>
</article>
<article class="stat">
<div class="stat-top">Menunggu persetujuan<span class="stat-icon">◷</span>
</div>
<div class="stat-value" id="pending-letter-view">03</div>
<div class="stat-foot">Perlu tinjauan Sesditjen</div>
</article>
<article class="stat">
<div class="stat-top">Disetujui<span class="stat-icon">✓</span>
</div>
<div class="stat-value">22</div>
<div class="stat-foot">Siap dilaksanakan</div>
</article>
<article class="stat">
<div class="stat-top">Dalam perjalanan<span class="stat-icon">↗</span>
</div>
<div class="stat-value">03</div>
<div class="stat-foot">Sedang berlangsung</div>
</article>
</div>
<article class="panel">
<div class="table-head">
<div>
<div class="panel-title">Daftar surat perjalanan dinas</div>
<div class="panel-sub">Lacak pengajuan surat perjalanan dinas dan progres persetujuannya.</div>
</div>
<input class="search" id="letter-search" placeholder="⌕  Cari surat...">
</div>
<table class="employee-table">
<thead>
<tr>
<th>Nomor / kegiatan</th>
<th>Pegawai</th>
<th>Tujuan</th>
<th>Tanggal</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody id="letter-table">
</tbody>
</table>
</article>
</section>
    <section id="approvals" class="section-view">
<div class="heading">
<div>
<div class="eyebrow">ALUR PERSETUJUAN</div>
<h1>Kotak persetujuan</h1>
<p>Tinjau pengajuan dan berikan keputusan sebagai Sesditjen.</p>
</div>
<span class="date-chip">◷ &nbsp; <span id="approval-total">3</span> menunggu</span>
</div>
<article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Pengajuan surat perjalanan dinas</div>
<div class="panel-sub">Pengajuan yang memerlukan keputusan Sesditjen.</div>
</div>
</div>
<div id="approval-full-list" class="approval-list">
</div>
</article>
</section>
    <section id="employees" class="section-view">
<div class="heading">
<div>
<div class="eyebrow">DIREKTORI SDM</div>
<h1>Data pegawai</h1>
<p>Direktori dan informasi unit kerja pegawai KP2MI.</p>
</div>
<button class="primary" data-add="employee">＋ Tambah pegawai</button>
</div>
<article class="panel">
<div class="table-head">
<div>
<div class="panel-title">Direktori pegawai</div>
<div class="panel-sub">Data contoh untuk pratinjau antarmuka.</div>
</div>
<input class="search" id="employee-search" placeholder="⌕  Cari pegawai...">
</div>
<table class="employee-table">
<thead>
<tr>
<th>Nama pegawai</th>
<th>NIP</th>
<th>Unit kerja</th>
<th>Status</th>
</tr>
</thead>
<tbody id="employee-table">
</tbody>
</table>
</article>
</section>
    <section id="reports" class="section-view">
<div class="heading">
<div>
<div class="eyebrow">ANALISIS DAN REKAPITULASI</div>
<h1>Laporan kepegawaian</h1>
<p>Ikhtisar yang membantu membaca kondisi pegawai secara cepat.</p>
</div>
<button class="primary" onclick="toast('Laporan berhasil disiapkan untuk diunduh')">↓ Unduh laporan</button>
</div>
<div class="stats">
<article class="stat">
<div class="stat-top">Kehadiran rata-rata<span class="stat-icon">↗</span>
</div>
<div class="stat-value">96,4%</div>
<div class="stat-foot">
<span class="trend">↗ 4,8%</span> dibanding minggu lalu</div>
</article>
<article class="stat">
<div class="stat-top">Total pegawai<span class="stat-icon">♙</span>
</div>
<div class="stat-value">1.284</div>
<div class="stat-foot">Di 8 unit kerja</div>
</article>
<article class="stat">
<div class="stat-top">Surat perjalanan dinas<span class="stat-icon">▤</span>
</div>
<div class="stat-value">28</div>
<div class="stat-foot">Diterbitkan bulan ini</div>
</article>
<article class="stat">
<div class="stat-top">Ketepatan waktu<span class="stat-icon">◷</span>
</div>
<div class="stat-value">98,1%</div>
<div class="stat-foot">Pegawai hadir tepat waktu</div>
</article>
</div>
<article class="panel">
<div class="panel-title">Ringkasan bulanan</div>
<div class="panel-sub">Visualisasi kehadiran dan surat perjalanan dinas akan mengikuti data yang telah direkap.</div>
<div style="margin-top:35px;color:#8793a7;font-size:12px">Pilih periode laporan &nbsp; <select class="role-select">
<option>September 2026</option>
<option>Agustus 2026</option>
</select>
</div>
</article>
</section>
</div>
</main>
</div>
<div class="toast" id="toast">
</div>
<div class="modal-backdrop" id="modal">
<div class="modal">
<div class="modal-head">
<h2 id="modal-title">Tambah data</h2>
<button class="close" id="modal-close">×</button>
</div>
<form id="entry-form">
<div class="form-grid" id="form-fields">
</div>
<div class="modal-actions">
<button type="button" class="secondary" id="modal-cancel">Batal</button>
<button class="primary" type="submit">Simpan data</button>
</div>
</form>
</div>
</div>
<script>
const seedLetters=[
 {id:1,number:'ST/142/KP2MI/IX/2026',title:'Koordinasi penempatan PMI',person:'Rizky Pratama',unit:'Direktorat Penempatan',destination:'Surabaya',date:'30 Sep – 02 Okt 2026',status:'Menunggu'},
 {id:2,number:'ST/141/KP2MI/IX/2026',title:'Monitoring layanan terpadu',person:'Dewi Anggraini',unit:'Biro Perencanaan',destination:'Semarang',date:'29 – 30 Sep 2026',status:'Menunggu'},
 {id:3,number:'ST/140/KP2MI/IX/2026',title:'Konsultasi perlindungan PMI',person:'Bima Saputra',unit:'Direktorat Perlindungan',destination:'Bandung',date:'01 – 03 Okt 2026',status:'Menunggu'},
 {id:4,number:'ST/139/KP2MI/IX/2026',title:'Rapat koordinasi lintas instansi',person:'Nadia Amalia',unit:'Sekretariat Ditjen',destination:'Jakarta',date:'25 – 26 Sep 2026',status:'Disetujui'},
 {id:5,number:'ST/138/KP2MI/IX/2026',title:'Sosialisasi layanan migrasi aman',person:'Siti Rahmawati',unit:'Direktorat Promosi',destination:'Makassar',date:'24 – 26 Sep 2026',status:'Disetujui'},
];
const units=[['Direktorat Penempatan',312,96],['Direktorat Perlindungan',286,94],['Sekretariat Ditjen',214,98],['Biro Perencanaan',178,97],['Direktorat Promosi',164,95],['Pusat Data & Informasi',130,99]];
const people=[['Nadia Amalia','198906122010012001','Sekretariat Ditjen','NA'],['Rizky Pratama','199204152014021002','Direktorat Penempatan','RP'],['Dewi Anggraini','199111232013032004','Biro Perencanaan','DA'],['Bima Saputra','198712082009011003','Direktorat Perlindungan','BS'],['Siti Rahmawati','199305182015042006','Direktorat Promosi','SR']];
let letters=JSON.parse(localStorage.getItem('rk_letters')||'null')||seedLetters;
let attendanceRecords=JSON.parse(localStorage.getItem('rk_attendance')||'[]');
let activity=JSON.parse(localStorage.getItem('rk_activity')||'null')||[{text:'<b>Rizky Pratama</b> mengajukan surat perjalanan dinas',time:'12 menit lalu',icon:'↗'},{text:'<b>Rekap absensi</b> unit kerja diperbarui',time:'38 menit lalu',icon:'✓'},{text:'<b>Surat perjalanan dinas ST/139</b> disetujui Sesditjen',time:'1 jam lalu',icon:'▤'}];
let role=@json(auth()->user()->role);const currentUserName=@json(auth()->user()->name);const save=()=>{localStorage.setItem('rk_letters',JSON.stringify(letters));localStorage.setItem('rk_activity',JSON.stringify(activity));localStorage.setItem('rk_attendance',JSON.stringify(attendanceRecords))};
const statusClass=s=>s==='Disetujui'?'approved':s==='Ditolak'?'rejected':'pending';
function toast(msg){let t=document.getElementById('toast');t.textContent=msg;t.classList.add('show');setTimeout(()=>t.classList.remove('show'),2600)}
function render(){let waiting=letters.filter(x=>x.status==='Menunggu');document.getElementById('pending-count').textContent=String(waiting.length).padStart(2,'0');document.getElementById('pending-stat').textContent=String(waiting.length).padStart(2,'0');document.getElementById('pending-letter-view').textContent=String(waiting.length).padStart(2,'0');document.getElementById('approval-total').textContent=waiting.length;document.getElementById('letter-count').textContent=String(letters.length).padStart(2,'0');document.getElementById('letter-stat').textContent=28+letters.length-seedLetters.length;document.getElementById('letter-total-view').textContent=28+letters.length-seedLetters.length;
 const list=(items,full=false)=>items.length?items.map(x=>`<div class="approval-item">
<div class="doc-icon">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M7 3h7l5 5v13H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"/>
<path d="M14 3v6h6M8 13h7m-7 4h5"/>
</svg>
</div>
<div class="approval-info">
<b>${x.title}</b>
<span>${x.person} · ${x.destination} · ${x.date}</span>
</div>
<span class="pill ${statusClass(x.status)}">${x.status}</span>${full&&x.status==='Menunggu'&&role==='sesditjen'?`<button class="text-btn" onclick="decide(${x.id},'Disetujui')">Setujui</button>
<button class="text-btn" style="color:#d45d5d" onclick="decide(${x.id},'Ditolak')">Tolak</button>`:''}</div>`).join(''):'<div style="padding:28px;text-align:center;color:#9aa5b5;font-size:12px">Semua pengajuan sudah ditinjau ✨</div>';
 document.getElementById('attention-list').innerHTML=list(waiting.slice(0,3));document.getElementById('approval-full-list').innerHTML=list(role==='sesditjen'?waiting:letters,true);
 document.getElementById('letter-table').innerHTML=letters.map(x=>`<tr>
<td>
<b style="color:#34415a">${x.title}</b>
<br>
<span style="font-size:9px;color:#9aa5b5">${x.number}</span>
</td>
<td>${x.person}</td>
<td>${x.destination}</td>
<td>${x.date}</td>
<td>
<span class="pill ${statusClass(x.status)}">${x.status}</span>
</td>
<td>${role==='sesditjen'&&x.status==='Menunggu'?`<button class="text-btn" onclick="decide(${x.id},'Disetujui')">Setujui</button>`:'<button class="text-btn" onclick="toast(\'Detail surat perjalanan dinas\')">Detail ↗</button>'}</td>
</tr>`).join('');
 document.getElementById('unit-table').innerHTML=units.map((u,i)=>`<tr>
<td class="person-cell">
<span class="mini-avatar ${['','green','orange','pink'][i%4]}">${u[0].split(' ').map(w=>w[0]).slice(0,2).join('')}</span>${u[0]}</td>
<td>${Math.round(u[1]*u[2]/100)} / ${u[1]}</td>
<td>
<span class="progress">
<i style="width:${u[2]}%">
</i>
</span>${u[2]}%</td>
<td>
<span class="pill approved">Normal</span>
</td>
</tr>`).join('');
 document.getElementById('attendance-table').innerHTML=attendanceRecords.map(r=>`<tr>
<td class="person-cell">${r.unit}</td>
<td>—</td>
<td>${r.status==='Hadir'?1:0}</td>
<td>${['Izin','Sakit'].includes(r.status)?1:0}</td>
<td>0</td>
<td>
<span class="pill ${r.status==='Hadir'?'approved':'pending'}">${r.person} · ${r.status} · ${r.date}</span>
</td>
</tr>`).join('')+units.map(u=>`<tr>
<td class="person-cell">${u[0]}</td>
<td>${u[1]}</td>
<td>${Math.round(u[1]*u[2]/100)}</td>
<td>${Math.round(u[1]*.012)}</td>
<td>${Math.round(u[1]*.014)}</td>
<td>
<span class="pill approved">${u[2]}%</span>
</td>
</tr>`).join('');
 document.getElementById('employee-table').innerHTML=people.map(p=>`<tr>
<td class="person-cell">
<span class="mini-avatar">${p[3]}</span>${p[0]}</td>
<td>${p[1]}</td>
<td>${p[2]}</td>
<td>
<span class="pill approved">Aktif</span>
</td>
</tr>`).join('');
 document.getElementById('activity-list').innerHTML=activity.slice(0,4).map(a=>`<div class="activity-row">
<div class="activity-bullet">${a.icon}</div>
<div class="activity-copy">${a.text}<time>${a.time}</time>
</div>
</div>`).join('');
 document.getElementById('new-letter').style.display=role==='kepegawaian'?'inline-block':'none';document.getElementById('greeting-name').textContent=currentUserName.split(' ')[0];
}
function decide(id,status){if(role!=='sesditjen'){toast('Hanya Sesditjen yang dapat memberi persetujuan');return}let item=letters.find(x=>x.id===id);if(!item)return;item.status=status;activity.unshift({text:`<b>Surat perjalanan dinas ${item.number}</b> ${status.toLowerCase()} Sesditjen`,time:'Baru saja',icon:status==='Disetujui'?'✓':'×'});save();render();toast(`Surat perjalanan dinas ${status.toLowerCase()}`)}
const labels={overview:'Ringkasan',attendance:'Rekap absensi',letters:'Surat perjalanan dinas',approvals:'Persetujuan',employees:'Data pegawai',reports:'Laporan'};
function go(page){document.querySelectorAll('.section-view').forEach(s=>s.classList.toggle('visible',s.id===page));document.querySelectorAll('#nav button[data-page]').forEach(b=>b.classList.toggle('active',b.dataset.page===page));document.getElementById('crumb-page').textContent=labels[page];document.getElementById('sidebar').classList.remove('open');}
document.getElementById('nav').addEventListener('click',e=>{let b=e.target.closest('[data-page]');if(b)go(b.dataset.page)});document.querySelectorAll('[data-goto]').forEach(b=>b.addEventListener('click',()=>go(b.dataset.goto)));document.getElementById('menu-toggle').onclick=()=>document.getElementById('sidebar').classList.toggle('open');
document.getElementById('unit-search').oninput=e=>document.querySelectorAll('#unit-table tr').forEach(r=>r.hidden=!r.textContent.toLowerCase().includes(e.target.value.toLowerCase()));document.getElementById('letter-search').oninput=e=>document.querySelectorAll('#letter-table tr').forEach(r=>r.hidden=!r.textContent.toLowerCase().includes(e.target.value.toLowerCase()));document.getElementById('employee-search').oninput=e=>document.querySelectorAll('#employee-table tr').forEach(r=>r.hidden=!r.textContent.toLowerCase().includes(e.target.value.toLowerCase()));
const modal=document.getElementById('modal'),fields=document.getElementById('form-fields');let currentForm='';
const configs={letter:{title:'Buat surat perjalanan dinas',fields:[['title','Nama kegiatan','text','full'],['person','Nama pegawai','text',''],['unit','Unit kerja','select','',['Direktorat Penempatan','Direktorat Perlindungan','Sekretariat Ditjen','Biro Perencanaan','Direktorat Promosi']],['destination','Kota tujuan','text',''],['date','Tanggal perjalanan','text','']]},attendance:{title:'Input rekap absensi',fields:[['person','Nama pegawai','text',''],['unit','Unit kerja','select','',['Direktorat Penempatan','Direktorat Perlindungan','Sekretariat Ditjen','Biro Perencanaan']],['date','Tanggal','date',''],['status','Status kehadiran','select','',['Hadir','Izin','Sakit','Dinas']] ]},employee:{title:'Tambah pegawai',fields:[['person','Nama lengkap','text',''],['nip','NIP','text',''],['unit','Unit kerja','select','',['Direktorat Penempatan','Direktorat Perlindungan','Sekretariat Ditjen','Biro Perencanaan','Direktorat Promosi']] ]}};
function openForm(type){if(role!=='kepegawaian'){toast('Mode Sesditjen hanya memiliki akses persetujuan');return}currentForm=type;let c=configs[type];document.getElementById('modal-title').textContent=c.title;fields.innerHTML=c.fields.map(([name,label,input,span,options])=>`<div class="field ${span==='full'?'full':''}">
<label>${label}</label>${input==='select'?`<select name="${name}" required>${options.map(o=>`<option>${o}</option>`).join('')}</select>`:`<input name="${name}" type="${input}" placeholder="${label}" required>`}</div>`).join('');modal.classList.add('open')}
document.querySelectorAll('[data-add]').forEach(b=>b.onclick=()=>openForm(b.dataset.add));document.getElementById('modal-close').onclick=document.getElementById('modal-cancel').onclick=()=>modal.classList.remove('open');modal.onclick=e=>{if(e.target===modal)modal.classList.remove('open')};
document.getElementById('entry-form').onsubmit=e=>{e.preventDefault();let data=Object.fromEntries(new FormData(e.target));if(currentForm==='letter'){let item={id:Date.now(),number:`ST/${143+letters.length-seedLetters.length}/KP2MI/IX/2026`,title:data.title,person:data.person,unit:data.unit,destination:data.destination,date:data.date,status:'Menunggu'};letters.unshift(item);activity.unshift({text:`<b>${item.person}</b> mengajukan surat perjalanan dinas`,time:'Baru saja',icon:'↗'});go('letters')}else if(currentForm==='employee'){people.unshift([data.person,data.nip,data.unit,data.person.split(' ').map(w=>w[0]).slice(0,2).join('')]);go('employees')}else{attendanceRecords.unshift(data);activity.unshift({text:`<b>${data.person}</b> diperbarui: ${data.status} · ${data.unit}`,time:'Baru saja',icon:'✓'});go('attendance')}save();render();modal.classList.remove('open');e.target.reset();toast('Data berhasil disimpan')};
render();
</script>
</body>
</html>
