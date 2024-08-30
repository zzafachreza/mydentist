<?php

$sqlCom = "SELECT * FROM data_company limit 1";
$hasilCom = $this->db->query($sqlCom);

$comp = $hasilCom->result();


?>

    <!--header-->
    <div class="container-fluid">
        <div class="row" style="height:60px;margin-bottom:10px;padding-top:20px;padding-left:20px;background-color:<?php echo $comp[0]->warna_utama ?>;border-bottom-right-radius:10px;border-bottom-left-radius:10px;">
        <div style="width:40%" onClick="window.history.back()">
            <span><i class="flaticon2-left-arrow-1 text-white"></i></span>
        </div>
          <div style="width:60%">

                <p class="text-white"><strong>Akun</strong></p>
          
        </div>
    </div>
    </div>
<div class="container">
    
     
    <form method="POST" action="<?php echo site_url('pengguna/update') ?>"  >
      
      <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>" />
        <div class="form-group">
        <label for="email" class="text-black"><strong>Email</strong></label>
          <input id="email" required="required" value="<?php echo $_SESSION['email'] ?>" type="text" name="email" autocomplete="off" class="form-eza">
      </div>
      
      
      <div class="form-group">
        <label for="nama_lengkap" class="text-black"><strong>Nama Lengkap</strong></label>
          <input id="nama_lengkap" required="required"  value="<?php echo $_SESSION['nama_lengkap'] ?>" type="text" name="nama_lengkap" autocomplete="off" class="form-eza">
      </div>
      
         <div class="form-group">
        <label for="usia" class="text-black"><strong>Usia</strong></label>
          <input id="usia" required="required" type="text" name="usia" value="<?php echo $_SESSION['usia'] ?>" autocomplete="off" class="form-eza">
      </div>
      
        <div class="form-group">
            <label for="jenis_kelamin" class="text-black"><strong>Jenis Kelamin</strong></label>
            <select name="jenis_kelamin" class="form-eza">
                <option <?php echo $_SESSION['jenis_kelamin']=='Laki-laki'?'seleceted':'' ?> >Laki-laki</option>
                <option <?php echo $_SESSION['jenis_kelamin']=='Perempuan'?'seleceted':'' ?> >Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="penyakit" class="text-black"><strong>Riwayat Penyakit</strong></label>
            <input id="penyakit" value="<?php echo $_SESSION['penyakit'] ?>" name="penyakit" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="berat_badang" class="text-black"><strong>Berat Badang (Kg)</strong></label>
            <input id="berat_badang" value="<?php echo $_SESSION['berat_badang'] ?>" required="required" name="berat_badang" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="tinggi_badan" class="text-black"><strong>Tinggi Badang (cm)</strong></label>
            <input id="tinggi_badan" value="<?php echo $_SESSION['tinggi_badan'] ?>" required="required" name="tinggi_badan" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="obat" class="text-black"><strong>Obat yang pernah dikonsumsi (saat ini dipakai)</strong></label>
            <input id="obat" value="<?php echo $_SESSION['obat'] ?>" name="obat" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="alergi" class="text-black"><strong>Riwayat Alergi</strong></label>
            <input id="alergi" value="<?php echo $_SESSION['alergi'] ?>" name="alergi" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="keluhan" class="text-black"><strong>Riwayat Keluhan</strong></label>
            <input id="keluhan" value="<?php echo $_SESSION['keluhan'] ?>" name="keluhan" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="alamat" class="text-black"><strong>Alamat</strong></label>
            <input id="alamat" value="<?php echo $_SESSION['alamat'] ?>" name="alamat" type="text" autocomplete="off" class="form-eza" />
        </div>
        <div class="form-group">
            <label for="telepon" class="text-black"><strong>Telepon</strong></label>
            <input id="telepon" value="<?php echo $_SESSION['telepon'] ?>" name="telepon" type="text" autocomplete="off" class="form-eza" />
        </div>
      
      
       <div class="form-group">
        <label for="username" class="text-black"><strong>Password</strong></label>
          <input  placeholder="Kosongkan apabila tidak diubah" type="password" name="password" autocomplete="off" class="form-eza">
      </div>
    <div class="form-group">
        <button type="SUBMIT" class="btn bg-utama col-sm-12">Update Profile</button>
    </div>
    </form>
    <a onclick="retrun confirm('Apakah kamu akan logout ?')" href="<?php echo site_url('login/logout') ?>" class="btn btn-danger col-sm-12">Logout</a>


 
</div>
    
