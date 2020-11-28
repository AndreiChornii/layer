<?php
try {
	include __DIR__ . '/../includes/autoload.php';
    include __DIR__ . '/../includes/PHPMailer/PHPMailerAutoload.php';
        
//        echo $_SERVER['REQUEST_METHOD'];
//        echo "<BR />";
        
	$route = ltrim(strtok($_SERVER['REQUEST_URI'], '?'), '/');
//        echo $route;

	$entryPoint = new \Ninja\EntryPoint($route, $_SERVER['REQUEST_METHOD'], new \Ijdb\IjdbRoutes());
	$entryPoint->run();
}
catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();

	include  __DIR__ . '/../templates/layout.html.php';
}
