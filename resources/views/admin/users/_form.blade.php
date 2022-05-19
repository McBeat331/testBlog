<form method="post" action="{{$entry->id ? route('dashboard.user.update',$entry->id) : route('dashboard.user.store')}}" autocomplete="off" class="form-horizontal">
    @csrf
    @if($entry->id)
        @method('PUT')
    @else
        @method('POST')
    @endif
    <div class="card ">
        <div class="card-header card-header-primary">
            <h4 class="card-title">@if($entry->id) {{ __('Edit user') }} @else {{ __('Create user') }} @endif</h4>
            <p class="card-category">{{ __('User information') }}</p>
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
                <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', $entry->name)}}" aria-required="true"/>
                        @if ($errors->has('name'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', $entry->email) }}" />
                        @if ($errors->has('email'))
                            <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Password') }}</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="input-current-password" placeholder="{{ __('Password') }}" value="" />
                        @if ($errors->has('password'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Confirm Password') }}</label>
                <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password" name="password_confirmation" id="input-password_confirmation" placeholder="{{ __('Confirm Password') }}" value="" />
                        @if ($errors->has('password_confirmation'))
                            <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer ml-auto mr-auto">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </div>
</form>