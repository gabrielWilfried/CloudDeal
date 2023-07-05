@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
<section class="content" style="width: 100%">
    <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Edit</h4>
            <h6 class="box-subtitle">Update Ad</h6>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-12">
                    <form method="POST" onsubmit="event.preventDefault()" name='edit-form'>
                        @csrf
                        <div class="row">
                            <div class="col-12" >
                                <div class="form-group">
                                    <h5>Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" value="{{ $annonce->name }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Price <span class="text-danger">*</span></h5>
                                    <div class="input-group"> <span class="input-group-addon">XAF</span>
                                        <input type="text" value="{{ $annonce->price }}" name="price" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Category <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id" id="select" required class="form-control">
                                            @forelse ($allCategories as $category)
                                                <option
                                                @if ($category->id == $annonce->category_id)
                                                    selected
                                                @endif
                                                 value="{{ $category->id}}">{{ $category->name}}</option>
                                            @empty
                                                <option>No category</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Town <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="town_id" id="select" required class="form-control">
                                            @forelse ($allTowns as $town)
                                                <option
                                                    @if ($town->id == $annonce->town_id)
                                                        selected
                                                    @endif
                                                    value="{{ $town->id}}">
                                                    {{ $town->name}}
                                                </option>
                                            @empty
                                                <option>No Town</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>User_id <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="user_id" id="select" required class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Description <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <textarea name="description" id="textarea" class="form-control" required
                                            placeholder="Brief description of your ad">{{ $annonce->description }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Image <span class="text-danger">*</span></h5>
                                    <div class="row">
                                        <div class="col-md-3 p-2">
                                            <div id="image1" class="card border-0 p-1">
                                                <img src="{{ asset('assets/images/product/19.jpg') }}">
                                            </div>
                                            <input type="file" id="imageInput1" name="image" class="form-control"  style="display: none">
                                        </div>
                                        <div class="col-md-3 p-2">
                                            <div id="image2" class="card border-0 p-1">
                                                <img src="{{ asset('assets/images/product/19.jpg') }}">
                                            </div>
                                            <input type="file" id="imageInput2" name="image2" class="form-control" style="display: none" >
                                        </div>
                                        <div  class="col-md-3 p-2">
                                            <div id="image3" class="card border-0 p-1">
                                                <img src="{{ asset('assets/images/product/19.jpg') }}">
                                            </div>
                                            <input type="file" id="imageInput3" name="image3" class="form-control" style="display: none" >
                                        </div>
                                        <div class="col-md-3 p-2">
                                            <div id="image4" class="card border-0 p-1" >
                                                <img src="{{ asset('assets/images/product/19.jpg') }}">
                                            </div>
                                            <input type="file" id="imageInput4" name="image4" class="form-control" style="display: none" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-ad-id={{ $annonce->id }} id="idContainer" style="display: none"></div>
                        <div class="text-left">
                            <input type="submit" class="btn btn-rounded btn-info" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
