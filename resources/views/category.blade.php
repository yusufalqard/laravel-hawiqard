@extends ('layouts.main')

@section('container')
<h1 class="mb-5">Post Category :  {{ $category }}</h1>
<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-3">
    <article class="mb-5">
        <h2>
            <div class="card">
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <a href="/posts/{{ $post->slug }}" class="text-dark text-decoration-none">
                {{ $post->title }}
            </a>
            </div>
        </h2>
        <p class="card-text">
        <small class="text-body-secondary">
            {{  $post->excerpt }}
            </small>
        </p>
    </article>
</div>
            @endforeach
    </div>
</div>
@endsection

