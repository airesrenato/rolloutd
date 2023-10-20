CREATE TABLE Tecnico(
    idTecnico INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    Nome VARCHAR(45),
    Senha VARCHAR(256),
    Email VARCHAR(45),
    Foto VARCHAR(100)
);

CREATE TABLE Colaborador(
    idColaborador INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Responsavel VARCHAR(45),
    Email VARCHAR(45),
    Telefone VARCHAR(45),
    CPF VARCHAR(45),
    Matricula VARCHAR(45)
);

CREATE TABLE Equipamento(
    idEquipamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Modelo VARCHAR(45),
    VC VARCHAR(45),
    ServiceTag VARCHAR(45),
    Tipo VARCHAR(45),
    Localizacao VARCHAR(45),
    Situacao VARCHAR(45),
    Observacao VARCHAR(45)
);

CREATE TABLE Acessorio(
    idAcessorio INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Tipo VARCHAR(45),
    Marca VARCHAR(45),
    idEquipamento INT,
    FOREIGN KEY (idEquipamento) REFERENCES Equipamento (idEquipamento)
);
CREATE TABLE Avaria(
    idAvaria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Descricao VARCHAR(450),
    Foto VARCHAR(100),
    idEquipamento INT,
    FOREIGN KEY (idEquipamento) REFERENCES Equipamento(idEquipamento)
);

CREATE TABLE Atendimento(
    idAtendimento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Departamento VARCHAR(45),
    Localidade VARCHAR(45),
    Backup VARCHAR(45),
    Dia VARCHAR(45),
    Termo VARCHAR(100),
    FotoColaboradorEquipamento VARCHAR(100),
    FotoLogado VARCHAR(100),
    idAntigo INT,
    idNovo INT,
    idTecnico INT,
    idColaborador INT,
    FOREIGN KEY (idAntigo) REFERENCES Equipamento(idEquipamento),
    FOREIGN KEY (idNovo) REFERENCES Equipamento(idEquipamento),
    FOREIGN KEY (idTecnico) REFERENCES Tecnico(idTecnico),
    FOREIGN KEY (idColaborador) REFERENCES Colaborador(idColaborador)
);
