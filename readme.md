# AWS Starter for Ecosystems

This is a PHP project that is designed to get you up and running with various Amazon Web Services quickly and Easily.

## API Clients Demos
* Comprehend -> Text Analysis
* Polly -> Text to Speech


### Prerequisites

**PHP Environment**
 
You will need to have a PHP environment setup. If you are a Mac I would recommend setting up Laravel Valet. You can see the docs here:
[Laravel Valet Docs](https://laravel.com/docs/5.7/valet)
or you can watch a tutorial here:
[CodeTime Laravel Valet](https://codetime.io/series/laravel-valet)

If you are running on Windows you may want to try WAMP or MAMP

**Composer**

We will need composer to install the necessary PHP packages
[Documentation for composer](https://getcomposer.org/)
or you can watch a tutorial here: 
[CodeTime Setting up Composer](https://codetime.io/series/getting-started-with-composer)

**Amazon Web Services Account**

You can use your preexisting account or create and account just for this.
[Get AWS account](https://aws.amazon.com/)

Once you have an account you will need to create an API Key and Secret you can do that by going here:
[Create AWS User](https://console.aws.amazon.com/iam/home?region=us-west-2#/users)

## Installation

To get started you will need to download this project. Then change the .env.example to just .env. The .env file is where you setup your AWS keys. If you are using Git on your project remember to not check in you env file and add it to your .gitignore. 

Now that you have that setup you will need navigate to your project folder via terminal and run the following to install the PHP composer packages necessary for AWS.

```
composer install
```

## Getting Started
This project is broken down into various folders based on what you need to do. For example if you want to do AWS Comprehend then you look in the Comprehend folder. If you want Polly then the polly folder. Each folder has an index.php file that will either show you to use that service or will have multiple files for the different services.

**Open the file and running it**
To run the code again you need to run it on your PHP server enviroment. If you are using Laravel Valet it will be something like:
```
http://awsc.test/comprehend
```
If you are running it on MAMP,WAMP,XAMP if would be something like this:
 ```
http://localhost:8000/comprehend
```




