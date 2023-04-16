<?php

	function get($target){
		if(empty($_POST[$target])){
			return "";
		}
		return $_POST[$target];
	}
	$name = get("name") ;
	
	$email = get("email");
	$username = get("username");
	$pass = get("password");
	
	// open file
	$people_json = file_get_contents('text.json');
	$decoded_json = json_decode($people_json, true);
	
	function check($target, $type){
		global $decoded_json,$username;
		$customers = $decoded_json['users'];
		foreach($customers as $k => $v){
			if($v[$type]==$target){
				if($type=="password"&&$v["username"]==$username){
					return true;
				}
				return false;
			}
	   }
	   return false;
		
	}

	function signup($decoded_json, $username){
	   if(check($username, "username")){return header("location:indexhtml.php?message=$username already exsist&url=sign.php");}
	   else{
		   global $pass, $email;
		   $arrne['name'] = "test";$arrne['email']=$email;$arrne['username']=$username;$arrne['password']=$pass;
		   array_push( $decoded_json['users'], $arrne );
		   $str = json_encode($decoded_json);
		   fwrite(fopen("text.json","w"), $str);
		   return header("location:sign.php");
	   }
	   
	}
	
	if($_GET['id']=='1'){
		signup($decoded_json, $username);
		
	}
	else if($_GET['id']=='0'){
		if(check($pass,"password")){
			echo "signed in";
		}
		else{
			header("location:sign.php?message=Wrong password or username");
		}
	}

 
 
?>