@extends('layouts.master')

@section('content')
<section id="register" class="bg-light vh-100 d-flex align-items-center">
    <div class="container ">
        <div class="row justify-content-center align-items-center my-5">
            {{-- <h4 class="fw-bold text-black text-start">LO<span class="txt-blue">GO</span></h4> --}}
            <div class="col-md-6 px-5 py-3 rounded shadow bg-white">
                    {{-- <div class="p-2 bg-dark rounded-pill text-center w-25 mb-5 ">
                        <h4 class="fw-bold text-white mb-0 logo">LO<span class="txt-blue">GO</span></h4>
                    </div> --}}
                    <div class="text-start mb-5">
                        <img src="/assets/logo3.svg" class="img-fluid" width="20%" alt="logo">
                    </div>
                <h1 class="fw-bold">Reset Your Password</h1>
                {{-- <p></a></p> --}}
                <form>
                    <label for="password" class="form-label">New Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="newpassword" class="form-control validate" placeholder="Enter your new password"/>
                      <i class="bi bi-eye-fill" id="togglePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    <label for="retype-password" class="form-label">Re-type New Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="retype-newpassword" class="form-control validate" placeholder="Re-enter your new password"/>
                      <i class="bi bi-eye-fill" id="toggleRtypePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                </form>
                <div class="text-center">
                    <button type="submit" class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5" onclick="window.location.href='{{route('login')}}'">Submit</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    const togglePasswordForm = document.querySelector('#togglePasswordForm');
    const passwordform = document.querySelector('#newpassword');
    togglePasswordForm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwordform.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordform.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye-slash-fill');
});
</script>  
<script>
    const toggleRetypePasswordForm = document.querySelector('#toggleRtypePasswordForm');
    const retypepasswordform = document.querySelector('#retype-newpassword');
    toggleRetypePasswordForm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = retypepasswordform.getAttribute('type') === 'password' ? 'text' : 'password';
    retypepasswordform.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye-slash-fill');
});
</script>  

@endsection
