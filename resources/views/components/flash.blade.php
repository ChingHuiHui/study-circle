@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has('alert-' . $msg))
<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="alert alert-{{ $msg }}">
  <p>{{Session::get('alert-' . $msg)}}</p>
</div>
@endif
@endforeach