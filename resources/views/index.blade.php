@foreach($posts as $post)

  <p><strong>id:</strong> {{$post->id}} <strong>titolo:</strong> {{$post->title}} <strong>categoria:</strong> {{$post->postToCategory->title}}<strong>descrizione:</strong> {{$post->postToPostInformation->description}}</p>

@endforeach
