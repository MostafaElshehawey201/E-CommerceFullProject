@include('master.header')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<style>
/* لمسات رايقة سريعة */
.dashboard-card { border-radius: 14px; padding: 18px; }
.stat-number { font-size: 2rem; font-weight:700; }
.card-ghost { background:#fff; border:1px solid rgba(0,0,0,0.06); }
.theme-accent { background: #d8cd94; color: #fff; }
</style>

<div class="container mt-5">
  <h2 class="mb-4">لوحة تحكم الأدمن</h2>

  <div class="mb-4 row g-3">
    <div class="col-md-4">
      <div class="text-center shadow-sm dashboard-card card-ghost">
        <h6>عدد العملاء</h6>
        <div class="stat-number">totalUsers</div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="text-center shadow-sm dashboard-card card-ghost">
        <h6>عدد الطلبات</h6>
        <div class="stat-number">totalOrders</div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="text-center shadow-sm dashboard-card card-ghost">
        <h6>عدد المنتجات</h6>
        <div class="stat-number">totalProducts</div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8">
      <div class="p-3 shadow-sm card">
        <h6>مخطط المبيعات — آخر 7 أيام</h6>
        <canvas id="salesChart" height="120"></canvas>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="p-3 shadow-sm card">
        <h6>روابط سريعة</h6>
        <ul class="list-unstyled">
          <li><a href='#' >إدارة المستخدمين</a></li>
          <li><a href='#'>إدارة المنتجات</a></li>
          <li><a href='#'>الطلبات</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
{{-- <script>
  const salesData = @json(array_map(fn($d)=>$d['amount'], $salesLast7));
  const salesLabels = @json(array_map(fn($d)=>\Carbon\Carbon::parse($d['date'])->format('d M'), $salesLast7));

  const ctx = document.getElementById('salesChart').getContext('2d');
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: salesLabels,
      datasets: [{
        label: 'المبيعات',
        data: salesData,
        fill: true,
        tension: 0.3,
        backgroundColor: 'rgba(216,205,148,0.2)',
        borderColor: '#d8cd94',
        pointRadius: 3
      }]
    },
    options: {
      plugins: { legend: { display: false }},
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script> --}}

@include('master.footer')
