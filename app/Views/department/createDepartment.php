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
