<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title', 'Guarderia | UAB')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Date Range Pickers -->
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
   <!-- Date Pickers -->
  <link rel="stylesheet" href="{{ url('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

  <link rel="stylesheet" href="{{ url('plugins/iCheck/all.css')}}">

  <link rel="stylesheet" href="{{ url('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

  <link rel="stylesheet" href="{{ url('plugins/timepicker/bootstrap-timepicker.min.css')}}">

  <link rel="stylesheet" href="{{ url('bower_components/select2/dist/css/select2.min.css')}}">

  <!-- Datatables -->
  <link rel="stylesheet" href="{{ url('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('bower_components/datatables.net-bs/css/buttons.dataTables.min.css')}}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ url('dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{ url('css/impresion.css')}}" media="print" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ url('home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G.</b>U.</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Guardería</b>UAB</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            
          </li>
          
          <!-- User Account Menu -->
          @guest
          
          <li class="dropdown tasks-menu">
           <a href="{{ route('login') }}" class="nav-link" >
              <i class="fa fa-unlock"></i> {{ __('Login') }}
              
            </a>
            
          </li>

          <li class="dropdown user user-menu">
              <a class="nav-link" href="{{ route('register') }}">
              <i class="fa fa-user"></i> {{ __('Register') }}</a>
          </li>
          
          @else
          <!-- Control Sidebar Toggle Button -->
          
          <!-- Right Side Of Navbar -->
         <!-- Tasks: style can be found in dropdown.less -->
         <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> {{ Auth::user()->name }}
              
            </a>
            <ul class="dropdown-menu">
              <li class="header">Opciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    
                    <a class="btn btn-primry" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <i class="fa fa-lock"></i>
                        {{ __('Logout') }}
                    </a>
                                        
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                    </form>
                  </li>
                  <!-- end task item -->
                 
                </ul>
              </li>
              
            </ul>
          </li>
        @endguest
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
     
      </div> 

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Panel de Control</li>
        <!-- configuracion -->
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Configuraci&oacute;n</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/grupos')}}">Grupos</a></li>
            <li><a href="{{url('/usuarios')}}">Usuarios</a></li>                          
          </ul>
        </li>
        <!-- Registro -->
        <li class="treeview">
          <a href="#"><i class="fa fa-pencil-square-o"></i> <span>Registro</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/beneficiarios')}}">Beneficiarios</a></li>
            <li><a href="{{url('/educadoras')}}">Educadoras</a></li>
            <li><a href="{{url('/infantes')}}">Infantes</a></li>
            <li><a href="{{url('/apoderados')}}">Apoderados</a></li>            
          </ul>
        </li>
        <!-- Academico -->
        <li class="treeview">
          <a href="#"><i class="fa fa-graduation-cap"></i> <span>Academico</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/inscritos')}}"><i class="fa fa-link"></i> <span>Inscripciones</span></a></li>
            <li><a href="{{url('/asistencias')}}"><i class="fa fa-link"></i> <span>Asistencias</span></a></li>
            <li><a href="{{url('/evaluaciones')}}"><i class="fa fa-link"></i> <span>Evaluaciones</span></a></li>
          </ul>
        </li>
        <!-- Servicios-->
        <li class="treeview">
          <a href="#"><i class="fa fa-suitcase"></i> <span>Servicios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/nutricionales')}}">Nutricionales</a></li>
            <li><a href="{{url('/sicologicos')}}">Sicologicos</a></li>
            <li><a href="{{url('/salud')}}">Salud</a></li>            
          </ul>
        </li>
         <!--  Kardex -->
        <li class="treeview">
          <a href="#"><i class="fa fa-folder"></i> <span>Kardex</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/verinfantes')}}">Infantes</a></li> 
            <li><a href="{{url('/vereducadoras')}}">Educadoras</a></li> 
            
          </ul>
        </li>
       <!-- Estadisticas -->
        <li class="treeview">
          <a href="#"><i class="fa fa-bar-chart"></i> <span>Estadisticas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/generales')}}">Estadisticas</a></li>
           
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">Carrera de Ingeniería de Sistemas</a>.</strong> Universitarios : Sulmian Maderlin Terrazas Mamani - Giovannia Arelia Rodriguez Caller.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ url('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}"></script>

<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>

<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>

<script src="{{ url('bower_components/moment/min/moment.min.js') }}"></script>

<script src="{{ url('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ url('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>

<script src="{{ url('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<script src="{{ url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

<script src="{{ url('plugins/iCheck/icheck.min.js') }}"></script>

<script src="{{ url('bower_components/fastclick/lib/fastclick.js') }}"></script>

<!-- Datatables.net -->
<script src="{{ url('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ url('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('bower_components/datatables.net-bs/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('bower_components/datatables.net-bs/js/buttons.print.min.js') }}"></script>
<script src="{{ url('bower_components/datatables.net-bs/js/dataTables.select.min.js') }}"></script>
<script src="{{ url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('bower_components/inputmask/dist/min/inputmask/inputmask.min.js') }}"></script>
<script src="{{ url('dist/js/fastclick/lib/fastclick.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.min.js') }}"></script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy/mm/dd', { 'placeholder': 'yyyy/mm/dd' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
   
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    $('#tab1').DataTable(
      {
        dom: 'Bfrtip',
        buttons: [
          'print'
        ],
        
        
        "language": { ////cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json
            "info": "_TOTAL_ registros",
            "search":"Bucar",
            "paginate": {
              "next":"Siguiente",
              "previous":"Anterior",
            },
            "loadingRecoders":"Cargando...",
            "processing":"Procesando...",
            "emptyTable":"No hay datos",
            "ZeroRecords":"No hay coincidencias",
            "infoEmpty":"",
            "infoFiltered":""
        }
    } 
     )
    $('#tab2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

  })
</script>


</body>


</html>