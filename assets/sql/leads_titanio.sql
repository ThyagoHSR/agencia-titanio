-- Exemplo de criação de banco de dados

CREATE DATABASE IF NOT EXISTS agencia_titanio;
USE agencia_titanio;

CREATE TABLE IF NOT EXISTS leads_titanio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  telefone VARCHAR(20),
  empresa VARCHAR(200),
  data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);