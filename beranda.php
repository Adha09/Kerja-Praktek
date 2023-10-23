<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
 
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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

.isi li{
    font-size:20px; 
    margin-left:20px;
}
 
.isi li img {
    float: left;
    height: 300px;
    width: 350px;
    margin-right:20px;  
     
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
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/csspelapor/pberanda.css"> -->
 

</head>
<body>
    <div class="header">
        <nav>
            <ul>
                <li><img src="<?php echo base_url(); ?>assets/img/logo (1).png" alt="" width="300px"></li>
                <li><a href="<?php echo base_url(). 'pelapor/index';?>">Beranda</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/pengaduan';?>">Pengaduan</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/status';?>">Status Pengaduan</a></li>
                <li><a href="<?php echo base_url(). 'pelapor/datalap';?>">Data Pengaduan</a></li>
                </li>
            </ul>
        </nav>
        
    </div>    

    <div class="judul">
        <h3>Selamat Datang di Website Pengaduan Insiden Keamanan!!</h3>
    </div>

    <div class="form">
    <form method="post" action=""><br><br>
        <div class="isi">
            <ul>
                <li>    Silahkan sampaikan pengaduan anda!
                <br><br>Alangkah lebih baiknya jika disertai dengan gambar.
                <br><br>Pengaduan akan diproses dalam 3 - 5 hari,
                        anda bisa melihat status pengaduan dengan cara
                        memasukkan kode pengaduan di kotak pencarian.
                <br><br>Jika anda lupa kode pengaduan, anda bisa
                        melihatnya di data pengaduan.
                </li>
                <li><img src="<?php echo base_url('assets/img/danger.jpg');?>" alt="" width="350px"></li>
            </ul>
        </div>
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
</body>
</html>