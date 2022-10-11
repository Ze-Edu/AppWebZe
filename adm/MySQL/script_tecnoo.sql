-- create database tecnoodb; 
-- use tecnoodb;

-- estrutura da tabela usuario

create table tbusuarios(
id_usuario int(11) primary key not null auto_increment,
nome_usuario varchar(30) not null,
email_usuario varchar(32) not null unique,
id_nivel_usuario int(11) not null,
login_usuario varchar(30) not null,
senha_usuario varchar(255) not null,
foto_usuario varchar(60) default null
)engine = innoDB default charset = UTF8;

-- estrutura da tabela cliente
create table tbnivel(
id_nivel int(11) primary key auto_increment not null,
nome_nivel varchar(20) not null
)engine=InnoDB default charset=utf8;

-- Inserindo dados da tabela tbnivel

insert into tbnivel (id_nivel, nome_nivel) 
values (1,'Supervisor'),(2,'Tecnico II'),(3,'Tecnico I'),(4,'Desligado');

-- estrutura da tabela cliente

create table tbcliente(
id_cliente int(11) not null primary key auto_increment,
nome_cliente varchar(60) not null,
cpf_cliente varchar(11) not null unique,
telefone_cliente varchar(14) not null,
cnpj_cliente varchar(14) null,
razao_social_cliente varchar(30) null,
id_tipo_cliente int(11) not null,
email_cliente varchar(32) not null unique,
senha_cliente varchar(255) not null
)engine = innoDB default charset = UTF8;

-- estrutura da tabela tipos cliente

create table tbtipos(
id_tipo int(11) primary key auto_increment,
nome_tipo varchar(20) not null
)engine = innoDB default charset = UTF8;

-- Inserindo dados da tabela tbnivel
insert into tbtipos(id_tipo,nome_tipo) 
values(1,'Pessoa Fisica'),(2,'Pessoa Juridica');

-- estrutura da tabela planos

create table tbplanos(
id_plano_planos int(11) not null primary key auto_increment,
nome_plano_planos varchar(15) not null,
valor_plano decimal(10,2) not null,
id_cliente_plano int(11) not null
)engine = innoDB default charset = UTF8;

-- estrutura da tabela endereços

create table tbendereco(
id_endereco int(11) primary key auto_increment,
id_cliente_endereco int(11) not null,
cep_endereco varchar(8) not null,
logradouro_endereco varchar(30) not null,
num_endereco varchar(20) not null,
complemento_endereco varchar(30) null,
bairro_endereco varchar(30) not null,
cidade_endereco varchar(30) not null,
estado_endereco varchar(30) not null
)engine = innoDB default charset = UTF8;

-- estrutura da tabela chamados

create table tbchamados(
id_chamado int(11) not null primary key auto_increment,
protocolo_chamado varchar(255) not null,
descri_chamado varchar(255) not null,
titulo_chamado varchar(32) not null,
id_cliente_chamado int(11) not null,
data_abertura_chamado datetime default current_timestamp,
data_finalizacao_chamado datetime null,
data_limite_chamado date,
foto_erro_chamado varchar(60) null,
status_chamado varchar(20) null,
prioridade_chamado varchar(20) null,
local_atend_chamado varchar(30) null

)engine = innoDB default charset = UTF8;

CREATE TABLE IF NOT EXISTS `tecnoodb`.`hist_atend` (
	`id_hist_atend` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `id_chamado_hist_atend` INT(11) NOT NULL,
    `id_usuario_hist_atend` INT(111) NOT NULL,
	`comentario_hist` VARCHAR(255) NOT NULL,  
	`data_historico_chamado` DATETIME NOT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

-- restrição (constraint) da tabela tbusuario
alter table tbusuarios
add constraint fk_nivel_usuario foreign key (id_nivel_usuario)
references tbnivel (id_nivel) on delete no action  on update no action;

-- restrição (constraint) da tabela cliente

alter table tbcliente add constraint fk_tipo_cliente foreign key (id_tipo_cliente)
references tbtipos (id_tipo) on delete no action on update no action;

-- restrição (constraint) da tabela endereço

alter table tbendereco add constraint fk_endereco_cliente foreign key (id_cliente_endereco)
references tbcliente (id_cliente) on delete no action on update no action;

-- restrição (constraint) da tabela chamado

alter table tbchamados add constraint fk_cliente_chamado foreign key (id_cliente_chamado)
references tbcliente (id_cliente) on delete no action on update no action;

-- restrição (constraint) da tabela hist_atend/tbchamados
alter table hist_atend add constraint fk_id_chamado foreign key (id_chamado_hist_atend)
references tbchamados (id_chamado);

-- restrição (constraint) da tabela hist_atend/tbusuarios
alter table hist_atend add constraint fk_id_usuario foreign key (id_usuario_hist_atend)
references tbusuarios (id_usuario);



------PROCEDURES--------

--PROCEDURE ADD CLIENTE
delimiter |
CREATE PROCEDURE `sp_cliente_insert`
( `:nome` varchar(60), `:cpf_cliente` varchar(11), `:telefone_cliente` varchar(14), `:cnpj_cliente` varchar(14), `:razao_social_cliente` varchar(30), `:id_tipo` int(11), `:email_cliente` varchar(32), `:senha_cliente` varchar(255) )

BEGIN
insert into tbcliente (nome_cliente, cpf_cliente, telefone_cliente, cnpj_cliente, razao_social_cliente, id_tipo_cliente, email_cliente, senha_cliente) values (`:nome`, `:cpf_cliente`, `:telefone_cliente`, `:cnpj_cliente`, `:razao_social_cliente`,`:id_tipo`,`:email_cliente`,`:senha_cliente`);

select * from tbcliente where id_cliente = (select @@identity);
END
|

--PROCEDURE ADD USUARIO
delimiter |
CREATE PROCEDURE `sp_user_insert`( `:nome` varchar(30), `:email` varchar(32), `:id_nivel` int(11), `:login` varchar(30), `:senha` varchar(255), `:foto` varchar(60))
BEGIN
insert into tbusuarios (nome_usuario, email_usuario, id_nivel_usuario, login_usuario, senha_usuario, foto_usuario) values (`:nome`, `:email`, `:id_nivel`, `:login`, `:senha`,`:foto`);

select * from tbusuarios where id_usuario= (select @@identity);
END
|

--PROCEDURE ADD CHAMADO
delimiter |
CREATE PROCEDURE `sp_chamado_insert`(
`:protocolo` varchar(255),
`:descricao` varchar(255),
`:titulo` varchar(32),
`:id_cliente` int(11),
`:data_abertura` datetime,
`:data_limite` date,
`:foto_erro` varchar(60),
`:status` varchar(20),
`:prioridade` varchar(20),
`:local_atend` varchar(30)
)
BEGIN
insert into tbchamados (protocolo_chamado, descri_chamado, titulo_chamado, id_cliente_chamado, data_abertura_chamado, data_limite_chamado, foto_erro_chamado, status_chamado, prioridade_chamado, local_atend_chamado)
values (`:protocolo`, `:descricao`, `:titulo`, `:id_cliente`, `:data_abertura`,`:data_limite`,`:foto_erro`,`:status`,`:prioridade`,`:local_atend`);
select * from tbchamados where id_chamado = (select @@identity);
END
|

-- Procedure nivel

delimiter |
CREATE PROCEDURE `sp_nivel_insert`
( `:nome` varchar(20))

BEGIN
insert into tbnivel (nome_nivel) values (`:nome`);

select * from tbnivel where id_nivel = (select @@identity);
END
|




