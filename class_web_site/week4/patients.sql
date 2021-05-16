/*
	Edit - Preferences - SQL Editor - Uncheck Safe Updates
        Query - Reconnect  to Server
*/
CREATE TABLE IF NOT EXISTS patients (
	id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        patientFirstName VARCHAR(50) DEFAULT NULL,
        patientLastName VARCHAR(50) DEFAULT NULL,
        patientMarried TINYINT(1),
        patientBirthDate DATE
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS patientMeasurements (patientMeasurementId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,        patientId INT UNSIGNED,        patientMeasurementDate DATE,        patientWeight SMALLINT,        patientHeight SMALLINT,        patientBPSystolic SMALLINT,        patientBPDiastolic SMALLINT,        patientTemperature DECIMAL(5,2),        FOREIGN KEY (patientId) REFERENCES patients(id) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;