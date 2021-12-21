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
              <h3 class="text-start" style="word-wrap: anywhere">{{$jwtOrgName}}</h3>
              <p class="mb-0 mt-2">Email: {{$jwtEmail}}</p>
              <p>Role: {{ucfirst($jwtRole)}}</p>
            </div>
            <table class="table border">
              @if ($jwtRole != "admin")
              <tr>
                <td><a href="#" id="ownedBtn" class="text-decoration-none txt-blue">Owned Spare-part List</a></td>
              </tr>
              @endif
              @if ($jwtOrgType != "manufacturer")
              <tr>
                <td><a href="#" id="availableBtn" class="text-decoration-none txt-blue">Spare-part(s) For Sale</a></td>
              </tr>
              @endif
              @if ($jwtOrgType == "manufacturer")
                <tr>
                  <td><a href="#" id="createBtn" class="text-decoration-none txt-blue">Add New Spare-parts</a></td>
                </tr>
              @endif
              @if ($jwtRole == "admin")
              <tr>
                <td><a href="#" id="userlistBtn" class="text-decoration-none txt-blue">User List</a></td>
              </tr>
              @endif
            </table>
          </div>
        </div>
        <div class="col-md-9">
          <div id="owned" class="row justify-content-start align-items-center g-2" style="{{$jwtRole == 'admin' ? 'display: none;' : ''}}">
            <h3 class="text-start mb-3">Owned Spare-part(s)</h3>
            @if(is_null($assetsOwned))
                <h1>You do not owned any spare parts</h1>
            @endif
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($assetsOwned as $asset)
              <div class="col">
                <div class="card">
                    <img class="card-img-top" src="/assets/sparepart-dummy1.jpg" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$asset->Record->ID}} - {{$asset->Record->Name}}</h5>
                      <p class="card-text">{{$asset->Record->Description}}</p>
                    </div>   
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$asset->RecordQty->Quantity}} pcs left {{getOrderedQuantity($asset->RecordQty->Quantity, $asset->Record->Quantity)}}</li>
                      <li class="list-group-item">Status: {{$asset->Record->Status}}</li>
                    </ul>
                    <div class="card-body">
                      <div class="d-block">
                        <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('sparepartDetail',['id' => $asset->Key])}}'">Details</button>
                        <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('sparepartUpdate', ['id' => $asset->Key])}}'" {{checkUpdateAccess($asset->Record->Status) && ($asset->Record->Quantity == $asset->RecordQty->Quantity) ? "" : "disabled"}}>Update</button>
                        @if ($jwtOrgType == "airline")
                          <button class="btn bg-blue text-white btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#serviceRequest" onclick="changeBuyAction('{{$asset->Key}}', '{{$asset->Record->Name}}', '{{$asset->Record->Number}}', '{{$asset->Record->Weight}}', '{{$asset->Record->Owner}}', {{$asset->RecordQty->Quantity}})" {{$asset->Record->Status == "Requesting Repair" ? "disabled" : ""}}>Repair</button>
                        @endif
                      </div>
                    </div>  
                    <div class="card-footer text-muted">
                      <p class="text-muted mb-3 mt-0">Created on: {{$asset->Record->CreateDate}}</p>
                    </div>            
                </div>
              </div>
            @endforeach
              </div>
          </div>
          <div id="sale" class="row justify-content-start align-items-center g-2" style="{{$jwtRole != 'admin' ? 'display: none;' : ''}}">
            <h3 class="text-start mb-3">Spare-part(s) For Sale</h3>
            @empty($assetsAvailable)
              <h1>There are no spare parts available</h1>
            @endempty
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($assetsAvailable as $asset)
              <div class="col">
                <div class="card">
                    <img class="card-img-top" src="/assets/sparepart-dummy1.jpg" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$asset->Record->ID}} - {{$asset->Record->Name}}</h5>
                      <p class="card-text">{{$asset->Record->Description}}</p>
                    </div>    
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$asset->Record->Category->Name}}</li>
                      <li class="list-group-item">{{$asset->RecordQty->Quantity}} pcs Left</li>
                      <li class="list-group-item">Owned by <b>{{$asset->Record->Org->Name}}</b></li>
                      <li class="list-group-item">Status: {{$asset->Record->Status}}</li>
                    </ul>       
                    <div class="card-body">
                      <div class="d-block">
                        <button class="btn bg-blue text-white btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#airlineBuyModal" onclick="changeBuyAction('{{$asset->Key}}', '{{$asset->Record->Name}}', '{{$asset->Record->Number}}', '{{$asset->Record->Weight}}', '{{$asset->Record->Owner}}', {{$asset->RecordQty->Quantity}})" {{checkBuyAccess($asset->Record->Org->Type, $jwtOrgType) && ($asset->RecordQty->Quantity > 0) ? "" : "disabled"}}>Buy</button>
                        <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('sparepartDetail',['id' => $asset->Key])}}'">Details</button>
                        {{-- <button class="btn bg-blue text-white btn-sm" onclick="window.location.href='{{route('tracking')}}'">Track History</button> --}}
                      </div>
                    </div>       
                </div>
              </div>
            @endforeach
            </div>
          </div>
          @include('inc.createSparepart')
          <div id="userlist" class="row justify-content-start align-items-center g-2" style="display: none;">
            <h3 class="text-start mb-3">User List</h3>
            <table class="table">
              <thead class="thead bg-black text-white">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">User</th>
                  <th scope="col">Role</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($userList as $user)
                  <tr>
                    <th class="txt-black" scope="row">{{$loop->iteration}}</th>
                    <td>{{$user->Record->Name}}</td>
                    <td>                    
                      <div class="rounded">
                        <select id="role{{$user->Key}}" name="role{{$user->Key}}" class="form-select">
                          <option {{$user->Record->Role == "member" ? "selected" : ""}} value="member">MEMBER</option>
                          <option {{$user->Record->Role == "supervisor" ? "selected" : ""}}  value="supervisor">SUPERVISOR</option>
                        </select>
                      </div>
                    </td>
                    <td><button class="btn bg-blue text-white rounded-pill px-5" data-bs-toggle="modal" data-bs-target="#roleModal" onclick="changeRoleAction('{{$user->Key}}')">Update Role</button></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@include('inc.orderRequestedModal')
@include('inc.airlineBuyModal')
@include('inc.serviceRequest')
@include('inc.roleUpdateModal')
@endsection

@section('js')
<script>
  
$("#ownedBtn").on("click",function(){
  resetDiv();
  $("#owned").show();
});

$("#availableBtn").on("click",function(){
  resetDiv();
  $("#sale").show();
});

$("#createBtn").on("click",function(){
  resetDiv();
  $("#create").show();
});

$("#userlistBtn").on("click",function(){
  resetDiv();
  $("#userlist").show();
});

function changeBuyAction(id, name, number, weight, updateBy, quantity){
  $("#buyForm").attr('action', "/buy/" + id);
  $("#airlineBuyForm").attr('action', "/buy/" + id);
  $("#serviceRequestForm").attr('action', "/repair/request/" + id);
  $("#nameInput").val(name);
  $("#numberInput").val(number);
  $("#capacityInput").attr("Max", quantity);
  $("#capacityInput").attr("Placeholder", quantity);
  $("#weightInput").val(weight);
  $("#updateByInput").val(updateBy);
}

function changeRoleAction(id){
  $("#roleForm").attr('action', "/update/user/" + id);
  $("#roleInput").val($("#role" + id).val());
}

function resetDiv(){
  $("#sale").hide();
  $("#owned").hide();
  $("#create").hide();
  $("#userlist").hide();
}
</script>
<script>
  $(document).on('click', '#flexCheckDefault', function () {
    var target = $(this).data('target');    
    if ($(this).is(':checked')) {
        $('#' + target).addClass('disabled').css('pointerEvents','none');
    }
    else {
        $('#' + target).removeClass('disabled').css('pointerEvents','auto');;
    }
  });
</script>
@endsection