<div class="content-wrapper admin-content">
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-user"></i> User</h1>
    </div>
    <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
        <tr>
            <td>No</td>
            <td>Provinsi</td>
            <td>Nama Kota</td>
            <td align="center" width="15%">Action</td>
        </tr>
    <?php
        $no = 0;
        foreach($kota as $u){
        $no++;
    ?>
        <tr>
         <input type="hidden" name="idkota" id="idkota" class="form-control" value="<?php echo $kota[$no-1]['id_kota']; ?>" />
            <td><?php echo $no; ?></td>
            <td><?php echo $kota[$no-1]['provinsi']; ?></td>
            <td><?php echo $kota[$no-1]['kota']; ?></td>
            <td><button class="btn btn-success" data-target="#ModalEdit" data-toggle="modal" type="button" onclick="edit_kot(<?php echo $u['id_kota'];?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button><a href="del_kota/<?php echo $kota[$no-1]['id_kota']; ?>" onclick="return confirmDelete();"><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></a></td>
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
        <h4 class="modal-title" id="ModalAddLabel"><i class="fa fa-fw fa-plus-circle"></i><~-Tambah Data Baru</h4>
      </div>
      <form method="POST" action="<?php echo base_url(); ?>Admin/insert_kota">
      <div class="modal-body">
        <div class="form-group">
          <span>Nama Kota :</span>
          <input type="text" name="namas" id="namas" class="form-control" placeholder="Nama Kota" />
        </div>
        <div class="form-group">
          <span>Provinsi :</span>
          <select class="form-control" name="provs">
            <?php foreach($provinsi as $k){?>
            <option value="<?php echo $k['provinsi']?>"><?php echo $k['provinsi']?></option>
            <?php }?>
          </select>
         <!--  <input type="text" name="provs" id="provs" class="form-control" placeholder="Nama Provinsi" /> -->
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

<div class="modal fade" id="ModalEdit4" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
        <form method="POST" action="" id="edKot">
      <div class="modal-body">
       <div class="form-group">
          <span>ID Kota :</span>
          <input disabled type="text" name="idkotf" id="idkotf" class="form-control" placeholder="ID User" value="2" />
          <input type="hidden" name="idkot">
        </div>
        <div class="form-group">
         <span>Provinsi :</span>
         <select class="form-control" name="prov" onchange="combokota()" id="prov">
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
          <!-- <span>Provinsi :</span>
          <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="provinsi" /> -->
        </div>
        <div class="form-group">
          <span>Kota :</span>
          <select id="nama" class="form-control" name="nama" style="color:#bdc3c7;" >
              <?php
                if($penyedia[0]['kota'] != NULL){
                  echo "<option value=" . $penyedia[0]['kota'] . "> ". $penyedia[0]['kota'] . "</option>";
                } else {
                  echo "<option value=''>Kota</option>";
                }
              ?>
            </select>
          <!-- <input type="text" name="kota" id="kota" class="form-control" placeholder="kota" /> -->
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" onclick="savekot()" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this data?');
    }
    function combokota() 
  {
    var combo_provinsi = $('#prov').val();
    console.log(combo_provinsi);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Admin/getComboKota/') ?>"+combo_provinsi,
      data : '',
      success: function(data){
        $('#nama').find('option').remove();
        $('#nama').append(data);
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
        <button type="button" class="btn btn-primary" a href="<?= base_url('user/hapus_user/'. $user[$no-1]['id_user']);?>">Hapus Data</button>
      </div>
    </div>
  </div>
</div> -->
