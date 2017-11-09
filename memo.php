<!DOCTUPEHTML>
<html>
    <meta charset="utf8" />
        <title>MEMORIE ITPH</title>   
        <head>
            <style>
                
                .button{
                    position: relative;
                    width : 50px;
                    height: 50px;
                    cursor: crosshair;
                 }
                 .button:hover{
                     background-color :lightpink;
                 }
                
                
            </style>
            
        </head>
        
    <h1 style="color: lightskyblue">Hallo</h1>
        
    <body>
        <table border="1">
            <?php
            for ($row = 1; $row <= 4; $row++) {
                echo "<tr>";
                for ($colon = 1; $colon <= 4; $colon++) {
                    $cell = "$row" . "$colon";
                   $platje=["A","B","C","D","W","X","Y","Z"];
             for ($a=0;$a< count$platje;$a++){
                 
              
             echo "<td $cell class=button></td>";
                    // echo "<td onclick=shoot($row$colon) id=board$row$colon class=button ></td>";
                }
                echo"</tr>";
            }
            }
            /*    
            $gussy=(rand(0,3));
            $gussx=(rand(0,3));  
            $gess=["array(1,2,3,4)","array(1,2,3,4)","array(1,2,3,4)","array(1,2,3,4)"];
            
            //$gess[0]=
            */
            
            ?>
        </table>
        
        
        
        
    </body>
    </head>
    
    
    
</html>