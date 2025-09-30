@include('master.header')

<div class="container my-4">
    <form method="POST" action="Search" class="mb-4">
        @csrf
        <!-- البحث بالاسم أو الكود -->
        <div class="mb-3 row">
            <div class="col-md-12">
                <label for="search" class="form-label fw-bold">البحث بالاسم أو الكود</label>
                <div class="input-group">
                    <input type="text" name="search" id="search" class="form-control"
                        placeholder="ابحث بالاسم أو الكود..." value="{{ request('search') }}">
                </div>
            </div>
        </div>

        <!-- البحث بالفئات -->
        <div class="mb-3 row">
            <div class="col-md-6">
                <label for="category_id" class="form-label fw-bold">اختر الفئة</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="icon-list"></i></span>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">كل الفئات</option>
                        @foreach ($Categories as $Category)
                            <option value="{{ $Category->id }}"
                                {{ request('category_id') == $Category->id ? 'selected' : '' }}>
                                {{ $Category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <!-- البحث بالسعر -->
        <div class="mb-3 row">
            <div class="col-md-3">
                <label for="min_price" class="form-label fw-bold">السعر الأدنى</label>
                <input type="number" name="min_price" id="min_price" class="form-control" placeholder="0"
                    value="{{ request('min_price') }}">
            </div>
            <div class="col-md-3">
                <label for="max_price" class="form-label fw-bold">السعر الأعلى</label>
                <input type="number" name="max_price" id="max_price" class="form-control" placeholder="1000"
                    value="{{ request('max_price') }}">
            </div>
        </div>
        <div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="icon-search"></i> بحث
                </button>
            </div>
        </div>
    </form>
</div>

@include('master.footer')
