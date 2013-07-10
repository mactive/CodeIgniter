<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>upload to upyun</title>
        <link href="/assets/css/bootstrap.css" rel="stylesheet">

    </head>
    <body>  
        <div style="padding:20px;">    
            <form enctype="multipart/form-data" action="/upyunio/upload" method="POST">  
                <input name="file" id="file" type="file"/>
                <input name="handle_input" value="<?=$handle_input?>" type="hidden"/>
                <input name="submit" type="submit" value="Send File" class="btn btn-primary" />  
                <label id="fullPath" />  
            </form>  
        </div>  
    </body>  
</html>  