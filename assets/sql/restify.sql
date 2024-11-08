DROP TABLE IF EXISTS restaurants;
DROP TABLE IF EXISTS owners;

CREATE TABLE owners (
                        id_owner INT NOT NULL AUTO_INCREMENT,
                        username TEXT NOT NULL,
                        password VARCHAR(255) NOT NULL,
                        PRIMARY KEY(id_owner)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE restaurants (
                             id_restaurant INT NOT NULL AUTO_INCREMENT,
                             name TEXT NOT NULL,
                             localisation TEXT NOT NULL,
                             opens TIME NOT NULL,
                             close TIME NOT NULL,
                             status BOOLEAN,
                             phone TEXT,
                             email TEXT,
                             website TEXT,
                             image TEXT,
                             category TEXT NOT NULL,
                             id_owner INTEGER NOT NULL,
                             PRIMARY KEY(id_restaurant),
                             FOREIGN KEY(id_owner) REFERENCES owners(id_owner)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

