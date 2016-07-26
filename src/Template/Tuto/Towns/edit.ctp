<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $town->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $town->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Towns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ads'), ['controller' => 'Ads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ad'), ['controller' => 'Ads', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="towns form large-9 medium-8 columns content">
    <?= $this->Form->create($town) ?>
    <fieldset>
        <legend><?= __('Edit Town') ?></legend>
        <?php
            echo $this->Form->input('area_id', ['options' => $areas, 'empty' => true]);
            echo $this->Form->input('town_name');
            echo $this->Form->input('town_zip_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
