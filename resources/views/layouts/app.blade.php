<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medical administrator - Dashboard</title>
	<!-- <link href="{{ asset('lumino/css/bootstrap.min.css') }}" rel="stylesheet"> -->
	<link href="{{ asset('lumino/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('lumino/css/styles.css') }}" rel="stylesheet">
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
	<!-- <script src="lumino/js/bootstrap.min.js"></script> -->
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script src="{{ asset('lumino/dist/timepicker.min.js') }}"></script>
	<!-- <script src="{{ asset('lumino/dist/wickedpicker.js') }}"></script> -->
   
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

// $(document).on('click', 'illness_menu', function(e){ 
// 	alert('hoy!');
// 	 $('.illness_container').css('display','block');
// 	 $('.illness_menu').addClass('active');
// 	 e.preventDefault(); 
// });


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
$(document).ready(function(){   
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
</script>


</body>
</html>