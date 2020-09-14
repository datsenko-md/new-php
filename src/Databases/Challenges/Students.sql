-- Даны следующие таблицы:
--
-- universities
--
-- id	name
-- 1	name1
-- 2	name2
-- 3	name3
-- students
--
-- id	name	university_id
-- 1	vASYA	1
-- 2	petya	2
-- 3	misha	2
-- 4	anna	3
-- solution.sql
-- Напишите SQL запрос который найдет имена всех студентов из университета с
-- именем name2. Это значит, что в запросе нужно опираться именно на имя
-- университета, а не делать прямую выборку по id.
-- Запишите запрос в файл solution.sql.

SELECT students.name
FROM students
JOIN universities ON students.university_id = universities.id
WHERE universities.name = 'name2';
