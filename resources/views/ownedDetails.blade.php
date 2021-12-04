@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="ownedDetails" class="py-5 vh-100">
    <div class="container py-3">
        <div class="row justify-content-center  g-5 p-5 rounded shadow">
            <div class="col-md-6 text-center">
                <img src="/assets/sparepart-dummy1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <h1 class="fw-bold">
                    Piper Pipes
                </h1>
                <div class="text-muted">
                    11/06/2000
                </div>
                <hr>
                <div class="mb-4">
                    <div class="row justify-content-center g-4">
                        <div class="col-md-6">
                            <p>Owned By: <span class="txt-blue">airlines@email.com</span></p>
                            <p>Spare-part Id: <span class="txt-blue">MP1233210987654</span></p>
                            <p>Spare-part Type: <span class="txt-blue">Metal Pipe</span></p>
                            <p>Spare-part Model: <span class="txt-blue">Piper Pipe</span></p>
                            <p>Quantity: <span class="txt-blue">3 pcs</span></p>
                            <p>Total Weight: <span class="txt-blue">90kg</span></p>
                        </div>
                        <div class="col-md-6">
                            <p>Description: <span class="txt-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis explicabo earum accusamus minima impedit animi minus magni ea suscipit nesciunt. Totam unde, dolor dicta delectus velit voluptas suscipit modi repellendus?</span></p>
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-md px-5 bg-blue txt-white fw-bold rounded-pill" onclick="window.location.href='{{route('tracking')}}'">Track History</button>
            </div>
        </div>
    </div>
</section>
@endsection
