<?php
	namespace Core;
	
	class Controller
	{
		protected $layout = 'main';
		
		protected function render($view, $data = []) {
			return new Page($this->layout, $this->title, $view, $data);
		}
	}
