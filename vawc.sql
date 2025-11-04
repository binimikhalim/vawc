


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin', 'VAWC Worker') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `manage` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `full_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `user_name` VARCHAR(255) NOT NULL,
    `number` VARCHAR(255) NOT NULL,
    ALTER TABLE `manage` ADD `role` VARCHAR(50) NOT NULL DEFAULT 'user';
    PRIMARY KEY (`id`)
);

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `case_no` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `assigned_by` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending', 'Setlled', 'Closed', 'Ongoing',

  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `manage`(`id`) ON DELETE CASCADE
);

CREATE TABLE `incident_reports` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `victim_name` VARCHAR(255) NOT NULL,
    `victim_email` VARCHAR(255),
    `victim_age` INT,
    `victim_phone` VARCHAR(50),
    `victim_gender` VARCHAR(50),
    `victim_address` TEXT,
    `relationship_to_perpetrator` VARCHAR(255),
    `perpetrator_name` VARCHAR(255),
    `perpetrator_email` VARCHAR(255),
    `perpetrator_age` INT,
    `perpetrator_phone` VARCHAR(50),
    `perpetrator_gender` VARCHAR(50),
    `perpetrator_address` TEXT,
    `relationship_to_victim` VARCHAR(255),
    `date_of_incident` DATE,
    `time_of_incident` TIME,
    `location_of_incident` TEXT,
    `type_of_incident` VARCHAR(255),
    `description` TEXT,
    `file_attachment` VARCHAR(255),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


