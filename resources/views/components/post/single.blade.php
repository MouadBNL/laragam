<article class="my-3 w-full border border-gray-200 rounded p-2 relative">
    <header>
        <span class="font-bold">{{ $post->author->name }}</span>
    </header>
    <div>
        {{ $post->content }}
    </div>
    @if($post->author->id == auth()->user()->id)
    <span class="absolute top-0 right-0 p-2">
        <form action="{{ route('posts.delete', $post->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="bg-opacity-0 color-red-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
            </button>
        </form>
    </span>
    @endif
</article>