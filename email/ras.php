
<?
$file = "maillist.txt"; // файл, содержащий адреса

error_reporting(0); // запрещаем вывод сообщений о возможных ошибках

function test_mail($char) // функция, проверяющая реальность адреса
{
$flag = false;
if(eregi("^[_\.0-9a-z-]+@([0-9a-z][-0-9a-z\.]+)\.([a-z]{2,3}$)", $char)) $flag = true;
if ($flag) return true;
else return false;
}

$email = trim(strtolower($email)); // получаем введеный в
// форму адрес с
// символами в нижнем регистре

function copy_mail($char) // проверяем, есть ли такой адрес в базе
{
$file = "maillist.txt";
$list = file($file);
for ($i = 0; $i < sizeof ($list); $i++)
if ($char == trim($list[$i])) $flag = true;

if ($flag) return true;
else return false;
}

echo "<center>";

if (is_file($file)) // далие проверяем адрес вышеописаными функциями
{
$maillist = file($file);
if (!$email == '') {
if (test_mail($email)) {
if (!copy_mail($email))
{
$maillist[] = "\n$email";
print "E-mail: $email добавлен базу рассылки</center>";
}
else print "E-mail: $email уже есть в базе</center>";
}
else print "E-mail: $email не сушествует</center>";
}
else print "</center>";
}
else print "Не найден файл $file ! Пожалуйста <A HREF=\"mailto:$fromemail\">сообщите</a> мне о ошибке.</center>";
// выводи на екран форму с предложением подписки и отписки
echo "<br><center>Подписаться на рассылку<form method=\"post\" action=\"ras.php\" enctype=\"multipart/form-data\">";
echo "Введите mail:<input type=\"text\" name=\"email\" size=\"30\"><input type=\"submit\" name=\"submit\" value=\"подписаться\"></form></center>";

echo "<CENTER><br><br><form method=\"post\" action=\"ras.php\" enctype=\"multipart/form-data\">";
echo "Отписаться от рассылки<br>Введите mail:";
echo "<input type=\"text\" name=\"delmail\" size=\"15\"><input type=\"submit\" name=\"submit\" value=\"Отписаться\"></form></CENTER>";
// если пользователь решил отписаться - удаляем введеный адрес
$flag = false;
$fw = fopen($file, "w");
for ($i = 0; $i < sizeof ($maillist); $i++)
if (trim(strtolower($delmail)) == trim(strtolower($maillist[$i]))) {
if (!$delmail == '')
{
print "<center>$delmail удален из базы рассылки</center>";
$flag = true;
}
}
else fputs($fw, $maillist[$i]); // введеного адреса в базе нет
fclose($fw);
if (!$delmail == '')
if (!$flag) print "<center>$delmail не найден в базе рассылки</center>";
?>