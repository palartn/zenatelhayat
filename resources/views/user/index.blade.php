@extends('layouts.master')
@section('content')

	
			 <div class="container mt-2">
				<div class="row">
					<div class="col-lg-12 margin-tb">
						<div class="pull-left">
							<h2>قائمة المستخدمين</h2>
						</div>
						<div class="pull-right mb-2">
							<a class="btn btn-success" href="{{ route('users.create') }}"> مستخدم جديد</a>
						</div>
					</div>
				</div>
				@if ($message = Session::get('success'))
					<div class="alert alert-success">
						<p>{{ $message }}</p> --}}
					</div>
				 @endif
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>S.No</th>
							<th>user Name</th>
							<th>user Email</th>
							<th>user Address</th>
							<th width="280px">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $users)
							<tr>
								<td>{{ $users->id }}</td>
								<td>{{ $users->name }}</td>
								<td>{{ $users->email }}</td>
								<td>{{ $users->address }}</td>
								<td>
									<form action="{{ route('users.destroy',$users->id) }}" method="Post">
										<a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
							</tr>
							@endforeach
					</tbody>
				</table>
				{{-- {!! $users->links() !!} --}}
			</div>

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--end::Main-->
	<script>var hostUrl = "assets/";</script>

	@endsection