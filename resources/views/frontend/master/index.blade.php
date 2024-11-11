@extends('frontend.master.master')

@section('ftitle','Ecommerce')

@section('content')

   

    @include('frontend.parts.banner')
    @include('frontend.parts.categorybar')
    @include('frontend.parts.custom')
     @include('frontend.parts.new_arrival') 
    @include('frontend.parts.category_card')
    @include('frontend.parts.displaly_category')
    
    @include('frontend.parts.brand_display')
    @include('frontend.parts.category-2')
     @include('frontend.parts.category-3') 
     @include('frontend.parts.category-4')
     @include('frontend.parts.category-5')
     @include('frontend.parts.category-6')
     @include('frontend.parts.category-7')
     @include('frontend.parts.category-8')
     @include('frontend.parts.bulkorder')
     @include('frontend.parts.testimonial')
     @include('frontend.parts.slider')
     
     {{--
    @include('frontend.parts.category-4')
    @include('frontend.parts.category-5')
    @include('frontend.parts.category-6') --}}





@endsection