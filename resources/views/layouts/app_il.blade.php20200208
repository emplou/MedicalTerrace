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
@if (Request::is('doctor_list') OR Request::is('add_doctor'))
<div class="content-container">
    <header>
        <h1 class="dashboard">医師・医療従事者 <br><small>UI of Doctor table</small></h1>
        <div class="right">
            <button onclick="window.location='{{ url("add_doctor") }}'" class="doc-link">医師・医療従事者 新規登録 <br> Doctor new registration</button>
            <img src="../../images/medical-logo.png" alt="">
        </div>
    </header>   
    <div class="sub-header">
        <div class="red">公開速報</div>
        <p>2019/07/18 Doctor 子どもの夏の感染症が投稿されました。</p>
    </div>
</div>
@endif

@if (Request::is('illness_list') OR Request::is('add_illness'))  
<div class="content-container illness_container">
    <header>
        <h1 class="dashboard">医師・医療従事者 <br><small>UI of Illness table</small></h1>
        <div class="right">
            <button onclick="window.location='{{ url("add_illness") }}'" class="doc-link">医師・医療従事者 新規登録 <br> Illness new registration</button>
            <img src="../../images/medical-logo.png" alt="">
        </div>
    </header>   
    <div class="sub-header">
        <div class="red">公開速報</div>
        <p>2019/07/18 Illness 子どもの夏の感染症が投稿されました。</p>
    </div>
</div>
@endif

@if (Request::is('special_list') OR Request::is('add_special'))  
<div class="content-container special_container">
    <header>
        <h1 class="dashboard">医師・医療従事者 <br><small>UI of Special table</small></h1>
        <div class="right">
            <button onclick="window.location='{{ url("add_special") }}'" class="doc-link">医師・医療従事者 新規登録 <br> Special new registration</button>
            <img src="../../images/medical-logo.png" alt="">
        </div>
    </header>   
    <div class="sub-header">
        <div class="red">公開速報</div>
        <p>2019/07/18 Special 子どもの夏の感染症が投稿されました。</p>
    </div>
</div>
@endif

@if (Request::is('hospital_list') OR Request::is('add_hospital'))  
<div class="content-container hospital_container">
    <header>
        <h1 class="dashboard">医師・医療従事者 <br><small>UI of Hospital table</small></h1>
        <div class="right">
            <button onclick="window.location='{{ url("add_hospital") }}'" class="doc-link"> 病院登録 <br> Hospital new registration</button>
            <img src="../../images/medical-logo.png" alt="">
        </div>
    </header>   
    <div class="sub-header">
        <!-- <div class="red">公開速報</div> -->
        <p><h2>{!! Auth::user()->name !!}</h2></p>
    </div>
</div>
@endif

<div class="nav-container">
    <nav class="clearfix">
        <div class="nav-photo-container">
            <div class="nav-photo wow bounceIn" data-wow-delay="0.5s" onclick="" style="background-image: url(../../images/admin-avatar.png);"></div>
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
                <li class=""><small></small><a class="home_menu" href="home"><span class="icon"><img src="../../images/icon-home.png"></span><span>ホーム<br>Home</span></a></li>
                <li id="illness_menu"><small class="pink"></small><a class="pink" href="illness_list"><span class="icon"><img src="../../images/icon-illness.png"></span><span>病気と知識<br>UI of Illness</span></a></li>
                <li><small class="pink"></small><a class="pink" href="special_list"><span class="icon"><img src="../../images/icon-special.png"></span><span>特集<br>UI of Special</span></a></li>
                <li><small class="yellow"></small><a class="yellow"href=""><span class="icon"><img src="../../images/icon-topics.png"></span><span>最新トピックス<br>Topics</span></a></li>
                <li><small class="yellow"></small><a class="yellow" href=""><span class="icon"><img src="../../images/icon-select.png"></span><span>デイリーピックアップ<br>Daily Select</span></a></li>
                <li><small class="blue"></small><a class="blue" href="doctor_list"><span class="icon"><img src="../../images/icon-doctable.png"></span><span>医師・医療従事者<br>UI of Doctor Table</span></a></li>
                <li><small class="sky"></small><a class="sky" href="hospital_list"><span class="icon"><img src="../../images/icon-hosptable.png"></span><span>医療機関<br>UI of Hospital Table</span></a></li>
                <li><small class="sky"></small><a class="sky" href=""><span class="icon"><img src="../../images/icon-column.png"></span><span>コラム<br>Column</span></a></li>
                <li><small class="violet"></small><a class="violet" href=""><span class="icon"><img src="../../images/icon-medequipment.png"></span><span>医療機器情報<br>Medical Equipment</span></a></li>
                <li><small class="violet"></small><a class="violet" href=""><span class="icon"><img src="../../images/icon-medicine.png"></span><span>薬情報<br>Medicine</span></a></li>
                <li><small class="green"></small><a class="green" href=""><span class="icon"><img src="../../images/icon-sakuramagazine.png"></span><span>誌面紹介<br>Sakura Magazine</span></a></li>
                <li><small></small><a href=""><span class="icon"><img src="../../images/icon-settings.png"></span><span>設定<br>Settings</span></a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="main-content">
    <div class="main">
        <!-- <div class="row"> -->

 			@yield("content")
 		<!-- </div> -->
 	</div>
</div>

 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script> -->
<script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<!-- CKeditor -->
<script>
    CKEDITOR.replace('txt_ckeditor');
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
    $('textarea.sm').keyup(function() {
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
    $('textarea.sh').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars8').text(textlen);
    });
    $('textarea.sh2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars9').text(textlen);
    });
    $('textarea.sh3').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars10').text(textlen);
    });
    $('textarea.sh4').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars11').text(textlen);
    });
    $('textarea.sh_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars12').text(textlen);
    });
    $('textarea.sh2_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars13').text(textlen);
    });
    $('textarea.sh3_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars14').text(textlen);
    });
    $('textarea.sh4_b').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars15').text(textlen);
    });
    $('textarea.seo').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars16').text(textlen);
    });
    $('textarea.mt1').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars17').text(textlen);
    });
    $('textarea.mt2').keyup(function() {
      var textlen = cnt + $(this).val().length;
      $('#rchars18').text(textlen);
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
        var add_button      = $(".sm-btn"); //Add button ID
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
    
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            
            $(wrapper).append('<div class="col-sm-10"><textarea class="form-control sm" name="sm[]" maxlength="46"></textarea></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box            
        });

        $('.add-ck').on('click', add_ck);
        var i=0;
        function add_ck(e) {
            e.preventDefault();
            var copy = $('#addanother').clone();

            var lplus=i+1;

            $(copy).find('.add-ck').remove();
            $(wrapper2).append($(copy).html()+ '<div class="clear"></div>');
            CKEDITOR.replace('txt_ckeditor['+lplus+']');
            i++;  

        }

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
            
            $(wrapper5).append('<div class="col-sm-3"><input type="text" class="form-control" placeholder="必要に応じて記載" name="h2[]"></div><div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div><div class="col-sm-3"><input type="text" class="form-control" placeholder="" name="h2[]"></div><div class="col-sm-1"></div><div class="clear"></div>'); //add input box
            
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

    });

// CKEDITOR.replace( 'text_of_heading' );
// CKEDITOR.add
    
</script>
<!-- Add field ends -->



</body>
</html>