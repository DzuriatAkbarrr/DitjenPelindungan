<section class="section-view visible">
    <div class="heading">
        <div>
<div class="eyebrow">{{ mb_strtoupper($today) }}</div>
<h1>Selamat datang, {{ auth()->user()->name }} <span style="font-size:22px">✦</span>
</h1>
<p>Ringkasan surat perjalanan dinas berdasarkan data yang tersimpan.</p>
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
<b>Status persetujuan surat perjalanan dinas</b>
<p>{{ number_format($pendingAssignments) }} pengajuan menunggu keputusan Sesditjen.</p>
</div>
<strong>{{ number_format($monthlyAssignments) }}<small>pengajuan bulan ini</small>
</strong>
</div>
    <div class="stats">
        <article class="stat">
<div class="stat-top">
<span>Menunggu keputusan</span>
<span class="stat-icon">◷</span>
</div>
<div class="stat-value">{{ number_format($pendingAssignments) }}</div>
<div class="stat-foot">Surat perjalanan dinas perlu ditinjau</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Total surat perjalanan dinas</span>
<span class="stat-icon">▤</span>
</div>
<div class="stat-value">{{ number_format($totalAssignments) }}</div>
<div class="stat-foot">Seluruh status pengajuan</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Disetujui</span>
<span class="stat-icon">✓</span>
</div>
<div class="stat-value">{{ number_format($approvedAssignments) }}</div>
<div class="stat-foot">Sudah diputuskan</div>
</article>
        <article class="stat">
<div class="stat-top">
<span>Ditolak</span>
<span class="stat-icon">×</span>
</div>
<div class="stat-value">{{ number_format($rejectedAssignments) }}</div>
<div class="stat-foot">Sudah diputuskan</div>
</article>
    </div>
    <div class="grid-main">
        <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Pengajuan surat perjalanan dinas baru</div>
<div class="panel-sub">Data dibuat · 7 hari terakhir</div>
</div>
<a class="text-btn" href="{{ route('sesditjen.surat-perjalanan-dinas.index') }}" style="text-decoration:none">Lihat semua →</a>
</div>
            @php($chartMaximum = max(1, $assignmentWeek->max('count')))
            <div style="height:174px;display:flex;align-items:flex-end;justify-content:space-around;gap:12px;padding:16px 8px 0;border-bottom:1px solid #edf0f5">
@foreach($assignmentWeek as $day)<div title="{{ $day['date'] }}: {{ $day['count'] }} pengajuan" style="height:100%;flex:1;display:flex;flex-direction:column;justify-content:flex-end;align-items:center;gap:8px">
<span style="font-size:10px;color:#76839a">{{ $day['count'] }}</span>
<div style="width:min(34px,72%);height:{{ $day['count'] ? max(7, (int) (105 * $day['count'] / $chartMaximum)) : 3 }}px;border-radius:7px 7px 2px 2px;background:{{ $day['count'] ? 'linear-gradient(180deg,#8298f0,#526fe0)' : '#e9edf4' }}">
</div>
<span style="font-size:9px;color:#98a3b2">{{ $day['label'] }}<br>{{ $day['date'] }}</span>
</div>
@endforeach</div>
            @if($assignmentWeek->sum('count') === 0)<p class="attendance-foot">Belum ada pengajuan surat perjalanan dinas dalam 7 hari terakhir.</p>
@endif
        </article>
        <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Antrean persetujuan</div>
<div class="panel-sub">Surat perjalanan dinas menunggu keputusan Anda</div>
</div>
<a class="text-btn" href="{{ route('sesditjen.surat-perjalanan-dinas.approvals') }}" style="text-decoration:none">Buka antrean →</a>
</div>
            @forelse($latestPendingAssignments as $letter)<div class="approval-item">
<div class="doc-icon">◷</div>
<div class="approval-info">
<b>{{ $letter->title }}</b>
<span>{{ $letter->employee_name }} · {{ $letter->destination }}</span>
</div>
<span class="pill pending">Menunggu</span>
</div>
@empty<div style="padding:26px 10px;text-align:center;color:#9aa5b5;font-size:11px">Tidak ada surat perjalanan dinas yang menunggu keputusan.</div>
@endforelse
        </article>
    </div>
    <div class="lower-grid">
        <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Pegawai per unit kerja</div>
<div class="panel-sub">Dari direktori pegawai tersimpan</div>
</div>
</div>
            @if($unitCounts->isEmpty())<div style="padding:23px 8px;text-align:center;color:#9aa5b5;font-size:11px">Belum ada data pegawai untuk diringkas.</div>
@else<table class="employee-table">
<thead>
<tr>
<th>Unit kerja</th>
<th>Total</th>
<th>Aktif</th>
</tr>
</thead>
<tbody>
@foreach($unitCounts as $unit)<tr>
<td class="person-cell">{{ $unit->unit }}</td>
<td>{{ $unit->total }}</td>
<td>{{ $unit->active }}</td>
</tr>
@endforeach</tbody>
</table>
@endif
        </article>
        <article class="panel">
<div class="panel-head">
<div>
<div class="panel-title">Surat perjalanan dinas terbaru</div>
<div class="panel-sub">Pengajuan dan keputusan terakhir</div>
</div>
<a class="text-btn" href="{{ route('sesditjen.surat-perjalanan-dinas.index') }}" style="text-decoration:none">Riwayat →</a>
</div>
            @forelse($latestAssignments as $letter)<div class="activity-row">
<div class="activity-bullet">▤</div>
<div class="activity-copy">
<b>{{ $letter->title }}</b>
<br>{{ $letter->employee_name }} · {{ $letter->status }}<time>{{ $letter->created_at->format('d/m/Y H:i') }}</time>
</div>
</div>
@empty<div style="padding:23px 8px;text-align:center;color:#9aa5b5;font-size:11px">Belum ada surat perjalanan dinas.</div>
@endforelse
        </article>
    </div>
</section>
