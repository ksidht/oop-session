@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<a href="{{ route('country.create') }}" class="btn btn-primary pull-right">Create</a>

			<table class="table table-bordered">
				<tr>
					<td>ID</td>
					<td>NAME</td>
				</tr>
				@foreach ($countries as $country)
					<tr>
						<td>{{ $country->id}}</td>
						<td><a href="{{ route('country.show', $country->id) }}">{{ $country->name }}</a></td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection