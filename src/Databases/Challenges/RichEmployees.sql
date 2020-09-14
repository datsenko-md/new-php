-- Таблица employees содержит всех работников включая их менеджеров. Каждый
-- работник имеет id и колонку для id менеджера manager_id.
--
-- id	name	salary	manager_id
-- 1	Joe	70000	3
-- 2	Henry	80000	4
-- 3	Sam	60000	NULL
-- 4	Max	90000	NULL
-- solution.sql
-- Напишите SQL запрос который найдет имена всех работников, которые получают
-- больше чем их менеджеры. Если у работника нет менеджера, они не должны
-- попадать в выборку.
-- Запишите запрос в файл solution.sql.

SELECT workers.name
FROM employees AS workers
INNER JOIN employees AS managers ON workers.manager_id = managers.id
WHERE workers.salary > managers.salary;
