@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('store.subcategory') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center" style="margin-top:80px;">
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="category">
                            <h4 class="card-title">Sub-Category</h4>
                        </div>
                        <div class="showbutton">
                            <a href="{{ route('index.subcategory') }}" class="btn btn-success">Sub-Category List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('success') }}
                            </div>
                            <br>
                        @endif

                        <!-- Category Dropdown -->
                        <div class="form-group">
                            <label for="category">Category Name:</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="" disabled selected>Select a Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sub-Category Name -->
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput">Sub-Category Name:</label>
                            <input name="subcategory_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>

                        <!-- Image -->
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput2">Image:</label>
                            <input name="subcategory_image" type="file" class="form-control" id="formGroupExampleInput2">
                        </div>

                       
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
