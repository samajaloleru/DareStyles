@extends('layouts.app')

@section('content')
    <div class="testimonials-3">
        <div class="container">
            <a href="/posts" class="btn btn-danger"> Go Back</a>
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="card card-blog card-plain text-center">
                        <div class="card-image">
                            <a href="#pablo">
                                <img class="img img-raised" src="/storage/cover_images/{{$post->cover_image}}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-category">
                                Created By <span>{{$post->user->name}}</span> On
                                <span class="badge badge-primary main-tag">{{$post->created_at}}</span>
                            </div>
                            <a href="javascrip: void(0);">
                                <h3 class="card-title">{{$post->title}}</h3>
                            </a>
                            <div class="card-description">
                                <p>{!!$post->body!!}</p>
                            </div>
                        </div>
                        {{-- this is to avoid guest from getting access to post --}}
                        @if (!Auth::guest())
                            @if (Auth::user()->id == $post->user_id)
                                <a href="/posts/{{$post->id}}/edit" class="mb-3 btn btn-warning btn-round btn-sm">Edit</a>

                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection