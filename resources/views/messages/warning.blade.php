@if(Session::has('warning_mensaje'))
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{{ Session::get('warning_mensaje') }}
	</div>
@endif