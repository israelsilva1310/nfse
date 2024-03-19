<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Itemlistaservico> $itemlistaservicos
 */
?>
<div class="itemlistaservicos index content">
    <?= $this->Html->link(__('New Itemlistaservico'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Itemlistaservicos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('item') ?></th>
                    <th><?= $this->Paginator->sort('subitem') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('cnae') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($itemlistaservicos as $itemlistaservico): ?>
                <tr>
                    <td><?= $this->Number->format($itemlistaservico->id) ?></td>
                    <td><?= h($itemlistaservico->item) ?></td>
                    <td><?= h($itemlistaservico->subitem) ?></td>
                    <td><?= h($itemlistaservico->descricao) ?></td>
                    <td><?= h($itemlistaservico->cnae) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $itemlistaservico->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemlistaservico->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemlistaservico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemlistaservico->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
