CREATE TABLE Telefono(
    idTelefono INT PRIMARY KEY,
    numero INT,
    CONSTRAINT FK_PERSONA_TELEFONO FOREIGN KEY(idPersona) REFERENCES Persona(idPersona)
)

CREATE TABLE Persona(
    idPersona INT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    direccion VARCHAR(50),
    edad VARCHAR(50),
    nacionalidad VARCHAR(50),
    correo VARCHAR(50)
)

CREATE TABLE Administrador(
    idAdministrador INT PRIMARY KEY,
    CONSTRAINT FK_PERSONA_ADMINISTRADOR FOREIGN KEY(idPersona) REFERENCES Persona(idPersona)

)

CREATE TABLE Instructor(
    idInstructor INT PRIMARY KEY,
    CONSTRAINT FK_PERSONA_INSTRUCTOR FOREIGN KEY(idPersona) REFERENCES Persona(idPersona),
    CONSTRAINT FK_INSTRUCTOR_SUELDO FOREIGN KEY(idPersona) REFERENCES Persona(idPersona)
)

CREATE TABLE Sueldo(
    idSueldo INT PRIMARY KEY,
    sueldoTotal INT
)

CREATE TABLE Alumno(
    idAlumno INT PRIMARY KEY,
    CONSTRAINT FK_PERSONA_ALUMNO FOREIGN KEY(idPersona) REFERENCES Persona(idPersona)
)

CREATE TABLE Matricula(
    idMatricula INT PRIMARY KEY,
    CONSTRAINT FK_ALUMNO_MATRICULA FOREIGN KEY(idAlumno) REFERENCES Alumno(idAlumno)
)

CREATE TABLE Curso(
    idCurso INT PRIMARY KEY,
    CONSTRAINT FK_ADMINISTRADOR_CURSO FOREIGN KEY(idAdministrador) REFERENCES Administrador(idAdministrador),
    CONSTRAINT FK_INSTRUCTOR_CURSO FOREIGN KEY(idInstructor) REFERENCES Instructor(idInstructor),
    CONSTRAINT FK_MATRICULA_CURSO FOREIGN KEY(idMatricula) REFERENCES Matricula(idMatricula)
)

CREATE TABLE TipoCurso(
    idTipoCurso INT PRIMARY KEY,
    descripcion VARCHAR(50),
    CONSTRAINT FK_CURSO_TIPOCURSO FOREIGN KEY(idCurso) REFERENCES Curso(idCurso)
)