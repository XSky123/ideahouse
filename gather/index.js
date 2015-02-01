$(document).ready(function(){
	$(".hx").hide();
	$("#surprise").click(function(){
		$(this).hide(1000);
		$(".hx").show();
		$("#hidethat").show();
	});
	$("#hidethat").click(function(){
		$(this).hide(1000);
  		$(".hx").hide();
  		$("#surprise").show(1000);
	});

});