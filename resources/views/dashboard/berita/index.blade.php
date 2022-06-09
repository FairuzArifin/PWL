@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

<div style="background-color: rgb(10, 245, 2);">
  <div class="container py-5">
    <h2>List Berita dan Infromasi</h2>
        @foreach($beritas as $berita)
        <div class="container py-5" style="background-color: rgb(255, 255, 255); margin-top:10px">
            <div class="post-item-image">
                <a style="color: black" href="{{route('tampil', $berita->id)}}">            
                </a>
            </div>
                    <h2><a href="{{route('tampil', $berita->id)}}">{{$berita->title}}</a></h2>
                    <p> {!! $berita->excerpt !!} </p>
                    <ul style="color: black">
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-user"></i> {{$berita->author->name}}</li>
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-clock-o"></i><time>  {{$berita->created_at}}</time></li>
                        <li style="display: inline; margin-right: 20px"><i class="fa fa-tags"></i> Berita</li>
                        <li style="display: inline" align="right">
                          <div class="pull-right">
                            <a href="{{route('tampil', $berita->id)}}">Continue Reading &raquo;</a>
                        </div>
                        </li>
                      </ul>
                </div>
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