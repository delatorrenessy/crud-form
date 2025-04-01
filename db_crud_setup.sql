-- Create the database
CREATE DATABASE db_crud;

-- Use the created database
USE db_crud;

-- Create users table
CREATE TABLE tbl_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
