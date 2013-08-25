CREATE DATABASE primerdb CHARACTER SET utf8 COLLATE utf8_general_ci;

use primerdb;
set names utf8;

create table primerdb_primers (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    primer_name        varchar(255) DEFAULT NULL,
	forward_or_reverse varchar(255) DEFAULT NULL,
    primer_seq         varchar(255) DEFAULT NULL,
    primer_seq_size    TINYINT UNSIGNED DEFAULT NULL,
    annealing_temp     TINYINT UNSIGNED DEFAULT NULL,
    created            DATETIME DEFAULT NULL,
    modified           DATETIME DEFAULT NULL,
	notes              TEXT DEFAULT NULL,
    timestamp          DATETIME NOT NULL default '0000-00-00 00:00:00'
) default character set = utf8;

create table primerdb_amplicons (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    gene_code         varchar(255) DEFAULT NULL,
    amplicon_name     varchar(255) DEFAULT NULL,
	UNIQUE KEY amplicon_name (amplicon_name), 
    forward_primer    varchar(255) DEFAULT NULL,
    reverse_primer    varchar(255) DEFAULT NULL,
    amplicon_size     TINYINT UNSIGNED DEFAULT NULL,
    pcr_program       varchar(255) DEFAULT NULL,
	amplified         varchar(255) DEFAULT NULL,
    created           DATETIME DEFAULT NULL,
    modified          DATETIME DEFAULT NULL,
	notes             TEXT DEFAULT NULL,
    timestamp         DATETIME NOT NULL default '0000-00-00 00:00:00'
) default character set = utf8;
