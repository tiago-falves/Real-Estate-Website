DROP TABLE IF EXISTS Image;
DROP TABLE IF EXISTS Person;
DROP TABLE IF EXISTS Owner;
DROP TABLE IF EXISTS Home;
DROP TABLE IF EXISTS Location;
DROP TABLE IF EXISTS Reservation;
DROP TABLE IF EXISTS Photo;
DROP TABLE IF EXISTS Comment;
DROP TABLE IF EXISTS Reply;
DROP TABLE IF EXISTS Message;

CREATE TABLE Image(
    id INTEGER PRIMARY KEY,
    path TEXT NOT NULL UNIQUE
    );

CREATE TABLE Person(
    id INTEGER PRIMARY KEY,
    userName TEXT NOT NULL UNIQUE,
    profilePicture INTEGER REFERENCES Image,
    password_hash TEXT NOT NULL,
    title TEXT,
    userLocation Integer REFERENCES Location,
    userDescription TEXT,
    rating INTEGER
    );

CREATE TABLE Home(
    id INTEGER PRIMARY KEY,
    title TEXT,
    price FLOAT NOT NULL,
    description TEXT,
    rating FLOAT,
    type TEXT NOT NULL,
    bedrooms TEXT NOT NULL,
    address TEXT NOT NULL,
    location INTEGER REFERENCES Location,
    owner INTEGER REFERENCES Person,
    CONSTRAINT type_name CHECK (
        type = 'House'
        OR type = 'Apartment'
        ),
    CONSTRAINT bedrooms_type CHECK (
        bedrooms = 'T1' OR
        bedrooms = 'T2' OR
        bedrooms = 'T3' OR
        bedrooms = 'T4' OR
        bedrooms = 'T5+'
        )
    );

CREATE TABLE Location(
    id INTEGER PRIMARY KEY,
    name TEXT UNIQUE NOT NULL
    );

CREATE TABLE Reservation(
    id INTEGER PRIMARY KEY,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    userID INTEGER REFERENCES Person(id),
    home INTEGER REFERENCES Home(id)
    );

CREATE TABLE Photo(
    id INTEGER PRIMARY KEY,
    approved BOOLEAN DEFAULT FALSE,
    image INTEGER REFERENCES Image,
    uploader_id  INTEGER REFERENCES Person(id),
    home INTEGER REFERENCES Home(id)
    );

CREATE TABLE Comment(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    commenter_id INTEGER REFERENCES Person(id),
    home_id INTEGER REFERENCES Home(id)
    );

CREATE TABLE Reply(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    comment INTEGER REFERENCES comment(id),
    userID INTEGER REFERENCES Person
    );

CREATE TABLE Message(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    senderID INTEGER REFERENCES Person(id),
    receiverID INTEGER REFERENCES Person(id)
    );




INSERT INTO Person (id, username, profilePicture, password_hash, title, userLocation,userDescription,rating) VALUES (1, 'JoaoRocha',1, 'password1', 'Presidente', 1, 'Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia',4);
INSERT INTO Person (id, username, profilePicture, password_hash, title, userLocation,userDescription,rating) VALUES (2, 'TiagoAlves',2, '123456789', 'Presidente', 2, 'Etiam massa magna, condimentum eu facilisis sit amet, dictum ac purus. Curabitur semper nisl vel libero pulvinar ultricies. Proin dignissim dolor nec scelerisque bibendum. Maecenas a sem euismod, iaculis erat id, convallis arcu. Ut mollis, justo vitae suscipit imperdiet, eros dui laoreet enim, fermentum posuere felis arcu vel urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia',4);

