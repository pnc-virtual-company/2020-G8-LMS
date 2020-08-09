
<nav class="navbar navbar-expand-md bg-info navbar-dark">
<a class="navbar-brand" href="/">
  <img src="images/logo.png" alt="" width="50"></a>


  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">
         <a class="nav-link mt-2" href="<?= base_url('/your_leave')?>">Your leaves</a>
         
         <?php if(session('role') == 'Admin' || session('role') == 'HR' || session('role') == 'Manager'): ?>
         <a class="nav-link mt-2" href="<?= base_url('/leave')?>">Leaves</a>
         <?php endif; ?>

         <?php if(session('role')== 'Admin' || session('role') == 'HR'): ?>
         <a class="nav-link mt-2" href="<?= base_url('/employees')?>">Employees</a>
         <a class="nav-link mt-2" href="<?= base_url('/position')?>">Positions</a>
         <a class="nav-link mt-2" href="<?= base_url('/department')?>">Departments</a>
         <?php endif; ?>

           <li class="dropdown mt-2">
             <a href="#" class="dropdown-toggle text-uppercase text-white nav-link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
             
             <?php $email = strstr(session()->get('email'),'@',true) ?>
              <?= $email ?>
             </a>
             <div class="dropdown-menu">
                <a class="dropdown-item" href="#myModal" role="button"data-toggle="modal" >Profile</a>
                <a class="dropdown-item" href="logout">Log out</a>
            </div>
          </li>
    </ul>
  </div>
</nav>

<div class="bs-example">
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h2>My information</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="row">
              <div class="col-6">
                <strong><p>Frist name</p></strong>
                <strong><p>Last name</p></strong>
                <strong><p>Departament</p></strong>
                <strong><p>Position</p></strong>
                <strong><p>Start date</p></strong>
              </div>
              <div class="col-5 ">
                    <p>Rady</p>
                    <p>Y</p>
                    <p>Training and education</p>
                    <p>WEP Coordinator</p>
                    <p>25/5/2025</p>
              </div>
              
          </div>
          <div id="popup1" class="overlay">
            <div class="popup" >
              <a class="close text-info" href="#popup1" data-dismiss = "modal"></a>
            </div>
           </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</body>