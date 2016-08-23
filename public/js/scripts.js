$(document).ready(function(){
	$("#btn-pause").attr("disabled", "disabled");
	$("#btn-stop").attr("disabled", "disabled");
});

$("#btn-play").click(function(){
	$("#select-state").val("encours");
	$("#btn-play").attr("disabled", "disabled");
	$("#btn-pause").removeAttr("disabled", "disabled");
	$("#btn-stop").removeAttr("disabled", "disabled");
});

$("#btn-pause").click(function(){
	$("#select-state").val("bloque");
	$("#btn-play").removeAttr("disabled");
});

$("#btn-stop").click(function(){
	$("#select-state").val("termine");
	$("#btn-play").removeAttr("disabled");
});