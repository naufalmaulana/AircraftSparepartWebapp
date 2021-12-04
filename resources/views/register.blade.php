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
                <form>
                    <label for="email" class="form-label">Email</label>
                    <div class=" mb-4 shadow rounded">
                      <input type="text" id="email" class="form-control validate" />
                    </div>
                    <label for="password" class="form-label">Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="password" class="form-control validate" />
                      <i class="bi bi-eye-fill" id="togglePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    <label for="retype-password" class="form-label">Re-type Password</label>
                    <div class=" mb-3 shadow rounded d-flex">
                      <input type="password" id="retype-password" class="form-control validate" />
                      <i class="bi bi-eye-fill" id="toggleRtypePasswordForm" style="margin-left: -30px; cursor: pointer; margin-top:10px;"></i>
                    </div>
                    <label for="airport" class="form-label">Organization Type</label>
                    <div class=" mb-3 shadow rounded ">
                      <select name="airport" id="airport" class="form-select">
                          <option value="Airlines">Airlines</option>
                          <option value="Vendor">Vendor</option>
                          <option value="Manufacture">Manufacture</option>
                          {{-- <option value="Maintenance, Repair and Operations (MRO)">Maintenance, Repair and Operations (MRO)</option> --}}
                      </select>
                    </div>
                    <label for="name" class="form-label">Organization Name</label>
                    <div class=" mb-3 shadow rounded">
                      <input type="text" id="name" class="form-control" />
                    </div>
                    <label for="pic" class="form-label">PIC Name (Airlines Only)</label>
                    <div class=" mb-3 shadow rounded">
                      <input type="text" id="pic" class="form-control"/>
                    </div>
                    {{-- <label for="airport" class="form-label">Airport</label>
                    <div class=" mb-3 shadow rounded ">
                      <select name="airport" id="airport" class="form-select">
                          <option value="CGK">CGK</option>
                          <option value="SUB">SUB</option>
                          <option value="HLP">HLP</option>
                      </select>
                    </div> --}}
                </form>
                <div class="text-center">
                    <button type="submit" class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5">Sign up</button>
                </div>
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
