@extends('layouts.backendlayout')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('backend/css/rte_theme_default.css') }}">
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    @endpush

    <div class="card">
        <div class="card-header">Add Products</div>
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row" style="justify-content: space-between">
                    <div class="col-lg-9">
                        <div class="form-group mb-3 my-2">
                            <label for="">Product Name <b class="text-theme-6">*</b></label>
                            <input type="text" name="title" class="form-control">
                            @error('title')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        {{-- SKU,price,selling --}}
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">Price <b class="text-theme-6">*</b></label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">Selling Price</label>
                                    <input type="number" name="selling_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">SKU</label>
                                    <input type="text" name="sku" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-3 my-2 mt-2">
                            <label for="">
                                Short Details
                            </label>
                            <textarea name="short_details" id="short_details" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3 my-2">
                            <label for="">
                                Long Details
                            </label>
                            <textarea name="long_details" id="long_details" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Additional Info
                            </label>
                            <textarea name="additional_info" id="additional_info" class="form-control"></textarea>
                        </div>


                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option disabled selected>Select a Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Featured Image</label>
                            <input type="file" class="filepond" id="" name="featured_img">
                             @error('featured_img')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Gallery Images</label>
                            <input type="file" name="gallImages[]" class="filepondGallery" id="" multiple>
                             @error('gallImages.*')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        <button class="btn btn-primary w-full">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
        <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
        <script>
            FilePond.registerPlugin(FilePondPluginImagePreview);
            $('.filepond').filepond({
                storeAsFile:true,
            });

            $('.filepondGallery').filepond({
                allowMultiple: true,
                storeAsFile:true,
            });
        </script>
    @endpush

    @push('js')
        <script src="{{ asset('backend/js/rte.js') }}"></script>
        <script src="{{ asset('backend/js/all_plugins.js') }}"></script>
        <script>
            var editor1 = new RichTextEditor('#short_details');
            var editor1 = new RichTextEditor('#long_details');
            var editor1 = new RichTextEditor('#additional_info');
        </script>
    @endpush
@endsection




