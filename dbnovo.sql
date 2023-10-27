CREATE DATABASE rolloutdV2; 
USE rolloutdV2;

CREATE TABLE Tecnico(
    idTecnico INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
    StatusAtendimento VARCHAR(45),
    idAntigo INT,
    idNovo INT,
    idTecnico INT,
    idColaborador INT,
    FOREIGN KEY (idAntigo) REFERENCES Equipamento(idEquipamento),
    FOREIGN KEY (idNovo) REFERENCES Equipamento(idEquipamento),
    FOREIGN KEY (idTecnico) REFERENCES Tecnico(idTecnico),
    FOREIGN KEY (idColaborador) REFERENCES Colaborador(idColaborador)
);

insert into Tecnico values (null,'Luana',md5('12345'),'luana@infoprimers.com.br',null);
insert into Tecnico values (null,'Renato', md5('12345'),'renato@infoprimers.com.br',null);

insert into Colaborador values(null,'João Teste','joao@gmail.com','(51) 9xxxx-xxxx','xxx.xxx.xxx-xx','YYYY');

insert into Atendimento values(null,'Administrativo','Esteio','Sim','23/10/2023',null,null,null, 'Aberto', 1,2,1,1);
insert into atendimento values(null,null,null,null,null,null,null,null,'Aberto',2,null,null,1);

insert into Colaborador values(null,'Lucas','lucas@gmail.com','(51) 9xxxx-xxxx','xxx.xxx.xxx-xx','1234');

insert into Equipamento values(null,'OptiPlex 3060','VC200','ServiceTag01','Desktop','Infoprime','Ok',null);
insert into Equipamento values(null,'OptiPlex 3060','VC201','ServiceTag02','Desktop','Infoprime','Ok',null);

insert into Atendimento values(null,null,null,null,null,null,null,null,'Aberto',5,null,null,2);