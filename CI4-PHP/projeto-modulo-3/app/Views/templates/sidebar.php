<!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-lightblue">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('theme/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">All tech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/inicio" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/clientes" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/funcionarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Funcionarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/produtos" class="nav-link">
              <i class="nav-icon fas fa-box-open"></i>
              <p>
                Produtos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/login/trocarSenha" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Trocar senha
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>