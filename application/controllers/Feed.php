<?php
  Class Feed extends CI_Controller{
    public function perusahaan(){
      $this->load->helper('url');
      $this->load->database();

      $this->load->model('model_feed');
      $data['feed'] = $this->model_feed->get_feed_manufaktur();

    //   echo "<pre>";
    //   print_r($data);
    //   echo "</pre>";

      $this->load->view('header');
      $this->load->view('feed_perusahaan', $data);
      $this->load->view('footer');
    }

    public function penyedia(){
      $this->load->helper('url');
      $this->load->database();

      $this->load->model('model_feed');
      $data['feed'] = $this->model_feed->get_feed_penyedia();

    //   echo "<pre>";
    //   print_r($data);
    //   echo "</pre>";

      $this->load->view('header');
      $this->load->view('feed_penyedia', $data);
      $this->load->view('footer');
  }

    public function add_perusahaan_feed(){
      $this->load->helper('url');
      $this->load->database();

      $target_dir = "assets/images/posting/";
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

            $id   = $this->input->post('id_user');

            $data = array(
              'id_user'       => $this->input->post('id_us'),
              'isi'           => $this->input->post('posting'),
              'gambar'	      => $target_file,
              'tanggal'       => date("Y-m-d H:i:s"),
              'waktu'         => date("h:i:sa")
            );

            $this->load->model('Model_feed');
            $this->Model_feed->addfeed($data);
            redirect('index.php/feed/perusahaan/'.$id);

          } else {
              echo "<script type='text/javascript'>
                     alert('Sorry, there was an error uploading your file.');</script>";
          }
      }
    }

    public function feed_detail($id){
    	  $this->load->database();
	      $this->load->model('Model_feed');

	      $row = $this->Model_feed->get_feed_row($id);

        if ($row = 1) {
          $data['query'] = $this->Model_feed->get_feed_detail($id);
          $this->load->view('header');
          $this->load->view('feed_list', $data);
          $this->load->view('footer');
        } else {
          $this->load->view('header');
          $this->load->view('feed_list');
          $this->load->view('footer');
        }
    }

    public function detail_perusahaan($id){
        $this->load->helper('url');
        $this->load->database();

        $this->load->model('model_feed');
        $this->load->model('Model_komentar');

        $data['feed'] = $this->model_feed->manufaktur_get_by_id($id);
        $data['komentar'] = $this->Model_komentar->get_by_post1($id);

        // echo '<pre>';
        // print_r($data['komentar']);
        // echo '</pre>';

        $this->load->view('header');
        $this->load->view('feed_complete',$data);
        $this->load->view('footer');
    }

    public function detail_bahan_baku($id){
        $this->load->helper('url');
        $this->load->database();

        $this->load->model('Model_komentar');
        $this->load->model('model_feed');

        $data['feed'] = $this->model_feed->penyedia_get_by_id($id);
        $data['komentar'] = $this->Model_komentar->get_by_post2($id);

        // echo '<pre>';
        // print_r($data['komentar']);
        // echo '</pre>';

        $this->load->view('header');
        $this->load->view('feed_complete',$data);
        $this->load->view('footer');
    }
  }
?>
