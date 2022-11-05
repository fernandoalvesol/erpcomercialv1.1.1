<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>ERP COMERCIAL</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale =1">
		<!--css-->

		<link rel="stylesheet" href="{{url('assets/painel/css/style.css')}}">
		<link rel="stylesheet" href="{{url('assets/painel/css/dataTables.min.css')}}">
		<link rel="stylesheet" href="js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" type="text/css" href="{{url('assets/painel/css/DataTables_boot.css')}}">
		<link rel="stylesheet" href="{{url('assets/painel/css/auxiliar.css')}}">
		<link rel="stylesheet" href="{{url('assets/painel/css/grade.css')}}">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>

<body>

    @include("Template.cabecalho")
    @include("Template.menu")

<div class="rows mx-0">

    @yield('container')


</div>
	<script src="{{url('assets/painel/js/jquery.min.js')}}"></script>
	<script src="{{url('assets/painel/js/tinymce/tinymce.min.js')}}"></script>
	<script src="{{url('assets/painel/js/datatables/js/jqueryles.responsive.min.js')}}"></script>
	<script src="{{url('assets/painel/js/jquery.form.js')}}"></script>
	<script src="{{url('assets/painel/js/jquery.mask.js')}}"></script>
	<script src="{{url('assets/painel/js/js.js')}}"></script>


	<!-- Graphs -->
    <script src="{{url('assets/painel/js/chart.js/Chart.min.js')}}"></script>
	<script src="{{url('assets/painel/js/funcao.js')}}"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
	  $( function() {
		$( "#tab" ).tabs();
	  } );
  </script>
</body>

</html>
