<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once '../modelo/controlador/conectar_bd.php';
$conn = conectar_bd();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../librerias/assets/img/E-Billing.png" rel="icon">
  <link href="../librerias/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../librerias/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../librerias/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="home-r1.html" class="logo d-flex align-items-center">
        <img src="../librerias/assets/img/E-Billing.png" alt="">
        <span class="d-none d-lg-block">E-Billing</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Tienenes 4 notificaciones
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver todo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Se ha realizado un recado</h4>
                <p>La factura 8 tiene un nuevo recaudo</p>
                <p>30 min.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Rechazo solicitud de compa</h4>
                <p>La solicitud de compra 3 ha sido desaprobada</p>
                <p>1 hr.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Presupuesto aprobado</h4>
                <p>Se ha aprobado la solicitud de presupuesto 2</p>
                <p>2 hrs.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Nueva solicitud de compra</h4>
                <p>Se ha generado una nueva solicitud de compra</p>
                <p>30 min.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Ver todas las notificacaciones</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Tienes 3 mensajes
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver todo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Felipe Molano Jiménez</h4>
                  <p>Revisa la factura 8 y verifica el recaudo realizado</p>
                  <p>4 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Laura Posada Tobon</h4>
                  <p>Verifica el estado del presupuesto que solicitamos</p>
                  <p>6 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Germán Garzón Pulgarín</h4>
                  <p>El stock de las papas fritas se está agotando</p>
                  <p>8 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Ver todos los mensajes</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../librerias/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Andrea Moreno</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Andrea Moreno Restrepo</h6>
              <span>Gerente</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="settings-users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuración</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home-r1.html">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nomina-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card-2-front"></i>
          <span>Nómina</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nomina-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-empleados.php">
              <i class="bi bi-circle"></i>
              <span>Empleados</span>
            </a>
          </li>
          <li>
            <a href="pagar-nomina.html">
              <i class="bi bi-circle"></i>
              <span>Pago de nóminas</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Nómina Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#facturacion-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt-cutoff"></i>
          <span>Facturación</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="facturacion-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="registrar-factura.php">
              <i class="bi bi-circle"></i>
              <span>Facturación</span>
            </a>
          </li>
          <li>
            <a href="clientes.php">
              <i class="bi bi-circle"></i>
              <span>Clientes</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Facturación Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#compras-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart3"></i>
          <span>Compras</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="compras-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="registrar-compra.php">
              <i class="bi bi-circle"></i>
              <span>Compras</span>
            </a>
          </li>
          <li>
            <a href="solicitar-compra.php">
              <i class="bi bi-circle"></i>
              <span>Solicitud de compra</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Compras Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#almacen-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-shop"></i>
          <span>Almacén</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="almacen-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="productos.php">
              <i class="bi bi-circle"></i>
              <span>Productos</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Almacén Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#gesProveedores-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-truck"></i>
          <span>Proveedores</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gesProveedores-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="proveedores.php">
              <i class="bi bi-circle"></i>
              <span>Proveedores</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Proveedores Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#gesUsuarios-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i>
          <span>Usuarios</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gesUsuarios-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="crear-usuarios.php">
              <i class="bi bi-circle"></i>
              <span>Usuarios</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Usuarios Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Usuarios</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-r1.html">Home</a></li>
          <li class="breadcrumb-item active">Usuarios</li>
          <li class="breadcrumb-item active">Administrar Usuarios</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registrar usuario</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- producto Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-4">
                <label for="validarCedula" class="form-label">ID Usuario</label>
                <input type="number" class="form-control" id="validarCedula" disabled="readonly" placeholder="Valor autoincrementable" required />
              </div>

              <div class="col-md-4">
                <label for="validarNomCompleto" class="form-label">Nombre y Apellidos</label>
                <input type="text" class="form-control" id="validarNomCompleto" required />
              </div>

              <div class="col-md-4">
                <label for="validarEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="validarEmail" placeholder="example@gmail.com" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="yourUsername" class="form-label mb-1 mt-1">Nombre de Usuario</label>
                <input type="text" name="username" class="form-control mb-2" id="yourUsername" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="yourPassword" class="form-label">Password</label>
                <div class="col-6 input-group">
                  <input type="password" name="password" class="form-control" id="yourPassword" require aria-label="" aria-describedby="basic">
                  <span class="input-group-text" id="basic" type="button"><i class="bi bi-eye-slash"></i></span>
                </div>
              </div>

              <div class="col-md-4">
                <label for="validarFechaRegistro" class="form-label">Fecha de registro</label>
                <input type="date" class="form-control" id="validarFechaRegistro" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <?php
              $id_stmtt = $conn->prepare("select id_tipo_usuario , tipo_usuario from ctg_tipo_usuario;");
              $id_stmtt->execute();
              $tipoUsuario = $id_stmtt->get_result();
              ?>
              <div class="col-md-4">
                <label for="validarIdRol" class="form-label">ID Tipoo Usuario</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarIdRol" required>
                  <option value="0">Seleccione una opción</option>
                  <?php while ($ctg_tipo_usuario = $tipoUsuario->fetch_object()) { ?>
                    <option value=<?php echo $ctg_tipo_usuario->id_tipo_usuario  ?>>
                      <?php echo $ctg_tipo_usuario->id_tipo_usuario  . " - " . $ctg_tipo_usuario->tipo_usuario ?>
                    </option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-4">
                <label for="validarEstado" class="form-label">Estado</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarEstado" placeholder="12345" required>
                  <option value="0">Elija una opción</option>
                  <option value="A">Activo</option>
                  <option value="I">Innactivo</option>
                </select>
              </div>

              <div class="mb-3 d-flex justify-content-center">
                <button type="button" class="btn btn-success mx-1" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Crear" id="saveChangesBtn" onclick="crearFactura()">
                  <i class="bi bi-file-earmark-plus"> Crear</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Consulta y actualización de empleados</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="input-group mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Cédula empleado</label>
                <div class="input-group-append">
                  <input type="text" class="form-control" id="idFactura" placeholder="Ingrese el dato" aria-describedby="basic-addon2">
                </div>
                <div class="input-group-append">
                  <button class="btn btn-info mx-2" type="button" data-bs-toggle="modal" data-bs-target="#consultarModal">
                    <i class="bi bi-person-check"></i> Consultar
                  </button>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#actualizarModal">
                    <i class="bi bi-person-gear"></i> Actualizar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultar Modal -->
    <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="consultarModalLabel">Consulta de Empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 needs-validation" id="profileForm">
              <div class="mb-3 text-center">
                <label for="profileImage" class="col-md-12 col-form-label">Profile
                  Image</label>
                <div class="col-md-12">
                  <img id="profileImg" src="../librerias/assets/img/sin-perfil.png" alt="Profile" />
                </div>
              </div>

              <div class="col-md-6 mt-5">
                <label for="validarCedula" class="form-label">Cédula</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCedula" required />
              </div>


              <div class="col-md-6 mt-5">
                <label for="validarIdUsuario" class="form-label">ID de usuario</label>
                <input disabled="readonly" type="number" class="form-control" id="validarIdUsuario" required />
              </div>

              <div class="col-md-6">
                <label for="validarNomCompleto" class="form-label">Nombre y Apellidos</label>
                <input disabled="readonly" type="text" class="form-control" id="validarNomCompleto" required />
              </div>

              <div class="col-md-6">
                <label for="validarDir" class="form-label">Dirección de
                  recidencia</label>
                <input disabled="readonly" type="text" class="form-control" id="validarDir" required />
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Email</label>
                <input disabled="readonly" type="email" class="form-control" id="validarEmail" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarTelefono" class="form-label">Teléfono</label>
                <input disabled="readonly" type="number" class="form-control" id="validarTelefono" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Fecha de nacimiento</label>
                <input disabled="readonly" type="date" class="form-control" id="validarEmail" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Actualizar Modal -->
    <div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="actualizarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="actualizarModalLabel">Actualización de Empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 needs-validation" id="profileForm">
              <div class="mb-3 text-center">
                <label for="profileImage" class="col-md-12 col-form-label">Profile
                  Image</label>
                <div class="col-md-12">
                  <img id="profileImg" src="../librerias/assets/img/sin-perfil.png" alt="Profile" />
                  <div class="pt-2">
                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image" id="uploadBtn">
                      <i class="bi bi-upload"></i> Cargar
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image" id="removeBtn">
                      <i class="bi bi-trash"></i> Remover
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 mt-5">
                <label for="validarCedula" class="form-label">Cédula</label>
                <input type="number" class="form-control" id="validarCedula" placeholder="1234567890" required />
              </div>


              <div class="col-md-6 mt-5">
                <label for="validarIdUsuario" class="form-label">ID de usuario</label>
                <input disabled="readonly" type="number" class="form-control" id="validarIdUsuario" placeholder="12345" required />
              </div>

              <div class="col-md-6">
                <label for="validarNomCompleto" class="form-label">Nombre y Apellidos</label>
                <input type="text" class="form-control" id="validarNomCompleto" required />
              </div>

              <div class="col-md-6">
                <label for="validarDir" class="form-label">Dirección de
                  recidencia</label>
                <input type="text" class="form-control" id="validarDir" required />
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="validarEmail" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarTelefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="validarTelefono" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="validarEmail" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" onclick="guardarActualizacion()">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function consultarInformacion() {
        // Lógica para consultar la información y llenar el modal de consulta
        // ...
        // Abre el modal de consulta
        $('#consultarModal').modal('show');
      }

      function actualizarInformacion() {
        // Lógica para cargar la información y llenar el modal de actualización
        // ...
        // Abre el modal de actualización
        $('#actualizarModal').modal('show');
      }

      function guardarActualizacion() {
        // Lógica para guardar la actualización
        // ...
        // Cierra el modal de actualización
        $('#actualizarModal').modal('hide');
      }
    </script>

    <?php
    require_once '../modelo/controlador/conectar_bd.php';
    $conn = conectar_bd();
    $stmt = $conn->prepare(
      "SELECT
          u.id_usuario,
          u.nom_ape_usuario,
          u.e_mail_usuario,
          u.username,
          u.password_usuario,
          u.fecha_registro,
          t.tipo_usuario AS tipo_usuario,
          u.estado_usuario   
      FROM
          usuario u
      JOIN ctg_tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario;"
    );
    $stmt->execute();
    $usuarios = $stmt->get_result();
    ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-between align-items-center">
                Registro de Usuarios
                <div class="ms-auto">
                  <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exportar a PDF">
                    <i class="bi bi-file-earmark-pdf"> PDF</i>
                  </button>
                  <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exportar a Excel">
                    <i class="bi bi-file-earmark-excel"> Excel</i>
                  </button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Imprimir">
                    <i class="bi bi-printer"> Imprimir</i>
                  </button>
                </div>
              </h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID_Usua</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Fecha de registro</th>
                    <th scope="col">Tipo de usuario</th>
                    <th scope="col">Estado </th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($usuario = $usuarios->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $usuario["id_usuario"] ?></td>
                      <td><?php echo $usuario["nom_ape_usuario"] ?></td>
                      <td><?php echo $usuario["e_mail_usuario"] ?></td>
                      <td><?php echo $usuario["username"] ?></td>
                      <td><?php echo $usuario["password_usuario"] ?></td>
                      <td><?php echo $usuario["fecha_registro"] ?>
                      <td><?php echo $usuario["tipo_usuario"] ?></td>
                      <td><?php echo $usuario["estado_usuario"] ?></td>
                    </tr>
                  <?php } ?>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Jazmine Acosta - Carrillo Carlos - Gómez Julián - Piza Juan - Ruiz Laura
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Cargar imagen -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var profileImg = document.getElementById("profileImg");
      var uploadBtn = document.getElementById("uploadBtn");
      var removeBtn = document.getElementById("removeBtn");
      var saveChangesBtn = document.getElementById("saveChangesBtn");
      var profileForm = document.getElementById("profileForm");

      // Set the default profile image URL
      var defaultImageUrl =
        "../librerias/assets/img/sin-perfil.png";

      // Function to handle the "Remove" button click
      removeBtn.addEventListener("click", function(event) {
        event.preventDefault();

        // Set the profile image source to the default image URL
        profileImg.src = defaultImageUrl;
      });

      // Function to handle the "Upload" button click
      uploadBtn.addEventListener("click", function(event) {
        event.preventDefault();

        // Simulate file input click to trigger file selection
        var fileInput = document.createElement("input");
        fileInput.type = "file";
        fileInput.accept = "image/*";
        fileInput.style.display = "none";

        // Append the file input to the body and trigger a click event
        document.body.appendChild(fileInput);
        fileInput.click();

        // Remove the file input from the DOM after selection
        fileInput.addEventListener("change", function() {
          if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              // Set the profile image source to the selected image
              profileImg.src = e.target.result;
            };

            reader.readAsDataURL(fileInput.files[0]);
          }

          document.body.removeChild(fileInput);
        });
      });

      // Function to handle the "Save Changes" button click
      saveChangesBtn.addEventListener("click", function(event) {
        event.preventDefault();
        // Add your logic here to save the changes (e.g., using AJAX to send data to the server)
        alert("Changes saved successfully!");
      });
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="../librerias/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../librerias/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../librerias/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../librerias/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../librerias/assets/vendor/quill/quill.min.js"></script>
  <script src="../librerias/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../librerias/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../librerias/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../librerias/assets/js/main.js"></script>

</body>

</html>