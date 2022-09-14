<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('home_model');
    }

    public function index()
    {
        $result = $this->home_model->get_random_advice();

        // if (isset($result['slips']))
        //     print_r($result['slips'][0]['advice']);
        // echo $result['slip']['advice'];
        // echo "<br>";
        // die();

        $data['advice'] = $result['slip']['advice'];
        
        $this->load->view('home', $data);
    }

    public function search()
    {
        $searchItem = $this->input->get_post('search');
        $result = $this->home_model->search_advice($searchItem);

        if (isset($result['slips']))
        {
            $data['slips'] = $result['slips'];
            $this->load->view('home', $data);
        }
        else 
        {
            $this->index();
        }
    }
}

/* End of file Home.php and path \application\controllers\Home.php */
