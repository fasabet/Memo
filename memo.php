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
                    background-color: black;
                 }
                 
                
                
            </style>
            
        </head>
        
    <h1 style="color: lightskyblue">Hallo</h1>
        
    <body>
        <table border="1">
            <?php
                $a= 0;
            for ($row = 1; $row <= 4; $row++) {
                echo "<tr>";
                for ($colon = 1; $colon <= 4; $colon++) {
                    $cell = "$row" . "$colon";
                $platje=["A","B","C","D","W","X","Y","Z","A","B","C","D","W","X","Y","Z"];                          
              
         
                echo "<td onclick=draai($row$colon) id=board$row$colon class=button >$platje[$a]</td>";
             $a++;
            }
             echo"</tr>";
            
            }
            
            
            /*    
            $gussy=(rand(0,3));
            $gussx=(rand(0,3));  
            $gess=["array(1,2,3,4)","array(1,2,3,4)","array(1,2,3,4)","array(1,2,3,4)"];
            
            //$gess[0]=
            */
            
            ?>
        </table>
        <script>
          var piet;
            function draai(q){
               document.getElementById("board"+q).style.background='yellow';
               piet = q;
               setTimeout (jojo,3000);
           }
            function jojo(){
               
               document.getElementById("board"+piet).style.background='black';
            }
        </script>
        
        
        
    </body>
    </head>
    
    
    
</html>