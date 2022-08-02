@extends('layouts.app')

@section('content_page')
<ul class="list-unstyled">
  <li>{{$comic['title']}}</li>
  <li>{{$comic['description']}}</li>
</ul>
@endsection
