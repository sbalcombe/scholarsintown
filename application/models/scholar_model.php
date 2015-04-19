<?php
class Scholar_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }
		
		public function login($email, $password)
		{
			$sql = "SELECT * FROM scholars WHERE email = ?";
			$result = $this->db->query($sql, $email);
			if ($result->num_rows() > 0)
			{
				foreach ($result->result() as $row)
				{
					if (password_verify($password, $row->password))
					{
						return $row;
					}
				}
			}
			return false;
		}
		
		public function signup($name, $affiliation, $email, $password, $area_science)
		{
			$sql = "INSERT INTO scholars (full_name, affiliation, email, password, area_science) VALUES (?, ?, ?, ?, ?)";
			$query = $this->db->query($sql, array($name, $affiliation, $email, $password, $area_science));
		}
}
?>