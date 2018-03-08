<?php
// https://www.google.com/settings/security/lesssecureapps
error_reporting(E_ALL);
ini_set('display_errors', '1');
set_time_limit(0);
ini_set('memory_limit', '-1');


require_once 'lib/lib/swift_required.php';

$transport = Swift_SmtpTransport::newInstance('email.entel.pe', 25, 'tls')
// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
    // ->setUsername('eliott.marcelo@gmail.com') // Your Gmail Username // sramosl saul.ramos@entel.pe   saul.ramos@Nextel.Com.PE    sramosl@entelperu.net
    // ->setPassword('nirvanahero25'); // Your Gmail Password

 ->setUsername('externo.emarcelos')
// ->setUsername('hrcaceresf')
    ->setPassword('Entel2018*');

     //->setUsername('jfukusaki') // Your Gmail Username // sramosl saul.ramos@entel.pe   saul.ramos@Nextel.Com.PE    sramosl@entelperu.net
    // ->setPassword('Nextel95*'); // Your Gmail Password
    // ->setUsername('hrcaceresf') // Your Gmail Username // sramosl saul.ramos@entel.pe   saul.ramos@Nextel.Com.PE    sramosl@entelperu.net
    // ->setPassword('Entel2017'); // Your Gmail Password

$transport->setLocalDomain('[127.0.0.1]');
// Mailer
$mailer = Swift_Mailer::newInstance($transport);


$msj='';



$msj.="";


// Create a message
$message = Swift_Message::newInstance('Mensaje de Prueba')
// ->setFrom=('eliott.marcelo@gmail.com')
// ->setTo=('eliott.marcelo@gmail.com','')
// ->setBody('eliott.marcelo@gmail.com','text/html');
    // ->setFrom(array('atencion.empresas@entel.pe' => 'GRUPO MAILs')) // can be $_POST['email'] etc...
      // ->setFrom(array('comunicaciones.empresas@entel.pe' => 'MAIL TESTING')) // can be $_POST['email'] etc...

->setFrom(array('comunicaciones.empresas@entel.pe' => 'MAIL TESTING')) // can be $_POST['email'] etc...

    //->setTo(array('omar.rufasto@entel.pe' => 'Receiver Name')) // your email / multiple supported.
  	// ->setTo(array('Laura.moscol@entel.pe' => 'Receiver Name')) // your email / multiple supported.
      // ->setTo(array('sheylizmin@gmail.com' => 'Receiver Name')) // your email / multiple supported.
      // ->setTo(array('jhordanhe@gmail.com' => 'Receiver Name')) // your email / multiple supported.
      // ->setTo(array('jarumide@gmail.com' => 'Receiver Name')) // your email / multiple supported.
    // ->setTo(array('operaciones.soportedepromociones@entel.pe' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.
    // ->setTo(array('eliott.marcelo@gmail.com' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.
    ->setTo(array('minutos@entel.pe' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.
      // ->setTo(array('perezf3007@gmail.com' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.
      // ->setTo(array('kqh180993@gmail.com' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.
      // ->setTo(array('cristhiand26@gmail.com' => 'MENSJAE DE PRUEBA')) // your email / multiple supported.

      // ->setTo(array('operaciones.bases.diarias@entel.pe' => 'MENSJAE DE PRUEBA')) // your email / multiple
      // ->setTo(array('operaciones.soportedepromociones@entel.pe' => 'MENSJAE DE PRUEBA')) // your email / multiple
    // ->setTo(array('Laura.moscol@entel.pe' => 'MENSAJE DE PRUEBA')) // your email / multiple supported.

	// ->attach(Swift_Attachment::fromPath('http://14.240.112.89/envio_correo/template/template7.html'));
//->attach('http://14.240.112.89/envio_correo.rar');
   ->setBody(file_get_contents('http://14.240.112.89/mail_test/mail_cobranza/mail1/index.html'),'text/html');
      // ->setBody(file_get_contents('http://14.240.112.89/test/news/index_entel.html'),'text/html');

    // ->setBody($msj,'text/html');

// Send the message
if ($mailer->send($message)) {
    echo 'Mail sent successfully.';
} else {
    print_r($mailer);
    echo 'I am sure, your configuration are not correct. :(';
}


?>
