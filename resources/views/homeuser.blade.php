@extends('Layoutmain')


@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $ebook as $e)

    <tr class="">
        <td scope="row">{{ $e->author }}</td>
        <td><a href="{{ route('ebook.show',$e->ebook_id) }}">{{ $e->title }}</a></td>
    </tr>

    @endforeach

    </tbody>
</table>



@endsection


