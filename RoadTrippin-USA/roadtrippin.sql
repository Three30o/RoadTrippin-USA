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
	("Scott", "Brau", "Three30O", "scottbrau30@gmail.com", "password", "images/pacific_city.jpg");


create table trip (
	trip_id int auto_increment primary key,
	user_id int,
	name varchar(255)
);

INSERT INTO trip (user_id, name)
	values 
	(1, "Omaha, NE to Portland, OR"),
	(1, "Jacksonville, NC to Omaha, NE");


create table waypoint (
	waypoint_id int auto_increment primary key,
	trip_id int,
	`order` int,
	lattitude float,
	longitude float
);

INSERT INTO waypoint (trip_id, `order`, lattitude, longitude)
	values
	(1, 1, 74.27976683, -96.8979772);

create table trip_image (
	trip_image_id int auto_increment primary key,
	waypoint_id int (11),
	img_path varchar (255),
	title varchar (255),
	date datetime,
	lattitude float,
	longitude float
);

INSERT INTO trip_image (waypoint_id, img_path, title, date, lattitude, longitude)
	values
	(1, "image/path", "Riding donkeys in Delaware", "2015-06-02", 74.27976683, -96.8979772);

