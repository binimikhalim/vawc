


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('Admin', 'VAWC Worker') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE assign (
    id INT AUTO_INCREMENT PRIMARY KEY,
    case_no VARCHAR(100) NOT NULL,
    name VARCHAR(250) NOT NULL,
    assigned_to INT UNSIGNED, -- This line was changed to INT UNSIGNED
    status ENUM('pending', 'in_progress', 'settled') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (assigned_to) REFERENCES users(id)
);


