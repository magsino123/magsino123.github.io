$(document).ready(function(){
	$("#sendMessageButton").click(function(){
		let name = $("#name").val();
		let email = $("#email").val();
		let phone = $("#phone").val();
		let message = $("#message").val();
		if (name !="" & email !="" & phone !="" & message !="") {
			$.ajax({
				url: base_url + 'email/send',
				type: 'post',
				data: { name:name, email:email, phone:phone, message:message },
				dataType: 'json',
				beforeSend: function() {
					$("#sendMessageButton").attr('disabled', true).html("Sending .... <span class='fa fa-spinner fa-1x fa-spin'></span>");
				},
				success: function(data) {
					if (data.sent == "Sent Successfuly") {						
						$("#success").fadeIn();
		        $("#success").fadeOut(3000);				        
				    							
						$("#contactForm")[0].reset();
						$("#sendMessageButton").attr('disabled', false).html('Send Message');
						$("#err").hide();
					}					
				}
			})
		}else{
			$("#err").show().fadeIn();
			$("#err").show().fadeOut(5000);
		}
	})
})