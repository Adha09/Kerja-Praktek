<!DOCTYPE html>
<html>
<head>
	<title>Form Pengaduan</title>
 
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous">

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
    height: 750px;
    margin-left: 300px;
    align-items: center;
}

.kd{
    margin-top:10px;
    font-size:16px;
    color:black;
}

.kode{
    margin-top: 5px;
    border: 1px rgb(255, 255, 255);
    background: #ffffff;
    align-items: center;
}

label{
    width: 130px;
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

button{
    background-color: #10325D;
    border-radius: 5px;
    margin-top: 50px;
    margin-left: 600px;
    padding: 10px 50px;
    border: none;
    cursor: pointer;
    
}

button :hover{
    color: rgb(77, 77, 197);
}

button a{
    color: white;
    font-size: 18px;
    font-style: bold;
    text-decoration: none;
}

.footer {
    float:left;
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
            <ul   >
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
        <h3>Silahkan Sampaikan Pengaduan Anda !</h3>
    </div>
    

    <div class="form">  
        <form method="post" action="<?php echo base_url().'pelapor/tambah'?>" enctype="multipart/form-data">
                
                <div>
                    <label></label>
                    <input type="hidden" name="kode" id="kode" placeholder=""
                        value="LPR-ISDN-KMNN-230801-<?php echo sprintf("%03s", $kode) ?>" readonly> 
                </div>

                <div>
                    <label>Nama :</label>
                    <input type="text" name="nama" placeholder="Masukan nama"  required> 
                </div>
                
                <div>
                    <label>No. Telp :</label>
                    <input type="text" name="notelp" placeholder="Masukan no. telp" 
                    maxlength="12" onkeypress="return hanyaAngka(event)" required>
                    <script>
                        function hanyaAngka(evt) {
                        var charCode = (evt.which) ? evt.which : event.keyCode
                        if (charCode > 31 && (charCode < 48 || charCode > 57))
                
                            return false;
                        return true;
                        }
	                </script> 
                </div>

                <div>
                    <label>Asal OPD :</label>
                        <select style="font-size: 16px;" name="nama_opd" cols="10" rows="5">
                            <option value="">----------------------- Pilih OPD -----------------------</option>
                                <?php                                
                                foreach ($opd as $row) {  
                                echo "<option value='".$row->nama_opd."'>".$row->nama_opd."</option>";
                                    }
                                echo""?> 
                        </select>
                </div> 

                <div>
                    <label>Isi Laporan :</label>
                    <textarea type="text" cols="53" rows="5" name="isi" 
                    placeholder="Masukan pengaduan Anda" required ></textarea>
                </div>

                <div>
                    <label>Tanggal :</label>
                    <input type="date" name="tgl" placeholder="" required> 
                </div>

                <div>
                    <label>Upload Gambar :</label>
                    <input type="file" name="gambar" placeholder=""> 
                </div>

                <div>
                    <!-- <label>Status :</label> -->
                    <input type="hidden" name="status" value="Terkirim"> 
                </div> 

                <div>
                    <button class="btn-primary" type="button"
                    data-toggle="modal" data-target="#exampleModal"><a>KIRIM!</a></button>
                </div>
                
        
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                             <br><br>
                            <div class="modal-body">
                                <center><h3>Pengaduan Anda Berhasil Dikirim</h3>
                                        <img src="<?php echo base_url('assets/img/ck.png');?>" width="300px">
                                </center>
                                        
                                <div class="kd">
                                    Pengaduan Anda akan di proses dalam 3-5 hari,
                                    <br>jika pengaduan Anda belum diproses dalam rentang waktu tersebut
                                    silahkan hubungi nomor berikut:
                                    <br><b>Telp : (0751) 89713615
                                    <br>    Fax : (0751) 89713615</b>

                                    <br><br>
                                    Untuk melihat status Pengaduan, 
                                    Silahkan salin dan simpan kode pengaduan anda!!                    
                                </div>  

                                <div class="kode">                                         
                                    <input type="text" name="kode" id="kode" style="width:400px;"
                                    value="LPR-ISDN-KMNN-230801-<?php echo sprintf("%03s", $kode) ?>" readonly>               
                                </div>
                        
                                <div class="modal-footer">            
                                    <button type="submit" class="btn btn-primary">OK</button>
                                </div>
                            </div> 

                        </div>
                    </div>
                </div>
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
