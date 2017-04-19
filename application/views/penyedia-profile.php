<?php

  $id_user  = $this->session->userdata('id_user');
  // $email    = $this->session->userdata('username');

  // //mysqli_select_db('nama koneksi', 'nama database')

  // $conn     = mysqli_connect("localhost","id1060855_sepakat","sepakat","id1060855_sepakat_db");
  // $bah_bak  = mysqli_query($conn, "SELECT * FROM `bahan_baku` WHERE `email` = '$email'");
  // while($bb = mysqli_fetch_assoc($bah_bak)){
  //   $id     = $bb['id_bahan_baku'];
  //   $nama   = $bb['nama'];
  //   $alamat = $bb['alamat'];
  //   $no     = $bb['no_telp'];
  //   $total     = $bb['total_produksi'];
  //   $id_kategori  = $bb['kategori'];
  //   $barbar       = $bb['barang_bahan'];
  //   $provinsi     = $bb['provinsi'];
  //   $kota         = $bb['kota'];
  //   $gambar     = $bb['gambar_latar'];
  // }

  // $nam_kat  = "SELECT `kategori` FROM `kategori` WHERE `id_kategori` = '$id_kategori'";

  // require_once 'koneksi_pdo.php';
  // $select = $koneksi->query("SELECT * FROM `kota`");
  // while ($data = $select->fetch(PDO::FETCH_ASSOC)) {
  //   $prov_kota[] = $data['provinsi'];
  //   $kota_kota[] = $data['kota'];
  // }

  // $selectbar = $koneksi->query("SELECT `kategori`.`kategori`, `barang_bahan`.`nama_bb` FROM `barang_bahan` INNER JOIN `kategori`ON `barang_bahan`.`id_kategori`=`kategori`.`id_kategori`");
  // while ($databar = $selectbar->fetch(PDO::FETCH_ASSOC)) {
  //   $kategoribar[]  = $databar['kategori'];
  //   $barangbar[]  = $databar['nama_bb'];
  // }

?>

<body>
<div class="solid-banner" style="background-image: url('<?= base_url($penyedia[0]['gambar_latar']);?>');">
  <div class="container" style=" padding-top:10%;color: white;">
    <h1>Lengkapi Data Penyedia Anda</h1>
  </div>


  <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
      <form action="<?= base_url('penyedia/up_dat');?>" method="post" enctype="multipart/form-data">
    <div class="row company-itemhead">
      <div class="row">
      <div class="col-md-2">
          <div class="input-group">
            <?php
              if ($penyedia[0]['icon'] != NULL) {
            ?>
                <img src="<?php echo base_url($penyedia[0]['icon']); ?>" class="img-responsive"/>
            <?PHP
        } else {
            echo '<img src="' . base_url('assets/images/logo/dummypenyedia.png') . '" class="img-responsive"/>';
        }
            ?>
          </div>
        </div>
        <div class="col-md-10">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Nama Penyedia</div>
              <input type="text" class="form-control" name="nama" placeholder="Nama penyedia" value="<?= $penyedia[0]['nama'];?>" />
            </div>
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Alamat Penyedia</div>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat penyedia" value="<?= $penyedia[0]['alamat'];?>" />
            </div>
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Nomor Telepon</div>
              <input type="text" class="form-control" name="no" placeholder="Nomor Telepon" value="<?= $penyedia[0]['no_telp'];?>" />
            </div>
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Email</div>
              <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $this->session->userdata('username');?>" />
            </div>
        </div>
      </div>


      <div class="col-md-12">

      <input type="hidden" name="id_user" value="<?= $id_user;?>"/>
      <input type="hidden" name="id_bab" value="<?= $penyedia[0]['id_bahan_baku'];?>"/>

         <div class="input-group input-data">
             <div class="input-group-addon" style="width:150px;text-align:right;">Total Produksi</div>
          <input type="text" class="form-control" name="total" placeholder="Total Produksi (Kg)" value="<?= $penyedia[0]['total_produksi'];?>" />
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Daerah Provinsi</div>
                <select class="form-control" name="provinsi" onchange="combokota()" id="provinsi">
                  <?php
                    if($penyedia[0]['provinsi'] != NULL){
                      echo "<option value=" . $penyedia[0]['provinsi'] . "> ". $penyedia[0]['provinsi'] . "</option>";
                    } else {
                      echo "<option value=''>Provinsi</option>";
                    }
                      foreach($provinsi as $data){
                        echo "<option value=" . $data['provinsi'] . "> ". $data['provinsi'] . "</option>"; }
                   ?>
                </select>
              </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Daerah Kota</div>
              <select id="kota" class="form-control" name="kota" style="color:#bdc3c7;" >
                <?php
                  if($penyedia[0]['kota'] != NULL){
                    echo "<option value=" . $penyedia[0]['kota'] . "> ". $penyedia[0]['kota'] . "</option>";
                  } else {
                    echo "<option value=''>Kota</option>";
                  }
                ?>
              </select>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Kategori</div>
              <select id="kategori" class="form-control" name="kategori" onchange="combobarang()" >
                <?php
                  if($penyedia[0]['kategori'] != NULL){
                    echo "<option value=" . $penyedia[0][''] . "> ". $penyedia[0]['kategori'] . "</option>";
                  } else {
                    echo "<option value=''>Kategori</option>";
                  }
                    foreach($kategori as $data){
                      echo "<option value=" . $data['kategori'] . "> ". $data['kategori'] . "</option>"; }
                 ?>
              </select>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Barang</div>
              <select id="barang" class="form-control" name="barang" style="color:#bdc3c7;" >
                <?php
                  if($penyedia[0]['barang_bahan'] != NULL){
                    echo "<option value=" . $penyedia[0]['barang_bahan'] . "> ". $penyedia[0]['barang_bahan'] . "</option>";
                  } else {
                    echo "<option value=''>Barang/bahan</option>";
                  }
                ?>
              </select>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Jenis Perusahaan</div>
              <select name="tipe" class="form-control">
                <?php
                  if($penyedia[0]['tipe'] != NULL){
                    echo "<option value=" . $penyedia[0]['tipe'] . "> ". $penyedia[0]['tipe'] . "</option>";
                  } else {
                    echo "<option value=''>Tipe Perusahaan Penyedia</option>";
                  }
                ?>
                <option value="Perusahaan Besar">Pernyedia Besar</option>
                <option value="Perusahaan Sedang">Penyedia Sedang</option>
                <option value="Perusahaan Kecil">Penyedia Kecil</option>
              </select>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Jam Kerja</div>
              <input type="text" class="form-control" name="jam" placeholder="Jam Kerja Perusahaan" value="<?= $penyedia[0]['jam_kerja'];?>" />
            </div>
        </div>

        <div class="input-group input-data">
            <center><div class="input-group-addon">Deskripsi Penyedia</div></center>
       </div>
       <div class="input-group input-data">
           <textarea name="deskripsi" id="lawsContent" class="form-control"><?php echo $penyedia[0]['deskripsi']?></textarea>
       </div>
       <br>
    </div>


      <center>
        <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload"/>
        <br>
        <input type="submit" name="submit" class="btn btn-primary" value="Simpan Data"/>
      </center>

      </form>

      </div>
    </div>
  </div>

<div class="container-fluid" style="background-color:#fcfcfc;margin-top:575px;">
  <div class="container">
    <center>
      <h2>Hiasi laman penyedia Anda</h2>
      <hr />
      <h4>Pilih Gambar Sampul</h4>
      <form method="post" enctype="multipart/form-data" action="<?= base_url('penyedia/up_gamlat');?>">
        <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload"/>
        <input type="hidden" value="<?= $id_user;?>" name="id_user"/>
        <br>
        <input type="submit" name="gambar" class="btn btn-primary" value="Jadikan Gambar Sampul"/>
      </form>
    </center>
  </div>
</div>
</body>

<script type="text/javascript">
  function combobarang()
  {
    var combo_kategori = $('#kategori').val();
    //console.log(combo_kategori);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Perusahaan/getComboBahan/') ?>"+combo_kategori,
      data : '',
      success: function(data){
        $('#barang').find('option').remove();
        $('#barang').append(data);
      }
    });
  }

  function combokota()
  {
    var combo_provinsi = $('#provinsi').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Perusahaan/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#kota').find('option').remove();
        $('#kota').append(data);
      }
    });
  }

  document.getElementById("UploadButton").onchange = function () {
    document.getElementById("UploadFile").value = this.value;
  };
</script>
