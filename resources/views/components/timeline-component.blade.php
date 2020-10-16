<section class="my-5">
    @forelse ($posts as $post)
        <x-post.single :post='$post'/>
    @empty
        <p>Sorry, There's no posts for you.</p>
    @endforelse
</section>