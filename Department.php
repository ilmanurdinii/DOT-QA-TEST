<?php
require_once('Company.php');

class Department extends Company {
	private static $name;
	public function __construct()
	{
		parent::__construct();
	}

	public static function setDepartmentName($department_name = '')
	{
		self::$name = $department_name;
	}

	public static function getDepartmentName()
	{
		return self::$name;
	}

}
Department::setDepartmentName('Quality Assurance');

/* End of file Department.php */
/* Location: Department.php */