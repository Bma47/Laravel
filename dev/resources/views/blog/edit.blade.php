@extends('layouts.app')

@section('content-blog')


    <div class="container" style="font-family: 'Merienda', cursive;">
        <br><br><br>
        <h1 class="text " style="">Edit post</h1>
    </div>

    <div class="container">
        <form class="m-10" action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}"
                   style="padding: 20px;">

            <textarea style="padding: 20px; height: 300px; "
                      name="description"
                      type="description"
                      placeholder ="description">{{$post->description}}
</textarea>
            <div style="display: flex; flex-direction: column; align-items: center;">
                <label for="dropzone-file" class="file-upload-label">
                    <input id="dropzone-file" type="file" name="image" class="hidden" />
                    Click to upload
                </label>
                <button class="submit-button">Submit the post</button>
            </div>


        </form>

    </div>



@endsection
