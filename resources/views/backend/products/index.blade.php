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
                <div class="d-flex gap-2 align-items-center">
                    <img width="50px" src="{{ getImage($product->featured_img) }}" alt="">
                     {{ $product->title }}
                </div>
            </td>
            <td>{{ $product->category->title ?? 'Unknown' }}</td>
            <td>
                @if($product->selling_price)
               <b> {{ number_format($product->selling_price,2) }} </b>
               <br><del>{{ number_format($product->price,2) }}</del>
                @else
                <b>{{ number_format($product->price,2)}}</b>  
                @endif
            </td>
            <td>{{ $product->sku }}</td>
            <td><button class="btn btn-sm btn-{{ $product->stock ? 'success' : 'danger'}}">{{ $product->stock ? 'Instock' : 'Out of Stock'}}</button></td>
            <td>{!! generalStatus($product->status) !!}</td>
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