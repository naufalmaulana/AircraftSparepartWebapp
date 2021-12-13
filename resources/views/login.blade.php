@extends('layouts.master')

@section('content')
<section id="login" class="bg-light vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center ">
            <div class="col-md-6 px-5 py-3 rounded shadow bg-white">
                    {{-- <div class="p-2 bg-dark rounded-pill text-center w-25 mb-5 ">
                        <h4 class="fw-bold text-white mb-0 logo">LO<span class="txt-blue">GO</span></h4>
                    </div> --}}
                    <div class="text-start mb-5">
                        <h1>AVIPAR-Chain</h1>
                    </div>
                <h1 class="fw-bold">Sign In With Your <br> Account</h1>
                <p>Didn't have an account? <a href="{{ route('register') }}" class="txt-blue text-decoration-none">Sign up</a></p>
                <form name="login-form" id="login-form" method="post" action="{{route('storeLogin')}}">
                    @csrf
                    @if(session()->has('error'))
                    <div class="row">
                      <span class="text-danger">{{ session()->get('error')}}</span>
                    </div>
                    @endif
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-4 shadow rounded">
                      <input name="email" type="text" id="email" class="form-control" />
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input name="password" type="password" id="password" class="form-control validate" />
                      <i class="bi bi-eye-fill" id="togglePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    {{--<a href="{{ route('forgotPassword') }}" class="text-decoration-none txt-blue">Forgot your password ?</a>--}}
                    <div class="text-center">
                        <button class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5" type="submit">Sign In</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    const togglePasswordForm = document.querySelector('#togglePasswordForm');
    const passwordform = document.querySelector('#password');
    togglePasswordForm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwordform.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordform.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye-slash-fill');
});
</script>   

@endsection



