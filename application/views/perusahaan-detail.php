<?php
  $id_user    = $this->session->userdata('id_user');
error_reporting(E_ALL);
  /*foreach ($query as $a) {
    $id       = $a['id_manufaktur'];
    $nama     = $a['nama'];
    $alamat   = $a['alamat'];
    $email    = $a['email'];
    $kota     = $a['kota'];
    $provinsi = $a['provinsi'];
    $no       = $a['no_telp'];
    $tipe     = $a['tipe'];
    $barbut   = $a['barang_dibutuhkan'];
    $totbut   = $a['banyak_kebutuhan'];
    $icon     = $a['icon'];
    $gambar   = $a['gambar_latar'];
    $idus     = $a['id_user'];
    $deks     = $a['deskripsi'];
  }*/

  foreach ($kueri as $b){
    $id_bahan   = $b['id_bahan_baku'];
  }

  $conn     = mysqli_connect("localhost","root","","dbsepakatbaru");

  /*$id_b     = mysqli_query($conn, "SELECT * FROM `bahan_baku` WHERE `id_user` = '$id_user'");
  while($zz = mysqli_fetch_assoc($id_b)) {
    $id_bahan  = $zz['id_bahan_baku'];
  }*/

?>
<div class="sub-banner" <?php if($query[0]['gambar_latar']!=null) { ?>style="background-image:url('<?php echo base_url($query[0]['gambar_latar'])?>')"<?php } ?> >
  <div class="container" style="padding-top:10%;color:white;">
  </div>
  <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
    <div class="row company-itemhead">
      <div class="col-md-1">
        <img src="<?php echo base_url($query[0]['icon']); ?>" class="img-responsive"/>
      </div>
      <div class="col-md-9">
        <h2 style="margin-top:0;font-weight: 200;"><?= $query[0]['nama'];?></h2>
        <span style="color:#b0b0b0;"></span>  <span class="label-primary">Membutuhkan: <?= $query[0]['barang_dibutuhkan'];?></span>
      </div>
      <div class="col-md-2">
         <h3><span style="color:#b0b0b0;"></span>  <span class="label-primary">Rating: <?php if (isset($a)) {  echo $a; } else{ echo"0.0";};?></span></h3>
        
      </div>
      <!--<div class="col-md-2 text-center">
        <span>2 jam yang lalu</span>
      </div>-->
    </div>
    <div class="row company-itembody">
      <div class="col-md-12">
        <?= substr($query[0]['deskripsi'],0,400);?>...
      </div>
    </div>
    <div class="row company-itemfoot" style="background-color:white;font-size:80%;">
      <div class="text-left">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> <?= $query[0]['provinsi'];?>, <?= $query[0]['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?= $query[0]['banyak_kebutuhan'];?> Kg/Bulan</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i>&nbsp;</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-envelope"></i> <?= $query[0]['email'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-phone"></i> <?= $query[0]['no_telp'];?></span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-clock-o"></i> 08.00 - 17.00</span>
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
<form action="<?php echo base_url(); ?>Perusahaan/rating" method="POST">
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
                    <span><input type="hidden" name="idmanuf" value="<?= $query[0]['id_manufaktur'];?>"></span>
                    <span>
                    <div><input type="hidden" name="valsta" id="valsta"></div></span>
                    </form>
                    </h3>

</div>

      <form action="<?= base_url('index.php/perusahaan/kerjasama');?>" method="POST" >

         <?php
          if($id_user == NULL){
        ?>
            <input type="hidden" name="idm" value="">
            <input type="hidden" name="idb" value="">

            <div class="col-md-3 pull-right"><br>
              <a href="<?= base_url('index.php/login/')?>"><span class='btn btn-primary'>Login untuk Bekerja Sama</span></a>
            </div>

        <?php
          } else {

            $idm  = $query[0]['id_manufaktur'];
        ?>

        <input type="hidden" name="idm" value="<?= $idm;?>">
        <input type="hidden" name="idb" value="<?= $id_bahan;?>">

        <div class="col-md-3 pull-right"><br>
          <?php
            $email_sen  = $query[0]['email'];

            $kerjasama  = mysqli_query($conn, "SELECT * FROM `kerjasama` WHERE `id_manufaktur` = '$idm' && `id_bahan_baku` = '$id_bahan'");
            $cc = mysqli_num_rows($kerjasama);

            /*echo $id_manufaktur;
            echo $id;
            echo $cc;*/

            if ($cc == 1) {
              while($dd = mysqli_fetch_assoc($kerjasama)) {
                $kon = $dd['konfirmasi'];
                  if ($kon == 1) {
            ?>



            <a href = "mailto:<?= $email_sen?>"><span class='btn btn-primary'>Kirim Pesan</span></a>

            <?php
                  } elseif ($kon == 0) {
                    echo "<span class='btn btn-primary'>Menunggu konfirmasi</span>";
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
      <p><?php echo $query[0]['deskripsi'];?></p>
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