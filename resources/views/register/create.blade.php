@component('components.layout')
    <section class="px-6 py-8 mt-10 max-w-lg mx-auto bg-gray-100 p-6 rounded-xl border border-gray-200 ">
        <h1 class="text-center font-bold text-xl ">Register</h1>
        <main class="max-w-lg mx-auto">
            <form action="/register" method="POST" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="border border-gray-400 p-2 w-full">
                </div>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                @enderror
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                    <input type="text" value="{{ old('username') }}" name="username"
                        class="border border-gray-400 p-2 w-full">
                </div>
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                @enderror
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">email</label>
                    <input type="text" value="{{ old('email') }}" name="email" required
                        class="border border-gray-400 p-2 w-full">
                </div>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                @enderror
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>
                    <input type="password" required name="password" class="border border-gray-400 p-2 w-full">
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                @enderror
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>
                </div>
            </form>
        </main>
    </section>
@endcomponent
