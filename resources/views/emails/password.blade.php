@extends('master')

@section('content')

	<div class="ui main text container">
		
		<section class="about-candidate ui raised segment"> 
			<form class="ui form">
			
			<h3 class="ui dividing header">Change Password</h3>

			<div class="field">
				<label>New Password</label>
				<input name="password" placeholder="Type Your New Passowrd" type="password" required="">
			</div>

			<div class="field">
				<label>Confirm Your New Password</label>
				<input name="password" placeholder="Type Exactly as Your New Passowrd" type="password" required="">
			</div>		

			<button class="ui green button" type="submit">Change Password</button>

			</form>

		</section>

	</div>

@stop