<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">{{$title}}</h1>
    <form action="/admin/products" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="slug" class="form-label h6">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label h6">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label h6">Description</label>
            <input type="text" name="description" id="description"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="keywords" class="form-label h6">Keywords</label>
            <input type="text" name="keywords" id="keywords" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label h6">Category</label>
            <select class="form-select" name="category_id" id="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label h6">Thumbnail</label>
            <input class="form-control" name="thumbnail" type="file" id="thumbnail">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</x-admin.layout>
