<!-- Modal -->
<div id="update_department" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog edit">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
    <h4 class="modal-title"><b>Add and edit department</b></h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
      <div class="modal-body">
      <div id="edit_department"></div>
      <div id="departmentsubheading"></div>
        <br>
    <center><input type="submit" value="Save hospital" class="btn btn-danger"></center>
</div>
</div>
    </div>
</div>

  </div>
</div>

{!! Form::close() !!}