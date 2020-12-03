<?php

class Controller_Products extends Controller
{

	function action_index()
	{
		$this->view->generate('products_view.php', 'template_view.php');
	}
}
