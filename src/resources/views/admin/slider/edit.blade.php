<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">{{$slider->title}}</h1>
    <form action="/admin/slider/{{$slider->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$slider->id}}">

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" value="{{$slider->title}}" id="title" class="form-control">
            @error('title')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label h6">Subtitle</label>
            <input type="text" name="subtitle" value="{{$slider->subtitle}}" id="subtitle" class="form-control">
            @error('subtitle')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label h6">Link</label>
            <input type="text" name="link" value="{{$slider->link}}" id="link" class="form-control">
            @error('link')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="css" class="form-label h6">CSS</label>
            <input type="text" name="css" value="{{$slider->css}}" id="css" class="form-control">
            @error('css')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="img" class="form-label h6">Image</label>
            <div class="mb-3">
                <img src="{{asset($slider->img)}}" width="200" alt="">
            </div>
            <input class="form-control" name="img" type="file" id="img" value="{{$slider->img}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary save">Save</button>
        </div>
    </form>
</x-admin.layout>
