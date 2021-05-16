<?php
 $header.=('Subject: Subject');
 $text =('Body');//Тело письма
 $size_msg = 14;
 // начальные конфиги!
 
 
 
 
function get_data($smtp_conn)
{
  $data="";
  while($str = fgets($smtp_conn,515))
  {
    $data .= $str;
    if(substr($str,3,1) == " ") { break; }
  }
  return $data;
}
 $smtp_conn = fsockopen("smtp.mail.ru", 25);
 
 
  fputs($smtp_conn,"EHLO SERVER\r\n");
  $data = get_data($smtp_conn);
 
   
  fputs($smtp_conn,"AUTH LOGIN\r\n");
  $data = get_data($smtp_conn);
 
 
  fputs($smtp_conn,base64_encode("*****@mail.ru")."\r\n");
  $data = get_data($smtp_conn);
 
  fputs($smtp_conn,base64_encode("*******")."\r\n");// Сюда пароль
  $data = get_data($smtp_conn);
 
 
 
  $size_msg=strlen($header."\r\n".$text);
 
  fputs($smtp_conn,"MAIL FROM:<*****@mail.ru> SIZE=".$size_msg."\r\n");//отправитель
  $data = get_data($smtp_conn);
 
   
  fputs($smtp_conn,"RCPT TO:<****@rma-d.ru>\r\n");//получатель
  $data = get_data($smtp_conn);
 
 
  fputs($smtp_conn,"DATA\r\n");
  $data = get_data($smtp_conn);
 
   
   
 
  fputs($smtp_conn,$header."\r\n".$text."\r\n.\r\n");
  $data = get_data($smtp_conn);
 
  fputs($smtp_conn,"QUIT\r\n");
  $data = get_data($smtp_conn);
 
  $data = get_data($smtp_conn);
  print "$data";
 
?>