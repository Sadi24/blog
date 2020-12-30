@if ($errors->any())
<div class="alert alert-danger">
    @foreach ($errors->all() as $e)
    <h3>{{$e}}</h3>
    @endforeach
</div>
@endif
