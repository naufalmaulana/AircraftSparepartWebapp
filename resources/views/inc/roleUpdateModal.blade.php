 <!-- Modal -->
 <div class="modal fade p-5" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content px-5">
        <div class="modal-header d-block text-center">
            <img class="mb-3" src="/assets/circle-check.svg" alt="">
            <h5 class="modal-title fw-bold" id="staticBackdropLabel">Role Updated</h5>
        </div>
        <div class="modal-body text-center">
            Are you sure you want this user's role?
        </div>
        <div class="modal-footer justify-content-center">
          <form id="roleForm" method="POST">
            @csrf
            <input type="hidden" id="roleInput" name="roleInput">
            <button type="submit" class="btn bg-blue text-white fw-bold px-5">Agree</button>
         </form>
        </div>
      </div>
    </div>
  </div>