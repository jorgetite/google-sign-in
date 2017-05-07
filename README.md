# Google Sign-In Auth With PHP Backend Server

An example using Google Sign-In to authenticate users with a PHP backend 
server and safely identity the currently signed-in user. After a 
user successfully signs in, the user's ID token is sent to your server. Then, 
on the server, the integrity of the ID token is verified and the user's ID is 
retrieved from the sub claim of the ID token.

## Requirements

- PHP 5.6 or higher
- Composer

## Usage

### Before You begin

Make sure you have created a Google Developers Console project and client ID. 
You may find instructions on how to do it at: 
https://developers.google.com/identity/sign-in/web/devconsole-project 

### Update the Google Client ID

Open the signin.php file and update the `GOOGLE_CLIENT_ID` with your client ID.

```php
define("GOOGLE_CLIENT_ID", "YOUR_CLIENT_ID.apps.googleusercontent.com");
```

### Run the project 

After you have installed the project in your web-server, open the index.html 
page in your web browser using the corresponding URL. For example:

```
http://localhost/google-sign-in/index.html
```

Click the Google Sin-In button to see the project in action. Enjoy!
