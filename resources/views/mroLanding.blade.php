@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="pricing" class="bg-light vh-100">
    <div class="container-lg py-5">
      <div class="row justify-content-center  g-5">
        <div class="col-md-3">
          <div class=" rounded  p-2 right-content">
            <div class="mb-3">
              <h3 class="text-start">Example Manufacture</h3>
              <p>Manufacture@email.com</p>
              <p>Manufacture</p>
            </div>
            <table class="table border">
              <tr>
                <td><a href="#" id="maintenanceListBtn" class="text-decoration-none txt-blue">Maintenance List</a></td>
              </tr>
              <tr>
                <td><a href="#" id="completedMaintenanceBtn" class="text-decoration-none txt-blue">Completed Maintenance</a></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-9">
          <div id="maintenanceList" class="row justify-content-start align-items-center g-2">
          <h3 class="text-start mb-3">Awaiting Maintenance List</h3>
            <div id="maintenance" class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>
                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                          <p class="fw-bold mt-0">Piper Pipes</p>
                          <p class="text-muted mb-3 mt-0">Issued At: 11/06/2021</p>
                          <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                            <button id="completeBtn" class="btn bg-blue text-white btn-sm">Completed</button>
                          </div>
                      </div>
                  </div>                  
              </div>
            </div>
            <div id="maintenance2" class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
                <div class="position-relative border bg-white p-1 rounded spareparts">
                    <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                        <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                    </div>
                    <div class="py-2 spareparts__content">
                        <div class="spareparts__content--title">
                            <p class="fw-bold mt-0">Piper Pipes</p>
                            <p class="text-muted mb-3 mt-0">Issued At: 11/06/2021</p>
                            <div class="d-block">
                              <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                              <button  id="completeBtn2" class="btn bg-blue text-white btn-sm">Completed</button>
                            </div>
                        </div>
                    </div>                  
                </div>
              </div>
          </div>
          <div id="completedMaintenance" class="row justify-content-start align-items-center g-2 d-none">
          <h3 class="text-start mb-3">Completed Maintenance List</h3>
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>
                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                          <p class="fw-bold mt-0">Piper Pipes</p>
                          <p class="text-muted mb-3 mt-0">Completed At: 21/06/2021</p>
                          <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button>
                          </div>
                      </div>
                  </div>                  
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>
                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                        <p class="fw-bold mt-0">Piper Pipes</p>
                        <p class="text-muted mb-3 mt-0">Completed At: 21/06/2021</p>
                        <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button>
                        </div>
                      </div>
                  </div>                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('inc.orderRequestedModal')
@include('inc.serviceRequest')
@endsection

@section('js')
<script>
$("#maintenanceListBtn").on("click",function(){

  $("#maintenanceList").show();
  $("#completedMaintenance").addClass("d-none");

});
$("#completedMaintenanceBtn").on("click",function(){

  $("#maintenanceList").hide();
  $("#completedMaintenance").removeClass("d-none");

});
$("#completeBtn").on("click",function(){

 $(this).closest("#maintenance").remove();

});
$("#completeBtn2").on("click",function(){

 $(this).closest("#maintenance2").remove();

});
</script>
@endsection