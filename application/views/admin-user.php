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
      <th>No.</th>
      <th>Username</th>
      <th>Password</th>
      <th>Konfirmasi</th>
      <th>Jenis Perusahaan</th>
      <th style="width:20%;">Tindakan</th>
    </tr>
    <?php
        $no = 0;
        foreach($user as $u){
          $id = $u['id_user'];
        $no++;
    ?>
    <tr>
    <input type="hidden" name="id_user1" value="<?php echo $user[$no-1]['id_user'];?>"></input>
      <td><?php echo $no; ?></td>
      <td><?php echo $user[$no-1]['username']; ?></td>
      <td><?php echo $user[$no-1]['password']; ?></td>
      <td><?php echo $user[$no-1]['konfirmasi']; ?></td>
      <td><?php echo $user[$no-1]['perusahaan']; ?></td>
      <td><button class="btn btn-success" data-target="#ModalEdit" data-toggle="modal" type="button" onclick="edit_user(<?php echo $id;?>)"><i class="fa fa-fw fa-pencil-square"></i> Edit</button> <a href="del_user/<?php echo $user[$no-1]['id_user'];?>" onclick="return confirmDelete();"><button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></a></td>
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
      <form method="POST" action="<?php echo base_url(); ?>Admin/insert_user">
      <div class="modal-body">
        <div class="form-group">
          <span>Username :</span>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
        </div>
        <div class="form-group">
          <span>Password :</span>
          <input type="password" name="passwords" id="passwords" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Perusahaan</span>
           <select name="peruss" class="form-control show-tick">                        
        <option value="Manufaktur"/>Manufaktur</option>
        <option value="Bahan Baku"/>Bahan Baku</option>
        </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
         <input type="submit" name="submit" class="btn bg-red waves-effect" value="Tambah">
        <!-- <button type="submit" name="submit" class="btn btn-primary">Tambahkan Data</button> -->
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <form method="POST" action="" id="edUser">
      <div class="modal-body">
        <div class="form-group">
          <span>ID User :</span>
          <input disabled type="text" name="iduserf" id="iduserf" class="form-control" placeholder="ID User" value="" />
          <input type="hidden" name="iduser" id="iduser" value=""/>
        </div>
        <div class="form-group">
          <span>Username :</span>
          <input type="text" name="user" id="user" class="form-control" placeholder="Username" value=""/>
        </div>
        <div class="form-group">
          <span>Password :</span>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="fewfwe"/>
        </div>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" onclick="saveuser()" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
    
  </div>
</div>
<script type="text/javascript">
    function confirmDelete() {
        return confirm('Are you sure you want to delete this user?');
    }
</script>