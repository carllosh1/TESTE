create DATABASE db_sa02_DSW;

USE db_sa02_DSW;

CREATE TABLE tbl_paciente(
	id_paciente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_paciente varchar(50) not null,
    convenio_paciente varchar(50) not null,
    dataCadastro_paciente varchar(11) not null,
    rua_paciente varchar(80) not null,
    numeroRua_paciente INT not null,
    bairro_paciente varchar(50) not null,
    complemento_paciente varchar(50) not null,
    lograduro_paciente varchar(50) not null,
    cep_paciente char(8) not null,
    email_paciente varchar(60) not null,
    telefoneFixo_paciente varchar(15) not null,
    celular_paciente varchar(15) not null,
    telefone_paciente varchar(15) not null
);

CREATE TABLE tbl_medico(
	crm_medico varchar(20) NOT NULL PRIMARY KEY,
    nome_medico varchar(50) not null,
    dataCadastro_medico varchar(11) not null,
    rua_medico varchar(80) not null,
    numeroRua_medico INT not null,
    bairro_medico varchar(50) not null,
    complemento_medico varchar(50) not null,
    lograduro_medico varchar(50) not null,
    cep_medico char(8) not null,
    email_medico varchar(60) not null,
    telefoneFixo_medico varchar(15) not null,
    celular_medico varchar(15) not null,
    telefone_medico varchar(15) not null
);

CREATE TABLE tbl_convenio(
	CNPJ_convenio varchar(20) NOT NULL PRIMARY KEY,
    dataCadastro_convenio varchar(11) not null,
    nomeFantasia_convenio varchar(50) not null,
    nomeEmpresa_convenio varchar(50) not null,
    email_convenio varchar(60) not null,
    nomeContato_convenio varchar(50) not null,
    homePage_convenio varchar(50) not null,
    telefone2_covenio varchar(15) not null,
    telefone1_covenio varchar(15) not null

);

CREATE TABLE tbl_especialidade(
	codigo_especialidade int auto_increment NOT NULL PRIMARY KEY,
	dataCadastro_especialidade varchar(11) not null,
    nome_especialidade varchar(50) not null
    
);
CREATE TABLE tbl_procedimento(
	codigo_procedimento int  NOT NULL PRIMARY KEY,
	dataCadastro_procedimento varchar(11) not null,
    nome_procedimento varchar(50) not null,
    valor_procedimento DECIMAL(8,2) not null,
    genero_procedimento varchar(20) not null,
    exececao_procedimento varchar(50)
);
CREATE TABLE tbl_padroes(
	id_padroes	int auto_increment NOT NULL PRIMARY KEY,
    dataCadastro_padrao varchar(11) not null,
    tempo_padrao varchar(5) not null,
    inicio_padroes varchar(5)  not null,
	fim_padroes varchar(5) not null,
    diasFuncionamento_padroes varchar(255) not null
);


