<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">{{$title}}</h1>
    <form action="/admin/shops" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label h6">Name</label>
            <input type="text" name="name"  id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="url" class="form-label h6">Link</label>
            <input type="text" name="url" id="url" class="form-control">
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label h6">Logo</label>
            <input class="form-control" name="logo" type="file" id="logo">
        </div>

        <div class="my-3">
            <button type="submit" class="btn btn-primary save">Create Shop</button>
        </div>
    </form>
</x-admin.layout>
