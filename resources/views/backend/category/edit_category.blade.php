@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('update.category',) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center "  style="height: 70vh;">
            
            <!-- Correctly wrapped column inside row -->
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Category</h4>
                    </div>
                    <div class="card-body">
                      
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Category Name</label>
                            <input name="name" value="{{$edit_category->name  }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category name...">
                       
                           
                        </div>
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput2">Icon</label>
                            <input name="icon" type="file" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>


                        <input name="id" type="hidden" value="{{ $edit_category->id }}">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
</form>
@endsection
