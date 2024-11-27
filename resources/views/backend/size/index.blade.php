@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-left: 200px; margin-top: 80px;">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Size List</h4>
                    <a href="{{ route('create.size') }}" class="btn btn-info">Add New Size</a>
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
                                <th scope="col">Size</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($info as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->size }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.size', $item->id) }}">Edit</a>
                                        <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.size', $item->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
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
