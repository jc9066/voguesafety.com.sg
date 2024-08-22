@extends('frontend.main_master')
@section('content')

<div class="container-fluid">
	<div class="row">

		@include('frontend.common.user_sidebar')

		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="card">
				<h3 class="text-center"><span class="text-danger">Hi....</span><strong>{{ Auth::user()->name }}</strong> Welcome To Easy Online Shop </h3>
				
			</div>
		</div>
	</div>
</div>
@endsection