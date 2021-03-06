
--below is mostly user input, cropEstHarvest  & cropEstSell would be auto based on cropName
CREATE TABLE IF NOT EXISTS cropsInventory (
	cropId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
        cropName VARCHAR(50) DEFAULT NULL, --name chosen on dropdown
        cropPlanted DATE, --date planted
        cropEstHarvest DATE, --estimated harvest date
        cropQty INT, --how many of said plant
        cropEstSell FLOAT, --estimated sell = qty 
        
        
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;


--below is all user input
CREATE TABLE IF NOT EXISTS cropsHarvest (
    cropsHarvestId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    cropId INT UNSIGNED,
    cropActSell FLOAT, --Actual Sell--
    cropActHarvestDate DATE, --actual harvest date
    cropNotes TEXT, --farmer notes
    FOREIGN KEY (cropId) REFERENCES cropsInventory(cropId) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

