$(document).ready(function() {

	//Telegram Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "/thanks/send.php", //Change
			data: th.serialize()
		}).done(function() {
			window.location.href = "/thanks/thanks.html"	
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});
