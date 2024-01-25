<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
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
      <h1>Almacén</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-r1.html">Home</a></li>
          <li class="breadcrumb-item active">Almacén</li>
          <li class="breadcrumb-item active">Productos</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registrar producto</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- producto Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-4">
                <label for="idProducto" class="form-label">ID Producto</label>
                <input type="number" class="form-control" id="idProducto" placeholder=" Valor autoincrementable" disabled="readonly" required />
              </div>

              <div class="col-md-4">
                <label for="validarIdCategoria" class="form-label">ID Categoria</label>
                <input type="number" class="form-control" id="validarIdCategoria" placeholder="12345" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarCodProduct" class="form-label">Código Producto</label>
                <input type="number" class="form-control" id="validarCodProduct" placeholder="12345" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-12">
                <div class="form-floating">
                  <textarea maxlength="256" class="form-control" placeholder="Address" id="validarDscProducto" style="height: 100px;"></textarea>
                  <label for="validarDscProducto">Descripción del Producto</label>
                </div>
              </div>

              <div class="col-md-3">
                <label for="validarExisProducto" class="form-label">Existencia</label>
                <input type="number" class="form-control" id="validarExisProducto" maxlength="3" required />
              </div>

              <div class="col-md-3">
                <label for="validarValActual" class="form-label">Valor de venta actual</label>
                <input type="number" class="form-control" id="validarValActual" maxlength="10" required />
              </div>

              <div class="col-md-3">
                <label for="validarValAntes" class="form-label">Valor de venta anterior</label>
                <input type="number" class="form-control" id="validarValAntes" maxlength="10" required />
              </div>

              <div class="col-md-3">
                <label for="validarDtoMin" class="form-label">Descuento min</label>
                <input type="text" class="form-control" id="validarDtoMin" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarDtoMax" class="form-label">Descuento Max</label>
                <input type="text" class="form-control" id="validarDtoMax" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarCostoVenta" class="form-label">Costo de Venta</label>
                <input type="text" class="form-control" id="validarCostoVenta" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarMargenUtilidad" class="form-label">Margen de Utilidad</label>
                <input type="text" class="form-control" id="validarMargenUtilidad" maxlength="5" placeholder="00.00" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-3">
                <label for="validarIVA" class="form-label">IVA</label>
                <input type="text" class="form-control" id="validarIVA" maxlength="5" placeholder="00.00" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarStockMin" class="form-label">Stock Min</label>
                <input type="number" class="form-control" id="validarStockMin" maxlength="3" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarStockMax" class="form-label">Stock Max</label>
                <input type="number" class="form-control" id="validarStockMax" maxlength="3" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarEstado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validarEstado" placeholder="Ingrese 'A' -> Activo, 'I' -> Inactivo " maxlength="1" required />
                <div id="feedback-message" class="invalid-feedback"></div>
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
          <h5 class="card-title">Consulta y actualización de producto</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="input-group mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">ID Producto</label>
                <div class="input-group-append">
                  <input type="text" class="form-control" id="idFacturaCons" placeholder="Ingrese el dato" aria-describedby="basic-addon2">
                </div>
                <div class="input-group-append">
                  <button class="btn btn-info mx-2" type="button" data-bs-toggle="modal" data-bs-target="#consultarModal" onclick="consultarFactura()">
                    <i class="bi bi-search"></i> Consultar
                  </button>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#actualizarModal" onclick="actualizarInformacion()">
                    <i class="bi bi-file-arrow-up"></i> Actualizar
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
            <h5 class="modal-title" id="consultarModalLabel">Consulta de Factura</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 needs-validation" id="consultarForm">
              <div class="col-md-6">
                <label for="idFacturaModal" class="form-label">ID Factura</label>
                <input type="number" class="form-control" id="idFacturaModal" placeholder=" Valor autoincrementable" disabled="readonly" required />
              </div>

              <div class="col-md-6">
                <label for="validarFechFactModal" class="form-label">Fecha de la factura</label>
                <input type="datetime-local" class="form-control" id="validarFechFactModal" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarIdTipoCliente" class="form-label">ID de tipo de factura</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarIdTipoClienteModal" disabled="disabled" required>
                  <option value="0">Elija una opción</option>
                  <option value="1">1 - Factura ordinaria</option>
                  <option value="2">2 - Factura simplificada o ticket</option>
                  <option value="3">3 - Factura proforma</option>
                  <option value="4">4 - Factura rectificativa</option>
                  <option value="5">5 - Factura recapitulativa</option>
                  <option value="6">6 - Factura electrónica</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarIdClienteModal" class="form-label">Cliente de la factura</label>
                <input type="text" class="form-control" disabled="readonly" id="validarIdClienteModal" required />
              </div>

              <div class="col-md-4">
                <label for="validarTotalModal" class="form-label">Total</label>
                <input type="text" class="form-control" id="validarTotalModal" disabled="readonly" required />
              </div>

              <div class="col-md-4">
                <label for="validarDtoModal" class="form-label">Descuento</label>
                <input type="text" class="form-control" id="validarDtoModal" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarIVAModal" class="form-label">IVA</label>
                <input type="text" class="form-control" id="validarIVAModal" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSubtotalModal" class="form-label">Subtotal</label>
                <input type="text" class="form-control" id="validarSubtotalModal" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSaldoModal" class="form-label">Saldo</label>
                <input type="text" class="form-control" id="validarSaldoModal" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
              <div class="col-md-4">
                <label for="validarEstadoModal" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validarEstadoModal" placeholder="" maxlength="1" disabled="readonly" required />
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
            <h5 class="modal-title" id="actualizarModalLabel">Actualización de Factura</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3 needs-validation" id="actualizarForm">
              <div class="col-md-6">
                <label for="idFacturaAct" class="form-label">ID Factura</label>
                <input type="number" class="form-control" id="idFacturaAct" placeholder=" Valor autoincrementable" disabled="readonly" required />
              </div>

              <div class="col-md-6">
                <label for="validarFechFactAct" class="form-label">Fecha de la factura</label>
                <input type="datetime-local" class="form-control" id="validarFechFactAct" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarIdTipoClienteAct" class="form-label">ID de tipo de factura</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdTipoClienteAct" disabled="readonly" required>
                  <option value="0">Elija una opción</option>
                  <option value="1">1 - Factura ordinaria</option>
                  <option value="2">2 - Factura simplificada o ticket</option>
                  <option value="3">3 - Factura proforma</option>
                  <option value="4">4 - Factura rectificativa</option>
                  <option value="5">5 - Factura recapitulativa</option>
                  <option value="6">6 - Factura electrónica</option>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarIdClienteAct" class="form-label">Cliente de la factura</label>
                <input disabled="readonly" type="text" class="form-control" disabled="readonly" id="validarIdClienteAct" required />
              </div>

              <div class="col-md-4">
                <label for="validarTotalAct" class="form-label">Total</label>
                <input disabled="readonly" type="text" class="form-control" id="validarTotalAct" required />
              </div>

              <div class="col-md-4">
                <label for="validarDtoAct" class="form-label">Descuento</label>
                <input disabled="readonly" type="text" class="form-control" id="validarDtoAct" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarIVAAct" class="form-label">IVA</label>
                <input disabled="readonly" type="text" class="form-control" id="validarIVAAct" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSubtotalAct" class="form-label">Subtotal</label>
                <input disabled="readonly" type="text" class="form-control" id="validarSubtotalAct" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-4">
                <label for="validarSaldoAct" class="form-label">Saldo</label>
                <input disabled="readonly" type="text" class="form-control" id="validarSaldoAct" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
              <div class="col-md-4">
                <label for="validarEstadoAct" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validarEstadoAct" maxlength="1" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="guardarActualizacion()">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <?php
    require_once '../modelo/controlador/conectar_bd.php';
    $conn = conectar_bd();
    $stmt = $conn->prepare("select * from producto;");
    $stmt->execute();
    $productos = $stmt->get_result();
    ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-between align-items-center">
                Registro de Productos
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
                    <th scope="col">ID_Producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Valor Actual</th>
                    <th scope="col">Valor Anterior</th>
                    <th scope="col">Costo de venta</th>>
                    <th scope="col">IVA</th>
                    <th scope="col">Stock Min</th>
                    <th scope="col">Stock Max</th>
                    <th scope="col">Estado </th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($factura = $productos->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $factura["id_producto"] ?></td>
                      <td><?php echo $factura["des_producto"] ?></td>
                      <td><?php echo $factura["precio_venta_act"] ?></td>
                      <td><?php echo $factura["precio_venta_ant"] ?></td>
                      <td><?php echo $factura["costo_venta"] ?></td>
                      <td><?php echo $factura["valor_iva"] ?>
                      <td><?php echo $factura["stock_minimo"] ?></td>
                      <td><?php echo $factura["stock_maximo"] ?></td>
                      <td><?php echo $factura["estado_producto"] ?></td>
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


    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Productos</h5>

          <!-- Tarjetas de productos -->
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-1.jpg" class="card-img-top" alt="Imagen 1">
                <div class="card-body">
                  <h5 class="card-title mt-0">SM Compra Colombiana - Limón Tahití Malla TAEQ 1000 gr
                  </h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 2.216</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $2,22)</i><br>
                    <span class="badge bg-dark">-35% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        3.390</del></i><br>
                    <b>Referencia</b><br>
                    22554 <br>
                    <b>Tipo de Producto</b><br>
                    Maya de limones 1kg <br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-2.jpg" class="card-img-top" alt="Imagen 2">
                <div class="card-body">
                  <h5 class="card-title mt-0">SM Compra Colombiana - Aguacate Hass 1 und</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 1.072</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $2.38)</i><br>
                    <span class="badge bg-dark">-20% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        1.340</del></i><br>
                    <b>Referencia</b><br>
                    85369 <br>
                    <b>Tipo de Producto</b><br>
                    Aguacate Hass Colombiano<br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-3.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Diana - Arroz Blanco Arroba DIANA 12500 gr</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 49.585</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $4)</i><br>
                    <span class="badge bg-dark">-6% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        52.750</del></i><br>
                    <b>Referencia</b><br>
                    25478 <br>
                    <b>Tipo de Producto</b><br>
                    Arroz blanco<br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-4.jpg" class=" card-img-top" alt="Imagen 4">
                <div class="card-body">
                  <h5 class="card-title mt-0">Sello Rojo - Café Fuerte Tostado Y Molido X 600 gr</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 16.575</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $27,63)</i><br>
                    <span class="badge bg-dark">-25% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        22.100</del></i><br>
                    <b>Referencia</b><br>
                    1023046 <br>
                    <b>Tipo de Producto</b><br>
                    Café <br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-5.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Manuelita - Azucar Alta Pureza MANUELITA 2000 gr</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 6.329</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $4,34)</i><br>
                    <span class="badge bg-dark">-27% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        8.670</del></i><br>
                    <b>Referencia</b><br>
                    75286 <br>
                    <b>Tipo de Producto</b><br>
                    Azúcar blanca refinada<br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-6.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Colanta - Queso Tipo Cheddar COLANTA</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 11.388</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $75,92)</i><br>
                    <span class="badge bg-dark">-25% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        14.235</del></i><br>
                    <b>Referencia</b><br>
                    52789 <br>
                    <b>Tipo de Producto</b><br>
                    lacteo sólido en conservación<br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-7.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Hatsu - <br>Té HATSU 2400 ml</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 20.250</p>
                  </h6>
                  <p class="card-text">
                    <i>(ml a $9,38)</i><br>
                    <span class="badge bg-dark">-10% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        22.500</del></i><br>
                    <b>Referencia</b><br>
                    89823 <br>
                    <b>Tipo de Producto</b><br>
                    Té con saborizantes y edulcorantes <br>
                    <b>Número de Piezas</b><br>
                    12
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-8.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Margarita - Papa Familiar Pollo MARGARITA 105 gr</h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 4.634</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $44,13)</i><br>
                    <span class="badge bg-dark">-35% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        7.130</del></i><br>
                    <b>Referencia</b><br>
                    75842 <br>
                    <b>Tipo de Producto</b><br>
                    Papa artificial sabor a Pollo <br>
                    <b>Número de Piezas</b><br>
                    1
                  </p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="../librerias/assets/img/product-9.jpg" class="card-img-top" alt="Imagen 3">
                <div class="card-body">
                  <h5 class="card-title mt-0">Alqueria - ALIM LCTEO CUCHAR M&M FOURP ALQUERIA 400 gr
                  </h5>
                  <h6 class="card-text">
                    <p style="font-size: x-large;">$ 8.800</p>
                  </h6>
                  <p class="card-text">
                    <i>(gr a $22)</i><br>
                    <span class="badge bg-dark">-25% </span><i>&nbsp&nbsp&nbsp<del style="color: gray;"> $
                        11.200</del></i><br>
                    <b>Referencia</b><br>
                    7553 <br>
                    <b>Tipo de Producto</b><br>
                    Bebidas Con Adiciones <br>
                    <b>Número de Piezas</b><br>
                    4
                  </p>
                </div>
              </div>
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