@extends('layouts.app')

@section('title', 'Home')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home/home.css') }}">
@endpush

@section('content')
<!-- <h1>Welcome!</h1>
@auth
<p>You are logged in.</p>
@else
<p>Hello, Guest!</p>
@endauth -->
<div id="hero">
    <h4>WELCOME TO BLOG</h4>
    <h2>Create narratives that ignites inspiration,</h2>
    <h2>Knowledge and Entertainment</h2>


</div>


<div id="main-item">
    <img src="{{ asset('asset/images/computer-1.jpg') }}" alt="comptuer-1" id="main-img">
    <div id="heading-part">
        <div id="img-title">
            <img src="{{ asset('asset/icons/netflix.png') }}" style="width: 20px;" alt="profile-logo">
            <div>
                <span>Netflix</span>
                <span>•</span>
                <span> 12 minutes ago </span>
            </div>
        </div>
        <h2>Where To Watch 'John Wick: Chapter 4'</h2>
        <p>
            There's been no official announcement release regarding to John Wick.<br>
            Now,I have decided Lorem ipsum dolor, sit amet consectetur<br>
            adipisicing elit. Ab iusto minus est delectus inventore magni ea<br>
            voluptatem non ratione, ipsa sit eligendi quo at atque suscipit<br>
            commodi quaerat unde corrupti?
        </p>
        <div>
            <span>Movies</span>
            <span>•</span>
            <span>4 min read</span>
        </div>
    </div>
</div>

<div id="latest-posts">
    <div id="latest-post">
        <h2>Latest Posts</h2>
        <h2>See all</h2>
    </div>
    <div id="more-item">
        <div id="item-1">
            <img src="#" alt="image">
            <div>
                <span>Netflix</span>
                <span>•</span>
                <span> 12 minutes ago </span>
            </div>
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor, sit amet <br>
                consectetur adipisicing elit. <br>
                Debitis eligendi deleniti provident,<br>
                quis et voluptatibus, officia, nihil <br>
                quae nostrum accusamus architecto. <br>
                Odit earum consequatur et placeat ducimus! <br>
                Accusantium, consequuntur aliquam.
            </p>
            <div>
                <span>Movies</span>
                <span>•</span>
                <span>4 min read</span>
            </div>
        </div>

        <div id="item-2">
            <img src="#" alt="image">
            <div>
                <span>Netflix</span>
                <span>•</span>
                <span> 12 minutes ago </span>
            </div>
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor, sit amet <br>
                consectetur adipisicing elit. <br>
                Debitis eligendi deleniti provident,<br>
                quis et voluptatibus, officia, nihil <br>
                quae nostrum accusamus architecto. <br>
                Odit earum consequatur et placeat ducimus! <br>
                Accusantium, consequuntur aliquam.
            </p>
            <div>
                <span>Movies</span>
                <span>•</span>
                <span>4 min read</span>
            </div>
        </div>

        <div id="item-3">
            <img src="#" alt="image">
            <div>
                <span>Netflix</span>
                <span>•</span>
                <span> 12 minutes ago </span>
            </div>
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor, sit amet <br>
                consectetur adipisicing elit. <br>
                Debitis eligendi deleniti provident,<br>
                quis et voluptatibus, officia, nihil <br>
                quae nostrum accusamus architecto. <br>
                Odit earum consequatur et placeat ducimus! <br>
                Accusantium, consequuntur aliquam.
            </p>
            <div>
                <span>Movies</span>
                <span>•</span>
                <span>4 min read</span>
            </div>
        </div>
        <div id="item-1">
            <img src="#" alt="image">
            <div>
                <span>Netflix</span>
                <span>•</span>
                <span> 12 minutes ago </span>
            </div>
            <h2>Title</h2>
            <p>
                Lorem ipsum dolor, sit amet <br>
                consectetur adipisicing elit. <br>
                Debitis eligendi deleniti provident,<br>
                quis et voluptatibus, officia, nihil <br>
                quae nostrum accusamus architecto. <br>
                Odit earum consequatur et placeat ducimus! <br>
                Accusantium, consequuntur aliquam.
            </p>
            <div>
                <span>Movies</span>
                <span>•</span>
                <span>4 min read</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div id="footer">
    <div id="footer-blog">
        <h2>BLOG</h2>
        <p>
            Craft narratives that ignites inspiration<br>
            Knowledge and Entertainment.
        </p>

        <div id="socials">
            <span>facebook</span>
            <span>instagram</span>
            <span>telegram</span>
        </div>
    </div>

    <div id="categories">
        <div id="category-first">
            <div id="business">
                <h1>Business</h1>
                <ul>
                    <li>Startup</li>
                    <li>Employee</li>
                    <li>success</li>
                </ul>
            </div>
            <div id="business">
                <h1>Business</h1>
                <ul>
                    <li>Startup</li>
                    <li>Employee</li>
                    <li>success</li>
                </ul>
            </div>
        </div>
        <div id="category-second">
            <div id="enertainment">
                <h1>Entertainment</h1>
                <ul>
                    <li>Startup</li>
                    <li>Employee</li>
                    <li>success</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection