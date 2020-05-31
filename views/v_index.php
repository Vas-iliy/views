<div>
    <a href="index.php?c=form">Написать сообщение</a>
    <hr>
    <?foreach ($message as $m):?>
        <div>
            <strong><?=$m['login']?></strong>
            <p> Оставил сообщение: </p>
            <p><?=$m['massage']?> </p>
            <hr>
        </div>
    <?endforeach;?>

</div>
