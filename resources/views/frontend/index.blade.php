@extends('layouts.app')

@section('title',"Blogging Website")

@section('meta_description',"Blogging Website")

@section('meta_keyword', "Blogging Website")



@section('content')

<div class="bg-danger py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="owl-carousel category-carousel owl-theme">
            @foreach($all_categories as $all_cate_item)
                <div class="item">
                    <a href="{{ url('category/'. $all_cate_item -> slug)}}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{asset('uploads/category/'.$all_cate_item -> image)}}" alt="Image">
                        <div class="card-body">
                            <h5 class="text-dark">{{$all_cate_item -> name}}</h5>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>

<div class="py-1 bg-light">
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise Here</h3>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Blog App</h4>
                <div class="underline"></div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline"></div>
                </div>
                @foreach($all_categories as $all_cateitems)
                <div class="col-md-3">
                <div class="card card-body mb-3">
                    <a href="{{ url('category/'.$all_cateitems -> slug)}}" class="text-decoration-none">
                    <h5 class="text-dark mb-0">{{$all_cateitems -> name}}</h4>
                    </a>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Post List</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
            @foreach($latest_posts as $latest_post_item)
                <div class="card card-body mb-3">
                    <a href="{{ url('category/'.$latest_post_item->category-> slug.'/'.$latest_post_item -> slug)}}" class="text-decoration-none">
                    <h5 class="text-dark mb-0">{{$latest_post_item -> name}}</h4>
                    </a>
                    <h6>Posted On:{{$latest_post_item -> created_at -> format('d-m-Y')}}</h6>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
            <div class="border text-center p-3">
            <h3>Advertise Here</h3>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection