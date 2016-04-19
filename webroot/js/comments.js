$(document).ready(function(){
	$("#button").click(function(){
		
		// Checking Empty Fields
		if ($.trim(email).length == 0 || $("#name").val()=="" || $("#name").val()=="") {
			alert('All fields are required');
			event.preventDefault();
		}
		
		if (validateEmail(email)) {
			
			
			var serializedata = $("#form").serialize(); //serialize the all fields inside the form
			$.ajax({
				type:"post",
				url:"../comments_add",
				data:"name="+name+"&email="+email+"&text_comment="+text_comment+"&created="+created+"&id_post="+id_post,
				async: false,
				data: serializedata,
				success:function(data){
					$("#form")[0].reset();
					location.reload();

				}
				
			});
			
		}
		
		else {
			alert('Invalid Email Address');
			event.preventDefault();
		}
		
		// Validating email address through a regular expression.
		function validateEmail(sEmail) {
			var email=$("#email").val();
			var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if (filter.test(email)) {
				return true;
			}
			else {
				return false;
			}
		}
		
		
	});
});