@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('store.banner') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="category">
                            <h4 class="card-title">Add New Banner</h4>
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
                                <option value="image">Top Banner</option>
                                <option value="text-1">Text Banner-1</option>
                                <option value="text-2">Text Banner-2</option>
                            </select>
                        </div>

                        <!-- Text Fields -->
                        <div id="text-fields" style="display: none;">
                            <div class="form-group mt-2">
                                <label for="title">Banner Title</label>
                                <input name="title" value="" type="text" class="form-control" id="title" placeholder="Enter banner title...">
                            </div>
                            <div class="form-group mt-2">
                                <label for="heading">Banner Heading</label>
                                <input name="heading" value="" type="text" class="form-control" id="heading" placeholder="Enter banner heading...">
                            </div>
                            <div class="form-group mt-2">
                                <label for="description">Banner Description</label>
                                <textarea name="description" class="form-control" id="description" placeholder="Enter banner description..."></textarea>
                            </div>
                        </div>

                        <!-- Image Field -->
                        <div id="image-field" style="display: none;">
                            <div class="form-group mt-2">
                                <label for="image">Banner Image</label>
                                <input name="image" type="file" class="form-control" id="image">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const typeSelect = document.getElementById('type');
        const textFields = document.getElementById('text-fields');
        const imageField = document.getElementById('image-field');

        typeSelect.addEventListener('change', function () {
            const selectedValue = this.value;

            if (selectedValue === 'text-1' || selectedValue === 'text-2') {
                // Show text fields and hide the image field
                textFields.style.display = 'block';
                imageField.style.display = 'none';
            } else if (selectedValue === 'image') {
                // Show the image field and hide text fields
                textFields.style.display = 'none';
                imageField.style.display = 'block';
            } else {
                // Hide both fields when no valid option is selected
                textFields.style.display = 'none';
                imageField.style.display = 'none';
            }
        });
    });
</script>
