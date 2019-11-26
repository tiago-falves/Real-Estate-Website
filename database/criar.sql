DROP TABLE IF EXISTS Image;
DROP TABLE IF EXISTS User;
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

CREATE TABLE User(
    id INTEGER PRIMARY KEY,
    user_name TEXT NOT NULL UNIQUE,
    image INTEGER REFERENCES Image,
    password_salt TEXT NOT NULL,
    password_hash TEXT NOT NULL
    );

CREATE TABLE Owner(
    id INTEGER REFERENCES User
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
    location REFERENCES Location,
    owner REFERENCES Owner,
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
    user REFERENCES User,
    home REFERENCES Home
    );

CREATE TABLE Photo(
    id INTEGER PRIMARY KEY,
    approved BOOLEAN DEFAULT FALSE,
    image INTEGER REFERENCES Image,
    uploader REFERENCES User,
    home REFERENCES Home
    );

CREATE TABLE Comment(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    commenter REFERENCES User,
    home REFERENCES Home
    );

CREATE TABLE Reply(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    comment REFERENCES comment,
    user REFERENCES User
    );

CREATE TABLE Message(
    id INTEGER PRIMARY KEY,
    date DATE NOT NULL,
    hour TIME NOT NULL,
    content TEXT NOT NULL,
    sender REFERENCES User,
    receiver REFERENCES User
    );
