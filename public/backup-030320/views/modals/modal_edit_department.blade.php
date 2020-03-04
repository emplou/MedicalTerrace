<!-- Modal -->
<div id="addDepartment" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Edit Doctor</b></h4>
</div>
      <div class="modal-body">


        <div class="row">
            <div class="col-2">
            Department Name
            </div>
            <div class="col-10">
            <input type="text" class="form-control" name="department_name" id="department_name" style="width:500px">
            </div>
        </div>
        <br>

    <input type="submit" value="Save Department">

    </div>
</div>

<!-- end of body -->
</div>
  </div>
</div>