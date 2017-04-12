<?php
Class Penyedia extends CI_Controller{
  // function __construct(){
  //   parent::__constuct();
    // $this->load->model('Model_bahan_baku');
  //   }
  public function profile(){
      $this->load->helper('url');

			/*$id = $this->session->userdata('id_user');
			$this->load->model('Model_bahan_baku');
			$data['datall'] 	= $this->Model_bahan_baku->get_databahan($id);

			$this->load->model('Model_kategori');
			$this->load->model('Model_provinsi');
			$data['kategori'] 	= $this->Model_kategori->select_data();
			$data['provinsi']   = $this->Model_provinsi->select_data();*/

		$this->load->model('Model_bahan_baku');
		$this->load->model('Model_kategori');
		$data['penyedia'] 	= $this->Model_bahan_baku->get_pen_single($_SESSION['id_user']);
		$data['provinsi']   = $this->Model_provinsi->select_data();
		$data['kategor']   = $this->Model_kategori->select_data();

	  /*echo '<pre>';
      print_r($data);
      print_r($_SESSION);
      echo '</pre>';*/

      $this->load->view('header');
      $this->load->view('penyedia-profile', $data);
      $this->load->view('footer');
  }

  public function isidetail(){
      $this->load->helper('url');
      $this->load->view('header');
      $this->load->view('feed_penyedia');
      $this->load->view('footer');
  }

  		public function up_dat(){
  			if ($_FILES["fileToUpload"]["name"] == NULL) {
  				$this->load->model('model_barang_bahan');

				$id_user 	= $this->input->post('id_user');
				$id_bb 		= $this->input->post('id_bab');

				$data = array(
					'nama' 				=> $this->input->post('nama'),
					'alamat' 			=> $this->input->post('alamat'),
					'no_telp' 			=> $this->input->post('no'),
					'email' 			=> $this->input->post('email'),
					'bukti' 			=> $this->input->post('bukti'),
					'total_produksi' 	=> $this->input->post('total'),
					'kategori' 			=> $this->input->post('kategori'),
					'barang_bahan' 		=> $this->input->post('barang'),
					'provinsi' 			=> $this->input->post('provinsi'),
					'kota'	 			=> $this->input->post('kota'),
					'deskripsi'			=> $this->input->post('deskripsi'),
					'tipe'				=> $this->input->post('tipe'),
					'jam_kerja'			=> $this->input->post('jam')
				);

				$where = array(
					'id_bahan_baku' => $this->input->post('id_bab')
				);

				$this->model_barang_bahan->update_barang_bahan($where,$data,'bahan_baku');

				$data2 = array(
					'username' 		=> $this->input->post('email')
				);

				$where2 = array(
					'id_user' => $this->input->post('id_user')
				);

				$this->model_barang_bahan->update_barang_bahan($where2,$data2,'user');

				redirect('penyedia/profile/');
  			} else {
	  			$this->load->model('model_manufaktur');
				$target_dir = "assets/images/logo/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

				// Check if image file is a actual image or fake image
				if(isset($_POST["gambar"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        $uploadOk = 1;
				    } else {
				        echo "<script type='text/javascript'>
				                     alert('File is not an image.');</script>";
				        $uploadOk = 0;
				    }
				}

				// Check if file already exists
				if (file_exists($target_file)) {
				   echo "<script type='text/javascript'>
				                     alert('Sorry, file already exists.');</script>";
				    $uploadOk = 0;
				}

				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				   echo "<script type='text/javascript'>
				                     alert('Sorry, your file is too large.');</script>";
				    $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				   echo "<script type='text/javascript'>
				                     alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
				    $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  echo "<script type='text/javascript'>
				                     alert('Sorry, your file was not uploaded.');</script>";
				// if everything is ok, try to upload file
				} else {

				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

						$this->load->model('model_barang_bahan');

						$id_user 	= $this->input->post('id_user');
						$id_bb 		= $this->input->post('id_bab');

						$data = array(
							'nama' 				=> $this->input->post('nama'),
							'alamat' 			=> $this->input->post('alamat'),
							'no_telp' 			=> $this->input->post('no'),
							'email' 			=> $this->input->post('email'),
							'bukti' 			=> $this->input->post('bukti'),
							'total_produksi' 	=> $this->input->post('total'),
							'kategori' 			=> $this->input->post('kategori'),
							'barang_bahan' 		=> $this->input->post('barang'),
							'provinsi' 			=> $this->input->post('provinsi'),
							'kota'	 			=> $this->input->post('kota'),
							'icon'	 			=> $target_file,
							'deskripsi'			=> $this->input->post('deskripsi'),
							'tipe'				=> $this->input->post('tipe'),
							'jam_kerja'			=> $this->input->post('jam')
						);

						$where = array(
							'id_bahan_baku' => $this->input->post('id_bab')
						);

						$this->model_barang_bahan->update_barang_bahan($where,$data,'bahan_baku');

						$data2 = array(
							'username' 		=> $this->input->post('email')
						);

						$where2 = array(
							'id_user' => $this->input->post('id_user')
						);

						$this->model_barang_bahan->update_barang_bahan($where2,$data2,'user');

						redirect('penyedia/profile/');

			    } else {
			        echo "<script type='text/javascript'>
			               alert('Sorry, there was an error uploading your file.');</script>";
			    }
			}

			}
  		}

		public function up_met(){

			$data = array(
				'nama' 				=> $this->input->post('nama'),
				'alamat' 			=> $this->input->post('alamat'),
				'no_telp' 			=> $this->input->post('no'),
				'email' 			=> $this->input->post('email')
			);

			$where = array(
				'id_bahan_baku' => $this->input->post('id_bab')
			);

			$this->model_barang_bahan->update_barang_bahan($where,$data,'bahan_baku');

			$where2 = array(
				'id_user' => $this->input->post('id_user')
			);

			redirect('data_barang_bahan/');
  		}

  		public function desk(){
  			if (null == $this->input->post('submit')) {
				$this->load->view('penyedia/isidetail/');
			}
			else{
				$data = array(
						'id_user' 			=> $this->input->post('nama'),
						'alamat' 			=> $this->input->post('alamat'),
				);
				$this->model_manufaktur->tambah_manufaktur($data);
				$data['message'] = 'Data Inserted Successfully';
				redirect('list_manufaktur');
  			}
  		}

  	public function getComboBahan($id_kategori) {
  		$this->load->database();
  		$dataComboBahan =  $this->db->select('nama_bb')
  				 ->from('barang_bahan')
  				 ->join('kategori', 'kategori.id_kategori = barang_bahan.id_kategori', 'inner')
  				 ->where(array("barang_bahan.id_kategori" => $id_kategori))
  				 ->get()
  				 ->result_array();
  		foreach($dataComboBahan as $optionComboBahan){
  			echo "<option value='".$optionComboBahan['nama_bb']."'>".$optionComboBahan['nama_bb']."</option>";
  		}
  	}

  	public function getComboKota($provinsi) {
  		$this->load->database();
  		$dataComboKota =  $this->db->select('kota')
  				 ->from('kota')
  				 ->where(array("kota.provinsi" => $provinsi))
  				 ->get()
  				 ->result_array();
  		foreach($dataComboKota as $optionComboKota){
  			echo "<option value='".$optionComboKota['kota']."'>".$optionComboKota['kota']."</option>";
  		}
  	}

  	public function up_gamlat(){
        $this->load->model('Model_bahan_baku');

  		$this->load->model('model_manufaktur');
		$target_dir = "assets/images/gambarlatar/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		// Check if image file is a actual image or fake image
		if(isset($_POST["gambar"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        echo "<script type='text/javascript'>
		                     alert('File is not an image.');</script>";
		        $uploadOk = 0;
                redirect('penyedia/profile');
		    }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		   echo "<script type='text/javascript'>
		                     alert('Sorry, file already exists.');</script>";
		    $uploadOk = 0;
            redirect('penyedia/profile');
		}

		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 5000000) {
		   echo "<script type='text/javascript'>
		                     alert('Sorry, your file is too large.');</script>";
		    $uploadOk = 0;
            redirect('penyedia/profile');
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		   echo "<script type='text/javascript'>
		                     alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
		    $uploadOk = 0;
            redirect('penyedia/profile');

		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "<script type='text/javascript'>
		                     alert('Sorry, your file was not uploaded.');</script>";
		// if everything is ok, try to upload file
		} else {

		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

			    $id_user 	= $this->input->post('id_user');

			    $data = array(
				   'gambar_latar'	=> $target_file
			   	);

			    $this->Model_bahan_baku->update_gamlat($id_user, $data);
		    	redirect('penyedia/profile');

		    } else {
		        echo "<script type='text/javascript'>
		               alert('Sorry, there was an error uploading your file.');</script>";
		    }
		}
	}

	public function list_kategori(){
		$this->load->model('model_bahan_baku');
		$data['kategori'] = $this->model_bahan_baku->select_data_kat();

		$this->load->view('header');
		$this->load->view('penyedia-kategori', $data);
		$this->load->view('footer');
	}

	public function kerjasama(){
		$this->load->model('model_kerjasama');

		$id = $this->input->post('idb');

		$data = array(
			'id_manufaktur' => $this->input->post('idm'),
			'id_bahan_baku'	=> $this->input->post('idb'),
			'konfirmasi' 	=> 0,
			'pengirim' 		=> 'Manufaktur'
		);

		$this->model_kerjasama->tambah_kerjasama($data);

		redirect('bahan_baku/showmore_detail/'.$id);
	}

	public function notifikasi(){
        $this->load->model('model_bahan_baku');
        $this->load->model('model_manufaktur');
        $this->load->model('model_kerjasama');

        $notif = array('isinotif' => $this->model_kerjasama->get_kerjasama_bahanbaku($_SESSION['id_bahan_baku']),);
        $this->session->set_userdata($notif);

		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}

	public function ker_set($id_ban){

		$data = array(
			'konfirmasi' 	=> 1
		);
		$where = array(
			'id_bahan_baku'	=> $id_ban,
			'konfirmasi'	=> 0
		);

		$this->load->model('model_bahan_baku');
		$this->model_bahan_baku->update_ker_ban($where, $data, 'kerjasama');

		$jum_row 	= $this->session->userdata('notif_man');

		$notif_new = $jum_row - 1;

		$this->session->set_userdata($notif_new);

		redirect('index.php/penyedia/profile');
	}
}

?>
