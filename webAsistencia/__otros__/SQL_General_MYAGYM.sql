

CREATE DATABASE [BDMYAGYM]

GO
--**********************************************************************************--
USE [BDMYAGYM]
GO

CREATE TABLE [dbo].[Usuarios](
	[c_codi_usua] [char](10) NOT NULL,
	[c_nomb_usua] [varchar](50) NULL,
	[c_clav_usua] [varchar](10) NULL,
	[c_carg_usua] [varchar](25) NULL,
	[c_esta_usus] [char](1) NULL

PRIMARY KEY CLUSTERED 
(
	[c_codi_usua] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

Insert Into Usuarios values ('CBRAVO','Bravo Christian','sa','CONSULTOR',1)
Insert Into Usuarios values ('JCABRERA','Cabrera Jesus','sa','CONSULTOR',1)
Insert Into Usuarios values ('VARIOS','VARIOS','sa','ASISTENTE',1)

GO
select * from Usuarios
--**********************************************************************************--

CREATE TABLE TipoCliente
	(
	idTipoCliente	INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	Descripcion		VARCHAR(50) NOT NULL,

	)
GO
Insert Into TipoCliente values ('Pagante Diario')
Insert Into TipoCliente values ('Pagante Semanal')
Insert Into TipoCliente values ('Pagante Mensual')
GO
Select * from TipoCliente
GO
--**********************************************************************************--

CREATE TABLE Cliente
	(
	idCliente			INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	nrodocumento		VARCHAR(10) NOT NULL,
	nombre				VARCHAR(50) NOT NULL,
	apellidoPaterno		VARCHAR(50) NOT NULL,
	apellidoMaterno		VARCHAR(50) NOT NULL,
	idTipoCliente		INT FOREIGN KEY REFERENCES TipoCliente(idTipoCliente) NOT NULL,
	estado				INT NOT NULL,

	)
GO
Insert Into Cliente values ('23568978','JORGE','BUSTAMANTE','CASTRO',1,1)
Insert Into Cliente values ('40568988','CARLOS','ROMERO','SALVATIERRA',2,1)
Insert Into Cliente values ('30568444','ENRIQUE','CHAVEZ','HUIZA',3,1)
GO
Select * from Cliente
GO
--**********************************************************************************--

CREATE TABLE Recepcionista
	(
	idRecepcionista		INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	nrodocumento		VARCHAR(10) NOT NULL,
	nombre				VARCHAR(50) NOT NULL,
	apellidoPaterno		VARCHAR(50) NOT NULL,
	apellidoMaterno		VARCHAR(50) NOT NULL,
	estado				INT NOT NULL

	)
GO
Insert Into Recepcionista values ('66568978','LAURA','GONZALEZ','LEYVA',1)
GO
Select * from [dbo].[Recepcionista]
GO
--**********************************************************************************--

CREATE TABLE Entrenador
	(
	idEntrenador		INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	nrodocumento		VARCHAR(10) NOT NULL,
	nombre				VARCHAR(50) NOT NULL,
	apellidoPaterno		VARCHAR(50) NOT NULL,
	apellidoMaterno		VARCHAR(50) NOT NULL,
	estado				INT NOT NULL

	)
GO
Insert Into Entrenador values ('00568978','LEN','TORRES','VALDIVIA',1)
Insert Into Entrenador values ('00568978','MATEO','JARA','CARRASCO',1)
GO
Select * from Entrenador
GO
--**********************************************************************************--

CREATE TABLE Matricula
	(
	idMatricula			INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	idCliente			INT FOREIGN KEY REFERENCES Cliente(idCliente) NOT NULL,
	idRecepcionista		INT FOREIGN KEY REFERENCES Recepcionista(idRecepcionista) NOT NULL,
	idEntrenador		INT FOREIGN KEY REFERENCES Entrenador(idEntrenador) NOT NULL,
	fecha				datetime,
	estado				INT NOT NULL

	)
GO
Insert Into Matricula values (1,1,1,GETDATE(),1)
GO
Select * from Matricula
GO
--**********************************************************************************--

CREATE TABLE Asistencia
	(
	idAsistencia		INT IDENTITY(1,1) PRIMARY KEY NOT NULL,
	idCliente			INT FOREIGN KEY REFERENCES Cliente(idCliente),
	fechaInicio			datetime NOT NULL,
	fechaFinal			datetime NULL,
	estado				INT NOT NULL
	
	)
GO
Insert Into Asistencia values (1,GETDATE()-1,GETDATE()-1,1)
Insert Into Asistencia values (1,GETDATE(),GETDATE(),1)
GO
Select * from Asistencia
GO
