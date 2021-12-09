@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="tracking" class="bg-light">
  <div class="txt-black py-4 text-center text-center">
    <h1 class="fw-bold">{{$id}}</h1>  
    <p class="text-muted">{{$id}}'s' History</p>
  </div>
  <div class="wrapper 100vh py-5 w-100 d-flex align-items-center justofy-content-center">
    <div class="timeline">
      <ul>
          @foreach ($assets as $asset)
            <li>
              <div class="timeline-content">
                <img src="/assets/sparepart-dummy1.jpg" class="img-fluid mb-4 " alt="">
                <h3 class="date">{{$asset['UpdateDate']}}</h3>
                <h1>{{$asset['Name']}}</h1>
                <p>Owned By: <span class="txt-blue">{{$asset['Owner']}}</span></p>
                <p>Spare-part Id: <span class="txt-blue">{{$asset['Number']}}</span></p>
                <p>Spare-part Type: <span class="txt-blue">Metal Pipe</span></p>
                <p>Spare-part Model: <span class="txt-blue">Piper Pipe</span></p>
                <p>Quantity: <span class="txt-blue">{{$asset['Quantity']}} pcs</span></p>
                <p>Total Weight: <span class="txt-blue">{{$asset['Weight']}} kg</span></p>
              </div>
            </li>
          @endforeach 
      </ul>
    </div>
  </div>
</section>
@endsection

@section('js')

@endsection
