@include('user.share.header')
@vite('resources/css/app.css')


<div class="bg-yellow-200 py-8 px-4 shadow rounded-lg w-full h-full flex justify-center items-center">
    <div>
        <h1 class="text-2xl mb-6 text-gray-700 font-medium text-center">Login</h1>
        <form method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>
                <input id="email" type="email" class="w-full border border-gray-400 p-2 rounded-lg" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password
                </label>
                <input id="password" type="password" class="w-full border border-gray-400 p-2 rounded-lg"
                    name="password" required autocomplete="current-password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-4 rounded-lg">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
