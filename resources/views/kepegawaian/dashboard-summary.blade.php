<section id="overview" class="section-view visible">
    <div class="heading">
        <div>
            <div class="eyebrow">{{ mb_strtoupper($today) }}</div>
            <h1>Selamat datang, {{ auth()->user()->name }} <span style="font-size:22px">✦</span>
</h1>
            <p>Ringkasan berdasarkan data pegawai dan cuti yang tersimpan.</p>
        </div>
        <div class="date-chip">Periode berjalan · {{ now()->locale('id')->translatedFormat('F Y') }}</div>
    </div>

    <div class="insight">
        <div class="spark">
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
<path d="m12 2 1.8 6.2L20 10l-6.2 1.8L12 18l-1.8-6.2L4 10l6.2-1.8L12 2Zm7 13 .9 3.1L23 19l-3.1.9L19 23l-.9-3.1L15 19l3.1-.9L19 15Z"/>
</svg>
</div>
        <div class="insight-copy">
            <b>Ringkasan data saat ini</b>
            <p>{{ number_format($activeEmployees) }} pegawai aktif dan {{ number_format($pendingLeaveCount) }} pengajuan cuti menunggu persetujuan.</p>
        </div>
        <strong>{{ number_format($monthlyLeaveCount) }}<small>pengajuan cuti bulan ini</small>
</strong>
    </div>

    <div class="stats">
        <article class="stat">
<div class="stat-top">
<span>Total data pegawai</span>
<span class="stat-icon">♙</span>
</div>
<div class="stat-value">{{ number_format($totalEmployees) }}</div>
<div class="stat-foot">Pegawai aktif dan nonaktif di direktori</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Pegawai aktif</span>
<span class="stat-icon">✓</span>
</div>
<div class="stat-value">{{ number_format($activeEmployees) }}</div>
<div class="stat-foot">{{ number_format($inactiveEmployees) }} pegawai nonaktif</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Cuti menunggu</span>
<span class="stat-icon">◷</span>
</div>
<div class="stat-value">{{ number_format($pendingLeaveCount) }}</div>
<div class="stat-foot">Pengajuan berstatus menunggu</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Pengajuan bulan ini</span>
<span class="stat-icon">▤</span>
</div>
<div class="stat-value">{{ number_format($monthlyLeaveCount) }}</div>
<div class="stat-foot">Rekap cuti dibuat bulan ini</div>
</article>
    </div>

    <div class="grid-main">
        <article class="panel">
            <div class="panel-head">
<div>
<div class="panel-title">Pengajuan cuti baru</div>
<div class="panel-sub">Jumlah rekap cuti dibuat · 7 hari terakhir</div>
</div>
<a class="text-btn" href="{{ route('kepegawaian.cuti.index') }}" style="text-decoration:none">Buka rekap →</a>
</div>
            @php($chartMaximum = max(1, $week->max('count')))
            <div style="height:174px;display:flex;align-items:flex-end;justify-content:space-around;gap:12px;padding:16px 8px 0;border-bottom:1px solid #edf0f5">
                @foreach($week as $day)
                    <div title="{{ $day['date'] }}: {{ $day['count'] }} pengajuan" style="height:100%;flex:1;display:flex;flex-direction:column;justify-content:flex-end;align-items:center;gap:8px">
                        <span style="font-size:10px;color:#76839a">{{ $day['count'] }}</span>
                        <div style="width:min(34px,72%);height:{{ $day['count'] ? max(7, (int) (105 * $day['count'] / $chartMaximum)) : 3 }}px;border-radius:7px 7px 2px 2px;background:{{ $day['count'] ? 'linear-gradient(180deg,#8298f0,#526fe0)' : '#e9edf4' }}">
</div>
                        <span style="font-size:9px;color:#98a3b2">{{ $day['label'] }}<br>{{ $day['date'] }}</span>
                    </div>
                @endforeach
            </div>
            @if($week->sum('count') === 0)<p class="attendance-foot">Belum ada pengajuan cuti baru dalam 7 hari terakhir.</p>
@endif
        </article>
        <article class="panel">
            <div class="panel-head">
<div>
<div class="panel-title">Menunggu persetujuan</div>
<div class="panel-sub">Pengajuan cuti berstatus menunggu</div>
</div>
<a class="text-btn" href="{{ route('kepegawaian.cuti.index') }}" style="text-decoration:none">Lihat daftar →</a>
</div>
            @forelse($latestPendingLeaves as $leave)
                <div class="approval-item">
<div class="doc-icon">◷</div>
<div class="approval-info">
<b>{{ $leave->employee_name }}</b>
<span>{{ $leave->leave_type }} · {{ $leave->days }} hari · {{ $leave->unit }}</span>
</div>
<span class="pill pending">Menunggu</span>
</div>
            @empty
                <div style="padding:26px 10px;text-align:center;color:#9aa5b5;font-size:11px">Tidak ada pengajuan cuti yang menunggu persetujuan.</div>
            @endforelse
        </article>
    </div>

    <div class="lower-grid">
        <article class="panel">
            <div class="panel-head">
<div>
<div class="panel-title">Pegawai per unit kerja</div>
<div class="panel-sub">Diambil dari Direktorat pegawai tersimpan</div>
</div>
<a class="text-btn" href="{{ route('kepegawaian.pegawai.index') }}" style="text-decoration:none">Data pegawai →</a>
</div>
            @if($unitCounts->isEmpty())
                <div style="padding:23px 8px;text-align:center;color:#9aa5b5;font-size:11px">Belum ada data pegawai untuk diringkas.</div>
            @else
                <table class="employee-table">
<thead>
<tr>
<th>Unit kerja</th>
<th>Total</th>
<th>Aktif</th>
<th>Status</th>
</tr>
</thead>
<tbody>
                    @foreach($unitCounts as $unit)
                        <tr>
<td class="person-cell">{{ $unit->unit }}</td>
<td>{{ $unit->total }}</td>
<td>{{ $unit->active }}</td>
<td>
<span class="pill approved">Data tersimpan</span>
</td>
</tr>
                    @endforeach
                </tbody>
</table>
            @endif
        </article>
        <article class="panel">
            <div class="panel-head">
<div>
<div class="panel-title">Rekap cuti terbaru</div>
<div class="panel-sub">Pengajuan terakhir yang tercatat</div>
</div>
<a class="text-btn" href="{{ route('kepegawaian.cuti.index') }}" style="text-decoration:none">Semua cuti →</a>
</div>
            @forelse($latestLeaves as $leave)
                <div class="activity-row">
<div class="activity-bullet">▤</div>
<div class="activity-copy">
<b>{{ $leave->employee_name }}</b> · {{ $leave->leave_type }}<time>{{ $leave->created_at->format('d/m/Y H:i') }} · {{ $leave->status }}</time>
</div>
</div>
            @empty
                <div style="padding:23px 8px;text-align:center;color:#9aa5b5;font-size:11px">Belum ada rekap cuti.</div>
            @endforelse
        </article>
    </div>
</section>
