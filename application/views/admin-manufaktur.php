<div class="content-wrapper admin-content">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-user"></i> Perusahaan Manufaktur</h1>
    </div>
    <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>Email</td>
            <td>Tipe</td>
            <td>Barang yang dibutuhkan</td>
            <td>Banyak barang</td>
            <td>Provinsi</td>
            <td>Kota</td>
            <td width="15%"></td>
        </tr>
      <?php
        $no = 0;
        foreach($manufaktur as $u){
        $no++;
      ?>
        <tr>
        <input type="hidden" name="idmanu" id="idmanu" class="form-control" value="<?php echo $manufaktur[$no-1]['id_manufaktur']; ?>" />
            <td><?php echo $no; ?></td>
            <td><?php echo $manufaktur[$no-1]['nama']; ?></td>
            <td><?php echo $manufaktur[$no-1]['alamat']; ?></td>
            <td><?php echo $manufaktur[$no-1]['no_telp']; ?></td>
            <td><?php echo $manufaktur[$no-1]['email']; ?></td>
            <td><?php echo $manufaktur[$no-1]['tipe']; ?></td>
            <td><?php echo $manufaktur[$no-1]['barang_dibutuhkan']; ?></td>
            <td><?php echo $manufaktur[$no-1]['banyak_kebutuhan']; ?></td>
            <td><?php echo $manufaktur[$no-1]['provinsi']; ?></td>
            <td><?php echo $manufaktur[$no-1]['kota']; ?></td>
            <td><button align="center" class="btn btn-success" data-target="#ModalEdit" data-toggle="modal" type="button" onclick="edit_manu(<?php echo $u['id_manufaktur'];?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button> <a href="del_manu/<?php echo $manufaktur[$no-1]['id_manufaktur'];?>" onclick="return confirmDelete();"><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></a></td>
        </tr>
        <?php
        }
        ?>
  </table>
  <nav aria-label="Page navigation" class="text-right">
    <ul class="pagination">
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
    </ul>
  </nav>
</div>
</div>
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAddLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalAddLabel"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data Baru</h4>
      </div>
       <form method="POST" action="<?php echo base_url(); ?>Admin/insert_manu">
      <div class="modal-body">
        <div class="form-group">
          <span>Nama :</span>
          <input type="text" name="namas" id="namas" class="form-control" placeholder="Nama perusahaan" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="alamats" id="alamats" class="form-control" placeholder="alamat" />
        </div>
        <div class="form-group">
          <span>Nomor Telepon:</span>
          <input type="text" name="nos" id="nos" class="form-control" placeholder="nomor telepon" />
        </div>
        <div class="form-group">
          <span>Email :</span>
          <input type="text" name="emails" id="emails" class="form-control" placeholder="email" />
        </div>
        <div class="form-group">
          <span>Tipe Perusahaan :</span>
          <select name="tipes" class="form-control">
              <option value="">Tipe Perusahaan</option>
              <option value="Perusahaan Besar">Perusahaan Besar</option>
              <option value="Perusahaan Sedang">Perusahaan Sedang</option>
              <option value="Perusahaan Kecil">Perusahaan Kecil</option>
            </select>
        </div>
        <div class="form-group">
          <span>Barang yang Dibutuhkan :</span>
          <input type="text" name="butuhs" id="butuhs" class="form-control" placeholder="Barang yang dibutuhkan" />
        </div>
        <div class="form-group">
          <span>Banyak Barang :</span>
          <input type="text" name="banyaks" id="banyaks" class="form-control" placeholder="Banyak Barang yang dibutuhkan" />
        </div>
        <div class="form-group">
         <span>Provinsi :</span>
         <select class="form-control" name="provinsis" onchange="combokota()" id="provinsis">
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
          <!-- <span>Provinsi :</span>
          <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="provinsi" /> -->
        </div>
        <div class="form-group">
          <span>Kota :</span>
          <select id="kotas" class="form-control" name="kotas" style="color:#bdc3c7;" >
              <?php
                if($perusahaan[0]['kota'] != NULL){
                  echo "<option value=" . $perusahaan[0]['kota'] . "> ". $perusahaan[0]['kota'] . "</option>";
                } else {
                  echo "<option value=''>Kota</option>";
                }
              ?>
            </select>
          <!-- <input type="text" name="kota" id="kota" class="form-control" placeholder="kota" /> -->
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <input type="submit" name="submit" class="btn bg-red waves-effect" value="Tambah">
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEdit2" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <form method="POST" action="" id="edManu">
      <div class="modal-body">
        <div class="form-group">
          <span>ID Perusahaan :</span>
          <input disabled type="text" name="idmanuf" id="idmanuf" class="form-control" placeholder="ID User" value="2" />
          <input type="hidden" name="idmanu" id="idmanu">
        </div>
        <div class="form-group">
          <span>Nama :</span>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama perusahaan" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="alamat" id="alamat" class="form-control" placeholder="alamat" />
        </div>
        <div class="form-group">
          <span>Nomor Telepon:</span>
          <input type="text" name="no" id="no" class="form-control" placeholder="nomor telepon" />
        </div>
        <div class="form-group">
          <span>Email :</span>
          <input type="text" name="email" id="email" class="form-control" placeholder="email" />
        </div>
        <div class="form-group">
          <span>Tipe Perusahaan :</span>
          <select name="tipe" class="form-control">
              <option value="">Tipe Perusahaan</option>
              <option value="Perusahaan Besar">Perusahaan Besar</option>
              <option value="Perusahaan Sedang">Perusahaan Sedang</option>
              <option value="Perusahaan Kecil">Perusahaan Kecil</option>
            </select>
        </div>
        <div class="form-group">
          <span>Barang yang Dibutuhkan :</span>
          <input type="text" name="butuh" id="butuh" class="form-control" placeholder="Barang yang dibutuhkan" />
        </div>
        <div class="form-group">
          <span>Banyak Barang :</span>
          <input type="text" name="banyak" id="banyak" class="form-control" placeholder="Banyak Barang yang dibutuhkan" />
        </div>
       <div class="form-group">
         <span>Provinsi :</span>
         <select class="form-control" name="provinsi" onchange="combokotas()" id="provinsi">
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
          <!-- <span>Provinsi :</span>
          <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="provinsi" /> -->
        </div>
        <div class="form-group">
          <span>Kota :</span>
          <select id="kota" class="form-control" name="kota" style="color:#bdc3c7;" >
              <?php
                if($perusahaan[0]['kota'] != NULL){
                  echo "<option value=" . $perusahaan[0]['kota'] . "> ". $perusahaan[0]['kota'] . "</option>";
                } else {
                  echo "<option value=''>Kota</option>";
                }
              ?>
            </select>
          <!-- <input type="text" name="kota" id="kota" class="form-control" placeholder="kota" /> -->
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" onclick="savemanu()" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this data?');
    }
</script>
<script type="text/javascript">
function combobarang()
  {
    var combo_kategori = $('#kategoris').val();
    //console.log(combo_kategori);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Admin/getComboBahan/') ?>"+combo_kategori,
      data : '',
      success: function(data){
        $('#barangs').find('option').remove();
        $('#barangs').append(data);
      }
    });
  }
  function combokota() 
  {
    var combo_provinsi = $('#provinsis').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Admin/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#kotas').find('option').remove();
        $('#kotas').append(data);
      }
    });
  }
  function combokotas() 
  {
    var combo_provinsi = $('#provinsi').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Admin/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#kota').find('option').remove();
        $('#kota').append(data);
      }
    });
  }
  </script>
<!-- <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalDeleteLabels"><i class="fa fa-fw fa-trash-o"></i>Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary">Hapus Data</button>
      </div>
    </div>
  </div>
</div> -->
