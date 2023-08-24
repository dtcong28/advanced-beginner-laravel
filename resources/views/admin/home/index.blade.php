@extends('admin.layouts.main')
@section('content')
<h1>Homee</h1>
<a href="javascript:void(0)" onclick="$('#formLogout').submit()">Logout</a>
{!! Form::open(['url' => getRoute('logout'), 'method' => 'post', 'id' => 'formLogout']) !!}
{!! Form::close() !!}
@stop
