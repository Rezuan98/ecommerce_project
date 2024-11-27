@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-left: 100px; ">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh; margin-top:100px;">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Banner List</h4>
                    <a href="{{ route('create.banner') }}" class="btn btn-info">Add New Banner</a>
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
                                <th scope="col">Banner Type</th>
                                <th scope="col">Banner Title</th>
                                <th scope="col">Banner Head</th>
                                <th scope="col">Banner Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $banner)
                            <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ ucfirst($banner->type) }}</td>
                                    <td>{{ $banner->banner_title ?? 'N/A' }}</td>
                                    <td>{{ $banner->banner_head ?? 'N/A' }}</td>
                                    <td>{{ $banner->banner_description ?? 'N/A' }}</td>
                                    <td>
                                        @if($banner->image)
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" style="width: 200px; height: 50px;">
                                        @else
                                            <span>No image found</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.banner', $banner->id) }}">Edit</a>
                                        <a class="btn btn-outline-danger btn-sm" href="{{ route('destroy.banner', $banner->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
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
