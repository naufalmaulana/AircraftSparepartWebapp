<div id="create" class="row justify-content-start align-items-center g-2" style="display: none;">
    <h1 class="text-center mb-3">Add New Spare-part</h1>
    <div class="col-md-12">
        <form name="create-sparepar-form" id="create-sparepart-form" method="post" action="{{route('storeAsset')}}">
            @csrf
            <label for="name" class="form-label txt-blue">Spare-part Name</label>
            <div class=" mb-4 rounded">
              <input name="name" type="text" id="name" class="form-control validate" />
            </div>
            <label for="number" class="form-label txt-blue">Spare-part Number</label>
            <div class=" mb-4 rounded">
              <input name="number" type="text" id="number" class="form-control validate" />
            </div>
            {{-- <label for="types" class="form-label txt-blue">Spare-Part Type</label>
            <div class=" mb-3  rounded ">
              <select name="types" id="airport" class="form-select">
                  <option value="Hydraulic press">Hydraulic press</option>
                  <option value="Pipe">Pipe</option>
                  <option value="Wings">Wings</option>
              </select>
            </div>
            <label for="model" class="form-label txt-blue">Spare-part Model</label>
            <div class=" mb-3  rounded">
              <input type="text" id="model" class="form-control" />
            </div> --}}
            <label for="weight" class="form-label txt-blue">Weight</label>
            <div class=" mb-3  rounded">
              <input name="weight" type="number" id="weight" class="form-control" />
            </div>
            <label for="qty" class="form-label txt-blue">Quantity</label>
            <div class=" mb-3  rounded">
              <input name="qty" type="number" id="qty" class="form-control" />
            </div>
            <label for="description" class="form-label txt-blue">Description</label>
            <div class=" mb-3  rounded">
                <textarea class="form-control" id="description" style="height: 140px"></textarea>
            </div>
            <label for="formFileMultiple" class="form-label txt-blue">Upload Image</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple />
            <div class="text-center">
                <button type="submit" class="btn text-white text-center fw-bold py-2 px-5 rounded bg-blue my-5">Submit</button>
            </div>
        </form>
    </div>
</div>