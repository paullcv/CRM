 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <span class="brand-text font-weight-light">CRM</span>
     </a>


     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="info text-center">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">

                 <li class="nav-item">
                     <a href=" {{ route('home') }}" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 <li class="nav-item">
                     <a href="{{ route('users.index') }}" class="nav-link">
                         <i class="nav-icon fas fa-users nav-icon"></i>
                         <p>Usuarios</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa fa-user-tie"></i>
                         <p>Clientes</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-project-diagram"></i>
                         <p>Proyectos</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tasks"></i>
                         <p>Tareas</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link"
                         onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>Cerrar Sesión</p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
 </aside>
