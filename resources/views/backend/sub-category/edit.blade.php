@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('update.subcategory', $edit_subcategory->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center "  style="height: 70vh;">
            
            <!-- Correctly wrapped column inside row -->
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Sub-Category</h4>
                    </div>
                    <div class="card-body">
                      
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif

                    <div class="form-group">
                        <label for="category">Category Name:</label>
                        <select name="category_id" id="category" class="form-control">
                            <option value="" disabled selected>Select a Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id==$edit_subcategory->category_id?'selected':'' }} >
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{ $edit_subcategory->id }}">


                        <div class="form-group">
                            <label for="formGroupExampleInput"> Sub-Category Name</label>
                            <input name="subcategory_name" value="{{$edit_subcategory->subcategory_name??'No Name'  }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category name...">
                       
                           
                        </div>
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput2">Sub-Category Image</label>
                            <input name="icon" type="file" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
</form>
@endsection
