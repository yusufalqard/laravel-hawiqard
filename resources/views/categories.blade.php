@extends ('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories </h1>

    @foreach ($categories as $category)
    <ul>
        <h2>
            <a href="/categories/{{ $category->slug }}">
                {{ $category->name }}
            </a>
        </h2>
    </ul>
    </article>
    @endforeach
@endsection

