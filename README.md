This is kind of a cool Database post from PHP to Mysql which works in a few minutes (assuming you can create a working login in mysql on your platform of choice).
On Cpanel systems this takes just a few seconds, or from MySQL workbench which is pretty fancy but takes more administrative skill.

This is a Business Contact Page which adds about 8 new fields to the original which is in the link below(which also works well). Its a working mod/fork
from the original, which can be customized with your own logo in about 10 seconds.

COMMENTS ON THIS TOOL.
Another Developer created an HTML page which did a form post call to a PHP insert.
We have done similar things with ColdFusion which is a bit more sophisticated because it hides the connection string from the main file.
This is a very low security configuration as if anyone can execute the PHP they also have the connection string. As such the Insert but not delete
permissions should be set on mysql. In other words the user and password should only have the right to insert records but not delete them. And it should
have a password which cant be typed in less than 10 seconds.

We have added a few pictures showing what the "CONTACTUSER LOGIN" permissions should have, and given a picture of what a cPanel/Siteground login would look like.


# contactmysqlupgrade
This adds a longer contact form for existing project created on this site.
https://github.com/wdraghwendra/phpmysql/tree/master/contact

Depending on your needs and how patient your customers are the longer form may not be beneficial. This code works assuming a proper MYSQL login in the contact12.php.(We went through 12 revisions from base).

WHY IS THIS IMPORTANT? WELL THIS IS A WORKING WIDGET WHICH CAN BE EXPANDED TO DO NEW SUBSCRIBER ADDITIONS, MODIFYING SERVICE PROFILES ET ALL. OUR OWNLY
ISSUE IS THIS TYPE OF FORM IS A SIGNIFICANT DOWNGRADE FROM .ASPX DRIVEN DATABASE GRID TOOLS WHICH ARE FREE FROM CERTAIN MICROSOFT TOOLSETS. HOWEVER IF YOU NEED TO RUN DATABASE INSERTS ON UNIX, LINUX, AND NON WINDOWS PLATFORMS, OR PROVIDE PLATFORM INDEPENDENT CODE THIS IS VERY SIGNIFICANT. A PORT TO ORACLE, SQL SERVER, ETC CAN BE DONE IN LESS THAN 20 MINUTES (ASSUMING YOU HAVE ADMINISTRATIVE RIGHTS TO MODIFY YOUR PHP PLUGINS. ON CPANEL SERVERS THIS WOULD REQUIRE A VPS CONFIGURATION.

GREENVILLE ASSOCIATES STRANGE BREW SUPPORTS PHP PLUGINS FOR ORACLE, SQLSERVER, MYSQL AND POSTGRES. PERVASIVE SQL SUPPORTS PHP THROUGH STANDARD ODBC EXTENSIONS, ALTHOUGH THIS LIKELY WILL REQUIRE SIGNIFICANT EXPERIENCE AND SKILL.
