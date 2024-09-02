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
                    <p class="text-white"><strong>Gigi Susu - 20 Buah</strong></p>
                </center>
          
        </div>
    </div>
    

      <center>
         <img  src="<?php echo site_url('gambar/klikgigi.png') ?>" width="40%" style="margin-bottom: 4%" />
    </center>
    
    <center>
      <div style="width: 350px;height: 550px;position: relative;">
            <img  src="<?php echo site_url('gambar/rahangs.png') ?>" style="width: 350px;height: 550px" />

            <?php 

            $top = -40;
            $left = 130;
           for ($i =1; $i    <=5; $i++) { 
                    
                       switch ($i) {
                            case 1:
                                $top=-10;
                                $left=130;
                                $text = 'gigi seri pertama rahang atas ';
                                $ket= 'aku biasanya erupsi umur 7.5 bulan';
                                $width=50;
                                break;
                             case 2:
                               $top=20;
                                $left=75;
                                 $text = 'gigi seri kedua rahang atas';
                                       $ket= 'aku biasanya erupsi umur 9 bulan';

                                  $width=40;
                                break;
                            case 3:
                                $top=60;
                                $left=30;
                                       $text = 'gigi taring rahang atas';
                                  $ket ='aku biasanya erupsi umur 18 bulan';
                                  $width=40;
                                break;
                             case 4:
                                $top=120;
                                $left=10;
                           $text = 'gigi geraham pertama rahamg atas';
                                  $ket ='aku biasanya erupsi umur 14 bulan';
                                  $width=50;
                                break;
                             case 5:
                                $top=200;
                                $left=5;
                                   $text = 'gigi geraham kedua rahang atas';
                                  $ket ='aku biasanya erupsi umur 24 bulan';
                                  $width=50;
                                break;
          
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gs'.$i.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;left: <?php echo $left;  ?>px;top:<?php echo $top ?>px" />


           <?php  } ?>



           <?php 

            $top = -40;
            $left = 130;
           for ($j =6; $j    <=19; $j++) { 
                    
                       switch ($j) {
                            case 6:
                                $top=320;
                                $left=5;
                              $text = 'gigi geraham kedua rahang bawah';
                                $ket= 'aku biasanya erupsi umur 6 bulan';
                                $width=50;
                                break;
                             case 7:
                               $top=390;
                                $left=20;
                               $text = 'gigi geraham pertama rahang bawah';
                                       $ket= 'aku biasanya erupsi umur 7 bulan';
                                  $width=50;
                                break;
                            case 8:
                                $top=450;
                                $left=45;
                              $text = 'gigi taring rahang bawah';
                                  $ket ='aku biasanya erupsi umur 16 bulan';
                                  $width=40;
                                break;
                             case 9:
                                $top=490;
                                $left=80;
                              $text = 'gigi seri kedua rahang bawah';
                                  $ket ='aku biasanya erupsi umur 12 bulan';
                                  $width=40;
                                break;
                             case 10:
                                $top=510;
                                $left=130;
                                      $text = 'gigi seri pertama rahang atas ';
                                  $ket ='aku biasanya erupsi umur 20 bulan';
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

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gs'.$j.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;left: <?php echo $left;  ?>px;top:<?php echo $top ?>px" />


           <?php  } ?>

           <!-- MIRROR -->

           <?php 

            $top = -40;
            $left = 130;
           for ($i =1; $i    <=5; $i++) { 
                    
                       switch ($i) {
                            case 1:
                                $top=-10;
                                $left=120;
                                $text = 'gigi seri pertama rahang atas ';
                                $ket= 'aku biasanya erupsi umur 7.5 bulan';
                                $width=50;
                                break;
                             case 2:
                               $top=20;
                                $left=75;
                                 $text = 'gigi seri kedua rahang atas';
                                       $ket= 'aku biasanya erupsi umur 9 bulan';

                                  $width=40;
                                break;
                            case 3:
                                $top=60;
                                $left=30;
                                       $text = 'gigi taring rahang atas';
                                  $ket ='aku biasanya erupsi umur 18 bulan';
                                  $width=40;
                                break;
                             case 4:
                                $top=120;
                                $left=10;
                           $text = 'gigi geraham pertama rahamg atas';
                                  $ket ='aku biasanya erupsi umur 14 bulan';
                                  $width=50;
                                break;
                             case 5:
                                $top=200;
                                $left=5;
                                   $text = 'gigi geraham kedua rahang atas';
                                  $ket ='aku biasanya erupsi umur 24 bulan';
                                  $width=50;
                                break;
          
                            
                            default:
                                $top=0;
                                $left=0;
                                  $text = '';
                                  $width=0;
                                break;
                        } 
               ?>

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gs'.$i.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;right: <?php echo $left;  ?>px;top:<?php echo $top ?>px;transform: scaleX(-1);" />


           <?php  } ?>



           <?php 

            $top = -40;
            $left = 130;
           for ($j =6; $j    <=19; $j++) { 
                    
                       switch ($j) {
                            case 6:
                                $top=320;
                                $left=5;
                              $text = 'gigi geraham kedua rahang bawah';
                                $ket= 'aku biasanya erupsi umur 6 bulan';
                                $width=50;
                                break;
                             case 7:
                               $top=390;
                                $left=20;
                               $text = 'gigi geraham pertama rahang bawah';
                                       $ket= 'aku biasanya erupsi umur 7 bulan';
                                  $width=50;
                                break;
                            case 8:
                                $top=450;
                                $left=45;
                              $text = 'gigi taring rahang bawah';
                                  $ket ='aku biasanya erupsi umur 16 bulan';
                                  $width=40;
                                break;
                             case 9:
                                $top=490;
                                $left=80;
                              $text = 'gigi seri kedua rahang bawah';
                                  $ket ='aku biasanya erupsi umur 12 bulan';
                                  $width=40;
                                break;
                             case 10:
                                $top=510;
                                $left=130;
                                      $text = 'gigi seri pertama rahang atas ';
                                  $ket ='aku biasanya erupsi umur 20 bulan';
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

                <img onclick="buka('<?php echo $text  ?>','<?php echo $ket ?>')"  src="<?php echo site_url('gambar/gs'.$j.'.png') ?>" width="<?php echo $width ?>" style="position: absolute;right: <?php echo $left;  ?>px;top:<?php echo $top ?>px;transform: scaleX(-1);" />


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

