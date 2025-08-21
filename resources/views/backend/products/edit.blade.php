@extends('layouts.backendlayout')
@section('content')
    @push('css')
        <link rel="stylesheet" href="{{ asset('backend/css/rte_theme_default.css') }}">
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
    @endpush

    <div class="card">
        <div class="card-header">Edit Products</div>
        <div class="card-body">
            <form action="{{ route('products.update' ,$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row" style="justify-content: space-between">
                    <div class="col-lg-8">
                        <div class="form-group mb-3 my-2">
                            <label for="">Product Name <b class="text-theme-6">*</b></label>
                            <input type="text" name="title" class="form-control" value="{{ $product->title }}">
                            @error('title')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        {{-- SKU,price,selling --}}
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">Price <b class="text-theme-6">*</b></label>
                                    <input type="number" name="price" class="form-control" value="{{ $product->price }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">Selling Price</label>
                                    <input type="number" name="selling_price" class="form-control" value="{{ $product->selling_price }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group my-2">
                                    <label for="">SKU</label>
                                    <input type="text" name="sku" class="form-control" value="{{ $product->sku }}">
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-3 my-2 mt-2">
                            <label for="">
                                Short Details
                            </label>
                            <textarea name="short_details" id="short_details" class="form-control">{!! $product->short_details !!}</textarea>
                        </div>
                        <div class="form-group mb-3 my-2">
                            <label for="">
                                Long Details
                            </label>
                            <textarea name="long_details" id="long_details" class="form-control">{!! $product->long_details !!}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">
                                Additional Info
                            </label>
                            <textarea name="additional_info" id="additional_info" class="form-control">{!! $product->additional_info !!}</textarea>
                        </div>


                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option disabled selected>Select a Category</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id == $product->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            @if($product->featured_img)
                                <img src="{{ getImage($product->featured_img) }}" alt="{{ $product->title }}" width="50%">
                            @endif
                            <label for="">Featured Image</label>
                            <input type="file" class="filepond" id="" name="featured_img">
                             @error('featured_img')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        <div class="form-group">
                            @if(count(json_decode($product->gall_img)) > 0)
                                <div class="row justify-content-between">
                                    @foreach (json_decode($product->gall_img) as $gallImage)
                                        <div class="col-md-3">
                                            <img src="{{ getImage($gallImage) }}" alt="{{ $product->title }}" class="img-fluid">

                                        </div>
                                    @endforeach
                                    
                                </div>
                            @endif
                            <label for="">Gallery Images</label>
                            <input type="file" name="gallImages[]" class="filepondGallery" id="" multiple>
                             @error('gallImages.*')
                               <span class="text-theme-6">{{ $message }}</span>   
                            @enderror
                        </div>
                        <button class="btn btn-primary w-full">Update Product</button>
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



