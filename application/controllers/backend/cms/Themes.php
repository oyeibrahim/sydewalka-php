<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends CI_Controller {
 	
 	public function __construct()
 	{
 		parent::__construct();

 		if (!$this->session->userdata('isAdmin')) 
        	redirect('logout');

		if (!$this->session->userdata('isLogin') 
			&& !$this->session->userdata('isAdmin'))
			redirect('admin');

 		$this->load->model(array(
 			'backend/cms/article_model',
 			'backend/cms/category_model',
 			'backend/cms/language_model',

 		));

 	}

 	public function index()
 	{
 		$data['title']  = "Theme Setting";

 		$this->form_validation->set_rules('menu_bg_color','Menu Background Color','required');
 		$this->form_validation->set_rules('menu_font_color','Menu Font Color','required');
 		$this->form_validation->set_rules('footer_bg_color','Footer Background Color','required');
 		$this->form_validation->set_rules('footer_font_color','Footer Font Color','required');
 		$this->form_validation->set_rules('btn_bg_color','Button Background Color','required');
 		$this->form_validation->set_rules('btn_font_color','Button Font Color','required');
 		$this->form_validation->set_rules('theme_color','Theme Color','required');
 		$this->form_validation->set_rules('newslatter_bg','Newslatter Bg Color','required');
 		$this->form_validation->set_rules('newslatter_font','Newslatter Font Color','required');

 		if($this->form_validation->run()){

 			$urlLink = "";

 			$config = [
	            'upload_path'   	=> 'upload/themes/',
	            'allowed_types' 	=> 'png|jpg|jpeg',
	            'overwrite'     	=> false,
	            'maintain_ratio' 	=> true,
	            'encrypt_name'  	=> true,
	            'remove_spaces' 	=> true,
	            'file_ext_tolower' 	=> true
	        ];

	        $this->load->library('upload');
	        $this->upload->initialize($config);

	        if( ! $this->upload->do_upload('newslatter_img'))
	    	{
	            $this->session->set_flashdata('exception',$this->upload->display_errors());
	        }
	        else
	        {
	            $data = $this->upload->data();  
	            $urlLink = $config['upload_path'].$data['file_name'];

	        }

	        $jsondata = array(

	        	'menu_bg_color'		=> $this->input->post('menu_bg_color'),
	        	'menu_font_color'	=> $this->input->post('menu_font_color'),
	        	'footer_bg_color'	=> $this->input->post('footer_bg_color'),
	        	'footer_font_color'	=> $this->input->post('footer_font_color'),
	        	'btn_bg_color'		=> $this->input->post('btn_bg_color'),
	        	'btn_font_color'	=> $this->input->post('btn_font_color'),
	        	'theme_color'		=> $this->input->post('theme_color'),
	        	'newslatter_bg'		=> $this->input->post('newslatter_bg'),
	        	'newslatter_font'	=> $this->input->post('newslatter_font'),
	        	'newslatter_img'	=> $urlLink!=""?$urlLink:"assets/website/img/newslatter-bg.jpg"

	        );

 			$updatedata = json_encode($jsondata);

 			$this->db->set('settings',$updatedata)->update('dbt_theme');

 			$this->session->set_flashdata('message','Update Successfully!');
 		}

 		$data['theme']   = $this->db->select('*')->from('dbt_theme')->where('status', 1)->get()->row();

 		$data['content'] = $this->load->view("backend/article/theme_setting", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
 	}

}