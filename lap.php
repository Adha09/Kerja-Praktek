<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Laporan</title>

    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cssadmin/header.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">
    
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
                    <h1 class="h3 mb-4 text-gray-900" align="center">Data Laporan</h1>
                     <div class="tabel" >
                        <form method="post" action="<?php echo base_url().'admin/data'?>" enctype="multipart/form-data" 
                            style="overflow:scroll; height:500px;"> 
                            <div class="panel panel-default" >           
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-hover table-responsive" border="1px" style="margin-top:5px;">
                                            <thead >
                                                <tr class="text-black" align="center"  >
                                                    <th>No</th>                                                                                                                
                                                    <th>Kode</th>                                                                                                                
                                                    <th>Nama</th>                                                                                                                
                                                    <th>No.Telp</th>                                                                                                                
                                                    <th>Asal OPD</th>                                                                                                                
                                                    <th>Isi Laporan</th>                                                                                                                
                                                    <th>Tanggal</th>                                                                                                                
                                                    <th>Gambar Insiden</th> 
                                                    <th>Status</th> 
                                                    <th>Bukti Selesai</th> 
                                                    <th>Aksi</th>  
                                                     
                                                </tr>
                                            </thead> 
                                            <?php   
                                                $no=1;                        
                                                foreach ($laporan as $laporan):?>
                                                    <tr class="text-gray-800" align="center">
                                                        <td><?php echo $no++?></td>  
                                                        <td><?php echo $laporan->kode?></td> 
                                                        <td><?php echo $laporan->nama ?></td> 
                                                        <td><?php echo $laporan->notelp ?></td> 
                                                        <td><?php echo $laporan->nama_opd ?></td> 
                                                        <td><?php echo $laporan->isi ?></td> 
                                                        <td><?php echo $laporan->tgl?></td> 

                                                        <td><img alt="image" src="<?= base_url('assets/images/' . $laporan->gambar) ?>"
                                                            width="70" height="100">
                                                            <a href="<?= base_url('assets/images/' . $laporan->gambar) ?>" 
                                                            target="_blank">lihat</a>
                                                        </td>

                                                        <td><?php echo $laporan->status?></td>

                                                        <td><img alt="image" src="<?= base_url('assets/images/' . $laporan->gambar_selesai) ?>"
                                                            width="70" height="100">
                                                            <a href="<?= base_url('assets/images/' . $laporan->gambar_selesai) ?>" 
                                                            target="_blank">lihat</a>
                                                        </td>

                                                        <td>
                                                            <?php if ($laporan->status === 'Diterima'): ?>
                                                                <button class="btn-sm btn-primary">
                                                                    <a href="<?= base_url('admin/changeStatus/'.$laporan->id_lap.'/Diproses'); ?>">Proses</a>
                                                                </button>
                                                                
                                                            <?php elseif ($laporan->status === 'Diproses'): ?>
                                                                <button class="btn-sm btn-secondary" type="button"
                                                                data-toggle="modal" data-target="#exampleModal<?php echo $laporan->id_lap;?>"><a>Selesai</a></button>
                                                            

                                                            <?php else: ?>
                                                                <button class="btn-sm btn-success">
                                                                    <a href="<?= base_url('admin/changeStatus/'.$laporan->id_lap.'/Diterima'); ?>">Terima</a>
                                                                </button>
                                                            <?php endif; ?>
                                                        </td>

                                                    </tr>
                                             <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?php echo $laporan->id_lap;?>" tabindex="-1" role="dialog" 
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form method="post" action="<?php echo base_url().'admin/upload'?>" enctype="multipart/form-data"> 
                                                        <div class="modal-content">
                                                            <br><br>
                                                            <div class="modal-body">
                                                            
                                                                <div class="form-group">
                                                                    <label>No</label>
                                                                    <input type="text" name="id_lap" class="form-control" value="<?= $laporan->id_lap ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kode</label>
                                                                    <input type="text" name="kode" class="form-control" value="<?= $laporan->kode ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama</label>
                                                                    <input type="text" name="nama" class="form-control" value="<?= $laporan->nama ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Notelp</label>
                                                                    <input type="text" name="notelp" class="form-control" value="<?= $laporan->notelp ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Asal OPD</label>
                                                                    <input type="text" name="nama_opd" class="form-control" value="<?= $laporan->nama_opd ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Isi</label>
                                                                    <input type="text" name="isi" class="form-control" value="<?= $laporan->isi ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tangal</label>
                                                                    <input type="text" name="tgl" class="form-control" value="<?= $laporan->tgl ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Gambar</label>
                                                                    <input type="text" name="gambar" class="form-control" value="<?= $laporan->gambar ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Status</label>
                                                                    <input type="text" name="status" class="form-control" value="Selesai">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Upload Gambar</label>
                                                                    <input type="file" name="gambar_selesai">
                                                                </div>
                                                                
                                                            </div>
                                                                
                                                            <div class="modal-footer">            
                                                                <button type="submit" class="btn btn-primary">OK</button>
                                                            </div>
                                                        </div> 
                                                    </form>
                                                </div>
                                            </div>


                                            <?php endforeach;?>                                                              
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>                                            
                    </div>
                </div>

                </div>
                <!-- /.container-fluid -->

                 
            
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
            crossorigin="anonymous"></script>

</body>

</html>