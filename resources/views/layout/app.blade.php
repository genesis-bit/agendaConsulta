<!doctype html>

<html lang='pt'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale-1">
        <title>Sistema De Gestão De Consultas Online</title>
        @vite(['resources/css/Admin.css', 'resources/css/boxicons.min.css', 'resources/css/bootstrap.min.css'])
    </head>
<body>
    
      <div class="sidebar" id="sidebar"> <!-- start sidebar -->
            <div class="logo"> <!-- start logo -->
                    <h2>
                        <img src="imagens_projectos/stethoscope-removebg-preview.png" alt="" width="40px">
                        Ana-Paula
                    </h2>
            </div> <!-- end logo -->
            <div class="sidebar-menu">   <!-- start sidebar-menu -->
                 <ul> <!-- start ul-->
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span>Menu Principal</span>
                            </a>
                        </li>   
              <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item dropdpwn py-2  collapse-inner rounded">
                             <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bxs-home' ></i>
                                     Medicina
                            </a>             
                            <ul class="dropdown-menu" aria-labelledby="navbar-Dropdown">
                                <li><a class="dropdown-item" href="Patologias.php">Patólogias</a></li>
                                <li><a class="dropdown-item" href="Vacinas.php">Vacinas</a></li>
                            </ul>
                        </li>            
             <!-- Nav Item - Onibus -->
                        <li class="nav-item">
                            <a class="nav-link" href="/medico">
                                <i class='bx bx-plus-medical'></i>
                                <span>Médicos</span>
                            </a>
                        </li>
            <!-- Nav Item - Motorista -->
                        <li class="nav-item">
                            <a class="nav-link" href="/paciente">
                                <i class='bx bxs-group'></i>
                                <span>Pacientes</span>
                            </a>
                        </li>
            <!-- Nav Item - Usuarios -->
                        <li class="nav-item">
                            <a class="nav-link" href="/consulta">
                                <i class='bx bx-calendar-plus'></i>
                                <span>Consultas</span>
                            </a>
                        </li>
            <!-- Nav Item - Agencias -->
                        <li class="nav-item">
                            <a class="nav-link" href="/quarto">
                                 <i class='bx bxs-bed'></i>
                                <span>Quartos</span>
                            </a>
                        </li>
           <!-- Nav Item - Relatórios -->
                        <li class="nav-item">
                                <a class="nav-link" href="Relatório.php">
                                     <i class='bx bx-edit'></i>
                                    <span>Relatórios</span>
                                </a>
                         </li>
             <!-- Nav Item -Financeiro-->
                        <li class="nav-item">
                                <a class="nav-link" href="Financeiro.php">
                                    <i class="bx bx-money"></i>
                                    <span>Financeiro</span>
                                </a>
                        </li>
              <!-- Nav Item - Sair-->
                        <li class="nav-item">
                                <a class="btn btn-secondary btn-sm" href="" data-bs-toggle="modal" data-bs-target="#SairModal">
                                    <i class='bx bx-log-out-circle'></i>
                                    <span>Sair</span>
                                </a>
                        </li>
                  </ul><!-- end ul -->
            </div><!-- end sidebar-menu -->
      </div> <!-- end sidebar -->

    <div class="main-content" id="main-content">  <!-- start main-content -->
        <header class="flex">     <!-- start header -->
            <h2>
                <i class="bx bx-menu" id="menu-icon"></i>
                Centro de Saúde Ana Paula 
            </h2>
            <div class="admin-box flex">     <!-- start admin-box -->
                    <img src="./imagens_projectos/Admin.png" width="40px" height="40px" alt="">
                    <div>
                        <h2>Fer Jose </h2>
                        <small>Admin </small>
                    </div>
            </div>                     <!-- end admin-box -->
        </header> <!-- end header -->

        <main>   <!-- start main -->
            @yield('conteudo')
        </main>  <!-- end main -->
    </div>   <!-- end main-content -->



<!-- start script -->
        <script>
            let sidebar = document.getElementById("sidebar");
            let menuicon = document.getElementById("menu-icon");
            let maincontent = document.getElementById("main-content");

            menuicon.onclick = () => {
                sidebar.classList.toggle("togglemenu");
                maincontent.classList.toggle("togglecontent");
            
            }
        </script>
        @vite(['resources/js/app.js','resources/js/bootstrap.bundle.min.js','resources/js/jquery.min.js','resources/js/dataTables.bootstrap.min.js'])
    </body>
</html>