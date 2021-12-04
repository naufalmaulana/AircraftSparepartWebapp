<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-5 rounded">
        {{-- <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
        <div class="modal-body d-block justify-content-center text-center">
          {{-- <button class="btn bg-blue text-white fw-bold px-5 mb-3" onclick="window.location.href='#'">Order Details</button> --}}
          <button class="btn bg-blue text-white fw-bold px-5 mb-3" onclick="window.location.href='{{route('trackingOrder')}}'">Track Orders</button>
          <button class="btn bg-blue text-white fw-bold px-5 mb-3" onclick="window.location.href='#'">Get Invoice</button>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>