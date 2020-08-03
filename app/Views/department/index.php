<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">

<!-- alert message error if user incorrect information-->

  <?php if(session()->get('error')): ?>
  <div class="alert alert-danger alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong> Error Message: </strong><?= session()->get('error')->listErrors() ?>
  </div>
  <?php endif ?>

			<h5 class="text-center"></h5>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
                <div class="input-group-append"></div>
            </div>
            <br>

            <table class="table table-borderless table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>Department</th>
                        <th class="hide">Id</th>
                        <th class="text-right">
                          <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createDepartment">
						                <i class="material-icons float-left" data-toggle="tooltip" title="Add Department!" data-placement="left">add</i>&nbsp;Create
					                </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($departmentData as $values) :?>
                    <tr class = "edit_hover_class">
                        <td class="departmentName"> <?= $values['dname']; ?> </td>
                        <td class="hide"> <?= $values['d_id']; ?> </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updateDepartment<?= $values['d_id']?>"><i class="editdata material-icons text-info" data-toggle="tooltip" title="Edit Department!" data-placement="left">edit</i></a>
							              <a href="" data-toggle="modal" data-target="#deleteDepartment<?= $values['d_id']?>" title="Delete Department!" data-placement="right"><i class="material-icons text-danger" data-toggle="tooltip">delete</i></a>
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
			<form  action="<?= base_url("/department/addDepartment") ?>" method="post">
				
				<div class="form-group">
					<input type="text" name="dname" class="form-control" placeholder="Department Name" >
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;

		  <input type="submit" value="CREATE" class="createBtn text-info">

        </div>
        </div>
        </form>

      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->

  <!-- ========================================START Model UPDATE================================================ -->
	<?php foreach($departmentData as $values) :?>
  <!-- The Modal -->
	<div class="modal fade" id="updateDepartment<?= $values['d_id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="<?= base_url("/department/updateDepartment") ?>" method="post">
				<div class="form-group">
					<input type="hidden" class="form-control"  name="d_id" id="d_id" value="<?= $values['d_id']?>">
				</div>
				<div class="form-group">
					<input type="text" name="dname" class="form-control" id="dname" value="<?= $values['dname']?>">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-primary">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL UPDATE==================================================== -->
  
  <!-- =================================START MODEL DELETE==================================================== -->
  <?php foreach($departmentData as $values) :?>

  
  <!-- The Modal -->
	<div class="modal fade" id="deleteDepartment<?= $values['d_id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="<?= base_url("/department/deleteDepartment/".$values['d_id']) ?>" method="post">
      <div class="form-group">
				<p  style="display:flex;justify-content:flex-start"> Are you sure you want to remove the selected Department?</p>
			</div>
			  <a data-dismiss="modal" class="closeModal">DON'T REMOVE</a>
		 	  &nbsp;
		    <input type="submit" value="REMOVE" class="createBtn text-info">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL DELETE==================================================== -->

  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                  } else {
                  tr[i].style.display = "none";
                }
              }
            }
          }
</script>

<?= $this->endSection() ?>


						