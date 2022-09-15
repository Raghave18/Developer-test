<!DOCTYPE html>
<html lang="en-AU">
<head>
    <?php
    $keyword=$_GET['keyword'];
    if(!empty($keyword)){
        $path = 'http://www.omdbapi.com/?t='.$keyword.'&apikey=f41f2d04';
        $json = file_get_contents($path);
        $movie_data = json_decode($json,true);
    }
?>
    <title>Movie Search - Raghave</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
