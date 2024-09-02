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
             <figure>
         <img class="zoom" src="<?php echo site_url('gambar/canklik.png') ?>" width="100%" />
     </figure>
    </center>
    
    

    
    
    <center>
         <img src="<?php echo site_url('gambar/gigi.png') ?>" height="280" width="300" />
    </center>
    
    <div style="width:20px;height:20px;border:0px solid #CDCDCD;position:absolute;top:190px;left:23%" onClick="buka(1)"> </div>
    
    <div style="width:10px;height:20px;border:0px solid #CDCDCD;position:absolute;top:190px;left:20%" onClick="buka(2)"> </div>
    <div style="width:10px;height:20px;border:0px solid #CDCDCD;position:absolute;top:200px;left:17%" onClick="buka(3)"> </div>
    
    <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:220px;left:15%" onClick="buka(4)"> </div>
    <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:230px;left:14%" onClick="buka(5)"> </div>
    
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:245px;left:13%" onClick="buka(6)"> </div>
    
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:262px;left:12%" onClick="buka(7)"> </div>
   
   <div style="width:15px;height:20px;border:0px solid #CDCDCD;position:absolute;top:280px;left:11%" onClick="buka(8)"></div>
   
   <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:310px;left:13%" onClick="buka(9)"></div>
   
   <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:325px;left:13%" onClick="buka(10)"></div>
   <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:340px;left:13%" onClick="buka(11)"></div>
   <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:360px;left:16%" onClick="buka(12)"></div>
   <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:375px;left:17%" onClick="buka(13)"></div>
   <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:385px;left:18%" onClick="buka(14)"></div>
   <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:390px;left:21%" onClick="buka(15)"></div>
   <div style="width:15px;height:10px;border:0px solid #CDCDCD;position:absolute;top:395px;left:25%" onClick="buka(16)"></div>
   
   
   
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:200px;right:24%" onClick="buka(21)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:205px;right:19%" onClick="buka(22)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:220px;right:15%" onClick="buka(23)"> </div>
   
   
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:240px;right:12%" onClick="buka(24)"> </div>
    
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:270px;right:12%" onClick="buka(25)"> </div>
    
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:330px;right:12%" onClick="buka(26)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:350px;right:14%" onClick="buka(27)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:370px;right:17%" onClick="buka(28)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:385px;right:20%" onClick="buka(29)"> </div>
    <div style="width:15px;height:15px;border:0px solid #CDCDCD;position:absolute;top:390px;right:25%" onClick="buka(30)"> </div>


 
 <div style="position:absolute;bottom:10px;right:10px;width:50%">
      <a href="<?php echo site_url('home/menu') ?>"  >
                        <img src="<?php echo site_url('gambar/selesai.png') ?>" width="100%"  />
      </a>
 </div>
 
 
  
</div>

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
    
       <p id="isi"></p>

 <img src="<?php echo site_url('gambar/gigi2.png') ?>" width="100" style="float:right">
      </div>
      
    </div>
  </div>
</div>

<script>
    function buka(x){
        
        if(x==1){
            $("#judul").text("Gigi seri pertama rahang atas");
            $("#isi").text("Namaku gigi seri pertama rahang atas, aku biasanya lepas umur 7-8 tahun");
        }else if(x==2){
            $("#judul").text("Gigi seri kedua rahang atas");
            $("#isi").text("Namaku gigi seri kedua rahang atas, aku biasanya lepas umur 8-9 tahun");
        }else if(x==3){
            $("#judul").text("Gigi taring kecil pertama atas");
            $("#isi").text("Namaku gigi taring kecil pertama atas, aku biasanya lepas umur 11-12 tahun");
        }else if(x==4){
            $("#judul").text("Gigi geraham kecil pertama atas");
            $("#isi").text("Namaku gigi geraham kecil pertama atas, aku biasanya lepas umur 10-11 tahun");
        }else if(x==5){
            $("#judul").text("Gigi geraham kecil kedua atas");
            $("#isi").text("Namaku gigi geraham kecil kedua atas, aku biasanya lepas umur 10-12 tahun");
        }else if(x==6){
            $("#judul").text("Gigi geraham besar pertama atas");
            $("#isi").text("Namaku gigi geraham besar pertama atas, aku biasanya lepas umur 6-7 tahun");
        }else if(x==7){
            $("#judul").text("Gigi geraham besar kedua atas");
            $("#isi").text("Namaku gigi geraham besar pertama atas, aku biasanya lepas umur 12-13 tahun");
        }else if(x==8){
            $("#judul").text("Gigi geraham besar ketiga atas");
            $("#isi").text("Namaku gigi geraham besar ketiga atas, aku biasanya lepas umur 17-21 tahun");
        }else if(x==9){
            $("#judul").text("Gigi seri pertama rahang bawah");
            $("#isi").text("Namaku gigi seri pertama rahang bawah, aku biasanya lepas umur 6-7 tahun");
        }else if(x==10){
            $("#judul").text("Gigi seri kedua rahang bawah");
            $("#isi").text("Namaku gigi seri kedua rahang bawah, aku biasanya lepas umur 7-8 tahun");
        }else if(x==11){
            $("#judul").text("Gigi taring kecil pertama bawah");
            $("#isi").text("Namaku gigi taring kecil pertama bawah, aku biasanya lepas umur 9-10 tahun");
        }else if(x==12){
            $("#judul").text("Gigi geraham kecil pertama bawah");
            $("#isi").text("Namaku gigi geraham kecil pertama bawah, aku biasanya lepas umur 10-12 tahun");
        }else if(x==13){
            $("#judul").text("Gigi geraham kecil kedua bawah");
            $("#isi").text("Namaku gigi geraham kecil kedua bawah, aku biasanya lepas umur 11-12 tahun");
        }else if(x==14){
            $("#judul").text("Gigi geraham besar pertama bawah");
            $("#isi").text("Namaku gigi geraham besar pertama bawah, aku biasanya lepas umur 6-7 tahun");
        }else if(x==15){
            $("#judul").text("Gigi geraham besar kedua bawah");
            $("#isi").text("Namaku gigi geraham besar pertama bawah, aku biasanya lepas umur 11-13 tahun");
        }else if(x==16){
            $("#judul").text("Gigi geraham besar ketiga bawah");
            $("#isi").text("Namaku gigi geraham besar ketiga bawah, aku biasanya lepas umur 17-21 tahun");
        }else if(x==21){
            $("#judul").text("Gigi seri pertama atas");
            $("#isi").text("Namaku gigi seri pertama atas, aku biasanya lepas umur 7,5 bulan");
        }else if(x==22){
            $("#judul").text("Gigi seri kedua atas");
            $("#isi").text("Namaku gigi seri kedua atas, aku biasanya lepas umur 9 bulan");
        }else if(x==23){
            $("#judul").text("Gigi taring atas");
            $("#isi").text("Namaku gigi taring atas, aku biasanya lepas umur 1 tahun 6 bulan");
        }else if(x==24){
            $("#judul").text("Gigi geraham pertama atas");
            $("#isi").text("Namaku gigi geraham pertama atas, aku biasanya lepas umur 1 tahun 2 bulan");
        }else if(x==25){
            $("#judul").text("Gigi geraham kedua atas");
            $("#isi").text("Namaku gigi geraham kedua atas, aku biasanya lepas umur 2 tahun");
        }else if(x==26){
            $("#judul").text("Gigi seri pertama bawah");
            $("#isi").text("Namaku gigi seri pertama bawah, aku biasanya lepas umur 6 bulan");
        }else if(x==27){
            $("#judul").text("Gigi seri kedua bawah");
            $("#isi").text("Namaku gigi seri kedua bawah, aku biasanya lepas umur 7 bulan");
        }else if(x==28){
            $("#judul").text("Gigi taring bawah");
            $("#isi").text("Namaku gigi taring bawah, aku biasanya lepas umur 1 tahun 4 bulan");
        }else if(x==29){
            $("#judul").text("Gigi geraham pertama bawah");
            $("#isi").text("Namaku gigi geraham pertama bawah, aku biasanya lepas umur 1 tahun");
        }else if(x==30){
            $("#judul").text("Gigi geraham kedua bawah");
            $("#isi").text("Namaku gigi geraham kedua bawah, aku biasanya lepas umur 1 tahun 8 bulan");
        }
        $('#myModal').modal('show');
    }
</script>