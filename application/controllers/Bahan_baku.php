<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bahan_baku extends CI_Controller {

	public function show_detail($id){

	  $this->load->database();
    $this->load->model('Model_bahan_baku');
      $this->load->model('model_kategori');
      //$asd = "1";
      $data['query']=$this->Model_bahan_baku->get_bahan($id);
      $data['kategori']=$this->model_kategori->get_by_id($id);
  //   echo '<pre>';
  //   print_r($data);
  //  echo '</pre>';

      $this->load->view('header');
      $this->load->view('penyedia-list', $data);
      $this->load->view('footer');
   
	}

	public function showmore_detail($id){
      $this->load->database();

      $this->load->model('Model_bahan_baku');

      $datak = $this->Model_bahan_baku->hitung($id);
    $datas = $this->Model_bahan_baku->bagi($id);
    if($datas->prices > 0){
       $dabs = $datas->prices/$datak;
    $data['as'] = number_format($dabs,1);
      $data['query']  = $this->Model_bahan_baku->get_databahan($id);

      $id_user        = $this->session->userdata('id_user');
      $data['idm']    = $this->Model_bahan_baku->get_idm($id_user);

      $this->load->view('header');
      $this->load->view('penyedia-detail', $data);
      $this->load->view('footer');
      
    }else{
      $data['query'] 	= $this->Model_bahan_baku->get_databahan($id);

			$id_user    		= $this->session->userdata('id_user');
			$data['idm'] 		= $this->Model_bahan_baku->get_idm($id_user);

			//   echo '<pre>';
			//   print_r($data);
			//  echo '</pre>';

      $this->load->view('header');
      $this->load->view('penyedia-detail', $data);
      $this->load->view('footer');
    }
  }

 public function tipe()
    {
        $this->load->model('Model_bahan_baku');
        // $ban = implode(',', $_POST['banyak']);
		$this->load->model('model_kategori');

		$kategori = $this->input->post('kategori');

            if($this->input->post('banyak[]') == NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') !== NULL){
              $keyword = implode(',', $_POST['tipes']);
              $data['query'] = $this->Model_bahan_baku->carr($keyword);

		      $data['kategori']=$this->model_kategori->get_by_id($kategori);

        $this->load->helper('url');
        $this->load->view('header');

        $this->load->view('penyedia-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') !== NULL && $this->input->post('rad[]') == NULL && $this->input->post('tipes[]') == NULL){
              $ban = implode(',', $_POST['banyak']);
              $data['query'] = $this->Model_bahan_baku->carri($ban, $kategori);
			  $data['kategori']=$this->model_kategori->get_by_id($kategori);


        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('penyedia-list',$data);
        $this->load->view('footer');
            }elseif($this->input->post('banyak[]') == NULL && $this->input->post('tipes[]') == NULL && $this->input->post('rad[]') !== NULL)
            {
              $rad = implode(',', $_POST['rad']);
              $data['query'] = $this->Model_bahan_baku->carl($rad, $kategori);
			  $data['kategori']=$this->model_kategori->get_by_id($kategori);

               $this->load->helper('url');
               $this->load->view('header');
               $this->load->view('penyedia-list',$data);
               $this->load->view('footer');
            }


    }

    public function tombol()
     {
/*echo "<script>
alert('There are no fields to generate a report');
</script>";*/
     $this->tipe();
        }
 public function rating(){
      $this->load->database();
      $this->load->model('Model_bahan_baku');
      $id_user= $this->session->userdata('id_user');
      $id_user_rated=$this->input->post('idbb');
      $valsta=$this->input->post('valsta');

   if($this->input->post('submit')){
     $data = array(
   'id_user'=>$id_user,
   'id_user_rated'=>$id_user_rated,
   'rating'=>$valsta

   );
  // echo $id_user_rated;
  // echo"<br>";
  // echo $id_user;
  // echo"<br>";
  // echo $valsta;
    $this->Model_bahan_baku->tambahrating($data);
    $this->updaterate();
    redirect('Bahan_baku/showmore_detail/'.$id_user_rated);

    }
  }
function updaterate()
    {
    
   $this->load->model('Model_bahan_baku');
   $id = $this->input->post('idbb');


      $datak = $this->Model_bahan_baku->hitung($id);
    $datas = $this->Model_bahan_baku->bagi($id);
    if($datas->prices > 0){
       $dabs = $datas->prices/$datak;
    $dat = number_format($dabs,1);
        if($this->input->post('submit')){
     $data = array(
   'rating'=>$dat
  
   );
     echo "<script type='text/javascript'>
                     alert('Berhasil di update');</script>";
    $this->Model_bahan_baku->update_rate($id,$data);

     redirect('Bahan_baku/showmore_detail/'.$id);
    }
  }else{
      $data['query']  = $this->Model_bahan_baku->get_databahan($id);

      $id_user        = $this->session->userdata('id_user');
      $data['idm']    = $this->Model_bahan_baku->get_idm($id_user);

      //   echo '<pre>';
      //   print_r($data);
      //  echo '</pre>';

      $this->load->view('header');
      $this->load->view('penyedia-detail', $data);
      $this->load->view('footer');
    }
    
  }
    public function cari(){
      $this->load->model('Model_bahan_baku');
      $this->load->model('model_kategori');

      $kategori = $this->input->post('kategori');
      $search   = $this->input->post('search');

      $data['kategori']   = $this->model_kategori->get_by_id($kategori);
      $data['query']      = $this->Model_bahan_baku->search($search);

      $this->load->view('header');
      $this->load->view('penyedia-list',$data);
      $this->load->view('footer');
    }
 
}
?>
