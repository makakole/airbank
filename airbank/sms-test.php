<?php

$otp = "0123456789";

$otp = substr(str_shuffle($otp), 0, 4);

$message = "Welcome to AirBank! ".$otp." is your one time pin for your login";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8310",
  CURLOPT_URL => "http://196.11.240.224:8310/SendSmsService/services/SendSms",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:v2=\"http://www.huawei.com.cn/schema/common/v2_1\" xmlns:loc=\"http://www.csapi.org/schema/parlayx/sms/send/v2_2/local\">\r\n\r\n   <soapenv:Header>\r\n\r\n      <v2:RequestSOAPHeader>\r\n\r\n         <v2:spId>270110000648</v2:spId>\r\n\r\n         <v2:spPassword>becfd915954f7ff327c96968a533499f</v2:spPassword>\r\n\r\n         <v2:bundleID/>\r\n\r\n         <v2:serviceId/>\r\n\r\n         <v2:timeStamp>20181013124019</v2:timeStamp>\r\n\r\n         <v2:OA>tel:27783208650</v2:OA>\r\n\r\n         <v2:FA>tel:27783208650</v2:FA>\r\n\r\n      </v2:RequestSOAPHeader>\r\n\r\n   </soapenv:Header>\r\n\r\n   <soapenv:Body>\r\n\r\n      <loc:sendSms>\r\n\r\n         <loc:addresses>tel:27783208650</loc:addresses>\r\n\r\n         <loc:senderName>8393006881433</loc:senderName>\r\n\r\n         <loc:message>".$message."</loc:message>\r\n\r\n      </loc:sendSms>\r\n\r\n      <loc:receiptRequest>\r\n\r\n         <endpoint>http://10.204.55.244:8888/notifySmsDeliveryReceipt</endpoint>\r\n\r\n         <interfaceName>SmsNotification</interfaceName>\r\n\r\n         <correlator>12344</correlator>\r\n\r\n      </loc:receiptRequest>\r\n\r\n   </soapenv:Body>\r\n\r\n</soapenv:Envelope>",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: text/plain;charset=UTF-8",
    "Postman-Token: e3c6db68-965a-4ccb-b4ab-24f54da3af15",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



$num = "0783208650";
$num = substr($num, 1, 9);
echo $num;
?>