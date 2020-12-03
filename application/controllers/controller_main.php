<?php
class Controller_Main extends Controller
{
	public $sqlQuiries;
	function __construct()
	{
		$this->sqlQuiries = $GLOBALS['sqlQuiries'];
		$this->model = new Model_Main();
		$this->view = new View();
	}

	function action_index()
	{	
		$data = $this->model->get_data_main($this->sqlQuiries ['main']);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}

	function action_women()
	{	
		$data = $this->model->get_data_main($this->sqlQuiries['women']);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}

	function action_men()
	{	
		$data = $this->model->get_data_main($this->sqlQuiries['men']);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}

	function action_children()
	{	
		$data = $this->model->get_data_main($this->sqlQuiries['children']);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}

	function action_accessories()
	{	
		$data = $this->model->get_data_main($this->sqlQuiries['accessories']);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}