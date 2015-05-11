<?php
class Test extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('Scraper');
				$this->output->enable_profiler(TRUE);
        }

        public function index()
        {
			echo $this->scraper->scrape_events(array('Scraper_KS'));
        }
}
?>