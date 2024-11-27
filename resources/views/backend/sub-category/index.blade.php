@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-left: 100px; margin-top: 100px;">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Sub-Category List</h4>
                    <a href="{{ route('create.subcategory') }}" class="btn btn-info">Add New Sub-Category</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategory as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->category->name ?? 'No category' }}</td>
                                    <td>{{ $item->subcategory_name }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="Sub-Category Image" style="width: 50px; height: 50px;">
                                        @else
                                            <span>No image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.subcategory', $item->id) }}">Edit</a>
                                        <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.subcategory', $item->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
