  <!-- Modal -->
  <div class="modal fade p-5" id="serviceRequest"  tabindex="-1" aria-labelledby="serviceRequestLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="py-4 text-end">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
        </div>
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-tools.svg" alt="">
            <h5 class="modal-title fw-bold" id="staticBackdropLabel">Request Maintenance</h5>
          <!-- {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}} -->
        </div>
        <form id="serviceRequestForm" action="POST">
          <div class="modal-body ">
            <label for="company" class="form-label">Select Company</label>
            <div class=" mb-3 rounded ">
              <select id="company" name="company" class="form-select">
                <option value="mro1">MRO 1</option>
                <option value="mro2">MRO 2</option>
              </select>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
              <button type="submit" class="btn bg-blue text-white fw-bold px-5">Request</button>
          </div>
        </form>
      </div>
    </div>
  </div>