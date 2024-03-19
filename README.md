This is a demo of [chartello/chartello](https://github.com/chartello/chartello).

## Setup

Set up two database users. One with full access and another without any access.

Then grant the second user read-only access to the demo database.

```mysql
GRANT SELECT ON chartello_demo.* TO 'chartello_demo_read'@'%';
```

To populate the database, run:

```bash
php artisan migrate:fresh --force --seed --database=write
```

Then ensure that Laravel's scheduler is activated to restart the database daily.
