# parsedownX for MODX Revolution

> **Version:** 1.0  
> **Author:** Manuel InHertz - [Website](https://www.manuel-inhertz.com)  
> **Bugs and Requests:** [parsedownX Issues](https://github.com/manuel-inhertz/parsedown-x/issues)

parsedownX is the ultimate MODX Revolution snippet that can be used to parse Markdown to HTML from eather a file or a string.

Installing parsedownX for MODX Revolution
-----------------------------------------------

Go to System | Package Management on the main menu in the MODX Manager and click on the "Download Extras" button. That will take you to the Revolution Repository (AKA Web Transport Facility). Put parsedownX in the search box and press Enter. Click on the "Download" button, and when it changes to "Downloaded," click on the "Finish" button. That should bring you back to your Package Management grid. Right click on parsedownX and select "Install Package." The parsedownX snippet should now be installed.

How to use it
-------------

    [[parsedownX? &input=`[[*markdown]]` &file=`/path/to/file.md` &safe=`1` &inline=`0`]]
 
Can also be used as an output modifier
 
    [[*content:parsedownX]]    

LICENSE
=======

[GPL] (https://opensource.org/licenses/GPL-2.0)