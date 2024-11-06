<x-auth.layout :$title>
    <main class="w-25 m-auto my-5 text-center">
        <img src="/assets/img/logo.svg" alt="logo" width="200">
        <h1 class="h3 my-3">Login</h1>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-1">
                <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback d-block text-start mb-2">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-4">
                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                @error('password')
                <div class="invalid-feedback d-block text-start mb-2">{{$message}}</div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <p class="my-2">Don't have an account? Please <a href="/register">register</a></p>
    </main>
</x-auth.layout>
