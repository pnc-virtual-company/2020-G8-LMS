<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/menu') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
			<div class="col-6">
                <div class="input-group mb-3">
                    <input type="text" id="searchs" class="form-control" placeholder="Search">
                    <div class="input-group-append"></div>
                </div><br>
			    <h5 class="text-center"></h5>
            
                <table class="table table-borderless table-hover">
                <thead>
                    <tr>
                       <th>id</th>
                        <th>Position</th>
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
                       <td><?= $position['po_id']; ?></td>
                        <td><?= $position['title']; ?> </td>
                        <td class="text-right">

                            <a href="position/editPosition" data-toggle="modal" data-target="#updatePosition">
                            <i class="material-icons text-info positionEdit" data-toggle="tooltip" title="Edit Position" 
                            data-placement="left">edit</i></a>

							<a href="position/deletePosition/<?= $position['po_id']; ?>" data-toggle="tooltip" 
                            title="Delete Position!" data-placement="right"><i class="material-icons text-danger">delete</i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
			<div class="col-3"></div>
		</div>
	</div>
    <!-- ===============================START UPDATE POSITION=============================== -->
    <!-- The Modal Update Position-->
    <div class="modal fade" id="updatePosition">
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
					                <input type="hidden" class="form-control"  name="id" id="id">
				                </div>
                                <div class="form-group">
                                    <label for="name">Position Name:</label>
                                    <input type="text" class="form-control" placeholder="Enter Position name" value="" id="position name" name="position">
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
  <script>
			$(document).ready(function(){
			$('.positionEdit').on('click', function(){
		    $('#updatePosition');
			$tr = $(this).closest('tr');
			var data = $tr.children('td').map(function(){
			return $(this).text();
			}).get();	
             console.log(data);
			// get name and id 
            $('#id').val(data[0]);
			$('#title').val(data[1]);
		})
	});		
</script>
<!-- =================================END MODEL CREATE==================================================== -->
<?= $this->endSection() ?>
						