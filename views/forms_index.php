<h1>Forms!</h1>

<ul>

<?php foreach ($forms as $form) : ?>
    <li><a href="/forms/view?id=<?= $form['id'] ?>"><?= $form['title'] ?></a></li>
<?php endforeach; ?>

</ul>


<form action="/forms/create" method="post">
    <label>Title: </label>
    <br>
    <input type="text" name="title" />

    <br>
    Content:
    <br>
    <textarea name="content"></textarea>

    <br>
    <input type="submit" value="Submit" />
</form>