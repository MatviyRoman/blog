<?php

// Показывать всю информацию, по умолчанию INFO_ALL
//phpinfo();

// Показывать информацию только о загруженных модулях.
// phpinfo(8) выдает тот же результат.
//phpinfo(INFO_MODULES);

// INFO_GENERAL	1	Строка конфигурации, расположение php.ini, дата сборки, сервер, система и др.
// INFO_CREDITS	2	Разработчики PHP. См. также phpcredits().
// INFO_CONFIGURATION	4	Текущие значение основных и локальных PHP директив. См. также ini_get().
// INFO_MODULES	8	Загруженные модули и их настройки. См. также get_loaded_extensions().
// INFO_ENVIRONMENT	16	Информация о переменных окружения, которая также доступна в $_ENV.
// INFO_VARIABLES	32	Выводит все предопределенные переменные из EGPCS (Environment, GET, POST, Cookie, Server).
// INFO_LICENSE	64	Информация о лицензии PHP. См. также » license FAQ.
// INFO_ALL

//phpinfo(INFO_GENERAL);
//phpinfo(INFO_CREDITS);
phpinfo(INFO_CONFIGURATION);
//phpinfo(INFO_MODULES);
// phpinfo(INFO_ENVIRONMENT);
phpinfo(INFO_VARIABLES);
// phpinfo(INFO_LICENSE);
// phpinfo(INFO_ALL);



echo 'php version: ' . phpversion();  //- Получает текущую версию PHP
//echo phpcredits(); //- Выводит список разработчиков PHP