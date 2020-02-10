$('.overwrite_illness').each(function(e){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // e.preventDefault();
    $(this).on('click', function(){
        var id = $(this).attr('il-id');
        // alert(id);

        $.ajax({
            url: '/modal_edit_illness/'+id,
            type: 'get',
            dataType: 'json',
            // data : { id : id },
            success: function(response){
                console.log(response['data']);
            
                if(response == "success")
                
                    console.log(response['data']); 
                    
                    $("#editillness").modal('show');
                    $("#illID").val(response['data'][0].id);
                    $("#url").val(response['data'][0].ill_url); 

                    // Illness Category
                    input_ill = '<select class="form-control" name="ill_cat"><option value="'+ response['data'][0].ill_cat +'">'+ response['data'][0].ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                    $("#input_ill").html(input_ill);

                    $("#ill_shldr").val(response['data'][0].ill_shoulder); // Illness Shoulder

                    $("#ill").val(response['data'][0].ill_name); // Illness

                    $("#ill_ph").val(response['data'][0].ill_ph); //Illness Phonetics
                        
                    // Doctor
                    var input_doc = "";
                    input_doc += '<select name="doctor" class="form-control"><option value="'+ response['data'][0].ill_doc +'">'+ response['data'][0].ill_doc +'</option>';
                    
                    $.each(response['doc'], function (i, b) {
                        console.log('doc '+ b.name)
                        input_doc += '<option value="'+ b.name +'">'+ b.name +'</option>';
    
                    });
                    input_doc_two += '</select>'; 
                    $("#input_doc").html(input_doc);  

                    // Doctor Role
                    var role = response['data'][0].ill_doc_role;
                    if(role == "監修"){
                        input_rad = '<input type="radio" id="sprvsn" name="role" value="監修" checked><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                        $("#input_rad").html(input_rad);
                    }
                    if(role == "取材協力"){
                        input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力" checked><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力"><label for="scc">監修・取材協力</label>';
                        $("#input_rad").html(input_rad);
                    }
                    if(role == "監修・取材協力"){
                        input_rad = '<input type="radio" id="sprvsn" name="role" value="監修"><label for="sprvsn">監修</label><input type="radio" id="cc" name="role" value="取材協力"><label for="cc">取材協力</label><input type="radio" id="scc" name="role" value="監修・取材協力" checked><label for="scc">監修・取材協力</label>';
                        $("#input_rad").html(input_rad);
                    }   

                    $("#cmt").val(response['data'][0].ill_doc_cmt);  // Doctor's Comment 

                    // Summarize
                    var objJSON = JSON.parse(response['data'][0].ill_summary);
                    var inputs = "";
                    $.each(objJSON, function (i, v) {
                        inputs += '<textarea class="form-control sm" name="sm[]" rows="3" id="sm" maxlength="200">'+v.sm+'</textarea><br>';
                    });
                    $("#input_sum").html(inputs);

                    // image
                    $("#img_cap").val(response['data'][0].ill_img_cap); // image caption
                    $("#img_alt").val(response['data'][0].ill_img_alt); // image alt

                    // Search Keywords
                    var objJSON = JSON.parse(response['data'][0].ill_kwords);
                    var input_kwords = "";
                    $.each(objJSON, function (i, v) {
                        input_kwords += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" value="'+v.kword+'"></div>';
                    });
                    $("#input_kwords").html(input_kwords);

                    // SEO Title
                    var seo_title = response['data'][0].ill_seo;
                    var illness_name = response['data'][0].ill_name;
                    if(seo_title == "1"){
                        $("#tts").attr( "checked", true );
                    }
                    $("#input_seo_title").html(illness_name);
                    

                    $("#seo_txt").val(response['data'][0].ill_seo_txt); // seo text
                    $("#meta_txt1").val(response['data'][0].ill_meta_a);
                    $("#meta_txt2").val(response['data'][0].ill_meta_b);

                    // Illness h1
                    input_h1 = ''+ response['data'][0].ill_shoulder +'<input type="hidden" name="h1" value="'+ response['data'][0].ill_name +'">';
                    $("#input_h1").html(input_h1);
                    
                    // H2 Retrieval
                    var objJSON = JSON.parse(response['data'][0].ill_h2);
                    var input_h2 = "";
                    $.each(objJSON, function (i, v) {
                        input_h2 += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                    });
                    $("#input_h2").html(input_h2);

                    // Search Keywords
                    var objJSONkw = JSON.parse(response['data'][0].ill_kwords);
                    var input_kwords_two = "";
                    var input_kw_two = "";
                    var x = 0;
                    $.each(objJSONkw, function (i, v) {
                        var xplus=x+1;
                        
                        input_kwords_two += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" value="'+v.kword+'"></div>';

                        input_kw_two += '<div class="cols-3"><input type="checkbox" id="tag'+xplus+'" name="tag[]" /><label for="tag">'+v.kword+'</label></div>';
                    
                        x++; 
                    });
                    $("#input_kwords").html(input_kwords_two);
                    $("#input_kw").html(input_kw_two);

                    // Tag Department Retrieval
                    var objJSONdpt = JSON.parse(response['data'][0].ill_tag_dep);
                    var input_dpt = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                            input_dpt += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.department_name)
                                input_dpt += '<option value="'+ b.department_name +'">'+ b.department_name +'</option>';

                            });
                               
                            input_dpt += '</select></div>';
                          
                    }); //end of department json
                    $("#input_dpt").html(input_dpt);

                    // Tag Symptoms Retrieval
                    var objJSONsy = JSON.parse(response['data'][0].ill_tag_symp);
                    var input_sy = "";
                    $.each(objJSONsy, function (i, v) {
                        input_sy += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                    });
                    $("#input_sy").html(input_sy);

                    // Tag Season Text Retrieval
                    var objJSONconf = JSON.parse(response['data'][0].ill_tag_season_txt);
                    var input_tst = "";
                    $.each(objJSONconf, function (i, v) {
                        input_tst += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                    });
                    $("#input_tst").html(input_tst);

                    // Tag Free
                    var objJSONconf = JSON.parse(response['data'][0].ill_tag_free);
                    var input_free = "";
                    $.each(objJSONconf, function (i, v) {
                        input_free += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                    });
                    $("#input_free").html(input_free);

                    //Tag Keywords
                    var objJSONitk = JSON.parse(response['data'][0].ill_tag_kw);
                    var y = 0;
                    $.each(objJSONitk, function (i, v) {
                        var yplus=y+1;
                        if(v.tag == 1){
                            $("#tag"+yplus).attr( "checked", true );
                        }
                        y++;
                    });

                    // Season
                    var objJSONts = JSON.parse(response['data'][0].ill_tag_season);
                    var z = 0;
                    $.each(objJSONts, function (i, v) {
                        var zplus=z+1;
                        if(v.tag_s == 1){
                            $("#taga"+zplus).attr( "checked", true );
                        }
                        z++;
                    });

                },
                error: function(response){
                alert('Error'+response);
   
            }

        });
        // location.reload();
    });
});

var min = 1990,
    max = 2021,
    select = document.getElementById('b_year');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

select.value = new Date().getFullYear();

var select = document.getElementById('length');    

for (var i = 1; i<= 31; i++){

    var option = document.createElement('option');
    option.value = i;
    option.innerHTML = i;
    select.options.add(option);
}

//academic
var min = 1990,
    max = 2021,
    select = document.getElementById('aca_year');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

var min = 1990,
    max = 2021,
    select = document.getElementById('aca_year_to');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

//work exp 
var min = 1990,
    max = 2021,
    select = document.getElementById('work_year');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

var min = 1990,
    max = 2021,
    select = document.getElementById('work_year_to');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

//awards 
var min = 1990,
    max = 2021,
    select = document.getElementById('awards_year');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

var min = 1990,
    max = 2021,
    select = document.getElementById('awards_year_to');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}

function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(200 - len);
        }
      };
      
      $('.add3').on('click', add3);
      var i=0;
      function add3(e) {
        e.preventDefault();
      //   alert('yes!');
      var options='';
          for(i=1990; i <= 2020; i++){
              options+='<option value="'+i+'">'+i+'</option>';
          }
        $('#c_ac').append('<div class="form-group"><div class="control-label cols-15"><span></span></div><div class="cols-12"><select id="aca_year" name="c_ac_year[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_ac_month[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_ac_desc[]" class="form- " ></div></div><div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="aca_year_to" name="c_ac_year_to[]" class="form- " ><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_ac_month_to[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " ></div>');
      }
  
      $('.add4').on('click', add4);
      var i=0;
      function add4(e) {
        e.preventDefault();
      //   alert('yes!');
      var options='';
          for(i=1990; i <= 2020; i++){
              options+='<option value="'+i+'">'+i+'</option>';
          }
        $('#c_we').append(' <div class="form-group"><div class="control-label cols-15"><span></span></div><div class="cols-12"><select id="work_year" name="c_we_year[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_we_month[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_we_desc[]" class="form- " ></div></div><div class="field_wrap4"></div><div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="work_year_to" name="c_we_year_to[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_we_month_to[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_we_desc_to[]" class="form- " ></div>');
      }



      $('.add_dpt_doc').on('click', add4);
      var i=0;
      function add4(e) {
      //   e.preventDefault();
  
      $.ajax({
          url: '/get_all_department/',
          type: 'get',
          dataType: 'json',
          // data : { id : id },
          success: function(response){
              console.log(response['data']);
          if(response == "success")
  
              /* ********** DEPARTMENT ************ */
              var objJSONdpt = JSON.parse(response['data'][0].department);
              var input_dpt = "";
              var input_dpt_list = "";
              $.each(objJSONdpt, function (i, v) {
                  console.log(objJSONdpt);
                      input_dpt += 'select class="form- " name="department[]"><option value="'+ v.med_sbj_list +'">'+ v.med_sbj_list +'</option>';
  
                      $.each(response['dpt'], function (i, b) {
                          console.log('dpt '+ b.dpt_name)
                          input_dpt += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';
  
                      });
                          // if(resp == "success")
                          // console.log('department '+resp['data'][0].dpt_name);
                      
                      input_dpt += '</select>';
                      
                  
  
              });
  
          $('#c_aw').append(input_dpt);
  
          },
          error: function(response){
          alert('Error'+response);
  
      }
  
      });
  
      }