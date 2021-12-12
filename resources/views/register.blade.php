@extends('layouts.master')

@section('content')
<section id="register" class="bg-light d-flex align-items-center">
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
                <h1 class="fw-bold">Get Started With Your <br> Account</h1>
                <p>Already have an account? <a href="{{ route('login') }}" class="txt-blue text-decoration-none">Log in</a></p>
                <form name="register-form" id="register-form" method="post" action="{{route('storeRegister')}}">
                  @csrf
                  @if(session()->has('error'))
                  <div class="row">
                    <span class="text-danger">{{ session()->get('error')}}</span>
                  </div>
                  @endif
                  <label for="name" class="form-label">Name</label>
                  <div class=" mb-4 shadow rounded">
                    <input type="text" id="name" name="name" class="form-control validate" />
                  </div>
                    <label for="email" class="form-label">Email</label>
                    <div class=" mb-4 shadow rounded">
                      <input type="text" id="email" name="email" class="form-control validate" />
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="password" name="password" class="form-control validate" />
                      <i class="bi bi-eye-fill" id="togglePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    <label for="retype-password" class="form-label">Re-type Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="retype-password" class="form-control validate" />
                      <i class="bi bi-eye-fill" id="toggleRtypePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    <label for="organization" class="form-label">Organization Type</label>
                    <div class=" mb-3 shadow rounded ">
                      <select id="organization" name="organization" class="form-select">
                        <option value="manufacturer">Manufacturer</option>
                        <option value="mro">MRO</option>
                          <option value="vendor">Vendor</option>
                          <option value="airline">Airline</option>
                          {{-- <option value="Maintenance, Repair and Operations (MRO)">Maintenance, Repair and Operations (MRO)</option> --}}
                      </select>
                    </div>
                    <label for="role" class="form-label">Role</label>
                    <div class=" mb-3 shadow rounded ">
                      <select id="role" name="role" class="form-select">
                          <option value="supervisor">Supervisor</option>
                          <option value="member">Member</option>
                      </select>
                    </div>
                    <label for="address" class="form-label">Address</label>
                    <div class=" mb-4 shadow rounded">
                      <input type="text" id="address" name="address" class="form-control validate" />
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5">Sign up</button>
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
<script>
    const toggleRetypePasswordForm = document.querySelector('#toggleRtypePasswordForm');
    const retypepasswordform = document.querySelector('#retype-password');
    toggleRetypePasswordForm.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = retypepasswordform.getAttribute('type') === 'password' ? 'text' : 'password';
    retypepasswordform.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi-eye-slash-fill');
});
</script>  

@endsection
