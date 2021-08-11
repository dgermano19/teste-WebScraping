<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>infoPicker</title>
</head>
        <body>
            <h1>infoPicker</h1>

            <section id="mainSection">
                <form name="searchForm">
                    <input name="nsearchBar" id="searchBar" type="text" placeholder="Search">
                    <select name="ndataType" id="dataType">
                        <option value="1">Autor</option>
                        <option value="2">Topic</option>
                        <option value="3">Work</option>
                    </select>
                    <button id="searchBtn" class="btn1 tone-dark">Search</button>
                </form>
                
                <table id="mainTbl">
                    <tr>
                        <th class="tone-dark">Autor</th>
                        <th class="tone-dark">Topics</th>
                        <th class="tone-dark">Work</th>
                    </tr>
                    <tr>
                        <td>
                            <p>Here goes his name</p>
                        </td>
                        <td>
                            <p>Here, the tags related to what he wrote</p>    
                        </td>
                        <td>
                            <p>And here a small piece of his work. Threee lines may be enought so it doesn't look like clutter</p>
                            <button id="seeMoreBtn" class="tone-middle">See full work Button hey</button>
                        </td>
                    </tr>
                </table>
            </section>

        </body>
</html>
<!-- <?php
?> -->