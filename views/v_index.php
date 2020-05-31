<div>
    <a href="form.php">Написать сообщение</a>
    <hr>
    <?foreach ($message as $m):?>
        <div>
            <strong><?=$m['login']?></strong>
            <p> Оставил сообщение: </p>
            <p><?=$m['message']?> || <?=$m['time']?></p>
            <hr>
        </div>
    <?endforeach;?>

</div>
