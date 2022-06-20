

CREATE DATABASE  `raca` ;

USE `raca`;

DROP TABLE IF EXISTS `featured_cars`;

CREATE TABLE `featured_cars` (
    `id` int AUTO_INCREMENT  NOT NULL,
    `bid` varchar(255),
    `brand` varchar(255),
    `model` varchar(255),
    `image` varchar(255),
    `image1` varchar(255),
    `image2` varchar(255),
    `image3` varchar(255),
    `image4` varchar(255),
    `image5` varchar(255),
    `price` int,
    `year`  varchar(255),
    `status` varchar(255),
    `soldby` varchar(255),
    `conditionc` varchar(255),
    `bodytype` varchar(255),
    `enginee` varchar(255),
    `transmission` varchar(255),
    `mileage` varchar(255),
    `gasmilage`varchar(255),
    `Feature1` varchar(255),
    `Feature2` varchar(255),
    `Feature3` varchar(255),
    `Feature4` varchar(255),
    `Feature5` varchar(255),
    `date`   date NULL,
    `start_date` date NULL,
    `enddate` date NULL,
    `endtime` time NULL,
    `postedby` varchar(255),
    `bidamount` int ,
    PRIMARY KEY (`id`)
  
);
CREATE TABLE `user` (
    `email` varchar(255),
    `username` varchar(255),
    `password` varchar(255),
    `id` int AUTO_INCREMENT  NOT NULL,
    `type` varchar(255),
    `visanumber` int,
        PRIMARY KEY (`id`) 
) 
CREATE TABLE `visacardsimulator2` (
    `email` varchar(255),
    `username` varchar(255),
    `password` varchar(255),
    `id` int AUTO_INCREMENT  NOT NULL,
    `balance` int,
    `cardnumber` int,
    PRIMARY KEY (`id`) 
) 