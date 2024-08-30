<style>
    html, body {
  height: 100%;
}
</style>

<div class="container-fluid" style="position:relative;height:100%;">
    
      <div class="row" style="height:60px;margin-bottom:10px;padding-top:20px;padding-left:20px;background-color:<?php echo $comp->warna_utama ?>;border-bottom-right-radius:10px;border-bottom-left-radius:10px;">
        <div style="width:20%;position:absolute" onClick="window.location.href='<?php echo site_url('home/mol') ?>'">
            <span><i class="flaticon2-left-arrow-1 text-white"></i></span>
        </div>
          <div style="width:100%;">

                <center>
                    <p class="text-white"><strong>Molar</strong></p>
                </center>
          
        </div>
    </div>


<div class="row" style="margin:5px">
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/1/Kalsium') ?>'" style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Kalsium</strong>
    </div>
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/2/Fosfor') ?>'"  style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Fosfor</strong>
    </div>
</div>
<div class="row" style="margin:5px">
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/3/Flourida') ?>'"  style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Flourida</strong>
    </div>
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/4/Vitamin A') ?>'"  style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Vitamin A</strong>
    </div>
</div>
<div class="row" style="margin:5px">
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/5/Vitamin D') ?>'"  style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Vitamin D</strong>
    </div>
    <div onClick="window.location.href='<?php echo site_url('home/moldetail/6/Kismis') ?>'"  style="margin:2%;border-radius:10px;height:50px;width:46%;display:flex;justify-content:center;align-items:center;background-color:#C5F4FF">
        <strong class="text-utama">Kismis</strong>
    </div>
</div>

    
 <div style="position:absolute;z-index:-99;bottom:0px;">
     
        <figure>
         <img class="zoom" src="<?php echo site_url('gambar/mol0.png') ?>" width="100%" />
     </figure>
     
    
 </div>
 

  
</div>