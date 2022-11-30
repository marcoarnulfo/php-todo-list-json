<?php



/*

$tasks = file_get_contents('tasks.json');

var_dump($tasks)
*/
/*
header('Content-Type: application/json');
echo json_encode($tasks)

*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link href='./style.css' rel='stylesheet'>
</head>


<body>

    <div id='app'>
        {{message}}
        <h1>Tasks</h1>
        <ul v-for="task in tasks">
            <li>{{task}}</li>
        </ul>
        <div>
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="newTask" id="newTask" class="form-control" placeholder="" aria-describedby="helpId">
                <button @click="postTask()" type="submit" class="btn btn-danger">PREMI</button>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./app.js'></script>
</body>

</html>