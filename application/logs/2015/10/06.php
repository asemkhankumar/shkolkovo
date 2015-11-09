<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-10-06 18:53:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 18:53:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 18:55:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 18:55:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 18:55:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 18:55:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:23:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:23:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:24:58 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:25:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 19:25:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Slogans' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2015-10-06 19:25:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2015-10-06 20:05:16 --- EMERGENCY: Twig_Error_Syntax [ 0 ]: Unexpected token "end of print statement" of value "" in "manage/slogans/index.twig" at line 7 ~ DOCROOT/modules/template/vendor/Twig/ExpressionParser.php [ 171 ] in /var/www/shkolkovo/modules/template/vendor/Twig/ExpressionParser.php:85
2015-10-06 20:05:16 --- DEBUG: #0 /var/www/shkolkovo/modules/template/vendor/Twig/ExpressionParser.php(85): Twig_ExpressionParser->parsePrimaryExpression()
#1 /var/www/shkolkovo/modules/template/vendor/Twig/ExpressionParser.php(42): Twig_ExpressionParser->getPrimary()
#2 /var/www/shkolkovo/modules/template/vendor/Twig/Parser.php(146): Twig_ExpressionParser->parseExpression()
#3 /var/www/shkolkovo/modules/template/vendor/Twig/TokenParser/Block.php(47): Twig_Parser->subparse(Array, true)
#4 /var/www/shkolkovo/modules/template/vendor/Twig/Parser.php(192): Twig_TokenParser_Block->parse(Object(Twig_Token))
#5 /var/www/shkolkovo/modules/template/vendor/Twig/Parser.php(100): Twig_Parser->subparse(NULL, false)
#6 /var/www/shkolkovo/modules/template/vendor/Twig/Environment.php(480): Twig_Parser->parse(Object(Twig_TokenStream))
#7 /var/www/shkolkovo/modules/template/vendor/Twig/Environment.php(530): Twig_Environment->parse(Object(Twig_TokenStream))
#8 /var/www/shkolkovo/modules/template/vendor/Twig/Environment.php(324): Twig_Environment->compileSource('{% extends "man...', 'manage/slogans/...')
#9 /var/www/shkolkovo/modules/template/classes/Kohana/Kotwig/View.php(19): Twig_Environment->loadTemplate('manage/slogans/...')
#10 /var/www/shkolkovo/modules/template/classes/Kohana/Kotwig/View.php(57): Kohana_Kotwig_View::capture('manage/slogans/...', Array)
#11 /var/www/shkolkovo/modules/template/classes/Kohana/Controller/Kotwig.php(65): Kohana_Kotwig_View->render()
#12 /var/www/shkolkovo/application/classes/Controller/Manage/Core.php(84): Kohana_Controller_Kotwig->after()
#13 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Controller.php(87): Controller_Manage_Core->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage_Slogans))
#16 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/shkolkovo/kohana/3.3/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/shkolkovo/index.php(124): Kohana_Request->execute()
#19 {main} in /var/www/shkolkovo/modules/template/vendor/Twig/ExpressionParser.php:85
2015-10-06 20:30:19 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'id' doesn't have a default value [ INSERT INTO `slogans` (`text`) VALUES ('') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php:251
2015-10-06 20:30:19 --- DEBUG: #0 /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
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
2015-10-06 20:36:44 --- EMERGENCY: Database_Exception [ 1364 ]: Field 'id' doesn't have a default value [ INSERT INTO `slogans` (`text`) VALUES ('') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php:251
2015-10-06 20:36:44 --- DEBUG: #0 /var/www/shkolkovo/kohana/3.3/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
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