@extends('layouts.app')
@section('title','Page Title')
@section('sidebar')
    @parent
    <p>this refers to the master sidebar</p>
@endsection
@section('content')
    <p>body content</p>
@endsection