<?php
class Scholar_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }
		
		public function login($email, $password)
		{
			$this->db->select('scholars')->where('email', $email)->where('password', $password)->limit(1);
			$query = $this->db->get();
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
}
?>