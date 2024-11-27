@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('store.category') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center "  style="height: 100vh;">
            
            <!-- Correctly wrapped column inside row -->
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between ">
                       <div class="category"> <h4 class="card-title">Category</h4></div>
                       <div class="showbutton"><a href="{{ route('index.category') }}" class="btn btn-success">Category List</a></div>
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
                            <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category name...">
                       
                           
                        </div>
                        <div class="form-group mt-2">
                            <label for="formGroupExampleInput2">Icon</label>
                            <input name="icon" type="file" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                        </div>

                        <div class="form-group mt-2">
                          
                            
                            
                              
                        </div>


                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </div>
                </div>
                
              
            </div>
        </div>
        
    </div>
</form>



@endsection
