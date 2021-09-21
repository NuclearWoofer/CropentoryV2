<?php include __DIR__ . '/../include/header.php'; 

echo("<br />");
echo("************************FINAL PROJECT TABLES************************");
echo("<br />");
echo("<br />");

echo("      CREATE TABLE IF NOT EXISTS cropsInventory(");
echo("<br />");

echo("   cropId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,");
echo("<br />");

echo("   cropName VARCHAR(50) DEFAULT NULL,");
echo("<br />");

echo("   cropPlanted DATE,");
echo("<br />");

echo("   cropEstHarvest DATE,");
echo("<br />");

echo("   cropQty INT,");
echo("<br />");

echo("   cropEstSell FLOAT, ");
echo("<br />");

echo(") ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;");
echo("<br />");
echo("<br />");

        


echo("CREATE TABLE IF NOT EXISTS cropsHarvest (");
echo("<br />");

echo("cropsHarvestId INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,");
echo("<br />");

echo("cropId INT UNSIGNED,");
echo("<br />");

echo(" cropActSell FLOAT,");
echo("<br />");

echo(" cropActHarvestDate DATE,");
echo("<br />");

echo("cropNotes TEXT,");
echo("<br />");

echo("FOREIGN KEY (cropId) REFERENCES cropsInventory(cropId) ON DELETE CASCADE) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;");
echo("<br />");

echo(");");
echo("<br />");
echo("<br />");



include __DIR__ . '/../include/footer.php'; ?>