<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>HOME AREA RESTRITA | <?= $this->renderSection('titulo') ?></title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?php echo site_url('admin/'); ?>vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?php echo site_url('admin/'); ?>vendors/base/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <link rel="stylesheet" href="<?php echo site_url('admin/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="<?php echo site_url('admin/'); ?>css/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="<?php echo site_url('admin/'); ?>images/favicon.png" />

        <?= $this->renderSection('estilos') ?>

    </head>

                    <div class="content-wrapper">


                        <?php if (session()->has('sucesso')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Perfeito!</strong> <?= session('sucesso'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>
                        <?php if (session()->has('info')): ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Informação!</strong> <?= session('info'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>
                        <?php if (session()->has('atencao')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Alerta!</strong> <?= session('atencao'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>
                        
                        
                        <?php if ( session()->has('error')): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Erro!</strong> <?= session('error'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        <?php endif; ?>

                        <?= $this->renderSection('conteudo') ?>


                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="<?php echo site_url('admin/'); ?>vendors/base/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="<?php echo site_url('admin/'); ?>vendors/chart.js/Chart.min.js"></script>
        <script src="<?php echo site_url('admin/'); ?>vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="<?php echo site_url('admin/'); ?>vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="<?php echo site_url('admin/'); ?>js/off-canvas.js"></script>
        <script src="<?php echo site_url('admin/'); ?>js/hoverable-collapse.js"></script>
        <script src="<?php echo site_url('admin/'); ?>js/template.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?php echo site_url('admin/'); ?>js/dashboard.js"></script>
        <script src="<?php echo site_url('admin/'); ?>js/data-table.js"></script>
        <script src="<?php echo site_url('admin/'); ?>js/jquery.dataTables.js"></script>
        <script src="<?php echo site_url('admin/'); ?>js/dataTables.bootstrap4.js"></script>
        <!-- End custom js for this page-->
        <script src="<?php echo site_url('admin/'); ?>js/jquery.cookie.js" type="text/javascript"></script>


        <?= $this->renderSection('scripts') ?>

    </body>

</html>

