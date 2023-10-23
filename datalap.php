<!DOCTYPE html>
<html>
<head>
	<title>Data Pengaduan</title>
 
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/csspelapor/pdatalap.css">
<style type="text/css"> 
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color: #F2EFEF;
    font-family: "poppins", sans-serif;
}

.header{
    background-color: #10325D;
    height: 100px;
 }

ul{
    display: flex;
    align-items: right;
    list-style: none;
    text-decoration: none;
}

li{
    margin-top: 5px;
    float: left;
    margin-left: 110px;
    font-size: 15px;
    font-style: bold;
    text-decoration: none;
}

li a{
    margin-top: 30px;
    display: flex;
    color: white;
    font-style: bold;
    padding: 14px;
    text-decoration: none;
     
}

li a:hover{
    color: #2E5D88;
} 

.judul {
    background-color: #10325D;
    width: 800px;
    height: 40px;
    margin-top: 30px;
    margin-left: 300px;
    display: flex;
    color: white;
    font-style: bold;
    padding: 10px;
    text-decoration: none;
}

.form{
    margin-top: 10px;
    box-shadow: 3px 3px 3px rgba(175, 174, 174, 0.8);
    border: 1px rgb(255, 255, 255);
    background: #ffffff;
    width: 800px;
    height: 600px;
    margin-left: 300px;
    align-items: center;
 
}

.data{
    margin-left: 80px;
}

.panelcari{
    margin-left: 80px;
    margin-top: 30px;
}

label{
    width: 130px;
    display: inline-block;
    margin-left: 70px;
    font-size: 20px;
}

p {
    margin-left: 100px;
}

input[type=search] {
    margin: 25px auto;
    padding: 10px;
    font-size: 20px;
    height: 40px;
    width: 300px;
}

input[type=submit] {
    background-color:#10325D;
    cursor: pointer;
    padding: 10px;
    font-size: 20px;
    height: 40px;
    width: 100px;
    color: #ffffff;
}

.row{
    margin-top: 100px;
}

.footer {
    background-color: #10325D;
    width: 100%;
    height: 200px;
    margin-top: 50px;
    display: flex;
    color: white;
    font-style: bold;
    padding: 10px;
    text-decoration: none;
}

.footer nav{
    margin-left: 150px;
}

.footer nav ul li a{
    color:white;
    margin-left: 400px;
    text-align: center;
}

.tk{
    margin-left: 300px;
    color: rgb(255, 255, 255);
    text-align: center;
    font-size: 13px;
}


</style>






</head>
<body>
    <div class="header">
        <nav>
            <ul >
                <li><img src="<?php echo base_url(); ?>assets/img/logo (1).png" alt="" width="300px"></li>
                <li><a href="<?php echo base_url(). 'pelapor/index';?>">Beranda</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/pengaduan';?>">Pengaduan</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/status';?>">Status Pengaduan</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/datalap';?>">Data Pengaduan</a></li>
            </ul>
        </nav>
        
    </div> 

    <div class="judul">
        <h3>Data Pengaduan</h3>
    </div>

    <div class="form">  
        <br>
        <p>Jika Anda lupa kode pengaduan untuk melihat status pengaduan, 
        <br>silahkan cari dengan cara memasukkan nama Anda</p>

            <div class="cari">               
                <div class="container">
                    <div class="panelcari">    
                        <div class="col-xs-10 col-xs-offset-0">                            
                            <form action="<?= base_url('pelapor/datalap') ?>" method="get">
                                <div class="input-group">
                                    <input type="text" name="keyword" placeholder="Masukan nama...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </span>
                                </div>
                            </form>                            
                        </div>    
                    </div>        
                </div>
            </div>

            <diV class="data">
                <form method="post" action="<?php echo base_url().'pelapor/datalap'?>" 
                style="margin-top: 5px; margin-left: 25px; width:600px; height:400px; overflow:scroll; ">                
                    <div class="panel panel-default" >           
                        <div class="panel-body">
                            <div style="overflow:auto;">                           
                                <table class="table" border="1px" >
                                    <thead >
                                        <tr class="text-gray-800" align="center">
                                            <th>No.</th>                               
                                            <th>Nama</th>
                                            <th>Nama OPD</th>
                                            <th>Kode</th>                                                                                  
                                        </tr>
                                    </thead>
                                    
                                    <?php 
                                    $no=1;
                                    foreach ($laporan as $row) { ?>
                                        <tr>
                                            <th><?= $no++ ?></th>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['nama_opd'] ?></td>
                                            <td><?= $row['kode'] ?></td>
                                        </tr>
                                    <?php }?>                                                              

                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </diV> 
    </div>


    <div class="footer">
    <br>
    <nav>
            <ul >
                <li><img src="<?php echo base_url(); ?>assets/img/2.png" alt="" width="200px"></li>
                <li><a href="<?php echo base_url(). 'pelapor/index';?>"><u>Tentang Kami</u></a>
                    <div class="tk">
                    <img src="<?php echo base_url(); ?>assets/img/jl.png" alt=""> Jl. Pramuka, No.11A Padang, Provinsi Sumatera Barat</img><br>
                    <img src="<?php echo base_url(); ?>assets/img/tlp.png" alt=""> Telp : (0751) 89713615 / Fax : (0751) 89713615 </img><br>
                    <img src="<?php echo base_url(); ?>assets/img/email.png" alt=""> diskominfo@sumbarprov.go.id</img>
                    </div>
                </li>
                 
            </ul>
        </nav>
         
    </div>




    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>