<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
require 'vendor/autoload.php';

class Home_model extends CI_Model 
{
    public function get_random_advice()
    {
        return $this->get_advice();
    }     
    
    public function search_advice($search_item)
    {
        return $this->get_advice($search_item);
    }

    private function get_advice($search_item = '')
    {
        $uri = '';
        if (empty($search_item))
            $uri = 'https://api.adviceslip.com/advice';
        else
            $uri = "https://api.adviceslip.com/advice/search/{$search_item}";

        $client = new \GuzzleHttp\Client(['verify' => FALSE]);

        $response = $client->get($uri);
        $advice = json_decode($response->getBody(), TRUE);

        return $advice;
    }
}


/* End of file Home_model.php and path \application\models\Home_model.php */
