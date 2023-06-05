create DATABASE inventario;
use inventario;
create table producto (
	id BIGINT PRIMARY key AUTO_INCREMENT,
	nombre varchar(120) NOT NULL,
    precio DECIMAL(10, 2),
    cantidad FLOAT,
    categoria varchar(200),
    tipo varchar(50),
    fecha_vencimiento DATE,
    descripcion TEXT,
    last_modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);