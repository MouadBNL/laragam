<form action="{{ route('posts.store') }}" method="post" class="rounded w-full">
    @csrf
    <textarea placeholder="What's on you mind, {{ auth()->user()->name }} ?" class="rounded border border-gray-200 p-4 w-full" name="content"></textarea>
    <input type="submit" value="Post" class="px-3 py-1 bg-blue-600 text-white rounded shadow">
</form>