<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

/**
 * CodeIgniter HN API Class
 *
 * Work with remote servers via cURL much easier than using the native PHP bindings.
 *
 * @package        	CodeIgniter
 * @subpackage    	Libraries
 * @category    	Libraries
 * @author        	Tapha Ngum
 * @license         http://opensource.org/licenses/MIT
 * @link			https://github.com/Tapha/codeigniter-hn-api
 */

// Load Guzzle
use GuzzleHttp\Client;

class Hn_api {

	/**
	 * base api
	 *
	 * @var string
	 **/
	 
	protected $base_api = "https://hacker-news.firebaseio.com/v0/";
	
	/**
	 * after api
	 *
	 * after api item or username string.
	 *
	 * @var string
	 **/
	 
	protected $after_item = ".json?print=pretty";
	
	//Constructor
	
	public function __construct()
     {
                
     }	   
	
	/**Items**/
	
	/**
	 * Get Item
	 *
	 * The item's unique id. Required.
	 *
	 * @return JSON
	 * @author Tapha
	 **/	 	 

    public function get_item($item_id = NULL)
    {
    	$client = new Client();
    	$url_string = $this->base_api."/item/".$item_id.$this->after_item;
    	$response = $client->get($url_string);
    	return $response;
    }
    
    /**
	 * Item Deleted
	 *
	 * Check if item is deleted.
	 *
	 * @return BOOL
	 * @author Tapha
	 **/	 	 

    public function item_deleted($item_id = NULL)
    {
    	$client = new Client();
    	$url_string = $this->base_api."/deleted/".$item_id.$this->after_item;
    	$response = $client->get($url_string);
    	return $response;
    }

}

/* End of file Hn_api.php */