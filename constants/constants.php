<?php


         $headerClickMoveToMainPage =array("data"=>"http://localhost/WT(indus%20sem5)/travelvibes/view/MainPage.php");

        //  ADMIN AUTHENTICATION

        $adminUserName="admin@admin.com";
        $adminPassword="admin";


        // TABLESSSS

                $userTable = "user";
                $userBooking="userbooking";
        
                $billTable="billdata";
                $hotelTable="hotel";
                $hotelImages="hotelImage";
                $packageTable="package";
                $packageImages="packageimages";
                


        // USERTABLE TABLE COLUMNS 
                        $userId="userId";
                        $userName="userName";
                        $userEmail="userEmail";
                        $mobileNo="mobileNo";
                        $password="password";
                        $isActive="isActive";
                        $AccCreatedOn="AccCreatedOn";
                        $heroimg="heroimg";                     //is commoon for all tables

                        // CREATE TABLE `heroku_b981d50df0ab52e`.`user` ( `userId` INT NOT NULL AUTO_INCREMENT , `userName` VARCHAR(30) NOT NULL , `userEmail` VARCHAR(30) NOT NULL , `mobileNo` VARCHAR(12) NOT NULL , `password` VARCHAR(100) NOT NULL , `isActive` BOOLEAN NOT NULL , `AccCreatedOn` DATE NOT NULL , `heroimg` VARCHAR(400) NOT NULL , PRIMARY KEY (`userId`)) ENGINE = InnoDB COMMENT = 'user who gets signed up to the travelvibes.';


        // HOTEL TABLE COLUMNS

                        $hotelId='hotelid';
                        $hotelName='HotelName';
                        $hotelType='Hoteltype';
                        $hotelstate='State';
                        $hotelcity='city';
                        $maxPeopleInRoom='maxPeopleInRoom';
                        $roomsAvailable='RoomsAvailable';
                        $starRating='starRating';
                        $definition='Definition';
                        // $heroImg='heroimg';
                        $hotelCreatedDT='hotelCreationDT';
                        $isdeletedHotel='deleteHotel';        
                        $priceprpn="priceprpn";
                        // CREATE TABLE `heroku_b981d50df0ab52e`.`hotel` ( `hotelid` INT NOT NULL AUTO_INCREMENT , `HotelName` VARCHAR(20) NOT NULL , `Hoteltype` VARCHAR(20) NOT NULL , `State` VARCHAR(20) NOT NULL , `city` VARCHAR(20) NOT NULL , `maxPeopleInRoom` INT NOT NULL , `RoomsAvailable` INT NOT NULL , `starRating` INT NOT NULL , `Definition` VARCHAR(2000) NOT NULL , `heroimg` VARCHAR(400) NOT NULL , `hotelCreationDT` DATE NOT NULL , `deleteHotel` BOOLEAN NOT NULL , `priceprpn` DOUBLE NOT NULL , PRIMARY KEY (`hotelid`)) ENGINE = InnoDB;

                        //  Package Extra Images  Tables Column Name

        // $imageId ="imageId";
        $hotelImagesId="hotelid";
        // $Image="Image";
        // CREATE TABLE `heroku_b981d50df0ab52e`.`hotelimage` ( `imageId` INT NOT NULL AUTO_INCREMENT , `hotelid` INT NOT NULL , `Image` VARCHAR(400) NOT NULL , PRIMARY KEY (`imageId`)) ENGINE = InnoDB;
 
 
        // Package Table Column
// CREATE TABLE `heroku_b981d50df0ab52e`.`package` ( `packageId` INT NOT NULL AUTO_INCREMENT , `packageName` VARCHAR(30) NOT NULL , `HeroImg` VARCHAR(400) NOT NULL , `state` VARCHAR(30) NOT NULL , `price` DOUBLE NOT NULL , `ModeofTransport` VARCHAR(20) NOT NULL , `definition` VARCHAR(2000) NOT NULL , `ticketAvailable` INT NOT NULL , `startDate` DATE NOT NULL , `endDate` DATE NOT NULL , `packageCreationDT` DATE NOT NULL , PRIMARY KEY (`packageId`)) ENGINE = InnoDB;
        $packageId="packageId";
        
        $apckageName="packageName";
        // $Pac0kageHeroImg="HeroImg";
        $packageState="state";
        $packagePrice="price";
        $ModelOfTransport="ModeofTransport";
        $packageDefinition="definition";
        $ticketAvailable="ticketAvailable";
        $packageStartDate="startDate";
        $packageEndDate="endDate";
        $packageCreationDT="packageCreationDT";
        

        //  Package Extra Images  Tables Column Name

        $imageId ="imageId";
        $packageImgid="packageid";
        $Image="Image";
// CREATE TABLE `heroku_b981d50df0ab52e`.`packageimages` ( `imageId` INT NOT NULL AUTO_INCREMENT , `packageid` INT NOT NULL , `Image` VARCHAR(400) NOT NULL , PRIMARY KEY (`imageId`)) ENGINE = InnoDB;

        //  User Booking column
        $UBuserid="userid";
        $UBpackageid="packageid";
        $UBhoteid="hotelid";
        $UBpackageSelectDate="packgeSelectDT";
        $UBhotelSelectDT="hotelSelectDT";
        $UBbillid="billid";
        // CREATE TABLE `heroku_b981d50df0ab52e`.`userbooking` ( `userid` INT NOT NULL , `packageid` INT NOT NULL , `hotelid` INT NOT NULL , `packgeSelectDT` DATE NOT NULL , `hotelSelectDT` DATE NOT NULL , `billid` INT NOT NULL ) ENGINE = InnoDB;

        //  Bill Data talbe column
        $BDbillid="billlid";
        $BDpackageTicketsTaken="packageTicketsTaken";
        $BDHotelRoomsBooked="HotelTicketsTaken";
        $BDTotalPackagePrice="TotalPackagePrice";
        $BDTotalHotelPrice="TotalHotelPrice";
        
        $totalPersonBooked="totalPersonBooked";   
        $checkinDate="checkinDate";        
        $checkoutDate="checkout";        
        // CREATE TABLE `heroku_b981d50df0ab52e`.`billdata` ( `billlid` INT NOT NULL AUTO_INCREMENT , `packageTicketsTaken` INT NOT NULL , `HotelTicketsTaken` INT NOT NULL , `TotalPackagePrice` DOUBLE NOT NULL , `TotalHotelPrice` DOUBLE NOT NULL , `totalPersonBooked` INT NOT NULL , `checkinDate` DATE NOT NULL , `checkout` DATE NOT NULL , PRIMARY KEY (`billlid`)) ENGINE = InnoDB;
?>