@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('update.banner', $banner->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT') <!-- Use the PUT method for updating -->
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="category">
                            <h4 class="card-title">Edit Banner</h4>
                        </div>
                        <div class="showbutton">
                            <a href="{{ route('index.banner') }}" class="btn btn-success">Banner List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                        @endif

                        <!-- Banner Type Selection -->
                        <div class="form-group">
                            <label for="type">Banner Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">Select Banner Type</option>
                                <option value="image" {{ $banner->type == 'image' ? 'selected' : '' }}>Top Banner</option>
                                <option value="text-1" {{ $banner->type == 'text-1' ? 'selected' : '' }}>Text Banner-1</option>
                                <option value="text-2" {{ $banner->type == 'text-2' ? 'selected' : '' }}>Text Banner-2</option>
                            </select>
                        </div>

                        <!-- Text Fields -->
                        <div id="text-fields" style="display: {{ $banner->type == 'text-1' || $banner->type == 'text-2' ? 'block' : 'none' }};">
                            <div class="form-group mt-2">
                                <label for="title">Banner Title</label>
                                <input name="title" value="{{ $banner->banner_title }}" type="text" class="form-control" id="title" placeholder="Enter banner title...">
                            </div>
                            <div class="form-group mt-2">
                                <label for="heading">Banner Heading</label>
                                <input name="heading" value="{{ $banner->banner_head}}" type="text" class="form-control" id="heading" placeholder="Enter banner heading...">
                            </div>
                            <div class="form-group mt-2">
                                <label for="description">Banner Description</label>
                                <textarea name="description"  class="form-control" id="description" placeholder="Enter banner description...">{{ $banner->banner_description }}</textarea>
                            </div>
                        </div>

                        <!-- Image Field -->
                        <div id="image-field" style="display: {{ $banner->type == 'image' ? 'block' : 'none' }};">
                            <div class="form-group mt-2">
                                <label for="image">Banner Image</label>
                                <input name="image" type="file" class="form-control" id="image">
                                @if ($banner->image)
                                <div class="mt-2">
                                    <img src="{{ asset('/storage/' . $banner->image) }}" alt="Banner Image" class="img-thumbnail" width="200">
                                </div>
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // Show/Hide fields based on the selected banner type
    document.getElementById('type').addEventListener('change', function () {
        const type = this.value;
        document.getElementById('text-fields').style.display = (type === 'text-1' || type === 'text-2') ? 'block' : 'none';
        document.getElementById('image-field').style.display = (type === 'image') ? 'block' : 'none';
    });
</script>
@endsection
