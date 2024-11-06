<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">{{$product->name}}</h1>
    <form action="/admin/products/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$product->id}}">

        <div class="mb-3">
            <label for="name" class="form-label h6">Name</label>
            <input type="text" name="name" value="{{$product->name}}" id="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" value="{{$product->title}}" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label h6">Description</label>
            <input type="text" name="description" value="{{$product->description}}" id="description"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="keywords" class="form-label h6">Keywords</label>
            <input type="text" name="keywords" value="{{$product->keywords}}" id="keywords" class="form-control">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label h6">Category</label>
            <select class="form-select" name="category_id" id="category">
                <option selected value="{{$product->category->id}}">{{$product->category->name}}</option>
                @foreach($categories->whereNotIn('id', $product->category->id) as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="thumbnail" class="form-label h6">Thumbnail</label>
            <div class="mb-3">
                <img src="{{asset($product->thumbnail)}}" width="200" alt="">
            </div>
            <input class="form-control" name="thumbnail" type="file" id="thumbnail" value="{{$product->thumbnail}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary save">Save</button>
        </div>
    </form>
</x-admin.layout>
