# Eloquent: 
> is the database ORM, is able to handle many different drivers of databases  

## Events & Listeners:

> `php artisan make:event NewUserHasRegisteredEvent`

Manually create the listenrs...
> `php artisan make:listener WelcomeNewUserListener`
|| register the listeners first in the EventServiceProvider Class and fire this command.
> `php artisan event:generate`