@extends('layout.layout')
@section('content')

    <h1 class="text-center">Регистрация</h1>


    <section class="w-100 p-4 d-flex justify-content-center pb-4">
        <div style="width: 26rem;" bis_skin_checked="1">
            <form action="{{route('registration-form')}}" method="post">
                @csrf
                <!-- Name input -->
                <div class="form-outline mb-4" bis_skin_checked="1">
                    <input type="text" id="registerName" class="form-control" name="registerName">
                    <label class="form-label" for="registerName" style="margin-left: 0px;">Name</label>
                    <div class="form-notch" bis_skin_checked="1">
                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                        <div class="form-notch-middle" style="width: 42.4px;" bis_skin_checked="1"></div>
                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                    </div>
                </div>
                    @error('registerName')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror


                <!-- Email input -->

                <div class="form-outline mb-4" bis_skin_checked="1">
                    <input type="email" id="registerEmail" class="form-control" name="registerEmail">
                    <label class="form-label" for="registerEmail" style="margin-left: 0px;">Email</label>
                    <div class="form-notch" bis_skin_checked="1">
                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                        <div class="form-notch-middle" style="width: 40px;" bis_skin_checked="1"></div>
                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                    </div>
                </div>
                    @error('registerEmail')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror


                <!-- Password input -->
                <div class="form-outline mb-4" bis_skin_checked="1">
                    <input type="password" id="registerPassword" class="form-control" name="registerPassword">
                    <label class="form-label" for="registerPassword" style="margin-left: 0px;">Password</label>
                    <div class="form-notch" bis_skin_checked="1">
                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                        <div class="form-notch-middle" style="width: 64.8px;" bis_skin_checked="1"></div>
                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                    </div>
                </div>
                    @error('registerPassword')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <!-- Repeat Password input -->
                <div class="form-outline mb-4" bis_skin_checked="1">
                    <input type="password" id="registerRepeatPassword" class="form-control" name="registerRepeatPassword">
                    <label class="form-label" for="registerRepeatPassword" style="margin-left: 0px;">Repeat
                        password</label>
                    <div class="form-notch" bis_skin_checked="1">
                        <div class="form-notch-leading" style="width: 9px;" bis_skin_checked="1"></div>
                        <div class="form-notch-middle" style="width: 106.4px;" bis_skin_checked="1"></div>
                        <div class="form-notch-trailing" bis_skin_checked="1"></div>
                    </div>
                </div>
                    @error('registerPassword')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                <div class="text-center" bis_skin_checked="1">
                    <p>already member? <a href="{{route('login')}}">login</a></p>
                </div>
            </form>
        </div>
    </section>

@endsection
