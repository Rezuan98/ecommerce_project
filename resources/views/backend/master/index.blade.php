@extends('backend.master.master')


@section('backend-contents')
<div class="container my-5 " style="margin-left: 200px;margin-top: 100px; width:80%">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
<div class="row">
<div class="col-xl-3 col-md-6">
<div class="card bg-primary text-white mb-4">
<div class="card-body"><h4>Total Products</h4></div>
<div class="card-footer d-flex align-items-center justify-content-between">
    <a style="text-decoration: none;color:white;font-weight:bold;" class="small text-white stretched-link" href="#">{{ $idcount }}</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-warning text-white mb-4">
<div class="card-body"><h4>Total Category</h4></div>
<div class="card-footer d-flex align-items-center justify-content-between">
    <a style="text-decoration: none;color:white;font-weight:bold;" class="small text-white stretched-link " href="#">{{ $categorycount }}</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-success text-white mb-4">
<div class="card-body"><h4>Total Subcategory</h4></div>
<div class="card-footer d-flex align-items-center justify-content-between">
    <a style="text-decoration: none;color:white;font-weight:bold;" class="small text-white stretched-link" href="#">{{ $totalsubcategory }}</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
<div class="card bg-danger text-white mb-4">
<div class="card-body"><h4>Total Sell</h4></div>
<div class="card-footer d-flex align-items-center justify-content-between">
    <a style="text-decoration: none;color:white;font-weight:bold;" class="small text-white stretched-link" href="#">{{ $totalsell }}</a>
    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
</div></div>

@endsection