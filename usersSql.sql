CREATE TABLE users ( 
   id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(255) NOT NULL,
   password VARCHAR(255) NOT NULL
);

ALTER TABLE users 
ADD COLUMN role ENUM('administrator', 'Lecturer') NOT NULL;

CREATE TABLE IF NOT EXISTS students (
    student_code VARCHAR(20) PRIMARY KEY, 
    student_name VARCHAR(100) NOT NULL,
    calculus_ii DECIMAL(4, 2),
    data_structure_algorithm VARCHAR(100),
    data_communication VARCHAR(100),
    hci VARCHAR(100),
    oop VARCHAR(100),
    se VARCHAR(100),
    sgpa VARCHAR(100),
    ygpa VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS students1 (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    student_code VARCHAR(10) NOT NULL UNIQUE,
    student_name VARCHAR(100) NOT NULL,
    information_technology_concepts VARCHAR(5) NOT NULL,
    fundamentals_of_programming VARCHAR(5) NOT NULL,
    fundamental_of_visual_computing VARCHAR(5) NOT NULL,
    mathematics VARCHAR(5) NOT NULL,
    fundamental_of_electrical_engineering VARCHAR(5) NOT NULL,
    programming_laboratory VARCHAR(5) NOT NULL,
    english_study_skills_for_ict VARCHAR(5) NOT NULL,
    sgpa DECIMAL(4,2) NOT NULL,
    ygpa DECIMAL(4,2) NOT NULL
);