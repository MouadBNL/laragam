<nav class="flex items-center justify-between flex-wrap bg-blue-700 py-2 px-2 md:px-6 shadow-lg">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
        <span class="font-semibold text-xl tracking-tight">Laragam</span>
    </div>
    <div class="block ">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input class="py-2 px-4 border border-white text-white rounded bg-blue-700 hover:bg-blue-600" type="submit" value="Logout">
        </form>
    </div>
</nav>