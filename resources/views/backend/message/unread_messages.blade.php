@extends('backend.master.master')

@section('backend-contents')
<div class="container" style="margin-left:100px; margin-top:80px;">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Unread Messages</h4>
                    <a href="{{ route('show.all.message') }}" class="btn btn-info">See All Message</a>
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
                            
                            <tr class="bg-color-cyan">

                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Message</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unreadmessage as $key => $item)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $item->name }}</td>
    <td>
        {{ $item->phone }}
    </td>
    <td>
        {{ $item->message }}
    </td>
    <td>
        <div class="actioncontainer d-flex m-2 justify-content-between">
            <div class="action1">
                <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.category', $item->id) }}">Edit</a>
                <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.category', $item->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
            </div>
            
        </div>
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


