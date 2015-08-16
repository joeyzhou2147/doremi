<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

    public function search(){
        $musicTitle = $this->input->post('musicTitle');
        $singer = $this->input->post('singer');
        if(isset($musicTitle)){
            if(isset($singer)){
            //title singer is not null
                $id = $this->Music_model->activeGetIdByTitleSinger($musicTitle,$singer);
            }
            else{
            //title not null singer null
                $id = $this->Music_model->activeGetIdByTitle($musicTitle);
            }
        }else{
            if(isset($singer)){
            //title not null singer null
                $id = $this->Music_model->activeGetIdBySinger($singer);
            }
            else{
                redirect('/index');
            }
        }
    }
}
