//Add the input from a text field to a list
$(document).ready(function() {
	$('#add-scholar').click(function() {
		if ($(".scholar-input").length < 3 && $(".scholar-input:last-child").val() ) {
			var input = document.createElement("input");
			input.className = "scholar-input";
			input.name = "fscholars[]";
			$("#favorite-scholars").append(input);
		}
	});
	
	$("#favorite-scholars").on("blur", ".scholar-input", function(e) {
		if ($(".scholar-input").length > 1) {
			if (!$(this).val()) { //means empty string
				$(this).remove();
			}
		}
	});
});