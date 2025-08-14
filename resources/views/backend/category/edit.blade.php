@extends('layouts.backendlayout')
@section('content')

<div class="text-end">
    <button class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#basic-modal-preview">Edit Category</button>
</div>

<!-- Modal -->
<div id="basic-modal-preview" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-medium fs-base me-auto">Edit Category</h2> 
            </div>
            <div class="modal-body p-4"> 
                <form action="{{ route('category.store', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <label for="icon" class="form-label">Category Icon</label>
                        <input type="file" name="icon" id="icon" class="form-control">
                        @if($category->icon)
                            <img src="{{ asset('storage/' . $category->icon) }}" width="50" class="mt-2">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-full mt-3">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div> 

@push('js')
<script>
    let table = new DataTable('#dataTable', {
        responsive: true
    });
</script>
@endpush

@endsection
