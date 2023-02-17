	create database pharmacie;
	use pharmacie;

	create table roleUser(
		idRole int auto_increment primary key,
		libelle varchar (50));

	create table users(
		idUser int auto_increment primary key,
		login varchar (50) unique,
		password varchar (50),
		role int ,
		foreign key(role) references roleUser(idRole));

	create table evenements(
		idevent int auto_increment primary key,
		title varchar (50),
		date date,
		foreign key(users) references users(idUser));