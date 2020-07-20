<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<h5 class="text-center"></h5>
            <div class="input-group mb-3">
                <input type="text" id="searchs" class="form-control" placeholder="Search">
                <div class="input-group-append"></div>
            </div>
            <br>

            <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th class="hide">Id</th>
                        <th class="text-right">
                            <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createDepartment">
						        <i class="material-icons float-left" data-toggle="tooltip" title="Add Position!" data-placement="left">add</i>&nbsp;Create
					        </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($department as $values) :?>
                    <tr>
                        <td class="departmentName"> <?= $values['department_name']; ?> </td>
                        <td class="hide"> <?= $values['id']; ?> </td>
                        <td class="text-right">
                            <a href="department/editDepartment/<?= $values['id']; ?>" data-toggle="modal" data-target="#updateDepartment"><i class="editdata material-icons text-info" data-toggle="tooltip" title="Edit Department!" data-placement="left">edit</i></a>
							              <a href="department/deleteDepartment/<?= $values['id']; ?>" data-toggle="modal" data-target="#deleteDepartment" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" data-toggle="tooltip">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        </div>
		<div class="col-3"></div>
	</div>
</div>
    <!-- =======================================START CREATE DEPARTMENT========================================== -->
	<!-- The Modal -->
	<div class="modal fade" id="createDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body text-right">
			<form  action="/department/addDepartment" method="post">
				
				<div class="form-group">
					<input type="text" name="department_name" class="form-control" placeholder="Department Name">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="CREATE" class="createBtn text-warning">
        </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->

  <!-- ========================================START Model UPDATE================================================ -->
	<!-- The Modal -->
	<div class="modal fade" id="updateDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="/department/updateDepartment/" method="post">
				<div class="form-group">
					<input type="hidden" class="form-control"  name="id" id="id" value="<?= $values['id'];?>">
				</div>
				<div class="form-group">
					<input type="text" name="department_name" class="form-control" id="department_name" value="<?= $values['department_name']; ?>">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div> 
  </div>
 
  <!-- =================================END MODEL UPDATE==================================================== -->
  
  <!-- =================================START MODEL DELETE==================================================== -->
  
  <!-- The Modal -->
	<div class="modal fade" id="deleteDepartment">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="/department/deleteDepartment/<?= $values['id']?>" method="post">
      <div class="form-group">
				<p  style="display:flex;justify-content:flex-start"> Are you sure you want to remove the selected Department?</p>
			</div>
			  <a data-dismiss="modal" class="closeModal">DON'T REMOVE</a>
		 	  &nbsp;
		    <input type="submit" value="REMOVE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div> 
  </div>

  <!-- =================================END MODEL DELETE==================================================== -->


  <script>
	$(document).ready(function(){
		$('.editdata').on('click',function(){
			$('#updateDepartment');
			$tr = $(this).closest('tr');
			var data = $tr.children('td').map(function(){
				return $(this).text();
			}).get();

			console.log(data);
			$('#id').val(data[0]);
			$('#department_name').val(data[1]);

		});
	});
</script> 

<?= $this->endSection() ?>


						