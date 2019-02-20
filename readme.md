# AWS Starter for Ecosystems

This is a PHP project that is designed to get you up and running with various Amazon Web Services quickly and Easily.

## API Clients Demos
* Comprehend -> Text Analysis
* Polly -> Text to Speech


### Prerequisites

You will need to have a PHP environment setup. If you are a mac I would recommend setting up Laravel Valet. You can see the docs here:
[Laravel Valet Docs](https://laravel.com/docs/5.7/valet)

or you can watch a tutorial here:
[CodeTime Laravel Valet](https://codetime.io/series/laravel-valet)

You will also need to have composer setup.
[Documentation for composer](https://getcomposer.org/)

or you can watch a tutorial here: 

[CodeTime Setting up Composer](https://codetime.io/series/getting-started-with-composer)



## Getting Started

To get started you will need to download this project. Then change the .env.example to just .env. The .env file is where you are going to setup you AWS keys. If you are using Git on your project remember to not check in you env file and add it to your .gitignore. 

Now that you have that setup you will need navigate to your project folder via terminal and run the following to install the PHP composer packages necessary for AWS.

```
composer install
```

