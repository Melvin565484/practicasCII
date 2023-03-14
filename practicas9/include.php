<?php
include 'functions.php';
//obtenermos los datos del archivo de texto
$data = getData();
?><table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $cod => $record) { ?>
            <tr>
                <td><?= $record['name'] ?></td>
                 <td><?= $record['lastname'] ?></td>
                  <td><?= $record['age'] ?></td>
                  <td>
                    <a href="form.php?cod=<?= $cod ?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>