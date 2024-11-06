<x-admin.layout title="{{$title}}">
    @auth
    <h1 class="mb-5 mt-5">Hello, {{Auth::user()->name}}!</h1>
    @endauth
</x-admin.layout>
