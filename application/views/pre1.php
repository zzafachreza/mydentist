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
                    <p class="text-white"><strong>Premolar</strong></p>
                </center>
          
        </div>
    </div>
    



    
 <div style="position:absolute;z-index:-99;bottom:0px;left:-10px">
     <img src="<?php echo site_url('gambar/pre1.png') ?>" width="100%" />
 </div>
 
 <div style="position:absolute;bottom:10px;right:10px;width:50%">
      <a href="<?php echo site_url('home/pre2') ?>"  >
                        <img src="<?php echo site_url('gambar/next.png') ?>" width="100%"  />
      </a>
 </div>
  
</div>