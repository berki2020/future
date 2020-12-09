<div>
    <?php if ($data['type_message'] == 'error'):?>
        <span style="color:red"><?= $data['message'] ?? ''; ?></span><br>
    <?php endif; ?>

    <?php foreach ($data['data'] as $elem):?>
    <span class="name"><?=$elem['author'];?></span> <span class="time"><?= $elem['new_date']; ?></span>
    <p class="savva_comment"><?=$elem['text'];?></p>
    <?php endforeach; ?>
</div>

