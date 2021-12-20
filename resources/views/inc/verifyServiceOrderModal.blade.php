  <!-- Modal -->
  <div class="modal fade p-5" id="verifyServiceOrderModal" tabindex="-1" aria-labelledby="verifyServiceOrderLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="py-4 text-end">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
        </div>
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-check.svg" alt="">
            <h5 class="modal-title fw-bold" id="verifyServiceOrderLabel">Verify Order</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body text-center">
            Are you sure that you want to verify this order?
        </div>
        <div class="modal-footer justify-content-center">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button> --}} 
          <form id="verifyServiceOrderForm" method="POST">
            @csrf
            <input type="hidden" id="verifySOStatus" name="verifySOStatus">
            <button type="submit" class="btn bg-blue text-white fw-bold px-5">Agree</button>
         </form>
        </div>
      </div>
    </div>
  </div>