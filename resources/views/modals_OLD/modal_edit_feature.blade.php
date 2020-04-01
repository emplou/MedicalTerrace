<!-- Modal -->
<div id="edit_feature" class="modal fade" role="dialog" data-keyboard="true">
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
        <!-- Feature area -->
        <div class="row">
            <div class="col-2">
            特徴タイトル<br>Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="feature_title" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            特徴本文<br>Text of Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="feature_text_subheading_hospital" style="width:500px">
                <input type="file" class="btn btn-warning" name="feature_image">
            </div>
        </div>
        <!-- End of Feature Area -->
        



    <input type="submit" value="Save hospital">

    </div>
</div>

<!-- end of body -->
</div>
  </div>
</div>