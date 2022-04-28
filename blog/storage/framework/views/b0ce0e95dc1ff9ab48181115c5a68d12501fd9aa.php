<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body><?php /**PATH /Users/rubenrienstra/Desktop/workspace/blog/resources/views/posts.blade.php ENDPATH**/ ?>