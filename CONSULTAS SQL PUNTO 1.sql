--	Los usuarios que tengan el rol 1 y 2.

SELECT 
u.*
FROM users AS u WHERE u.idRol IN (1,2);


--	Los permisos que se tienen del rol 1

SELECT 
p.*
FROM permisos AS p
JOIN rol_permisos AS rp ON rp.idPermiso = p.id
WHERE rp.idRol = 1;


--	Los usuarios y el rol que tienen el permiso 2

SELECT 
u.*,
r.nombre AS rol
FROM users AS u 
JOIN rols AS r ON r.id = u.idRol
JOIN rol_permisos AS rp ON rp.idRol = r.id
WHERE rp.idPermiso = 2;


