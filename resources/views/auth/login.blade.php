@extends('layouts.begin')

@section('title')
	Inicio de sesión
@endsection

@section('form')
	<div class="card">
		<div class="card-header">
			<h3>Ingresar</h3>
			{{-- <div class="d-flex justify-content-end social_icon">
				<span><i class="fab fa-facebook-square"></i></span>
				<span><i class="fab fa-google-plus-square"></i></span>
				<span><i class="fab fa-twitter-square"></i></span>
			</div> --}}
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-envelope"></i></span>
					</div>
					<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

					@error('email')
							<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
							</span>
					@enderror
					
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder = "Contraseña">

					@error('password')
							<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
							</span>
					@enderror
				</div>
				{{-- <div class="row align-items-center remember">
					<input type="checkbox">Remember Me
				</div> --}}
				<div class="form-group row">
					<div class="col-md-6">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label links" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					{{-- <input type="submit" value="Login" class="btn float-right login_btn"> --}}
					<button type="submit" class="btn float-right login_btn">
						{{ __('Ingresar') }}
					</button>

					@if (Route::has('password.request'))
						<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('¿Olvidaste tu contraseña?') }}
						</a>
					@endif

				</div>
			</form>
		</div>
		<div class="card-footer">
			<div class="d-flex justify-content-center links">
				¿No tienes una cuenta?
				@if (Route::has('register'))
					<a href="{{ route('register') }}">{{ __('Regístrate') }}</a>
				@endif
			</div>
			<div class="d-flex justify-content-center">
				@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
							{{ __('¿Olvidaste tu contraseña?') }}
					</a>
				@endif
			</div>
		</div>
	</div>
@endsection