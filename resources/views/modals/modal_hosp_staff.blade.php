<!-- Modal -->
<div id="edit_staff" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Edit Doctor</b></h4>
</div>
      <div class="modal-body">

        <br>
        <!-- Staff Area -->
        
        <br>
        <div class="row">
            <div class="col-2">
            スタッフコメント<br>Staff comment
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="staff_comment_hospital" style="width:500px">
                <input type="file" class="btn btn-danger" name="staff_image">
            </div>
        </div>
        <!-- End of staff area -->
        <br>



    <input type="submit" value="Save Staff">

    </div>
</div>

<!-- end of body -->
</div>
  </div>
</div>