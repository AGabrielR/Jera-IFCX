<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1 class="m-4" id="title">
        Timer pomodoro
    </h1>

    <div class="container">
        <p class="pb-4 bg-dark col-md-6 offset-md-3 text-light text-center disabled display-1" id="timer">
            0:00
        </p>
        <div class="row offset-md-3 col-md-6">
            <button class="btn btn-outline-info col-md-5 ml-4" onclick="startTimer(25)">
                Iniciar pomodoro
                (25 min.)
            </button>
            <button class="btn btn-outline-info col-md-5 offset-md-1" onclick="startTimer(5)">
                Iniciar descanso
                (5 min.)
            </button>
        </div>
        <audio src="song/toque.mp3" id="toque"></audio>
    </div>
</body>
</html>
<script src="js/script.js"></script>