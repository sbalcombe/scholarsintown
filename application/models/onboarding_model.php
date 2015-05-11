<?php
class Onboarding_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }
		
		public function signup($email, $interest, $name, $affiliation, $fscholars)
		{
			$onboarding = "INSERT INTO onboarding (email, interest, name, affiliation) VALUES (?, ?, ?, ?)";
			$onboarding_query = $this->db->query($onboarding, array($email, $interest, $name, $affiliation));
			
			$favorites = "INSERT INTO onboarding_favorites (name) VALUES (?) ON DUPLICATE KEY UPDATE id=id";
			foreach ($fscholars as $fav) {
				$favorites_query = $this->db->query($favorites, $fav);
			}
			
			if ($onboarding_query && $favorites_query) {
				$onboarding_id = $this->db->select('id')->where('email', $email)->get('onboarding')->row()->id;
				$get_favorites = $this->db->where_in('name', $fscholars)->get('onboarding_favorites');
				foreach ($get_favorites->result() as $fav) {
					$link = "INSERT INTO onboarding_has_onboarding_favorites (onboarding_id, favorite_id) VALUES (?, ?)";
					$link_query = $this->db->query($link, array($onboarding_id, $fav->id));
				}
				
				return true;
			}
			
			return false;
			
		}
}
?>