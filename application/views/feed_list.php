
<?php
  $idus = $this->session->userdata('id_user');
?>

<body style="background-color:#f0f0f0">

<div class="small-banner" >
  <div class="container" style="padding-top:10%;color:white;">
    <h1>Jadilah Sosial</h1>
    <p>Jangan tertinggal informasi terbaru</p>
  </div>
</div>

<div class="container-fluid" style="box-shadow:1px 2px 20px 2px rgba(0,0,0,0.15);">
  <nav id="navigate" class="nav navbar navbar-default" style="margin-bottom:0px;">
    <div class="container" style="padding:0;">
      <div class="pull-left">
        <h2>Feeds</h2>
      </div>
      <div class="pull-right">
        <button class="btn-utama" onclick="" data-toggle="modal" data-target="#myModal" style="margin-top:3px;"><i class="fa fa-2x fa-pencil inverse"></i></button>
        <a href="<?= base_url('index.php/feed/feed_detail/')?>"><button class="btn-utama" style="margin-top:3px;"><i class="fa fa-2x fa-user"></i></button></a>
      </div>
      <form class="navbar-form navbar-left" style="width:70%;">
        <div class="form-group" style="width:70%;">
          <!-- <span class="input-group-addon">Pencarian</span> -->
          <!-- <input type="text" class="form-control" placeholder="Masukkan keyword" style="width:100%;font-size:100%;"> -->
        </div>
        <!-- <button class="btn btn-utama"><i class="fa fa-fw fa-search"></i></button> -->
      </form>
    </div>
  </nav>
</div>

<div class="container-fluid" style="background-color:white;">
  <div class="container">
    <form enctype="multipart/form-data" action="<?= base_url('index.php/feed/add_perusahaan_feed')?>" method="POST" >
      <center>
        <h2>Feed yang pernah Anda buat</h2>
      </center>
    </form>
  </div>
</div>

<div class="container-fluid section1" style="padding-top:20px;">


      <?php
        foreach ($query as $a) {
      ?>
    <div class="container">
      <div class="xol-xs-12 hub-item">
        <a href="hub/detail">
          <div class="row hub-head">
            <!--<div class="col-md-1">
              <img src="" class="img-responsive"/>
            </div>
            <div class="col-md-9">
              <h2 style="margin-top:0;font-weight: 200;">PT. Extra Steel Indonesia</h2>
              <span><i class="fa fa-fw fa-map-marker"></i> Kuningan, Jawa Barat</span>
            </div>-->
            <div class="col-md-2 text-center">
              <!-- <span>2 jam yang lalu</span> -->
            </div>
          </div>
          <div class="row hub-image" style="background-image:url(<?= base_url().$a['gambar']?>);"></div>
          <div class="row hub-body">
            <div class="col-md-12">
              <?= $a['isi']?>
            </div>
          </div>

        </a>

        <div class="row hub-foot">
          <!--<div class="col-xs-4">
            <span><i class="fa fa-fw fa-thumbs-o-up"></i> Like</span><br>
          </div>-->
          <div class="col-md-8 pull-right text-right">
            <h5 style="margin-top:20px;">Bagikan di
              <a href="https://www.facebook.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
              <a href="http://twitter.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
              <a href="https://plus.google.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span></a>
              <a href="http://linkedin.com/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span></a>
            </h5>
          </div>
        </div>
       </div>
      <?php
        }
      ?>


    </div>
</div>
    <!--<div class="xol-xs-12 hub-item">
      <a href="hub/detail">
        <div class="row hub-head">
          <div class="col-md-1">
            <img src="" class="img-responsive"/>
          </div>
          <div class="col-md-9">
            <h2 style="margin-top:0;font-weight: 200;">PT. Extra Steel Indonesia</h2>
            <span><i class="fa fa-fw fa-map-marker"></i> Kuningan, Jawa Barat</span>
          </div>
          <div class="col-md-2 text-center">
            <span>2 jam yang lalu</span>
          </div>
        </div>
        <div class="row hub-image" style="background-image:url('');"></div>
        <div class="row hub-body">
          <div class="col-md-12">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </a>
        <div class="row hub-foot">
          <div class="col-xs-4">
            <span><i class="fa fa-fw fa-thumbs-o-up"></i> Like</span><br>
          </div>
          <div class="col-md-8 pull-right text-right">
            <h5 style="margin-top:20px;">Bagikan di
              <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span>
              <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span>
              <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x fa-inverse"></i></span>
              <span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span>
            </h5>
          </div>
        </div>
      </div>
  </div>-->


<center>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="width:800px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Buat Posting Baru</h4>
        </div>
        <form enctype="multipart/form-data" action="<?= base_url('index.php/feed/add_perusahaan_feed')?>" method="POST" >
          <div class="modal-body">
              <center>
                <h2>Buat Feed Baru Mengenai Perusahaan Anda</h2>
                <hr />
              </center>
                <input type="hidden" name="id_us" value="<?= $idus;?>">
                <div class="form-group">
                  <input id="UploadFile" placeholder="Pilih Gambar" class="form-control" disabled />
                  <span class="btn btn-file btn-block" style="border-radius:0px;">Pilih gambar untuk diunggah <input type="file" name="fileToUpload" id="fileToUpload"></span>
                </div>
                <textarea name="posting" class="form-control"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan Feed"/>
          </div>
        </form>
      </div>
    </div>
  </div>
</center>

  <script>
  document.getElementById("fileToUpload").onchange = function () {
    document.getElementById("UploadFile").value = this.value;
  };
  </script>
