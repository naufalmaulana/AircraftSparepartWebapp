    <!-- Modal -->
    <div class="modal fade p-5" id="rejectServiceOrderModal" tabindex="-1" aria-labelledby="rejectServiceOrderLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content px-5">
          <div class="py-4 text-end">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
          </div>
          <div class="modal-header d-block text-center">
              <img class="mb-3" src="/assets/circle-cross.svg" alt="" style="width: 150px;">
              <h5 class="modal-title fw-bold" id="rejectServiceOrderLabel">Reject Order</h5>
            <!-- {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}} -->
          </div>
          <div class="modal-body text-center">
             Are you sure that you want to reject this order?
          </div>
          <div class="modal-footer justify-content-center">
            <form id="rejectServiceOrderForm" method="POST">
              @csrf
              <input type="hidden" id="rejectSOStatus" name="verifySOStatus" class="orderStatus">
              <button type="submit" class="btn bg-blue text-white fw-bold px-5">Reject</button>
           </form>
          </div>
        </div>
      </div>
    </div>