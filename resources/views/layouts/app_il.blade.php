<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical administrator - Special Page</title>
	<!-- <link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('lumino/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lumino/css/datepicker3.css') }}" rel="stylesheet">
    <link href="{{ asset('lumino/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('lumino/css/bootstrap-glyphicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{  asset('lumino/dist/timepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
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
        .clear{
            clear: both;
            margin-bottom: 10px;
        }
    </style>
    
</head>
<body>
  
@if (Request::is('illness_list') OR Request::is('add_illness'))  
<div class="content-container illness_container">
    <header>
        <h1 class="dashboard">病気と知識 <br><small>UI of Illness table</small></h1>
        <div class="right">
            <button onclick="window.location='{{ url("add_illness") }}'" class="doc-link">病気と知識 新規登録 <br> Illness new registration</button>
            <img src="images/medical-logo.png" alt="">
        </div>
    </header>   
    <div class="sub-header">
        <div class="red">公開速報</div>
        <p>2019/07/18 Illness 子どもの夏の感染症が投稿されました。</p>
    </div>
</div>
@endif

<div class="nav-container">
    <nav class="clearfix">
        <div class="nav-photo-container">
            <div class="nav-photo wow bounceIn" data-wow-delay="0.5s" onclick="" style="background-image: url(images/admin-avatar.png);"></div>
            <a href="my-account" title="My Account">Editor</a><br>
            Medical T. 編集部<br>A.Ito<br><a class="push-btn">ログアウト<span class="lnr lnr-chevron-down"></span></a>
            <div class="accnt-container">
                <div class="accnt-box">
                    <div class="accnt-arrow"></div>
                    <ul>
                        <li><a href="viewall-admin">View Profile</a></li>
                        <li>
                        <!-- <a href="../index.html">Logout</a> -->
                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                <li class="active" id="illness_menu"><small class="pink"></small><a class="pink" href="illness_list"><span class="icon"><img src="images/icon-illness.png"></span><span>病気と知識<br>UI of Illness</span></a></li>
                <li><small class="pink"></small><a class="pink" href="special_list"><span class="icon"><img src="images/icon-special.png"></span><span>特集<br>UI of Special</span></a></li>
                <li><small class="yellow"></small><a class="yellow"href="topics/list"><span class="icon"><img src="images/icon-topics.png"></span><span>最新トピックス<br>Topics</span></a></li>
                <li><small class="yellow"></small><a class="yellow" href="daily_list"><span class="icon"><img src="images/icon-select.png"></span><span>デイリーピックアップ<br>Daily Select</span></a></li>
                <li><small class="blue"></small><a class="blue" href="doctor_list"><span class="icon"><img src="images/icon-doctable.png"></span><span>医師・医療従事者<br>UI of Doctor Table</span></a></li>
                <li><small class="sky"></small><a class="sky" href="hospital_list"><span class="icon"><img src="images/icon-hosptable.png"></span><span>医療機関<br>UI of Hospital Table</span></a></li>
                <li><small class="sky"></small><a class="sky" href="column_list"><span class="icon"><img src="images/icon-column.png"></span><span>コラム<br>Column</span></a></li>
                <li><small class="violet"></small><a class="violet" href="equipment_list"><span class="icon"><img src="images/icon-medequipment.png"></span><span>医療機器情報<br>Medical Equipment</span></a></li>
                <li><small class="violet"></small><a class="violet" href="medicine_list"><span class="icon"><img src="images/icon-medicine.png"></span><span>薬情報<br>Medicine</span></a></li>
                <li><small class="green"></small><a class="green" href="magazine-list"><span class="icon"><img src="images/icon-sakuramagazine.png"></span><span>誌面紹介<br>Sakura Magazine</span></a></li>
                <li><small></small><a href=""><span class="icon"><img src="images/icon-settings.png"></span><span>設定<br>Settings</span></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="main-content add">
    <div class="main">
        

 			  @yield("content")
 		
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
<!-- <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
<!-- jQuery Modal -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->

<!-- CKeditor -->
<script>
    CKEDITOR.replace('txt_ckeditor[]');
    CKEDITOR.add 
</script>

<!-- Count character starts -->
<script type="text/javascript">
    var cnt = 0;
    $('input.ill_shldr').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars').text(textlen);
    });
    $('input.ill').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars2').text(textlen);
    });
    $('textarea.cmt').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars3').text(textlen);
    });
    $('textarea.sm1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars4').text(textlen);
    });
    $('textarea.sm2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars5').text(textlen);
    });
    $('textarea.sm3').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars6').text(textlen);
    });
    $('textarea.sm4').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars7').text(textlen);
    });
    $('textarea.sm5').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars8').text(textlen);
    });
    $('textarea.sh').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars9').text(textlen);
    });
    $('textarea.sh2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars10').text(textlen);
    });
    $('textarea.sh3').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars11').text(textlen);
    });
    $('textarea.sh4').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars12').text(textlen);
    });
    $('textarea.sh5').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars13').text(textlen);
    });
    $('textarea.sh_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars14').text(textlen);
    });
    $('textarea.sh2_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars15').text(textlen);
    });
    $('textarea.sh3_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars16').text(textlen);
    });
    $('textarea.sh4_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars17').text(textlen);
    });
    $('textarea.sh5_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars18').text(textlen);
    });
    $('textarea.seo').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars19').text(textlen);
    });
    $('textarea.mt1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars20').text(textlen);
    });
    $('textarea.mt2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars21').text(textlen);
    });
</script>
<!-- Count character ends -->

<script type="text/javascript">
    $(document).ready(function(){
        $('#img-wrapper').hide();
        $("#show_img").click(function(){
            $("#img-wrapper").show();
        });

        $('#graph-wrapper').hide();
        $("#show_graph").click(function(){
            $("#graph-wrapper").show();
        });
    });
    
</script>

<!-- Add field starts -->
<script type="text/javascript">
    $(document).ready(function() {
        var wrapper         = $(".wrapper"); //Fields wrapper
        var add_button      = $(".addsum1"); //Add button ID
        var add_ck          = $(".add-ck"); //Add button ID
        var wrapper2         = $(".wrapper2"); //Fields wrapper
        var add_button3      = $(".sh-btn"); //Add button ID
        var wrapper3         = $(".wrapper3"); //Fields wrapper
        var add_button4      = $(".sh-btn2"); //Add button ID
        var wrapper4         = $(".wrapper4"); //Fields wrapper
        var add_button5      = $(".add5"); //Add button ID
        var wrapper5         = $(".wrapper5"); //Fields wrapper
        var wrapper6         = $(".wrapper6"); //Fields wrapper
        var wrapper7         = $(".wrapper7"); //Fields wrapper
        var wrapper8         = $(".wrapper8"); //Fields wrapper
        var wrapper9         = $(".wrapper9"); //Fields wrapper
        var i=0;
        
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            
            i++;
            $(wrapper).append('<div class="form-group"><label class="control-label cols-15"></label><div class="cols-5"><textarea class="form-control sm5" id="sm'+i+'" name="sm[]" rows="3" maxlength="200" placeholder="この文章はダミーで す。文字の大きさ、量、字間 、行間 等を確認す るために入れています。この文章は"></textarea></div><div class="cols-2"></div></div><div class="clear"></div>'); //add input box            
             
        });

        // $('.add-ck').on('click', add_ck);
        // var i=0;
        // function add_ck(e) {
        //     e.preventDefault();
        //     var copy = $('#addanother').clone();

        //     var lplus=i+1;

        //     // $(copy).find('div#cke_txt_ckeditor\\[0\\]').remove();
        //     // $(copy).find('script').remove();
        //     //$(copy).find('textarea[name=txt_ckeditor\\[0\\]]').attr('id', 'txt_ckeditor'+lplus);
        //     $(copy).find('select[name=sub_head1a\\[0\\]').attr('id', 'head'+lplus);
        //     $(copy).find('input[name=sub_head1b\\[0\\]]').attr('id', 's_head'+lplus);
        //     //$(copy).find('textarea[name=txt_ckeditor[]]').attr('id', 'txt_ckeditor'+lplus);

        //     $(copy).find('.add-ck').remove();
        //     $(wrapper2).append($(copy).html()+ '<div class="clear"></div>');
        //     CKEDITOR.replace('txt_ckeditor['+lplus+']');
        //     i++;  

        // }
        var ck=1;
        $(add_ck).click(function(e){ //on add input button click
            e.preventDefault();
            
            ck++;
            $(wrapper2).append('<div class="txt_edtr"><div class="form-group"><label class="control-label cols-15">病気カテゴリー<br><span>Subheading</span></label><div class="cols-4"><select name="sub_head1a[]" id="head'+ck+'" class="form-control"><option value="">選択してください</option><option value="基礎知識">基礎知識</option><option value="近年の動向">近年の動向</option><option value="症状">症状</option><option value="原因">原因</option><option value="検査方法">検査方法</option><option value="検診体験記">検診体験記</option><option value="検診から治療まで">検診から治療まで</option><option value="治療方法">治療方法</option><option value="療養と副作用">療養と副作用</option><option value="合併症<">合併症</option><option value="自宅療法（療養方法・再発防止など）">自宅療法（療養方法・再発防止など）</option><option value="体験記">体験記</option><option value="FAQ">FAQ</option><option value="予防・対策方法">予防・対策方法</option></select></div></div><div class="form-group"><label class="control-label cols-15"></label><div class="cols-4"><input type="text" class="form-control" id="s_head'+ck+'" placeholder="選択項目にない場合に入力" name="sub_head1b[]" required></div></div><div class="form-group editor"><label class="control-label cols-15">本文<br><span>Text of Subheading</span></label><div class="cols-6"><div class="cols-10"><textarea class="form-control ck" name="txt_ckeditor['+ck+']" id="txt_ck'+ck+'" placeholder=""></textarea></div></div><div class="cols-1 relative"></div></div><div class="clear"></div></div>'); //add input box            
            CKEDITOR.replace('txt_ckeditor['+ck+']');
            CKEDITOR.add 
        });

        $(add_button3).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper3).append('<div class="col-sm-8"><textarea class="form-control sh" name="sh[]" maxlength="30"></textarea></div><div class="col-sm-2"> リスク度<select name="rl"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div><div class="clear"></div>'); //add input box
            
        });

        $(add_button4).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper4).append('<div class="col-sm-8"><textarea class="form-control sh_b" name="sh_b[]" maxlength="30"></textarea></div><div class="col-sm-2"> リスク度<select name="rl2"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></div><div class="clear"></div>'); //add input box
            
        });

        $(add_button5).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper5).append('<div class="cols-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2[]"></div><div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div><div class="cols-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div>'); //add input box
            
        });

        $('.add6').on('click', add6);
        function add6(e) {
            e.preventDefault();
            var copy2 = $('#addanother2').clone();

            $(wrapper6).append($(copy2).html()+ '<div class="clear"></div>');

        }

        $('.add7').on('click', add7);
        function add7(e) {
            e.preventDefault();
            var copy3 = $('#addanother3').clone();

            $(wrapper7).append($(copy3).html()+ '<div class="clear"></div>');

        }

        $('.add8').on('click', add8);
        function add8(e) {
            e.preventDefault();
            var copy4 = $('#addanother4').clone();

            (copy4).find('.add8').remove();
            $(wrapper8).append($(copy4).html()+ '<div class="clear"></div>');

        }

        $('.add9').on('click', add9);
        function add9(e) {
            e.preventDefault();
            var copy5 = $('#addanother5').clone();

            (copy5).find('.add9').remove();
            $(wrapper9).append($(copy5).html()+ '<div class="clear"></div>');

        }

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

        
        $("#tx2illness").attr("placeholder", "この特集内容に関する先生からのコメントをお願いします。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。").val('').focus().blur();

    });

// CKEDITOR.replace( 'text_of_heading' );
// CKEDITOR.add
    
</script>
<!-- Add field ends -->
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

<!-- Key up functions -->
<script>
$(document).ready(function(){
    $("#kword1").keyup(function(){
        // Getting the current value of textarea
        kword1 = '<div class="cols-3"><input type="checkbox" id="tag1" name="tag[]" value="1"><label for="tag1">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output").html(kword1);
    });
    $("#kword2").keyup(function(){
        // Getting the current value of textarea
        kword2 = '<div class="cols-3"><input type="checkbox" id="tag2" name="tag[]" value="1"><label for="tag2">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output2").html(kword2);
    });
    $("#kword3").keyup(function(){
        // Getting the current value of textarea
        kword3 = '<div class="cols-3"><input type="checkbox" id="tag3" name="tag[]" value="1"><label for="tag3">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output3").html(kword3);
    });
    $("#kword4").keyup(function(){
        // Getting the current value of textarea
        kword4 = '<div class="cols-3"><input type="checkbox" id="tag4" name="tag[]" value="1"><label for="tag4">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output4").html(kword4);
    });
    $("#kword5").keyup(function(){
        // Getting the current value of textarea
        kword5 = '<div class="cols-3"><input type="checkbox" id="tag5" name="tag[]" value="1"><label for="tag5">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output5").html(kword5);
    });
    $("#kword6").keyup(function(){
        // Getting the current value of textarea
        kword6 = '<div class="cols-3"><input type="checkbox" id="tag6" name="tag[]" value="1"><label for="tag6">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output6").html(kword6);
    });
    $("#kword7").keyup(function(){
        // Getting the current value of textarea
        kword7 = '<div class="cols-3"><input type="checkbox" id="tag7" name="tag[]" value="1"><label for="tag7">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output7").html(kword7);
    });
    $("#kword8").keyup(function(){
        // Getting the current value of textarea
        kword8 = '<div class="cols-3"><input type="checkbox" id="tag8" name="tag[]" value="1"><label for="tag8">'+ $(this).val()+'</label></div>';
        
        // Setting the Div content
        $("#output8").html(kword8);
    });
    $("#ill").keyup(function(){
        // Getting the current value of textarea
        ill = '<input type="checkbox" id="tag9" name="tag_b" value="1"><label for="tag9">'+ $(this).val()+'</label>';
        ill2 = ''+ $(this).val()+'';
        ill3 = ''+ $(this).val()+'';
        
        // Setting the Div content
        $("#output_ill").html(ill);
        $("#output_ill2").html(ill2);
        $("#output_ill3").html(ill3);
    });
});
</script>

</body>
</html>