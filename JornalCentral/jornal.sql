create database jornal;
use jornal;

CREATE TABLE  tb_adm (
  nome varchar(50) ,
  senha int(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_adm  values ("Marcos",75829);
insert into tb_adm  values ("Marcelo",50234);
insert into tb_adm  values ("Hendew",10032);
insert into tb_adm  values ("Maria",12345);

select * from tb_adm;

drop table tb_adm;

CREATE TABLE  tb_edit (
  nome varchar(50),
  senha int (5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into tb_edit values ("Marcos",00000);

select * from tb_edit;

drop table tb_edit;

CREATE TABLE  tb_pendente(
  id int (5) auto_increment primary key,
  nome varchar(50) ,
  email varchar(50),
  senha int(5) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from tb_pendente;

drop table tb_pendente;

CREATE TABLE  usuario(
  nome varchar(50) ,
  senha int(5) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

select * from usuario;

drop table usuario;


CREATE TABLE  tb_post(
	id int(4) auto_increment primary key,
  titulo varchar(1000) ,
  img varchar(100),
  texto varchar(8000)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


select * from tb_post;

drop table tb_post;

CREATE TABLE  materias (
  id int(4) auto_increment primary key,
  titulo varchar(1000) ,
  img varchar(100),
  texto varchar(8000),
  link varchar(100)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


select * from materias;

drop table materias;