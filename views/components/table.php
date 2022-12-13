<thead>
        <tr>
     
            <th scope="col">Pavadinimas</th>
            <th scope="col">Kaina</th>
            <th scope="col">Ar vykdoma</th>
            <th scope="col">Redaguoti</th>
            <th scope="col">Trinti</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($travels as $travel) {?>
        <tr>
            <td><?=$travel->travelTitle?></td>
            <td><?=$travel->price?></td>
            <td><?= ($travel->organized) ? "Taip" : "Ne" ?></td>
            <td><button class="btn btn-success" name="update" type="submit" >Redaguoti</button></td>
            <form action="" method="post">
                <td><button class="btn btn-danger" name="destroy" type="submit">Trinti</button></td>
            </form>
            
        </tr>
        <?php } ?>
    </tbody>