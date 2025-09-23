@include('master.header')

<style>
    /* ========= Inputs ========= */
.custom-input, .form-select {
    background: #f9fbfd;
    border: 1px solid #dee2e6;
    border-radius: 6px;      /* صغرت الحواف */
    padding: 6px 10px;       /* صغرت الحشوة الداخلية */
    font-size: 0.85rem;      /* صغرت حجم الخط */
    color: #333;
    transition: all 0.3s ease;
}

.custom-input:focus, .form-select:focus {
    border-color: #c9a227;
    background: #fff;
    box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.15);
}

.form-label {
    font-weight: 600;
    margin-bottom: 4px;   /* قللت المسافة */
    font-size: 0.85rem;   /* خليت الليبل أصغر */
    color: #495057;
}

textarea.custom-input {
    resize: none;
    min-height: 70px;     /* خلتها صغيرة */
}

/* ========= Section Titles ========= */
.form-section-title {
    font-size: 1rem;
    font-weight: 700;
    margin: 15px 0 10px;   /* قللت المسافات */
    border-left: 3px solid #c9a227;
    padding-left: 8px;
    color: #c9a227;
}

/* ========= Inputs ========= */
.custom-input, .form-select {
    background: transparent;           /* شيل الخلفية */
    border: none;                      /* شيل كل البوردات */
    border-bottom: 2px solid #c9a227;  /* خط دهبي من تحت */
    border-radius: 0;                  /* بدون حواف */
    padding: 6px 4px;                  /* حشوة صغيرة */
    font-size: 0.9rem;
    color: #333;
    transition: all 0.3s ease;
}

.custom-input:focus, .form-select:focus {
    border-color: #e0b84c;             /* لون أفتح عند التركيز */
    outline: none;                     /* شيل البوردر الأزرق */
    box-shadow: none;                  /* شيل أي ظل */
}

/* ========= Label ========= */
.form-label {
    font-weight: 600;
    margin-bottom: 4px;
    font-size: 0.85rem;
    color: #555;
}


    /* ========= Card Style ========= */
    .card {
        border: none;
        background: #fff;
    }

    /* ========= Buttons ========= */
    .btn-primary {
        background: linear-gradient(45deg, #c9a227, #0dcaf0);
        border: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-primary:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.2);
    }

    /* ========= Image Preview ========= */
    #mainImagePreview, #additionalImagesPreview img {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 4px;
        background: #f9f9f9;
    }

    #mainImagePreview {
        max-width: 200px;
        display: none;
    }

    #additionalImagesPreview {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 10px;
    }

    #additionalImagesPreview img {
        max-width: 100%;
        height: auto;
    }
</style>

<div class="container mt-5">
    <div class="p-4 border-0 shadow-sm card rounded-3">
        <h3 class="mb-4 text-center fw-bold text-primary">➕ Add New Product</h3>
        @if (session()->has('success'))
        <h3 class="mb-4 text-center fw-bold text-primary"> {{session('success')}}</h3>            
        @endif
        <form action="CreateNewProduct" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product Info -->
            <h6 class="form-section-title">Product Info</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control custom-input" placeholder="Enter product name">
                </div>
                <div class="col-md-6">
                    <label class="form-label">SKU</label>
                    <input type="text" name="sku" class="form-control custom-input" placeholder="Unique product code">
                </div>
            </div>
            <br>
            <!-- Pricing -->
            <h6 class="form-section-title">Pricing</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Price ($)</label>
                    <input type="number" name="price" step="0.01" class="form-control custom-input" placeholder="0.00">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Discount Price ($)</label>
                    <input type="number" name="discount_price" step="0.01" class="form-control custom-input" placeholder="0.00">
                </div>
            </div>
            <br>
            <!-- Category & Status -->
            <div class="mt-1 row g-3">
                <div class="col-md-6">
                    <label class="form-label">Category</label>
                    <select class="form-select custom-input w-100" name="category_id">
                        @foreach ($Categories as $Category)
                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select class="form-select custom-input w-100" name="status">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
            <br>
            <!-- Stock -->
            <h6 class="form-section-title">Stock</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Stock Quantity</label>
                    <input type="number" name="stock" class="form-control custom-input" placeholder="0">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Expiry Date</label>
                    <input type="date" name="expire_date" class="form-control custom-input">
                </div>
            </div>
            <br>
            <!-- Extra Info -->
            <h6 class="form-section-title">Extra Info</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Weight (kg)</label>
                    <input type="number" name="weight" step="0.01" class="form-control custom-input" placeholder="e.g. 1.25">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Dimensions (LxWxH)</label>
                    <input type="text" name="dimensions" class="form-control custom-input" placeholder="e.g. 10x20x30">
                </div>
            </div>
            <br>
            <!-- Image Upload -->
            <h6 class="form-section-title">Product Images</h6>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Main Image</label>
                    <input type="file" name="image" class="form-control custom-input" accept="image/*"
                        onchange="previewMainImage(event)">
                    <div class="mt-2">
                        <img id="mainImagePreview" src="#" alt="Main Image Preview">
                    </div>
                </div>
            
                <div class="col-md-6">
                    <label class="form-label">Additional Images</label>
                    <input type="file" name="images[]" class="form-control custom-input" accept="image/*" multiple
                        onchange="previewAdditionalImages(event)">
                    <div id="additionalImagesPreview" class="mt-2"></div>
                </div>
            </div> 
            <br>
            <!-- Description -->
            <div class="mt-3">
                <label class="form-label">Description</label>
                <textarea class="form-control custom-input" name="description" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <br>
            <!-- Department & Featured -->
            <div class="mt-1 row g-3">
                <div class="col-md-6">
                    <label class="form-label">Department</label>
                    <select class="form-select custom-input w-100" name="department_id">
                        @foreach ($Departments as $Department)
                            <option value="{{ $Department->id }}">{{ $Department->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="mt-4 form-check">
                        <input class="form-check-input" name="featured" type="checkbox" id="featuredCheck">
                        <label class="form-check-label" for="featuredCheck">Featured Product</label>
                    </div>
                </div>
            </div>
            <br>
            <!-- Submit -->
            <div class="mt-4 text-center">
                <button type="submit" class="px-5 py-2 shadow-sm btn btn-primary rounded-pill"> Save Product</button>
            </div>
        </form>
    </div>
</div>

<script>
    // عرض الصورة الرئيسية
    function previewMainImage(event) {
        const input = event.target;
        const preview = document.getElementById('mainImagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // عرض الصور الإضافية
    function previewAdditionalImages(event) {
        const input = event.target;
        const previewContainer = document.getElementById('additionalImagesPreview');
        previewContainer.innerHTML = '';

        if (input.files) {
            Array.from(input.files).forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        }
    }
</script>

@include('master.footer')
