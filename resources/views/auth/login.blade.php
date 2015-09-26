@extends('master')

@section('content')

	<div class="ui main text container">
		
		<section class="ui raised segment">
			
			<h2 class="ui dividing header">Login</h2>

			<div class="ui two column container grid">
				<div class="one wide column"></div>

				<div class="ten wide column">

					<form action"{{ url('auth/login') }}" method="POST" class="ui form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="field">
							<label>Email Address</label>
							<input name="email" placeholder="Your Login Email" type="email" value="{{ old('email') }}" required="" autofocus>
						</div>

						<div class="field">
							<label>Password</label>
							<input name="password" placeholder="Your Password" type="password" required="">
						</div>

						<button class="ui green button" type="submit">Login</button>
					</form>


				</div>

			</div>

			<div class="ui divider"></div>

			<div class="ui two column container grid">

				<div class="column">
					<a href="{{ url('register') }}">Registration</a><br>
					<a href="{{ url('password/email') }}">Forget Account Password ?</a>	
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