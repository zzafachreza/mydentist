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
                    <p class="text-white"><strong>Gigi Permanent - 32 Buah</strong></p>
                </center>
          
        </div>
    </div>
    

    <center>
         <img  src="<?php echo site_url('gambar/klikgigi.png') ?>" width="40%" style="margin-bottom: 4%" />
    </center>
    
    <center>
      <div style="width: 350px;height: 550px;position: relative;">
            <img  src="<?php echo site_url('gambar/rahangp.png') ?>" style="width: 350px;height: 550px" />

           <?php 

            $top = -40;
            $left = 130;
           for ($i =1; $i    <=8; $i++) { 
                    
                       switch ($i) {
                            case 1:
                                $top=-20;
                                $left=130;
                                $text = 'gigi seri pertama rahang atas';
                                $ket= 'aku biasanya erupsi umur 7-8 tahun';
                                $width=50;
                                break;
                             case 2:
                               $top=0;
                                $left=95;
                                  $text = 'gigi seri kedua rahang atas';
                                       $ket= 'aku biasanya erupsi umur 8-9 tahun';

                                  $width=40;
                                break;
                            case 3:
                                $top=25;
                                $left=60;
                                  $text = 'gigi taring rahang atas';
                                  $ket ='aku biasanya erupsi umur 11-12 tahun';
                                  $width=40;
                                break;
                             case 4:
                                $top=60;
                                $left=30;
                                  $text = 'gigi geraham kecil pertama rahang atas';
                                  $ket ='aku biasanya erupsi umur 10-11 tahun';
                                  $width=50;
                                break;
                             case 5:
                                $top=95;
                                $left=10;
                                  $text = 'gigi geraham kecil kedua rahang atas';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=50;
                                break;
                            case 6:
                                $top=130;
                                $left=0;
                                  $text = 'gigi geraham besar pertama rahang atas';
                                   $ket ='aku biasanya erupsi umur 6-7 tahun';
                                  $width=50;
                                break;

                            case 7:
                                $top=180;
                                $left=0;
                                  $text = 'gigi geraham besar kedua rahang atas';
                                    $ket ='aku biasanya erupsi umur 12-13 tahun';
                                  $width=40;
                                break;

                               case 8:
                                $top=225;
                                $left=0;
                                  $text = 'gigi geraham besar ketiga rahang atas';
                                  $ket ='aku biasanya erupsi umur 17-21 tahun';
                                  $width=40;
                                break;
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gp'.$i.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;left: <?php echo $left;  ?>px;top:<?php echo $top ?>px" />


           <?php  } ?>


           <?php 

            $top = -40;
            $left = 130;
           for ($j =9; $j    <=16; $j++) { 
                    
                       switch ($j) {
                            case 9:
                                $top=310;
                                $left=15;
                                $text ='gigi geraham besar ketiga rahang bawah';
                                $ket= 'aku biasanya erupsi umur 6-7 tahun';
                                $width=35;
                                break;
                             case 10:
                               $top=340;
                                $left=20;
                                  $text = 'gigi geraham besar kedua rahang bawah';
                                  $ket= 'aku biasanya erupsi umur 7-8 tahun';
                                  $width=35;
                                break;
                            case 11:
                                $top=380;
                                $left=25;
                                  $text = 'gigi geraham besar pertama rahang bawah';
                                  $ket ='aku biasanya erupsi umur 9-10 tahun';
                                  $width=40;
                                break;
                             case 12:
                                $top=425;
                                $left=40;
                                  $text = 'gigi geraham kecil kedua rahang bawah';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=40;
                                break;
                             case 13:
                                $top=455;
                                $left=60;
                                  $text = 'gigi geraham kecil pertama rahang bawah';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=40;
                                break;
                            case 14:
                                $top=480;
                                $left=80;
                                  $text = 'gigi taring rahang bawah';
                                  $ket ='aku biasanya erupsi umur 6-7 tahun';
                                  $width=35;
                                break;

                            case 15:
                                $top=500;
                                $left=105;
                                  $text = 'gigi seri kedua rahang atas ';
                                  $ket ='aku biasanya erupsi umur 11-13 tahun';
                                  $width=35;
                                break;

                               case 16:
                                $top=510;
                                $left=140;
                                  $text = 'gigi seri pertama rahang atas';
                                  $ket ='aku biasanya erupsi umur 17-21 tahun';
                                  $width=30;
                                break;
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gp'.$j.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;left: <?php echo $left;  ?>px;top:<?php echo $top ?>px" />


           <?php  } ?>


           <?php 

            $top = -40;
            $left = 130;
           for ($i =1; $i    <=8; $i++) { 
                    
                       switch ($i) {
                           case 1:
                                $top=-20;
                                $left=130;
                                $text = 'gigi seri pertama rahang atas';
                                $ket= 'aku biasanya erupsi umur 7-8 tahun';
                                $width=50;
                                break;
                             case 2:
                               $top=0;
                                $left=95;
                                  $text = 'gigi seri kedua rahang atas';
                                       $ket= 'aku biasanya erupsi umur 8-9 tahun';

                                  $width=40;
                                break;
                            case 3:
                                $top=25;
                                $left=60;
                                  $text = 'gigi taring rahang atas';
                                  $ket ='aku biasanya erupsi umur 11-12 tahun';
                                  $width=40;
                                break;
                             case 4:
                                $top=60;
                                $left=30;
                                  $text = 'gigi geraham kecil pertama rahang atas';
                                  $ket ='aku biasanya erupsi umur 10-11 tahun';
                                  $width=50;
                                break;
                             case 5:
                                $top=95;
                                $left=10;
                                  $text = 'gigi geraham kecil kedua rahang atas';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=50;
                                break;
                            case 6:
                                $top=130;
                                $left=0;
                                  $text = 'gigi geraham besar pertama rahang atas';
                                   $ket ='aku biasanya erupsi umur 6-7 tahun';
                                  $width=50;
                                break;

                            case 7:
                                $top=180;
                                $left=0;
                                  $text = 'gigi geraham besar kedua rahang atas';
                                    $ket ='aku biasanya erupsi umur 12-13 tahun';
                                  $width=40;
                                break;

                               case 8:
                                $top=225;
                                $left=0;
                                  $text = 'gigi geraham besar ketiga rahang atas';
                                  $ket ='aku biasanya erupsi umur 17-21 tahun';
                                  $width=40;
                                break;
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gp'.$i.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;right: <?php echo $left;  ?>px;top:<?php echo $top ?>px;transform: scaleX(-1);" />


           <?php  } ?>

             <?php 

            $top = -40;
            $left = 130;
           for ($j =9; $j    <=16; $j++) { 
                    
                       switch ($j) {
                           case 9:
                                $top=310;
                                $left=15;
                                $text ='gigi geraham besar ketiga rahang bawah';
                                $ket= 'aku biasanya erupsi umur 6-7 tahun';
                                $width=35;
                                break;
                             case 10:
                               $top=340;
                                $left=20;
                                  $text = 'gigi geraham besar kedua rahang bawah';
                                  $ket= 'aku biasanya erupsi umur 7-8 tahun';
                                  $width=35;
                                break;
                            case 11:
                                $top=380;
                                $left=25;
                                  $text = 'gigi geraham besar pertama rahang bawah';
                                  $ket ='aku biasanya erupsi umur 9-10 tahun';
                                  $width=40;
                                break;
                             case 12:
                                $top=425;
                                $left=40;
                                  $text = 'gigi geraham kecil kedua rahang bawah';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=40;
                                break;
                             case 13:
                                $top=455;
                                $left=60;
                                  $text = 'gigi geraham kecil pertama rahang bawah';
                                  $ket ='aku biasanya erupsi umur 10-12 tahun';
                                  $width=40;
                                break;
                            case 14:
                                $top=480;
                                $left=80;
                                  $text = 'gigi taring rahang bawah';
                                  $ket ='aku biasanya erupsi umur 6-7 tahun';
                                  $width=35;
                                break;

                            case 15:
                                $top=500;
                                $left=105;
                                  $text = 'gigi seri kedua rahang atas ';
                                  $ket ='aku biasanya erupsi umur 11-13 tahun';
                                  $width=35;
                                break;

                               case 16:
                                $top=510;
                                $left=140;
                                  $text = 'gigi seri pertama rahang atas';
                                  $ket ='aku biasanya erupsi umur 17-21 tahun';
                                  $width=30;
                                break;
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gp'.$j.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;right: <?php echo $left;  ?>px;top:<?php echo $top ?>px;transform: scaleX(-1);" />


           <?php  } ?>


      </div>
    </center>


 
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-utama">
        <h5 class="modal-title text-center" id="judul"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-kedua">
           <img src="<?php echo site_url('gambar/gigi1.png') ?>" width="100">
    
       <p id="isi" style="color:white;font-size: large;"></p>

 <img src="<?php echo site_url('gambar/gigi2.png') ?>" width="100" style="float:right">
      </div>
      
    </div>
  </div>
</div>
  
</div>

<script type="text/javascript">
    function buka(x,y){
         $("#judul").text(x);
            $("#isi").text(y);
        $('#myModal').modal('show');
    }
</script>