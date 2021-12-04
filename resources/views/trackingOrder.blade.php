@extends('layouts.master')

@section('navbar')
    @include ('inc.navbar')
@endsection

@section('content')
<section id="trackingOrder" class="bg-light">
  <div class="txt-black py-4 text-center text-center">
    <h1 class="fw-bold">My Orders</h1>  
    <p class="text-muted">Order (OrderId)</p>
  </div>
  <div class="wrapper 100vh py-5 w-100 d-flex align-items-center justofy-content-center">

    <div class="timeline">
      <ul>
        <li>
          <div class="timeline-content">
            <img src="/assets/sparepart-dummy1.jpg" class="img-fluid mb-4 " alt="">
            <h3 class="date">20th may, 2010</h3>
            <h1>Heading 1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <img src="/assets/sparepart-dummy1.jpg" class="img-fluid mb-4 " alt="">
            <h3 class="date">20th may, 2010</h3>
            <h1>Heading 2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <img src="/assets/sparepart-dummy1.jpg" class="img-fluid mb-4 " alt="">
            <h3 class="date">20th may, 2010</h3>
            <h1>Heading 3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
          </div>
        </li>
        <li>
          <div class="timeline-content">
            <img src="/assets/sparepart-dummy1.jpg" class="img-fluid mb-4 " alt="">
            <h3 class="date">20th may, 2010</h3>
            <h1>Heading 4</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora ab laudantium voluptatibus aut eos placeat laborum, quibusdam exercitationem labore.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
    {{-- <div class="container py-5">
        <h1 class="fw-bold txt-black mb-5 text-center">
            My Orders
        </h1>
        <div class="row justify-content-center align-items-center w-100 d-flex py-5">
            <div class="col-md-12 bg-white shadow rounded p-3">
                <h3 class="txt-blue fw-bold">Order (Order ID)</h3>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Dates</th>
                        <th scope="col">Descriptions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>21/11/2021 12:51</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, veritatis?</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>22/11/2021 12:51</td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam fugiat est at, laudantium impedit veniam qui facilis libero harum laborum.</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>23/11/2021 12:51</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus autem modi illum eos! Dolor dicta porro possimus, ex provident quisquam optio omnis, natus recusandae iste aspernatur, aut architecto numquam? Quidem.</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
        </div>
    </div> --}}
</section>
@endsection

@section('js')

@endsection
