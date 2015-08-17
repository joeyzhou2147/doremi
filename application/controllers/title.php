<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class title extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('title');
	}

    public function search(){
        $musicTitle = $this->input->post('musicTitle');
        $singer = $this->input->post('singer');
        if(isset($musicTitle)&&$musicTitle!=null){
            if(isset($singer)&&$singer!=null){
            //title singer is not null
                $id = $this->Music_model->activeGetIdByTitleSinger($musicTitle,$singer);
                $data['id'] = $id;
                $this->load->view('title', $data);
            }
            else{
            //title not null singer null
                $id = $this->Music_model->activeGetIdByTitle($musicTitle);
                $data['id'] = $id;
                $this->load->view('title', $data);
            }
        }else{
            if(isset($singer)&&$singer!=null){
            //title not null singer null
                $id = $this->Music_model->activeGetIdBySinger($singer);
                $data['id'] = $id;
                $this->load->view('title', $data);
            }
            else{
                redirect('/index');
            }
        }
    }
}
