<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('events_model');
				$this->output->enable_profiler(FALSE);
        }

        public function nearme()
        {
                $data['events'] = $this->events_model->get_events();
				if (isset($_SESSION['logged'])) {
					$data['logged'] = true;
				}
				$this->load->view('home/index', $data);
        }
		
		public function discover()
        {
                $data['events'] = $this->events_model->get_events();
				$this->load->view('home/index', $data);
        }
}
?>