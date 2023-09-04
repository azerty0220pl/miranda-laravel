CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
    full_name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    phone VARCHAR (20) NOT NULL,
    joined DATE NOT NULL,
    des VARCHAR (1000) NOT NULL,
    pass VARCHAR(50) NOT NULL,
    state BOOLEAN NOT NULL,
    PRIMARY KEY(id),
    UNIQUE (full_name)
);

#DROP TABLE users;

CREATE TABLE messages (
    id int NOT NULL AUTO_INCREMENT,
    full_name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    phone VARCHAR (20) NOT NULL,
    message_subject VARCHAR (100) NOT NULL,
    message  VARCHAR (1000) NOT NULL,
    sent DATE NOT NULL,
    archived BOOLEAN DEFAULT false,
    seen BOOLEAN DEFAULT false,
    PRIMARY KEY(id)
);

#DROP TABLE messages;

CREATE TABLE rooms (
    id INT NOT NULL AUTO_INCREMENT,
    room_name VARCHAR (50) NOT NULL,
    room_type INT NOT NULL,
    des VARCHAR (1000) NOT NULL,
    cancel VARCHAR (1000) NOT NULL,
    price INT NOT NULL,
    offer INT NOT NULL,
    PRIMARY KEY(id)
);

#DROP TABLE rooms;

CREATE TABLE ammenities (
	id INT NOT NULL AUTO_INCREMENT,
	ammenitie VARCHAR (50) NOT NULL,
    PRIMARY KEY(id)
);

#DROP TABLE ammenities;

CREATE TABLE room_ammenities (
	room INT NOT NULL AUTO_INCREMENT,
    ammenitie INT,
    FOREIGN KEY (room) REFERENCES rooms(id),
    FOREIGN KEY (ammenitie) REFERENCES ammenities (id)
);

#DROP TABLE room_ammenities;

CREATE TABLE bookings (
	id INT NOT NULL AUTO_INCREMENT,
    full_name VARCHAR (50) NOT NULL,
    book_order DATE NOT NULL,
    check_in DATE NOT NULL,
    check_out DATE NOT NULL,
    request VARCHAR (50) NOT NULL,
    room INT,
    PRIMARY KEY (id),
    FOREIGN KEY (room) REFERENCES rooms (id)
);

#DROP TABLE bookings;

#CREATE USER 'wsl_root'@'localhost' IDENTIFIED BY 'password';
#GRANT ALL PRIVILEGES ON *.* TO 'wsl_root'@'localhost' WITH GRANT OPTION;
#CREATE USER 'wsl_root'@'%' IDENTIFIED BY 'password';
#GRANT ALL PRIVILEGES ON *.* TO 'wsl_root'@'%' WITH GRANT OPTION;
#FLUSH PRIVILEGES;

INSERT INTO users VALUES (
	0,
    "admin",
    "example@email.com",
    "123456789",
    '2023-08-13',
    "Some description",
    "password",
    true
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    101,
    0,
    "Some description for type 0 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    3000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    102,
    0,
    "Some description for type 0 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    3000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    103,
    0,
    "Some description for type 0 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    3000,
    10
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    104,
    0,
    "Some description for type 0 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    3000,
    20
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    105,
    0,
    "Some description for type 0 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    3000,
    50
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    106,
    1,
    "Some description for type 1 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    4000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    107,
    1,
    "Some description for type 1 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    4000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    108,
    1,
    "Some description for type 1 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    4000,
    10
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    109,
    1,
    "Some description for type 1 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    4000,
    20
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    110,
    1,
    "Some description for type 1 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    4000,
    50
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    201,
    2,
    "Some description for type 2 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    5000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    202,
    2,
    "Some description for type 2 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    5000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    203,
    2,
    "Some description for type 2 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    5000,
    10
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    204,
    2,
    "Some description for type 2 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    5000,
    20
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    205,
    2,
    "Some description for type 2 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    5000,
    50
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    206,
    3,
    "Some description for type 3 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    6000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    207,
    3,
    "Some description for type 3 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    6000,
    0
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    208,
    3,
    "Some description for type 3 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    6000,
    10
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    209,
    3,
    "Some description for type 3 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    6000,
    20
);

INSERT INTO rooms (room_name, room_type, des, cancel, price, offer) VALUES (
    210,
    3,
    "Some description for type 3 room. Probably the same for everyone, but who cares. And who reads?",
    "Some cancel policy",
    6000,
    50
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-1",
    "2023-08-3",
    "special request",
    1
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-9",
    "2023-08-11",
    "special request",
    1
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-13",
    "2023-08-17",
    "special request",
    1
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-19",
    "2023-08-21",
    "special request",
    4
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-25",
    "2023-08-27",
    "special request",
    4
);

INSERT INTO bookings (full_name, book_order, check_in, check_out, request, room) VALUES (
    "random name",
    "2023-07-27",
    "2023-08-29",
    "2023-08-31",
    "special request",
    4
);

#SELECT * FROM rooms WHERE room_type = 0 AND id != 0;
#SELECT * FROM bookings b WHERE NOT (b.id IS NULL OR b.check_in > '2023-08-20' OR b.check_out < '2023-08-14');
#SELECT * FROM rooms r LEFT JOIN (SELECT * FROM bookings b WHERE NOT (b.id IS NULL OR b.check_in > '2023-08-20' OR b.check_out < '2023-08-14')) b ON r.id = b.room WHERE b.id IS NULL;
#select * from bookings;