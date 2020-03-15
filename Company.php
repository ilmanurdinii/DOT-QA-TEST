<?php
class Company {

	private static $name;

	public function __construct() {}

	public static function setCompanyName($company_name= '')
	{
		self::$name = $company_name;
	}

	public static function getCompanyName()
	{
		return self::$name;
	}

}

Company::setCompanyName('PT Digdaya Olah Teknologi');

/* End of file Company.php */
/* Location: ./Company.php */