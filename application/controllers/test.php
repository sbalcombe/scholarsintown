<?php
class Test extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('Scraper');
				$this->load->library('MailchimpWrapper');
				$this->output->enable_profiler(TRUE);
        }

        public function index()
        {
			echo var_dump($this->mailchimpwrapper->list_members_collection_post("fatboy1salim@gmail.com", "subscribed"));
        }
}
?>