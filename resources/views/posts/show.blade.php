@extends('layouts.app')

@section('content')
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.2/styles/a11y-dark.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Show Post
                    <a class="btn btn-info" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                </div>

                <div class="card-body">
                        {{ csrf_field() }}
                        <label for="title">Post Title</label>
                        <input disabled id="title" class="input-group" type="text" name="title" value="{{ $post->title }}">
                        <br/>
                        <label for="content">Post Content</label>
                        <br/>
                        @markdown($post->content)
                        <br/>
                        <br/>
                        <a class="btn btn-primary" href="/posts">Return Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>
<script>
    function highlightCode() {
        var pres = document.querySelectorAll("pre>code");
        for (var i = 0; i < pres.length; i++) {
            hljs.highlightBlock(pres[i]);
        }
    }
    highlightCode();
    </script>
<script src="https://cdn.jsdelivr.net/npm/code-line"></script>
<script>CodeLine.initOnPageLoad()</script>
@endsection
