<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MailingList $mailingList
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mailingList->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mailingList->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mailing Lists'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mailingLists form content">
            <?= $this->Form->create($mailingList) ?>
            <fieldset>
                <legend><?= __('Edit Mailing List') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('campaigns._ids', ['options' => $campaigns]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
