# Furry Tail Endings

This repository holds our capstone project done at [Codeup](http://codeup.com).

[Check out the site!](http://furry-tail-endings.org)

[Furry-Tail-Endings](http://furry-tail-endings.org) is a portal for recue organizations that connects pet foster parents. When foster parents are able to easily find information and connect to the community on their own, it lessens the burden on shelter staff, which allows staff to spend more time caring for animals and performing important duties, which ultimately leads to more pets being placed in homes and taken off the streets.

## Technology

Our application is built on the LAMP stack. Specifically,

**Front End**

- [Angular](https://angularjs.org/) javascript framework
- [jQuery](https://jquery.com/) javascript library
- [Dropzone.js](http://www.dropzonejs.com/) javascript library
- [Materialize](http://materializecss.com/) CSS framework

**Back End**

- [Composer](https://getcomposer.org/) for dependancy managment
- [Laravel](https://laravel.com/) MVC framework
  - [Confide](https://github.com/Zizaco/confide) for user authentication and email validation
  - [Mailgun](http://www.mailgun.com/) for sending emails
- Hosted By [Digital Ocean](https://www.digitalocean.com/)
- [Warpspeed](https://warpspeed.io/) to make deployment easy

## Code

Please note that we changed the angular interpolation symbols from the double curly brace, i.e. `{{ }}`, to `<%  %>` to not conflict with Laravel's Blade templating engine.