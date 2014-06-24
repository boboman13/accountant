Accountant
=====

> Accountant is a Laravel application with a simple goal; keep track of your running budget / expense / income tallies.

### Installation
```bash
$ git clone https://github.com/boboman13/accountant && cd accountant
```
At this point, go ahead and log into a MySQL shell. Create a database and `use` it. Then run these table create texts:
```sql
CREATE TABLE `entries` (
	`id` int(100) NOT NULL AUTO_INCREMENT,
	`date` varchar(10) NOT NULL,
	`difference` DECIMAL(10,2) SIGNED NOT NULL,
	`description` MEDIUMTEXT NOT NULL,
	`notes` LONGTEXT,
	`invoice_id` int(100),
	PRIMARY KEY (id)
);
```

Then at this point, you need to configure your MySQL connection details. You can find these in the `app/config/database.php` file. Configure to your delight. Once completed, continue.

```bash
$ composer install
$ php artisan serve
```

This will serve the application via the built-in PHP server. It is sometimes recommended to use Nginx to serve Laravel, or it may be wanted depending on your installation; [view this link](https://www.digitalocean.com/community/tutorials/how-to-install-laravel-with-nginx-on-an-ubuntu-12-04-lts-vps) for a tutorial.

### Restrictions
These restrictions are due to the database schema. Edit the schema to change.

* It can handle entries of up to $10,000,000 a piece.
* It can handle up to 10^100 entries (same with invoice IDs).