<?php 
        // public function questions(){
		//$fields = Input::get();

		//$recipients = Input::get('recipients');
        //$message = Input::get('message');
        //$respLowercase = preg_replace('/\s+/', '', $responses);
		// $responsetype = strtolower ($respLowercase);

		$recipients = isset($_POST['recipients']);
		$question = isset($_POST['question']);

		echo $question;

		exit();

		// $sql = "INSERT INTO questions(id,recipients,question) VALUES($recipients,$message)";

		// $result = mysql_query($sql);

		// if (mysql_num_rows($result > 0)) {
			# code...

				$messageTxt = $message;

			    $smsURL = "https://api.textit.in/api/v1/sms.json";


			    $noSpaceNumbers = preg_replace('/\s+/', '', $recipients);

			    $numbers = explode(",", $noSpaceNumbers);
		         
		        $ch = curl_init();

		         foreach ($numbers as $number) {
		         	# code...

			        $parameters = array(
			    		'phone' => $number,
			    		'text' =>  $messageTxt
			    	);
		            

				curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				  'Authorization: Token ad47cce6dac9db54bb3837da89b5c8ffd10eeb8b',
				));

			    curl_setopt($ch, CURLOPT_URL, $smsURL);
			   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			    curl_setopt($ch, CURLOPT_POST, 1);
			    curl_setopt($ch, CURLOPT_HEADER, 1);
			    
			    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
			    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			    $res = curl_exec($ch);
		     }


	        if ($res != "") {

		    	header("Location: sendSuccess.php");
		    }else{
	           echo "<h2>Message(s) Not Sent</h2>";
		    }

	   //}

		// }else{

		// 	echo "Unable to save recipinets and questions";
		// 	exit();

		// }
		


?>