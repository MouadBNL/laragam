<article class="my-3 w-full border border-gray-200 rounded p-2">
    <header>
        <span class="font-bold">{{ $post->author->name }}</span>
    </header>
    <div>
        {{ $post->content }}
    </div>
</article>