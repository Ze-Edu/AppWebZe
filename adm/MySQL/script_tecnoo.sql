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
data_finalizcao_chamado datetime default current_timestamp,
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


select * from tbcliente;
select * from tbtipos;
select * from tbchamados;
select * from tbusuarios;
select * from tbendereco;