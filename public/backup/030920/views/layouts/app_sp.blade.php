<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical administrator - Special Page</title>
	<link href="{{ asset('lumino/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/styles.css') }}" rel="stylesheet">
	<!-- <link href="{{ asset('css/modal.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('lumino/css/bootstrap-glyphicons.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{  asset('lumino/dist/timepicker.min.css') }}">
	<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
	<!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
     <style type="text/css">
        textarea{
            min-height: 100px;
        }
        .clear{
            clear: both;
            margin-bottom: 10px;
        }
    </style>
    
</head>
<body>
<div class="content-container special_container">
	<header>
		<h1 class="dashboard">特集 <br><small>Special table</small></h1>
		<div class="right">
			<button onclick="window.location='{{ url("add_special") }}'" class="doc-link">特集 <br> Special new registration</button>
			<img src="../images/medical-logo.png" alt="">
		</div>
	</header>	
	<div class="sub-header">
		<div class="red">公開速報</div>
		<p>2019/07/18 Special 子どもの夏の感染症が投稿されました。</p>
	</div>
</div>

<div class="nav-container">
	<nav class="clearfix">
		<div class="nav-photo-container">
			<div class="nav-photo wow bounceIn" data-wow-delay="0.5s" onclick="" style="background-image: url(../images/admin-avatar.png);"></div>
			<a href="my-account" title="My Account">Editor</a><br>
			Medical T. 編集部<br>A.Ito<br><a class="push-btn">ログアウト<span class="lnr lnr-chevron-down"></span></a>
			<div class="accnt-container">
				<div class="accnt-box">
					<div class="accnt-arrow"></div>
					<ul>
						<li><a href="viewall-admin">View Profile</a></li>
						<li>
						<!-- <a href="../index.html">Logout</a> -->
						<a href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <!-- {{ __('Logout') }} -->
                                    </a>
									<form id="logout-form" action="#" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="searchContainer">
		  <i class="fa fa-search searchIcon"></i>
		  <input class="searchBox" type="search" name="search" placeholder="Search">
		</div>
		<div class="navy">
			<ul class="sidebar-nav">
				<li class=""><small></small><a class="home_menu" href="home"><span class="icon"><img src="images/icon-home.png"></span><span>ホーム<br>Home</span></a></li>
				<li id="illness_menu"><small class="pink"></small><a class="pink" href="illness_list"><span class="icon"><img src="images/icon-illness.png"></span><span>病気と知識<br>Illness</span></a></li>
				<li class="active"><small class="pink"></small><a class="pink" href="special_list"><span class="icon"><img src="images/icon-special.png"></span><span>特集<br>Special</span></a></li>
				<li><small class="yellow"></small><a class="yellow" href="topics_list"><span class="icon"><img src="images/icon-topics.png"></span><span>最新トピックス<br>Topics</span></a></li>
				<li><small class="yellow"></small><a class="yellow" href="daily_list"><span class="icon"><img src="images/icon-select.png"></span><span>デイリーピックアップ<br>Daily Select</span></a></li>
				<li><small class="blue"></small><a class="blue" href="doctor_list"><span class="icon"><img src="images/icon-doctable.png"></span><span>医師・医療従事者<br>Doctor</span></a></li>
				<li><small class="sky"></small><a class="sky" href="hospital_list"><span class="icon"><img src="images/icon-hosptable.png"></span><span>医療機関<br>Hospital</span></a></li>
				<li><small class="sky"></small><a class="sky" href="column_list"><span class="icon"><img src="images/icon-column.png"></span><span>コラム<br>Column</span></a></li>
				<li><small class="violet"></small><a class="violet" href="equipment_list"><span class="icon"><img src="images/icon-medequipment.png"></span><span>医療機器情報<br>Medical Equipment</span></a></li>
				<li><small class="violet"></small><a class="violet" href="medicine_list"><span class="icon"><img src="images/icon-medicine.png"></span><span>薬情報<br>Medicine</span></a></li>
				<li><small class="green"></small><a class="green" href="magazine_list"><span class="icon"><img src="images/icon-sakuramagazine.png"></span><span>誌面紹介<br>Sakura Magazine</span></a></li>
				<li><small></small><a href=""><span class="icon"><img src="images/icon-settings.png"></span><span>設定<br>Settings</span></a></li>
			</ul>
		</div>
	</nav>
</div>
<div class="main-content add">
    <div class="main">
        <!-- <div class="row"> -->

 			@yield("content")
 		<!-- </div> -->
 	</div>
</div>

 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <!-- <script src="lumino/js/jquery-1.11.1.min.js"></script> -->
	<!-- <script src="lumino/js/bootstrap.min.js"></script> -->
 	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('lumino/dist/timepicker.min.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="lumino/js/chart.min.js"></script>
	<script src="lumino/js/chart-data.js"></script>
	<script src="lumino/js/easypiechart.js"></script>
	<script src="lumino/js/easypiechart-data.js"></script>
	<script src="lumino/js/bootstrap-datepicker.js"></script>
  <script src="lumino/js/custom.js"></script>
  <script type="text/javascript" src="https://cdn.datas.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script> 
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  
<!-- jQuery Modal -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->

<!-- CKeditor -->
<script>
    CKEDITOR.replace('lead_ckeditor');
    CKEDITOR.add 
</script>
<script>
    CKEDITOR.replace('txt_ckeditor');
    CKEDITOR.add 
</script>
<script>
    CKEDITOR.replace('txt2_ckeditor');
    CKEDITOR.add 
</script>
<script>
    CKEDITOR.replace('lead_ckeditor_two');
    CKEDITOR.add 
</script>
<script>
    CKEDITOR.replace('txt_ckeditor_two');
    CKEDITOR.add 
</script>
<script>
    CKEDITOR.replace('txt2_ckeditor_two');
    CKEDITOR.add 
</script>

<!-- Count character starts -->
<script type="text/javascript">
    var cnt = 0;
    $('input.sts').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars').text(textlen);
    });
    $('input.st').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars2').text(textlen);
    });
    $('textarea.cmt').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars3').text(textlen);
    });
    $('textarea.seo').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars4').text(textlen);
    });
    $('textarea.mt1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars5').text(textlen);
    });
    $('textarea.mt2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars6').text(textlen);
		});
		
		$('input.sts').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars_b').text(textlen);
    });
    $('input.st').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars2_b').text(textlen);
    });
    $('textarea.cmt').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars3_b').text(textlen);
    });
    $('textarea.seo').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars4_b').text(textlen);
    });
    $('textarea.mt1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars5_b').text(textlen);
    });
    $('textarea.mt2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars6_b').text(textlen);
    });
</script>
<!-- Count character ends -->

<script type="text/javascript">
;(function($) {

// Browser supports HTML5 multiple file?
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

}(jQuery));

$('input[type=file]').customFile();
</script>

<!-- Add field starts -->
<script type="text/javascript">
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
            
        //     $(wrapper6).append('<div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="cols-3"><select name="tag_dep[]" class="form-control"><option value="">選択してください</option><option value="内科">内科</option><option value="呼吸器内科">呼吸器内科</option><option value="循環器内科">循環器内科</option><option value="消化器内科">消化器内科</option><option value="心臓内科">心臓内科</option><option value="血液内科">血液内科</option><option value="気管食道内科">気管食道内科</option><option value="胃腸内科">胃腸内科</option><option value="腫瘍内科">腫瘍内科</option><option value="糖　尿病内科">糖　尿病内科</option><option value="代謝内科">代謝内科</option><option value="内分泌内科">内分泌内科</option><option value="脂質代謝内科">脂質代謝内科</option><option value="腎臓内科">腎臓内科</option><option value="神経内科">神経内科</option><option value="心療内科">心療内科</option><option value="感染症内科">感染症内科</option><option value="漢方内科">漢方内科</option><option value="老年内科">老年内科</option><option value="女性内科">女性内科</option><option value="新生児内科">新生児内科</option><option value="性感染症内科">性感染症内科</option><option value="内視鏡内科">内視鏡内科</option><option value="人工透析内科">人工透析内科</option><option value="疼痛緩和内科">疼痛緩和内科</option><option value="ペインクリニック内科">ペインクリニック内科</option><option value="アレルギー疾患内科">アレルギー疾患内科</option><option value="内科（ペインクリニック）">内科（ペインクリニック）</option><option value="内科（循環器）">内科（循環器）</option><option value="内科（薬物療法）">内科（薬物療法）</option><option value="内科（感染症）">内科（感染症）</option><option value="内科（骨髄移植）">内科（骨髄移植）</option><option value="外科">外科</option><option value="呼吸器外科">呼吸器外科</option><option value="心臓血管外科">心臓血管外科</option><option value="心臓外科">心臓外科</option><option value="消化器外科">消化器外科</option><option value="乳腺外科">乳腺外科</option><option value="小児外科">小児外科</option><option value="気管食道外科">気管食道外科</option><option value="肛門外科">肛門外科</option><option value="整形外科">整形外科</option><option value="脳神経外科">脳神経外科</option><option value="形成外科">形成外科</option><option value="美容外科">美容外科</option><option value="腫瘍外科">腫瘍外科</option><option value="移植外科">移植外科</option><option value="頭頸部外科">頭頸部外科</option> <option value="胸部外科">胸部外科</option><option value="腹部外科">腹部外科</option><option value="肝臓外科">肝臓外科</option><option value="膵臓外科">膵臓外科</option><option value="胆のう外科">胆のう外科</option><option value="食道外科">食道外科</option><option value="大腸外科">大腸外科</option><option value="内視鏡外科">内視鏡外科</option><option value="ペインクリニック外科">ペインクリニック外科</option><option value="外科（内視鏡）">外科（内視鏡）</option><option value="外科（がん）">外科（がん）</option><option value="精神科">精神科</option><option value="アレルギー科">アレルギー科</option><option value="リウマチ科">リウマチ科</option><option value="小児科">小児科</option><option value="皮膚科">皮膚科</option><option value="泌尿器科">泌尿器科</option><option value="産婦人科">産婦人科</option><option value="産科">産科</option><option value="婦人科">婦人科</option><option value="眼科">眼科</option><option value="耳鼻いんこう科">耳鼻いんこう科</option><option value="リハビリテーション科">リハビリテーション科</option><option value="放射線科">放射線科</option><option value="放射線診断科">放射線診断科</option><option value="放射線治療科">放射線治療科</option><option value="病理診断科">病理診断科</option><option value="臨床検査科">臨床検査科</option><option value="救急科">救急科</option><option value="児童精神科">児童精神科</option><option value="老年精神科">老年精神科</option><option value="小児眼科">小児眼科</option><option value="小児耳鼻いんこう科">小児耳鼻いんこう科</option><option value="小児皮膚科">小児皮膚科</option><option value="気管食道・耳鼻いんこう科">気管食道・耳鼻いんこう科</option><option value="腫瘍放射線科">腫瘍放射線科</option><option value="男性泌尿器科">男性泌尿器科</option><option value="神経泌尿器科">神経泌尿器科</option><option value="小児泌尿器科">小児泌尿器科</option><option value="小児科（新生児）">小児科（新生児）</option><option value="泌尿器科（不妊治療）">泌尿器科（不妊治療）</option><option value="泌尿器科（人工透析）">泌尿器科（人工透析）</option><option value="産婦人科（生殖医療）">産婦人科（生殖医療）</option><option value="美容皮膚科">美容皮膚科</option></select></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
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

</script>
<!-- Add field ends -->

<!-- Key up functions -->
<script>
$(document).ready(function(){
    $("#kword1").keyup(function(){
        // Getting the current value of textarea
        kword1 = '<div class="cols-3"><input type="checkbox" id="tag1" name="tag_ch[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output").html(kword1);
    });
    $("#kword2").keyup(function(){
        // Getting the current value of textarea
        kword2 = '<div class="cols-3"><input type="checkbox" id="tag2" name="tag_ch[]" value="1"><label for="tag2">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output2").html(kword2);
    });
    $("#kword3").keyup(function(){
        // Getting the current value of textarea
        kword3 = '<div class="cols-3"><input type="checkbox" id="tag3" name="tag_ch[]" value="1"><label for="tag3">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output3").html(kword3);
    });
    $("#kword4").keyup(function(){
        // Getting the current value of textarea
        kword4 = '<div class="cols-3"><input type="checkbox" id="tag4" name="tag_ch[]" value="1"><label for="tag4">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output4").html(kword4);
    });
    $("#kword5").keyup(function(){
        // Getting the current value of textarea
        kword5 = '<div class="cols-3"><input type="checkbox" id="tag5" name="tag_ch[]" value="1"><label for="tag5">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output5").html(kword5);
    });
    $("#kword6").keyup(function(){
        // Getting the current value of textarea
        kword6 = '<div class="cols-3"><input type="checkbox" id="tag6" name="tag_ch[]" value="1"><label for="tag6">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output6").html(kword6);
    });
    $("#kword7").keyup(function(){
        // Getting the current value of textarea
        kword7 = '<div class="cols-3"><input type="checkbox" id="tag7" name="tag_ch[]" value="1"><label for="tag7">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output7").html(kword7);
    });
    $("#kword8").keyup(function(){
        // Getting the current value of textarea
        kword8 = '<div class="cols-3"><input type="checkbox" id="tag8" name="tag_ch[]" value="1"><label for="tag8">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output8").html(kword8);
    });
});
</script>


</body>
</html>