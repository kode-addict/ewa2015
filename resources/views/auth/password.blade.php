@extends('master')

@section('content')

	<div class="ui main text container">
		
		<section class="ui raised segment">

			<h2 class="ui dividing header">Reset Password</h2>

			<div class="ui compact message">
				<p>Did you forget your password?</p>
				<p>We can help you to reset your account password.</p>
				<p>Provide your email address when you registered your account on this website.</p>				
			</div>

			<div class="ui container grid">

				<div class="ten wide column">

					<form class="ui form" method="POST" action="{{ url('password/email') }}">
						{!! csrf_field() !!}

						<div class="field">
							<label>Registered Email Address</label>
							<input type="email" name="email" value="{{ old('email') }}" placeholder="Type Your Email Address" type="email" required="">
						</div>

						<button class="ui green button" type="submit">Send Password Reset Link </button>

					</form>

				</div>

			</div>	

			<div class="ui divider"></div>

			<div class="ui two column container grid">

				<div class="column">
					<a href="{{ url('register') }}">Registration</a><br>
					<a href="{{ url('login') }}">Login Your Account</a>
				</div>

				<div class="right aligned column">
					<form class="ui form" action="{{ url('auth/login_with_fb') }}" method="GET">
						<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
						<!-- <input type="hidden" value="/account/team_check/?next=/" name="next"> -->
						<!-- <button class="ui facebook button" type="submit"> Facebook </button> -->
						<button class="ui facebook button"><i class="facebook icon"></i>Sign In with Facebook</button>
					</form>					
				</div>

			</div>

		</section>
		
	</div>
@stop
