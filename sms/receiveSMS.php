<?php


   $responses = $_POST;


	foreach ($responses as $key=> $value)
	{
	   //getting the various fields of the responses
	   //var_dump($value);
		 $messageId = $value->id;
		 $status = $value->status;
		 $surveyAnswer = $value->text;
		 $sms =$value->sms;
		 $sender = $value->phone;
		 $timeReceived = $value->time;
		 $responseType = $value->event;

		 if ($responseType = 'mo_sms') {
		 	# save into the database

	 	 $sql = "INSERT INTO responses (id,sender,message) VALUES($sender,$message)";
	 	 $result = mysql_query($sql);

		 	// if (mysql_num_rows($result) > 0) {
		 	// 	# code...
		 	// }
		 }
	}


?>
