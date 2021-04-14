@if(Session::has('info'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{!! Session::get('info') !!}
	</div>
@endif

@if(isset($info))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<span>&times;</span>
		</button>
		{!! $info !!}
	</div>
@endif
