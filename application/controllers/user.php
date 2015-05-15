<?php
class User extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->library('form_validation');
				$this->load->library('MailchimpWrapper');
                $this->load->model('scholar_model');
                $this->load->model('onboarding_model');
				$this->output->enable_profiler(false);
        }

        public function login()
		{
			//TODO: set flashes for errors
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
			if ($this->form_validation->run() == TRUE)
			{
				$_SESSION['logged'] = true;
			}
			else
			{
				$this->form_validation->set_message('login', 'Invalid email or password');
			}
			redirect('home');
		}
		
		public function logout()
		{
			session_destroy();
			redirect('home', 'refresh');
		}
		
		public function signup()
		{
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[45]|valid_email|is_unique[scholars.email]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('area_science', 'Area of Science', 'trim|required|max_length[45]');
			if ($this->form_validation->run() == TRUE)
			{
				$name = $this->input->post('first_name').$this->input->post('last_name');
				$affiliation = $this->input->post('affiliation');
				$email = $this->input->post('email');
				$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
				$area_science = $this->input->post('area_science');
				$this->scholar_model->signup($name, $affiliation, $email, $password, $area_science);
			}
			else
			{
				$this->form_validation->set_message('signup', 'Invalid form');
			}
			redirect('home');
		}
		
		public function onboarding()
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[45]|valid_email|is_unique[onboarding.email]');
			$this->form_validation->set_rules('interest', 'Interest', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('fname', 'First Name', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required|max_length[45]');
			$this->form_validation->set_rules('fscholars[]', 'Favorite Scholars', 'required');
			if ($this->form_validation->run() == TRUE)
			{
				$email = $this->input->post('email');
				$interest = $this->input->post('interest');
				$name = $this->input->post('fname').$this->input->post('lname');
				$affiliation = $this->input->post('affiliation');
				$fscholars = $this->input->post('fscholars');
				$response = $this->mailchimpwrapper->list_members_collection_post($email, "subscribed");
				
				if($this->onboarding_model->signup($email, $interest, $name, $affiliation, $fscholars)
					&& array_key_exists("id", $response)) {
					redirect('onboarding/success');
				}
				
				else {
					//TODO: Error page
				}
			}
			else
			{
				echo "Validation failed";
				$this->form_validation->set_message('onboarding', 'Invalid form');
			}
		}
		
		function check_database($password)
		{
			$username = $this->input->post('email');
			$result = $this->scholar_model->login($username, $password);

			if(isset($result) && !($result === false))
			{
				return true;
			}
			
			else
			{
				return false;
			}
		}
}
?>