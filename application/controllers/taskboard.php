<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taskboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
            $id = 1;
            $this->load->model('Story');

            $data['stories'] = $this->Story->get_stories($id);

            $this->load->view('taskboard',$data);

	}
}
