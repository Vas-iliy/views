<div>
    <form method="post">
        <div>
            <?foreach ($validateErrors as $error):?>
            <p><?=$error?></p>
            <?endforeach;?>
        </div>
        <input type="text" name="login" value="<?=$params['login']?>" ><br>
        <textarea name="message" id="" cols="30" rows="10" ><?=$params['message']?></textarea><br>
        <input type="submit">
    </form>
</div>

