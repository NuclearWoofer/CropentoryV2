CREATE TABLE IF NOT EXISTS cropsInventory (
	cropId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cropName VARCHAR(50) DEFAULT NULL,
        cropPlanted DATE,
        cropEstHarvest DATE,
        cropQty INT,
        cropEstSell FLOAT, 
        
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS cropsHarvest (
    cropsHarvestId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    cropId INT UNSIGNED,
    cropActSell FLOAT,
    cropActHarvestDate DATE,
    cropNotes TEXT,
    FOREIGN KEY (cropId) REFERENCES cropsInventory(cropId) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

