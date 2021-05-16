<?

$subject = "Рассылка моего сайта"; // тема рассылки
$fromemail = "мое@мыло"; // ваш адрес (для ответов)
$file = "maillist.txt"; // список адресов подписчиков
$password = "secretpassword"; // ваш пароль для рассылки

if ($pass == $password) // если пароль ввели правильный
// то выводим форму с полями для ввода:
// адрес отправителя, текст письма, тело письма
// кнопку для отправления
// после нажатия на кнопку, передаем данные скрипту send.php
{
echo "<font size=\"-1\"><hr><form method=\"POST\" action=\"send.php\">";
echo "адрес отправителя<br><input type=\"text\" name=\"fromemail\" value=\"$fromemail\" size=\"25\"><br>";
echo "тема письма<br><input type=\"text\" name=\"subject\" value=\"$subject\" size=\"50\">";
echo "<br>текст письма:<br><textarea name=\"body\" rows=\"8\" cols=\"50\"></textarea>";
echo "<br><input type=\"submit\" value=\"Отправить сообщение\"></form></font>";
print "<i>В базе<b>". sizeof($maillist) ."</b> адресов</i><br><hr>";
for ($i = 0; $i < sizeof ($maillist); $i++) print $maillist[$i]. "<br>";
}
// если пароль неверный - просим ввести еще раз
else echo "<form method=\"POST\" action=\"ras.php\"><input type=\"password\" name=\"pass\" value=\"\"><input type=\"submit\" value=\"Управление\"></form>";

?>