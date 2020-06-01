<div>
    <a href="index.php?c=form">Написать сообщение</a>
    <hr>
    <?foreach ($massages as $massage):?>
        <div>
            <strong><?=$massage['login']?></strong>
            <p> Оставил сообщение: </p>
            <p><?=$massage['massage']?> </p>
            <hr>
        </div>
    <?endforeach;?>

</div>

