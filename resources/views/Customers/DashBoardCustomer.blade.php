@include('master.header')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="container mt-5">
  <h2>مرحبا {{ $user->name }}</h2>

  <div class="p-3 mt-3 shadow-sm card">
    <h6>حسابي</h6>
    <p>البريد: {{ $user->email }}</p>
    <p>دور: {{ optional($user->role)->name ?? 'غير محدد' }}</p>
    <a href="{{ route('profile.show') ?? '#' }}" class="btn btn-sm" style="background:#d8cd94;color:#fff">عرض الملف الشخصي</a>
  </div>
</div>

@include('master.footer')
