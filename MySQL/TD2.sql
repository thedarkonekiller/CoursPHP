-- 1
SELECT * FROM Cours;
--2
SELECT cours_ref FROM Cours WHERE cours_lieu = 'LYCÉE LÉONARD DE VINCI';
--3
SELECT conf_ref FROM Conferences WHERE
--4

--5

--6

--7

--8

--9
SELECT conf_titre FROM Conferences WHERE conf_titre LIKE "%PROCÉDURAL%";
--10
SELECT conf_titre FROM Conferences WHERE conf_titre LIKE "%NUM__%";
--11
SELECT COUNT(cours_ref) FROM Cours;
--12
SELECT COUNT(cours_ref) FROM Cours WHERE cours_datedebut BETWEEN '2023-02-21' AND '2023-03-18';
--13
SELECT COUNT(DISTINCT cours_lieu) FROM Cours WHERE cours_datedebut BETWEEN '2023-02-21' AND '2023-03-18';
--14
SELECT AVG(cours_montant) FROM Cours;
--15
SELECT MAX(cours_datedebut) FROM Cours;
--16
SELECT MIN(cours_datedebut) FROM Cours;
--17
SELECT MIN(seq_duree) FROM Sequences_de_cours;
--18
SELECT MAX(seq_duree) FROM Sequences_de_cours WHERE seq_date = '2023-12-23';
--19
SELECT COUNT(seq_ref) FROM Sequences_de_cours WHERE seq_duree = "06H00";
--20
SELECT SUM(seq_duree) FROM Sequences_de_cours WHERE seq_ref = "Github";