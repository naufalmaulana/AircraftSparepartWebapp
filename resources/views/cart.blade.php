@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="cart" class="cart">
    <div class="card my-5">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        {{-- <div class="col align-self-center text-right text-muted">3 items</div> --}}
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main justify-content-center align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/assets/sparepart-dummy1.jpg"></div>
                        <div class="col">
                            <div class="row txt-blue">Pipe</div>
                            <div class="row">Metal Pipe</div>
                        </div>
                        <div class="col">
                            {{-- <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>  --}}
                            <a href="#" onclick="decrement()">-</a>
                            <input href="#" class="border text-center p-0 w-25 mb-0" id=demoInput type=number value="1" min=1 max=1000000></input>
                            <a href="#" onclick="increment()">+</a> 
                        </div>
                        <div class="col">Rp1.500.000 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/assets/sparepart-dummy1.jpg"></div>
                        <div class="col">
                            <div class="row txt-blue">Pipe</div>
                            <div class="row">Diamond Pipe</div>
                        </div>
                        <div class="col">
                            {{-- <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>  --}}
                            <a href="#" onclick="decrement()">-</a>
                            <input href="#" class="border text-center p-0 w-25 mb-0" id=demoInput type=number value="1" min=1 max=1000000></input>
                            <a href="#" onclick="increment()">+</a> 
                        </div>
                        <div class="col">Rp1.500.000 <span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="row border-top border-bottom">
                    <div class="row main align-items-center">
                        <div class="col-2"><img class="img-fluid" src="/assets/sparepart-dummy1.jpg"></div>
                        <div class="col">
                            <div class="row txt-blue">Pipe</div>
                            <div class="row">Metal Pipe</div>
                        </div>
                        <div class="col">
                             <a href="#" onclick="decrement()">-</a>
                             <input href="#" class="border text-center p-0 w-25 mb-0" id=demoInput type=number value="1" min=1 max=1000000></input>
                             <a href="#" onclick="increment()">+</a> 
                            {{-- <button class="btn bg-black txt-white py-0" onclick="decrement()">-</button>
                            <input id=demoInput type=number min=0 max=1000000>
                            <button class="btn bg-black txt-white py-0" onclick="increment()">+</button> --}}
                        </div>
                        <div class="col">Rp1.500.000<span class="close">&#10005;</span></div>
                    </div>
                </div>
                <div class="back-to-shop"><a href="{{ route('spareparts') }}">&leftarrow;</a><span class="text-muted">Back to catalogue</span></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5 class="txt-white"><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row mb-3">
                    <div class="col fw-bold ps-0">SUBTOTAL</div>
                    <div class="col text-right">Rp4.500.000</div>
                </div>
                <div class="row mb-3">
                    <div class="col fw-bold ps-0">TAX (5%)</div>
                    <div class="col text-right">Rp225000</div>
                </div>
                <div class="row mb-3">
                    <div class="col fw-bold ps-0">SHIPPING</div>
                    <div class="col text-right">Rp150.000</div>
                </div>
                {{-- <form>
                    <p>SHIPPING</p> <select>
                        <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                    </select>
                    <p>GIVE CODE</p> <input id="code" placeholder="Enter your code">
                </form> --}}
                <hr>
                <div class="row mb-3">
                    <div class="col fw-bold ps-0">TOTAL PRICE</div>
                    <div class="col text-right">Rp4.500.000</div>
                </div> 
                <button type="button" class="btn rounded fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">CHECKOUT</button>
            </div>
        </div>
    </div>
</section>
@include('inc.orderRequestedModal')

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
