-- Utwórz bazę danych i tabelę dla przykładowego projektu
CREATE DATABASE IF NOT EXISTS poprawka_db DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;
USE poprawka_db;

CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
