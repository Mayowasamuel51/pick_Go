$('#show').click(function(e){
	e.preventDefault()
	$('.card-content').load('result.php');

})