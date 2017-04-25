<div class="main-banner">
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Cari Perusahaan</h1>
    <h4>Gunakan halaman berikut untuk mencari perusahaan yang sesuai minat anda.</h4>
  </div>
  <!--<div class="container filter-box">
    <h2 style="color:#0f0f0f;margin-top:0;">Filter</h2>
    <hr />

    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Kata kunci" />
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Lokasi" />
      </div>

      <br><br>
  </div>-->
  <div class="container filter-box">
    <h2 style="color:#0f0f0f;margin-top:0;">Filter</h2>

    <div class="row">
      <div class="col-md-11" style="padding-left: 25px;">
        <!--<h4>Tambahkan Komentar</h4>-->
          <form action="<?php echo base_url('Perusahaan/cari')?>" method="post">
                         <div class="input-group" style="width:100%;">
                             <!-- <div class="input-group-addon" style="width:150px;text-align:right;">Tambahkan komentar</div> -->
                             <input type="text" class="form-control" name="search" placeholder="Cari Perusahaan Berdasarkan: Nama Perusahaan atau Barang yang Dibutuhkan Perusahaan  ...">
                        </div>
      </div>
        <button type="submit" class="btn btn-default">Cari</button>
          </form>
    </div>

  <form action="<?= base_url()?>Perusahaan/tipe" method="post">
<center>
    <div class="row" align="center">
      <div class="col-md-4 col-md-offset-2 text-left" style="line-height:2;">
        <h3 style="color:grey;">Tipe Perusahaan</h3>
        <div class="checkbox">
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Besar" />Perusahaan Besar</label><br>
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Sedang" />Perusahaan Sedang</label><br>
          <label><input name="tipes[]" type="checkbox" value="Perusahaan Kecil" />Perusahaan Kecil</label><br>
        </div>
      </div>
      <div class="col-md-4 text-left" style="line-height:2;">
        <h3 style="color:grey;">Kebutuhan Perusahaan</h3>
        <div class="checkbox">
           <label><input name="banyak[]" type="checkbox" value="3000" />Lebih dari 3 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="1000">1 - 3 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="500" />0,5 - 1 ton / bulan</label><br>
          <label><input name="banyak[]" type="checkbox" value="499" />Kurang dari 0,5 ton / bulan</label><br>
        </div>
      </div>
      <!--<div class="col-md-4">
        <select class="form-control">
          <option value="">Kategori</option>
        </select>
    </div>-->
    </div>
</center>
    <div class="row" style="background-color:rgb(240, 240, 240);margin-top:40px;">
      <div class="col-md-3 col-md-offset-9">
        <br><button class="btn btn-primary">Terapkan Filter</button><br><br>
      </div>
    </div>
    </form>
</div>
  </div>
<br>
<br>

<br>
<div class="container-fluid section1" style="padding-top:8px;">
  <div class="container">
    <!--<h3>Ditemukan 217 data, menampilkan 1-5</h3>-->

    <?php
        foreach ($query as $a) {
          $id       = $a['id_manufaktur'];
          $gambar   = $a['icon'];
    ?>

    <a href="<?php echo base_url('perusahaan/detail/'.$a['id_manufaktur']);?>"><div class="col-xs-12 company-item">
      <div class="row company-itemhead">
        <div class="col-md-1">
          <img src="<?php echo base_url($gambar); ?>" class="img-responsive"/>
        </div>
        <div class="col-md-9">
          <h2 style="margin-top:0;font-weight: 200;"><?php echo $a['nama'];?></h2>
          <span class="label-primary">Membutuhkan: <?php echo $a['barang_dibutuhkan'];?></span>
        </div>
        <!--<div class="col-md-2 text-center">
          <span>2 jam yang lalu</span>
        </div>-->
      </div>
      <div class="row company-itembody">
        <div class="col-md-12" align="justify">
          <?php
            echo $a['deskripsi'];
          ?>
        </div>
      </div>
      <div class="row company-itemfoot">
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-map-marker"></i> <?php echo $a['provinsi'];?>, <?php echo $a['kota'];?></span><br>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-cubes"></i> <?php echo $a['banyak_kebutuhan'];?> Kilogram / bulan</span>
        </div>
        <div class="col-md-4">
          <span><i class="fa fa-fw fa-exchange"></i> <?php echo $a['tipe'];?></span>
        </div>
      </div>
    </div></a>
    <?php } ?>

  </div>
  <nav aria-label="Page navigation" class="text-center">
    <!--<ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>-->
  </nav>
</div>
