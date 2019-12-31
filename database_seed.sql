# Adam's user
insert into users (name, email, password, created_at, updated_at) values ('Adam Burgett', 'asburgett@gmail.com', '$2y$10$Ln0FG9rjRuZEbUtHqYbcx.9JhcvVfhKNyOKISNtZlYco2yxODh3qy', '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Organizations
insert into organizations (name, created_at, updated_at) values ('Enervise', '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Clients
insert into clients (name, status, created_at, updated_at) values ('Hillside Technologies', 1, '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Client Sites
insert into client_sites (client_id, name, status, created_at, updated_at) values (1, '6689 Golfway Dr', 1, '2019-12-24 13:56:01', '2019-12-24 13:56:01');

select cl.name, cl.status, cls.name, cls.status
from clients cl
inner join client_sites cls on cl.id = cls.client_id;

select * from users where email = 'asburgett@gmail.com';