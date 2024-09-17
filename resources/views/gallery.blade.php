@extends('layouts.main')

@section('content')

<section class="page_banner" style="background-image: url('assets/images/shapes/tyre_print_3.svg');">
    <div class="container">
        <ul class="breadcrumb_nav unordered_list">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog_2.html">Gallery</a></li>
        </ul>
        <h1 class="page_title wow" data-splitting>Gallery</h1>
    </div>
</section>
@include('partials.gal')
@endsection