CREATE TABLE asociacions
(
    id INT NOT NULL AUTO_INCREMENT,
    nit VARCHAR(15) NOT NULL,
    nombre VARCHAR(55) NOT NULL,
    sigla VARCHAR(5) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    coe VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE participantes
(
    id INT NOT NULL AUTO_INCREMENT,
    carnet VARCHAR(15) NOT NULL, 
    nombre VARCHAR(250) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    genero VARCHAR(1) NOT NULL,
    fechanacimiento DATE NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE vehiculos
(
    id INT NOT NULL AUTO_INCREMENT,
    placa VARCHAR(12) NOT NULL,
    color VARCHAR(20) NOT NULL,
    seguro VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE categorias
(
    id INT NOT NULL AUTO_INCREMENT,
    participante_id INT NOT NULL,
    vehiculo_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (participante_id) REFERENCES participantes(id),
    FOREIGN KEY (vehiculo_id) REFERENCES vehiculos(id)
);

CREATE TABLE circuitos
(
    id INT NOT NULL AUTO_INCREMENT,
    ubicacion VARCHAR(255) NOT NULL,
    participante_id INT NOT NULL,
    tiempo INT NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(participante_id) REFERENCES participantes(id)
);

CREATE TABLE rallys
(
    id INT NOT NULL AUTO_INCREMENT,
    direccion1 VARCHAR(255) NOT NULL,
    direccion2 VARCHAR(255) NOT NULL,
    direccion3 VARCHAR(255) NOT NULL,
    participante_id INT NOT NULL,
    fecha_fin DATE NOT NULL,
    fecha_inicio DATE NOT NULL,
    tiempo_tramo INT NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(participante_id) REFERENCES participantes(id)
);


CREATE TABLE teams
(
    id INT NOT NULL AUTO_INCREMENT,
    team VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE inscripcions
(
    id INT NOT NULL AUTO_INCREMENT,
    participante_id INT NOT NULL,
    vehiculo_id INT NOT NULL,
    team_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY(participante_id) REFERENCES participantes(id),
    FOREIGN KEY(vehiculo_id) REFERENCES vehiculos(id),
    FOREIGN KEY(team_id) REFERENCES teams(id)
);


CREATE TABLE tecnicos
(
    id INT NOT NULL AUTO_INCREMENT,
    carnet VARCHAR(20) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);



CREATE TABLE respustos
(
    id INT NOT NULL AUTO_INCREMENT,
    repuesto VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE ubicacions
(
    id INT NOT NULL AUTO_INCREMENT,
    ubicacion VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE premios
(
    id INT NOT NULL AUTO_INCREMENT,
    premio VARCHAR(255) NOT NULL,
    participante_id INT NOT NULL,
    team_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(participante_id) REFERENCES participantes(id),
    FOREIGN KEY(team_id) REFERENCES teams(id)
);

INSERT INTO asociacions
    (nit, nombre, sigla, telefono, coe)
VALUES
    ('123456789-1', 'Asociación de Automovilismo', 'AAA', '555-1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
    ('234567890-2', 'Federación de Deportes de Motor', 'FDM', '555-5678', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.'),
    ('345678901-3', 'Liga de Rallys', 'LR', '555-9012', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.');

INSERT INTO participantes (carnet, nombre, direccion, telefono, genero, fechanacimiento) VALUES
('23456789012345', 'María Gómez', 'Calle 2 #2-2', '555-5678', 'F', '1985-02-15'),
('34567890123456', 'Pedro Rodríguez', 'Calle 3 #3-3', '555-9012', 'M', '1992-05-20'),
('45678901234567', 'Laura Torres', 'Calle 4 #4-4', '555-3456', 'F', '1998-11-10'),
('123456789', 'Juan Perez', 'Calle 1 #123', '555-1234', 'M', '1990-01-01'),
('987654321', 'Maria Gonzalez', 'Calle 2 #456', '555-5678', 'F', '1995-05-15'),
('456123789', 'Pedro Rodriguez', 'Calle 3 #789', '555-2468', 'M', '1985-10-30'),
('789321456', 'Ana Torres', 'Calle 4 #1011', '555-3691', 'F', '2000-03-20');

INSERT INTO vehiculos
    (placa, color, seguro)
VALUES
    ('ABC-123', 'Rojo', '12345'),
    ('DEF-456', 'Azul', '67890'),
    ('GHI-789', 'Negro', '24680'),
    ('JKL-012', 'Blanco', '13579');

INSERT INTO categorias
    (participante_id, vehiculo_id)
VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4);

INSERT INTO circuitos
    (ubicacion, participante_id, tiempo, fecha_inicio, fecha_fin)
VALUES
    ('Circuito 1', 1, 60, '2023-04-01', '2023-04-02'),
    ('Circuito 2', 2, 75, '2023-05-01', '2023-05-02'),
    ('Circuito 3', 3, 90, '2023-06-01', '2023-06-02'),
    ('Circuito 4', 4, 120, '2023-07-01', '2023-07-02');

INSERT INTO rallys
    (direccion1, direccion2, direccion3, participante_id, fecha_fin, fecha_inicio, tiempo_tramo)
VALUES
    ('Rally 1 - Direccion 1', 'Rally 1 - Direccion 2', 'Rally 1 - Direccion 3', 1, '2023-08-01', '2023-08-02', 180),
    ('Rally 2 - Direccion 1', 'Rally 2 - Direccion 2', 'Rally 2 - Direccion 3', 2, '2023-09-01', '2023-09-02', 200),
    ('Rally 3 - Direccion 1', 'Rally 3 - Direccion 2', 'Rally 3 - Direccion 3', 3, '2023-10-01', '2023-10-02', 240),
    ('Rally 4 - Direccion 1', 'Rally 4 - Direccion 2', 'Rally 4 - Direccion 3', 4, '2023-11-01', '2023-11-02', 300);

INSERT INTO teams
    (team)
VALUES
    ('Equipo 1'),
    ('Equipo 2'),
    ('Equipo 3'),
    ('Equipo 4');

INSERT INTO inscripcions
    (participante_id, vehiculo_id, team_id)
VALUES
    (1, 1, 1),
    (2, 2, 2),
    (3, 3, 3),
    (4, 4, 4);
-- insertar datos en la tabla tecnicos
INSERT INTO tecnicos
    (carnet, nombre, cargo)
VALUES
    ('123456789', 'Juan Pérez', 'Mecánico'),
    ('987654321', 'María García', 'Electromecánico'),
    ('456789123', 'Pedro Hernández', 'Ingeniero');

-- insertar datos en la tabla respustos
INSERT INTO respustos
    (repuesto)
VALUES
    ('Filtro de aceite'),
    ('Bujía'),
    ('Amortiguador'),
    ('Neumático'),
    ('Disco de freno');

-- insertar datos en la tabla ubicacions
INSERT INTO ubicacions
    (ubicacion)
VALUES
    ('Ciudad de México'),
    ('Monterrey'),
    ('Guadalajara'),
    ('Puebla'),
    ('Toluca');

-- insertar datos en la tabla premios
INSERT INTO premios
    (premio, participante_id, team_id)
VALUES
    ('Primer lugar', 1, 1),
    ('Segundo lugar', 2, 2),
    ('Tercer lugar', 3, 1),
    ('Mejor tiempo', 4, 2);

Mostrar todos los participantes que por lo menos tienen un premio 
SELECT participantes.nombre, participantes.carnet, participantes.telefono, premios.premio
FROM participantes, premios
WHERE participantes.id=premios.participante_id;

mostrar todos los tems que tienen al menos un premio
SELECT teams.team, premios.premio
FROM participantes, premios, teams
WHERE 
teams.id=premios.team_id and
    participantes.id=premios.participante_id;

mostrar todos los datos de los participantes inscritos
SELECT participantes.*
from participantes, inscripcions
where inscripcions.participante_id=participantes.id; 
 mostrar todas las participantes mujeres que esten inscritas 
 SELECT participantes.*
from participantes, inscripcions
where inscripcions.participante_id=participantes.id and
    genero="F";


mostrar todas las participantes mujeres que esten inscritas 
 SELECT participantes.*
from participantes, inscripcions
where inscripcions.participante_id=participantes.id and
    genero="M";

mostrar los vehiculos de los participantes inscritos 
SELECT participantes.nombre, vehiculos.placa, vehiculos.placa, vehiculos.color
FROM `inscripcions
`,vehiculos,participantes 
where inscripcions.vehiculo_id=vehiculos.id and 
participantes.id=inscripcions.participante_id;