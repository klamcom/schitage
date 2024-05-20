<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php

    $data = $conn->query("SELECT * FROM tblskitag");


?>



<body>
    <div class="container">
        <form method="POST" action="insert.php" class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <label for="skigebiet" class="sr-only"></label>
                <input type="text" class="form-control" name="skigebiet" id="skigebiet2" placeholder="Skigebiet">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="datum" class="sr-only"></label>
                <input type="date" class="form-control" name="datum" id="datum2" placeholder="Datum">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="startzeit" class="sr-only"></label>
                <input type="time" class="form-control" name="startzeit" id="startzeit2" placeholder="Startzeit">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="endezeit" class="sr-only"></label>
                <input type="time" class="form-control" name="endezeit" id="endezeit2" placeholder="Endezeit">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label class="form-label" for="kommentar"></label>
                <textarea name="kommentar" id="kommentar2" class="form-control" placeholder="Kommentar"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mb-5 mx-3">Neuer Eintrag</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Skigebiet</th>
                    <th>Datum</th>
                    <th>Startzeit</th>
                    <th>Endezeit</th>
                    <th>Kommentar</th>
                    <th>Löschen</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $data->fetch(PDO::FETCH_OBJ)): ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->skigebiet; ?></td>
                    <td><?php echo $row->datum; ?></td>
                    <td><?php echo $row->startzeit; ?></td>
                    <td><?php echo $row->endezeit; ?></td>
                    <td><?php echo $row->kommentar; ?></td>
                    <td><a href="delete.php?del_id=<?php echo $row->id; ?>" class="btn btn-danger">löschen</a></td>
                    <td><a href="update.php?upd_id=<?php echo $row->id; ?>" class="btn btn-warning">bearbeiten</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>

        </table>

    </div>

<?php require "includes/footer.php"; ?>