@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Posts</h1>
            <hr>
            <br>
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <img style="width: 100%; height: 100% !important; border-radius: 10px;" src="/images/example.png" alt="post-image" />
                    </div>
                    <div class="col-md-9 col-sm-12" style="padding-top: 5px;">
                        <ul class="category-list">
                            <li>Cooking</li>
                            <li>How-To</li>
                            <li>Lifestyle</li>
                        </ul>
                        <h2>{{ $post->title }}</h2>
                        <ul class="by-list">
                            <li><img class="profile-image" src="/images/pp.jpg" alt="Profile Picture"></li>
                            <li>
                                <ul class="about-list">
                                    <li>Ben Davies</li>
                                    <li><i class="far fa-clock"></i> 5 Hours Ago</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>  
            @endforeach
        </div>
    </div>
</div>
@endsection
