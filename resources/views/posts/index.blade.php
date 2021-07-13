@component('components/layout')

    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            @component('components.posts-grid', ['posts' => $posts])

            @endcomponent

        @else
            <p class="text-center">No post yet . Please check back later</p>

        @endif

    </main>
    {{-- @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }} </a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach --}}
@endcomponent