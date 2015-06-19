drop database roadtrippin_usa;
create database roadtrippin_usa;
use roadtrippin_usa;

create table user (
	id int auto_increment primary key,
	first_name varchar(255),
	last_name varchar(255),
	username varchar(255),
	email varchar(255),
	password varchar(255),
	user_img varchar(255),
	remember_token varchar(255),
    created_at datetime,
    updated_at datetime																
);

INSERT INTO user (first_name, last_name, username, email, password, user_img)
	values
	("Scott", "Brau", "Three30O", "scottbrau30@gmail.com", "$2y$10$8CQc2GkUEp2wa/xQ7p8WNeuYkj7PhddA3NDG6J4HLpY.8McjABHu.", "images/scott.jpg");


create table trip (
	trip_id int auto_increment primary key,
	user_id int,
	name varchar(255),
	`date` date,
	description varchar(255),
	origin_city varchar(255),
	origin_state varchar(255),
	destination_city varchar(255),
	destination_state varchar(255),
	created_at datetime,
    updated_at datetime	
);

INSERT INTO trip (user_id, name, `date`, description, origin_city, origin_state, destination_city, destination_state)
	values 
	(1, "Moved from Omaha to Portland", "2014-07-29", "My move to Oregon began on a Wednesday ...", "Omaha", "NE", "Portland", "OR");
	-- (1, "Pick Up My New Car", "2014-01-25", "Travelling with my friend Seth ..." "Jacksonville", "NC", "Omaha", "NE");


create table trip_image (
	trip_image_id int auto_increment primary key,
	trip_id int,
	img_path varchar (255),
	lattitude float,
	longitude float,
	`date` datetime,
	description varchar (255),
	created_at datetime,
    updated_at datetime	
);

INSERT INTO trip_image (trip_id, img_path, lattitude, longitude, `date`, description)
	values
	(1, "pic1.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding donkeys in Arizona"),
	(1, "pic2.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding monkeys in Arizona"),
	(1, "pic3.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding hippos in Arizona"),
	(1, "pic4.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding squirrels in Arizona"),
	(1, "pic5.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding cats in Arizona"),
	(1, "pic6.jpg", 74.27976683, -96.8979772, "2015-06-02", "Riding scorpions in Arizona");
	