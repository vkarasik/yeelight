<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">{{$title}}</h1>
    <form action="/admin/slider" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            @error('title')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="subtitle" class="form-label h6">Subtitle</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" value="{{ old('subtitle') }}">
            @error('subtitle')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label h6">Link</label>
            <input type="text" name="link" id="link" class="form-control" value="{{ old('link') }}">
            @error('link')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="css" class="form-label h6">CSS</label>
            <input type="text" name="css" id="css" class="form-control" value="{{ old('css') }}">
            @error('css')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="img" class="form-label h6">Image</label>
            <input class="form-control" name="img" type="file" id="img">
            @error('img')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</x-admin.layout>
