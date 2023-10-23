<!DOCTYPE html>
<html>
<head>
	<title>Status Pengaduan</title>
 
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/csspelapor/pstatus.css">
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
    height: 100px;
    background-color: #10325D;
 }

ul{
    display: flex;
    align-items: right;
    list-style: none;
    text-decoration: none;
}

li{
    margin-top: 10px;
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

.g1 img {
    float: left;
    width: 100%;
    height: 350px;
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
    margin-left: 300px;
    align-items: center;
 
}

label{
    font-size:20px;
    width: 170px;
    display: inline-block;
    margin-left: 70px;
}

input[type=text], 
input[type=date],
input[type=file] {
    margin: 25px auto;
    width: 500px;
    padding: 10px;
    font-size: 16px;
}

textarea{
    font-size:16px; 
    margin-left: 205px; 
}

input[type=submit] {
    display: inline-block;
    background-color: #10325D;
    border-radius: 5px;
    margin-top: 0px;
    margin-left: 1px;
    padding: 5px;
    border: none;
    cursor: pointer;
    
}

input[type=submit]:hover{
    color: rgb(77, 77, 197);
}

input[type=submit] a{
    color: white;
    font-size: 20px;
    font-style: bold;
    text-decoration: none;
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

form{
    flex-direction: row; 
    align-items:center
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
        <h3>Status Pengaduan</h3>
    </div>

    <div class="form">  
    <br>
        <p>Silahkan masukkan kode pengaduan anda untuk melihat 
        <br>status pengaduan !</p>

        
    <div class="cari">               
                <div class="container">
                    <div class="panelcari">    
                        <div class="col-xs-10 col-xs-offset-0">                            
                            <form action="<?= base_url('pelapor/status') ?>" method="get">
                                <center><div>
                                    <input type="text" name="keyword" placeholder="Masukan kode">
                                    <button class="btn-lg btn-primary" type="submit">Cari</button>
                                </div>
                                <div style="color:black; margin-top:40px;">
                                    <?php if (!empty($laporan)) : ?>
                                        <h3>Pengaduan Anda : 
                                        <div>
                                            <?php foreach ($laporan as $laporan):?>
                                                <br><b><td><?php echo $laporan->status ;?></td></b>  
                                                <br><br>
                                                <td><img alt="image" src="<?= base_url('assets/images/' . $laporan->gambar_selesai) ?>"
                                                        width="300" height="190"><br>
                                                    <a href="<?= base_url('assets/images/' . $laporan->gambar_selesai) ?>" 
                                                        target="_blank" style="font-size:20px;">lihat</a></td>
                                                

                                                <br><br><h6>silahkan tunggu untuk proses selanjutnya </h6>                                                                                               
                                            <?php endforeach;?>
                                        </div></h3>
                                        
                                    <?php else : ?>
                                        <b>Status Pengaduan Tidak Ditemukan.
                                    <?php endif; ?>    
                                </div>
                                    </center> 
                            </form>                            
                        </div>    
                    </div>        
                </div>
            </div>

            <diV class="data">
                <form method="post" action="<?php echo base_url().'pelapor/status'?>">               
                                                                       
                                                                        
                </form>
            </diV> 
            
            
<br>
<br>
<br>
		</form>
          
    </div>



 

    <div class="footer">
    <br>
    <nav>
            <ul >
                <li><img src="<?php echo base_url(); ?>assets/img/2.png" alt="" width="200px"></li>
                <li><a><u>Tentang Kami</u></a>
                    <div class="tk">
                    <img src="<?php echo base_url(); ?>assets/img/jl.png" alt=""> Jl. Pramuka, No.11A Padang, Provinsi Sumatera Barat</img><br>
                    <img src="<?php echo base_url(); ?>assets/img/tlp.png" alt=""> Telp : (0751) 89713615 / Fax : (0751) 89713615 </img><br>
                    <img src="<?php echo base_url(); ?>assets/img/email.png" alt=""> diskominfotik.sumbarprov.go.id</img>

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