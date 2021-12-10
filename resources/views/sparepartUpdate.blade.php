@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="sparepartUpdates">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-4 p-5 rounded shadow">
            <div class="col-md-6 text-center">
                <img src="/assets/sparepart-dummy1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <!-- <h1 class="fw-bold">
                    spare1 - Testadd1
                </h1> -->
                <div class="row  align-items-center">
                    <div class="col-md-4">
                        <form>
                            <div class=" mb-4 shadow rounded">
                                <input type="text" id="number" name="number" class="form-control validate" />
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1 text-center">
                        <h1>-</h1>
                    </div>
                    <div class="col-md-4">
                        <form>
                            <div class=" mb-4 shadow rounded">
                                <input type="text" id="name" name="name" class="form-control validate" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="">
                    <form >
                        <div class=" text-center text-white p-0 btn btn-sm c-none ">
                            <select id="status" name="status" class="form-select">
                                <option value="available">Available</option>
                                <option value="unavailable">Not Available</option>
                            </select>
                          </div>
                    </form>
                </div>
                <hr>
                <div class="txt-blue fw-bold mb-3">
                    <form>
                        <input type="text" id="price" name="price" class="form-control validate" placeholder="Input Price"/>
                    </form>
                </div>
                <!-- <ul class="px-0 mb-3" style="list-style-type:none">
                    <li>Category: <span class="txt-blue gw-bold">Abcd</span></li>
                    <li>Weight: <span class="txt-blue gw-bold">0 kg</span></li>
                    <li>Update Date: <span class="txt-blue gw-bold">0</span></li>
                </ul> -->
                <div class="mb-4 d-md-flex">
                    <div>
                        <form>
                            <label for="category" class="form-label">Category</label>
                            <div class="mb-3  rounded">
                                <input type="text" id="category" name="category" class="form-control validate" />
                            </div>
                            <label for="weight" class="form-label">Weight</label>
                            <div class="mb-3  rounded">
                                <input type="number" id="weight" name="weight" class="form-control validate" />
                            </div>
                        </form>
                    </div>
                    <div class="ms-md-4">
                        <form>
                            <label for="updatedate" class="form-label">Update Date</label>
                            <div class="mb-3  rounded">
                                <input type="date" id="updatedate" name="updatedate" class="form-control validate" />
                            </div>
                            <label for="qty" class="form-label">Quantity</label>
                            <div class=" mb-3 rounded">
                                <input type="number" id="qty" name="qty" class="form-control validate" />
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="mb-4">
                    <input id=demoInput type=number min=0 max=1000000 placeholder="Quantity">
                    <button class="btn bg-black txt-white py-0" onclick="decrement()">-</button>
                    <button class="btn bg-black txt-white py-0" onclick="increment()">+</button>
                </div> -->
                <button class="btn bg-blue txt-white btn-md px-5 rounded-pill fw-bold" type="submit">Submit</button>
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