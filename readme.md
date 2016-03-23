# PHP-MySQL Read/Write
I've always been curious about how PHP works and how things connect together. It's pretty straight forward. 

## Synopsis
Simple code to connect to a database running locally and pulling some data from a table. 
Files you should be **looking at** ar `get_data.php` and `put_data.php` 
Make sure you have **MySQL** configured and running on your system.

## Installation
If you're on Windows and running `IIS` , you'd better go to `c:\inetpub\wwwroot` and paste these php files. </br>
If you're using XAMPP , you should go to `path\xampp\htdocs` and paste the php files. 

There are some funky issues with XAMPP , especially if you're running Skype. 
Go to the config portion of *Apache* and customize ports. 

In `httpd.conf` </br>
change `Listen 80` to `Listen <your choice of port>` </br>
change `ServerName localhost:80` to `ServerName localhost:<your choice of port>` 

In `httpd-ssl.conf` </br>
change `Listen 433` to `Listen <your choice of port>` </br> 
change `<VirtualHost _default_:443>` to `<VirtualHost _default_:<yourchoice> >` </br>
change `ServerName www.example.com:443` to `ServerName www.example.com:<your choice>` </br>


## Contributors
If you want to contribute or add to it or make it better, more readable, go for it. Tweet me issues if you can  : [@shreyaslumos](https://www.twitter.com/shreyaslumos) 

## License
<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">PHP-MySQL</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.

