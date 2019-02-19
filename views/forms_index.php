<h1>Forms!</h1>

<ul>

<?php foreach ($forms as $form) : ?>
    <li><a href="/forms/view?id=<?= $form['id'] ?>"><?= $form['title'] ?></a></li>
<?php endforeach; ?>

</ul>


<form action="/forms/create" method="post">
    Title: <input type="text" name="title" />
    Content:
    <textarea name="content"></textarea>
</form>