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
                    {{$asset['Number']}} - {{$asset['Name']}}
                </h1>
                <div class="bg-blue text-center text-white px-3 py-0 btn btn-sm c-none">
                    {{$asset['Status']}}
                </div>
                <hr>
                <ul class="px-0 mb-3" style="list-style-type:none">
                    <li>Quantity: <span class="txt-blue gw-bold">{{$asset['Quantity']}} pcs</span></li>
                    <li>Weight: <span class="txt-blue gw-bold">{{$asset['Weight']}} kg</span></li>
                    <li>Latest Update Date: <span class="txt-blue gw-bold">{{$asset['Timestamp']}}</span></li>
                </ul>
                <button class="btn bg-blue text-white btn-md px-5 rounded-pill fw-bold" onclick="window.location.href='{{route('history', ['id' => $id] )}}'">History</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script>

@endsection

