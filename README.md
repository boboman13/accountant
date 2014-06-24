Accountant
=====

> Accountant is a Laravel application with a simple goal; keep track of your running budget / expense / income tallies.

### Screenshots
[<img src="http://upimg.me/c524ce60a7f14a1eedb77873ab83a086.png" />](http://upimg.me/c524ce60a7f14a1eedb77873ab83a086.png)&nbsp;[<img src="http://upimg.me/f4c943975e887323ba01b97144bfd579.png" />](http://upimg.me/f4c943975e887323ba01b97144bfd579.png)&nbsp;

**Note**: Accountant does not currently provide security against XSS attacks among other webernet security attacks. It is *not recommended* to keep it on a public facing server.

### Installation
```bash
$ git clone https://github.com/boboman13/accountant && cd accountant
```
At this point, go ahead and initiate the database by doing the following: (You can substitute user and password field for anything, according to your install)
```bash
$ mysql -u root -p < init.sql
```
That takes in all the commands from `init.sql` and puts them into a new database called `accountant`.


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