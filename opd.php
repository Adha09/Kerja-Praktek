<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Laporan</title>

    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssadmin/header.css');?>">
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" 
            style="background-color:#3E669A;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">               
                <div class="sidebar-brand-icon " style="margin-top:80px;">
                    <div class="sidebar-brand-text mx-3" >
                        <img class="img-profile" width="100px" 
                            src="<?php echo base_url(); ?>assets/img/1.png" alt="">
                    </div>        
                    Admin <hr> 
                </div>    
                          
            </a>
            <br>
            <br>
            <br>

             

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(). 'admin/beranda';?>">
                    <i class="sidebar-brand-icon">
                    <img class="img-profile" width="100px" 
                        src="<?php echo base_url(); ?>assets/img/home.png" alt="">
                    </i>
                    <span style="font-size:16px;"><b>Beranda</b></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(). 'admin/data';?>">
                    <i class="sidebar-brand-icon">
                    <img class="img-profile" width="100px" 
                        src="<?php echo base_url(); ?>assets/img/data.png" alt="">
                    </i>
                    <span style="font-size:16px;"><b>Data Laporan</b></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(). 'admin/opd';?>">
                    <i class="sidebar-brand-icon">
                    <img class="img-profile" width="100px" 
                        src="<?php echo base_url(); ?>assets/img/data.png" alt="">
                    </i>
                    <span style="font-size:16px;"><b>Data OPD</b></span></a>
            </li>
                                       
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

 
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                         
                        <!-- Nav Item - User Information -->
                        <li style="margin-right:700px; margin-top:4px;">                      
                                <img class="img-profile" width="250px"
                                    src="<?php echo base_url(); ?>assets/img/logo.png" alt="">
                             
                             
                        </li>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" style="color:#616366; font-size:14px;" 
                            href="<?= base_url('admin/logout');?>">
                                 Keluar 
                                <img class="" width="20px" style="margin-left:5px;"
                                    src="<?php echo base_url(); ?>assets/img/keluar.png" alt="">
                            </a>
                             
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" >               
                    <h1 class="h3 mb-4 text-gray-900" align="center">Data OPD</h1>
                    <div class="tabel" >
                        <form method="post" action="<?php echo base_url().'admin/data'?>" 
                            enctype="multipart/form-data"  style="overflow:scroll; height:500px;"> 
                            <div class="panel panel-default" >           
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" border="1px" style="margin-top:5px;">
                                            <thead >
                                                <tr style="color:black;" align="center">
                                                    <th>No</th>                                                                                                                                                                                                                               
                                                    <th>Nama OPD</th>  
                                                     <!-- <th>Aksi</th> -->
                                                </tr>
                                            </thead> 
                                            <?php   
                                                $no=1;                        
                                                foreach ($opd as $opd):?>
                                                    <tr class="text-gray-800" align="center">
                                                        <td><?php echo $no++?></td>  
                                                        <td><?php echo $opd->nama_opd ?></td>
                                                        <!-- <td>
                                                            <a><?php echo anchor('admin/hapus/'. $opd->id_opd,'
                                                            <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i><span>hapus</span></div>')?></a>

                                                            <a><?php echo anchor('admin/edit/'. $opd->id_opd, '
                                                            <div class="btn btn-success btn-sm"><i class="fa fa-edit"></i><span>edit</span></div>')?></a>
                                                        </td> -->
                                                    </tr>
                                            <?php endforeach;?>
                                                              
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                     
                    

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

 
    <div class="foter" style="background-color:#10325D; margin-top:1px; ">
    <br>
    <nav >
            <ul >
                <li><img src="<?php echo base_url(); ?>assets/img/2.png" alt="" width="200px"></li>
                <li ><a href="<?php echo base_url(). 'pelapor/index';?>" style="margin-left:500px; color:white;"><u>Tentang Kami</u></a>
                    <div class="tk" align="center" style="margin-left:400px;">
                    <img src="<?php echo base_url(); ?>assets/img/jl.png" alt=""> Jl. Pramuka, No.11A Padang, Provinsi Sumatera Barat</img><br>
                    <img src="<?php echo base_url(); ?>assets/img/tlp.png" alt=""> Telp : (0751) 89713615 / Fax : (0751) 89713615 </img><br>
                    <img src="<?php echo base_url(); ?>assets/img/email.png" alt=""> diskominfo@sumbarprov.go.id</img>
                    </div>
                </li>
                 
            </ul>
        </nav>
         
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>