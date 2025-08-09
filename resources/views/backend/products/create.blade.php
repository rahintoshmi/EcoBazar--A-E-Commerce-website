@extends('layouts.backendlayout')
@section('content')
@push('css')
 <link rel="stylesheet" href="{{asset('backend/css/rte_theme_default.css')}}">
@endpush
@push('js')
 <script src="{{asset('backend/js/rte.js')}}"></script>
 <script src="{{asset('backend/js/all_plugins.js')}}"></script>
 <script>
    var editor1 = new RichTextEditor("#short_details");
     var editor1 = new RichTextEditor("#long_details");
      var editor1 = new RichTextEditor("#additional_info");
 </script>
@endpush
<div class="card">
    <div class="card-header">Add Products</div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="form-group mb-3 my-2">
                        <label for="">Product Name <b class="text-theme-6">*</b></label>
                        <input type="text" name="title" class="form-control">
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
                    <div class="form-group mb-3">
                        <label for="">
                            Short Details
                        </label>
                        <textarea name="short_details" id="short_details"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">
                            Long Details
                        </label>
                        <textarea name="long_details" id="long_details"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">
                            Additional Info
                        </label>
                        <textarea name="additional_info" id="additional_info"></textarea>
                    </div>
                    

                </div>
                <div class="col-lg-4"></div>
            </div>
        </form>
    </div>
</div>




     
 

@endsection