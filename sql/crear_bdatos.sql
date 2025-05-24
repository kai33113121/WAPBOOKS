/*BASE DE DATOS LIBROS WAP*/
-- X SI ACASO  PARA CREARLA 

CREATE DATABASE IF NOT EXISTS wap_libros;
USE wap_libros;

-- TABLA INICIAL DE USUARIOS CON ROLES

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol TINYINT(1) NOT NULL CHECK (rol IN (1, 2))
);
-- Inserción de usuarios por defecto
INSERT INTO usuarios (id_usuario, usuario, nombres, apellidos, email, password, rol) VALUES
(1, 'Angelino', 'Angel David', 'Vanegas Bulla', 'angelvanegas944@gmail.com', '12345678', 1),
(2, 'Max', 'Max', 'Caufield', 'maxt46@azohomail.com', '00000000', 2);


-- TABLA DE PRODUCTOS

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2),
    cantidad INT,
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Tabla de libros
    CREATE TABLE libro (
        id INT PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(50),
        autor VARCHAR(50),
        descripcion VARCHAR(50),
        precio DECIMAL(10,2),
        existencias INT,
        fecha_creacion TIMESTAMP,
        creado_por INT,
        sinopsis VARCHAR(100),
        estado VARCHAR(50),
        FOREIGN KEY (creado_por) REFERENCES usuarios(id_usuario)
    );

    -- Tabla de carrito
    CREATE TABLE carrito (
        id_carrito INT PRIMARY KEY AUTO_INCREMENT,
        id_usuario INT,
        id_libro INT,
        fecha_agregado DATE,
        total FLOAT,
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de compras
    CREATE TABLE compra (
        id_compra INT PRIMARY KEY AUTO_INCREMENT,
        id_usuario INT,
        id_libro INT,
        cantidad INT,
        fecha_compra DATE,
        total FLOAT,
        estado VARCHAR(20),
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de inventario
    CREATE TABLE inventario (
        id_inventario INT PRIMARY KEY AUTO_INCREMENT,
        id_libro INT,
        cantidad INT,
        ubicacion VARCHAR(50),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de reseñas
    CREATE TABLE reseña (
        id_resena INT PRIMARY KEY AUTO_INCREMENT,
        id_usuario INT,
        id_libro INT,
        texto TEXT,
        calificacion INT,
        fecha_resena DATE,
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de ventas
    CREATE TABLE venta (
        id_venta INT PRIMARY KEY AUTO_INCREMENT,
        id_usuario INT,
        id_libro INT,
        cantidad INT,
        fecha_venta DATE,
        estado VARCHAR(20),
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de intercambios
    CREATE TABLE intercambio (
        id_intercambio INT PRIMARY KEY AUTO_INCREMENT,
        usuario_ofrece INT,
        usuario_recibe INT,
        libro_ofrece INT,
        libro_recibe INT,
        fecha_intercambio DATE,
        FOREIGN KEY (usuario_ofrece) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (usuario_recibe) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (libro_ofrece) REFERENCES libro(id),
        FOREIGN KEY (libro_recibe) REFERENCES libro(id)
    );

    -- Tabla de recomendaciones
    CREATE TABLE recomendacion (
        id_recomendacion INT PRIMARY KEY AUTO_INCREMENT,
        id_usuario INT,
        id_libro INT,
        historial_busqueda TEXT,
        historial_compras TEXT,
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );

    -- Tabla de reservas
    CREATE TABLE reserva (
        id_reserva INT PRIMARY KEY AUTO_INCREMENT,
        id_libro INT,
        id_usuario INT,
        fecha_reserva DATE,
        estado VARCHAR(50),
        FOREIGN KEY (id_libro) REFERENCES libro(id),
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
    );

    -- Tabla de eventos relacionada con libro
    CREATE TABLE evento (
        id_evento INT PRIMARY KEY AUTO_INCREMENT,
        nombre_evento VARCHAR(50),
        descripcion TEXT,
        fecha_evento DATE,
        id_libro INT,
        FOREIGN KEY (id_libro) REFERENCES libro(id)
    );