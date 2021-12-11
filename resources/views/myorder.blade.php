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
        <form class="text-center" action="">
          <div class="input-group text-center justify-content-center ">
            <input class="rounded py-1 w-25" type="text" placeholder="Search Order">
          </div>
        </form>
      </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 rounded shadow">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Date</th>
                        <th class="d-none d-md-table-cell" scope="col">Order Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($ordersAvailable as $order)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$order->Record->ID}}</td>
                          <td>{{$order->Record->Timestamp}}</td>
                          <td class="d-none d-md-table-cell">LG0063175</td>
                          <td>
                              <div class="text-success">{{$order->Record->Status}}</div>
                          </td>
                          <td>
                              <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#verifyOrderModal" onclick="changeVerifyAction('{{$order->Record->ID}}')" {{checkOrderStatus($order->Record->Status, $jwtOrg, $order->Record->BuyerOrg, $order->Record->SellerOrg) ? "" : "disabled"}}>Verify</button>
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
@include('inc.actionbtnModal')
@endsection

@section('js')
<script>
  function changeVerifyAction(id){
    $("#verifyOrderForm").attr('action', "/update/order/" + id);
  }
</script>
@endsection
