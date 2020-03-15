<?php
require_once('Department.php');
class Employee extends Department {

	private $name;
	private $title;
	private $salary;

	public function __construct()
	{
		parent::__construct();
	}

	public function setEmployeeName($employee_name = '')
	{
		$this->name = $employee_name;
	}

	/*additional getter function to return employee name*/
	public function getEmployeeName()
	{
		return $this->name;
	}

	/*additional setter function to set employee title*/

	public function setEmployeeTitle($employee_title='')
	{
		$this->title = $employee_title;
	}

	public function getEmployeeTitle()
	{
		return $this->title;
	}

	/*additional setter and getter function for employee salary*/
	/*let's assume that salary set here is daily salary*/

	public function setEmployeeSalary($employee_salary='')
	{
		if (is_numeric($employee_salary)) {
			$this->salary = $employee_salary;
		} else {
			return 'You have entered wrong number for amount of salary';	
		}
	}

	public function getEmployeeSalary()
	{
		return $this->salary;
	}

	public function getEmployeeMonthlySalary($day='1')
	{
		if (is_numeric($day)) {
			return $day * $this->getEmployeeSalary();
		} else {
			return 'You have entered wrong number for amount of day';
		}
	}

	public function getEmployeeProfile()
	{
		return array(
			'Company' => parent::getCompanyName(),
			'Department' => parent::getDepartmentName(),
			'Name' =>$this->getEmployeeName(),
			'Title' => $this->getEmployeeTitle(),
			'Salary' => number_format($this->getEmployeeSalary(),2,',','.'),
			'Monthly Salary' => number_format($this->getEmployeeMonthlySalary(22),2,',','.')
		);
	}


}

/*unit testing*/

$employee_instance = new Employee();
$employee_instance->setEmployeeName('Ilma Nurdini Mutiara Rohmatillah');
$employee_instance->setEmployeeTitle('Ms. ');
$employee_instance->setEmployeeSalary(120000);

echo json_encode($employee_instance->getEmployeeProfile());


/* End of file Employee.php */
/* Location: Employee.php */