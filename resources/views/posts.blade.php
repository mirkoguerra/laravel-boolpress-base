@extends('layouts.layout')
@section('title', 'tutti i post')
@section('content')
<main class="posts">
  <div class="sub-posts">
    @foreach($posts as $post)
    <section class="post">
      <div class="left">
        <p><strong>titolo:</strong> {{$post->title}}</p>
        <p><strong>categoria:</strong> {{$post->postToCategory->title}}</p>
        <p><strong>descrizione:</strong> {{$post->postToPostInformation->description}}</p>
        <p><strong>tags:</strong>
          @foreach($post->postToTag as $tag)
            {{$tag->name}}
            @endforeach
        </p>
      </div>
      <div class="right">
        <a href="{{ route('posts.show', $post->id) }}">Dettagli</a>
      </div>
    </section>
    @endforeach
  </div>
</main>
@endsection
