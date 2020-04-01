<!-- Modal -->
<div id="edit_department_exam" class="modal fade" role="dialog" data-keyboard="true">
  <div class="modal-dialog modal-lg">
  <meta name="csrf-token" content="{{ csrf_token() }}">
				
<!-- Modal content-->
    <div class="modal-content">
    
<div class="modal-header" style="color: black; background-color: #7CD5FF">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Edit Doctor</b></h4>
</div>
      <div class="modal-body">

        <!-- Department area -->
        <br>
        <div class="row">
            <div class="col-2">
            診療科目<br>Medical subject
            </div>
            <div class="col-10">
                <select class="form- " name="department" style="width:200px">
                    <option>Medical one</option>
                    <option>Medical two</option>
                    <option>Medical three</option>
                    <option>Medical four</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            診療科目別キャッチ<br>Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="med_subj_subheading" style="width:500px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
            診療科目別キャッチ<br>Subheading
            </div>
            <div class="col-10">
                <input type="text" class="form-control" name="med_subj_text_subheading_hospital" style="width:500px">
                <input type="file" class="btn btn-info" name="department_image">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
            診療科目別 外来受付時間<br>Examination date
            </div>
            <div class="col-10">
                <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
                月 <input type="checkbox" name="tag_season[]">
                火 <input type="checkbox" name="tag_season[]">
                水 <input type="checkbox" name="tag_season[]">
                木 <input type="checkbox" name="tag_season[]">
                金 <input type="checkbox" name="tag_season[]">
                土 <input type="checkbox" name="tag_season[]">
                日 <input type="checkbox" name="tag_season[]">
                祝 <input type="checkbox" name="tag_season[]">
                <br>
                <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~ 
                月 <input type="checkbox" name="tag_season[]">
                火 <input type="checkbox" name="tag_season[]">
                水 <input type="checkbox" name="tag_season[]">
                木 <input type="checkbox" name="tag_season[]">
                金 <input type="checkbox" name="tag_season[]">
                土 <input type="checkbox" name="tag_season[]">
                日 <input type="checkbox" name="tag_season[]">
                祝 <input type="checkbox" name="tag_season[]">
                <br>
                <input type="text" class="form- " name="exam_comment" style="width:200px"> ※受診内容により日・時間が異なる場合に記載
                <br>
                <input type="text" name="from" data-toggle="timepicker" class="form- " style="width:100px"> ~ 
                <input type="text" name="to" data-toggle="timepicker" class="form- " style="width:100px"> 
                診療 <input type="text" name="start" data-toggle="timepicker" class="form-" style="width:100px"> ~
                月 <input type="checkbox" name="tag_season[]">
                火 <input type="checkbox" name="tag_season[]">
                水 <input type="checkbox" name="tag_season[]">
                木 <input type="checkbox" name="tag_season[]">
                金 <input type="checkbox" name="tag_season[]">
                土 <input type="checkbox" name="tag_season[]">
                日 <input type="checkbox" name="tag_season[]">
                祝 <input type="checkbox" name="tag_season[]">
            </div>
        </div>
        <!-- End of Department area -->
        <br>



    <input type="submit" value="Save hospital">

    </div>
</div>

<!-- end of body -->
</div>
  </div>
</div>