<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Medical administrator - Dashboard</title>
	<!-- <link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet"> -->
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
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
    <style>
    .container{
	    margin-top:20px;
	}
	.image-preview-input {
	    position: relative;
		overflow: hidden;
		margin: 0px;    
	    color: #333;
	    background-color: #fff;
	    border-color: #ccc;    
	}
	.image-preview-input input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.image-preview-input-title {
	    margin-left:2px;
	}
	.push-btn {
    color: #fff;
    cursor: pointer;
    display: block;
    width: 100px;
    padding: 7px 5px;
    margin: 5px auto 0;
    border-radius: 10px;
    border: 1px solid #c4eaea;
}
.accnt-container {
    width: 100%;
    position: absolute;
}
.accnt-box {
    display: none;
    width: 90px;
    height: 80px;
    color: grey;
    background: #fff;
    margin: 0 auto;
    z-index: 10;
    overflow: hidden;
    position: relative;
    border-radius: 3px;
}

.main-content{
	font-family: Serif;
	/* padding: 3%; */
}
div.container {
        width: 100%;
    }

	.btn-search {
	  background: #424242;
	  border-radius: 0;
	  color: #fff;
	  border-width: 1px;
	  border-style: solid;
	  border-color: #1c1c1c;
	}
	.btn-search:link, .btn-search:visited {
	  color: #fff;
	}
	.btn-search:active, .btn-search:hover {
	  background: #1c1c1c;
	  color: #fff;
	}

	.container{
    margin-top:20px;
}
.image-preview-input {
    position: relative;
	overflow: hidden;
	margin: 0px;    
    color: #333;
    background-color: #fff;
    border-color: #ccc;    
}
.image-preview-input input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	margin: 0;
	padding: 0;
	font-size: 20px;
	cursor: pointer;
	opacity: 0;
	filter: alpha(opacity=0);
}
.image-preview-input-title {
    margin-left:2px;
}

.form- {
	width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

input.form-  {
    border: 1px solid #ddd;
    box-shadow: none;
    height: 46px;
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

 	<script src="lumino/js/jquery-1.11.1.min.js"></script>
	<script src="lumino/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('lumino/dist/timepicker.min.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>
	<script src="lumino/js/chart.min.js"></script>
	<script src="lumino/js/chart-data.js"></script>
	<script src="lumino/js/easypiechart.js"></script>
	<script src="lumino/js/easypiechart-data.js"></script>
	<script src="lumino/js/bootstrap-datepicker.js"></script>
    <script src="lumino/js/custom.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.material.min.js"></script> 
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
	<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<!-- <script src="{{ asset('lumino/dist/wickedpicker.js') }}"></script> -->
   <!-- jQuery Modal -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};

$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        }, 
         function () {
           $('.image-preview').popover('hide');
        }
    );    
});

$(document).ready(function() {
	

});
// $(document).on('click', 'illness_menu', function(e){ 
// 	alert('hoy!');
// 	 $('.illness_container').css('display','block');
// 	 $('.illness_menu').addClass('active');
// 	 e.preventDefault(); 
// });

// Get the modal
// var modal = document.getElementById("myModal");

// var btn = document.getElementById("myBtn");
// var span = document.getElementsByClassName("close")[0];

// btn.onclick = function() {
//   modal.style.display = "block";
// }

// span.onclick = function() {
//   modal.style.display = "none";
// }

// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
//end modal


$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }        
        reader.readAsDataURL(file);
	});  
	
});

// $(document).ready(function() {
//     $('#doctor_list').DataTable();
// });

// $(document).ready(function() {
//     $('#list').DataTable( {
//         columnDefs: [
//             {
//                 targets: [ 0, 1, 2 ],
//                 className: 'mdl-data-table__cell--non-numeric'
//             }
//         ]
//     } );
// } );

$(document).ready(function() {
    $('#list').DataTable();

	// $('.timepicker').wickedpicker();

// 	$('#timepicker').datetimepicker({
//     datepicker: true
// });
} );


$(document).ready(function() {
	var selector = '.sidebar-nav li';
    var url = window.location.href;
    var target = url.split('/');
     $(selector).each(function(){
        if($(this).find('a').attr('href')===(target[target.length-1])){
          $(selector).removeClass('active');
          $(this).removeClass('active').addClass('active');
		  $(this).css("filter", "brightness(60%)");
		//   console.log('yeah');
        }
     });
});

CKEDITOR.replace( 'text_of_heading' );
CKEDITOR.add
// CKEDITOR.replace( 'Text_of_Subheading_special');

</script>

<!-- <script>
	CKEDITOR.replace( 'Text_of_Subheading_special' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'Text_of_Subheading_two_special' );
	CKEDITOR.add 
</script> -->

<script>
	CKEDITOR.replace( 'Text_of_Subheading_special' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'Text_of_Subheading_two_special' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'text_subheading_hospital' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'med_subj_text_subheading_hospital' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'feature_text_subheading_hospital' ); 
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'equipment_text_subheading_hospital' );
	CKEDITOR.add 
</script>
<script>
	CKEDITOR.replace( 'staff_comment_hospital' );
	CKEDITOR.add 
</script>
<script>
	        document.addEventListener("DOMContentLoaded", function(event)
			{
			    timepicker.load({
			        interval: 15,
			        defaultHour: 0
			    });
			});
			
		</script>


<script>
// $('.add').on('click', add);
// function add(e) {
	
// //   var new_chq_no = parseInt($('#total_chq').val()) + 1;
//   // var new_input = "<input type='text' id='new_" + new_chq_no + "'>";
//   var new_input = $('#adding').html();
//   alert(new_input);
//   var aaa = new_input;
//   $('#another_input').append(new_input);
//   e.preventDefault();
//   // $('#total_chq').val(new_chq_no);
// }

/* **************** ON FUNCTIONS **************** */
$(document).ready(function(){   

var wrapper1         = $(".field_wrap1"); //Fields wrapper
var wrapper2         = $(".field_wrap2"); //Fields wrapper
var wrapper3         = $(".field_wrap3"); //Fields wrapper
var wrapper4         = $(".field_wrap4"); //Fields wrapper
var wrapper5         = $(".field_wrap5"); //Fields wrapper
var wrapper6         = $(".field_wrap6"); //Fields wrapper
var addcert1_button      = $(".addcert1");
var addcon1_button      = $(".addcon1"); //Add button ID
var addcar1_button      = $(".addcar1"); //Add button ID
var addcar2_button      = $(".addcar2"); //Add button ID
var addcar3_button      = $(".addcar3"); //Add button ID
var adddept1_button      = $(".adddept1"); //Add button ID
$(addcert1_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper1).append('<div class="form-group"><label class="control-label sp10 cols-15"></label><div class="cols-6"><div class="cols-5"><input type="text" class="form- " id="kword1" name="certificate[]"></div><div class="cols-5"><input type="text" class="form- " id="kword2" name="certificate[]"></div></div></div></div>'); //add input box
});

$(addcon1_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper2).append('<div class="form-group"><label class="control-label cols-15"></label><div class="sp10 cols-6"><div class="cols-5"><input type="text" class="form- " name="conference[]"></div><div class="cols-5"><input type="text" class="form- " name="conference[]"></div></div></div>'); //add input box
});

$(addcar1_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper3).append('<div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="aca_year" name="----年" class="form- "><option>----年</option></select></div><div class="cols-1"><select name="c_ac_month_to[]" class="form- "><option value="0">--月</option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " ></div></div>'); //add input box
});

$(addcar2_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper4).append('<div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="aca_year" name="----年" class="form- "><option>----年</option></select></div><div class="cols-1"><select name="c_ac_month_to[]" class="form- "><option value="0">--月</option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " ></div></div>'); //add input box
});

$(addcar3_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper5).append('<div class="form-group"><div class="cols-15"></div><div class="cols-12"><select id="aca_year" name="----年" class="form- "><option>----年</option></select></div><div class="cols-1"><select name="c_ac_month_to[]" class="form- "><option value="0">--月</option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select></div><div class="cols-35"><input type="text" id="form-control" name="c_ac_desc_to[]" class="form- " ></div></div>'); //add input box
});
$(adddept1_button).click(function(e){ //on add input button click
	e.preventDefault();
	$(wrapper6).append('<div class="form-group"><div class="control-label cols-15"></div><div class="cols-5"><div class="cols-5"><select class="form- " name="department[]"><option>選択してください</option><option>industry two</option><option>industry three</option><option>industry four</option></select></div><div class="cols-5"><select class="form- " name="department[]"><option>選択してください</option><option>industry two</option><option>industry three</option><option>industry four</option></select></div></div><div class="cols-1 relative"></div></div>'); //add input box
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

var i=1; 
$('#add').click(function(){  
	alert('nisulod');
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
});

$('.addfields').on('click', addfields);
    var i=0;
    function addfields(e) {
      e.preventDefault();
      var copy = $('#addanother').clone();

      var oneplus=i+1;

      $(copy).find('div#cke_textheading_lead\\[0\\]').remove();
      $(copy).find('script').remove();
      $(copy).find('textarea[name=textheading_lead\\[0\\]]').attr('name', 'textheading_lead['+oneplus+']');

      $('#addnewdiv').append($(copy).html()+ '<br>');
      CKEDITOR.replace('textheading_lead['+oneplus+']');
      i++;  

    }

//birthday year
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
	  


	  
	  /* **************** END **************** */
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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMuK0OUZEPym74iWarEiCnudUSkuA9I6k&libraries=places"></script>
         
<script>
  google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
      var input = document.getElementById('autocomplete_search');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
    });
  }
</script>





</body>
</html>