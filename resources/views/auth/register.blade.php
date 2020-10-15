<x-layouts.auth>
    <div class="h-screen w-screen flex items-center justify-center p-3">
        <div class="shadow-md p-5 rounded max-w-xl w-full">
            <h1 class="text-2xl font-bold">Laragam</h1>
            @if ($errors->any())
                <div>
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="w-full" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="my-2">
                    <label class="block" for="name">Name :</label>
                    <input class="block w-full shadow-sm p-2 bg-gray-50 border border-gray-200 rounded" type="name" name="name" id="name">
                </div>
                <div class="my-2">
                    <label class="block" for="email">Email :</label>
                    <input class="block w-full shadow-sm p-2 bg-gray-50 border border-gray-200 rounded" type="email" name="email" id="email">
                </div>
                <div class="my-2">
                    <label class="block" for="password">Password :</label>
                    <input class="block w-full shadow-sm p-2 bg-gray-50 border border-gray-200 rounded" type="password" name="password" id="password">
                </div>
                <div class="my-2">
                    <label class="block" for="password_confirmation">Confirm your password :</label>
                    <input class="block w-full shadow-sm p-2 bg-gray-50 border border-gray-200 rounded" type="password_confirmation" name="password_confirmation" id="password_confirmation">
                </div>
                <div class="mt-4">
                    <input class="px-4 py-2 shadow rounded bg-blue-600 text-white" type="submit" value="Create a new account">
                </div>
            </form>
        </div>
    </div>
</x-layouts.auth>