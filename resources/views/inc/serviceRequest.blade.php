  <!-- Modal -->
  <div class="modal fade p-5" id="serviceRequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-check.svg" alt="">
            <h5 class="modal-title fw-bold" id="staticBackdropLabel">Maintenance Requested</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos placeat iusto aliquid est alias doloribus aut molestiae fuga ipsam voluptatem! Ea vero ad velit eius omnis vitae officiis eligendi quia perspiciatis ratione? Iste quos aut soluta omnis dolor molestiae rerum dolorem vitae distinctio libero. Exercitationem veritatis quaerat nisi iure accusamus!
        </div>
        <div class="modal-footer justify-content-center">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button> --}}
          <button id="orderBtn" type="button" class="btn bg-blue text-white fw-bold px-5" onclick="window.location.href='{{route('home')}}'">Agree</button>
        </div>
      </div>
    </div>
  </div>