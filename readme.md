# Wordpress Guidelines
These are created to make wordpress as flexible and secure as possible.
These guidelines will start with the essentials steps that are needed to setup your Wordpress project.
Some things in this guide are very specific to or agency, or use software / plugins that are not free.

## creating a Vhost

In this instance I will explain how to do this in WAMP/Windows, but in essentially it will be the same on other platfroms.

1. Open your host file as administrator. On Win: `C:\Windows\System32\drivers\etc`
2. Add the following line at the end: `127.0.0.1 dev.projectname.com`
3. Go to your WAMP install folder and edit the following file `\bin\apache\Apache2.4.4\conf\extra\httpd-vhosts.conf`
4. Add the following code at the end of this file (obvisouly change the folder location and vhost domain)

 ```
 <VirtualHost dev.projectname.com:80>
    DocumentRoot "D:\development\projects\client\projectname"
    ServerName dev.projectname.com
 </VirtualHost>
 ```
 5. Restart your WAMP

## Installing Wordpress

 1. Download the latest version from [here](http://wordpress.org/download/)
 2. Create a new  private repository on [Bitbucket](https://bitbucket.org/repo/create)
 3. unzip the wordpress files into the root folder of your Vhost
 4. Do an initial commit
 ```
 $ git init && git add -A . && git commit -m "first init"
 $ git remote add origin git@bitbucket.repo.link.git
 $ git push -u origin master
 ```
 5. Create an database for your project
 6. Run the installer go to http://dev.projectname.com
 7. Rename wp-config.php to wp-config.generated.php `mv wp-config.php wp-config.generated.php`
 8. Copy the following wp-config.php to your root [wp-config.php](LINK TO) or wget it `wget link to file`  //TODO
 9. Copy the "Authentication Unique Keys and Salts" from wp-config.generated.php from line 46 to 53 and paste them in wp-config from line xx to xx //TODO
 10. change all the settings in wp-config.php to your liking. Just follow the directions in the comments