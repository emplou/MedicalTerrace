@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edithospital">Edit Hospital Details</button>
    </div>
  <div class="col-sm-4"><button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatedpt">Update Department</button></div>
</div>

<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>
<a href="#"><img scr="edit_department_image.png"> </a>


<!-- Hospital Modal -->
<div class="modal fade" id="edithospital" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hospital Details</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Department Modal -->
<div class="modal fade" id="updatedpt" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Department Details</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

@endsection