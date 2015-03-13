<? defined('KOOWA') or die('protected resource'); ?>

<?
switch($item->type) {
    case 'component':
        $tag = '<a href=' . @route($item->link) . '>' . $item->title . '</a>';
        break;
    case 'url':
        $tag = '<a href=' . $item->link . '>' . $item->title . '</a>';
        break;
    case 'separator':
        $class="divider";
        $tag = '<span>' . $item->title . '</span>';
        break;
    default:
        break;
}
?>

<li class="<?= $class; ?>">
    <?= $tag; ?>
</li>