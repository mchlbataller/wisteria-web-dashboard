# Welcome!


This GitHub page is exclusively for company members only whose goal is to make an encryption and decryption game.

## Installation
Use the [xampp](https://www.apachefriends.org/download.html) to deploy this site.
Download all of these files then copy it on your htdocs folder.


## Database
The SQL Database should be named <b> web </b>
Then it should have a table named <b> users </b>
``` bash
+-------------+------------------+------+-----+---------+----------------+
| Field       | Type             | Null | Key | Default | Extra          |
+-------------+------------------+------+-----+---------+----------------+
| username    | varchar(128)     | YES  |     | NULL    |                |
| password    | varchar(128)     | YES  |     | NULL    |                |
| id          | int(10) unsigned | NO   | PRI | NULL    | auto_increment |
| first_name  | varchar(128)     | YES  |     | NULL    |                |
| last_name   | varchar(128)     | YES  |     | NULL    |                |
| middle_name | varchar(128)     | YES  |     | NULL    |                |
| email       | varchar(128)     | YES  |     | NULL    |                |
+-------------+------------------+------+-----+---------+----------------+
```

## Contributing
Everyone in the company are welcome to do pull requests!
Having knowledge about git is extremely encouraged, since you'd do some favors to the CEO.
