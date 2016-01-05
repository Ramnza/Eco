## Eco - A PHP Framework

Eco is a light, ready to use, [PHP](https://php.net) Framework. It has the core things you'll need to start developing your *Server Side Web App*.

With a low need of configuration is close to a *just upload and develop* framework.

***

## Requirements

What are the requirements of Eco? The requirements of this PHP Framework are really simple:

* PHP Versión: 5.3+.
* Apache's Mod_Rewrite module activated.

***

## Configuration

Eco is configure-friendly so there's just a few things you need to change to get ready and put your hands on developing your app.

### Configuring the App Routes

To start configuring your own *App Routes* you just need to access the following library: `lib.Router.php` and in the *Method* called `AppRoutes()` you'll find the following `Array`:

    $this->ColeccionRutas = [
        'index' => [ 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
    ];

Let's say you want to create a route for a view that will be used for your users profile. We can handle it this way:

    $this->ColeccionRutas = [
        'index' => [ 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
        'user' => [ 'argumentos' => [ 'titulo' => 'User Profile' ] ]
    ];

And that's all folks, your route is now ready to be used but there's a last thing to prepare because the route is defined but... Which view will it take? At this moment: none. We need to head to `Views` folder and create a *View* called `view.user.php` and fill it with your `HTML` and `PHP`.
