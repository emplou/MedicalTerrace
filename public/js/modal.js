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
<<<<<<< HEAD
}
=======
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

// Old browser fallback
if ( !multipleSupport ) {
  $( document ).on('change', 'input.customfile', function() {

	var $this = $(this),
		// Create a unique ID so we
		// can attach the label to the input
		uniqId = 'customfile_'+ (new Date()).getTime(),
		$wrap = $this.parent(),

		// Filter empty input
		$inputs = $wrap.siblings().find('.file-upload-input')
		  .filter(function(){ return !this.value }),

		$file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

	// 1ms timeout so it runs after all other events
	// that modify the value have triggered
	setTimeout(function() {
	  // Add a new input
	  if ( $this.val() ) {
		// Check for empty fields to prevent
		// creating new inputs when changing files
		if ( !$inputs.length ) {
		  $wrap.after( $file );
		  $file.customFile();
		}
	  // Remove and reorganize inputs
	  } else {
		$inputs.parent().remove();
		// Move the input so it's always last on the list
		$wrap.appendTo( $wrap.parent() );
		$wrap.find('input').focus();
	  }
	}, 1);

  });
}

$('input[type=file]').customFile();

    $(document).ready(function() {
        var wrapper         = $(".field_wrap1"); //Fields wrapper
        var add_button      = $(".add1"); //Add button ID
        var wrapper2         = $(".field_wrap2"); //Fields wrapper
        var wrapper3         = $(".field_wrap3"); //Fields wrapper
        var wrapper4         = $(".field_wrap4"); //Fields wrapper
        var add_button4      = $(".add4"); //Add button ID
        var wrapper5         = $(".field_wrap5"); //Fields wrapper
        var add_button5      = $(".add5"); //Add button ID
        var wrapper6         = $(".field_wrap6"); //Fields wrapper
        var add_button6      = $(".add6"); //Add button ID
        var wrapper7         = $(".field_wrap7"); //Fields wrapper
        var add_button7      = $(".add7"); //Add button ID
        var wrapper8         = $(".field_wrap8"); //Fields wrapper
        var add_button8      = $(".add8"); //Add button ID
        var wrapper9         = $(".field_wrap9"); //Fields wrapper
        var add_button9      = $(".add9"); //Add button ID
        

        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            $(wrapper).append('<div class="form-group"><div class="control-label cols-15"></div><div class="cols-15"><button type="button" class="btn-prime image"></button></div><div class="cols-4"><input type="text" class="form-control" placeholder="選ばれた記事の病名が入る" name="pos_ill[]"></div><div class="cols-1"></div></div>'); //add input box
        });

        $('.add2').on('click', add2);
        var i=0;
        function add2(e) {
            e.preventDefault();
            var copy = $('#addanother1').clone();

            var lplus=i+1;

            $(wrapper2).append($(copy).html()+ '<div class="clear"></div>');
            CKEDITOR.replace('lead_ckeditor['+lplus+']');
            i++;  

        }

        $('.add3').on('click', add3);
        var j=0;
        function add3(e) {
            e.preventDefault();
            var copy2 = $('#addanother2').clone();

            var tplus=j+1;


            $(copy2).find('.add3').remove();
            $(wrapper3).append($(copy2).html()+ '<div class="clear"></div>');
            CKEDITOR.replace('txt_ckeditor['+tplus+']');
            j++;  

        }

        $('.add4').on('click', add4);
        var k=0;
        function add4(e) {
            e.preventDefault();
            var copy3 = $('#addanother3').clone();

            var kplus=k+1;


            $(copy3).find('.add4').remove();
            $(wrapper4).append($(copy3).html()+ '<div class="clear"></div>');
            CKEDITOR.replace('txt2_ckeditor['+kplus+']');
            k++;  

        }

        $('.add6').on('click', add6);
        function add6(e) {
            e.preventDefault();
            var copy_dpt = $('#add_dpt').clone();

            $(copy_dpt).find('.add6').remove();
            $(wrapper6).append($(copy_dpt).html()+ '<div class="clear"></div>');

        }

        $(add_button5).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper5).append('<div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2a[]"></div><div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2b[]"></div><div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2c[]"></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });

        // $(add_button6).click(function(e){ //on add input button click
        //     e.preventDefault();
            
             $(wrapper6).append('<div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        // });

        $(add_button7).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper7).append('<div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" placeholder="擬音や検索されやすい症状"></div><div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" placeholder=""></div><div class="cols-3"><input type="text" class="form-control" name="tag_sy[]" placeholder=""></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });

        $(add_button8).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper8).append('<div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" placeholder=""></div><div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" placeholder=""></div><div class="cols-3"><input type="text" class="form-control" name="tag_txt[]" placeholder=""></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });

        $(add_button9).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper9).append('<div class="cols-3"> <input type="text" class="form-control" name="tag_f[]" placeholder=""></div><div class="cols-3"><input type="text" class="form-control" name="tag_f[]" placeholder=""></div> <div class="cols-3"><input type="text" class="form-control" name="tag_f[]" placeholder=""></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
        });

        $('#totop.float-btn').click(function() { 
        // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0          // Scroll to top of body
        }, 1000);
        });

        $('#tobottom.float-btn').click(function() { 
            $("html, body").animate({ 
                scrollTop: $(document).height() 
            }, 1000);
        });

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
  
  
  // Old browser fallback
  if ( !multipleSupport ) {
    $( document ).on('change', 'input.customfile', function() {
  
    var $this = $(this),
      // Create a unique ID so we
      // can attach the label to the input
      uniqId = 'customfile_'+ (new Date()).getTime(),
      $wrap = $this.parent(),
  
      // Filter empty input
      $inputs = $wrap.siblings().find('.file-upload-input')
        .filter(function(){ return !this.value }),
  
      $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');
  
    // 1ms timeout so it runs after all other events
    // that modify the value have triggered
    setTimeout(function() {
      // Add a new input
      if ( $this.val() ) {
      // Check for empty fields to prevent
      // creating new inputs when changing files
      if ( !$inputs.length ) {
        $wrap.after( $file );
        $file.customFile();
      }
      // Remove and reorganize inputs
      } else {
      $inputs.parent().remove();
      // Move the input so it's always last on the list
      $wrap.appendTo( $wrap.parent() );
      $wrap.find('input').focus();
      }
    }, 1);
  
    });
  }
  
  $(document).ready(function(){
      $("#kword1").keyup(function(){
          // Getting the current value of textarea
          kword1 = '<div class="cols-3"><input type="checkbox" id="tag1" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output").html(kword1);
      });
      $("#kword2").keyup(function(){
          // Getting the current value of textarea
          kword2 = '<div class="cols-3"><input type="checkbox" id="tag2" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output2").html(kword2);
      });
      $("#kword3").keyup(function(){
          // Getting the current value of textarea
          kword3 = '<div class="cols-3"><input type="checkbox" id="tag3" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output3").html(kword3);
      });
      $("#kword4").keyup(function(){
          // Getting the current value of textarea
          kword4 = '<div class="cols-3"><input type="checkbox" id="tag4" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output4").html(kword4);
      });
      $("#kword5").keyup(function(){
          // Getting the current value of textarea
          kword5 = '<div class="cols-3"><input type="checkbox" id="tag5" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output5").html(kword5);
      });
      $("#kword6").keyup(function(){
          // Getting the current value of textarea
          kword6 = '<div class="cols-3"><input type="checkbox" id="tag6" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output6").html(kword6);
      });
      $("#kword7").keyup(function(){
          // Getting the current value of textarea
          kword7 = '<div class="cols-3"><input type="checkbox" id="tag7" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output7").html(kword7);
      });
      $("#kword8").keyup(function(){
          // Getting the current value of textarea
          kword8 = '<div class="cols-3"><input type="checkbox" id="tag8" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
          
          // Setting the Div content
          $("#output8").html(kword8);
      });
      $("#ill").keyup(function(){
          // Getting the current value of textarea
          ill = '<input type="checkbox" id="tag9" name="tag_b[]" value="1"><label for="tag9">'+ $(this).val()+'</label>';
          
          // Setting the Div content
          $("#output_ill").html(ill);
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
>>>>>>> e849eef808f74fa713956ba8f1bff8fa29fbe892
