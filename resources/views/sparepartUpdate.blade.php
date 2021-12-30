@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="sparepartUpdates">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-4 p-5 rounded shadow">  
            <div class="col-md-6 text-center">
                <img src="{{getImagePath($asset['PictureUrl'])}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <form method="POST" action="{{route('storeUpdate', ['id' => $asset['ID']])}}" enctype="multipart/form-data">
                    @csrf
                    @if ($jwtOrgType != "airline")
                        <div>
                            <div class="row  align-items-center">
                                <div class="col-md-4">
                                    <label for="number" class="form-label">Number</label>
                                    <div class=" mb-4 shadow rounded">
                                        <input type="text" id="number" name="number" class="form-control validate" value="{{$asset['Number']}}"/>
                                    </div>
                                </div>
                                <div class="col-md-1 text-center">
                                    <h1>-</h1>
                                </div>
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Name</label>
                                    <div class=" mb-4 shadow rounded">
                                        <input type="text" id="name" name="name" class="form-control validate" value="{{$asset['Name']}}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class=" text-center text-white p-0 btn btn-sm c-none ">
                                    <select id="status" name="status" class="form-select">
                                        <option {{$asset['Status'] == "Available" ? "selected": ""}}value="Available">Available</option>
                                        <option {{$asset['Status'] == "Not Available" ? "selected": ""}} value="Not Available">Not Available</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4 d-md-flex">
                                <div>
                                    <label for="weight" class="form-label">Weight</label>
                                    <div class="mb-3  rounded">
                                        <input type="number" id="weight" name="weight" class="form-control validate" value="{{$asset['Weight']}}"/>
                                    </div>
                                </div>
                                <div class="ms-md-4">
                                    <label for="qty" class="form-label">Quantity</label>
                                    <div class=" mb-3 rounded">
                                        <input type="number" id="qty" name="qty" class="form-control validate" value="{{$asset['Quantity']}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div>
                            <div class="row  align-items-center">
                                <h1 class="fw-bold">
                                    {{$asset['Number']}} - {{$asset['Name']}}
                                </h1>
                            </div>
                            <div class="">
                                <div class=" text-center text-white p-0 btn btn-sm c-none ">
                                    <select id="status" name="status" class="form-select">
                                        <option {{$asset['Status'] == "Available" ? "selected": ""}}value="Available">Available</option>
                                        <option {{$asset['Status'] == "Not Available" ? "selected": ""}} value="Not Available">Not Available</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="mb-4 d-md-flex">
                                <div>
                                    <label for="flightLog" class="form-label">Flight Log</label>
                                    <div class="mb-3  rounded">
                                        <input type="text" id="flightLog" name="flightLog" class="form-control validate" value="{{$asset['FlightLog']}}"/>
                                    </div>
                                </div>
                                <div class="ms-md-4">
                                    <label for="nextOverhaul" class="form-label">Next Overhaul</label>
                                    <div class=" mb-3 rounded">
                                        <input type="date" id="nextOverhaul" name="nextOverhaul" class="form-control validate" value="{{$asset['NextOverhaul']}}"/>
                                    </div>
                                </div>
                                <div class="ms-md-4">
                                    <label for="totalHours" class="form-label">Total Hours Spend</label>
                                    <div class=" mb-3 rounded">
                                        <input type="number" id="totalHours" name="totalHours" class="form-control validate" value="{{$asset['TotalHoursSpend']}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" type="file" id="image" name="image" multiple />
                    </div>
                    <button class="btn bg-blue txt-white btn-md px-5 rounded-pill fw-bold" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
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

    function increment() {
       document.getElementById('demoInput').stepUp();
    }
    function decrement() {
       document.getElementById('demoInput').stepDown();
    }
 </script>
@endsection