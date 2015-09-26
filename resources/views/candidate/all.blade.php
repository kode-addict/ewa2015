@extends('master')

@section('content')

	<div class="ui main container">

	@if(Request::has('party'))

		@if( !$candidateList->data == null)
		<h1> <a href="{{ url('party').'/'.$candidateList->data[0]->party->id }}"> {{ $candidateList->data[0]->party->party_name}} </a> </h1>
		@endIf
	@endIf
<div class="ui grid" id="content">


	<div class="ui twelve wide computer column">

	<div class="ui grid" id="content">
		
		<div class="ui container computer column">

			<div class="infiniteCandidate">

				<div class="ui four link cards">

				
				@foreach($candidateList->data as $candidate)

					<div class="card">
						<a class="image" href="{{ route('candidate.show',$candidate->id) }}">
							<img src="{{ $candidate->photo_url }}">
						</a>

						<div class="content">
							<div class="header">{{ $candidate->name }}</div>

							<div class="meta">
								<a>{{ $candidate->religion }}</a>
							</div>

							<div class="description">
								Matthew is an interior designer living in New York.
							</div>
						</div>

</div>
						<div class="extra content">

							<span class="right floated">
								Joined in 2013
							</span>

							<span>
								<i class="user icon"></i>
								75 Friends
							</span>

						</div>
					</div>

				@endforeach()

				</div>
			
			</div>		
		
		</div>

		@if(Request::has('legislature'))


<script type="text/javascript">
	
	$(document).ready(function(){

		new Vue({
			
			el : '#rank',

			data : {

				candidates : {!! json_encode($candidateList->data) !!}

			},
			computed: {

			    topLocalCandidates: function () {

			      return this.candidates.splice(0,5);

			    }

			}

		});


$('.ui.sticky')
  .sticky({
  	offset       : 80,
    context: '#content'
  });

	});

</script>
			@if(!$candidateList->data==null)
			<div class="ui four wide computer column " id="rank">
				
				<div class="ui sticky">
					
					<h3>{{ $candidateList->data[0]->constituency->name}} {{$candidateList->data[0]->legislature}} ko sar lal laung myar</h3>
					<h3>Rank Score</h3>

					<div class="ui middle aligned selection list"  v-repeat="candidate in topLocalCandidates | orderBy 'like' -1 " >
					  
					  	<div class="item">
					    
					    	<img class="ui avatar image" src="@{{ candidate.photo_url }}">
					    
					    	<div class="content">
					      		<div class="header"> <a href=" {{ url('/candidate')}}@{{ '/'+candidate.id }}"> @{{ candidate.name }} </a></div>
					         	<div class="description"> <p>@{{ candidate.like }} @{{ candidate.like | pluralize 'vote' }}</p> </div>
					    	</div>

					  	</div>

					</div>
				</div>
			</div>
			@endIf

		@endIf

	</div>
	</div>

	<div class="column hidden" id="template">

		<br>

		<h2 class="ui header"><a></a></h2>

		<img class="ui bordered image candidateSmall">

		<i class="thumbs outline up icon"></i>

		<i class="thumbs outline down icon"></i>
		
		<br>

		<div class="ui divider"></div>		

	</div>

	<input type="hidden" id="currentcandidateurl" value="{{ url('/candidate') }}">

	@if( $candidateList->meta->pagination->total_pages > 1)

		<input class="hidden" id="paginate" value="{{ $candidateList->meta->pagination->links->next }}">

	@endIf

	</div>

<script type="text/javascript">
	
	$(document).ready(function(){

		new Vue({
			
			el : '#rank',

			data : {

				candidates : {!! json_encode($candidateList->data) !!}

			},
			computed: {

			    topLocalCandidates: function () {

			      return this.candidates.splice(0,5);

			    }

			}

		});

	@if(Request::has('legislature'))

	@if(!$candidateList->data==null)
	<div class="ui four wide computer column " id="rank">
		
		<div class="ui sticky">
			
			<h3>{{ $candidateList->data[0]->constituency->name}} {{$candidateList->data[0]->legislature}} ko sar lal laung myar</h3>
			<h3>Rank Score</h3>

			<div class="ui middle aligned selection list"  v-repeat="candidate in topLocalCandidates | orderBy 'like' -1 " >
			  
			  	<div class="item">
			    
			    	<img class="ui avatar image" src="@{{ candidate.photo_url }}">
			    
			    	<div class="content">
			      		<div class="header"> <a href=" {{ url('/candidate')}}@{{ '/'+candidate.id }}"> @{{ candidate.name }} </a></div>
			         	<div class="description"> <p>@{{ candidate.like }} @{{ candidate.like | pluralize 'vote' }}</p> </div>
			    	</div>

			  	</div>

			</div>
		</div>
	</div>
	@endIf
	@endIf

$('.ui.sticky')
  .sticky({
  	offset       : 80,
    context: '#content'
  });

	});

</script>
@stop