<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>upload to upyun</title>
    </head>
    <body>  
        <div id="res">    
            <form enctype="multipart/form-data" action="/upyunio/upload" method="POST">  
                Send this file to upyun:  
                <input name="file" id="file" type="file" />  
                <input name="submit" type="submit" value="Send File" />  
                <label id="fullPath" />  
            </form>  
        </div>  
    </body>  
</html>  