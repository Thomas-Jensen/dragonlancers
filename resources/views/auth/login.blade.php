@extends('layouts.default.default')

@section('head')

    @include('layouts.default.meta',
    [
        $title = 'Dragon Lancers | ' . trans('title.creative-agency'),
        $description = trans('description.home'),
        $descriptionSchemaorg  = trans('description.home-schemaorg'),
        $descriptionTwitter = trans('description.home-twitter'),
        $typeOpengraph = 'website',
        $descriptionOpengraph = trans('description.home-opengraph'),
        $image = 'https://www.dragonlancers.com/images/dl-logo.png'
    ])

@stop

@section('content')
    <section class="blog-menu-container">

        <h1 class="dl"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">DRAGON LANCERS</a></h1>
        <h2 class="ca"><a href="{{ url(LaravelLocalization::getCurrentLocale().'/'.'blog') }}">{{ trans('dragonlancers.ca') }}</a></h2>


        <h1>Login:</h1>



    </section>
<section class="container-fluid center">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail:</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password:</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="form-control">
									Login
								</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        <p>{{ trans('backend.login') }}</p>
	</div>
</section>

@stop
