# Wordpress Guidelines
These are created to make wordpress as flexible and secure as possible.
These guidelines will start with the essentials steps that are needed to setup your Wordpress project.
Some things in this guide are very specific to or agency, or use software / plugins that are not free.

## creating a Vhost

In this instance I will explain how to do this in WAMP/Windows, but in essentially it will be the same on other platfroms.

1. Open your host file as administrator (Win: C:\Windows\System32\drivers\etc)
2. Add the following line at the end: ´127.0.0.1 dev.projectname.com´
3. Go to your WAMP install folder and edit the following file ´\bin\apache\Apache2.4.4\conf\extra\httpd-vhosts.conf´

## Installing Wordpress

 1. Download the latest version from [here](http://wordpress.org/download/)
 2. Create a new  private repository on [Bitbucket](https://bitbucket.org/repo/create)
 3. unzip the wordpress files into an folder
 4.