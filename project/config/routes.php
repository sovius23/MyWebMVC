<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'),
        new Route('', 'hello', 'index'),
        new Route('/calc/', 'calculator', 'calculate'),
	];
	
