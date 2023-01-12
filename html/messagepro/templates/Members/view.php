<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Member'), ['action' => 'edit', $member->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Member'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Members'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Member'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="members view content">
            <h3><?= h($member->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Membername') ?></th>
                    <td><?= h($member->membername) ?></td>
                </tr>
                <tr>
                    <th><?= __('Memberpass') ?></th>
                    <td><?= h($member->memberpass) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($member->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Create Datetime') ?></th>
                    <td><?= h($member->create_datetime) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Pr') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($member->pr)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
