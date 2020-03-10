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

                    // Archive
                    var input_arch = "";
                    input_arch += '<select><option value="">0000/00/00</option>';
                    
                    $.each(response['arch'], function (i, b) {
                        //console.log('doc '+ b.name)
                        input_arch += '<option value="'+ b.archived_date +'">'+ b.archived_date +'</option>';
    
                    });
                    input_arch+= '</select>'; 
                    $("#input_arch").html(input_arch);  

                    //Tracking
                    track = response['data'][0].tracking_status; 
                    if(track == '1') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                    } else if(track == '2') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq" ).addClass("rel");
                    } else if(track == '3') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq" ).addClass("active");
                        $( "li#approve" ).addClass("rel");
                    } else if(track == '4') {
                        //$(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq" ).addClass("active");
                        $( "li#approve" ).addClass("active");
                        $( "li#relres" ).addClass("rel");
                    } else if(track == '5') {
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                        $( "li#appreq" ).addClass("active");
                        $( "li#approve" ).addClass("active");
                        $( "li#relres" ).addClass("active");
                        $( "li#release" ).addClass("rel");
                    } else if(track == '6') {
                        $( "li#appreq" ).addClass("active");
                        $( "li#approve" ).addClass("active");
                        $( "li#relres" ).addClass("active");
                        $( "li#release" ).addClass("active");
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                    } else { }
                    
                    //Add Attribute

                    $(".release1").attr("il-id", response['data'][0].id);
                    $(".release2").attr("il-id", response['data'][0].id);
                    $("#iD").val(response['data'][0].id);
                    $("#illID").val(response['data'][0].id);
                    $("#track_stat").val(response['data'][0].tracking_status);
                    $("#url").val(response['data'][0].ill_url); 
                    $("#ill_mag").val(response['data'][0].ill_magazine); 

                    // Illness Category
                    input_ill = '<select class="form-control ill_cat" id="ill_cat" name="ill_cat"><option value="'+ response['data'][0].ill_cat +'">'+ response['data'][0].ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                    $("#input_ill").html(input_ill);

                    $("#ill_shldr").val(response['data'][0].ill_shoulder); // Illness Shoulder

                    $("#ill").val(response['data'][0].ill_name); // Illness

                    $("#ill_ph").val(response['data'][0].ill_ph); //Illness Phonetics
                        
                    // Doctor
                    var input_doc = "";
                    input_doc += '<select name="doctor" class="form-control"><option value="'+ response['data'][0].ill_doc +'">'+ response['data'][0].ill_doc +'</option>';
                    
                    $.each(response['doc'], function (i, b) {
                        console.log('doc ' + b.name);
                        input_doc += '<option value="'+ b.name +'">'+ b.name +'</option>';
    
                    });
                    input_doc+= '</select>'; 
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
                    //var a = 3;
                    var b = 0;
                    $.each(objJSON, function (i, v) {
                        //var aplus=a+1;
                        var bplus=b+1;

                        $(".sm"+bplus).val(v.sm); 
                        //if(v.sm != "null"){
                            //inputs += ' <div class="cols-7"><textarea class="form-control sm'+bplus+'" name="sm[]" rows="3" id="sm" maxlength="200">'+v.sm+'</textarea></div><div class="cols-2"><span id="rchars'+aplus+'">0</span>/46</div><div class="clear"></div>';
                        //}
                        //a++;
                        b++;
                    });
                    //$("#input_sum").html(inputs);

                    // Subheading and Content
                    var objJSONtxtCnt = JSON.parse(response['data'][0].ill_sub_txt);
                    var input_content = "";
                    var c = 0;
                    $.each(objJSONtxtCnt, function (i, v) {
                        c++;
                        // CKEDITOR.replace('txt_ck'+c+'');
                        // CKEDITOR.add
                        var editor = $("textarea#txt_ck"+c).ckeditor();

                        input_content += '<div class="txt_edtr"><div class="form-group"><label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label><div class="cols-4"> ';
                        //from heading
                        input_content += '<select id="head'+c+'" name="sub_head1a[]" class="form-control ill_sh"><option value="'+ v.heading +'">'+ v.heading +'</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select>';
                        input_content += '</div></div>';

                        input_content += '<div class="form-group"><label class="control-label cols-15"></label><div class="cols-4">';
                        //from subheading
                        input_content += '<input type="text" id="s_head'+c+'" class="form-control" name="sub_head1b[]" value="'+ v.sub +'">';
                        input_content += '</div></div>';

                        input_content += '<div class="form-group editor"><label class="control-label cols-15">本文<br><span>Text of Subheading</span></label><div class="cols-6"><div class="cols-10">  ';
                        //to content
                        input_content += '<textarea class="form-control" name="txt_ckeditor[]" id="txt_ck'+c+'">'+ v.txt_ckeditor +'</textarea>';
                        input_content += '</div></div></div></div>';
                        //CKEDITOR.instances['txt_ck'+c+''].insertHtml(input_content);
                         
                    });
                    $(".input_content").html(input_content);
                    


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
                    var input_kwords = "";
                    var input_kw = "";
                    var x = 0;
                    $.each(objJSONkw, function (i, v) {
                        var xplus=x+1;
                        
                        input_kwords += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" value="'+v.kword+'"></div>';

                        input_kw += '<div class="cols-3"><input type="checkbox" id="tag'+xplus+'" name="tag[]" value="1" /><label for="tag'+xplus+'">'+v.kword+'</label></div>';
                    
                        x++; 
                    });
                    $("#input_kwords").html(input_kwords);
                    $("#input_kw").html(input_kw);

                    // Tag Department Retrieval
                    var objJSONdpt = JSON.parse(response['data'][0].ill_tag_dep);
                    var input_dpt = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                            input_dpt += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.dpt_name)
                                input_dpt += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';

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

                    // Tag Illness
                    var chk_illname = response['data'][0].ill_tag_name;
                    var illname = response['data'][0].ill_name;
                    if(chk_illname == "1"){
                        $("#tag9").attr( "checked", true );
                    }
                    $(".tag9_name").html(illname);

                    // Season
                    var objJSONts = JSON.parse(response['data'][0].ill_tag_season);
                    
                    $.each(objJSONts, function (i, v) {
                        //var zplus=z+1;
                        if(v.tag_s == "春"){
                            $("#taga1").attr( "checked", true );
                        } else if(v.tag_s == "夏"){
                            $("#taga2").attr( "checked", true );
                        } else if(v.tag_s == "秋"){
                            $("#taga3").attr( "checked", true );
                        } else if(v.tag_s == "冬"){
                            $("#taga4").attr( "checked", true );
                        } else if(v.tag_s == "4月"){
                            $("#taga5").attr( "checked", true );
                        } else if(v.tag_s == "5月"){
                            $("#taga6").attr( "checked", true );
                        } else if(v.tag_s == "6月"){
                            $("#taga7").attr( "checked", true );
                        } else if(v.tag_s == "7月"){
                            $("#taga8").attr( "checked", true );
                        } else if(v.tag_s == "8月"){
                            $("#taga9").attr( "checked", true );
                        } else if(v.tag_s == "9月"){
                            $("#taga10").attr( "checked", true );
                        } else if(v.tag_s == "10月"){
                            $("#taga11").attr( "checked", true );
                        } else if(v.tag_s == "11月"){
                            $("#taga12").attr( "checked", true );
                        } else if(v.tag_s == "12月"){
                            $("#taga13").attr( "checked", true );
                        } else if(v.tag_s == "1月"){
                            $("#taga14").attr( "checked", true );
                        } else if(v.tag_s == "2月"){
                            $("#taga15").attr( "checked", true );
                        } else if(v.tag_s == "3月"){
                            $("#taga16").attr( "checked", true );
                        } else { } 
                        //z++;
                    });

                    // Risk Assessment SubTitle
                    var ra_title = response['ra'][0].ra_title;
                    if(ra_title == "1"){
                        $("#a1").attr( "checked", true );
                    }

                    // Subheading and Risk Level
                    var objJSONrskCnt = JSON.parse(response['ra'][0].ra_text);
                    var input_risk = '';
                    $.each(objJSONrskCnt, function (i, v) {

                        input_risk += '<div class="cols-5"><textarea class="form-control sh" name="sh[]" maxlength="30">'+v.sh+'</textarea></div><div class="cols-2"> リスク度 <select name="rl[]"><option value="'+ v.rl +'">'+ v.rl +'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                        //input_risk += '<input type="text">';
                        
                    });
                    $("#input_ra_txt").html(input_risk);

                    // Subheading and Risk Level 2
                    var objJSONrskCnt2 = JSON.parse(response['ra2'][0].ra_text);
                    var input_risk2 = "";
                    $.each(objJSONrskCnt2, function (i, v) {

                        input_risk2 += '<div class="cols-5"><textarea class="form-control sh" name="sh2[]" maxlength="30">'+v.sh2+'</textarea></div><div class="cols-2"> リスク度 <select name="rl2[]"><option value="'+ v.rl2 +'">'+ v.rl2 +'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                        
                    });
                    $("#input_ra_txt2").html(input_risk2);


                    // Check Results
                    var objJSONcr = JSON.parse(response['ra'][0].ra_result);
                    var input_cr = "";
                    $.each(objJSONcr, function (i, v) {
                        input_cr += '<div class="cols-5"><input type="text" class="form-control" name="cr[]" value="'+v.cr+'"></div>';
                    });
                    $("#input_cr").html(input_cr);

                    // Risk Assessment SubTitle 2
                    var ra_title2 = response['ra2'][0].ra_title;
                    if(ra_title2 == "1"){
                        $("#b1").attr( "checked", true );
                    }

                    // Subheading and Risk Level 2
                    var objJSONrskCnt2 = JSON.parse(response['ra2'][0].ra_text);
                    var input_risk2 = "";
                    $.each(objJSONrskCnt2, function (i, v) {

                        input_risk2 += '<div class="cols-5"><textarea class="form-control sh" name="sh2[]" maxlength="30">'+v.sh2+'</textarea></div><div class="cols-2"> リスク度 <select name="rl2[]"><option value="'+ v.rl2 +'">'+ v.rl2 +'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                        
                    });
                    $("#input_ra_txt2").html(input_risk2);

                    // Check Results 2
                    var objJSONcr2 = JSON.parse(response['ra2'][0].ra_result);
                    var input_cr2 = "";
                    $.each(objJSONcr2, function (i, v) {
                        input_cr2 += '<div class="cols-5"><input type="text" class="form-control" name="cr2[]" value="'+v.cr2+'"></div>';
                    });
                    $("#input_cr2").html(input_cr2);


                },
                error: function(response){
                alert('Error'+response);
   
            }

        });
        // location.reload();
    });
});

//copy and add another SPecial data to database
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

                    // Archive
                    var sp_arch_two = "";
                    sp_arch_two += '<select><option value="">0000/00/00</option>';
                    
                    $.each(response['arch'], function (i, b) {
                        //console.log('doc '+ b.name)
                        sp_arch_two += '<option value="'+ b.archived_date +'">'+ b.archived_date +'</option>';
    
                    });
                    
                    sp_arch_two+= '</select>'; 
                    $("#sp_arch_two").html(sp_arch_two); 
                    
                    // author = '<h2>'+response['auth'][0].name+'<span>ID番号:S00000'+response['auth'][0].id+'</span></h2>'
                    // $("#authorID").html(author); 

                    //Tracking
                    track = response['data'][0].tracking_status; 
                    if(track == '1') {
                        $(".sp_release1").attr("disabled", "disabled");
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".sp_release2").attr("disabled", "disabled");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                    } else if(track == '2') {
                        $(".sp_release1").attr("disabled", "disabled");
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".sp_release2").attr("disabled", "disabled");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#sp_appreq_two" ).addClass("rel");
                    } else if(track == '3') {
                        $(".sp_release1").attr("disabled", "disabled");
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".sp_release2").attr("disabled", "disabled");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#sp_appreq_two" ).addClass("active");
                        $( "li#sp_approve_two" ).addClass("rel");
                    } else if(track == '4') {
                        //$(".release1").attr("disabled", "disabled");
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".sp_release2").attr("disabled", "disabled");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#sp_appreq_two" ).addClass("active");
                        $( "li#sp_approve_two" ).addClass("active");
                        $( "li#sp_relres_two" ).addClass("rel");
                    } else if(track == '5') {
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                        $( "li#sp_appreq_two" ).addClass("active");
                        $( "li#sp_approve_two" ).addClass("active");
                        $( "li#sp_relres_two" ).addClass("active");
                        $( "li#sp_release_two" ).addClass("rel");
                    } else if(track == '6') {
                        $( "li#sp_appreq_two" ).addClass("active");
                        $( "li#sp_approve_two" ).addClass("active");
                        $( "li#sp_relres_two" ).addClass("active");
                        $( "li#sp_release_two" ).addClass("active");
                        $(".sp_release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".sp_release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                    } else { }

                    $(".sp_release1").attr("sp-id", response['data'][0].id);
                    $(".sp_release2").attr("sp-id", response['data'][0].id);
                    $("#sp_iD_two").val(response['data'][0].id);
                    $("#sp_track_stat_two").val(response['data'][0].tracking_status);

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

                    // Subheading and Content
                    var objJSONtxtCnt = JSON.parse(response['data'][0].sp_sum);
                    var input_content_two = "";
                    $.each(objJSONtxtCnt, function (i, v) {

                        input_content_two += '<div class="form-group"><label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label><div class="cols-4"> ';
                        //from heading
                        input_content_two += '<select name="sub_head1a[]" class="form-control"><option value="'+ v.heading +'">'+ v.heading +'</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select>';
                        input_content_two += '</div></div>';

                        input_content_two += '<div class="form-group"><label class="control-label cols-15"></label><div class="cols-4">';
                        //from subheading
                        input_content_two += '<input type="text" class="form-control" name="sub_head1b[]" value="'+ v.sub +'">';
                        input_content_two += '</div></div>';

                        input_content_two += '<div class="form-group editor"><label class="control-label cols-15">本文<br><span>Text of Subheading</span></label><div class="cols-6"><div class="cols-10">  ';
                        //to content
                        input_content_two += '<textarea class="form-control" name="txt_ckeditor[]" id="txt_ckeditor_two">'+ v.txt_ckeditor +'</textarea>';
                        input_content_two += '</div></div></div>';
                    });
                    $(".input_content_two").html(input_content_two);

                    // SEO Title
                    var seo_title = response['data'][0].seo_title;
                    var illness_cat = response['data'][0].sp_ill_cat;
                    if(seo_title == "1"){
                        $("#tts_two").attr( "checked", true );
                    }
                    $("#input_seo_title_two").html(illness_cat);

                    // SEO Keywords
                    var objJSON = JSON.parse(response['data'][0].sp_seo_kwords);
                    var input_seo_two = "";
                    var input_kw_two = "";
                    var x = 0;
                    $.each(objJSON, function (i, v) {
                        var xplus=x+1;
                        input_seo_two += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" id="kword" value="'+v.kword+'"></div>';
                        input_kw_two += '<div class="cols-3"><input type="checkbox" id="tag_two'+xplus+'" name="tag_ch[]" /><label for="tag_two'+xplus+'"> '+v.kword+'</label></div>';
                    
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
                        input_lead_two += '<textarea class="form-control" name="lead_ckeditor[]" id="lead_ckeditor_two">'+v.lead_ckeditor+'</textarea><br>';
                    });
                    $("#input_lead_two").html(input_lead_two);

                    /******** Illness Image ********/
                    var objJSONilg = JSON.parse(response['data'][0].sp_ill_img);
                    var input_ill_img_two = "";
                    $.each(objJSONilg, function (i, v) {
                        input_ill_img_two += '<div class="cols-4"><button type="button" class="btn-prime image"></button></div><div class="cols-6"><input type="text" class="form-control" name="pos_ill[]" value="'+ v.pos_ill +'"></div>';
                    });
                    $("#input_ill_img_two").html(input_ill_img_two);

                    // Subheading and Content
                    var objJSONtxtCnt2 = JSON.parse(response['data'][0].sp_sum2);
                    var input_content2_two = "";
                    $.each(objJSONtxtCnt2, function (i, v) {

                        input_content2_two += '<div class="form-group"><label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label><div class="cols-4"> ';
                        //from heading
                        input_content2_two += '<select name="sub_head2a[]" class="form-control"><option value="'+ v.heading +'">'+ v.heading +'</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select>';
                        input_content2_two += '</div></div>';

                        input_content2_two += '<div class="form-group"><label class="control-label cols-15"></label><div class="cols-4">';
                        //from subheading
                        input_content2_two += '<input type="text" class="form-control" name="sub_head2b[]" value="'+ v.sub +'">';
                        input_content2_two += '</div></div>';

                        input_content2_two += '<div class="form-group editor"><label class="control-label cols-15">本文<br><span>Text of Subheading</span></label><div class="cols-6"><div class="cols-10">  ';
                        //to content
                        input_content2_two += '<textarea class="form-control" name="txt2_ckeditor[]" id="txt2_ckeditor_two">'+ v.txt_ckeditor +'</textarea>';
                        input_content2_two += '</div></div></div>';
                    });
                    $(".input_content2_two").html(input_content2_two);
                    
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
                                input_dpt_two += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';

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
                    
                    $.each(objJSONts, function (i, v) {
                        //var zplus=z+1;
                        if(v.tag_s == "春"){
                            $("#tag_s_two1").attr( "checked", true );
                        } else if(v.tag_s == "夏"){
                            $("#tag_s_two2").attr( "checked", true );
                        } else if(v.tag_s == "秋"){
                            $("#tag_s_two3").attr( "checked", true );
                        } else if(v.tag_s == "冬"){
                            $("#tag_s_two4").attr( "checked", true );
                        } else if(v.tag_s == "4月"){
                            $("#tag_s_two5").attr( "checked", true );
                        } else if(v.tag_s == "5月"){
                            $("#tag_s_two6").attr( "checked", true );
                        } else if(v.tag_s == "6月"){
                            $("#tag_s_two7").attr( "checked", true );
                        } else if(v.tag_s == "7月"){
                            $("#tag_s_two8").attr( "checked", true );
                        } else if(v.tag_s == "8月"){
                            $("#tag_s_two9").attr( "checked", true );
                        } else if(v.tag_s == "9月"){
                            $("#tag_s_two10").attr( "checked", true );
                        } else if(v.tag_s == "10月"){
                            $("#tag_s_two11").attr( "checked", true );
                        } else if(v.tag_s == "11月"){
                            $("#tag_s_two12").attr( "checked", true );
                        } else if(v.tag_s == "12月"){
                            $("#tag_s_two13").attr( "checked", true );
                        } else if(v.tag_s == "1月"){
                            $("#tag_s_two14").attr( "checked", true );
                        } else if(v.tag_s == "2月"){
                            $("#tag_s_two15").attr( "checked", true );
                        } else if(v.tag_s == "3月"){
                            $("#tag_s_two16").attr( "checked", true );
                        } else { } 
                        //z++;
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

                    // Tag Illness
                    var objJSONsti = JSON.parse(response['data'][0].sp_tag_ill);
                    //var input_tag_ill = "";

                    $.each(response['ill'], function (i, b) {
                        
                        //input_tag_ill += '<div class="cols-3"><input type="checkbox" id="tagb'+ b.id +'" name="tag_ill[]" value="'+ b.ill_name +'" ><label for="tagb'+ b.id +'">'+ b.ill_name +'</label></div>';
                            
                        $.each(objJSONsti, function (i, v) {
                            if(b.id == v.tag_ill){
                                $("#tagc"+ b.id).attr( "checked", true );
                            }
                        });
                    });
              
            },
                error: function(response){
                alert('Error'+response);
   
            }

          });
        // location.reload();
    });
});

//copy and add another Illness data to database
$('.overwrite_illness_copy').each(function(e){
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

                    $("#copyAddillness").modal('show');

                    // Archive
                    var input_arch_two = "";
                    input_arch_two += '<select><option value="">0000/00/00</option>';
                    
                    $.each(response['arch'], function (i, b) {
                        //console.log('doc '+ b.name)
                        input_arch_two += '<option value="'+ b.archived_date +'">'+ b.archived_date +'</option>';
    
                    });
                    input_arch_two+= '</select>'; 
                    $("#input_arch_two").html(input_arch_two);  

                    //Tracking
                    track = response['data'][0].tracking_status; 
                    if(track == '1') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                    } else if(track == '2') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq_two" ).addClass("rel");
                    } else if(track == '3') {
                        $(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-half-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq_two" ).addClass("active");
                        $( "li#approve_two" ).addClass("rel");
                    } else if(track == '4') {
                        //$(".release1").attr("disabled", "disabled");
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("disabled", "disabled");
                        $(".release2").attr("style", "background-image: url(../images/icon-half-release.png);");
                        $( "li#appreq_two" ).addClass("active");
                        $( "li#approve_two" ).addClass("active");
                        $( "li#relres_two" ).addClass("rel");
                    } else if(track == '5') {
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                        $( "li#appreq_two" ).addClass("active");
                        $( "li#approve_two" ).addClass("active");
                        $( "li#relres_two" ).addClass("active");
                        $( "li#release_two" ).addClass("rel");
                    } else if(track == '6') {
                        $( "li#appreq_two" ).addClass("active");
                        $( "li#approve_two" ).addClass("active");
                        $( "li#relres_two" ).addClass("active");
                        $( "li#release_two" ).addClass("active");
                        $(".release1").attr("style", "background-image: url(../images/icon-pink-relreserve.png);");
                        $(".release2").attr("style", "background-image: url(../images/icon-pink-release.png);");
                    } else { }
                    
                    //Add Attribute

                    $(".release1").attr("il-id", response['data'][0].id);
                    $(".release2").attr("il-id", response['data'][0].id);
                    $("#iD_two").val(response['data'][0].id);
                    $("#twourl").val(response['data'][0].ill_url); // url

                    $("#track_stat_two").val(response['data'][0].tracking_status);

                    $("#two_ill_mag").val(response['data'][0].ill_magazine); 

                    // Illness Category
                    input_ill_two = '<select class="form-control ill_cat_two" name="ill_cat"><option value="'+ response['data'][0].ill_cat +'">'+ response['data'][0].ill_cat +'</option> <option value="選択してください">選択してください</option><option value="選択してください">選択してください</option><option value="感染症・寄生虫症">感染症・寄生虫症</option><option value="女性特有のがん＊">女性特有のがん＊</option><option value="男性特有のがん">男性特有のがん</option><option value="消化管のがん">消化管のがん</option><option value="胸部のがん">胸部のがん</option><option value="肝臓・胆のう・膵臓のがん">肝臓・胆のう・膵臓のがん</option><option value="泌尿器のがん">泌尿器のがん</option><option value="口・のど・鼻・耳のがん">口・のど・鼻・耳のがん</option><option value="脳・神経・眼のがん">脳・神経・眼のがん</option><option value="その他の腹部のがん">その他の腹部のがん</option><option value="皮膚のがん">皮膚のがん</option><option value="骨・筋肉のがん">骨・筋肉のがん</option><option value="血液・リンパ（白血病）のがん">血液・リンパ（白血病）のがん</option><option value="血液・リンパ（悪性リンパ種）のがん">血液・リンパ（悪性リンパ種）のがん</option><option value="血液・リンパ（その他）のがん">血液・リンパ（その他）のがん</option><option value="血液・リンパの病気">血液・リンパの病気</option><option value="内分泌や代謝の病気">内分泌や代謝の病気</option><option value="こころ・精神の病気">こころ・精神の病気</option><option value="脳・神経系の病気">脳・神経系の病気</option><option value="眼の病気">眼の病気</option><option value="耳・鼻・のどの病気">耳・鼻・のどの病気</option><option value="循環器系の病気">循環器系の病気</option><option value="呼吸器系の病気">呼吸器系の病気</option><option value="消化器系の病気">消化器系の病気</option><option value="歯科・口腔疾患">歯科・口腔疾患</option><option value="皮膚の病気">皮膚の病気</option><option value="骨や関節の病気">骨や関節の病気</option><option value="腎臓、尿路、生殖器の病気">腎臓、尿路、生殖器の病気</option><option value="妊娠・出産・女性（婦人）の病気">妊娠・出産・女性（婦人）の病気</option><option value="胎児と新生児に関わる障害">胎児と新生児に関わる障害</option><option value="先天奇形・変形及び染色体異常">先天奇形・変形及び染色体異常</option><option value="そのほかの病気">そのほかの病気</option><option value="ケガ・中毒・火傷など外因による傷病">ケガ・中毒・火傷など外因による傷病</option></select>';
                    $("#input_ill_two").html(input_ill_two);

                    $("#ill_shldr_two").val(response['data'][0].ill_shoulder); // Illness Shoulder

                    $("#ill_two").val(response['data'][0].ill_name); // Illness

                    $("#ill_ph_two").val(response['data'][0].ill_ph); //Illness Phonetics
                        
                    // Doctor
                    var input_doc_two = "";
                    input_doc_two += '<select name="doctor" class="form-control"><option value="'+ response['data'][0].ill_doc +'">'+ response['data'][0].ill_doc +'</option>';
                    
                    $.each(response['doc'], function (i, b) {
                        console.log('doc '+ b.name)
                        input_doc_two += '<option value="'+ b.name +'">'+ b.name +'</option>';
    
                    });
                    input_doc_two += '</select>'; 
                    $("#input_doc_two").html(input_doc_two); 

                    // Doctor Role
                    var role = response['data'][0].ill_doc_role;
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

                    $("#twocmt").val(response['data'][0].ill_doc_cmt);  // Doctor's Comment 

                    // Summarize
                    var objJSONsum = JSON.parse(response['data'][0].ill_summary);
                    var inputs = "";
                    //var a = 3;
                    var b = 0;
                    $.each(objJSON, function (i, v) {
                        //var aplus=a+1;
                        var bplus=b+1;

                        $(".sm"+bplus).val(v.sm); 
                        //if(v.sm != "null"){
                            //inputs += ' <div class="cols-7"><textarea class="form-control sm'+bplus+'" name="sm[]" rows="3" id="sm" maxlength="200">'+v.sm+'</textarea></div><div class="cols-2"><span id="rchars'+aplus+'">0</span>/46</div><div class="clear"></div>';
                        //}
                        //a++;
                        b++;
                    });
                    
                    //$("#input_sum_two").html(inputs);

                    // Subheading and Content
                    var objJSONtxtCnt = JSON.parse(response['data'][0].ill_sub_txt);
                    var input_content_two = "";
                    $.each(objJSONtxtCnt, function (i, v) {

                        input_content_two += '<div class="form-group"><label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label><div class="cols-4"> ';
                        //from heading
                        input_content_two += '<select id="head" name="sub_head1a[]" class="form-control"><option value="'+ v.heading +'">'+ v.heading +'</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select>';
                        input_content_two += '</div></div>';

                        input_content_two+= '<div class="form-group"><label class="control-label cols-15"></label><div class="cols-4">';
                        //from subheading
                        input_content_two += '<input type="text" id="s_head" class="form-control" name="sub_head1b[]" value="'+ v.sub +'">';
                        input_content_two += '</div></div>';

                        input_content_two += '<div class="form-group editor"><label class="control-label cols-15">本文<br><span>Text of Subheading</span></label><div class="cols-6"><div class="cols-10">  ';
                        //to content
                        input_content_two += '<textarea class="form-control" name="txt_ckeditor[]" id="txt_ckeditor">'+ v.txt_ckeditor +'</textarea>';
                        input_content_two += '</div></div></div>';
                    });
                    $(".input_content_two").html(input_content_two);

                    // image
                    $("#twoimg_cap").val(response['data'][0].ill_img_cap); // image caption
                    $("#twoimg_alt").val(response['data'][0].ill_img_alt); // image alt

                    // Risk Assessment SubTitle
                    var ra_title = response['ra'][0].ra_title;
                    if(ra_title == "1"){
                        $("#a1_two").attr( "checked", true );
                    }

                    // Subheading and Risk Level
                    var objJSONrskCnt = JSON.parse(response['ra'][0].ra_text);
                    var input_risk_two = "";
                    $.each(objJSONrskCnt, function (i, v) {

                        input_risk_two += '<div class="cols-5"><textarea class="form-control sh" name="sh[]" maxlength="30">'+v.sh+'</textarea></div><div class="cols-2"> リスク度 <select name="rl[]"><option value="'+ v.rl +'">'+ v.rl +'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                        
                    });
                    $("#input_ra_txt_two").html(input_risk_two);

                    // Check Results
                    var objJSONcr = JSON.parse(response['ra'][0].ra_result);
                    var input_cr_two = "";
                    $.each(objJSONcr, function (i, v) {
                        input_cr_two += '<div class="cols-5"><input type="text" class="form-control" name="cr[]" value="'+v.cr+'"></div>';
                    });
                    $("#input_cr_two").html(input_cr_two);

                    // Risk Assessment SubTitle 2
                    var ra_title2 = response['ra2'][0].ra_title;
                    if(ra_title2 == "1"){
                        $("#b1_two").attr( "checked", true );
                    }

                    // Subheading and Risk Level 2
                    var objJSONrskCnt2 = JSON.parse(response['ra2'][0].ra_text);
                    var input_risk2_two = "";
                    $.each(objJSONrskCnt2, function (i, v) {

                        input_risk2_two += '<div class="cols-5"><textarea class="form-control sh" name="sh2[]" maxlength="30">'+v.sh2+'</textarea></div><div class="cols-2"> リスク度 <select name="rl2[]"><option value="'+ v.rl2 +'">'+ v.rl2 +'</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select><br></div><div class="clear"></div>';
                        
                    });
                    $("#input_ra_txt2_two").html(input_risk2_two);

                    // Check Results 2
                    var objJSONcr2 = JSON.parse(response['ra2'][0].ra_result);
                    var input_cr2_two = "";
                    $.each(objJSONcr2, function (i, v) {
                        input_cr2_two += '<div class="cols-5"><input type="text" class="form-control" name="cr2[]" value="'+v.cr2+'"></div>';
                    });
                    $("#input_cr2_two").html(input_cr2_two);

                    // Search Keywords
                    var objJSONkw = JSON.parse(response['data'][0].ill_kwords);
                    var input_kwords_two = "";
                    var input_kw_two = "";
                    var x = 0;
                    $.each(objJSONkw, function (i, v) {
                        var xplus=x+1;
                        
                        input_kwords_two += '<div class="cols-3"><input type="text" class="form-control" name="kword[]" value="'+v.kword+'"></div>';

                        input_kw_two += '<div class="cols-3"><input type="checkbox" id="twotag'+xplus+'" name="tag[]" value="1" /><label for="tag'+xplus+'_two">'+v.kword+'</label></div>';
                    
                        x++; 
                    });
                    $("#input_kwords_two").html(input_kwords_two);
                    $("#input_kw_two").html(input_kw_two);

                    // SEO Title
                    var seo_title = response['data'][0].ill_seo;
                    var illness_name = response['data'][0].ill_name;
                    if(seo_title == "1"){
                        $("#tts_two").attr( "checked", true );
                    }
                    $("#input_seo_title_two").html(illness_name);

                    $("#seo_txt_two").val(response['data'][0].ill_seo_txt); // seo text
                    $("#meta_txt1_two").val(response['data'][0].ill_meta_a);
                    $("#meta_txt2_two").val(response['data'][0].ill_meta_b);

                    // Illness h1
                    input_h1_two = ''+ response['data'][0].ill_shoulder +'<input type="hidden" name="h1" value="'+ response['data'][0].ill_name +'">';
                    $("#input_h1_two").html(input_h1_two);
                    
                    // H2 Retrieval
                    var objJSONh2 = JSON.parse(response['data'][0].ill_h2);
                    var input_h2_two = "";
                    $.each(objJSONh2, function (i, v) {
                        input_h2_two += '<div class="cols-3"><input type="text" class="form-control" placeholder="" value="'+v.h2+'" name="h2[]"></div>';
                    });
                    $("#input_h2_two").html(input_h2_two);
  
                    // Tag Department Retrieval
                    var objJSONdpt = JSON.parse(response['data'][0].ill_tag_dep);
                    var input_dpt_two = "";
                    $.each(objJSONdpt, function (i, v) {
                        console.log(objJSONdpt);

                            input_dpt_two += '<div class="cols-3"><select class="form-control" name="tag_dep[]"><option value="'+ v.tag_dep +'">'+ v.tag_dep +'</option>';

                            $.each(response['dpt'], function (i, b) {
                                console.log('dpt '+ b.dpt_name)
                                input_dpt_two += '<option value="'+ b.dpt_name +'">'+ b.dpt_name +'</option>';

                            });
                               
                            input_dpt_two += '</select></div>';
                          
                    }); //end of department json
                    $("#input_dpt_two").html(input_dpt_two);

                    // Tag Symptoms Retrieval
                    var objJSONsy = JSON.parse(response['data'][0].ill_tag_symp);
                    var input_sy_two = "";
                    $.each(objJSONsy, function (i, v) {
                        input_sy_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" id="tag_sy" value="'+v.tag_sy+'"></div>';
                    });
                    $("#input_sy_two").html(input_sy_two);

                    // Tag Season Text Retrieval
                    var objJSONtst = JSON.parse(response['data'][0].ill_tag_season_txt);
                    var input_tst_two = "";
                    $.each(objJSONtst, function (i, v) {
                        input_tst_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" id="tag_txt" value="'+v.tag_txt+'"></div>';
                    });
                    $("#input_tst_two").html(input_tst_two);

                    // Tag Free
                    var objJSONfree = JSON.parse(response['data'][0].ill_tag_free);
                    var input_free_two = "";
                    $.each(objJSONfree, function (i, v) {
                        input_free_two += '<div class="cols-3"><input type="text" class="form-control" name="tag_f[]" id="tag_f" value="'+v.tag_f+'"></div>';
                    });
                    $("#input_free_two").html(input_free_two);

                    //Tag Keywords
                    var objJSONitk = JSON.parse(response['data'][0].ill_tag_kw);
                    var y = 0;
                    $.each(objJSONitk, function (i, v) {
                        var yplus=y+1;
                        if(v.tag == 1){
                            $("#twotag"+yplus).attr( "checked", true );
                        }
                        y++;
                    });

                    // Tag Illness
                    var chk_illname = response['data'][0].ill_tag_name;
                    var illname = response['data'][0].ill_name;
                    if(chk_illname == "1"){
                        $("#tag9_two").attr( "checked", true );
                    }
                    $(".tag9_two_name").html(illname);

                    // Season
                    var objJSONts = JSON.parse(response['data'][0].ill_tag_season);
                    
                    $.each(objJSONts, function (i, v) {
                        //var zplus=z+1;
                        if(v.tag_s == "春"){
                            $("#twotaga1").attr( "checked", true );
                        } else if(v.tag_s == "夏"){
                            $("#twotaga2").attr( "checked", true );
                        } else if(v.tag_s == "秋"){
                            $("#twotaga3").attr( "checked", true );
                        } else if(v.tag_s == "冬"){
                            $("#twotaga4").attr( "checked", true );
                        } else if(v.tag_s == "4月"){
                            $("#twotaga5").attr( "checked", true );
                        } else if(v.tag_s == "5月"){
                            $("#twotaga6").attr( "checked", true );
                        } else if(v.tag_s == "6月"){
                            $("#twotaga7").attr( "checked", true );
                        } else if(v.tag_s == "7月"){
                            $("#twotaga8").attr( "checked", true );
                        } else if(v.tag_s == "8月"){
                            $("#twotaga9").attr( "checked", true );
                        } else if(v.tag_s == "9月"){
                            $("#twotaga10").attr( "checked", true );
                        } else if(v.tag_s == "10月"){
                            $("#twotaga11").attr( "checked", true );
                        } else if(v.tag_s == "11月"){
                            $("#twotaga12").attr( "checked", true );
                        } else if(v.tag_s == "12月"){
                            $("#twotaga13").attr( "checked", true );
                        } else if(v.tag_s == "1月"){
                            $("#twotaga14").attr( "checked", true );
                        } else if(v.tag_s == "2月"){
                            $("#twotaga15").attr( "checked", true );
                        } else if(v.tag_s == "3月"){
                            $("#twotaga16").attr( "checked", true );
                        } else { } 
                        //z++;
                    });
                    
              
            },
                error: function(response){
                alert('Error'+response);
   
            }

          });
        // location.reload();
    });
});