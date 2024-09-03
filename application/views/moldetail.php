<style>
    html, body {
  height: 100%;
}
</style>

<?php
    
    $judul = $this->uri->segment(4);
    $img = $this->uri->segment(3);

?>

<div class="container-fluid" style="position:relative;height:100%;">
    
      <div class="row" style="height:60px;margin-bottom:10px;padding-top:20px;padding-left:20px;background-color:<?php echo $comp->warna_utama ?>;border-bottom-right-radius:10px;border-bottom-left-radius:10px;">
        <div style="width:20%;position:absolute" onClick="window.history.back()">
            <span><i class="flaticon2-left-arrow-1 text-white"></i></span>
        </div>
          <div style="width:100%;">

                <center>
                    <p class="text-white"><strong><?php echo urldecode($judul) ?></strong></p>
                </center>
          
        </div>
    </div>
            <figure>
         <img class="zoom" src="<?php echo site_url('gambar/mol'.$img.'.svg') ?>" width="100%" />
     </figure>
     
 
 <div style="position:absolute;bottom:10px;right:10px;width:50%">
     <?php if($img >6 && $img <13){ ?>
 <a href="<?php echo site_url('home/moldetail/'.($img+1).'/Kesehatan Gigi Anak') ?>">
                        <img src="<?php echo site_url('gambar/next.png') ?>" width="100%"  />
      </a>
     <?php }else{ ?>
       <a href="<?php echo $img==13?site_url('home/molpilih'):site_url('home/molmenu') ?>">
                        <img src="<?php echo site_url('gambar/selesai.png') ?>" width="100%"  />
      </a>
    <?php } ?>
 </div>
  
</div>