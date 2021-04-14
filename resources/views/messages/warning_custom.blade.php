@if ($errors->has('cajaCancelada'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ $errors->first('cajaCancelada') }}
    </div>
@endif

@if ($errors->has('id'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ $errors->first('id') }}
    </div>
@endif

@if ($errors->has('status'))
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ $errors->first('status') }}
    </div>
@endif
