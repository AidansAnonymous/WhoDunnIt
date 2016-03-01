<?php
	class Company{
		private $name = "WhoDunnIt";
		private $address = "Glasgow";
		private $phoneNum = "07479399123";
		private $email = "email here";
		private $social_links = "Facebook, Twitter, Instagram";
		private $company = " ";
		private $companyInfo;

		public function getCompanyInfo($company){
			$companyInfo = array(
			"Name" => $this->name,
			"Address" => $this->address,
			"phone" => $this->phoneNum,
			"Contact" => $this->email,
			"Social" => $this->social_links
			);
			foreach ($companyInfo as $key => $value){
				$value = $value . " \n";
			}
			if ($company == "WhoDunnIt"){
				return implode(" ", $companyInfo);
			}
		}
	}