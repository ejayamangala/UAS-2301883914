@extends('Layoutadmin')


@section('content')

<div class="headersignup bg-white">
    <h3>{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</h3>
</div>

<div class="container register-form">
    <div class="form">
        <div class="form-content">
            <form action="/edit" method="post" >
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="row">
                <div class="control-group mt-3 mb-3">
                    <label class="control-label col-md-1"  for="role">Role :</label>
                    <div class="controls">
                        <select class="select col-md-900" name="role" id="role" required>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="body-bottom">

                <div class="col-md-2 offset-md-1 mt-4 mb-3">
                    <button type="submit" class="btn btn-warning col-md-4 ">
                        Save
                    </button>
                </div>


            </div>
        </div>
    </form>
    </div>
</div>



@endsection
