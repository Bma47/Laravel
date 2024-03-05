@extends('layouts.app')

          @section('content-blog')

              @if(session()->has('message'))
                  <div style="display: flex; color: #ffffff; font-size: 30px; border-radius:20px; justify-content: center; align-items: center; background: #00b0ff; margin: 10px; padding: 20px;">
                      <div class="alert" role="alert">
                          {{ session()->get('message') }}
                      </div>
                  </div>
              @endif
              <div class="container">
                  <h1 style="text-align: center">All Posts</h1>
              </div>

@if(Auth::check())

    <div class="container">
        <a href="/blog/create" class="btn2" style="margin: 10px; padding: 10px;">Add post</a>
    </div>
@endif





              @foreach($posts as $post)


<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b-gray-300">
{{--    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b-gray-300">--}}

    <div style="display: flex; justify-content: center;">
        <img style="max-width: 100%; height: auto; object-fit: cover;" src="/images/{{$post->image_path}}" alt="Image Description">
    </div>


    <div>
        <br>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0" >{{$post->title}}</h2>
        <div>
            By: <span class="text-gray-700 italic ">{{$post->user->name}}</span><br>
            on: <span class="text-gray-700 italic ">{{ date('d-m-Y', $post->update_at)}}</span><br>
{{--            on: <span class="text-gray-700 italic ">{{ date('d-m-Y', strtotime('$post->update_at')}}</span><br>--}}

            create: <span class="text-gray-700 italic ">{{ date('d-m-Y', $post->create_at)}}</span>

<div style="height: 300px; ">
            <p class="text-l text-gray-700 py-8 leading-6">
                {{$post->description}}
            </p>
    <div style="height: 300px">

        <a href="/blog/{{$post->slug}}" class="btn2">Read More</a>

    </div>
</div>

        </div>
        </div>
    </div>

<br>
<hr class="m-10">

              @endforeach

          @endsection
