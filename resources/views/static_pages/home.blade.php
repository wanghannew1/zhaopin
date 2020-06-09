@extends('layouts.default')
@section('content')
<div class="row">
<div class="offset-md-2 col-md-8">
  <section class="user_info">
    home页占位
  </section>
  <section class="status">
    @if (0)
      <ul class="list-unstyled">
        @foreach ($statuses as $status)
          @include('statuses._status')
        @endforeach
      </ul>
      <div class="mt-5">
        {!! $statuses->render() !!}
      </div>
    @else
      <p>没有数据！</p>
    @endif
  </section>
</div>
</div>
@stop

@section('title', 'zhaopin')
