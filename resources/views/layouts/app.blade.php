<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Select System | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- AOS CSS Animate -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  @yield('head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-ligth">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!--
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>-->
      </ul>

      <!-- SEARCH FORM 
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
      -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-birthday-cake"></i>
            <span class="badge badge-danger navbar-badge">5
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="{{asset('AdminLTE/dist/img/user1-128x128.jpg')}} " alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Fulano de Tal
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{asset('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light text-danger">SELECT SYSTEM</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Nome do Usuário Logado</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <!-- Student Menu  -->
            <li class="nav-header">CADASTROS / LISTAGENS</li>

            <li class="nav-item">
              <a href="{{route('dashboard.students.index')}}" class="nav-link @if(request()->is('dashboard/students*')) active  @endif">
                <i class="fas fa-address-card nav-icon"></i>
                <p>Alunos</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.teachers.index')}}" class="nav-link @if(request()->is('dashboard/teachers*')) active  @endif">
                <i class="fas fa-address-card nav-icon"></i>
                <p>Professores</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.modalities.index')}}" class="nav-link @if(request()->is('dashboard/modalities*')) active @endif">
                <i class="fas fa-ticket-alt nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Modalidades</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.groups.index')}}" class="nav-link @if(request()->is('dashboard/groups*')) active @endif">
                <i class="fas fa-ticket-alt nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Turmas</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.schedules.index')}}" class="nav-link @if(request()->is('dashboard/schedules*')) active @endif">
                <i class="fas fa-ticket-alt nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Quadro de Horários</p>
              </a>
            </li>

            <!-- Services Menu -->
            <li class="nav-header">SERVIÇOS</li>

            <!-- modality Menu -->
            <li class="nav-header">MODALIDADES</li>

            <li class="nav-item">
              <a href="{{route('dashboard.modalities.index')}}" class="nav-link @if(request()->is('dashboard/modalities/create')) active @endif">
                <i class="fas fa-ticket-alt nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lista de Modalidades</p>
              </a>
            </li>

            <!-- Financial Menu -->
            <li class="nav-header">FINANCEIRO</li>

            <li class="nav-item">
              <a href="{{route('dashboard.modalities.create')}}" class="nav-link @if(request()->is('dashboard/modalities/create'))  @endif">
                <i class="fas fa-user-plus nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lançamentos</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('dashboard.modalities.create')}}" class="nav-link @if(request()->is('dashboard/modalities/create'))  @endif">
                <i class="fas fa-user-plus nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lançamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dashboard.modalities.create')}}" class="nav-link @if(request()->is('dashboard/modalities/create'))  @endif">
                <i class="fas fa-user-plus nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lançamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dashboard.modalities.create')}}" class="nav-link @if(request()->is('dashboard/modalities/create'))  @endif">
                <i class="fas fa-user-plus nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lançamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dashboard.modalities.create')}}" class="nav-link @if(request()->is('dashboard/modalities/create'))  @endif">
                <i class="fas fa-user-plus nav-icon"></i>
                <!-- <span class="badge badge-success right">Concluído</span> -->
                <p>Lançamentos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('dashboard.modalities.index')}}" class="nav-link @if(request()->is('dashboard/modalities'))   @endif">
                <i class="fas fa-address-card nav-icon"></i>
                <p></p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container">
        @include('flash::message')
      </div>
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.5
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('AdminLTE/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('AdminLTE/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{asset('AdminLTE/plugins/moment/moment.min.js')}}"></script>
  <script src="{{asset('AdminLTE/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{asset('AdminLTE/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script>
  <!-- AOS Animate -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script>
    $('#flash-overlay-modal').modal();
    AOS.init();
    $(function() {


      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
        format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

    })
  </script>
</body>

</html>