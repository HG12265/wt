CREATE DATABASE gowtham_lab;
USE gowtham_lab;
CREATE TABLE profile (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  qualification VARCHAR(100) NOT NULL,
  institution VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  city VARCHAR(100) NOT NULL
);
INSERT INTO profile(name, qualification, institution, email, city) VALUES
('G. Gowtham','MCA - Pursuing','Periyar University, Salem','itsgowtham.dev@gmail.com','Salem, Tamil Nadu');