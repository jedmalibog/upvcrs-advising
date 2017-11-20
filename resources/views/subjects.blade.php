@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Subject Offerings</div>
				<div class="panel-body">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>id</th>
								<th class="col-md-2">name</th>
								<th>title</th>
								<th>description</th>
								<th>credits</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($subjects as $subject)
								<tr>
									<td>{{ $subject->id }}</td>
									<td>{{ $subject->name }}</td>
									<td>{{ $subject->title }}</td>
									<td>{{ $subject->desc }}</td>
									<td class="text-center">{{ $subject->credits }}</td>
								</tr>
							@endforeach		
						</tbody>
						
					</table>
					
				</div>
			</div>
		</div>
		
	</div>	
</div>
@endsection