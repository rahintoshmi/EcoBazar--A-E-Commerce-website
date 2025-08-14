@extends('layouts.backendlayout')
@section('content')

    <div class="container">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-medium fs-base me-auto">Edit Category</h2> 
            </div>
            <div class="modal-body p-4"> 
                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                        <label for="title" class="form-label">Category Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Current Icon:</label><br>
                        <img src="{{ asset('storage/' . $category->icon) }}" alt="Category Icon" width="60px">
                    </div>
                    <div class="form-group mt-3">
                        <label for="icon" class="form-label">Change Icon</label>
                        <input type="file" name="icon" id="icon" class="form-control">          
                    </div>
                    <button type="submit" class="btn btn-primary w-full mt-3">Update Category</button>
                    <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div> 

@endsection
