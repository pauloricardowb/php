create table aliens_abduction (
    first_name varchar(30),
    last_name varchar(30),
    when_it_happened varchar(30),
    how_long varchar(30),
    how_many varchar(30),
    alien_descption varchar(100),
    what_they_did varchar(100),
    fang_spotted varchar(10),
    other varchar(100),
    email varchar(50)
);

insert into aliens_abduction (first_name, last_name, when_it_happened, how_long, how_many, alien_descption, what_they_did, fang_spotted, other, email) values ('Sally', 'Jones', '3 dias atrás', '1 dia', 'quatro', 'verde com seus tentáculos', 'Nós só conversamos e brincamos com cachorro', 'sim', 'acho que posso ter visto seu cão ente em contato', 'sally@gregs-list.net');

select first_name, last_name from aliens_abduction

select * from aliens_abduction