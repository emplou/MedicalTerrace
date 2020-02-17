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

$('.overwrite_hospital').each(function(e){
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

                    $("#editspecial").modal('show');
                    $("#spID").val(response['data'][0].id);
                    $("#url").val(response['data'][0].sp_url);
                    $("#magazine").val(response['data'][0].sp_mag);
                    $("#sts").val(response['data'][0].sp_title_shldr);
                    $("#st").val(response['data'][0].sp_title);
                    // doctor dropdown not included            
                    $("#cmt").val(response['data'][0].sp_doc_cmt);  

                    // Illness Category
                    input_ill = '<select class="form-control" name="ill_cat"><option value="'+ response['data'][0].sp_ill_cat +'">'+ response['data'][0].sp_ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                    $("#input_ill").html(input_ill);

                    // special Category
                    input_cat = '<select class="form-control" name="sp_cat"><option value="'+ response['data'][0].sp_cat +'">'+ response['data'][0].sp_cat +'</option><option value="がん">がん</option><option value="生活習慣病">生活習慣病</option><option value="子どもの病気">子どもの病気</option><option value="女性の病気">女性の病気</option><option value="老年性の病気">老年性の病気</option><option value="アレルギー">アレルギー</option><option value="食中毒（食あたり）">食中毒（食あたり）</option><option value="春特有の病気">春特有の病気</option><option value="夏特有の病気">夏特有の病気</option><option value="秋特有の病気">秋特有の病気</option><option value="冬特有の病気">冬特有の病気</option><option value="内臓の病気">内臓の病気</option><option value="脳・神経の病気">脳・神経の病気</option><option value="免疫システム">免疫システム</option><option value="運動機能の病気">運動機能の病気</option><option value="こころの病気">こころの病気</option><option value="部位別の病気">部位別の病気</option><option value="怪我・応急処置">怪我・応急処置</option><option value="救急・救命・緊急">救急・救命・緊急</option><option value="スポーツ障害">スポーツ障害</option><option value="リハビリテーション">リハビリテーション</option><option value="歯と健康">歯と健康</option><option value="妊娠と出産">妊娠と出産</option><option value="美容と健康">美容と健康</option></select>';
                    $("#input_cat").html(input_cat);

                    // Doctor Role
                    var role = response['data'][0].sp_doc_tsk;
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

                    // SEO Title
                    var seo_title = response['data'][0].seo_title;
                    if(seo_title == response['data'][0].sp_ill_cat){
                        input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="'+ response['data'][0].sp_ill_cat +'" checked><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                        $("#input_seo_title").html(input_seo_title);
                    } else{
                        input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value=""><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                        $("#input_seo_title").html(input_seo_title);
                    }

                    // SEO Keywords
                    var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                    var input_seo = "";
                    var input_kw = "";
                    var x = 0;
                    $.each(objJSON, function (i, v) {
                        var xplus=x+1;
                        input_seo += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" id="kword" value="'+v.kword+'"></div>';
                        input_kw += '<div class="cols-3"><input type="checkbox" id="tag'+xplus+'" name="tag[]" /><label for="tag"> '+v.kword+'</label></div>';
                    
                        x++;
                    });
                    $("#input_seo").html(input_seo);
                    $("#input_kw").html(input_kw);
                
                    $("#img").val(response['data'][0].sp_img);
                    $("#img_cap").val(response['data'][0].sp_img_cap);
                    $("#img_alt").val(response['data'][0].sp_img_alt);
                    //industry dropdown not included yet

                    $("#seo_txt").val(response['data'][0].sp_seo_txt);
                    $("#meta_txt1").val(response['data'][0].sp_seo_desc);
                    $("#meta_txt2").val(response['data'][0].sp_seo_desc2);

                    // Lead Ceditor
                    var objJSON = JSON.parse(response['data'][0].sp_txt);
                    var input_lead = "";
                    $.each(objJSON, function (i, v) {
                        input_lead += '<div class="cols-10"><textarea class="form-control" name="lead_ckeditor[]" id="lead_ckeditor">'+v.lead_ckeditor+'</textarea></div>';
                    });
                    $("#input_lead").html(input_lead);

                    /******** Illness Image ********/
                    var objJSON = JSON.parse(response['data'][0].sp_ill_img);
                    var input_ill_img = "";
                    $.each(objJSON, function (i, v) {
                        input_ill_img += '<div class="cols-2"><button type="button" class="btn-prime image"></button></div><div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>';
                    });
                    $("#input_ill_img").html(input_ill_img);
                    
                    // H1
                    $("#h1").val(response['data'][0].sp_h1);
                    // H2 Retrieval
                    var objJSON = JSON.parse(response['data'][0].sp_h2);
                    var inputs = "";
                    $.each(objJSON, function (i, v) {
                        inputs += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                    });
                    $("#input_h2").html(inputs);

                    // DEPARTMENT
                    var objJSONdpt = JSON.parse(response['data'][0].sp_tag_dep);
                    var input_dpt = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                            input_dpt += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.dpt_name)
                                input_dpt += '<option value="'+ b.department_name +'">'+ b.department_name +'</option>';

                            });
                               
                            input_dpt += '</select></div>';
                          
                    }); //end of department json
                    $("#input_dpt").html(input_dpt);

                    // Tag Symptoms Retrieval
                    var objJSONconf = JSON.parse(response['data'][0].sp_tag_symp);
                    var input_sy = "";
                    $.each(objJSONconf, function (i, v) {
                        input_sy += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                    });
                    $("#input_sy").html(input_sy);

                    // Tag Season Text Retrieval
                    var objJSONconf = JSON.parse(response['data'][0].sp_ta_season_txt);
                    var input_tst = "";
                    $.each(objJSONconf, function (i, v) {
                        input_tst += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                    });
                    $("#input_tst").html(input_tst);

                    // Tag Free
                    var objJSONconf = JSON.parse(response['data'][0].sp_tag_free);
                    var input_free = "";
                    $.each(objJSONconf, function (i, v) {
                        input_free += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                    });
                    $("#input_free").html(input_free);
                    
                    // Season
                    var objJSONts = JSON.parse(response['data'][0].sp_tag_season);
                    var z = 0;
                    $.each(objJSONts, function (i, v) {
                        var zplus=z+1;
                        if(v.tag_s == 1){
                            $("#tag_s"+zplus).attr( "checked", true );
                        }
                        z++;
                    });

                    //Tag Keywords
                    var objJSONitk = JSON.parse(response['data'][0].sp_tag_kw);
                    var y = 0;
                    $.each(objJSONitk, function (i, v) {
                        var yplus=y+1;
                        if(v.tag_ch == 1){
                            $("#tag"+yplus).attr( "checked", true );
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


//illness overwrite
$('.overwrite_special').each(function(e){
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

                    $("#editspecial").modal('show');
                    $("#spID").val(response['data'][0].id);
                    $("#url").val(response['data'][0].sp_url);
                    $("#magazine").val(response['data'][0].sp_mag);
                    $("#sts").val(response['data'][0].sp_title_shldr);
                    $("#st").val(response['data'][0].sp_title);
                    // doctor dropdown not included            
                    $("#cmt").val(response['data'][0].sp_doc_cmt);  

                    // Illness Category
                    input_ill = '<select class="form-control" name="ill_cat"><option value="'+ response['data'][0].sp_ill_cat +'">'+ response['data'][0].sp_ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                    $("#input_ill").html(input_ill);

                    // special Category
                    input_cat = '<select class="form-control" name="sp_cat"><option value="'+ response['data'][0].sp_cat +'">'+ response['data'][0].sp_cat +'</option><option value="がん">がん</option><option value="生活習慣病">生活習慣病</option><option value="子どもの病気">子どもの病気</option><option value="女性の病気">女性の病気</option><option value="老年性の病気">老年性の病気</option><option value="アレルギー">アレルギー</option><option value="食中毒（食あたり）">食中毒（食あたり）</option><option value="春特有の病気">春特有の病気</option><option value="夏特有の病気">夏特有の病気</option><option value="秋特有の病気">秋特有の病気</option><option value="冬特有の病気">冬特有の病気</option><option value="内臓の病気">内臓の病気</option><option value="脳・神経の病気">脳・神経の病気</option><option value="免疫システム">免疫システム</option><option value="運動機能の病気">運動機能の病気</option><option value="こころの病気">こころの病気</option><option value="部位別の病気">部位別の病気</option><option value="怪我・応急処置">怪我・応急処置</option><option value="救急・救命・緊急">救急・救命・緊急</option><option value="スポーツ障害">スポーツ障害</option><option value="リハビリテーション">リハビリテーション</option><option value="歯と健康">歯と健康</option><option value="妊娠と出産">妊娠と出産</option><option value="美容と健康">美容と健康</option></select>';
                    $("#input_cat").html(input_cat);

                    // Doctor Role
                    var role = response['data'][0].sp_doc_tsk;
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

                    // SEO Title
                    var seo_title = response['data'][0].seo_title;
                    if(seo_title == response['data'][0].sp_ill_cat){
                        input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value="'+ response['data'][0].sp_ill_cat +'" checked><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                        $("#input_seo_title").html(input_seo_title);
                    } else{
                        input_seo_title = '<input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" name="seo" value=""><label for="styled-checkbox-1" style="color: #F00;font-weight:500;">"'+ response['data'][0].sp_ill_cat +'"</label>';
                        $("#input_seo_title").html(input_seo_title);
                    }

                    // SEO Keywords
                    var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                    var input_seo = "";
                    var input_kw = "";
                    var x = 0;
                    $.each(objJSON, function (i, v) {
                        var xplus=x+1;
                        input_seo += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" id="kword" value="'+v.kword+'"></div>';
                        input_kw += '<div class="cols-3"><input type="checkbox" id="tag'+xplus+'" name="tag[]" /><label for="tag"> '+v.kword+'</label></div>';
                    
                        x++;
                    });
                    $("#input_seo").html(input_seo);
                    $("#input_kw").html(input_kw);
                
                    $("#img").val(response['data'][0].sp_img);
                    $("#img_cap").val(response['data'][0].sp_img_cap);
                    $("#img_alt").val(response['data'][0].sp_img_alt);
                    //industry dropdown not included yet

                    $("#seo_txt").val(response['data'][0].sp_seo_txt);
                    $("#meta_txt1").val(response['data'][0].sp_seo_desc);
                    $("#meta_txt2").val(response['data'][0].sp_seo_desc2);

                    // Lead Ceditor
                    var objJSON = JSON.parse(response['data'][0].sp_txt);
                    var input_lead = "";
                    $.each(objJSON, function (i, v) {
                        input_lead += '<div class="cols-10"><textarea class="form-control" name="lead_ckeditor[]" id="lead_ckeditor">'+v.lead_ckeditor+'</textarea></div>';
                    });
                    $("#input_lead").html(input_lead);

                    /******** Illness Image ********/
                    var objJSON = JSON.parse(response['data'][0].sp_ill_img);
                    var input_ill_img = "";
                    $.each(objJSON, function (i, v) {
                        input_ill_img += '<div class="cols-2"><button type="button" class="btn-prime image"></button></div><div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div>';
                    });
                    $("#input_ill_img").html(input_ill_img);
                    
                    // H1
                    $("#h1").val(response['data'][0].sp_h1);
                    // H2 Retrieval
                    var objJSON = JSON.parse(response['data'][0].sp_h2);
                    var inputs = "";
                    $.each(objJSON, function (i, v) {
                        inputs += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                    });
                    $("#input_h2").html(inputs);

                    // DEPARTMENT
                    var objJSONdpt = JSON.parse(response['data'][0].sp_tag_dep);
                    var input_dpt = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                            input_dpt += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.dpt_name)
                                input_dpt += '<option value="'+ b.department_name +'">'+ b.department_name +'</option>';

                            });
                               
                            input_dpt += '</select></div>';
                          
                    }); //end of department json
                    $("#input_dpt").html(input_dpt);

                    // Tag Symptoms Retrieval
                    var objJSONconf = JSON.parse(response['data'][0].sp_tag_symp);
                    var input_sy = "";
                    $.each(objJSONconf, function (i, v) {
                        input_sy += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                    });
                    $("#input_sy").html(input_sy);

                    // Tag Season Text Retrieval
                    var objJSONconf = JSON.parse(response['data'][0].sp_ta_season_txt);
                    var input_tst = "";
                    $.each(objJSONconf, function (i, v) {
                        input_tst += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                    });
                    $("#input_tst").html(input_tst);

                    // Tag Free
                    var objJSONconf = JSON.parse(response['data'][0].sp_tag_free);
                    var input_free = "";
                    $.each(objJSONconf, function (i, v) {
                        input_free += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                    });
                    $("#input_free").html(input_free);
                    
                    // Season
                    var objJSONts = JSON.parse(response['data'][0].sp_tag_season);
                    var z = 0;
                    $.each(objJSONts, function (i, v) {
                        var zplus=z+1;
                        if(v.tag_s == 1){
                            $("#tag_s"+zplus).attr( "checked", true );
                        }
                        z++;
                    });

                    //Tag Keywords
                    var objJSONitk = JSON.parse(response['data'][0].sp_tag_kw);
                    var y = 0;
                    $.each(objJSONitk, function (i, v) {
                        var yplus=y+1;
                        if(v.tag_ch == 1){
                            $("#tag"+yplus).attr( "checked", true );
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

$('.overwrite_hospital').each(function(e){
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    // e.preventDefault();
    $(this).on('click', function(){
        var id = $(this).attr('hosp-id');
        alert(id);

        $.ajax({
            url: '/modal_edit_hospital/'+id,
            type: 'get',
            dataType: 'json',
            // data : { id : id },
            success: function(response){
                console.log(response['data']);
                console.log(response['dpt_exam']);
                console.log(response['hosp_feature']);
            if(response == "success")

              console.log(response['data']); 

              $("#edithospital").modal('show');
              $("#url_gen").val(response['data'][0].url);
              $("#medical_ins").val(response['data'][0].medical_ins);
              $("#medical_ins_eng").val(response['data'][0].name_phonic);
              $("#common_name").val(response['data'][0].common_name);
              $("#postal_code").val(response['data'][0].postal_code);
              $("#address").val(response['data'][0].address);
              $("#address_english").val(response['data'][0].address_eng);
              //access not yet
              //parking not yet
              $("#phone_no").val(response['data'][0].phone_no);
              $("#fax").val(response['data'][0].fax);
              $("#email").val(response['data'][0].email);
              //image not yet
              $("#img_caption").val(response['data'][0].image_caption);
              $("#img_alt").val(response['data'][0].image_alt);
              $("#hosp_subheading").val(response['data'][0].hosp_subheading);
              $("#text_subheading_hospital").val(response['data'][0].hosp_text_subheading);
              // division dropdown
            //   input_careertwo += '<select id="aca_year_from" class="form- " name="c_we_year_to[]" style="width:100px"><option value="'+ response['data'][0].division +'">'+ response['data'][0].division +'</option>';
              $("#division").val(response['data'][0].division);
                

            },
                error: function(response){
                alert('Error'+response);
   
            }

          });

        // location.reload();
    });
});

var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
	isIE = /msie/i.test( navigator.userAgent );

$.fn.customFile = function() {

  return this.each(function() {

	var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
		$wrap = $('<div class="file-upload-wrapper">'),
		$input = $('<input type="text" class="file-upload-input" placeholder="ドラッグ &ドロップ 、または参照で画像を追加してください"/>'),
		// Button that will be used in non-IE browsers
		$button = $('<button type="button" class="file-upload-button">参照...</button>'),
		// Hack for IE
		$label = $('<label class="file-upload-button" for="'+ $file[0].id +'">参照...</label>');

	// Hide by shifting to the left so we
	// can still trigger events
	$file.css({
	  position: 'absolute',
	  left: '-9999px'
	});

	$wrap.insertAfter( $file )
	  .append( $file, $input, ( isIE ? $label : $button ) );

	// Prevent focus
	$file.attr('tabIndex', -1);
	$button.attr('tabIndex', -1);

	$button.click(function () {
	  $file.focus().click(); // Open dialog
	});

	$file.change(function() {

	  var files = [], fileArr, filename;

	  // If multiple is supported then extract
	  // all filenames from the file array
	  if ( multipleSupport ) {
		fileArr = $file[0].files;
		for ( var i = 0, len = fileArr.length; i < len; i++ ) {
		  files.push( fileArr[i].name );
		}
		filename = files.join(', ');

	  // If not supported then just take the value
	  // and remove the path to just show the filename
	  } else {
		filename = $file.val().split('\\').pop();
	  }

	  $input.val( filename ) // Set the value
		.attr('title', filename) // Show filename in title tootlip
		.focus(); // Regain focus

	});

	$input.on({
	  blur: function() { $file.trigger('blur'); },
	  keydown: function( e ) {
		if ( e.which === 13 ) { // Enter
		  if ( !isIE ) { $file.trigger('click'); }
		} else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
		  // On some browsers the value is read-only
		  // with this trick we remove the old input and add
		  // a clean clone with all the original events attached
		  $file.replaceWith( $file = $file.clone( true ) );
		  $file.trigger('change');
		  $input.val('');
		} else if ( e.which === 9 ){ // TAB
		  return;
		} else { // All other keys
		  return false;
		}
	  }
	});

  });

};


$(document).ready(function(){ 
    var min = 1990,
    max = 2021,
    select = document.getElementById('aca_year_from');

    for (var i = min; i<=max; i++){
        var opt = document.createElement('option');
        opt.value = i;
        opt.innerHTML = i;
        select.appendChild(opt);
    } 
  });


  $('.addcert1').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
    //   alert('yes!');
    //   var copy = $('#addanother').html();
      $('#certificate').append('<div class="form-group"><label class="control-label cols-15"></label><div class="cols-6 addanother"><div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div><div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div></div></div>');
    }

    $('.addcert2').on('click', addfields2);
    var i=0;
    function addfields2(e) {
      e.preventDefault();
    //   alert('yes!');
      $('#addconference').append('<div class="form-group"><label class="control-label cols-15"></label><div class="sp10 cols-6"><div class="cols-5"><input type="text" class="form- " name="conference[]"></div><div class="cols-5"><input type="text" class="form- " name="conference[]"></div></div></div>');
    }

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

    $('.add44').on('click', add44);
    var i=0;
    function add44(e) {
      e.preventDefault();
    //   alert('yes!');
    var options='';
        for(i=1990; i <= 2020; i++){
            options+='<option value="'+i+'">'+i+'</option>';
        }
      $('#c_we').append(' <div class="form-group"><div class="control-label cols-15"><span></span></div><div class="cols-12"><select id="work_year" name="c_we_year[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_we_month[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_we_desc[]" class="form- " ></div></div><div class="field_wrap4"></div><div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="work_year_to" name="c_we_year_to[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_we_month_to[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_we_desc_to[]" class="form- " ></div>');
    }

    $('.add5').on('click', add4);
    var i=0;
    function add4(e) {
      e.preventDefault();
    //   alert('yes!');
    var options='';
        for(i=1990; i <= 2020; i++){
            options+='<option value="'+i+'">'+i+'</option>';
        }
      $('#c_aw').append('<div class="form-group"><div class="control-label cols-15"><span></span></div><div class="cols-12"><select id="awards_year" name="c_aw_year[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_aw_month[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_aw_desc[]" class="form- " ></div><div class="field_wrap5"></div><div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="awards_year_to" name="c_aw_year_to[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_aw_month_to[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " ></div>');
    }

    $('.add5').on('click', add4);
    var i=0;
    function add4(e) {
      e.preventDefault();
    //   alert('yes!');
    var options='';
        for(i=1990; i <= 2020; i++){
            options+='<option value="'+i+'">'+i+'</option>';
        }
      $('#c_aw').append('<div class="form-group"><div class="control-label cols-15"><span></span></div><div class="cols-12"><select id="awards_year" name="c_aw_year[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_aw_month[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_aw_desc[]" class="form- " ></div><div class="field_wrap5"></div><div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="awards_year_to" name="c_aw_year_to[]" class="form- "><option>----年</option>'+options+'</select></div><div class="cols-1"><select name="c_aw_month_to[]" class="form- "><option value="">--月</option><option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_aw_desc_to[]" class="form- " ></div>');
    }
    
    $('.add_dpt_doc').on('click', add_dpt_doc);
    var i=0;
    function add_dpt_doc(e) {
    //   e.preventDefault();

    $.ajax({
        url: '/get_all_department/',
        type: 'get',
        dataType: 'json',
        // data : { id : id },
        success: function(response){
            console.log(response['data']);
        // if(response == "success")

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
                    
                    input_dpt += '</select>';

            });

        $('#dpt_div').append(input_dpt);

        }

    });

    }


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
                        $("#ill_ID").val(response['data'][0].ill_id);
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

                        // Subheading 1
                        input_sub1 = '<select name="sub_head1a" class="form-control"><option value="">選択してください</option><option value="'+ response['data'][0].ill_sub1 +'">'+ response['data'][0].ill_sub1 +'</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select>';
                        $("#input_sub1").html(input_sub1);

                        $("#sub_head1b").val(response['data'][0].ill_sub2);
                        $("#txt_ckeditor").val(response['data'][0].ill_sub_txt);

                        // image
                        $("#img_cap").val(response['data'][0].ill_img_cap); // image caption
                        $("#img_alt").val(response['data'][0].ill_img_alt); // image alt

                        // Risk Assessment SubTitle
                        var ra_title = response['ra'][0].ra_title;
                        if(ra_title == "1"){
                            $("#a1").attr( "checked", true );
                        }

                        // Text of the subheading
                        var objJSONra_txt = JSON.parse(response['ra'][0].ra_text);
                        var objJSONra_lvl = JSON.parse(response['ra'][0].ra_risk_lvl);
                        var input_ra_txt = "";
                        $.each(objJSONra_txt, function (i, v) {
                            input_ra_txt += '<div class="cols-5"><textarea class="form-control sh" name="sh[]" maxlength="30">'+v.sh+'</textarea></div><div class="cols-2"> リスク度 <select name="rl[]"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                            
                        });
                        // $.each(objJSONra_lvl, function (i, b) {
                        //     input_ra_lvl += '';

                        // });
                        $("#input_ra_txt").html(input_ra_txt);

                        // Check Results
                        var objJSONcr = JSON.parse(response['ra'][0].ra_result);
                        var input_cr = "";
                        $.each(objJSONcr, function (i, v) {
                            input_cr += '<div class="cols-5"><input type="text" class="form-control" name="cr[]" value="'+v.cr+'"></div>';
                        });
                        $("#input_cr").html(input_cr);

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