// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$('.overwrite_add_special').each(function(e){
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  // e.preventDefault();
  $(this).on('click', function(){
      var id = $(this).attr('sp-id');
      // alert(id);

      $.ajax({
          url: '/modal_edit_special/'+id,
          type: 'get',
          dataType: 'json',
          // data : { id : id },
          success: function(response){
              console.log(response['data']);
              if(response == "success")

                  console.log(response['data']); 

                  $("#copyAddspecial").modal('show');
                  $("#twospID").val(response['data'][0].id);
                  $("#twourl").val(response['data'][0].sp_url);
                  $("#twomagazine").val(response['data'][0].sp_mag);
                  $("#twosts").val(response['data'][0].sp_title_shldr);
                  $("#twost").val(response['data'][0].sp_title);
                  // doctor dropdown not included            
                  $("#twocmt").val(response['data'][0].sp_doc_cmt);  

                  // Illness Category
                  input_ill_two = '<select class="form-control" name="ill_cat"><option value="'+ response['data'][0].sp_ill_cat +'">'+ response['data'][0].sp_ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                  $("#input_ill_two").html(input_ill_two);

                  // special Category
                  input_cat_two = '<select class="form-control" name="sp_cat"><option value="'+ response['data'][0].sp_cat +'">'+ response['data'][0].sp_cat +'</option><option value="がん">がん</option><option value="生活習慣病">生活習慣病</option><option value="子どもの病気">子どもの病気</option><option value="女性の病気">女性の病気</option><option value="老年性の病気">老年性の病気</option><option value="アレルギー">アレルギー</option><option value="食中毒（食あたり）">食中毒（食あたり）</option><option value="春特有の病気">春特有の病気</option><option value="夏特有の病気">夏特有の病気</option><option value="秋特有の病気">秋特有の病気</option><option value="冬特有の病気">冬特有の病気</option><option value="内臓の病気">内臓の病気</option><option value="脳・神経の病気">脳・神経の病気</option><option value="免疫システム">免疫システム</option><option value="運動機能の病気">運動機能の病気</option><option value="こころの病気">こころの病気</option><option value="部位別の病気">部位別の病気</option><option value="怪我・応急処置">怪我・応急処置</option><option value="救急・救命・緊急">救急・救命・緊急</option><option value="スポーツ障害">スポーツ障害</option><option value="リハビリテーション">リハビリテーション</option><option value="歯と健康">歯と健康</option><option value="妊娠と出産">妊娠と出産</option><option value="美容と健康">美容と健康</option></select>';
                  $("#input_cat_two").html(input_cat_two);

                  // Doctor
                  var input_doc_two = "";
                  input_doc_two += '<select name="doctor" class="form-control"><option value="'+ response['data'][0].sp_doc +'">'+ response['data'][0].sp_doc +'</option>';
                  
                  $.each(response['doc'], function (i, b) {
                      console.log('doc '+ b.name)
                      input_doc_two += '<option value="'+ b.name +'">'+ b.name +'</option>';
  
                  });
                  input_doc_two += '</select>';
                  
                  $("#input_doc_two").html(input_doc_two);
                  
                  // Doctor Role
                  var role = response['data'][0].sp_doc_tsk;
                  if(role == "監修"){
                      input_rad_two = '<input type="radio" id="sprvsn" name="role" value="監修" checked><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                      $("#input_rad_two").html(input_rad_two);
                  }
                  if(role == "取材協力"){
                      input_rad_two = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力" checked><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                      $("#input_rad_two").html(input_rad_two);
                  }
                  if(role == "監修・取材協力"){
                      input_rad_two = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力" checked><label for="scc">監修・取材協力</label>';
                      $("#input_rad_two").html(input_rad_two);
                  }   

                  // SEO Title
                  var seo_title = response['data'][0].seo_title;
                  //var ill_title = response['data'][0].sp_ill_cat;
                  if(seo_title == response['data'][0].sp_ill_cat){
                      input_seo_title_two = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="1" checked><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                      $("#input_seo_title_two").html(input_seo_title_two);
                  } else{
                      input_seo_title_two = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="0"><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                      $("#input_seo_title_two").html(input_seo_title_two);
                  }

                  // SEO Keywords
                  var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                  var input_seo_two = "";
                  var input_kw_two = "";
                  var x = 0;
                  $.each(objJSON, function (i, v) {
                      var xplus=x+1;
                      input_seo_two += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" id="kword" value="'+v.kword+'"></div>';
                      input_kw_two += '<div class="cols-3"><input type="checkbox" id="tag_two'+xplus+'" name="tag[]" /><label for="tag"> '+v.kword+'</label></div>';
                  
                      x++;
                  });
                  $("#input_seo_two").html(input_seo_two);
                  $("#input_kw_two").html(input_kw_two);
              
                  //$("#twoimg").val(response['data'][0].sp_img);
                  $("#twoimg_cap").val(response['data'][0].sp_img_cap);
                  $("#twoimg_alt").val(response['data'][0].sp_img_alt);
                  //industry dropdown not included yet

                  $("#twoseo_txt").val(response['data'][0].sp_seo_txt);
                  $("#twometa_txt1").val(response['data'][0].sp_seo_desc);
                  $("#twometa_txt2").val(response['data'][0].sp_seo_desc2);

                  // Lead Ceditor
                  var objJSONlead = JSON.parse(response['data'][0].sp_txt);
                  var input_lead_two = "";
                  $.each(objJSONlead, function (i, v) {
                      input_lead_two += '<div class="cols-10"><textarea class="form-control" name="lead_ckeditor[]" id="lead_ckeditor_two">'+v.lead_ckeditor+'</textarea></div>';
                  });
                  $("#input_lead_two").html(input_lead_two);

                  /******** Illness Image ********/
                  var objJSONilg = JSON.parse(response['data'][0].sp_ill_img);
                  var input_ill_img_two = "";
                  $.each(objJSONilg, function (i, v) {
                      input_ill_img_two += '<div class="cols-2"><button type="button" class="btn-prime image"></button></div><div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>';
                  });
                  $("#input_ill_img_two").html(input_ill_img_two);
                  
                  // H1
                  $("#twoh1").val(response['data'][0].sp_h1);

                  // H2 Retrieval
                  var objJSONh2 = JSON.parse(response['data'][0].sp_h2);
                  var input_h2_two = "";
                  $.each(objJSONh2, function (i, v) {
                      input_h2_two += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                  });
                  $("#input_h2_two").html(input_h2_two);

                  // DEPARTMENT
                  var objJSONdpt = JSON.parse(response['data'][0].sp_tag_dep);
                  var input_dpt_two = "";
                  $.each(objJSONdpt, function (i, v) {
                      console.log(objJSONdpt);

                          input_dpt_two += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                          $.each(response['dpt'], function (i, b) {
                              console.log('dpt '+ b.dpt_name)
                              input_dpt_two += '<option value="'+ b.department_name +'">'+ b.department_name +'</option>';

                          });
                             
                          input_dpt_two += '</select></div>';
                        
                  }); //end of department json
                  $("#input_dpt_two").html(input_dpt_two);

                  // Tag Symptoms Retrieval
                  var objJSONsy = JSON.parse(response['data'][0].sp_tag_symp);
                  var input_sy_two = "";
                  $.each(objJSONsy, function (i, v) {
                      input_sy_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                  });
                  $("#input_sy_two").html(input_sy_two);

                  // Tag Season Text Retrieval
                  var objJSONtst = JSON.parse(response['data'][0].sp_ta_season_txt);
                  var input_tst_two = "";
                  $.each(objJSONtst, function (i, v) {
                      input_tst_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                  });
                  $("#input_tst_two").html(input_tst_two);

                  // Tag Free
                  var objJSONfree = JSON.parse(response['data'][0].sp_tag_free);
                  var input_free_two = "";
                  $.each(objJSONfree, function (i, v) {
                      input_free_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                  });
                  $("#input_free_two").html(input_free_two);

                  // Season
                  var objJSONts = JSON.parse(response['data'][0].sp_tag_season);
                  var z = 0;
                  $.each(objJSONts, function (i, v) {
                      var zplus=z+1;
                      if(v.tag_s == 1){
                          $("#tag_s_two"+zplus).attr( "checked", true );
                      }
                      z++;
                  });

                  //Tag Keywords
                  var objJSONitk = JSON.parse(response['data'][0].sp_tag_kw);
                  var y = 0;
                  $.each(objJSONitk, function (i, v) {
                      var yplus=y+1;
                      if(v.tag_ch == 1){
                          $("#tag_two"+yplus).attr( "checked", true );
                      }
                      y++;
                  });
            
          },
              error: function(response){
              alert('Error'+response);
 
          }

        });
      // location.reload();
  });
});