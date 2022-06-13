
<!-- Main Sidebar Container -->
<aside class="main-sidebar">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="<?php echo BASEURL;?>/dist/img/logo.png" alt="Wildlife Crime" class="">
      <!-- <span class="brand-text font-weight-light">WLOR</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> -->
        <!-- <div class="image">
          <img src="https://cdn4.iconfinder.com/data/icons/professions-1-2/151/21-512.png" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="d-block"></a>
        </div> -->
      <!-- </div> -->

      <!-- SidebarSearch Form -->
      <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
      <div class="form-control control-sidebar">
          <div class="group-append">
            <!-- <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button> -->
          </div>
        </div>
      </div>
   </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="./dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul> -->
          </li>
          <li class="nav-item">
            <a href="./modal.php" class="nav-link"  >
              <i class="nav-icon fas fa-paw"></i>
              <p>
              Identify Species
                
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="./modal.php" class="nav-link" >
              <i class="nav-icon fas fa-th"></i>
              <p>
               Generate WLOR
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-indent"></i>
              <p>
                Access Resource
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./tradefor.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Trade For</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WildLife Law</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./species.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Spices</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./document.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Download Document</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
             <a href="" class="nav-link logout">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
               Logout
                
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="modal fade innerModelBox" id="AddMoreSpeciesAlert" tabindex="-1" role="dialog" aria-labelledby="AddMoreSpeciesAlert" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
          Have you identified the species seized ?</br>
      </div>
      <div class="modal-footer">
        <div class="row">
            <div class="col-xs-6 text-center p-0"><a class="yesBtn" href="https://wlor.wildcrimeassist.in/wlors/speciesidentify">Yes</a></div>
            <div class="col-xs-6 text-center p-0"><a class="noBtn" href="https://wlor.wildcrimeassist.in/wlors/section1">No</a></div>
        </div>
        
      </div>
    </div>
  </div>
</div>
   
    

   
 