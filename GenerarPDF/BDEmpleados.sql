--Abel Mansilla Felipe
CREATE DATABASE BDEmpleados;

CREATE TABLE Empleados(
  IdEmpleado smallint PRIMARY KEY AUTO_INCREMENT,
  Nombre varchar (50) NOT NULL,
  Correo varchar(100)  NULL,
  Telefono varchar(9) NOT NULL,
  DNI char(9)  NOT NULL
);

INSERT INTO `empleados`(`IdEmpleado`, `Nombre`, `Correo`, `Telefono`, `DNI`)
VALUES ('1','María Jesús','mariajesus@gmail.com','693852147','84569712M'),
      ('2','Pedro','pedro@gmail.com','632514789','82136549F'),
      ('3','Carlos','carlos@gmail.com','685214735','81125488L')
