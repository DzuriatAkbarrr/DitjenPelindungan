<aside class="sidebar" id="sidebar">
    <a class="brand" href="{{ route('dashboard') }}">
<span class="brand-mark">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M12 3v18M3 12h18M5.6 5.6l12.8 12.8m0-12.8L5.6 18.4"/>
<circle cx="12" cy="12" r="8.5"/>
</svg>
</span>
<span>RuangKerja<small>KP2MI · WORKSPACE</small>
</span>
</a>
    <div class="workspace">
<span class="seal">KP</span>
<span>
<b>Kementerian P2MI</b>
<small>Dashboard kepegawaian</small>
</span>
</div>
    <div class="nav-label">MENU UTAMA</div>
    <nav class="side-nav">
        <a class="{{ request()->routeIs('dashboard', 'kepegawaian.dashboard', 'sesditjen.dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<rect x="3" y="3" width="8" height="8" rx="2"/>
<rect x="14" y="3" width="7" height="5" rx="2"/>
<rect x="14" y="11" width="7" height="10" rx="2"/>
<rect x="3" y="14" width="8" height="7" rx="2"/>
</svg>
<span>Ringkasan</span>
</a>
        @if(auth()->user()->role === 'kepegawaian')
            <a class="{{ request()->routeIs('kepegawaian.cuti.*') ? 'active' : '' }}" href="{{ route('kepegawaian.cuti.index') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<rect x="3" y="5" width="18" height="16" rx="3"/>
<path d="M16 3v4M8 3v4M3 10h18m-13 5 2 2 4-4"/>
</svg>
<span>Rekap cuti</span>
</a>
            <a class="{{ request()->routeIs('kepegawaian.surat-perjalanan-dinas.*') ? 'active' : '' }}" href="{{ route('kepegawaian.surat-perjalanan-dinas.index') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M7 3h7l5 5v13H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"/>
<path d="M14 3v6h6M8 13h7m-7 4h7"/>
</svg>
<span>Surat perjalanan dinas</span>
</a>
            <div class="nav-label nav-label-spaced">PENGELOLAAN</div>
            <a class="{{ request()->routeIs('kepegawaian.pegawai.*') ? 'active' : '' }}" href="{{ route('kepegawaian.pegawai.index') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="9" cy="8" r="4"/>
<path d="M2 21v-2a7 7 0 0 1 14 0v2M16 4a4 4 0 0 1 0 8m2 3a6 6 0 0 1 4 6"/>
</svg>
<span>Data pegawai</span>
</a>
            <a class="{{ request()->routeIs('kepegawaian.users.*') ? 'active' : '' }}" href="{{ route('kepegawaian.users.index') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="9" cy="8" r="4"/>
<path d="M2 21v-2a7 7 0 0 1 14 0v2m2-13a4 4 0 0 1 0 8m1 2a6 6 0 0 1 3 5"/>
</svg>
<span>Pengguna</span>
</a>
        @else
            <a class="{{ request()->routeIs('sesditjen.surat-perjalanan-dinas.index') ? 'active' : '' }}" href="{{ route('sesditjen.surat-perjalanan-dinas.index') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<path d="M7 3h7l5 5v13H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3Z"/>
<path d="M14 3v6h6M8 13h7m-7 4h7"/>
</svg>
<span>Surat perjalanan dinas</span>
</a>
            <a class="{{ request()->routeIs('sesditjen.surat-perjalanan-dinas.approvals') ? 'active' : '' }}" href="{{ route('sesditjen.surat-perjalanan-dinas.approvals') }}">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
<circle cx="12" cy="12" r="9"/>
<path d="m8 12 2.5 2.5L16 9"/>
</svg>
<span>Persetujuan</span>
</a>
        @endif
    </nav>
    <div class="side-profile">
<span class="profile-avatar">{{ collect(explode(' ', auth()->user()->name))->map(fn($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}</span>
<span>
<b>{{ auth()->user()->name }}</b>
<small>{{ auth()->user()->role === 'sesditjen' ? 'Sesditjen' : 'Kepegawaian' }}</small>
</span>
</div>
</aside>
