<?php
class Events extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->library('form_validation');
                $this->load->model('events_model');
				$this->output->enable_profiler(FALSE);
        }

        public function nearme()
        {
                $data['events'] = $this->events_model->get_events();
				if (isset($_SESSION['logged']) && $_SESSION['logged']) { $data['name'] = $_SESSION['name']; }
				$this->load->view('templates/header', $data);
				$this->load->view('events/index', $data);
        }
		
		public function discover()
        {
                $data['events'] = $this->events_model->get_events();
				
				$this->load->view('templates/header', $data);
				$this->load->view('events/index', $data);
        }
}
?>