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
            <?= $this->Html->link(__('List Itemlistaservicos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="itemlistaservicos form content">
            <?= $this->Form->create($itemlistaservico) ?>
            <fieldset>
                <legend><?= __('Add Itemlistaservico') ?></legend>
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
