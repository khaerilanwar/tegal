<!-- setSurroundCount untuk berapa kotak yang mengelilingi halaman yang aktif -->
<?php $pager->setSurroundCount(2) ?>

<nav class="mt-5" aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item <?= !$pager->hasPreviousPage() ? 'disabled' : '' ?>">
            <a class="page-link" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <li class="page-item <?= !$pager->hasNextPage() ? 'disabled' : '' ?>">
            <a class="page-link" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>