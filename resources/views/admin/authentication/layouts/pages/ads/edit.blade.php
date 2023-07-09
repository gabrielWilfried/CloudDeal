@extends('admin.authentication.layouts.pages.ads.default')

@section('content')
<section class="content">
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
                                    <h5>Cover Image <span class="text-danger">*</span></h5>
                                    <div class="col-lg-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name='image' id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Images</h5>
                                    <div class="col-lg-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile" multiple>
                                            <label class="custom-file-label" for="customFile">Choose files</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-ad-id={{ $annonce->id }} id="idContainer" class="d-none"></div>
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
