<!DOCTYPE html>
<html>
    <style>
        table,th,td {
            border : 1px solid black;
            border-collapse: collapse;
        }
        th,td {
            padding: 5px;
        }
    </style>
    <body>

        <h1>The XMLHttpRequest Object</h1>

        <form action=""> 
            <select name="customers" onchange="showCustomer(this.value)">
                <option value="">Selecione um cliente:</option>
                <option value="1">Marcelo Farias</option>
                <option value="2">Jonh</option>
                <option value="3">Antonio Bandeiras</option>
                <option value="4">Flavio Brasil</option>
                <option value="5">Whashigton</option>
                <option value="6">Sebastião</option>
            </select>
        </form>
        <br>
        <div id="txtHint">Customer info will be listed here...</div>

        <script>
            function showCustomer(str) {
                var xhttp;
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "banco_ajax.php?q=" + str, true);
                console.log(str);
                xhttp.send();
            }
        </script>

    </body>
</html>


