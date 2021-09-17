<?php
	namespace Project\Controllers;
	use \Core\Controller;
    use Core\Model;
    use \Project\Models\Hello;
	
	class HelloController extends Controller
	{
		public function index() {
		    $hello=new Hello();
		    if($hello->checkDB()){die("No connection to Data Base!");};
			$this->title = 'Hello page!';
			return $this->render('hello/index');
		}

	}
