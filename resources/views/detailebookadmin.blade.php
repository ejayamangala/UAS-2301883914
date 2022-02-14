@extends('Layoutadmin')


@section('content')
<h3 class="detailhead mt-5 mb-4">E-Book Detail</h3>
<div class="d-flex">
    <p class="col-md-1">Tittle : </p>
    <p>{{ $ebook->title }}</p>
</div>

<div class="d-flex">
    <p class="col-md-1">Author : </p>
    <p>{{ $ebook->author }}</p>
</div>

<div class="d-flex">
    <p class="col-md-1">Description : </p>
    <p class="col-md-10">{{ $ebook->description }}</p>
</div>

<div class="col-md-6 offset-md-10 mt-4 mb-3">
    <form action="/storecart" method="post">
    @csrf
    <button type="submit" class="btn btn-warning">
        Rent
    </button>
    </form>
</div>



@endsection



