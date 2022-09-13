MariaDB [orgateams]> desc villes;
+-------------+---------------------+------+-----+---------+----------------+
| Field       | Type                | Null | Key | Default | Extra          |
+-------------+---------------------+------+-----+---------+----------------+
| id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| libelle     | varchar(255)        | NO   |     | NULL    |                |
| code1       | varchar(255)        | YES  |     | NULL    |                |
| code2       | varchar(255)        | YES  |     | NULL    |                |
| description | varchar(255)        | YES  |     | NULL    |                |
| pays_id     | bigint(20) unsigned | NO   | MUL | NULL    |                |
| created_at  | timestamp           | YES  |     | NULL    |                |
| updated_at  | timestamp           | YES  |     | NULL    |                |
+-------------+---------------------+------+-----+---------+----------------+
8 rows in set (0.030 sec)

MariaDB [orgateams]> select libelle,code1,code2 from villes;
+---------------+-------+-------+
| libelle       | code1 | code2 |
+---------------+-------+-------+
| Douala        |       |       |
| Yaound‚       |       |       |
| Garoua        |       |       |
| Bamenda       |       |       |
| Maroua        |       |       |
| Nkongsamba    |       |       |
| Bafoussam     |       |       |
| Ngaound‚r‚    |       |       |
| Bertoua       |       |       |
| Loum          |       |       |
| Kumba         |       |       |
| Ed‚a          |       |       |
| Kumbo         |       |       |
| Foumban       |       |       |
| Mbouda        |       |       |
| Dschang       |       |       |
| Limb‚         |       |       |
| Ebolowa       |       |       |
| Kouss‚ri      |       |       |
| Guider        |       |       |
| Meiganga      |       |       |
| Yagoua        |       |       |
| Mbalmayo      |       |       |
| Bafang        |       |       |
| Tiko          |       |       |
| Bafia         |       |       |
| Wum           |       |       |
| Kribi         |       |       |
| Buea          |       |       |
| Sangm‚lima    |       |       |
| Foumbot       |       |       |
| Bangangt‚     |       |       |
| Batouri       |       |       |
| Banyo         |       |       |
| Nkamb‚        |       |       |
| Bali          |       |       |
| Mbanga        |       |       |
| Mokolo        |       |       |
| Melong        |       |       |
| Manjo         |       |       |
| Garoua-Boula‹ |       |       |
| Mora          |       |       |
| Ka‚l‚         |       |       |
| Pitoa         |       |       |
| Tibati        |       |       |
| Ndop          |       |       |
| Akonolinga    |       |       |
| Es‚ka         |       |       |
| Mamf‚         |       |       |
| Obala         |       |       |
| Muyuka        |       |       |
| Nanga-Eboko   |       |       |
| Abong-Mbang   |       |       |
| Fundong       |       |       |
| Nkoteng       |       |       |
| Fontem        |       |       |
| Mbandjock     |       |       |
| Touboro       |       |       |
| Ngaoundal     |       |       |
| K‚kem         |       |       |
| Magba         |       |       |
| B‚labo        |       |       |
| Tonga         |       |       |
| Maga          |       |       |
| Koutaba       |       |       |
| Blangoua      |       |       |
| Guidiguis     |       |       |
| Bogo          |       |       |
| Batibo        |       |       |
| Yabassi       |       |       |
| Figuil        |       |       |
| Mak‚n‚n‚      |       |       |
| Gazawa        |       |       |
| Tchollir‚     |       |       |
+---------------+-------+-------+
74 rows in set (0.001 sec)

MariaDB [orgateams]> use appstagefinal;
Database changed
MariaDB [appstagefinal]> show tables;
+-------------------------+
| Tables_in_appstagefinal |
+-------------------------+
| administrateurs         |
| authenticate            |
| brigades                |
| chefs                   |
| compagnies              |
| couriers                |
| dotations               |
| elements                |
| failed_jobs             |
| garde_vues              |
| jobs                    |
| materiels               |
| messages                |
| migrations              |
| password_resets         |
| personal_access_tokens  |
| personnels              |
| position_personnels     |
| procedures_judiciares   |
| publications            |
| services                |
| sessions                |
| type_materiels          |
| unites                  |
| users                   |
| villes                  |
+-------------------------+
26 rows in set (0.002 sec)

MariaDB [appstagefinal]> desc villes;
+------------+---------------------+------+-----+---------+----------------+
| Field      | Type                | Null | Key | Default | Extra          |
+------------+---------------------+------+-----+---------+----------------+
| id         | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| nom        | varchar(255)        | NO   |     | NULL    |                |
| adresse    | varchar(255)        | NO   |     | NULL    |                |
| created_at | timestamp           | YES  |     | NULL    |                |
| updated_at | timestamp           | YES  |     | NULL    |                |
+------------+---------------------+------+-----+---------+----------------+
5 rows in set (0.182 sec)

MariaDB [appstagefinal]> alter table villes change adresse description text;
Query OK, 0 rows affected (1.583 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [appstagefinal]> alter table villes change nom libelle text;
Query OK, 0 rows affected (1.276 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [appstagefinal]> desc villes;
+-------------+---------------------+------+-----+---------+----------------+
| Field       | Type                | Null | Key | Default | Extra          |
+-------------+---------------------+------+-----+---------+----------------+
| id          | bigint(20) unsigned | NO   | PRI | NULL    | auto_increment |
| libelle     | text                | YES  |     | NULL    |                |
| description | text                | YES  |     | NULL    |                |
| created_at  | timestamp           | YES  |     | NULL    |                |
| updated_at  | timestamp           | YES  |     | NULL    |                |
+-------------+---------------------+------+-----+---------+----------------+
5 rows in set (0.019 sec)

MariaDB [appstagefinal]> alter table villes add code varchar(30);
Query OK, 0 rows affected (0.337 sec)
Records: 0  Duplicates: 0  Warnings: 0

MariaDB [appstagefinal]> source ville.sql
ERROR: Failed to open file 'ville.sql', error: 2
MariaDB [appstagefinal]> source villes.sql;
ERROR: Failed to open file 'villes.sql', error: 2
MariaDB [appstagefinal]> source villes.sql
ERROR: Failed to open file 'villes.sql', error: 2
MariaDB [appstagefinal]> exit
