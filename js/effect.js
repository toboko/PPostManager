//Drag function from image to text
start_drag = function(event) {
	event.dataTransfer.setData("text", event.target.dataset.code);
	event.dataTransfer.effectAllowed = 'copy';
	//Jquery effect when is dragging an image
	$('.modal.fade.bs-example-modal-lg.in').modal('hide');
}
//jQuery function during keyup or click
$(function(){
	$("#postInsert").bind('input propertychange',function(){
		parseContent($(this).val());
	});
	$("#ph_image").click(function(){
		imageUpdate();
	});
	$("#postRemove").click(function(){
		postRemove();
	});
	$("#postModify").click(function(){
		postModify();
	});
	$("#postCreate").click(function(){
		postCreate();
	});
});
//Tab option for #postInsert
$(document).delegate('#postInsert', 'keydown', function(e) { 
	var keyCode = e.keyCode || e.which; 
		
	if (keyCode == 9) { 
		e.preventDefault(); 
		var start = $(this).get(0).selectionStart;
		var end = $(this).get(0).selectionEnd;
		// set textarea value to: text before caret + tab + text after caret
		$(this).val($(this).val().substring(0, start)
			+ "\t"
			+ $(this).val().substring(end));
		// put caret at right position again
		$(this).get(0).selectionStart = 
		$(this).get(0).selectionEnd = start + 1;
	} 
});