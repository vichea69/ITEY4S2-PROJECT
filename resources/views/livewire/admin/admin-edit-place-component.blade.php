<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block;
        }
    </style>
    {{-- The whole world belongs to you. --}}
    <main>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="" rel="nofollow">Home</a>
                    <span></span> Edit Place
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <div class="row-cols-md-6">
                                Edit Place
                            </div>
                            <div class="row-cols-md-6">
                                <a href="{{route('admin.place')}}" class="btn btn-primary float-end">All Place</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert"{{Session::get('message')}}>

                                </div>
                            @endif
                            <form enctype="multipart/form-data" wire:submit.prevent="updatePlace">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Enter Province Name" wire:model="name"
                                           wire:keyup="generateSlug">
                                    @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="short_description" class="form-label">Short Description</label>
                                    <textarea class="form-control" name="short_description"
                                              placeholder="Enter short_description"
                                              wire:model="short_description"></textarea>
                                    @error('short_description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Enter Description"
                                              wire:model="description"></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="featured" class="form-label">Featured</label>
                                    <select class="form-control" name="featured" placeholder="featured"
                                            wire:model="featured">
                                        <option value="0">
                                            No
                                        </option>
                                        <option value="1">
                                            Yes
                                        </option>
                                    </select>

                                    @error('featured')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image" placeholder="Image"
                                           wire:model="newimage">
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" alt="name"/>
                                    @else
                                        <img src="{{asset('assets/images/products')}}/{{$image}}" width="120"
                                             alt="name"/>
                                    @endif
                                    @error('newimage')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 mt-3">
                                    <label for="category_id" class="form-label">Province</label>
                                    <select class="form-control" name="province_id" wire:model="province_id"
                                            placeholder="Province">
                                        <option value="">Select Province</option>
                                        @foreach($province as $provinces)
                                            <option value="{{$provinces->id}}">{{$provinces->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary float-end">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


