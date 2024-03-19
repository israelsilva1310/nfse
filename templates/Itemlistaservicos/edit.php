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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemlistaservico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemlistaservico->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Itemlistaservicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemlistaservicos form content">
            <?= $this->Form->create($itemlistaservico) ?>
            <fieldset>
                <legend><?= __('Edit Itemlistaservico') ?></legend>
                <?php
                    echo $this->Form->control('item');
                    echo $this->Form->control('subitem');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('cnae');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
