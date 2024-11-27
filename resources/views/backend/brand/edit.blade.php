@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('update.brand') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center "  style="height: 70vh;">
            
            <!-- Correctly wrapped column inside row -->
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between ">
                        <div class="category"> <h4 class="card-title">Edit Brand</h4></div>
                        <div class="showbutton"><a href="{{ route('index.brand') }}" class="btn btn-success">Brand List</a></div>
                     </div>
                    <div class="card-body">
                      
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('info') }}
                        </div>
                        <br>
                    @endif
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Brand Name</label>
                            <input name="name" value="{{ $edit->name }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category name...">
                       
                           
                        </div>
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput2">Brand Logo</label>
                            <input name="logo" type="file" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>

                        <input type="hidden" value="{{ $edit->id }}" class="" name="id" id="">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
</form>
@endsection
