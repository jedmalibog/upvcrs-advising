@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Grade Summary</div>
				<div class="panel-body">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th>academic year</th>
								<th>semester</th>
								<th>subjects</th>
								<th>grades</th>
								<th>credits</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($grades as $grade)
								<tr>
									<td>{{ $grade->academic_year }}</td>
									<td>{{ $grade->semester }}</td>
									<td>{{ $grade->name }}</td>
									<td>{{ $grade->grade }}</td>
									<td>{{ $grade->credits }}</td>
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