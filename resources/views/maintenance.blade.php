@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
  <section id="maintenance">
    <div class="container py-5">
      <h1 class="fw-bold txt-black mb-5">
        Maintenance Levels
      </h1>
      <div class="row justify-content-center align-content-center g-4">
        <div class="col-md-3">
          <div class="card">
            <img src="/assets/circle-a-icon.svg" class="card-img-top img-fluid w-50 m-auto" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center fw-bold">A Checks</h2>
              <p class="card-text">The A check is performed approximately every 400-600 flight hours, or every 200–300 flights, depending on aircraft type. A check maintenance is typically done at a hangar and can take a minimum of 10 working hours depending on the services needed. Sometimes, this maintenance is done overnight as to not interrupt the schedule that airlines keep. The frequency of this check varies by aircraft type, the flight cycle count, or the number of hours flown since the last check.</p>
              <div class="text-center">
                <a href="#" class="btn bg-blue text-white fw-bold btn-md px-4 rounded">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="/assets/circle-b-icon.svg" class="card-img-top img-fluid w-50 m-auto" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center fw-bold">B Checks</h2>
              <p class="card-text">B checks are often completed as airlines and operators have phased out B checks. For airlines and operators to efficiently maintain, repair, and overhaul an aircraft, some B check tasks have been absorbed into A check phases. This helps by reducing aircraft downtime, reducing time maintenance technicians work on the aircraft, improving maintenance scheduling, and implementing better usage of resources such as hangars and test equipment.</p>
              <div class="text-center">
                <a href="#" class="btn bg-blue text-white fw-bold btn-md px-4 rounded">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="/assets/circle-c-icon.svg" class="card-img-top img-fluid w-50 m-auto" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center fw-bold">C Checks</h2>
              <p class="card-text">C and D checks typically fall under “heavy maintenance,” and are much more extensive than the B check. The C check requires an aviation maintenance technician to perform a deep inspection of a majority of the aircraft’s parts.  Also, the C maintenance check can often take the aircraft out of service for 1–2 weeks.his type of check often requires an aircraft to stay at a maintenance facility for the space/tools/maintenance technician working hours/materials.</p>
              <div class="text-center">
                <a href="#" class="btn bg-blue text-white fw-bold btn-md px-4 rounded">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <img src="/assets/circle-d-icon.svg" class="card-img-top img-fluid w-50 m-auto" alt="...">
            <div class="card-body">
              <h2 class="card-title text-center fw-bold">D Checks</h2>
              <p class="card-text">Lastly, the so-called “heavy maintenance visit” occurs every 6-10 years depending on the aircraft. D checks are comprehensive inspections and repairs of the entire aircraft and can mean taking apart the aircraft to inspect for damage and corrosion. The process can take upwards of 30,000 to 50,000 labor hours over a period of four to six weeks.There comes a certain point where airlines realize that the cost of repair is more than the actual cost of the aircraft. </p>
              <div class="text-center">
                <a href="#" class="btn bg-blue text-white fw-bold btn-md px-4 rounded">Add To Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')

@endsection