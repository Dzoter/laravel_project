@extends('layout.layout')
@section('content')

    <h1 class="text-center">Вход</h1>
    @include('included.success-message')
    <section class="w-100 p-4 d-flex justify-content-center pb-4 block-center">
        <form action="{{route('login-form')}}" method="post" style="width: 22rem;">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4" bis_skin_checked="1">
                <input type="email" id="form2Example1" class="form-control" name="email">
                <label class="form-label" for="form2Example1" style="margin-left: 0px;">Email address</label>
                <div class="form-notch" bis_skin_checked="1"><div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div><div class="form-notch-middle" style="width: 88.8px;" bis_skin_checked="1"></div><div class="form-notch-trailing" bis_skin_checked="1"></div></div></div>
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <!-- Password input -->
            <div class="form-outline mb-4" bis_skin_checked="1">
                <input type="password" id="form2Example2" class="form-control" name="password">
                <label class="form-label" for="form2Example2" style="margin-left: 0px;">Password</label>
                <div class="form-notch" bis_skin_checked="1"><div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div><div class="form-notch-middle" style="width: 64px;" bis_skin_checked="1"></div><div class="form-notch-trailing" bis_skin_checked="1"></div></div></div>
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                 @enderror
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4" bis_skin_checked="1">
                <div class="col d-flex justify-content-center" bis_skin_checked="1">
                    <!-- Checkbox -->
                    <div class="form-check" bis_skin_checked="1">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked="">
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

                <div class="col" bis_skin_checked="1">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            <div class="text-center" bis_skin_checked="1">
                <p>Not a member? <a href="{{route('registration')}}">Register</a></p>
            </div>


        </form>
    </section>


@endsection

