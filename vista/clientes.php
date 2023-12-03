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
                <h4>Rechazo solicitud de compra</h4>
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
            <a href="admin-empleados.html">
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
      <h1>Clientes</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-r1.html">Home</a></li>
          <li class="breadcrumb-item active">Facturación</li>
          <li class="breadcrumb-item active">Clientes</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registrar cliente</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Factura regsitro Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-3">
                <label for="inputText" class="form-label">ID Cliente</label>
                <input type="number" class="form-control" id="idClienteCons" placeholder="CC del Cliente" required />
              </div>

              <div class="col-md-3">
                <label for="validarIdEmpresa" class="form-label">ID Empresa</label>
                <input type="number" class="form-control" id="validarIdEmpresa" placeholder="12345" required />
              </div>

              <div class="col-md-6">
                <label for="validarNitCliente" class="form-label">NIT Cliente</label>
                <input type="text" class="form-control" id="validarNitCliente" placeholder="123456789-0" pattern="[0-9]{9}-[0-9]{1}" maxlength="11" required />
              </div>

              <div class="col-md-3">
                <label for="validarIdTipoCliente" class="form-label">ID Tipo Cliente</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarIdTipoCliente" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="1">1 - Persona Jurídica</option>
                  <option value="2">2 - Persona Natural</option>
                </select>
              </div>

              <div class="col-md-4">
                <label for="validarNom" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="validarNom" required />
              </div>

              <div class="col-md-5">
                <label for="validarApe" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="validarApe" required />
              </div>

              <div class="col-md-4">
                <label for="validarCodPostal" class="form-label">Código postal</label>
                <input type="number" class="form-control" id="validarCodPostal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <?php
              $id_stmtt = $conn->prepare("select id_ciudad, nombre_ciudad from ciudad;");
              $id_stmtt->execute();
              $ciudades = $id_stmtt->get_result();
              ?>
              <div class="col-md-4">
                <label for="validarIdCiudad" class="form-label">ID Ciudad</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarIdCiudad" required>
                  <option value="0">Seleccione una opción</option>
                  <?php while ($ciudad = $ciudades->fetch_object()) { ?>
                    <option value=<?php echo $ciudad->id_ciudad ?>> <?php echo $ciudad->id_ciudad . " - " . $ciudad->nombre_ciudad ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-4">
                <label for="validarDir" class="form-label">Dirección de recidencia</label>
                <input type="text" class="form-control" id="validarDir" required />
              </div>

              <div class="col-md-4">
                <label for="validarEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="validarEmail" placeholder="example@gmail.com" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarTelefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" id="validarTelefono" placeholder="312 345 6789" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCupoCred" class="form-label">Cupo crédito</label>
                <input type="number" class="form-control" id="validarCupoCred" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarSaldo" class="form-label">Saldo</label>
                <input type="number" class="form-control" id="validarSaldo" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarCompraMes" class="form-label">Compras del mes</label>
                <input type="number" class="form-control" id="validarCompraMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarPagosMes" class="form-label">Pagos del mes</label>
                <input type="number" class="form-control" id="validarPagosMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarEstado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validarEstado" placeholder="Ingrese 'A' -> Activo, 'I' -> Inactivo " maxlength="1" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="mb-3 d-flex justify-content-center">
                <button type="button" class="btn btn-success mx-1" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Crear" id="saveChangesBtn" onclick="crearUsuario()">
                  <i class="bi bi-person-add"> Crear</i>
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
          <h5 class="card-title">Consulta y actualización de cliente</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="input-group mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">ID Cliente</label>
                <div class="input-group-append">
                  <input type="text" class="form-control" id="idClienteCons" placeholder="Ingrese el dato" aria-describedby="basic-addon2">
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
            <h5 class="modal-title" id="consultarModalLabel">Consulta de Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Factura regsitro Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-4">
                <label for="idClienteModal" class="form-label">ID Cliente</label>
                <input disabled="readonly" type="number" class="form-control" id="idClienteModal" required />
              </div>

              <div class="col-md-4">
                <label for="validarIdEmpresa" class="form-label">ID Empresa</label>
                <input disabled="readonly" type="number" class="form-control" id="validarIdEmpresa" required />
              </div>

              <div class="col-md-4">
                <label for="validarNitCliente" class="form-label">NIT Cliente</label>
                <input disabled="readonly" type="text" class="form-control" id="validarNitCliente" required />
              </div>

              <div class="col-md-12">
                <label for="validarIdTipoCliente" class="form-label">ID Tipo Cliente</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdTipoCliente" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="1">1 - Persona Jurídica</option>
                  <option value="2">2 - Persona Natural</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarNom" class="form-label">Nombres</label>
                <input disabled="readonly" type="text" class="form-control" id="validarNom" required />
              </div>

              <div class="col-md-6">
                <label for="validarApe" class="form-label">Apellidos</label>
                <input disabled="readonly" type="text" class="form-control" id="validarApe" required />
              </div>

              <div class="col-md-6">
                <label for="validarCodPostal" class="form-label">Código postal</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCodPostal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarIdCiudad" class="form-label">ID Ciudad</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdCiudad" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarDir" class="form-label">Dirección de recidencia</label>
                <input disabled="readonly" type="text" class="form-control" id="validarDir" required />
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Email</label>
                <input disabled="readonly" type="email" class="form-control" id="validarEmail" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarTelefono" class="form-label">Teléfono</label>
                <input disabled="readonly" type="number" class="form-control" id="validarTelefono" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCupoCred" class="form-label">Cupo crédito</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCupoCred" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSaldo" class="form-label">Saldo</label>
                <input disabled="readonly" type="number" class="form-control" id="validarSaldo" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCompraMes" class="form-label">Compras del mes</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCompraMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarPagosMes" class="form-label">Pagos del mes</label>
                <input disabled="readonly" type="number" class="form-control" id="validarPagosMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarEstado" class="form-label">Estado</label>
                <input disabled="readonly" type="text" class="form-control" id="validarEstado" required />
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
            <h5 class="modal-title" id="actualizarModalLabel">Actualización de Cliente</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Factura regsitro Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-4">
                <label for="validarIdCliente" class="form-label">ID Cliente</label>
                <input disabled="readonly" type="number" class="form-control" id="validarIdCliente" placeholder="CC del Cliente" required />
              </div>

              <div class="col-md-4">
                <label for="idClienteAct" class="form-label">ID Empresa</label>
                <input disabled="readonly" type="number" class="form-control" id="idClienteAct" placeholder="12345" required />
              </div>

              <div class="col-md-4">
                <label for="validarNitCliente" class="form-label">NIT Cliente</label>
                <input disabled="readonly" type="text" class="form-control" id="validarNitCliente" placeholder="123456789-0" maxlength="11" required />
              </div>

              <div class="col-md-12">
                <label for="validarIdTipoCliente" class="form-label">ID Tipo Cliente</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdTipoCliente" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="1">1 - Persona Jurídica</option>
                  <option value="2">2 - Persona Natural</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarNom" class="form-label">Nombres</label>
                <input disabled="readonly" type="text" class="form-control" id="validarNom" required />
              </div>

              <div class="col-md-6">
                <label for="validarApe" class="form-label">Apellidos</label>
                <input disabled="readonly" type="text" class="form-control" id="validarApe" required />
              </div>

              <div class="col-md-6">
                <label for="validarCodPostal" class="form-label">Código postal</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCodPostal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarIdCiudad" class="form-label">ID Ciudad</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdCiudad" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarDir" class="form-label">Dirección de recidencia</label>
                <input disabled="readonly" type="text" class="form-control" id="validarDir" required />
              </div>

              <div class="col-md-6">
                <label for="validarEmail" class="form-label">Email</label>
                <input disabled="readonly" type="email" class="form-control" id="validarEmail" placeholder="example@gmail.com" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarTelefono" class="form-label">Teléfono</label>
                <input disabled="readonly" type="number" class="form-control" id="validarTelefono" placeholder="312 345 6789" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCupoCred" class="form-label">Cupo crédito</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCupoCred" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSaldo" class="form-label">Saldo</label>
                <input disabled="readonly" type="number" class="form-control" id="validarSaldo" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCompraMes" class="form-label">Compras del mes</label>
                <input disabled="readonly" type="number" class="form-control" id="validarCompraMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarPagosMes" class="form-label">Pagos del mes</label>
                <input disabled="readonly" type="number" class="form-control" id="validarPagosMes" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarEstado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validarEstado" maxlength="1" required />
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
      function crearFactura() {
        // Obtener los datos del formulario (reemplaza con la lógica para obtener los valores del formulario)
        var fechaFactura = document.getElementById('validarFechFact').value;
        var idTipoFac = document.getElementById('validarIdTipoCliente').value;
        var clienteFactura = document.getElementById('validarIdCliente').value;
        var totalFactura = document.getElementById('validarTotal').value;
        var descuentoFactura = document.getElementById('validarDto').value;
        var ivaFactura = document.getElementById('validarIVA').value;
        var subtotalFactura = document.getElementById('validarSubtotal').value;
        var saldoFactura = document.getElementById('validarSaldo').value;
        var estadoFactura = document.getElementById('validarEstado').value;


        // Crear un objeto FormData y agregar los datos del formulario
        var formData = new FormData();
        formData.append('fechaFactura', fechaFactura);
        formData.append('idTipoFac', idTipoFac);
        formData.append('clienteFactura', clienteFactura);
        formData.append('totalFactura', totalFactura);
        formData.append('descuentoFactura', descuentoFactura);
        formData.append('ivaFactura', ivaFactura);
        formData.append('subtotalFactura', subtotalFactura);
        formData.append('saldoFactura', saldoFactura);
        formData.append('estadoFactura', estadoFactura);
        //console.log(fechaFactura);
        //console.log(formatearFechaParaBaseDatos(fechaFactura));

        // Realizar la solicitud 
        fetch('../modelo/crearfactura.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            // Procesar la respuesta del servidor si es necesario
            if (!data.hasOwnProperty('error')) {
              console.log(data);
              alert(data["success"]);
              window.location.reload();
            } else {
              alert(data["error"]);
            }
            // Cerrar el modal o realizar otras acciones según tus necesidades
            // Aquí asumo que estás utilizando Bootstrap para los modales
            $('#crearFacturaModal').modal('hide');
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }

      function consultarFactura() {
        // Lógica para consultar la información y llenar el modal de consulta
        // Obtener el valor del campo idCliente
        var idCliente = document.getElementById('idClienteCons').value;

        if (idCliente != "" || idCliente >= 1) {
          //Crear FormData 
          var formData = new FormData();
          formData.append('idClienteCons', idCliente);
          // Realizar la solicitud fetch
          fetch('../modelo/consultafacturas.php', {
              method: 'POST',
              body: formData,
            })
            .then(response => response.json())
            .then(data => {
              // Procesar la respuesta del servidor si es necesario
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              if (!data.hasOwnProperty('error')) {
                document.getElementById('idClienteModal').value = data["idCliente"];
                document.getElementById('validarFechFactModal').value = data["fechaFactura"];
                document.getElementById('validarIdTipoClienteModal').value = data["idTipoFac"];
                document.getElementById('validarIdClienteModal').value = data["clienteFactura"];
                document.getElementById('validarTotalModal').value = data["totalFactura"];
                document.getElementById('validarDtoModal').value = data["descuentoFactura"];
                document.getElementById('validarIVAModal').value = data["ivaFactura"];
                document.getElementById('validarSubtotalModal').value = data["subtotalFactura"];
                document.getElementById('validarSaldoModal').value = data["saldoFactura"];
                document.getElementById('validarEstadoModal').value = data["estadoFactura"];
              }

            })
            .catch(error => {
              console.error('Error:', error);
            });

        }
        // Abre el modal de consulta
        //$('#consultarModal').modal('show');

      }

      function cerrarModalConsulta() {

        document.getElementById('idClienteModal').value = "";
        document.getElementById('validarFechFactModal').value = "";
        document.getElementById('validarIdTipoClienteModal').value = "";
        document.getElementById('validarIdClienteModal').value = "";
        document.getElementById('validarTotalModal').value = "";
        document.getElementById('validarDtoModal').value = "";
        document.getElementById('validarIVAModal').value = "";
        document.getElementById('validarSubtotalModal').value = "";
        document.getElementById('validarSaldoModal').value = "";
        document.getElementById('validarEstadoModal').value = "";

      }

      function actualizarInformacion() {
        // Lógica para cargar la información y llenar el modal de actualización        
        // Obtener el valor del campo idCliente
        var idCliente = document.getElementById('idClienteCons').value;

        if (idCliente != "" || idCliente >= 1) {
          //Crear FormData 
          var formData = new FormData();
          formData.append('idClienteCons', idCliente);
          // Realizar la solicitud fetch
          fetch('../modelo/consultafacturas.php', {
              method: 'POST',
              body: formData,
            })
            .then(response => response.json())
            .then(data => {
              // Procesar la respuesta del servidor si es necesario
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              if (!data.hasOwnProperty('error')) {
                document.getElementById('idClienteAct').value = data["idCliente"];
                document.getElementById('validarFechFactAct').value = data["fechaFactura"];
                document.getElementById('validarIdTipoClienteAct').value = data["idTipoFac"];
                document.getElementById('validarIdClienteAct').value = data["clienteFactura"];
                document.getElementById('validarTotalAct').value = data["totalFactura"];
                document.getElementById('validarDtoAct').value = data["descuentoFactura"];
                document.getElementById('validarIVAAct').value = data["ivaFactura"];
                document.getElementById('validarSubtotalAct').value = data["subtotalFactura"];
                document.getElementById('validarSaldoAct').value = data["saldoFactura"];
                document.getElementById('validarEstadoAct').value = data["estadoFactura"];
              }

            })
            .catch(error => {
              console.error('Error:', error);
            });

        }
        // Abre el modal de actualización
        //$('#actualizarModal').modal('show');
      }

      function guardarActualizacion() {
        // Obtener el formulario
        // Obtener los valores de los campos del formulario
        var idCliente = document.getElementById('idClienteAct').value;
        var nuevaFecha = document.getElementById('validarFechFactAct').value;
        var nuevoIdTipoFac = document.getElementById('validarIdTipoClienteAct').value;
        var nuevoClienteFactura = document.getElementById('validarIdClienteAct').value;
        var nuevoTotalFactura = document.getElementById('validarTotalAct').value;
        var nuevoDescuentoFactura = document.getElementById('validarDtoAct').value;
        var nuevoIvaFactura = document.getElementById('validarIVAAct').value;
        var nuevoSubtotalFactura = document.getElementById('validarSubtotalAct').value;
        var nuevoSaldoFactura = document.getElementById('validarSaldoAct').value;
        var nuevoEstadoFactura = document.getElementById('validarEstadoAct').value;


        // Crear un objeto FormData con los datos del formulario
        // Crear FormData 
        var formData = new FormData();
        formData.append('idClienteAct', idCliente);
        formData.append('FechaAct', nuevaFecha);
        formData.append('IdTipoFacAct', nuevoIdTipoFac);
        formData.append('ClienteFacturaAct', nuevoClienteFactura);
        formData.append('TotalFacturaAct', nuevoTotalFactura);
        formData.append('DescuentoFacturaAct', nuevoDescuentoFactura);
        formData.append('IvaFacturaAct', nuevoIvaFactura);
        formData.append('SubtotalFacturaAct', nuevoSubtotalFactura);
        formData.append('SaldoFacturaAct', nuevoSaldoFactura);
        formData.append('EstadoFacturaAct', nuevoEstadoFactura);

        // Realizar la solicitud fetch
        fetch('../modelo/Updatefactura.php', {
            method: 'POST',
            body: formData,
          })
          .then(response => response.json())
          .then(data => {
            if (!data.hasOwnProperty('error')) {
              console.log(data);
              alert(data["success"]);
              window.location.reload();
            } else {
              alert(data["error"]);
            }

            // Cerrar el modal después de la actualización            
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }
    </script>

    <?php
    $stmt = $conn->prepare("select * from cliente;");
    $stmt->execute();
    $clientes = $stmt->get_result();
    ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-between align-items-center">
                Registro de clientes
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
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Razon Social</th>
                    <th scope="col">Tipo Cliente</th>
                    <th scope="col">Nombres y Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cupo Credito</th>
                    <th scope="col">Saldo</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($cliente = $clientes->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $cliente['id_cliente'] ?></td>
                      <td><?php echo $cliente['rsocial_cliente'] ?></td>
                      <td><?php echo $cliente['id_tipo_cliente'] ?></td>
                      <td><?php echo $cliente['nombre_cliente'] . " " . $cliente['apellido_cliente'] ?></td>
                      <td><?php echo $cliente['correo_cliente'] ?></td>
                      <td><?php echo $cliente['cupocredito_cliente'] ?></td>
                      <td><?php echo $cliente['saldo_cliente'] ?></td>
                      <td><?php echo $cliente['estado_cliente'] ?></td>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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