@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

<div style="background-color: rgb(110, 60, 26);">
  <div class="container py-5">
    <div class="row align-items-center py-5">
      <div class="col-lg-6">
        @foreach($beritas as $berita)
        <article class="post-item">
            <div class="post-item-image">
                <a href="{{route('tampil', $berita->id)}}">            
                </a>
            </div>
            <div class="post-item-body">
                <div class="padding-10">
                    <h2><a href="{{route('tampil', $berita->id)}}">{{$berita->title}}</a></h2>
                    <p> {!! $berita->excerpt !!} </p>
                </div>
                <div class="post-meta padding-10 clearfix">
                    <div class="pull-left">
                        <ul class="post-meta-group">
                            <li><i class="fa fa-user"></i><a href="#"> {{$berita->author->name}}</a></li>
                            <li><i class="fa fa-clock-o"></i><time> February 12, 2016</time></li>
                            <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                            <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('tampil', $berita->id)}}">Continue Reading &raquo;</a>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
      </div>
  </div>
</div>
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8">        
            <nav>
              <ul class="pager">
                <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
              </ul>
            </nav>
        </div> 
    </div>--}}
</div>
</div>

@include('dashboard.layouts.footer')

{{-- <div class="container mb-5">
  <div class="row">
    @foreach($beritas as $post)
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://source.unsplash.com/500x400/?disaster" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->body}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div> --}}