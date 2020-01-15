@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#edithospital">Edit Hospital Details</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatedpt">Update Department</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatemedsubj">Update Medical Subject</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#access">Update Access</button>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#accessdet">Edit Access Details</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#specialhours">Update Special Hours</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#updatemedsubj">Update Medical Subject</button>
    </div>
    <div class="col-sm-4">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#access">Update Access</button>
    </div>
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

  <!-- Medical Subject Modal -->
<div class="modal fade" id="updatemedsubj" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Medical Subject Details</h4>
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

  <!-- Access Modal -->
<div class="modal fade" id="access" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Access</h4>
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

  <!-- Access Details Modal -->
<div class="modal fade" id="accessdet" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Access Details</h4>
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

  <!-- Department Special Examination Modal -->
<div class="modal fade" id="specialhours" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Special Hours Details</h4>
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