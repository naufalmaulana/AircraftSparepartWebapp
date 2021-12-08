@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="sparepartDetails">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-4 p-5 rounded shadow">
            <div class="col-md-6 text-center">
                <img src="/assets/sparepart-dummy1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h1 class="fw-bold">
                    {{$asset['SparepartNumber']}} - {{$asset['SparepartName']}}
                </h1>
                <div class="bg-blue text-center text-white px-3 py-0 btn btn-sm c-none">
                    {{$asset['Status']}}
                </div>
                <hr>
                <h4 class="txt-blue fw-bold mb-3">Rp1.500.000</h4>
                <ul class="px-0 mb-3" style="list-style-type:none">
                    <li>Category: <span class="txt-blue gw-bold">Abcd</span></li>
                    <li>Weight: <span class="txt-blue gw-bold">100 kg</span></li>
                    <li>lorem: <span class="txt-blue gw-bold">Ipsum</span></li>
                </ul>
                <div class="mb-4">
                    <input id=demoInput type=number min=0 max=1000000 placeholder="Quantity">
                    <button class="btn bg-black txt-white py-0" onclick="decrement()">-</button>
                    <button class="btn bg-black txt-white py-0" onclick="increment()">+</button>
                </div>
                <button class="btn bg-blue txt-white btn-md px-5 rounded-pill fw-bold" type="submit">Add To Cart</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>
    function increment() {
       document.getElementById('demoInput').stepUp();
    }
    function decrement() {
       document.getElementById('demoInput').stepDown();
    }
 </script>
@endsection

