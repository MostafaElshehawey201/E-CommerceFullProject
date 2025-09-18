@include('master.header')

<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        border-radius: 20px;
        overflow: hidden;
    }

    .card-header {
        font-size: 1.8rem;
        padding: 1.5rem;
        letter-spacing: 1px;
    }

    .card-body {
        font-size: 1.1rem;
        padding: 2rem;
    }

    .form-label {
        font-weight: bold;
        color: #444;
    }

    /* شكل الـ inputs Minimal */
    .form-control {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        background: transparent;
        padding: 10px 5px;
        font-size: 1rem;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
        border-bottom: 2px solid #d8cd94;
        box-shadow: none;
        outline: none;
    }

    .form-control:hover {
        border-bottom: 2px solid #b8ac70;
    }

    /* الأزرار */
    .btn-custom {
        background-color: #d8cd94;
        color: #fff;
        border-radius: 12px;
        padding: 10px 20px;
        font-size: 1.1rem;
        transition: all 0.3s ease-in-out;
        border: none;
    }

    .btn-custom:hover {
        background-color: #c4b66d;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .btn-secondary {
        border-radius: 12px;
        transition: all 0.3s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #555 !important;
        transform: translateY(-2px);
    }
</style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <!-- وسط الشاشة -->
            <div class="col-md-8 col-lg-6">
                <div class="shadow-lg card">
                    <div class="text-center text-white card-header" style="background-color:#d8cd94;">
                        تعديل البيانات الشخصية
                    </div>

                    <div class="card-body">
                        <!-- هنا الفورم -->
                        <form method="POST" action="EditDataUser-{{ $DataUser->id }}" enctype="multipart/form-data">
                            @csrf
                            <!-- الاسم + البريد -->
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">الاسم</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ $DataUser->name }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ $DataUser->email }}">
                                </div>
                            </div>

                            <!-- الهاتف + العنوان -->
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">رقم الهاتف</label>
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        value="{{ $DataProfileUSer->phone ?? 'غير متوفر' }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">العنوان</label>
                                    <input type="text" id="address" name="address" class="form-control"
                                        value="{{ $DataProfileUSer->address ?? 'غير متوفر' }}">
                                </div>
                            </div>

                            <!-- رفع صورة -->
                            <div class="mb-3">
                                <label for="image" class="form-label">تغيير الصورة الشخصية</label>
                                <input type="file" id="image" name="image" class="form-control">
                                @if ($DataUser->image)
                                    <img src="{{ asset('uploads/images/' . $DataUser->image) }}" alt="صورة المستخدم"
                                        style="width:200px; height:200px; border-radius:10px; margin-top:10px;">
                                @else
                                    <p>لا توجد صورة</p>
                                @endif
                            </div>

                            <!-- كلمة المرور -->
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">كلمة المرور الجديدة / السابقة</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm_password" class="form-label">تأكيد كلمة المرور</label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="form-control">
                                </div>
                            </div>

                            <!-- الأزرار -->
                            <div class="d-flex justify-content-between">
                                <a href="PageShowDataUser-{{$DataUser->id}}" class="btn btn-secondary">رجوع</a>
                                <button type="submit" class="btn btn-custom">
                                    حفظ التعديلات
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('master.footer')
