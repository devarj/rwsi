<?php
function alink($href, $text, $class = '',$style='',$target='',$title='', $att=''){
	// if($class != ''){
		return "<a ".$att." style='".$style."' class='".$class."' href='".$href."' target='".$target."' title='".$title."'>".$text."</a>";	
	// }
	// else{
		// return "<a style='".$style."' href='".$href."'>".$text."</a>";	
	// }
}

function dateString($myDate,$format){
	if($format==1){ //date string
		return date_format(date_create($myDate),'M j, Y');
	}
	else if($format==2){//date string with time
		return date_format(date_create($myDate),'M j, Y g:i a');
	}
	else{//date string with time with day
		return date_format(date_create($myDate),'D, M j, Y g:i a');
	}	
}

function dateString2($myDate,$format){
	if($format=="d1"){
		return date_format(date_create($myDate),'D, M j, Y');
	}
}

function datePDF($myDate){

	return date_format(date_create($myDate),'MjY');
}

function alertMessage($text,$format){
	
	return "<div class='uk-width-1'><div class='uk-alert uk-alert-".$format."' data-uk-alert><a href='' class='uk-alert-close uk-close'></a><p>".$text."</p></div></div><br/>";
	
}

function debug($array, $die = 0){
	echo "<pre>";
	print_r($array);
	if($die == 1){
		die();
	}
}

function vis($value){
	return ($value == 0) ? 'none' : 'block';
}





function send_mail($to, $cc = '', $bcc = '', $subject,$msg) {
	 $api_key="key-5bf0bb36e35e344079212ed41aded6ed";/* Api Key got from https://mailgun.com/cp/my_account */
	 $domain ="mg.uniqly.net";/* Domain Name you given to Mailgun */
	 
	 $data = array();
	 
	$data['from'] = '88DB Mail Engine <do-not-reply@88db.com.ph>';
	$data['to'] = $to;
	$data['subject'] = $subject;
	$data['html'] = $msg;
	if($cc != ''){
		$data['cc'] = $cc;
	}
	if($bcc != ''){
		$data['bcc'] = $bcc;
	}
	 
	 $ch = curl_init();
	 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	 curl_setopt($ch, CURLOPT_USERPWD, 'api:'.$api_key);
	 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	 curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/'.$domain.'/messages');
	 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	 $result = curl_exec($ch);
	 curl_close($ch);
	 return $result;
}