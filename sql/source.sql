#---------------------------------------------------------
DROP TABLE IF EXISTS source;
create table source (
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	categoria varchar(50),
	descripcion varchar(100),
	contenido longtext,
	PRIMARY KEY (id)
);
alter table source add index categoria(categoria);
alter table source add index descripcion(descripcion);
#---------------------------------------------------------
