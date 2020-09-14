@if (session('created'))
<div class="alert alert-success">
    {{ session('created') }}
</div>
@endif

@if (session('deleted'))
<div class="alert alert-danger">
    {{ session('deleted') }}
</div>
@endif
@if (session('updated'))
<div class="alert alert-success">
    {{ session('updated') }}
</div>
@endif
