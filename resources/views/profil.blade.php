@extends('Layoutmain')


@section('content')



<div class="container register-form">
    <div class="form">
        <div class="form-content">
            <form action="{{ route('user.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="m-b-25"> <img src="{{ Storage::url(auth()->user()->display_picture_link) }}" class="img-thumbnail" width="500px" alt="User-Profile-Image"> </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-2"  for="firstname">First Name :</label>
                            <div class="controls">
                              <input type="text" id="firstname" name="firstname" placeholder="" class=" input-xlarge @error('firstname') is-invalid @enderror" required value="{{ $user->first_name }}">
                            </div>
                            @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-2"  for="lastname">Last Name :</label>
                            <div class="controls">
                              <input type="text" id="lastname" name="lastname" placeholder="" class=" input-xlarge @error('lastname') is-invalid @enderror" required value="{{ $user->last_name }}">
                            </div>
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-2"  for="gender">Gender :</label>
                            <div class="controls">

                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="1">
                                    <span class="form-check-label"> Male </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="2">
                                    <span class="form-check-label"> Female</span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-2"  for="password">Password :</label>
                            <div class="controls">
                              <input type="password" id="password" name="password" placeholder="" class="input-xlarge @error('password') is-invalid @enderror" required>
                            </div>
                            @error('password')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-3"  for="middlename">Middle Name :</label>
                            <div class="controls">
                                <input type="text" id="middlename" name="middlename" placeholder="" class=" input-xlarge @error('middlename') is-invalid @enderror" value="{{ $user->middle_name }}">
                            </div>
                            @error('middlename')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-3"  for="email">Email Address :</label>
                            <div class="controls">
                                <input type="email" id="email" name="email" placeholder="" class=" input-xlarge @error('email') is-invalid @enderror" required value="{{ $user->email }}">
                            </div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-3"  for="role">Role :</label>
                            <div class="controls">

                                <select class="select col-md-900" name="role" id="role" required>
                                    @if( $user->role_id == 1)
                                    <option >Admin</option>
                                    @endif

                                    @if( $user->role_id == 2)
                                        <option >User</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="control-group mt-3 mb-3">
                            <label class="control-label col-md-3" for="displaypicture">Display Picture :</label>
                            <div class="controls">
                                <input class="input-xlarge @error('displaypicture') is-invalid @enderror" name="displaypicture" type="file" id="displaypicture">
                            </div>
                            @error('displaypicture')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="body-bottom">
                    <div class="col-md-6 offset-md-4 mt-4 mb-3">
                        <button type="submit" class="btn btn-warning col-md-4 ">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection



