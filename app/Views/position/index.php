<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
			<div class="col-6">
                <div class="input-group mb-3">
                <input type="text" class="form-control" id="search" onkeyup="myFunction()" placeholder="Search">
                    <div class="input-group-append"></div>
                </div><br>
          <script>
          function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("search");
          filter = input.value.toUpperCase();
          table = document.getElementById("position");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];
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
                <table class="table table-borderless table-hover" id="position">
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
                <?php foreach($dataPosition as $position): ?>
                    <tr>
                        <td><?= $position['title']; ?> </td>
                       <td class="hide"><?= $position['id']; ?></td>
                        <td class="text-right">

                            <a href="" data-toggle="modal" data-target="#updatePosition<?= $position['id']?>">
                            <i class="material-icons text-info positionEdit"  data-toggle="tooltip" title="Edit Position" 
                            data-placement="left">edit</i></a>
                            
                            <a href=""data-toggle="modal" data-target="#deletePosition<?= $position['id']?>"  data-toggle="tooltip" 
                            title="Delete Position!" data-placement="right"  ><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
			<div class="col-3"></div>
		</div>
	</div>

  <!-- =================================START MODEL DELETE==================================================== -->
  <?php foreach($dataPosition as $position): ?>
  <!-- The Modal -->
	<div class="modal fade" id="deletePosition<?= $position['id']?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Delete Department</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        
		<div class="modal-body text-right">
			<form  action="position/deletePosition/<?= $position['id'];?>" method="post">
      <div class="form-group">
				<p  style="display:flex;justify-content:flex-start"> Are you sure you want to delete the selected Position?</p>
			</div>
			  <a data-dismiss="modal" class="closeModal">CANCEL</a>
		 	  &nbsp;
		    <input type="submit" value="DELETE" class="createBtn text-warning">
        </div>
        </form>
      </div>
    </div> 
  </div>
  <?php endforeach; ?>
  <!-- =================================END MODEL DELETE==================================================== -->
    <!-- ===============================START UPDATE POSITION=============================== -->

    <?php foreach($dataPosition as $position): ?>
    <!-- The Modal Update Position-->
    <div class="modal fade" id="updatePosition<?= $position['id']?>">
    <div class="modal-dialog">
        <div class="modal-content">         
            <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Update Position</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                    <!-- Modal body -->
                        <div class="modal-body text-right">
                            <form  action="position/updatePosition" method="post">
                                <div class="form-group">
					                <input type="hidden" class="form-control"  name="id" id="po_id" value="<?= $position['id']?>" >
				                </div>
                                <div class="form-group">
                                    <label for="name">Position Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Position name" id="position_name" name="title" value="<?= $position['title']?>">
                            </div>
                        <a data-dismiss="modal" class="closeModal">DISCARD</a>
                        <a data-dismiss="modal" class="updateModal">Update</a>
                        &nbsp;
                    <input type="submit" value="UPDATE" class="createBtn text-warning">
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>
	<!-- The Modal --->
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
			<form  action="position/addPosition" method="post">
				<div class="form-group">
					<input type="text" name="title" class="form-control" placeholder="Position Name">
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
<?= $this->endSection() ?>
						