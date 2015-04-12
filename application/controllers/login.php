<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->helper('url');
                $this->load->model('scholar_model');
				$this->output->enable_profiler(false);
        }

        public function index()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|valid_email|xss_clean|callback_check_database');
 
			redirect('events', 'refresh');
		}
		
		public function logout()
		{
			session_destroy();
			redirect('events', 'refresh');
		}
		
		function check_database($password)
		{
			$username = $this->input->post('email');
			$result = $this->user->login($username, $password);

			if($result)
			{
				if(!empty($result))
				{
					$scholar = array(
						'id' => $result->id,
						'email' => $result->email,
						'name' => $result->full_name,
						'affiliation' => $result->affiliation,
						'area_science' => $result->area_science,
						'logged' => true
					);
					
					$_SESSION = $scholar;
					return true;
				}
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Invalid email or password');
				return false;
			}
		}
}
?>