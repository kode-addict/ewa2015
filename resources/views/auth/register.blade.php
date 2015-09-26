@extends('master')

@section('content')

	<div class="ui main text container">
		
		<section class="ui raised segment"> 
			
			<h2 class="ui dividing header">Registration Form</h2>

			<div class="ui two column container grid">
				<div class="one wide column"></div>

				<div class="ten wide column">
					<form action="{{ url('auth/register') }}" method="POST" class="ui form">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">	

						<div class="field">
							<label>Full Name</label>
							<input name="name" placeholder="Type Your Full Name" type="text" required="" autofocus>
						</div>			

						<div class="field">
							<label>Email Address</label>
							<input name="email" placeholder="Type Your Email Address" type="email" required="">
						</div>

						<div class="field">
							<label>Password</label>
							<div class="ui action input">
								<input name="password" placeholder="Type Your Password" type="password" required="" id="password">
								<span class="ui button" id="p-toggle"><i class="unhide icon" id="p-icon"></i></span>
							</div>	
						</div>

						<button class="ui green button" type="submit">Register</button>

					</form>
				</div>
			</div>

			<div class="ui divider"></div>

			<div class="ui two column container grid">

				<div class="column">
					<a href="{{ url('login') }}">Login Your Account</a><br>
					<a href="{{ url('password/email') }}">Forget Account Password ?</a>
				</div>

				<div class="right aligned column">
					<form class="ui form" action="{{ url('auth/login_with_fb') }}" method="GET">
						<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
						<!-- <input type="hidden" value="/account/team_check/?next=/" name="next"> -->
						<!-- <button class="ui facebook button" type="submit"> Facebook </button> -->
						<button class="ui facebook button"><i class="facebook icon"></i>Register with Facebook</button>
					</form>					
				</div>

			</div>

		</section>
	
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
		    $("#p-toggle").click(function(){
		        $('#password').togglePassword();
		        $('p-icon').remove();

		    });
		});		
	</script>

@stop	

