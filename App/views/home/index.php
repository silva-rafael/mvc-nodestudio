<?php foreach($data as $note): ?>

<div class="container">
    <h2><a href="/notes/ver/<?php echo $note['id']; ?>" ><?php echo $note['titulo']; ?></a></h2>
    <p><?php echo $note['descricao']; ?></p>
</div>

<?php endforeach; ?>