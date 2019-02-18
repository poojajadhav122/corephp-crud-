//alert("load form")
$(document).ready(function(){
	//alert("jquery")
	$(".insert_btn").click(function(){
		alert("on button")
		var data =$("#insert_form").serialize();
		console.log(data)
		$.post("add-action.php",data,function(response){
			console.log(response)
			$(".msg_form").html(response)
		})
	})
})