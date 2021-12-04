@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="pricing">
    <div class="container-lg py-5">
      <div class="row justify-content-center  g-5">
        <div class="col-md-3">
          <div class=" rounded  p-2 right-content">
            <div class="mb-3">
              <h3 class="text-start">Example Vendor</h3>
              <p>Vendor@email.com</p>
              <p>Vendor</p>
            </div>
            <table class="table border">
              <tr>
                <td><a href="#" id="listBtn" class="text-decoration-none txt-blue">Spare-parts List</a></td>
              </tr>
              <tr>
                <td><a href="#" id="createBtn" class="text-decoration-none txt-blue">Add New Spare-parts</a></td>
              </tr>
            </table>
          </div>
        </div>
        <div class="col-md-9">
          <div id="list" class="row justify-content-start align-items-center g-2">
          <h3 class="text-start mb-3">Spare-parts List</h3>
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-12 col-6 c-pointer">
              <div class="position-relative border bg-white p-1 rounded spareparts">
                  <div class="positon-relative overflow-hidden mx-auto spareparts__thumbnail">
                      <img class="w-100 h-auto" src="/assets/sparepart-dummy1.jpg" alt="">
                  </div>
                  <div class="py-2 spareparts__content">
                      <div class="spareparts__content--title">
                          <p class="fw-bold mt-0">Piper Pipes</p>
                          <p class="text-muted mb-3 mt-0">11/06/2021</p>
                          <div class="d-block">
                            <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                          {{-- <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button> --}}
                          <button id="update" class="btn bg-blue text-white btn-sm">Update</button>
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
                        <p class="text-muted mb-3 mt-0">11/06/2021</p>
                        <div class="d-block">
                          <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('ownedDetails')}}'">Details</button>
                          {{-- <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button> --}}
                          <button id="update" class="btn bg-blue text-white btn-sm">Update</button>
                        </div>
                      </div>
                  </div>                  
              </div>
            </div>
          </div>
          <div id="create" class="row justify-content-start align-items-center g-2 d-none">
          <h1 class="text-center mb-3">Add New Spare-part</h1>
            <div class="col-md-12">
                <form>
                    <label for="id" class="form-label txt-blue">Spare-part ID</label>
                    <div class=" mb-4 rounded">
                      <input type="text" id="id" class="form-control validate" />
                    </div>
                    <label for="types" class="form-label txt-blue">Spare-Part Type</label>
                    <div class=" mb-3  rounded ">
                      <select name="types" id="airport" class="form-select">
                          <option value="Hydraulic press">Hydraulic press</option>
                          <option value="Pipe">Pipe</option>
                          <option value="Wings">Wings</option>
                      </select>
                    </div>
                    <label for="model" class="form-label txt-blue">Spare-part Model</label>
                    <div class=" mb-3  rounded">
                      <input type="text" id="model" class="form-control" />
                    </div>
                    <label for="weight" class="form-label txt-blue">Weight</label>
                    <div class=" mb-3  rounded">
                      <input type="text" id="weight" class="form-control" />
                    </div>
                    <label for="qty" class="form-label txt-blue">Quantity</label>
                    <div class=" mb-3  rounded">
                      <input type="text" id="qty" class="form-control" />
                    </div>
                    <label for="description" class="form-label txt-blue">Description</label>
                    <div class=" mb-3  rounded">
                        <textarea class="form-control" id="description" style="height: 140px"></textarea>
                    </div>
                    <label for="formFileMultiple" class="form-label txt-blue">Upload Image</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple />
                </form>
                <div class="text-center">
                    <button type="submit" class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5">Submit</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
<script>
$("#listBtn").on("click",function(){

  $("#list").show();
  $("#create").addClass("d-none");

});
$("#createBtn").on("click",function(){

  $("#list").hide();
  $("#create").removeClass("d-none");

});
$("#update").on("click",function(){

  $("#list").hide();
  $("#create").removeClass("d-none");

});
</script>
@endsection