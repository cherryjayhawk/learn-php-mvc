<table border=1>
    <tr>
        <td>Name</td>
        <td>Job</td>
        <td>Age</td>
        <td>Interest</td>
    </tr>
    <?php
    foreach ($data['bros'] as $bro) { ?>
        <tr>
            <td><?= $bro['name'] ?></td>
            <td><?= $bro['job'] ?></td>
            <td><?= $bro['age'] ?></td>
            <td><?= $bro['interest'] ?></td>
        </tr>
    <?php
    }
    ?>
    
</table>