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
                        <th>Position</th>
                        <th class="hide">Id</th>
                        <th class="text-right">
                          <a href="" class="btn btn-info btn-sm text-white font-weight-bolder " data-toggle="modal" data-target="#createPosition">
						                <i class="material-icons float-left" data-toggle="tooltip" title="Add Position!" data-placement="left">add</i>&nbsp;Create
					                </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($positionData as $values) :?>
                    <tr class = "edit_hover_class">
                        <td class="position"> <?= $values['pname']; ?> </td>
                        <td class="hide"> <?= $values['p_id']; ?> </td>
                        <td class="text-right">
                            <a href="" data-toggle="modal" data-target="#updatePosition<?= $values['p_id']?>"><i class="editdata material-icons text-info" data-toggle="tooltip" title="Edit Position!" data-placement="left">edit</i></a>
							              <a href="" data-toggle="modal" data-target="#deletePosition<?= $values['p_id']?>" title="Delete position!" data-placement="right"><i class="material-icons text-danger" data-toggle="tooltip">delete</i></a>
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
	<div class="modal fade" id="createPosition">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->

        <div class="modal-body text-right">
			<form  action="<?= base_url("/position/addPosition") ?>" method="post">
				
				<div class="form-group">
					<input type="text" name="pname" class="form-control" placeholder="Position Name" >
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
	<?php foreach($positionData as $values) :?>
  <!-- The Modal -->
	<div class="modal fade" id="updatePosition<?= $values['p_id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="<?= base_url("/position/updatePosition") ?>" method="post">
				<div class="form-group">
					<input type="hidden" class="form-control"  name="p_id" id="p_id" value="<?= $values['p_id']?>">
				</div>
				<div class="form-group">
					<input type="text" name="pname" class="form-control" id="pname" value="<?= $values['pname']?>">
				</div>
			<a data-dismiss="modal" class="closeModal">DISCARD</a>
		 	 &nbsp;
		  <input type="submit" value="UPDATE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL UPDATE==================================================== -->
  
  <!-- =================================START MODEL DELETE==================================================== -->
  <?php foreach($positionData as $values) :?>

  
  <!-- The Modal -->
	<div class="modal fade" id="deletePosition<?= $values['p_id'];?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Position</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
		<div class="modal-body text-right">
			<form  action="/position/deletePosition/<?= $values['p_id']?>" method="post">
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