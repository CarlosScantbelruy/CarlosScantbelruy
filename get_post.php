<div class="titulo">$_GET_POST</div>

<form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AM">Amazonas</option>
        <option value="SC">Santa Catarina</option>    
    </select>
    <button>Enviar</button>
</form>

<style>
        form > *{
            font-size: 1.8rem;
        }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);