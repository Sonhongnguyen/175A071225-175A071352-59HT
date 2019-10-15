$document.ready(function() {
	$('#aLogout').hide();
	$('#fLogin').hide();

	$('#aLogin').click(function(){
		$('#fLogin').show();
	})

	$('#btnLogin').click(function(){
		var email = $('#txtEmail').val();
		var pass =$('#txtPass').val();
		$.ajax({

			url:'checkloginv1.php',
			type:'post',
			data:{email:email,password:pass},
			success:function(nhanve){
				alert(nhanve);
			}
		})
	})
});