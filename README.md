
***make sure to turn off the apache server first***
### php.ini configuration

The following configuration is recommended for the php.ini file:
 
  - go to C:/xampp/php/php.ini
  - open the php.ini file
    - search for the following configurations and change them as follows:
     ```
      [mail function]
       SMTP=smtp.gmail.com
       smtp_port=587
       sendmail_from = youremail@gmail.com
       sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
     ```
 - save the file and close it

### sendmail.ini configuration
 The following configuration is recommended for the sendmail.ini file:
 
  - go to C:/xampp/sendmail/sendmail.ini
  - open the sendmail.ini file
    - search for the following configurations and change them as follows:
     ```
       [sendmail]
       error_logfile=error.log
       debug_logfile=debug.log
       auth_username=youremail@gmail.com
       auth_password=gmailpasswordhere
       force_sender=youremail.com
    ```
   - save the file and close it

### gmail account configuration

 - enable less secure apps
 - enable 2FA
 - go to security settings and create an app password
 - it will create a 16 character password where you gonna use in the sendmail.ini file

***start the apache server***

### config in laravel

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=youremail@gmail.com
MAIL_PASSWORD=passwordfromgmail
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="youremail@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"
```

Contributions, issues, and feature requests are welcome!

Give a ⭐️ if you like this project!
