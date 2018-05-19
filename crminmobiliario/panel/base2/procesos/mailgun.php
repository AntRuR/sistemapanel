<?php

define(DOMAIN, 'mg.crmsche.info');

define(MAILGUN_API, 'key-f2489986917779a4579f8bc2906ed96b');


function mg_send($to, $subject, $message) {

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	curl_setopt($ch, CURLOPT_USERPWD, 'api:'.MAILGUN_API);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

  $plain = strip_tags($message);

  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
  curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v2/'.DOMAIN.'/messages');
  curl_setopt($ch, CURLOPT_POSTFIELDS, [
		'from'    => 'support@crmsche.info',
		'to'      => $to,
		'subject' => $subject,
		'html'    => $message,
		'text'    => $plain
	]);

	$j    = json_decode(curl_exec($ch));

	$info = curl_getinfo($ch);

	prin($info);

	curl_close($ch);

	return $j;

}

mg_send('guilleprodiserv@gmail.com','tres Esta es la segunda prueba','tres Esta es la super prueba');