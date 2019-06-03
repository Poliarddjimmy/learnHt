@extends('../layouts.app')

@section('title','Home')

@section('content')
<div class="featured-content">
    <div class="substrate">
        <img src="./wel/site_bg.jpg" class="fullwidth" alt="">			
    </div>
    <div class="row">
        <div class="page-title">
            <h1 class="nomargin">Registration  </h1>
        </div>
        <!-- /page title -->
    </div>
</div>
<!-- /featured -->
<div class="main-content">
	<div class="row">
		<div class="sixcol column">
            <style>
                .sixcol input{width:95%;}
            </style>
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" autofocus placeholder="Nom">


                <style type="text/css">
                .invalid-feedback{color: rgba();}
                </style>


                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif

                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" autofocus placeholder="Prénom">

                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
                <input id="pseudo" type="text" class="form-control{{ $errors->has('pseudo') ? ' is-invalid' : '' }}" name="pseudo" value="{{ old('pseudo') }}" autofocus placeholder="Pseudo">

                @if ($errors->has('pseudo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pseudo') }}</strong>
                    </span>
                @endif

                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email">

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password">

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif


                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation">
                <button type="submit" class="button submit-button left">
                    <span class="button-icon register"></span>{{ __('Register') }}
                </button>

            </form>
        </div>
        <div class="sixcol column last">

        </div>
    </div>
</div>
@endsection
