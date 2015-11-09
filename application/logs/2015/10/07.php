<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-07 16:26:06 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'id' doesn't have a default value [ INSERT INTO `slogans` (`text`) VALUES ('') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php:251
2015-10-07 16:26:06 --- DEBUG: #0 /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#3 /var/www/shkolkovo/application/classes/ORM.php(46): Kohana_ORM->save(NULL)
#4 /var/www/shkolkovo/application/classes/Controller/Manage/Slogans.php(27): ORM->save()
#5 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Controller.php(84): Controller_Manage_Slogans->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Slogans))
#8 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/shkolkovo/index.php(124): Kohana_Request->execute()
#11 {main} in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php:251