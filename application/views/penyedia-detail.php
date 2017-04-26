<?php

  $id_user    = $this->session->userdata('id_user');

  foreach ($query as $a) {
    $id       = $a['id_bahan_baku'];
    $nama     = $a['nama'];
    $email    = $a['email'];
    $kategori = $a['kategori'];
    $gamlat   = $a['gambar_latar'];   
  }



  $conn     = mysqli_connect("localhost","root","","dbsepakatbaru");

 /* $id_m     = mysqli_query($conn, "SELECT * FROM `manufaktur` WHERE `id_user` = '$id_user'");
  while($aa = mysqli_fetch_assoc($id_m)) {
    $id_manufaktur  = $aa['id_manufaktur'];
  }*/

  foreach($idm as $b){
    $idma    = $b['id_manufaktur'];
  }

  /*$bah_bak  = mysqli_query($conn, "SELECT * FROM `kategori` WHERE `id_kategori` = '$kategori'");
  while($bb = mysqli_fetch_assoc($bah_bak)){
    $kathal     = $bb['kategori'];
  }*/
?>

<div class="sub-banner" <?php if($a['gambar_latar']!=null) { ?>style="background-image:url('<?php echo base_url($a['gambar_latar'])?>')"<?php } ?> >
  <div class="container" style="padding-top:10%; color:white;">
  </div>
  <div class="container filter-box" style="text-align:left; font-size:120%; line-height:2;">
    <div class="row company-itemhead">
      <div class="col-md-1">
        <img src="<?php echo base_url($a['icon']); ?>" class="img-responsive"/>
      </div>
      <div class="col-md-9">
        <h2 style="margin-top:0;font-weight: 200;"><?= $nama;?></h2>
        <span style="color:#b0b0b0;"><?= $a['kategori'];?></span>&nbsp;<span class="label-primary"> Menghasilkan: <?= $a['barang_bahan'];?></span>
      </div>
<<<<<<< HEAD
      <div class="col-md-2">
         <h3><span style="color:#b0b0b0;"></span>  <span class="label-primary">Rating: <?php if (isset($as)) {  echo $as; } else{ echo"0.0";};?></span></h3>
=======
      <div class="col-md-2 text-center">
        <!-- <span>2 jam yang lalu</span> -->
>>>>>>> fff691549e73b8fc8521d6ef871085595f276357
      </div>
    </div>
    <div class="row company-itembody">
      <div class="col-md-12" align="justify">
        <?= substr($a['deskripsi'],0,400);?>...
      </div>
    </div>
    <div class="row company-itemfoot" style="background-color:white;font-size:80%;">
      <div class="text-left">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> <?= $a['provinsi'];?>, <?=$a['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?= $a['total_produksi'];?>Kg / Bulan <b><?= $a['harga'];?></b></span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i><?= $a['tipe'];?></span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-envelope"></i> <?= $a['email'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-phone"></i> <?= $a['no_telp'];?></span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-clock-o"></i><?= $a['jam_kerja'];?></span>
        </div>
      </div>
    </div>
    <div class="row company-action">
      <div class="col-md-4 pull-left">
        <h4 style="margin-top:20px;">Bagikan di
          <a href="https://www.facebook.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
          <a href="http://twitter.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
          <a href="https://plus.google.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
          <a href="http://linkedin.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span></a>
        </h4>
      </div>
<div class="col-md-4 pull-left">
       
<h3 style="margin-top:20px;">Berikan Rating
<form action="<?php echo base_url(); ?>Bahan_baku/rating" method="POST">
       <span>
                    <fieldset id='demo3' class="rating" >
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star53" name="rating" value="5" />
                        <label class = "full" for="star53" title="5"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star4half3" name="rating" value="4.5" />
                        <label class="half" for="star4half3" title="4.5"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star43" name="rating" value="4" />
                        <label class = "full" for="star43" title="4"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star3half3" name="rating" value="3.5" />
                        <label class="half" for="star3half3" title="3.5"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star33" name="rating" value="3" />
                        <label class = "full" for="star33" title="3"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star2half3" name="rating" value="2.5" />
                        <label class="half" for="star2half3" title="2.5"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star23" name="rating" value="2" />
                        <label class = "full" for="star23" title="2"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star1half3" name="rating" value="1.5" />
                        <label class="half" for="star1half3" title="1.5"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="star13" name="rating" value="1" />
                        <label class = "full" for="star13" title="1"></label>
                        <input class="stars" onclick="displayResult(this.value)" type="radio" id="starhalf3" name="rating" value="0.5" />
                        <label class="half" for="starhalf3" title="0.5"></label>
                    </fieldset>
                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><input type="submit" name="submit" class="btn btn-primary" value="Beri rating"></span>
                    <span><input type="hidden" name="idbb" value="<?= $a['id_bahan_baku'];?>"></span>
                    <span>
                    <div><input type="hidden" name="valsta" id="valsta"></div></span>
                    </form>
                    </h3>

</div>
      <form action="<?= base_url('penyedia/kerjasama');?>" method="POST" >

        <?php
          if($id_user == NULL){
        ?>
            <input type="hidden" name="idm" value="">
            <input type="hidden" name="idb" value="">

            <div class="col-md-4 pull-right"><br>
               <a href="<?= base_url('index.php/login')?>"><span class='btn btn-primary'>Login untuk Bekerja Sama</span></a>
            </div>

        <?php
          } else {
        ?>
          <input type="hidden" name="idm" value="<?= $idma;?>">
          <input type="hidden" name="idb" value="<?= $id;?>">

          <div class="col-md-4 pull-right"><br>
            <?php

              $kerjasama  = mysqli_query($conn, "SELECT * FROM `kerjasama` WHERE `id_manufaktur` = '$idma' && `id_bahan_baku` = '$id'");
              $cc = mysqli_num_rows($kerjasama);

              /*echo $id_manufaktur;
              echo $id;
              echo $cc;*/

              if ($cc == 1) {
                while($dd = mysqli_fetch_assoc($kerjasama)) {
                  $kon = $dd['konfirmasi'];
                    if ($kon == 1) {
                      echo "<span class='btn btn-primary'>Kirim Pesan</span>";
                    } elseif ($kon == 0) {
                      echo "<span class='btn btn-primary'>Menunggu kofirmasi</span>";
                    }
                }
              } else {
                echo "<input type='submit' class='btn btn-primary' name='submit' value='Jadikan Rekan Kerja Sama'>";
              }
          }
         ?>
        </div>
      </form>
    </div>
</div>

<div class="container-fluid" style="background-color:white;margin-top:60px;">
  <div class="container" style="text-align:justify;">
      <p><?= $a['deskripsi'];?></p>
  </div>
</div>
 <script>
function displayResult(rating){ 
 document.getElementById("valsta").value=rating; 
}
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {

                                var label = $("label[for='" + $(this).attr('id') + "']");
                                
                                $("#feedback").text(label.attr('title'));
                                $(this).attr("checked");
                            });
                         });
                    </script>