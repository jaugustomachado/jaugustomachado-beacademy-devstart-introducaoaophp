<?php

$nome="josé";
$idade=28;
$cidade="recife";

echo "<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$nome}</td>
            <td>{$idade}</td>
            <td>{$cidade}</td>
        </tr>
    </tbody>
    </table>";