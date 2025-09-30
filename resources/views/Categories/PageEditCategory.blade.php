@include('master.header')
<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="mb-5 row d-flex contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="p-4 bg-white info">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="p-4 bg-white info">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="p-4 bg-white info">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="p-4 bg-white info">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
        @if (session()->has('success'))
            <div>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="EditCategoryData-{{$category->id}}" method="POST" enctype="multipart/form-data"
                    class="p-5 bg-white contact-form">
                    @csrf
                    <div class="text-center col-md-6 order-md-last d-flex">
                        <h6>Edit Category {{ $category->name }}</h6>
                    </div>
                    <br>

                    {{-- Category Name --}}
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{$category->name }}" name="name">
                    </div>

                    {{-- Department Select --}}
                    <div class="form-group">
                        <select name="department_id" class="form-control">
                            @foreach ($Departments as $Department)
                                @if ($Department->id == $category->department_id)
                                    <option value="{{$Department->id}}" selected>
                                        {{$Department->name}}
                                    </option>
                                @else
                                    <option value="{{$Department->id}}">
                                        {{$Department->name}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    {{-- Image --}}
                    <div class="form-group">
                        <input type="file" class="form-control" name="image">
                        <br>
                        @if (!empty($category->image))
                            <img src="{{ asset('uploads/images/' . $category->image) }}"
                                style="width: 445px ; height: 150px;">
                        @endif
                    </div>

                    {{-- Description --}}
                    <div class="form-group">
                        <textarea name="description"cols="30" rows="7" class="form-control">{{ $category->description ?? 'invalid' }}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Create Category" class="px-5 py-3 btn btn-primary">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>
@include('master.footer')
