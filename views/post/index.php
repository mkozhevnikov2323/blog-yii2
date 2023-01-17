<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Posts</h1>
    <ul>
        <?php if (isset($posts)) {
            foreach ($posts as $post): ?>
                <li>
                    <?= Html::encode("{$post->id} ({$post->title})") ?>:
                    <?= $post->content ?>
                </li>
            <?php endforeach;
        } ?>
    </ul>

<?= /** @var TYPE_NAME $pagination */
LinkPager::widget([
    'pagination' => $pagination,
    'maxButtonCount' => 5,
    'activePageCssClass' => 'active',
    'linkContainerOptions' => ['class' => 'page-item'],
    'linkOptions' => ['class' => 'page-link'],
    'disabledListItemSubTagOptions' => ['tag' => 'a', 'class' => 'page-link'],
]) ?>