<form method="post" action="{{$entry->id ? route('dashboard.post_category.update',$entry->id) : route('dashboard.post_category.store')}}" autocomplete="off" class="form-horizontal">
    @csrf
    @if($entry->id)
        @method('PUT')
    @else
        @method('POST')
    @endif
    <div class="card ">
        <div class="card-header card-header-primary">
            <h4 class="card-title">@if($entry->id) Edit category @else Create category @endif</h4>
            <p class="card-category">Category info</p>
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
                <label class="col-sm-2 col-form-label">Title category</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="Title category" value="{{ old('title', $entry->title)}}" aria-required="true"/>
                        @if ($errors->has('title'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>