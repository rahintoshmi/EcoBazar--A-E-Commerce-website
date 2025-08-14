@extends('layouts.backendlayout')
@section('content')

<div class="text-end">
    <a href="{{route('products.create')}}" class="btn btn-primary mt-3 mb-3">Add Products +</a>
</div>
{{-- @error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
@error('icon')
<div class="alert alert-danger">{{ $message }}</div>
@enderror --}}


<table class="table table-responsive table-bordered table-striped" id="dataTable">
    <thead>
        <tr>
            <th>Sl.</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>SKU</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>$product )
        <tr>
            <td>{{ ++$key }}</td>
            <td>
                <img width="40px" src="{{ asset('storage/'.$product->featured_img) }}" alt="">
                {{ $product->title }}</td>
            <td>{{ $category->category_id->title ?? 'No Category' }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->sku }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->status }}</td>
            <td>Edit</td>
        </tr>

            
        @endforeach
        
     
    </tbody>
</table>


{{-- <!-- Modal -->
<!-- BEGIN: Modal Content -->
 <div id="basic-modal-preview" class="modal fade" tabindex="-1" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
            <!-- BEGIN: Modal Header -->
             <div class="modal-header">
                 <h2 class="fw-medium fs-base me-auto">Add Category</h2> 
             </div>
             <div class="modal-body p-4"> 
                <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-label">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="icon" class="form-label">Category Icon</label>
                        <input type="file" name="icon" id="icon" class="form-control">
                    </div>
                    <button class="btn btn-primary w-full mt-3">Save</button>
                </form>
                
            </div>
         </div>
     </div>
 </div>  --}}
 @push('js')
 <script>
    let table = new DataTable('#dataTable', {
    responsive: true
   });
 </script>

     
 @endpush

@endsection