@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

<div style="background-color: rgb(9, 255, 0);">
    <div class="container py-5">
      <div class="row align-items-center py-5">

                        <article class="post-item post-detail">
                            <div class="post-item-image">
                                <a href="#">
                                    <img src="img/Post_Image_1.jpg" alt="">
                                </a>
                            </div>

                            <div class="post-item-body">
                                <div class="padding-10">
                                    <h1>{{$berita->title}}</h1>

                                    <div class="post-meta no-border">
                                        <ul class="post-meta-group">
                                            <li><i class="fa fa-user"></i><a href="#"> {{$berita->author->name}}</a></li>
                                            <li><i class="fa fa-clock-o"></i><time>  {{$berita->created_at}}</time></li>
                                            <li><i class="fa fa-tags"></i><a href="#"> Berita</a></li>
                                        </ul>
                                    </div>

                                    <p>{!! $berita->body !!}</p>
                                </div>
                            </div>
                        </article>
      </div>
    </div>
</div>
</div>


    @include('dashboard.layouts.footer')