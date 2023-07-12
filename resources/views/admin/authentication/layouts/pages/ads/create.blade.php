@extends('admin.authentication.layouts.pages.ads.default')

@section('content')

    <section class="content" style="width: 100%">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Publish</h4>
                <h6 class="box-subtitle">Fill in the form below to publish an ad</h6>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="{{ route('admin.ads.store') }}" name="create-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" required
                                                data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Price <span class="text-danger">*</span></h5>
                                        <div class="input-group"> <span class="input-group-addon">XAF</span>
                                            <input type="text" name="price" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Category <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="select" required class="form-control">
                                                @forelse ($allCategories as $category)
                                                <option value="{{ $category->id}}">{{ $category->name}}</option>
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
                                                <option value="{{ $town->id}}">{{ $town->name}}</option>
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
                                                placeholder="Brief description of your ad"></textarea>
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
                    </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>

@endsection
