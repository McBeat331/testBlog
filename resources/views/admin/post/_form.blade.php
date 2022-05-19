<form method="post" action="{{$entry->id ? route('dashboard.post.update',$entry->id) : route('dashboard.post.store')}}" autocomplete="off" class="form-horizontal"  enctype="multipart/form-data">
    @csrf
    @if($entry->id)
        @method('PUT')
    @else
        @method('POST')
    @endif
    <div class="card ">
        <div class="card-header card-header-primary">
            <h4 class="card-title">@if($entry->id) Edit post @else Create post @endif</h4>
            <p class="card-category">Post information</p>
        </div>
        <div class="card-body ">
            @if (session('status'))
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="material-icons">close</i>
                            </button>
                            <span>{{ session('status') }}</span>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-8">
                            <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="Title" value="{{ old('title', $entry->title)}}" aria-required="true"/>
                                @if ($errors->has('title'))
                                    <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-8">
                            <div class="form-group{{ $errors->has('content') ? ' has-danger' : '' }}">
                                <textarea rows="10" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" id="input-content" type="email" placeholder="Content">{{ old('content', $entry->content) }}</textarea>
                                @if ($errors->has('content'))
                                    <span id="content-error" class="error text-danger" for="input-content">{{ $errors->first('content') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="input-group form-group{{ $errors->has('time_read') ? ' has-danger' : '' }}">
                                <label>Time read</label>
                                <input class="form-control{{ $errors->has('time_read') ? ' is-invalid' : '' }}" name="time_read" id="input-time_read" type="number" placeholder="Time read" value="{{ old('time_read', $entry->time_read)}}" aria-required="true"/>
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                      <i class="material-icons">visibility</i>
                                  </span>
                                </div>

                            </div>
                            @if ($errors->has('time_read'))
                                <span id="time_read-error" class="error text-danger" for="input-time_read">{{ $errors->first('time_read') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Author</label>
                            <div class="form-group{{ $errors->has('author_id') ? ' has-danger' : '' }}">
                                <select name="author_id" class="selectpicker" data-live-search="true" title="Choose Author..."  data-style="btn btn-primary btn-round">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}" @if($entry->author_id == $user->id || old('author_id') == $user->id) selected @endif>{{ $user->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            @if ($errors->has('author_id'))
                                <span id="author_id-error" class="error text-danger" for="input-author_id">{{ $errors->first('author_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <label>Category</label>
                            <div class="form-group{{ $errors->has('category_id') ? ' has-danger' : '' }}">
                                <select name="category_id" class="selectpicker" data-live-search="true" title="Choose Category..."  data-style="btn btn-primary btn-round">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($entry->category_id == $category->id || old('category_id') == $category->id) selected @endif>{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @if ($errors->has('category_id'))
                                <span id="category_id-error" class="error text-danger" for="input-category_id">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-12 col-form-label">Image from post</label>
                        <div class="col-md-12">
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput" {{ $errors->has('image') ? ' has-danger' : '' }}>
                                <div class="fileinput-preview fileinput-exists thumbnail img-raised">
                                    @if($entry->id)
                                        <img src="{{ $entry->getMedia('post')[0]->getUrl('thumb') }}"/>
                                    @endif
                                </div>

                                <div>
                                <span class="btn btn-raised btn-round btn-rose btn-file">
                                   <input type="file" name="image" />
                                </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                                        <i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                            @if ($errors->has('image'))
                                <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </div>
</form>