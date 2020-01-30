<?php
if(isset($_POST['submit'])){
	
	echo 'ID - '<div class='$POST['id']'.<br></div>;
	echo 'USERNAME - '<div class='$POST['username']'.<br></div>;
	echo 'AGE - '<div class='$POST['age']'.<br></div>;
	echo 'CONTACT - '<div class='$POST['contact']'.<br></div>;
	echo 'EMAIL - '<div class='$POST['email']'.<br></div>;
}
else{
    echo "welcome guest!!!";
}