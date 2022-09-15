<<!DOCTYPE html>
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
<body>
    <div class="container">
        <h2 class="text-center mt-3 mb-3"><a href="/">Movie Search</a></h2>
        <form action="index.php" method="get">
            <input type="hidden" name="action" value="search">
            <div class="row">
                <div class="col-10">
                    <input type="text" class="form-control" placeholder="Movie Name" name="keyword" id="search" value="<?php echo $_GET['keyword']?>">
                </div>
                <div class="col-2">
                    <input type="submit" class="btn btn-info" value="Search" onclick="changeColor()">
                </div>
            </div>
        </form>
        <hr>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Year</th>
              <th scope="col">Genre</th>
              <th scope="col">Runtime</th>
              <th scope="col">imdb Rating</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td id="text"><?php echo ($movie_data['Title']) ?></td>
                <td><?php echo ($movie_data['Year']) ?></td>
                <td><?php echo ($movie_data['Genre']) ?></td>
                <td><?php echo ($movie_data['Runtime']) ?></td>
                <td><?php echo ($movie_data['imdbRating']) ?></td>
            </tr>
          </tbody>
        </table>
    </div>
    <script>
        function changeColor() {
            var color = document.getElementById('search').value;
            var colorToChange = color.split(',')[0];
            document.body.style.backgroundColor=colorToChange;
        }
    </script>
</body>
</html>
