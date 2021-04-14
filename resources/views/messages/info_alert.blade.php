@if(Session::has('info'))
    <script type="text/javascript">
        alert('{!! Session::get('info') !!}');
    </script>
@endif
