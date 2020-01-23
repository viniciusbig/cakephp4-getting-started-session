<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MailingList[]|\Cake\Collection\CollectionInterface $mailingLists
 */
?>
<div class="mailingLists index content">
    <?= $this->Html->link(__('New Mailing List'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mailing Lists') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mailingLists as $mailingList): ?>
                <tr>
                    <td><?= $this->Number->format($mailingList->id) ?></td>
                    <td><?= h($mailingList->name) ?></td>
                    <td><?= h($mailingList->created) ?></td>
                    <td><?= h($mailingList->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $mailingList->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mailingList->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mailingList->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mailingList->id)]) ?>
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