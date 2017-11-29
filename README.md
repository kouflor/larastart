#Larastart

##Install

 `git clone https://github.com/miiikkeyyyy/larastart`

 `composer update`

 `php artisan migrate --seed`

## Features

### Users Module

- Registering Users (User role applied on registering)
- Login via Username
- Confirm Email Address
- List all Profiles
- View Individual Profile
- Edit Profile
- Edit Settings (updating email address forces re-verifying email).
- Change Password (requires current password).
- Deactivate Account (unable to view profile, removes from users list).
- reCAPTCHA on registration page.
- Online/Offline users.

### reCAPTCHA
To use reCAPTCHA you will need to get your own API Key and from [Google](https://www.google.com/recaptcha/intro/) and then set `REGISTRATION_RECAPTCHA` to `true` in the .env file. 

### Confirm Email
To use the confirm email address you will need to set up your Mail details in the .env file
Then set `CONFIRM_EMAIL` to `true` in .env file.

### .env
- WEBSITE_NAME Default:Larastart
- WEBSITE_OWNER Default:Owner
- WEBSITE_EMAIL Default:noreply@larastart.com
- CONFIRM_EMAIL Default:false
- REGISTRATION_RECAPTCHA Default:false

## Requests
Please make them! Catch me at [Laracasts](https://laracasts.com/@miiikkeyyyy)
