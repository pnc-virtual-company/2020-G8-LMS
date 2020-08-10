<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS APP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="images/lms_app.png" type="image/x-icon" width="500" height="600">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
   
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
     <?= $this->renderSection('content') ?>
</body>
</html>




<script>
       $(document).ready(function(){
            $('.employeeInfo').on('click',function(){
                $('#updateEmployee').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function() {
                return $(this).text();
                }).get();
                
                $('#update_id').val(data[0]);
                $('#firstName').val(data[1]);
                $('#lastName').val(data[2]);
                $('#email').val(data[3]);
                $('#password').val(data[4]);
                $('#role').val(data[5]);
                $('#profile').val(data[6]);
                $('#startDate').val(data[7]);
                $('#position_id:selected').val(data[8]);
                $('#department_id:selected').val(data[9]);
            });
	    });

//Calculating
function dateDiff() { 
  var startDate = document.getElementById('startDate').value;
  var endDate = document.getElementById('endDate').value;
  var startTime = document.getElementById('startTime').value;
  var endTime = document.getElementById('endTime').value;
  
  var dateToStart = new Date(startDate);
  var dateToEnd = new Date(endDate);
  var getDateTime = dateToEnd.getTime() - dateToStart.getTime();
  var days = getDateTime/(1000 * 60 * 60 * 24);
  var period = 0;
if(startTime == 1) {
  if(endTime == 1){
    period = 0.5;
  }else{
    period = 1;
  }  
}else {
  if(endTime == 1){  
    period = 0;
  }else{
    period = 0.5;
  }
}
if(startDate > endDate){
  $('#danger').html('<div class="alert alert-danger"><strong>Error! </strong>End date cannot be before start date.</div>');
}else if(startDate == endDate && startTime == 2 && endTime == 1){
  $('#danger').html('<div class="alert alert-danger"><strong>Error! </strong>Start date and end date cannot be selected in the past.</div>');
}else{
  document.getElementById("duration").value = (days + period)+" days";
  $('#danger').html('');
}
  return false;
}

</script>
<!-- script of your leave, employee, position, department search -->

<script>
	$(document).ready(function(){
	$("#search").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	});
</script>