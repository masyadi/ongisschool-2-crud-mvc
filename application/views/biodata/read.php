<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="tutorial codeigniter 3">
    <meta name="author" content="riky nurdiana">

    <title>Tutorial Cdoeigniter 3</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">Tutorial Codeigniter 3</a>
            </div>
            <!-- /.navbar-header -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/biodata" class="active"><i class="fa fa-dashboard fa-fw"></i> Biodata</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Detail Biodata <?php echo $data->nama; ?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <?php if ( $this->session->flashdata('add_success') ): ?>
                    <div class="alert alert-info">
                        <?php echo $this->session->flashdata('add_success'); ?>
                    </div>
                <?php endif; ?>

                <?php if ( $this->session->flashdata('edit_success') ): ?>
                    <div class="alert alert-success">
                        <?php echo $this->session->flashdata('edit_success'); ?>
                    </div>
                <?php endif; ?>

                <?php if ( $this->session->flashdata('delete_success') ): ?>
                    <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('delete_success'); ?>
                    </div>
                <?php endif; ?>

                <div class="clearfix"></div>

                <table class="table table-striped">
                    <tr>
                        <td>ID</td>
                        <td><?php echo $data->id; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo $data->nama; ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><?php echo $data->umur; ?></td>
                    </tr>
                    <tr>
                        <td>Create at</td>
                        <td><?php echo $data->create_at; ?></td>
                    </tr>
                    <tr>
                        <td>Update at</td>
                        <td><?php echo $data->update_at; ?></td>
                    </tr>
                  </table>
                  <a href="<?php echo base_url(); ?>index.php/biodata" type="button" class="btn btn-warning">Kembali</a>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>dist/js/sb-admin-2.js"></script>

</body>

</html>
