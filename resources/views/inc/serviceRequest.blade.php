  <!-- Modal -->
  <div class="modal fade p-5" id="serviceRequest"  tabindex="-1" aria-labelledby="serviceRequestLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-check.svg" alt="">
            <h5 class="modal-title fw-bold" id="staticBackdropLabel">Maintenance Requested</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body text-center">
            Your maintenance has been requested!
        </div>
        <div class="modal-footer justify-content-center">
          <form id="serviceRequestForm" method="POST">
            @csrf
            <button type="submit" class="btn bg-blue text-white fw-bold px-5">Agree</button>
           </form>
        </div>
      </div>
    </div>
  </div>