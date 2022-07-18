@extends('dashboard.layout')

@section('content')
    <h1>Crear Category</h1>
    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.store')}}" method="POST">
        @include('dashboard.category.form')
    </form>
@endsection