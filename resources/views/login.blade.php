@extends('Layout')


@section('content')

<div class="headersignup bg-white">
    <h3>Log In</h3>
</div>

<div class="container register-form">
    <div class="form">
        <div class="form-content">
            <form action="/login" method="post">
            @csrf
            <div class="row">

                    <div class="control-group mt-3 mb-3">
                        <label class="control-label col-md-2"  for="email">Email Address :</label>
                        <div class="controls">
                            <input type="email" id="email" name="email" placeholder="" class=" input-xlarge @error('email') is-invalid @enderror" required value={{Cookie::get('email') !== null ? Cookie::get('email') : "" }}>
                        </div>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="control-group mt-3 mb-3">
                        <label class="control-label col-md-2"  for="password">Password :</label>
                        <div class="controls">
                          <input type="password" id="password" name="password" placeholder="" class="input-xlarge @error('password') is-invalid @enderror" required value={{Cookie::get('password') !== null ? Cookie::get('password') : "" }}>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>

            </div>
            <div class="body-bottom">


                <div class="offset-md-2">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>

                <div class="col-md-6 offset-md-1 mt-4 mb-3">
                    <button type="submit" class="btn btn-warning col-md-4 ">
                        Submit
                    </button>
                </div>
                <div class="col-md-5 ">
                    <a href="/register">Dont have an account? click here to sign up</a>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>



@endsection


