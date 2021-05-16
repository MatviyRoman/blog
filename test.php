<?php
$website_title = '/ PAGE test';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<main class="main">
    <div class="container">
        <div class="box block">
            <?php

            $number = 12; //Integer
            $num = 4.6; //float
            $res = $number + $num;
            echo 'result: ' . $res . '<br>';
            $res = $number - $num;
            echo 'result: ' . $res . '<br>';
            $res = $number * $num;
            echo 'result: ' . $res . '<br>';
            $res = $number / $num;
            echo 'result: ' . $res . '<br>';
            $res = $number % $num;
            echo 'result: ' . $res . '<br>';

            $bool = true; //1
            //$bool = false; //empty

            $number += 10;
            echo $number . '<br>';
            $number++;
            echo $number . '<br>';
            $number--;
            echo $number . '<br>';

            echo 'PHP VERSION: ' . PHP_VERSION . '<br>';
            echo defined("PI") . '<br>'; //false //empty
            define("PI", 3.14);
            echo defined("PI") . '<br>'; //true //1
            echo PI . '<br>';



            // echo $_SERVER['UNIQUE_ID'] . '<br>';    //XnRyDcCoAQgAACXAaGsAAAA-
            //echo HTTP_HOST . '<br>';    //localhost
            //echo HTTP_CONNECTION . '<br>';    //keep-alive
            //echo HTTP_UPGRADE_INSECURE_REQUESTS . '<br>'; //1
            //echo HTTP_DNT . '<br>';    //1
            //echo HTTP_USER_AGENT . '<br>';    //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 //(KHTML, like Gecko) Chrome/81.0.4044.62 Safari/537.36
            //echo HTTP_ACCEPT . '<br>'; ////text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/s//igned-exchange;v=b3;q=0.9
            //echo HTTP_SEC_FETCH_SITE . '<br>';    //same-origin
            //echo HTTP_SEC_FETCH_MODE . '<br>';    //navigate
            //echo HTTP_SEC_FETCH_USER . '<br>';    //?1
            //echo HTTP_SEC_FETCH_DEST . '<br>';    //document
            //echo HTTP_REFERER . '<br>';    //http://localhost/MAMP/
            //echo HTTP_ACCEPT_ENCODING . '<br>';    //gzip, deflate, br
            //echo HTTP_ACCEPT_LANGUAGE . '<br>';    //uk-UA,uk;q=0.9,en-US;q=0.8,en;q=0.7,da;q=0.6
            //echo HTTP_COOKIE . '<br>';    //SQLiteManager_currentLangue=2; //PHPSESSID=5081198cbed735ea5f848da51f78bd32
            //echo PATH . '<br>';    ////C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\//;C:\WINDOWS\System32\OpenSSH\;D:\Roman\Programs\Git\cmd;C:\Program //Files\nodejs\;C:\WINDOWS\system32\config\systemprofile\AppData\Local\Microsoft\WindowsApps
            //echo SystemRoot . '<br>';    //C:\WINDOWS
            //echo COMSPEC . '<br>';    //C:\WINDOWS\system32\cmd.exe
            //echo PATHEXT . '<br>';    //.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
            //echo WINDIR . '<br>';    //C:\WINDOWS
            //echo SERVER_SIGNATURE . '<br>';    //no value
            //echo SERVER_SOFTWARE . '<br>';    //Apache
            //echo SERVER_NAME . '<br>';    //localhost
            //echo SERVER_ADDR . '<br>';    //127.0.0.1
            //echo SERVER_PORT . '<br>';    //80
            //echo REMOTE_HOST . '<br>';    //na1r.services.adobe.com
            //echo REMOTE_ADDR . '<br>';    //127.0.0.1
            //echo DOCUMENT_ROOT . '<br>';    //D:/localhost/MAMP/htdocs
            //echo SERVER_ADMIN . '<br>';    //you@example.com
            //echo SCRIPT_FILENAME . '<br>';    //C:/Users/Public/Documents/Appsolute/MAMPPRO/mamp/index.php
            //echo REMOTE_PORT . '<br>';    //52158
            //echo GATEWAY_INTERFACE . '<br>';    //CGI/1.1
            //echo SERVER_PROTOCOL . '<br>';    //HTTP/1.1
            //echo REQUEST_METHOD . '<br>';    //GET
            //echo QUERY_STRING . '<br>';    //language=English&page=phpinfo
            //echo REQUEST_URI . '<br>';    ///MAMP/index.php?language=English&page=phpinfo
            //echo SCRIPT_NAME . '<br>'; //	/MAMP/index.php


            echo $_REQUEST['language'] . '<br>';    //English
            echo $_REQUEST['page'] . '<br>';    //phpinfo
            echo $_REQUEST['SQLiteManager_currentLangue'] . '<br>';    //2
            echo $_REQUEST['PHPSESSID'] . '<br>';    //5081198cbed735ea5f848da51f78bd32
            echo $_GET['language'] . '<br>';    //English
            echo $_GET['page'] . '<br>';    //phpinfo
            echo $_COOKIE['SQLiteManager_currentLangue'] . '<br>';    //2
            echo $_COOKIE['PHPSESSID'] . '<br>';    //5081198cbed735ea5f848da51f78bd32
            echo $_SERVER['UNIQUE_ID'] . '<br>'; //XnRyDcCoAQgAACXAaGsAAAA-
            echo $_SERVER['HTTP_HOST'] . '<br>'; //localhost
            echo $_SERVER['HTTP_CONNECTION'] . '<br>';    //keep-alive
            echo $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] . '<br>';    //1
            echo $_SERVER['HTTP_DNT'] . '<br>';    //1
            echo $_SERVER['HTTP_USER_AGENT'];    //Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.62 Safari/537.36
            echo $_SERVER['HTTP_ACCEPT'];    //text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9
            echo $_SERVER['HTTP_SEC_FETCH_SITE'] . '<br>';    //same-origin
            echo $_SERVER['HTTP_SEC_FETCH_MODE'] . '<br>';    //navigate
            echo $_SERVER['HTTP_SEC_FETCH_USER'] . '<br>';    //?1
            echo $_SERVER['HTTP_SEC_FETCH_DEST'] . '<br>';    //document
            echo $_SERVER['HTTP_REFERER'] . '<br>';    //http://localhost/MAMP/
            echo $_SERVER['HTTP_ACCEPT_ENCODING'] . '<br>';    //gzip, deflate, br
            echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '<br>';    //uk-UA,uk;q=0.9,en-US;q=0.8,en;q=0.7,da;q=0.6
            echo $_SERVER['HTTP_COOKIE'] . '<br>';    //SQLiteManager_currentLangue=2; PHPSESSID=5081198cbed735ea5f848da51f78bd32
            echo $_SERVER['PATH'] . '<br>';    //C:\WINDOWS\system32;C:\WINDOWS;C:\WINDOWS\System32\Wbem;C:\WINDOWS\System32\WindowsPowerShell\v1.0\;C:\WINDOWS\System32\OpenSSH\;D:\Roman\Programs\Git\cmd;C:\Program Files\nodejs\;C:\WINDOWS\system32\config\systemprofile\AppData\Local\Microsoft\WindowsApps
            echo $_SERVER['SystemRoot'] . '<br>';    //C:\WINDOWS
            echo $_SERVER['COMSPEC'] . '<br>';    //C:\WINDOWS\system32\cmd.exe
            echo $_SERVER['PATHEXT'] . '<br>';    //.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC
            echo $_SERVER['WINDIR'] . '<br>';    //C:\WINDOWS
            echo $_SERVER['SERVER_SIGNATURE'] . '<br>';    //no value
            echo $_SERVER['SERVER_SOFTWARE'] . '<br>';    //Apache
            echo $_SERVER['SERVER_NAME'] . '<br>';    //localhost
            echo $_SERVER['SERVER_ADDR'] . '<br>';    //127.0.0.1
            echo $_SERVER['SERVER_PORT'] . '<br>';    //80
            echo $_SERVER['REMOTE_HOST'] . '<br>';    //na1r.services.adobe.com
            echo $_SERVER['REMOTE_ADDR'] . '<br>';    //127.0.0.1
            echo $_SERVER['DOCUMENT_ROOT'] . '<br>';    //D:/localhost/MAMP/htdocs
            echo $_SERVER['SERVER_ADMIN'] . '<br>';    //you@example.com
            echo $_SERVER['SCRIPT_FILENAME'] . '<br>';    //C:/Users/Public/Documents/Appsolute/MAMPPRO/mamp/index.php
            echo $_SERVER['REMOTE_PORT'] . '<br>';    //52158
            echo $_SERVER['GATEWAY_INTERFACE'] . '<br>';    //CGI/1.1
            echo $_SERVER['SERVER_PROTOCOL'] . '<br>';    //HTTP/1.1
            echo $_SERVER['REQUEST_METHOD'] . '<br>';    //GET
            echo $_SERVER['QUERY_STRING'] . '<br>';    //language=English&page=phpinfo
            echo $_SERVER['REQUEST_URI'] . '<br>';    ///MAMP/index.php?language=English&page=phpinfo
            echo $_SERVER['SCRIPT_NAME'] . '<br>';    ///MAMP/index.php
            echo $_SERVER['PHP_SELF'] . '<br>';    ///MAMP/index.php
            echo $_SERVER['REQUEST_TIME_FLOAT'] . '<br>';    //1584689677.816
            echo $_SERVER['REQUEST_TIME'] . '<br>';    //1584689677
            echo $_SERVER['argv'] . '<br>';
            // Array
            // (
            //     [0] => language=English&page=phpinfo
            // )
            echo $_SERVER['argc'] . '<br>';    //1



            $array = array('login' => 'roman', 'password' => 'xxxxx', 'city' => 'lviv');

            foreach ($array as $key => $value)
                echo 'Key: ' . $key . ', value: ' . $value . '<br>';

            for ($i = 0; $i < 10; $i++) {
                echo ($i + 1) . '<br>';
            }

            print '<br>';

            for ($i = 0; $i < 10; $i += 2) {
                echo ($i + 1) . '<br>';
            }

            print '<br>';

            for ($i = 100; $i > 10; $i /= 2) {
                echo $i . '<br>';
            }

            print '<br>';

            $i = 0;
            while ($i < 10) {
                echo $i . '<br>';
                $i++;
            }

            print '<br>';
            $i = 100;
            do {
                echo '101';
            } while ($i == 101);

            print '<br><br>';

            for ($i = 100; $i > 10; $i--) {
                if ($i % 2 == 0)
                    continue;
                if ($i < 85)
                    break;
                echo $i . '<br>';
            }

            print '<br>';

            $myarray = [22, 222, 333, 444, 55, 6666, 3343, 66];
            $count = count($myarray);
            for ($i = 0; $i < $count; $i++) {
                echo 'Value: ' . ($i + 1) . ' - ' . $myarray[$i] . '<br>';
            }

            print '<br>';

            $i = 0;
            while ($i < $count) {
                echo 'VALUE: ' . ($i + 1) . ' - ' . $myarray[$i] . '<br>';
                $i++;
            }

            print '<br>';
            print '<br>';

            $i = 0;
            do {
                echo 'VALUE: ' . ($i + 1) . ' - ' . $myarray[$i] . '<br>';
                $i++;
            } while ($i < $count);


            print '<br>';

            $test = 'test';
            function test()
            {
                global $test;
                static $num = 5;
                $num++;
                echo $test . ' - ' . $num . '<br>';
            }

            test();
            test();
            test();


            print '<br>';

            header('Location: /');
            exit(); //die();

            ?>
        </div>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/aside.php' ?>
    </div>
</main>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php' ?>