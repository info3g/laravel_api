<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
		<title>{{ config('app.name', 'Laravel') }}</title>
		@include('layouts.css')
	</head>
	<body>
		<div class="container-scroller">
			@if(Auth::check())
				@include('layouts.navbar')
				<div class="container-fluid page-body-wrapper">
					@include('layouts.sidebar')
					<div class="main-panel">
						<div class="content-wrapper">
							@yield('content')
						</div>
					</div>	
				</div>
			@else
				@include('auth.login_mat')
			@endif

		</div>
		@include('layouts.js')
	</body>
</html>