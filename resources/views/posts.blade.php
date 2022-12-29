@foreach ($posts as $post)
    <article>
        <a href="post/{{$post->slug}}">{{$post->title}}</h1>
        <p>{{$post->exerpt}}</p>
    </article>
@endforeach