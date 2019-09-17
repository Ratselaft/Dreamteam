<? php
function Login(){
	if (empty($_POST['username'])){
		echo "username is required";
	}
}
?>