<!-- resources/views/products/create.blade.php -->

@extends('layouts.app') <!-- تأكيد أنك تستخدم التصميم الخاص بتطبيق Laravel -->

@section('content')
    <main id="main" class="main">
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">الشهباء</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-4 border-primary">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">اضافة منتجات</h5>
                                        <p class="text-center small"> قم برفع الملف الذي يحتوي على المنتجات التي ترغب باضافتها </p>
                                    </div>

                                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="name" class="form-label">اسم المنتج</label>
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>

                                        <div class="col-12">
                                            <label for="fileInput" class="form-label"> الملف</label>
                                            <div class="input-group">
                                                <input type="file" name="excel_file" class="form-control" id="fileInput" required style="height: 150px;">
                                                <label class="input-group-text" for="fileInput">
                                                    <span class="d-none d-sm-inline">اسحب الملف الى هنا أو </span>اختر الملف
                                                </label>
                                            </div>
                                            <div class="invalid-feedback">من فضلك، قم بتحميل ملف المنتجات !</div>
                                        </div>

                                        <div class="col-6">
                                            <label for="category_id" class="form-label">الفئة</label>
                                            <select class="form-select" id="category_id" name="category_id" required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="type" class="form-label">الفئة</label>
                                            <select class="form-select" id="type" name="type" required>
                                               <option>M1</option>
                                               <option>M1</option>
                                               <option>M1</option>
                                               <option>M1</option>
                                            </select>
                                        </div>


                                        <div class="col-6">
                                            <label for="image_path" class="form-label">الصورة</label>
                                            <input type="text" class="form-control" id="image_path" name="image_path" required>
                                        </div>

                                        <div class="col-6">
                                            <label for="price" class="form-label">السعر</label>
                                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                                        </div>

                                        <div class="col-12">
                                            <label for="description" class="form-label">الوصف</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">إرسال البيانات</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->
@endsection
