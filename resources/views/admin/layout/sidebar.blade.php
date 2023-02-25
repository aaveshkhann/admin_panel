  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-bicycle"></i>
              <p>
                Load Entry
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/load_entry/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Load Entry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/load_entry/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Load Entry</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
                 Customers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/customer/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/customer/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Customer</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-user"></i>
              <p>
                Shippers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/shipper/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Shippers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/shipper/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Shippers</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-user"></i>
              <p>
                Consignee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/consignee" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Consignee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/consignee/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Consignee</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p>
                Drivers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/driver" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Drivers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/driver/show" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Show Drivers</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-shopping-bag"></i>
              <p>
                Equipment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
             <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/equipment" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Equipment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/equipment/show" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Show Equipment</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-share"></i>
                  <p>
                    Dispatch
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/admin/dispatch" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Dispatch</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/admin/dispatch/show" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Show Dispatch</p>
                    </a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-sticky-note"></i>
                  <p>
                    Report
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                 <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/admin/report/driver" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                          <p>Driver Pay Summary</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/admin/report/dispatch" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Dispatch Pay Summary</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/admin/report/dispatch/pay" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Driver Pay Report</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/recover-password.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Customer Revenue Report</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-sticky-note"></i>
                      <p>
                        Account Holder
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/admin/account_holder" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Account Holder</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/admin/account_holder/show" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                          <p>Show Account Holder</p>
                        </a>
                      </li>
                    </ul>
                  </li>


                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-sticky-note"></i>
                      <p>
                        Expense
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="/admin/expense" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Expense</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="/admin/expense/show" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Show Expense</p>
                        </a>
                      </li>
                      </ul>
                    </li>

                    <span class="">
                        <a href="/admin/edit_setting" class="nav-link">
                          <i class="fa fa-cog"></i>
                          <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                          </p>
                        </a>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="fa fa-users"></i>
                              <p>
                                User
                                <i class="fas fa-angle-left right"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="/admin/add_user" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add User</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="/admin/add_user/show" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Show User</p>
                                </a>
                              </li>
                              </ul>
                            </li>



      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

