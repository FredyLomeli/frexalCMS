@if(Session::has('infoHTML'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{!! Session::get('infoHTML') !!}
	</div>
@endif
