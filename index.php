<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Form</title>
</head>

<body>
  <?php require 'exo.php' ?>

    <h2>List of friends</h2>

    <ul>
        <?php foreach ($friendsObject as $friend) : ?>
            <li><?= $friend->firstname . " " . $friend->lastname; ?></li>
        <?php endforeach ?>

    </ul>
    <h2>Add a new friend</h2>
    <form action="" method="post">
        <label for="firstname">Firstname :</label>
        <input type="text" id="firstname" name="firstname" required>
        <br>
        <label for="lastname">Lastname :</label>
        <input type="text" id="lastname" name="lastname" required>
        <br>
        <button type="submit">Add</button>
    </form>
</body>

</html>