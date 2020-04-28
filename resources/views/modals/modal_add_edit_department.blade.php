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
      
      
        <br>


    <div id="addanother4">
    <!-- Medical Subject -->
    <div class="form-group">
        <label class="control-label cols-15">診療科目<br><span>Medical Subject</span></label>
        <div class="cols-4">
          <div id="edit_department"></div>
        </div>
    </div>

    <!-- Subheading 2-->
    <div class="form-group">
        <label class="control-label cols-15"> 医療機関キャッチ<br><span>Subheading</span></label>
        <div class="cols-6">          
            <!-- <textarea class="form-control sm2" name="ex_med_subj_subheading[]" rows="3" maxlength="200">この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は </textarea> -->
            <div id="departmentsubheading"></div>
        </div>
        <div class="cols-2">          
            <span id="rchars4">0</span>/46
        </div>
    </div>


    <!-- Text of Subheading 2-->
    <div class="form-group editor">
        <label class="control-label cols-15">本文<br><span>Text of Subheading</span></label>
        <div class="cols-6">   
            <!-- add new textarea here -->
            
            <div id="addanother1">
                <div class="cols-10">        
                    <textarea class="form-control" name="med_subj_text_subheading_hospital[0]" id="med_subj_text_subheading_hospital"></textarea>
                    <div id="departmentsubheading2"></div>
                </div>
            </div>
        </div>
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-55">
            <div class="upload-image blue">        
                <input type="file" name="dpt_subject_image" id="file-8" class="inputfile2">
                <label for="file-8"><span class="archive-name2"></span><span class="btn-inputfile"> </span></label>
            </div>
            <!-- <div class="upload-btn-wrapper">
                <button class="bton"></button>
                <input type="file" name="dpt_subject_image" />
            </div> -->
            
        </div>
    </div>

   
    <div class="form-group check fix">
        <div class="control-label cols-15">
        診療科目別<br>外来受付時間<br><span>Examination date</span>
        </div>
        <div class="cols-8">
            <input type="text" name="from[]" id="from" class="form- " style="width:100px"> ~ 
            <input type="text" name="to[]" id="to" class="form- " style="width:100px"> 
            診療 <input type="text" name="start[]"  id="start" class="form-" style="width:100px"> ~
            月 <input type="checkbox" id="tag_season1" name="weekdays[]" value="01"><label for="tag_season1"></label>
            火 <input type="checkbox" id="tag_season2" name="weekdays[]" value="02"><label for="tag_season2"></label>
            水 <input type="checkbox" id="tag_season3" name="weekdays[]" value="03"><label for="tag_season3"></label>
            木 <input type="checkbox" id="tag_season4" name="weekdays[]" value="04"><label for="tag_season4"></label>
            金 <input type="checkbox" id="tag_season5" name="weekdays[]" value="05"><label for="tag_season5"></label>
            土 <input type="checkbox" id="tag_season6" name="weekdays[]" value="06"><label for="tag_season6"></label>
            日 <input type="checkbox" id="tag_season7" name="weekdays[]" value="07"><label for="tag_season7"></label>
            祝 <input type="checkbox" id="tag_season8" name="weekdays[]" value="08"><label for="tag_season8"></label>
        </div>
        <div class="cols-8">
            <!-- <input type="text" name="from2[]" id="from2" class="form- " style="width:100px"> ~ 
            <input type="text" name="to2[]" id="to2" class="form- " style="width:100px"> 
            診療 <input type="text" name="start[]" class="form-" style="width:100px"> ~ 
            月 <input type="checkbox" id="tag_season9" name="weekdays[]" value="01"><label for="tag_season9"></label>
            火 <input type="checkbox" id="tag_season10" name="weekdays[]" value="02"><label for="tag_season10"></label>
            水 <input type="checkbox" id="tag_season11" name="weekdays[]" value="03"><label for="tag_season11"></label>
            木 <input type="checkbox" id="tag_season12" name="weekdays[]" value="04"><label for="tag_season12"></label>
            金 <input type="checkbox" id="tag_season13" name="weekdays[]" value="05"><label for="tag_season13"></label>
            土 <input type="checkbox" id="tag_season14" name="weekdays[]" value="06"><label for="tag_season14"></label>
            日 <input type="checkbox" id="tag_season15" name="weekdays[]" value="071"><label for="tag_season15"></label>
            祝 <input type="checkbox" id="tag_season16" name="weekdays[]" value="08"><label for="tag_season16"></label> -->
      </div>
  </div>
  <div class="form-group check fix">
            <div class="control-label cols-15"></div>
            <div class="cols-8">
        
                
            <div class="cols-6"><input type="text" class="form- " name="special_hours[]"> </div>
            <div class="cols-3">    
            ※受診内容により日・時間が異なる場合に記載
            </div>
                <input type="text" name="spfrom[]"class="form- " style="width:100px"> ~ 
                <input type="text" name="spto[]" class="form- " style="width:100px"> 
                診療 <input type="text" name="spstart[]" class="form-" style="width:100px"> ~
                月 <input type="checkbox" id="tag_season17" name="spweekdays[]" value="02"><label for="tag_season17"></label>
                火 <input type="checkbox" id="tag_season18" name="spweekdays[]" value="02"><label for="tag_season18"></label>
                水 <input type="checkbox" id="tag_season19" name="spweekdays[]" value="03"><label for="tag_season19"></label>
                木 <input type="checkbox" id="tag_season20" name="spweekdays[]" value="04"><label for="tag_season20"></label>
                金 <input type="checkbox" id="tag_season21" name="spweekdays[]" value="05"><label for="tag_season21"></label>
                土 <input type="checkbox" id="tag_season22" name="spweekdays[]" value="06"><label for="tag_season22"></label>
                日 <input type="checkbox" id="tag_season23" name="spweekdays[]" value="07"><label for="tag_season23"></label>
                祝 <input type="checkbox" id="tag_season24" name="spweekdays[]" value="08"><label for="tag_season24"></label>
        </div>
    </div>

     <!-- Buttons -->
    <div class="form-group">
        <div class="cols-15"></div>
        <div class="cols-75">
            <button type="button" class="btn-prime addto"></button>
            <button type="button" class="btn-prime add-duplicate"></button>
        </div>
        <div class="cols-1 relative">
            <button type="button" class="btn btn-success add-ck2"><span class="lnr lnr-plus-circle"></span></button>
        </div>
    </div>
    <div id="addnewdiv4"></div>

</div>

    <center><input type="submit" value="Save hospital" class="btn btn-danger"></center>
</div>
</div>
    </div>
</div>

  </div>
</div>

{!! Form::close() !!}