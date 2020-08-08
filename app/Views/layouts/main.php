<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS APP</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css')?>">
    <link rel="shortcut icon" href=" <?= base_url('images/lms_app.png')?>" type="image/x-icon" width="500" height="600">
    <link rel="stylesheet" href="<?= base_url('https://fonts.googleapis.com/icon?family=Material+Icons')?>">
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
	    })
</script>

<!-- filter search of Emoployee -->
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