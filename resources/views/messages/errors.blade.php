@if(Session::has('error_mensaje'))
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{{ Session::get('error_mensaje') }}
	</div>
@endif