@extends('layouts.home')

@section('body')
	<div class="card">
		<div class="card-header">Trang chủ</div>
		<div class="card-body">
			@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
			
			Nội dung trang chủ quản trị đang cập nhật!
		</div>
	</div>
@endsection
