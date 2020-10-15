<x-layouts.app>
    @guest
    <h1>Hello world</h1>
    @else
    <h1>Hello {{ auth()->user()->name }}</h1>
    @endguest
</x-layouts.app>