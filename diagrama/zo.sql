CREATE DATABASE hospital;
  SHOW DATABASES;
 USE hospital;

create table medicamentos
(
id_medicamento char(5) primary key not null,
nombre varchar(50) not null,
substancia varchar(50) not null,
via_admin varchar(50),
cantidad int(4) not null,
excipiente char(10) not null,
indicaciones varchar(50),
contra_indicaciones varchar(50),
reacciones varchar(50),
controlado tinyint(1)
);
create table Detalle_Consulta
(
Id_Consulta int NOT NULL,
  ID_Medicamento char(5) NOT NULL,
  Prescripcion text(16) NOT NULL,
  PRIMARY KEY (Id_Consulta, ID_Medicamento),
  FOREIGN KEY (ID_Medicamento) REFERENCES Medicamentos(ID_Medicamento)
);

create table Medicos
(
ID_Medico char (10) primary key,
ApellidoPaterno varchar (30) not null,
ApellidoMaterno varchar (30) not null,
Nombre varchar (50) not null,
Especialidad varchar (50) not null,
Fecha_Titulacion datetime not null
);

create table pacientes
(
NumeroISSSTE char (10) primary key,
RFC char (10) not null,
CURP char(18) not null,
Nombre varchar (50) not null,
ApellidoPaterno varchar (50) not null,
ApellidoMaterno varchar (30) not null,
FechaNacimiento datetime not null,
Sexo char (1) not null,
TipoSanguineo char (1) not null,
Factor_RH char (1) not null,
Calle varchar (50) not null,
Colonia varchar (50) not null,
Ciudad varchar (50) not null,
CP char (5)
);

create table Consultas (
  Id_Consulta int not null DEFAULT 0,
  ID_Medico char (10) not null,
  NumeroISSSTE char (10) not null,
  Indicaciones text (16) not null,
  fecha datetime not null,
  primary key (Id_Consulta, ID_Medico),
  foreign key (ID_Medico) references Medicos(ID_Medico),
  foreign key (NumeroISSSTE) references pacientes(NumeroISSSTE),
  foreign key (Id_Consulta) references Detalle_Consulta(Id_Consulta)
);

