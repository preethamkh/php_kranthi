CREATE TABLE `swinburn`.`orders` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(45) NOT NULL,
  `FirstName` VARCHAR(45) NULL,
  `LastName` VARCHAR(45) NULL,
  `DOH` VARCHAR(15) NULL,  
  `StreetAddress` VARCHAR(45) NULL,
  `Town` VARCHAR(60) NULL,
  `State` VARCHAR(10) NULL,
  `PostalCode` VARCHAR(10) NULL,
  `Phoneno` VARCHAR(10) NULL,
  `Product` varchar(40) null,
  `Price` varchar(10) null,
  `Quantity` int null,  
  `Features` varchar(50),
  `TotalPrice` varchar(10) null,
  `Card` varchar(10),
  `NameOnCard` varchar(40),
  `CardNumber` bigint null,
  `ExpiryDate` varchar(5),	    
  `Comments` VARCHAR(200) NULL,
  `Status` varchar(20) null,
  `DateOfOrder` date null,
  PRIMARY KEY (`order_id`),
  UNIQUE INDEX `idUsers_UNIQUE` (`order_id` ASC))
ENGINE = InnoDB;


CREATE TABLE `kranthi`.`attempts` ( `attemptid` INT NOT NULL , `dateandtime` DATETIME NOT NULL , `firstname` VARCHAR(20) NOT NULL , `lastname` VARCHAR(20) NOT NULL , `studnumber` INT NOT NULL , `attemptnumber` INT NOT NULL , `score` INT NOT NULL , PRIMARY KEY (`attemptid`)) ENGINE = MyISAM;

