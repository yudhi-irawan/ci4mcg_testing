<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <script type="text/javascript" src="<?php echo base_url('012.mcg.root.js'); ?>"></script>	
</head>


<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

		<!-- Navbar -->
		<?= $this->include('/templates/012_lt3_navbar'); ?>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<?= $this->include('/templates/012_lt3_sidebar'); ?>
		
		
		
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		<!--<div class="row">-->
		<!--  <div class="col-12">-->

			<?= $this->renderSection('page-content'); ?>

        <!--  </div>-->
        <!--</div>-->
		
      </div>
    </section>
  </div>

  
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://t.me/MCGFreeVersion">MCG - Massive CRUD Generator</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  
  
</div>
<!-- ./wrapper -->

</body>
</html>
