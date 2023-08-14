CREATE TABLE `salutation` (
    `salutation_id` int(11) NOT NULL,
    `salutation` varchar(10) NOT NULL,
    PRIMARY KEY (`salutation_id`)
);

CREATE TABLE `membership` (
    `membership_id` int(11) NOT NULL,
    `full_name` varchar(255) NOT NULL,
    `physical_address` varchar(255) NOT NULL,
    `salutation_id` int(11) NOT NULL,
    PRIMARY KEY (`membership_id`),
    FOREIGN KEY (`salutation_id`) REFERENCES `salutation` (`salutation_id`)
        ON DELETE CASCADE 
        ON UPDATE CASCADE 
);

CREATE TABLE `rentals` (
    `rental_id` int(11) NOT NULL,
    `membership_id` int(11) NOT NULL,
    `rented_movie` varchar(255) NOT NULL,
    PRIMARY KEY (`rental_id`),
    FOREIGN KEY (`membership_id`) REFERENCES `membership` (`membership_id`)
        ON DELETE CASCADE 
        ON UPDATE CASCADE 
);
