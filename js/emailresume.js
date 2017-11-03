$(document).ready(function(){
    //Add Form submit handler
    $('#resumeform').submit(function(e){
    	e.preventDefault();
    	var formData = new FormData(this);
    	$.ajax({
    		url: 'portfolio.php',
    		type: 'POST',
    		cache: false,
    		data: formData,
    		async: false,
    		processData: false,
    		contentType: false,
    		dataType: 'json',
    		success: function(response)
    		{
    			$('#resumemodal').modal('toggle');
    			if(response.status == "success"){
    				$('#msgtitle').text('Thank you for Showing Interest!');
    				$('#modalmsg').text(response.message);
    				$('#msgmodalbtn').text('Close');
    				$('#msgmodalbtn').attr('class', 'btn btn-danger pull-right');
    				$('#msgtitle').attr('class', 'text-success');
    				$('#msgmodal').modal('show');
    			}else if (response.status){
    				$('#msgtitle').text('Something went Wrong!');
    				$('#modalmsg').text(response.message);
    				$('#msgmodalbtn').text('Close');
    				$('#msgmodalbtn').attr('class', 'btn btn-danger pull-right');
    				$('#msgtitle').attr('class', 'text-danger');
    				$('#msgmodal').modal('show');
    			}
    		},
    		error: function()
    		{
    			$('#msgtitle').text('Something Went Wrong!');
    			$('#modalmsg').text('Please contant administrator for assistance!');
    			$('#msgmodalbtn').text('Close');
    			$('#msgmodalbtn').attr('class', 'btn btn-danger pull-right');
    			$('#msgtitle').attr('class', 'text-danger');
    			$('#msgmodal').modal('show');
    		}
    	})
    });
});
