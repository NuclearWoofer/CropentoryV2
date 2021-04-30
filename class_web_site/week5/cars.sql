/*
	Edit - Preferences - SQL Editor - Uncheck Safe Updates
        Query - Reconnect  to Server
*/
CREATE TABLE IF NOT EXISTS cars (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        carMake VARCHAR(50) DEFAULT NULL,
        carModel VARCHAR(50) DEFAULT NULL,
        carStyle VARCHAR(50) DEFAULT NULL,
        carYear DATE
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


