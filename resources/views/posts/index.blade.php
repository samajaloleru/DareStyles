@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/posts/create">Create a Post</a>
            </div>
            
        </div>
    </div>
    <div class="testimonials-3">
        <div class="container">
            @if (count($posts) > 0)
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card card-blog">
                                <div class="card-image">
                                  <a href="#pablo">
                                    <img class="img img-raised" src="/storage/cover_images/{{$post->cover_image}}" />
                                  </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-info">Enterprise</h6>
                                    <h5 class="card-title">
                                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                    </h5>
                                    <p class="card-description">
                                        {!!$post->body!!}
                                        {{-- this is for reading html tags from the text editor --}}
                                        <br/>
                                    </p>
                                    <hr>
                                    <div class="card-footer">
                                        <div class="author">
                                            <a href="#pablo">
                                                <img src="./img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
                                                <span>{{$post->user->name}}</span>
                                            </a>
                                        </div>
                                        <div class="stats">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> {{$post->created_at}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        {{$posts->links()}}
                    </ul>
                </nav> for pagination --}}
            @else
                <p>No posts found</p>
            @endif
        </div>
    </div>
    
@endsection