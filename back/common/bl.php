<?php 
require_once'dal.php';
require_once "C:/xampp/htdocs/School/back/models/studentModels.php";
require_once "C:/xampp/htdocs/School/back/models/courseModels.php";

class BL{

function getAllStudents(){
$db = new DAL();	
$studentsArray=array();	


$allStudents=$db->executeStatement('SELECT * FROM school_students');
foreach($allStudents as $row){
	$students= new StudentModel ($row['student_id'], $row['student_name'], $row['student_phone'],$row['student_email'],$row['student_image']);
array_push($studentsArray,$students);
}
return $studentsArray;
}

function getAllCourses(){
$db = new DAL();	
$coursesArray=array();	

$allCourses=$db->executeStatement('SELECT * FROM school_courses');
foreach($allCourses as $row){
	$courses= new CourseModel($row['course_id'],$row['course_name'],$row['course_description'],$row['course_image']);
array_push($coursesArray,$courses);
}
return $coursesArray;
}
}

/*function Insert(){
  $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
	$title = $post['title'];
	$body = $post['body'];

	$database->query('INSERT INTO posts (title, body) VALUES(:title, :body)');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->execute();
	if($database->lastInsertId()){
		echo '<p>Post Added!</p>';
	}
}

$database->query('SELECT * FROM posts');
$rows = $database->resultset();
?>
<h1>Add Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..." /><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"></textarea><br /><br />
	<input type="submit" name="submit" value="Submit" />
</form>

<h1>Posts</h1>
<div>
<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p>
	</div>
<?php endforeach; ?>
</div>  
} 


?>

<h1>Posts</h1>
<div>
<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p>
	</div>
<?php endforeach; ?>
</div>

}*/
?>


















