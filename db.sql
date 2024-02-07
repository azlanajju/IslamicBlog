CREATE TABLE Thasbeeh (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    UniqueId VARCHAR(100) UNIQUE,
    Thasbeeh_count INT DEFAULT 0
);
