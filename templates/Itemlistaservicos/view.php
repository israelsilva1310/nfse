<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Itemlistaservico $itemlistaservico
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Itemlistaservico'), ['action' => 'edit', $itemlistaservico->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Itemlistaservico'), ['action' => 'delete', $itemlistaservico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemlistaservico->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Itemlistaservicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Itemlistaservico'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemlistaservicos view content">
            <h3><?= h($itemlistaservico->item) ?></h3>
            <table>
                <tr>
                    <th><?= __('Item') ?></th>
                    <td><?= h($itemlistaservico->item) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subitem') ?></th>
                    <td><?= h($itemlistaservico->subitem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($itemlistaservico->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cnae') ?></th>
                    <td><?= h($itemlistaservico->cnae) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($itemlistaservico->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
