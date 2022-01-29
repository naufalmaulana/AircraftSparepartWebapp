@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section class="documentation my-5">
    <div class="container-lg">
        <div class="row justify-content-center  g-4">
            <div class="col-md-8 " id="help1">
              <div class="border p-5">
                  <h1 class="txt-blue">Log In to Avipar-Chain</h1>
                  <p class="text-muted">To access Avipar-Chain application, you must first log into your account.</p>
                  <hr class="mb-4">
                  <h3>Login</h3>
                  <ol>
                      <li>Go to Avipar-Chain website </li>
                      <li>You will be directed to the login page, click the "Sign up" link then you will be directed to register page</li>
                      <li>Correctly fill in the registry form</li>
                      <li>Your credentials will be checked and if it is correct, you will be granted access to the application</li>
                  </ol>
                  <a href="{{ route('login') }}" class="btn bg-blue txt-white fw-bold mb-2">LOGIN TO YOUR ACCOUNT</a>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">If you login in public computer, make sure to log out before leaving the computer</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help2">
              <div class="border p-5">
                  <h1 class="txt-blue">Register to Avipar-Chain</h1>
                  <p class="text-muted">To be granted access to Avipar-chain website, first you need to make an account by registering to Avipar-chain website.</p>
                  <hr class="mb-4">
                  <h3>Register</h3>
                  <ol>
                      <li>Go to Avipar-Chain website </li>
                      <li>Correctly fill in your email and password credentials</li>
                      <li>Click the sign up button</li>
                      <li>Your account will be registered and you will be able to log in to our page</li>
                  </ol>
                  <a href="{{ route('register') }}" class="btn bg-blue txt-white fw-bold mb-2">SIGN UP NOW</a>
                  <h3>Email Has Been Used</h3>
                  <p>You cannot create an account if the email that you registered are:</p>
                  <ul>
                      <li>Already been used.</li>
                      <li>Is not a real email (fake email address)</li>
                  </ul>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help3">
              <div class="border p-5">
                  <h1 class="txt-blue">View Spare-part Details</h1>
                  <p class="text-muted">You can view the details of a spare-part such as its quantity, weight, status, latest updated date, currently owned by whom and the detail description of the spare-part itself.</p>
                  <hr class="mb-4">
                  <h3>View Details</h3>
                  <ol class="mb-1">
                      <li>Go to your home page</li>
                      <li>Choose a spare-part that you want to see the detail of</li>
                      <li>Click the "Details" button</li>
                      <li>You will be redirected to the spare-part details page</li>
                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">You can view details of spare-part both in the "Owned spare-parts" menu and "Spare-parts for sale" menu</span></p>
                  <h3>Spare-part's History</h3>
                  <p>You can also view the history of ownership of the spare-part itself by accessing the spare-part details menu and clicking the "History" button. By clicking this button, you will be redirected to spare-part's history page.</p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help4">
              <div class="border p-5">
                  <h1 class="txt-blue">Add New Spare-part</h1>
                  <p class="text-muted">This feature is strictly for manufacturer and only manufacturer that can access this feature</p>
                  <hr class="mb-4">
                  <h3>Add New Spare-part</h3>
                  <ol class="mb-1">
                      <li>Go to your home page</li>
                      <li>Click the "Add new spare-part" menu and you will be redirected to add new spare-part menu</li>
                      <li>Fill in the form based on the spare-part that you created</li>
                      <li>Click Submit button and then your spare-part will be added to the blockchain</li>
                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">If you do not have the picture of the spare-part yet, you could click "Use placeholder image" check box and your spare-part image will be placed with a default image from Avipar-chain, keep in mind you can always update the spare-part details later.</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help5">
              <div class="border p-5">
                  <h1 class="txt-blue">Buy Spare-part</h1>
                  <p class="text-muted">You can buy one or many spare-part based on your needs</p>
                  <hr class="mb-4">
                  <h3>Buying spare-part(s)</h3>
                  <ol class="mb-1">
                      <li>Go to your home page</li>
                      <li>Click the "Spare-part(s) for sale" menu and you will be redirected to spare-part(s) for sale menu where you can see what spare-part currently for sale</li>
                      <li>A pop up will show and asking you to fill the quantity of the spare-part you want to buy</li>
                      <li>Fill in the quantity based on how much you want to buy the spare-part you want to buy</li>
                      <li>Click the buy button</li>
                      <li>If your user role is member then you have to wait for your purchase order to be approved by supervisor actor</li>
                      <li>If your user role is supervisor then you have to wait for your purchase order to be approved by supervisor seller</li>
                      <li>After your purchased order is approved it will be added in your "My Order" page</li>
                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">This feature cannot be done with manufacturer and admin as the user.</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help6">
              <div class="border p-5">
                  <h1 class="txt-blue">Repair Spare-part</h1>
                  <p class="text-muted">Airlines can request for a spare-part maintenance to MRO</p>
                  <hr class="mb-4">
                  <h3>Request Spare-part Repair</h3>
                  <ol class="mb-1">
                      <li>Choose a spare-part that you wanted to repair</li>
                      <li>Click the repair button</li>
                      <li>A pop up will show and asking you to choose the organization to repair your spare-part</li>
                      <li>Choose the organization to repair your spare-part</li>
                      <li>Click agree</li>
                      <li>If your user role is member then you have to wait for your repair order to be approved by supervisor actor</li>
                      <li>If your user role is supervisor then you have to wait for your repair order to be approved by supervisor seller</li>
                      <li>After your repair order is approved it will be added in your "My Order" page</li>
                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">This feature can only be done by Airline.</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help7">
              <div class="border p-5">
                  <h1 class="txt-blue">Update User's Role</h1>
                  <p class="text-muted">Admin can change a role of a user to a member or supervisor</p>
                  <hr class="mb-4">
                  <h3>User Role Update</h3>
                  <ol class="mb-1">
                      <li>Go to your home page</li>
                      <li>Click the "User List"</li>
                      <li>Choose a user account that you want the role to be updated</li>
                      <li>Choose a role that you want that user to be updated to between a member and a supervisor</li>
                      <li>Click update role button</li>
                      <li>The newly and updated data will be stored in the blockchain</li>
                      <li>You will be redirected to the home page</li>
                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">This feature can only be done by admin.</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help8">
              <div class="border p-5">
                  <h1 class="txt-blue">Update Spare-part</h1>
                  <p class="text-muted">You can update the data of a spare-part such as number, name, status, weight, quantity and image of the spare-part</p>
                  <hr class="mb-4">
                  <h3>Update Spare-part's Data</h3>
                  <ol class="mb-1">
                      <li>Go to your home page</li>
                      <li>Choose a spare-part that you want to update the data of</li>
                      <li>Click the update button then you will be redirected to the update spare-part menu</li>
                      <li>Update the spare-part informations</li>
                      <li>Click the submit button</li>
                      <li>The newly updated spare-part's data will be stored in the blockchain</li>

                  </ol>
                  <p class="fw-bold text-muted">Tips: <span class="fw-normal">If the user is airline, user can also update the data of the spare-part's flight logs, next overhaul and total hours spent.</span></p>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help9">
              <div class="border p-5">
                  <h1 class="txt-blue">Update Purchase Order</h1>
                  <p class="text-muted">You update the status of your purchase order</p>
                  <hr class="mb-4">
                  <h3>Update Purchase Order Approval status</h3>
                  <ol class="mb-1">
                      <li>Go to My Order page by clicking the "My Order" button on your top right corner</li>
                      <li>Click on the "Purchase Orders" button and it will show you the list of your purchase orders</li>
                      <li>Choose a purchase order that you wanted to update</li>
                      <li>Click Reject to change the status to "Failed"</li>
                      <li>Click Verify if you want to update the status</li>
                      <li>A pop up will show after you click either verify or reject making sure that you want to update the order</li>
                      <li>Click agree</li>
                      <li>If the initial status is "waiting for buyer organization" then clicking verify will update the order status will be updated to "waitin for seller organization"</li>
                      <li>If the initial status is "waiting for seller organization" then clicking verify will update the order status will be updated to "completed" and the spare-part will be owned by the buyer</li>
                  </ol>
              </div>
            </div>
            <div class="col-md-8 d-none" id="help10">
              <div class="border p-5">
                  <h1 class="txt-blue">Update Repair Order</h1>
                  <p class="text-muted">You can update the status of your repair order</p>
                  <hr class="mb-4">
                  <h3>Update Repair Order Approval status</h3>
                  <ol class="mb-1">
                      <li>Go to My Order page by clicking the "My Order" button on your top right corner</li>
                      <li>Click on the "Repair Orders" button and it will show you the list of your repair orders</li>
                      <li>Choose a repair order that you wanted to update</li>
                      <li>Click Reject to change the status to "Failed"</li>
                      <li>Click Verify if you want to update the status</li>
                      <li>A pop up will show after you click either verify or reject making sure that you want to update the order</li>
                      <li>Click agree</li>
                      <li>If the initial status is "waiting for requester organization" then clicking verify will update the order status will be updated to "waitin for repairer organization"</li>
                      <li>If the initial status is "waiting for repairer organization" then clicking verify will update the order status will be updated to "completed"</li>
                  </ol>
              </div>
            </div>
            <div class="col-md-4">
              <p class="h3 mb-4 fw-bold">Help</p>
              <p id="toggle1" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Log in</p>
              <p id="toggle2" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Register</p>
              <p id="toggle3" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> View Spare-part's Detail</p>
              <p id="toggle4" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Add New Spare-part</p>
              <p id="toggle5" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Buy Spare-part</p>
              <p id="toggle6" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Request Spare-part Repair</p>
              <p id="toggle7" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Update User's Role</p>
              <p id="toggle8" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Update Spare-part's Data</p>
              <p id="toggle9" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Update Purchase Order Approval</p>
              <p id="toggle10" class="c-pointer txt-blue"><i class="bi bi-info-circle-fill"></i> Update Repair Order Approval</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    $("#toggle1").click(function(){
        $("#help1").removeClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");
    });
    $("#toggle2").click(function(){
        $("#help2").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle3").click(function(){
        $("#help3").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle4").click(function(){
        $("#help4").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle5").click(function(){
        $("#help5").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle6").click(function(){
        $("#help6").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle7").click(function(){
        $("#help7").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle8").click(function(){
        $("#help8").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help9").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle9").click(function(){
        $("#help9").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help10").addClass("d-none");

    });
    $("#toggle10").click(function(){
        $("#help10").removeClass("d-none");
        $("#help1").addClass("d-none");
        $("#help2").addClass("d-none");
        $("#help3").addClass("d-none");
        $("#help4").addClass("d-none");
        $("#help5").addClass("d-none");
        $("#help6").addClass("d-none");
        $("#help7").addClass("d-none");
        $("#help8").addClass("d-none");
        $("#help9").addClass("d-none");

    });
  </script>
@endsection
