  <!-- Modal -->
  <div class="modal fade p-5" id="airlineBuyModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="airlineBuyLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-check.svg" alt="">
            <h5 class="modal-title fw-bold" id="airlineBuyLabel">Buy Spare Part</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <form id="airlineBuyForm" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="capacityInput" class="form-label">Input Amount: </label>
                    <input type="number" class="form-control" id="capacityInput" aria-describedby="capacityHelp" name="quantity">
                    <div id="capacityHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <input type="hidden" name="name" id="nameInput">
                <input type="hidden" name="number" id="numberInput">
                <input type="hidden" name="weight" id="weightInput">
                <input type="hidden" name="updateBy" id="updateByInput">
                <button type="submit" class="btn bg-blue text-white fw-bold px-5">Agree</button>
            
            </div>
        </form>
      </div>
    </div>
  </div>