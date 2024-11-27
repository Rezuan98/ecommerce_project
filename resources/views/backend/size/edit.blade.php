@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('update.size',) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center "  style="height: 70vh;">
            
            <!-- Correctly wrapped column inside row -->
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Size</h4>
                    </div>
                    <div class="card-body">
                      
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif
                        <div class="form-group">
                            <label for="formGroupExampleInput"> Size </label>
                            <input name="size" value="{{$edit->size  }}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category name...">
                       
                           
                        </div>
                        


                        <input name="id" type="hidden" value="{{ $edit->id }}">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
                
              
            </div>
        </div>
    </div>
</form>
@endsection
