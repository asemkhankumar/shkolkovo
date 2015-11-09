<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-11-06 15:44:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'shkolkovo.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php:358
2015-11-06 15:44:39 --- DEBUG: #0 /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('books')
#2 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/shkolkovo/application/classes/ORM.php(40): Kohana_ORM::factory('Book', NULL)
#7 /var/www/shkolkovo/application/classes/Controller/Welcome.php(8): ORM::factory('book')
#8 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/shkolkovo/index.php(124): Kohana_Request->execute()
#14 {main} in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php:358
2015-11-06 15:46:42 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'shkolkovo.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php:358
2015-11-06 15:46:42 --- DEBUG: #0 /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('books')
#2 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/shkolkovo/kohana/3.3/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/shkolkovo/application/classes/ORM.php(40): Kohana_ORM::factory('Book', NULL)
#7 /var/www/shkolkovo/application/classes/Controller/Welcome.php(8): ORM::factory('book')
#8 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/shkolkovo/index.php(124): Kohana_Request->execute()
#14 {main} in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/MySQL.php:358