@component('components/post-featured-card', ['post' => $posts[0]])
@endcomponent
@if ($posts->count() > 1)
    <div class="lg:grid lg:grid-cols-6">

        @foreach ($posts as $key => $post)
            @if ($key > 0)
                @component('components/post-card', ['post' => $post, 'class' => $loop->iteration < 4 ? 'col-span-3'
                        : 'col-span-2' ]) @endcomponent @endif
                @endforeach

        </div>
    @endif
