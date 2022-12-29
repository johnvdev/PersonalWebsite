@foreach ($posts as $post)
    <article>
        <a href="posts/{{$post->slug}}">{{$post->title}}</a>
        <p>{{$post->exerpt}}</p>
    </article>
@endforeach