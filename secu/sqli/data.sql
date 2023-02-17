USE sqli;

INSERT INTO user (usr_name, usr_password)
    VALUES
    ('admin', 'ebbc304121c692cc8dd884f7e40b374d'),
    ('toto', '93e2dff5f81db7810d3a83e98b0a0819');


INSERT INTO produit (pro_name, pro_price)
    VALUES
    ('GoPRO', '599.90'),
    ('Parachute', '7000.50');



USE compta;

INSERT INTO compte (cpt_numero)
    VALUES
    ('12345678910');