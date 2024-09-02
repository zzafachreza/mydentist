<style>
    html, body {
  height: 100%;
}
</style>

<div class="container-fluid" style="position:relative;height:100%;">
    
      <div class="row" style="height:60px;margin-bottom:10px;padding-top:20px;padding-left:20px;background-color:<?php echo $comp->warna_utama ?>;border-bottom-right-radius:10px;border-bottom-left-radius:10px;">
        <div style="width:20%;position:absolute" onClick="window.history.back()">
            <span><i class="flaticon2-left-arrow-1 text-white"></i></span>
        </div>
          <div style="width:100%;">

                <center>
                    <p class="text-white"><strong>Caninus</strong></p>
                </center>
          
        </div>
    </div>
    

    <center>
         <img  src="<?php echo site_url('gambar/klikrahang.png') ?>" width="50%" />
    </center>
    <div class="row" style="margin-top: 10%">
        <div style="width: 50%"  onClick="window.location.href='<?php echo site_url('home/can4') ?>'">
            <center>
                <img  src="<?php echo site_url('gambar/gigipermanent.png') ?>" width="90%" />
            </center>
        </div>
        <div style="width: 50%"  onClick="window.location.href='<?php echo site_url('home/can5') ?>'">
            <center>
                <img  src="<?php echo site_url('gambar/gigisusu.png') ?>" width="90%" />
            </center>
        </div>
    </div>

     <div style="position:absolute;bottom:10px;right:10px;width:50%">
      <a href="<?php echo site_url('home/menu') ?>" >
                        <img src="<?php echo site_url('gambar/selesai.png') ?>" width="100%"  />
      </a>
 </div>
  


 

  
</div>