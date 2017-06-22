<?php
#amoCRM - begin
$true_phone = preg_replace('/[^0-9]/', '', $phone);
$utm_content = trim($_POST["utm_content"]);
if ($utm_content == "||") $utm_content = "";
$utm_content = urldecode($utm_content);
$utm_source = trim($_POST["utm_source"]);
if ($utm_source == "||") $utm_source = "";
$utm_source = urldecode($utm_source);
$utm_term = trim($_POST["utm_term"]);
if ($utm_term == "||") $utm_term = "";
$utm_term = urldecode($utm_term);
$utm_campaign = trim($_POST["utm_campaign"]);
if ($utm_campaign == "||") $utm_campaign = "";
$utm_campaign = urldecode($utm_campaign);

//$true_phone = $phone;
$utm_content = explode("|", $utm_content);
$utm_content_arr = Array();
foreach ($utm_content as $val){
	$key = mb_strstr($val,'_', true);
	$val_text = substr(mb_strstr($val,'_', false), 1);
	$utm_content_arr[$key] = $val_text;
}

switch ($order_type) {
case 1:
	$order_type = 141037;
	break;
case 2:
	$order_type = 141039;
	break;
case 3:
	$order_type = 141041;
	break;
case 4:
	$order_type = 141043;
	break;
case 5:
	$order_type = 141045;
	break;
case 6:
	$order_type = 141047;
	break;
case 7:
	$order_type = 141049;
	break;
case 8:
	$order_type = 141051;
	break;
case 9:
	$order_type = 141053;
	break;
case 10:
	$order_type = 141055;
	break;
case 11:
	$order_type = 141057;
	break;
case 12:
	$order_type = 141059;
	break;
case 13:
	$order_type = 141061;
	break;
}

$user=array(
  'USER_LOGIN'=>'tiunow@alcom55.ru', #Ваш логин (электронная почта)
  'USER_HASH'=>'c44552c259d15b075222cc292d6eeed7' #Хэш для доступа к API (смотрите в профиле пользователя)
);
 
$subdomain='lego55'; #Наш аккаунт - поддомен
 
#Формируем ссылку для запроса
$link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json';

$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($user));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE); #Получим HTTP-код ответа сервера
curl_close($curl); #Завершаем сеанс cURL

$code=(int)$code;
$errors=array(
  301=>'Moved permanently',
  400=>'Bad request 1',
  401=>'Unauthorized',
  403=>'Forbidden',
  404=>'Not found',
  500=>'Internal server error',
  502=>'Bad gateway',
  503=>'Service unavailable'
);
try
{
  #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
  if($code!=200 && $code!=204)
	throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
}
catch(Exception $E)
{
  //die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
}
 
/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response=json_decode($out,true);

#Проверка совпадения телефона!
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/list?query="'.$true_phone.'"';
$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
curl_close($curl);

$code=(int)$code;
$errors=array(
  301=>'Moved permanently',
  400=>'Bad request 2',
  401=>'Unauthorized',
  403=>'Forbidden',
  404=>'Not found',
  500=>'Internal server error',
  502=>'Bad gateway',
  503=>'Service unavailable'
);
try
{
  #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
  if($code!=200 && $code!=204)
	throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
}
catch(Exception $E)
{
  //die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
}
 
/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response=json_decode($out,true);
$Response=$Response['response'];
	$resp_test = $Response;
	//echo ('<div style="display:none"> <pre>');
	$orders_list = $resp_test['contacts'][0]['linked_leads_id'];
	//var_dump($orders_list);
	//var_dump ($Response);
	//echo ('</div> </pre>');
if (empty($Response)) {
	$copy = 0;
}
else
	$copy = 1;

#Конец проверки телефона!

#Создание сделки
if ($copy == 1){
	$text_copy = 'Повторный запрос'.PHP_EOL;
}
else
	$text_copy = '';

$lead_name = "Заявка с сайта";
$roistat=isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null;

										

$leads['request']['leads']['add']=array(
  array(
	'name'=>$lead_name,
	'status_id'=>15190267,
	'price'=>0,
	'responsible_user_id'=>1533619,
	'custom_fields'=>array(
	  array(
		#Нестандартное дополнительное поле "type", которое мы создали
		'id'=>63007,
		'values'=>array(
		  array(
			'value'=>$utm_content_arr["srct"]
		  )
		)
	  ),
	  array(
		"id"=> 64347,
		"values"=>  array(array("value"=> $roistat))
	  ),
	  array(
		#Нестандартное дополнительное поле "source", которое мы создали
		'id'=>63009,
		'values'=>array(
		  array(
			'value'=>$utm_content_arr["src"]
		  )
		)
	  ),
	  array(
		#Нестандартное дополнительное поле "device", которое мы создали
		'id'=>63011,
		'values'=>array(
		  array(
			'value'=>$utm_content_arr["dev"]
		  )
		)
	  ),
	  array(
		#Нестандартное дополнительное поле "Откуда", которое мы создали
		'id'=>62999,
		'values'=>array(
		  array(
			'value'=>$order_type
		  )
		)
	  ),
	  array(
		#Нестандартное дополнительное поле "utm_source", которое мы создали
		'id'=>63001,
		'values'=>array(
		  array(
			'value'=>$utm_source
		  )
		)
	  ),
	  array(
		#Нестандартное дополнительное поле "utm_campaign", которое мы создали
		'id'=>63003,
		'values'=>array(
		  array(
			'value'=>$utm_campaign
		  )
		)
	  ),
	  array(
		#Нестандартное дополнительное поле "utm_term", которое мы создали
		'id'=>63005,
		'values'=>array(
		  array(
			'value'=>$utm_term
		  )
		)
	  )
	)
  )
);
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';

$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($leads));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);

$code=(int)$code;
$errors=array(
  301=>'Moved permanently',
  400=>'Bad request 3',
  401=>'Unauthorized',
  403=>'Forbidden',
  404=>'Not found',
  500=>'Internal server error',
  502=>'Bad gateway',
  503=>'Service unavailable'
);
try
{
  #Если код ответа не равен 200 или 204 - возвращаем сообщение об ошибке
  if($code!=200 && $code!=204)
	throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undescribed error',$code);
}
catch(Exception $E)
{
  //die('Ошибка: '.$E->getMessage().PHP_EOL.'Код ошибки: '.$E->getCode());
}
 
/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$Response=json_decode($out,true);
$Response=$Response['response']['leads']['add'];
 
$order_id = $Response[0]['id'];
/*
foreach($Response as $v)
  if(is_array($v))
	$output.=$v['id'].PHP_EOL;
return $output;
*/
if ($name == ""){
	$name = "Клиент";
}
if ($copy == 0){
	#Создание контакта
	$contacts['request']['contacts']['add']=array(
	  array(
		'name'=>$name, #Имя контакта
		'linked_leads_id'=>array(
			$order_id
		),
		'custom_fields'=>array(
		  array(
			#Телефоны
			'id'=>58131, #Уникальный индентификатор заполняемого дополнительного поля
			'values'=>array(
			  array(
				'value'=>$true_phone,
				'enum'=>'MOB' #Мобильный
			  )
			)
		  ),
		  array(
			#E-mails
			'id'=>58133,
			'values'=>array(
			  array(
				'value'=>$email,
				'enum'=>'WORK', #Рабочий
			  )
			)
		  )
		)
	  )
	);

	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
	$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
	#Устанавливаем необходимые опции для сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
	curl_setopt($curl,CURLOPT_URL,$link);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($contacts));
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	 
	$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
}
else
{
	$orders_list = $resp_test['contacts'][0]["linked_leads_id"];
	$orders_list[] = $order_id;
	$contacts['request']['contacts']['update']=array(
	  array(
		'id'=>$resp_test['contacts'][0]['id'],
		'last_modified'=>time(),	
		'linked_leads_id'=> $orders_list
	  )
	);
	
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
	$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
	#Устанавливаем необходимые опции для сеанса cURL
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
	curl_setopt($curl,CURLOPT_URL,$link);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
	curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($contacts));
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
	curl_setopt($curl,CURLOPT_HEADER,false);
	curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	 
	$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
	$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
}	
# Создаем "примечание"
$notes['request']['notes']['add']=array(
  array(
	'element_id'=>$order_id,
	'element_type'=>2,
	'note_type'=>4,
	'text'=>$text_copy.$amo_message,
	'responsible_user_id'=>1533619,
  )
);
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/notes/set';
$curl=curl_init(); #Сохраняем дескриптор сеанса cURL
#Устанавливаем необходимые опции для сеанса cURL
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
curl_setopt($curl,CURLOPT_URL,$link);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($notes));
curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($curl,CURLOPT_HEADER,false);
curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt'); #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
 
$out=curl_exec($curl); #Инициируем запрос к API и сохраняем ответ в переменную
$code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
?>	