# Adam's user
insert into users (name, email, password, created_at, updated_at) values ('Adam Burgett', 'asburgett@gmail.com', '$2y$10$Ln0FG9rjRuZEbUtHqYbcx.9JhcvVfhKNyOKISNtZlYco2yxODh3qy', '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Organizations
insert into organizations (name, created_at, updated_at) values ('Enervise', '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Divisions
insert into divisions (organization_id, name, created_at, updated_at) values (1, 'Regional Service', '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Clients
insert into clients (name, status, created_at, updated_at) values ('Hillside Technologies', 1, '2019-12-24 13:56:01', '2019-12-24 13:56:01');
insert into addresses (name, description, type, address_1, address_2, city, state_province, postal_code, country) values ('Hillside Technologies - General', 'General mailings', 1, '6689 Golfway Drive', '', 'Cincinnati', 'OH', '45239', 'USA');

# Client Sites
insert into client_sites (client_id, name, status, created_at, updated_at) values (1, '6689 Golfway Dr', 1, '2019-12-24 13:56:01', '2019-12-24 13:56:01');

# Locations
insert into locations (name, description) values ('Basement - North', 'Basement - North');
insert into locations (name, description) values ('Basement - South', 'Basement - South');
insert into locations (name, description) values ('Upstairs - North', 'Upstairs - North');
insert into locations (name, description) values ('Upstairs - South', 'Upstairs - South');
insert into locations (name, description) values ('Kitchen', 'Kitchen');

# Client Site Location
insert into client_site_location (client_site_id, location_id) values (1, 1);
insert into client_site_location (client_site_id, location_id) values (1, 2);
insert into client_site_location (client_site_id, location_id) values (1, 3);
insert into client_site_location (client_site_id, location_id) values (1, 4);
insert into client_site_location (client_site_id, location_id) values (1, 5);

/*
select cl.name, cl.status, cls.name, cls.status
from clients cl
inner join client_sites cls on cl.id = cls.client_id;

select * from users where email = 'asburgett@gmail.com';
*/