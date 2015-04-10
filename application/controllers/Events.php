<?php
class Events extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('events_model');
        }

        public function nearme()
        {
                $data['events'] = $this->events_model->get_events();
				
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