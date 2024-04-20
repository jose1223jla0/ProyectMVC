-- Active: 1713469264996@@127.0.0.1@3306@crud
use crud;


CREATE TABLE Roles (
    RoleID INT,
    PRIMARY KEY(RoleID),
    RoleName VARCHAR(50) NOT NULL
);

CREATE TABLE Usuarios (
    UserID INT AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contrasena text NOT NULL,
    telefono text NOT NULL,
    RoleID INT,
    PRIMARY KEY(UserID),
    FOREIGN KEY (RoleID) REFERENCES Roles(RoleID)
);

INSERT INTO Roles (RoleID, RoleName) VALUES
(1, 'Usuarios'),
(2, 'Administrador');

-- Puedes agregar más roles si es necesario

-- Ejemplo de usuarios
-- Insertar usuarios
INSERT INTO Usuarios (nombre, apellido, email, contrasena, telefono, RoleID) VALUES
('Juan', 'Pérez', 'juan@example.com', '12345', '925788956', 1),
('jose luis', 'andrade', 'jose@example.com', '123', '987654321', 2);

SELECT *from Usuarios;