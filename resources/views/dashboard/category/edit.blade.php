@extends('dashboard.layout')

<h1>Actualizar category: {{ $category->title }}</h1>
@include('dashboard.fragment._errors-form')

<form action="{{ route('category.update', $category->id)}}" method="POST">    
    @method("PATCH")
    @include('dashboard.category.form')
</form>