<?php
class Onboarding extends CI_Controller {

        public function index()
        {
			$this->load->view('onboarding/signup');
        }
		
		public function setup()
		{
			$email = $this->input->post('email');
			$interest = $this->input->post('interest');
			$data['email'] = $email;
			$data['interest'] = $interest;
			$this->load->view('onboarding/slider', $data);
		}
		
		public function success()
		{
			$this->load->view('onboarding/success');
		}
}
?>