@include('master.header')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="p-3 text-white col-md-3 col-lg-2 vh-100"
            style="background-color:#d6cb94; margin-top:10px; margin-bottom:10px; border-radius:12px;">
            <h4 class="mb-4 text-center">الملف الشخصي</h4>
            <ul class="list-unstyled">
                <li class="mb-2">
                    <a href="PageEditDataUser-{{$DataUser->id}}" class="text-white">تعديل البيانات</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-white">عرض البيانات</a>
                </li>
                <li class="mb-2">
                    <form action="UserLogout" method="POST">
                        @csrf
                        <button class="btn btn-black w-100">تسجيل الخروج</button>
                    </form>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="p-5 col-md-9 col-lg-10">
            @if(session()->has('success'))
                {{session('success')}}
            @endif
            <div class="shadow card">
                <div class="text-white card-header bg-primary">
                    بيانات المستخدم
                </div>
                <div class="card-body">
                    <!-- صورة المستخدم -->
                    @if(!empty($DataProfileUSer->image))
                        <img src="{{ asset('uploads/images/'.$DataProfileUSer->image) }}" 
                             alt="صورة المستخدم"
                             class="mb-3 rounded-circle"
                             style="width:100px; height:100px; object-fit:cover;">
                    @else
                        <img src="{{ asset("master/images/gallery-6.jpg") }}" 
                             alt="صورة افتراضية"
                             class="mb-3 rounded-circle"
                             style="width:100px; height:100px; object-fit:cover;">
                    @endif

                    <!-- بيانات المستخدم -->
                    <p><strong>الاسم:</strong> {{ $DataUser->name }}</p>
                    <p><strong>البريد الإلكتروني:</strong> {{ $DataUser->email }}</p>
                    <p><strong>الهاتف:</strong> {{ $DataProfileUSer->phone ?? 'غير متوفر' }}</p>
                    <p><strong>العنوان:</strong> {{ $DataProfileUSer->address ?? 'غير متوفر' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('master.footer')
