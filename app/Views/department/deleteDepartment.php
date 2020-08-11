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