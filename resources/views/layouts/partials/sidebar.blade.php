 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <span class="brand-text font-weight-light">CRM</span>
     </a>


     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="info">
                 <a href="#" class="d-block">Paul Cruz</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-users nav-icon"></i>
                                 <p>Usuarios</p>
                             </a>
                         </li>
                     </ul>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa fa-user-tie"></i>
                                 <p>Clientes</p>
                             </a>
                         </li>
                     </ul>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-project-diagram"></i>
                                 <p>Proyectos</p>
                             </a>
                         </li>
                     </ul>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tasks"></i>
                                 <p>Tareas</p>
                             </a>
                         </li>
                     </ul>

                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                               <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Cerrar Sesión</p>
                            </a>
                        </li>
                    </ul>
                    
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
 </aside>
