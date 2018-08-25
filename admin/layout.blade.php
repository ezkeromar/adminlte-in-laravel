@extends('layout')

@section('csscontent')

	<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/dist/css/skins/_all-skins.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">
  	<link rel="stylesheet" href="{{ asset('/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('/bower_components/select2/dist/css/select2.min.css') }}">

@endsection

@section('bodycontent')
	<div class="wrapper" id="app">
		@include('admin.header', ['some' => 'data'])
		@include('admin.sidebar', ['some' => 'data'])
		@yield('admincontent')
		@include('admin.footer', ['some' => 'data'])

		<div class="control-sidebar-bg"></div>
	</div>

@endsection


@section('jscontent')

	<!-- DataTables -->
	<script src="{{ asset('/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/bower_components/moment/moment.js') }}"></script>
	<script src="{{ asset('/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/bower_components/qtip2/jquery.qtip.js') }}"></script>
	<script src="{{ asset('/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
	<script src="{{ asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

	<!-- SlimScroll -->
	<script src="{{ asset('/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('/bower_components/fastclick/lib/fastclick.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('/bower_components/admin-lte/dist/js/adminlte.min.js') }}"></script>
	
	<script src="{{ asset('/js/app.js')}}"></script>

	<!-- page script -->
	<script>
	  $(function () {
	  	$('.select2').select2()
	    
	    $('#example1').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	  })
	</script>

@endsection