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
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th class="d-none d-md-table-cell" scope="col">Order Id</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-success">Delivered</div>
                        </td>
                        <td>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Action</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-danger">Cancelled</div>
                        </td>
                        <td>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Action</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-warning">Waiting payment</div>
                        </td>
                        <td>
                            <button  type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Action</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-primary">Paid</div>
                        </td>
                        <td>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"">Action</button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-success">Delivered</div>
                        </td>
                        <td>
                            <button type="button" class="btn bg-blue text-white fw-bold btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Action</button>
                        </td>
                      </tr>
                      {{-- <tr>
                        <th scope="row">6</th>
                        <td>Metal pipe</td>
                        <td>11/06/2021</td>
                        <td class="d-none d-md-table-cell">LG0063175</td>
                        <td>
                            <div class="text-success">Delivered</div>
                        </td>
                        <td>
                            <button class="btn bg-blue text-white fw-bold btn-sm">Action</button>
                        </td>
                      </tr> --}}
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</section>
@include('inc.actionbtnModal')
@endsection

@section('js')

@endsection
