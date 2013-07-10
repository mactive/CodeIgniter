<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>upload to upyun</title>
        <script language="javascript">

            alert("<?=$handle_input ?>");
            function show(){   
                //改变父窗体中的元素id为myH2的内容  
                parent.document.getElementById("<?=$handle_input ?>").value =  "<?=$time_name?>";
            }   
            show();        
  
        </script> 

    </head>
    <body>  
        <div style="padding:20px;">    
            <h3> <i class="icon-ok"></i> Upload Success!! </h3>
        </div>  
    </body>  
</html>  