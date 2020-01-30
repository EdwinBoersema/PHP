

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search User</title>

    <link rel="stylesheet" href="bootstrap.min.css">
    <script>
        async function showSuggestion(str){
            if(str.length == 0){
                document.getElementById("output").textContent = "";
            } else {
                // AJAX REQUEST
                await fetch("suggest.php?q="+str, {
                    method: "GET",
                    headers: {
                        'Content-Type': 'text/xml'
                    }

                })
                .then((response) => {
                    document.getElementById("output").textContent = response;
                    console.log(response);
                });
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control"
            onkeyup="showSuggestion(this.value)">
        </form>
        <p>
            Suggestions:
            <span id="output" style="font-weight: bold">

            </span>
        </p>
    </div>
</body>

</html>