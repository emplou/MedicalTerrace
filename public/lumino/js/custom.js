$('#calendar').datepicker({
		});

!function ($) {
    $(document).on("click","ul.nav li.parent > a ", function(){          
        $(this).find('em').toggleClass("fa-minus");      
    }); 
    $(".sidebar span.icon").find('em:first').addClass("fa-plus");
}

(window.jQuery);
	$(window).on('resize', function () {
  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
})
$(window).on('resize', function () {
  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
})

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-up').addClass('fa-toggle-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('em').removeClass('fa-toggle-down').addClass('fa-toggle-up');
	}
});
//logout menu dropdown 
$(".push-btn").each(function(){
	$(this).click(function(){
		$(".accnt-box").slideToggle();
	});
});



var test = $('#test'),
	animate = $('#animate');

animate.click(function () {
	test.animate({
		left: 20,
		padding: '1em',
		opacity: 0.5,
		margin: '1em 0',
		width: '5em',
		height: '5em'
	}, 1000, function () {
		alert('Complete');
	});
});



// https://dribbble.com/shots/1821178-Sales-Report?list=buckets&offset=0

// Line Chart
var ctx = document.getElementById("salesData").getContext("2d");

var gradient = ctx.createLinearGradient(0, 0, 700, 0);
gradient.addColorStop(0, 'rgba(255, 204, 128, 1)');
gradient.addColorStop(0.5, 'rgba(255, 152, 0, 1)');
gradient.addColorStop(1, 'rgba(239, 108, 0, 1)');

var salesData = {
	labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
	datasets: [
		{
			label: "Front",
			fillColor: "rgba(0, 0, 0, 0.15)",
			strokeColor: gradient,
			pointColor: gradient,
			pointStrokeColor: "#202b33",
			pointHighlightStroke: "rgba(225,225,225,0.9)",
			data: [44, 40, 48, 55, 64, 55, 72]
		},
		/*{
		  label: "Middle",
		  fillColor: "rgba(255, 172, 100, 0.1)",
		  strokeColor: "rgba(255, 172, 100, 1)",
		  pointColor: "rgba(255, 172, 100, 1)",
		  pointStrokeColor: "#202b33",
		  pointHighlightStroke: "rgba(225,225,225,0.9)",
		  data: [1900, 1700, 2100, 3600, 2200, 2500, 2000]
		},*/
		{
			label: "Back",
			fillColor: "rgba(19, 71, 34, 0.3)",
			strokeColor: "rgba(88, 188, 116, 1)",
			pointColor: "rgba(88, 188, 116, 1)",
			pointStrokeColor: "#202b33",
			pointHighlightStroke: "rgba(225,225,225,0.9)",
			data: [24, 20, 28, 35, 44, 45, 52]
		}
	]
};


window.myLineChart = new Chart(ctx).Line(salesData, {
	pointDotRadius: 0,
	pointDotStrokeWidth: 3,
	datasetStrokeWidth: 10,
	scaleShowVerticalLines: false,
	scaleGridLineWidth: 2,
	scaleShowGridLines: true,
	scaleGridLineColor: "rgba(225, 255, 255, 0.02)",
	scaleOverride: true,
	scaleSteps: 9,
	scaleStepWidth: 10,
	scaleStartValue: 0,

	responsive: true

});

//Credit Sales
var creditSales = new ProgressBar.Circle('#creditSales', {
	color: '#e81760',
	strokeWidth: 3,
	trailWidth: 3,
	duration: 1500,
	text: {
		value: '0%'
	},
	step: function (state, bar) {
		bar.setText((bar.value() * 100).toFixed(0) + "%");
	}
});
var channelSales = new ProgressBar.Circle('#channelSales', {
	color: '#e88e3c',
	strokeWidth: 3,
	trailWidth: 3,
	duration: 1500,
	text: {
		value: '0%'
	},
	step: function (state, bar) {
		bar.setText((bar.value() * 100).toFixed(0) + "%");
	}
});
var directSales = new ProgressBar.Circle('#directSales', {
	color: '#2bab51',
	strokeWidth: 3,
	trailWidth: 3,
	duration: 1500,
	text: {
		value: '0%'
	},
	step: function (state, bar) {
		bar.setText((bar.value() * 100).toFixed(0) + "%");
	}
});
creditSales.animate(0.8);
channelSales.animate(0.64);
directSales.animate(0.34);




$('#test_form').showProgress({ message: { '10': 'You\'re off to a great start!', '25': 'You\'re doing great so far!', '50': 'You\'re halfway there!', '75': 'Look at that, you\'re nearly done already!', '100': 'All done! Just click <strong>Submit</strong> to continue!' } });