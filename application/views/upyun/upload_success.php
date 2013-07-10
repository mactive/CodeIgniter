<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>upload to upyun</title>
        <script type="text/javascript" src="/assets/js/jquery.js"></script>

        <script language="javascript">
                var target = $('#<?=$handle_input ?>', window.parent.document);
                target.val(<?=$time_name?>);
                var src_string = 'http://ydkcar-question.b0.upaiyun.com/'+<?=$time_name?>;
                target.next('img').attr('src',src_string);

            // alert("<?=$handle_input ?>");
            // function show(){   
            //     //改变父窗体中的元素id为myH2的内容
            //     parent.document.getElementById("<?=$handle_input ?>").value =  "<?=$time_name?>";
            //     parent.document.getElementById("img").src 
            // }   
            // show();        
  
        </script> 

    </head>
    <body>  
        <div style="padding:20px;">    
            <h3> <i class="icon-ok"></i> Upload Success!! </h3>
        </div>  
    </body>  
</html>  