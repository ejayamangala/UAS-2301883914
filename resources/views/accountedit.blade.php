@extends('Layoutadmin')


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
        <th scope="col">Account</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ( $user as $u)
    <tr>
        @if($u->role_id ==1)
        <td>{{ $u->first_name }} {{ $u->middle_name }} {{ $u->last_name}} - Admin</td>
        @endif
        @if($u->role_id ==2)
        <td>{{ $u->first_name }} {{ $u->middle_name }} {{ $u->last_name }} - User </td>
        @endif
        <td>
            <a href={{ "edit/".$u->id }} class="btn btn-link ">Update Role</a>
        </td>
        <td>
            <form method="POST" action="{{ route('user.destroy', $u) }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-link" onclick="Delete this User?">Delete</button>
            </form>
        </td>

    </tr>
    @endforeach
</table>

@endsection


