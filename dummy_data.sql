use primerdb;
set names utf8;

insert into primerdb_primers (primer_name, forward_or_reverse, primer_seq, primer_seq_size, annealing_temp, date_creation, date_modification, notes, timestamp) values
("COI_1", "F", "GGTACAAACTCTAGATATGA", "20", "50", now(),now(),"notes",now());
