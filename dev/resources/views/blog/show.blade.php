@extends('layouts.app')

@section('content-blog')

    @if(session()->has('message'))
        <div style="display: flex; color: #ffffff; font-size: 30px; border-radius:20px; justify-content: center; align-items: center; background: #00b0ff; margin: 10px; padding: 20px;">
            <div class="alert" role="alert">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif


    <div class="container m-auto text-center pt-15 pb-5">

        <h1 style="text-align: center">{{$post->title}}</h1>
    </div>
    <div style="display: flex; justify-content: center;">

        <img style="max-width: 60%; height: auto; object-fit: cover;" src="/images/{{$post->image_path}}" alt="Image Description">
    </div>






    <div class="cont" style="margin: auto; height:80vh; width: 1000px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <p>{{$post->description}}</p>
        @if(Auth::user() && Auth::user()->id == $post->user_id )
            <div style=" display: flex;">
                <a href="/blog/{{$post->slug}}/edit" class="btn4" style="  margin-right: 10px; padding: 20px;">Edit post</a>

                <form method="POST" action="/blog/{{$post->slug}}">
                    @csrf
                    @method('delete')
                    <button type="submit" href="/blog/{{$post->slug}}/edit" class="btn3" style="margin-right: 10px; padding: 20px; border: none;">Delete post</button>
                </form>
            </div>

        @endif

        </div>
    </div>



@endsection
