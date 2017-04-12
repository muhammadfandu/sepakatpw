<?php
//   $id_user  = $this->session->userdata('id_user');
//   $email    = $this->session->userdata('username');

//   //mysqli_select_db('nama koneksi', 'nama database')

//   $conn     = mysqli_connect("localhost","id1060855_sepakat","sepakat","id1060855_sepakat_db");
//   $man      = mysqli_query($conn, "SELECT * FROM `manufaktur` WHERE `email` = '$email'");
//   while($bb = mysqli_fetch_assoc($man)){
//     $id     = $bb['id_manufaktur'];
//     $nama   = $bb['nama'];
//     $alamat = $bb['alamat'];
//     $provinsi   = $bb['provinsi'];
//     $kota       = $bb['kota'];
//     $no         = $bb['no_telp'];
//     $tipe       = $bb['tipe'];
//     $bar_dib    = $bb['barang_dibutuhkan'];
//     $ban_keb    = $bb['banyak_kebutuhan'];
//     $gambar     = $bb['gambar_latar'];
//   }

//   require_once 'koneksi_pdo.php';
//   $select = $koneksi->query("SELECT * FROM `kota`");
//   while ($data = $select->fetch(PDO::FETCH_ASSOC)) {
//     $prov_kota[] = $data['provinsi'];
//     $kota_kota[] = $data['kota'];
//   }

//   $selectbar = $koneksi->query("SELECT `kategori`.`kategori`, `barang_bahan`.`nama_bb` FROM `barang_bahan` INNER JOIN `kategori`ON `barang_bahan`.`id_kategori`=`kategori`.`id_kategori`");
//   while ($databar = $selectbar->fetch(PDO::FETCH_ASSOC)) {
//     $kategoribar[]  = $databar['kategori'];
//     $barangbar[]  = $databar['nama_bb'];
//   }

?>

<div class="solid-banner" style="background-image: url('<?php if($perusahaan[0]['gambar_latar'] != null) echo base_url($perusahaan[0]['gambar_latar']); ?>');">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Lengkapi Data Perusahaan Anda</h1>
    <!--<p>Sesuaikan data diri  untuk perusahaan Anda yang akan dilihat orang lain.</p>-->
  </div>

    <div class="container filter-box" style="text-align:left;font-size:120%;line-height:2;">
        <form method="POST" action="<?php echo base_url();?>Perusahaan/update/<?php echo $perusahaan[0]['id_user'];?>" enctype="multipart/form-data">
      <div class="row company-itemhead">
        <div class="row">
        <div class="col-md-2">
          <div class="input-group">
            <?php
              if ($perusahaan[0]['icon'] != NULL) {
            ?>
              <img src="<?php echo base_url($perusahaan[0]['icon']); ?>" class="img-responsive"/>
            <?php
              }
            ?>
          </div>
        </div>



        <div class="col-md-10">
          <div class="input-group input-data  ">
            <input type="hidden" class="form-control" name="idus" <?php echo 'value = "' . $perusahaan[0]['id_user'] . '"';?>/>
          </div>
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Nama Perusahaan</div>
              <input type="text" class="form-control" name="nama" placeholder="Nama Perusahaan" <?php echo 'value = "' . $perusahaan[0]['nama'] . '"';?> />
          </div>
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Alamat Perusahaan</div>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat Perusahaan" <?php echo 'value = "' . $perusahaan[0]['alamat'] . '"';?> />
          </div>
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Nomor Telepon</div>
              <input type="text" class="form-control" name="notelp" placeholder="Nomor Telepon" <?php echo 'value = "' . $perusahaan[0]['no_telp'] . '"';?>/>
          </div>
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Email Perusahaan</div>
              <input type="text" class="form-control" name="email" <?php echo 'value = "' . $perusahaan[0]['email'] . '"';?> placeholder="Email"/>
          </div>
        </div>
        </div>

        <div class="col-md-12">

        <div class="col-md-6" style="padding:0px;">
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Provinsi</div>
              <select class="form-control" name="provinsi" onchange="combokota()" id="provinsi">
              <?php
                if($perusahaan[0]['provinsi'] != NULL){
                  echo "<option value=" . $perusahaan[0]['provinsi'] . "> ". $perusahaan[0]['provinsi'] . "</option>";
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
              <div class="input-group-addon" style="width:150px;text-align:right;">Kota</div>
              <select id="kota" class="form-control" name="kota" style="color:#bdc3c7;" >
              <?php
                if($perusahaan[0]['kota'] != NULL){
                  echo "<option value=" . $perusahaan[0]['kota'] . "> ". $perusahaan[0]['kota'] . "</option>";
                } else {
                  echo "<option value=''>Kota</option>";
                }
              ?>
            </select>
          </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
          <div class="input-group input-data">
              <div class="input-group-addon" style="width:150px;text-align:right;">Tipe Perusahaan</div>
              <select name="tipe" class="form-control">
              <?php
                if($perusahaan[0]['tipe'] != NULL){
                  echo "<option value=" . $perusahaan[0]['tipe'] . "> ". $perusahaan[0]['tipe'] . "</option>";
                } else {
                  echo "<option value=''>Tipe Perusahaan</option>";
                }
              ?>
              <option value="Perusahaan Besar">Perusahaan Besar</option>
              <option value="Perusahaan Sedang">Perusahaan Sedang</option>
              <option value="Perusahaan Kecil">Perusahaan Kecil</option>
            </select>
          </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Email Perusahaan</div>
                <input name="jam" type="text" class="form-control" placeholder="Jam Kerja" <?php echo 'value = "' . $perusahaan[0]['jam_kerja'] . '"';?>/>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Barang yang Dibutuhkan</div>
                <input name="butuh" type="text" class="form-control" placeholder="Barang yang Dibutuhkan" <?php echo 'value = "' . $perusahaan[0]['barang_dibutuhkan'] . '"';?>/>
            </div>
        </div>
        <div class="col-md-6" style="padding:0px;">
            <div class="input-group input-data">
                <div class="input-group-addon" style="width:150px;text-align:right;">Banyak Kebutuhan</div>
                <input name="banyak" type="text" class="form-control" placeholder="Banyak Kebutuhan (Satuan Kg)" <?php echo 'value = "' . $perusahaan[0]['banyak_kebutuhan'] . '"';?>/>
            </div>
        </div>

          <!--<div class="input-group input-data">
            <select class="form-control" name="kategori" onchange="combobarang()" id="kategori">
                <option value="">Kategori</option>
                    /*require_once 'koneksi_pdo.php';
                    $select = $koneksi->query("SELECT * FROM `kategori`");
                    while ($data = $select->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='".$data['id_kategori']."'>{$data['kategori']}</option>";
                    }*/
            </select>
          </div>
          <div class="input-group input-data">
            <select id="barang" class="form-control" style="color:#bdc3c7;" value="//$barbar;" name="barang">
              <option >Barang/bahan</option>
            </select>
          </div>-->

          <div class="input-group input-data">
              <center><div class="input-group-addon">Deskripsi Perusahaan</div></center>
         </div>
         <div class="input-group input-data">
             <div style="height:75px" id="summernote" class="form-control"  value="<?= $perusahaan[0]['deskripsi'];?>"></div>
             <textarea style="display:none;" id="lawsContent" name="deskripsi" class="form-control"></textarea>
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

<div class="container-fluid" style="background-color:#fcfcfc;margin-top:75px;">
  <div class="container">
    <center>
      <h2>Hiasi laman perusahaan Anda</h2>
      <hr />
      <h4>Pilih Gambar Sampul</h4>
      <form method="post" enctype="multipart/form-data" action="<?= base_url('perusahaan/up_gamlat');?>">
        <input type="file" class="btn btn-primary" name="fileLatar" id="fileLatar" />
        <input type="hidden" <?php echo 'value = "' . $perusahaan[0]['id_user'] . '"';?> name="id_user"/>
        <br>
        <input type="submit" name="gambar" class="btn btn-primary" value="Jadikan Gambar Sampul"/>
      </form>
    </center>
  </div>
</div>

<script>
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
</script>
