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

    @include('shared.sidebar-styles')
</style>
</head>
<body>
<div class="app">
@include('shared.sidebar')
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
    @if (auth()->user()->role === 'kepegawaian')
        @include('kepegawaian.dashboard-summary')
    @else
        @include('sesditjen.dashboard-summary')
    @endif
</div>
</main>
</div>
<div class="toast" id="toast">
</div>
<script>
function toast(message){const el=document.getElementById('toast');el.textContent=message;el.classList.add('show');setTimeout(()=>el.classList.remove('show'),2400)}
document.getElementById('menu-toggle').onclick=()=>document.getElementById('sidebar').classList.toggle('open');
</script>
</body>
</html>
