
@extends('welcome')
@section('content')
<!-- Button trigger modal -->
<center>
    <button type="button" class="btn btn-outline-danger fw-bold fs-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add record
    </button>
      
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Add your product</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="mb-2">
                    <input type="text" placeholder="Enter your product name" name="p_name" id="" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="text" placeholder="Enter your product price" class="form-control" name="p_price" id="">
                </div>
                <div class="mb-2">
                    <input type="file" name="p_image" id="" class="form-control">
                </div>
                <button type="submit" class="btn btn-danger">Add product</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
</center>
@endsection  