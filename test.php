<?php
//define( 'ABSPATH', dirname(__FILE__) . '/' );
	//require_once( ABSPATH . 'User.php' );
	//require_once( ABSPATH . 'course.php' );
include('User.php');
include('course.php');
	//require "User.php";
	//require "course.php";
	$user=new User();
	$course=new Course();
	$courses=$course->get_course("2");
	print_r($courses);

	//print_r($course);
	//$response=$course->modules(2);
	//var_dump($response);
	//echo $response->name;
//echo $response->id;
	// foreach($response as $item)
	// {
	// 	echo $item->name."<br>";
	// }

	//$response=$course->modules(2);
	//print_r($response);


	//$response=$course->create_course(1,"ruby","ruby","ruby");
	//print_r($response);
	//echo $response["id"];


	
	//$response=$user->create_user(1,"babinasdasdas","babinasdasdas","babinasdasdas$");
	//print_r($response);
	//echo $response["id"];

	//$response=$user->update_user(9,"anand");
	//print_r($response);
	//echo $response["id"];

	//$response=$user->delete_user(1,9);
	//print_r($response);
	//echo $response["id"];

	//$courses=$user->get_course(2);
	//print_r($courses);

?>
<?php //get_footer(); ?>		