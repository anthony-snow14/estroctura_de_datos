CREATE DATABASE inventario;

use spacecase;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  descripcion VARCHAR(255) NOT NULL,
  precio float,
  cantidad double,
  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;
