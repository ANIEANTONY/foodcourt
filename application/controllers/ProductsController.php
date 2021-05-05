  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsController extends CI_Controller {

	public function __construct()
	    {
	    parent::__construct();
	    $this->load->database();
        $this->load->model('ProductsModel');
		$this->load->model('CategoriesModel');            
        }   

	public function index()
	{
        $data['products'] = $this->ProductsModel->getProducts();
		$this->load->view('admin/header');
        $this->load->view('admin/products',$data);
        $this->load->view('admin/footer');
	}

	public function addProduct()
	{
		if($this->input->post('prod_submit'))
		      {
		        $name=$this->input->post('prod_name');
		        $cat=$this->input->post('prod_category');
            	$desc=$this->input->post('prod_desc');
            	$price=$this->input->post('prod_price');

                // $data = array(
				// 	'image' => $img,
				// 	'name' => $name,
				// 	'description' => $desc,
				// 	'price' => $price
				// );

				
				$config['upload_path']          = './product_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

				$this->load->library('upload', $config);
				//$this->upload->do_upload('prod_image');
				if ( ! $this->upload->do_upload('prod_image'))
                {
                        $error = array('error' => $this->upload->display_errors());

						$this->load->view('admin/header');
                        $this->load->view('admin/add_product', $error);
						$this->load->view('admin/footer');
                }
                else
                {
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$file_name = $upload_data['file_name'];
					//$create = date("Y-m-d H:i:s");

					$data = array(
						'image' => $file_name,
						'name' => $name,
						'description' => $desc,
						'price' => $price,
						'category'=> $cat,
						'created'=> date("Y-m-d H:i:s")
					);

                    $this->ProductsModel->addProduct($data);

					$data['products'] = $this->ProductsModel->getProducts();					
					$this->load->view('admin/header');
					$this->load->view('admin/products',$data);
					$this->load->view('admin/footer');    
					//$data = array('upload_data' => $this->upload->data());

                        //$this->load->view('upload_success', $data);
                }
				
            // $this->ProductsModel->addProduct($data);
			// return('ProductsController/');
            
          }
          else
          {
			$data['category'] = $this->CategoriesModel->getCategories();
            $this->load->view('admin/header');
        	$this->load->view('admin/add_product', $data);
        	$this->load->view('admin/footer');
          }         
	}

	public function editProduct($id)
	{
		if($this->input->post('prod_submit'))
		      {
		        $name=$this->input->post('prod_name');
            	$desc=$this->input->post('prod_desc');
            	$price=$this->input->post('prod_price');
				$cat=$this->input->post('prod_category');

				$config['upload_path']          = './product_images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 300;
				$config['overwrite'] = TRUE;

				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('prod_image'))
                {
                        $error = array('error' => $this->upload->display_errors());

						$this->load->view('admin/header');
                        $this->load->view('admin/edit_product', $error);
						$this->load->view('admin/footer');
                }
                else
                {
					$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
					$file_name = $upload_data['file_name'];

					$data = array(
						'image' => $file_name,
						'name' => $name,
						'description' => $desc,
						'price' => $price,
						'category'=> $cat,
						'modified' => date("Y-m-d H:i:s")
					);

                    $this->ProductsModel->editProduct($data,$id);
					
					
					$data['products'] = $this->ProductsModel->getProducts();					
					$this->load->view('admin/header');
					$this->load->view('admin/products',$data);
					$this->load->view('admin/footer');    
					
                }            
            
          }
          else
          {
		
			//$row = $this->ProductsModel->getProduct($id);
			$data['category'] = $this->CategoriesModel->getCategories();
			$data['product'] = $this->ProductsModel->getProduct($id);			
            $this->load->view('admin/header');
        	$this->load->view('admin/edit_product',$data);
        	$this->load->view('admin/footer');   
		  }    
	}

	public function deleteProduct($prodid)
	{
		$this->ProductsModel->deleteProduct($prodid);
		$data['products'] = $this->ProductsModel->getProducts();
		$this->load->view('admin/header');
        $this->load->view('admin/products',$data);
        $this->load->view('admin/footer');
	}
}