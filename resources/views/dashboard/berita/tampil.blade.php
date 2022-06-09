@extends('dashboard.layouts.main')

@section('content')

@include('dashboard.layouts.navbar')

<div style="background-color: rgb(9, 255, 0);">
    <div class="container py-5">
    <button type="button" id="sidebarCollapse" class="btn btn-info" onclick="history.back()">Kembali</button>
        <article class="post-item post-detail">
            <div class="post-item-body">
                <div class="padding-10" align="center">
                    <h1>{{$berita->title}}</h1>
                        <ul style="color: black">
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-user"></i> {{$berita->author->name}}</li>
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-clock-o"></i><time>  {{$berita->created_at}}</time></li>
                            <li style="display: inline; margin-right: 20px"><i class="fa fa-tags"></i> Berita</li>
                        </ul>
                    <p>{!! $berita->body !!}</p>
                </div>
            </div>
        </article>
      </div>
    </div>
</div>
</div>


    @include('dashboard.layouts.footer')