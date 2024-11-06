<x-admin.layout :$title>
    <h1 class="mb-5 mt-5">Edit shop: {{$shop->name}}</h1>
    <form action="/admin/shops/{{$shop->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{$shop->id}}">

        <div class="mb-3">
            <label for="name" class="form-label h6">Name</label>
            <input type="text" name="name" value="{{$shop->name}}" id="name" class="form-control">
            @error('name')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label h6">Title</label>
            <input type="text" name="title" value="{{$shop->title}}" id="title" class="form-control">
            @error('title')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="url" class="form-label h6">Link</label>
            <input type="text" name="url" value="{{$shop->url}}" id="url" class="form-control">
            @error('url')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label h6">Logo</label>
            <div class="mb-3">
                <img src="{{asset($shop->logo)}}" width="200" alt="">
            </div>
            <input class="form-control" name="logo" type="file" id="logo" value="{{$shop->logo}}">
            @error('logo')
            <div class="invalid-feedback" style="display: block;">{{$message}}</div>
            @enderror
        </div>

        <div class="my-3">
            <button type="submit" class="btn btn-primary save">Update Shop</button>
        </div>
    </form>

    <div class="mb-3">
        <h3 class="mb-4 mt-4">Branches</h3>
        <div class="accordion" id="accordionBranches">
        @foreach($shop->branches as $key => $branch)
            <div class="accordion-item">
                    <h2 class="accordion-header" id="heading_{{$key}}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
                            Branch #{{$key + 1}}
                        </button>
                    </h2>
                    <div id="collapse_{{$key}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$key}}" data-bs-parent="#accordionBranches">
                        <div class="accordion-body">
                            <form action="/admin/branches/{{$branch->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="shop_id" value="{{$branch->shop->id}}">
                                <div class="row mt-3">
                                    <div class="col-6 mb-2">
                                        <label for="address" class="form-label h6">Address</label>
                                        <input type="text" name="address" value="{{$branch->address}}"
                                               id="address" class="form-control">
                                        @error('address')
                                        <div class="invalid-feedback" style="display: block;">{{$message}}</div>
                                        @enderror
                                        <div class="invalid-feedback" style="display: none;"></div>

                                    </div>
                                    <div class="col-3 mb-2">
                                        <label for="lat" class="form-label h6">Lat</label>
                                        <input type="text" name="lat" value="{{$branch->lat}}"
                                               id="lat" class="form-control">
                                        @error('lat')
                                        <div class="invalid-feedback" style="display: block;">{{$message}}</div>
                                        @enderror
                                        <div class="invalid-feedback" style="display: none;"></div>

                                    </div>
                                    <div class="col-3 mb-2">
                                        <label for="lon" class="form-label h6">Lon</label>
                                        <input type="text" name="lon" value="{{$branch->lon}}"
                                               id="lon" class="form-control">
                                        @error('lon')
                                        <div class="invalid-feedback" style="display: block;">{{$message}}</div>
                                        @enderror
                                        <div class="invalid-feedback" style="display: none;"></div>

                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="phone" class="form-label h6">Phone</label>
                                        <input type="text" name="phone" value="{{$branch->phone}}"
                                               id="phone" class="form-control">
                                        @error('phone')
                                        <div class="invalid-feedback" style="display: block;">{{$message}}</div>
                                        @enderror
                                        <div class="invalid-feedback" style="display: none;"></div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="schedule" class="form-label h6">Schedule</label>
                                        <input type="text" name="schedule" value="{{$branch->schedule}}"
                                               id="schedule" class="form-control">
                                        @error('schedule')
                                        <div class="invalid-feedback" style="display: block;">{{$message}}</div>
                                        @enderror
                                        <div class="invalid-feedback" style="display: none;"></div>

                                    </div>
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-primary update">Update</button>
                                    <button type="submit" class="btn btn-danger" form="delete-branch">Delete</button>
                                </div>
                            </form>
                            <form action="/admin/branches/{{$branch->id}}" method="POST" id="delete-branch">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
        <div class="my-3">
            <button class="btn btn-primary add-branch">Add new branch</button>

            <template id="accordion-item-template">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="">
                            New Branch
                        </button>
                    </h2>
                    <div id="" class="accordion-collapse collapse" data-bs-parent="#accordionBranches">
                        <div class="accordion-body">
                            <form action="/admin/branches/" method="POST">
                                @csrf
                                <input type="hidden" name="shop_id" value="{{$shop->id}}">
                                <div class="row mt-3">
                                    <div class="col-6 mb-2">
                                        <label for="address" class="form-label h6">Address</label>
                                        <input type="text" name="address" id="address" class="form-control">
                                    </div>
                                    <div class="col-3 mb-2">
                                        <label for="lat" class="form-label h6">Lat</label>
                                        <input type="text" name="lat" id="lat" class="form-control">
                                    </div>
                                    <div class="col-3 mb-2">
                                        <label for="lon" class="form-label h6">Lon</label>
                                        <input type="text" name="lon" id="lon" class="form-control">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="phone" class="form-label h6">Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="schedule" class="form-label h6">Schedule</label>
                                        <input type="text" name="schedule" id="schedule" class="form-control">
                                    </div>
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</x-admin.layout>
