<html>
    <head>
        <title>Search User</title>
        <script>
            function ShowSuggestion(str)
            {
                if(str.length==0)
                {
                    document.getElementById('output').innerHTML='';
                }
                    else
                    {
                        var xmlhttp=new XMLHttpRequest();
                        xmlhttp.onreadystatechange=function()
                        {
                            if(this.readyState == 4 && this.status == 200)
                            {
                                document.getElementById('output').innerHTML=this.responseText;
                            }
                        };
                        xmlhttp.open("GET","suggest.php?m="+str,true);
                        xmlhttp.send();
                    }
                }
        </script>
        </head>
        <body>
            <div class="container">
                <h1> Search Users</h1>
                <form>
                    Search User: <input type="text" class="form-control" onkeyup="ShowSuggestion(this.value)">
                </form>
                <p>  <span id="output" style="font-weight:bold"></p>
            </div>
        </body>
</html>