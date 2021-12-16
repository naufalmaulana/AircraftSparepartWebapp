@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="myorder">
    <div class="container py-5">
      <div class="mb-5 text-center justify-content-center">
        <h1 class="fw-bold txt-black mb-3">
          My Orders
        </h1>
        <div class="col mb-4">
          <button class="btn btn-dark" id="purchaseBtn">Purchase Orders</button>
          <button class="btn btn-dark" id="repairBtn">Repair Orders</button>
        </div>
        <form class="text-center" action="">
          <div class="input-group text-center justify-content-center ">
            <input class="rounded py-1 w-25" type="text" placeholder="Search Order">
          </div>
        </form>
      </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 rounded shadow" id="purchaseOrderContainer">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Date</th>
                        <th class="d-none d-md-table-cell" scope="col">Spare-part Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($purchaseOrdersAvailable as $order)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$order->Record->ID}}</td>
                          <td>{{$order->Record->Timestamp}}</td>
                          <td class="d-none d-md-table-cell">{{$order->Record->AssetName}}</td>
                          <td>
                              <div class="text-success">{{$order->Record->Status}}</div>
                          </td>
                          <td>
                              <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#verifyOrderModal" onclick="changeVerifyAction('{{$order->Record->ID}}', true)" {{checkOrderStatus($order->Record->Status, $jwtOrg, $order->Record->BuyerOrg->ID, $order->Record->SellerOrg->ID) ? "" : "disabled"}}>Verify</button>
                              <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#verifyOrderModal" onclick="changeVerifyAction('{{$order->Record->ID}}', false)" {{checkOrderStatus($order->Record->Status, $jwtOrg, $order->Record->BuyerOrg->ID, $order->Record->SellerOrg->ID) ? "" : "disabled"}}>Reject</button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <div class="col-md-10 rounded shadow" id="repairOrderContainer" style="display: none;">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Order ID</th>
                      <th scope="col">Date</th>
                      <th class="d-none d-md-table-cell" scope="col">Spare-part ID</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($repairOrdersAvailable as $order)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$order->Record->ID}}</td>
                        <td>{{$order->Record->Timestamp}}</td>
                        <td class="d-none d-md-table-cell">{{$order->Record->AssetName}}</td>
                        <td>
                            <div class="text-success">{{$order->Record->Status}}</div>
                        </td>
                        <td>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#verifyServiceOrderModal" onclick="changeVerifyAction('{{$order->Record->ID}}', true)" {{checkRepairOrderStatus($order->Record->Status, $jwtOrg, $order->Record->RequesterOrg->ID, $order->Record->RepairerOrg->ID) ? "" : "disabled"}}>Verify</button>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#verifyServiceOrderModal" onclick="changeVerifyAction('{{$order->Record->ID}}', false)" {{checkRepairOrderStatus($order->Record->Status, $jwtOrg, $order->Record->RequesterOrg->ID, $order->Record->RepairerOrg->ID) ? "" : "disabled"}}>Reject</button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
        </div>
    </div>
</section>
@include('inc.verifyOrderModal')
@include('inc.verifyServiceOrderModal')
@endsection

@section('js')
<script>
  function changeVerifyAction(id, approve){
    $("#verifyOrderForm").attr('action', "/update/order/" + id);
    $("#verifyServiceOrderForm").attr('action', "/repair/verify/" + id);
    $("#verifyStatus").val(approve);
    $("#verifySOStatus").val(approve);
  }

  $("#purchaseBtn").on("click",function(){
    resetDiv();
    $("#purchaseOrderContainer").show();
  });

  $("#repairBtn").on("click",function(){
    resetDiv();
    $("#repairOrderContainer").show();
  });

  function resetDiv(){
    $("#purchaseOrderContainer").hide();
    $("#repairOrderContainer").hide();
  }
</script>
@endsection
