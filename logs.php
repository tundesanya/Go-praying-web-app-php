<?php
$con = mysqli_connect('localhost', 'root', '', 'gopraying');
$user_check_query = "SELECT * FROM logs ORDER by id DESC";
$result1 = mysqli_query($con, $user_check_query);
while ($extract = mysqli_fetch_array($result1)) {
	echo "<span class='uname'>" . $extract['username'] . "</span> : <span class='msg'>" . $extract['msg'] . "</span><br>";
}

?>