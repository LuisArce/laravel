@extends('dashboard.layout')

<h1>Crear Post</h1>
@include('dashboard.fragment._errors-form')

<form action="{{ route('post.store')}}" method="POST">
    @include('dashboard.post.form')
</form>