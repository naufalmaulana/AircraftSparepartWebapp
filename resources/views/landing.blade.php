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
              <h3 class="text-start">{{$jwtOrg}}</h3>
              <p>{{$jwtEmail}}</p>
            </div>
            <table class="table border">
              <tr>
                <td><a href="#" id="ownedBtn" class="text-decoration-none txt-blue">Owned Spare-part List</a></td>
              </tr>
              <tr>
                <td><a href="#" id="saleBtn" class="text-decoration-none txt-blue">Spare-parts For Sale</a></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-9">
          <div id="owned" class="row justify-content-start align-items-center g-2">
          <h3 class="text-start mb-3">Owned Spare-part(s)</h3>
          @isset($assetOwned)
              <h1>You do not owned any spare parts</h1>
          @endisset
          @foreach ($assetsOwned as $asset)
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>
                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                          <p class="fw-bold mt-0">{{$asset->Record->SparepartName}}</p>
                          <p class="text-muted mb-3 mt-0">11/06/2021</p>
                          <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button>
                            <button class="btn bg-blue text-white btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#serviceRequest">Service</button>
                          </div>
                      </div>
                  </div>                  
              </div>
            </div>
          @endforeach
          </div>
          <div id="sale" class="row justify-content-start align-items-center g-2 d-none">
          <h3 class="text-start mb-3">Spare-part(s) For Sale</h3>
          @empty($assets)
            <h1>There are no spare parts available</h1>
          @endempty
          @foreach ($assets as $asset)
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>

                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                          <p class="fw-bold mt-0">{{$asset->Record->SparepartName}}</p>
                          <p class="text-muted mb-3 mt-0">25 pcs Left</p>
                          <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="changeBuyAction('{{$asset->Key}}')">Buy</button>
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('sparepartDetail',['id' => $asset->Key])}}'">Details</button>
                            {{-- <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button> --}}
                          </div>
                      </div>
                  </div>                  
              </div>
            </div>
          @endforeach
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
$("#ownedBtn").on("click",function(){

  $("#owned").show();
  $("#sale").addClass("d-none");

});
$("#saleBtn").on("click",function(){

  $("#owned").hide();
  $("#sale").removeClass("d-none");
});

function changeBuyAction(id){
  $("#buyForm").attr('action', "/buy/" + id);
}
</script>
@endsection