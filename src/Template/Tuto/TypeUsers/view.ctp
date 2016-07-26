<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Type User'), ['action' => 'edit', $typeUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Type User'), ['action' => 'delete', $typeUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Type Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typeUsers view large-9 medium-8 columns content">
    <h3><?= h($typeUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Type User Name') ?></th>
            <td><?= h($typeUser->type_user_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($typeUser->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($typeUser->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($typeUser->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($typeUser->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Username') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Is Active') ?></th>
                <th><?= __('Is Member') ?></th>
                <th><?= __('Is Admin') ?></th>
                <th><?= __('First Name') ?></th>
                <th><?= __('Last Name') ?></th>
                <th><?= __('Company Name') ?></th>
                <th><?= __('Type User Id') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Zipcode') ?></th>
                <th><?= __('City') ?></th>
                <th><?= __('Phone') ?></th>
                <th><?= __('Website Link') ?></th>
                <th><?= __('Facebook Link') ?></th>
                <th><?= __('Twitter Link') ?></th>
                <th><?= __('Linkedin Link') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($typeUser->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->is_active) ?></td>
                <td><?= h($users->is_member) ?></td>
                <td><?= h($users->is_admin) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->company_name) ?></td>
                <td><?= h($users->type_user_id) ?></td>
                <td><?= h($users->address) ?></td>
                <td><?= h($users->zipcode) ?></td>
                <td><?= h($users->city) ?></td>
                <td><?= h($users->phone) ?></td>
                <td><?= h($users->website_link) ?></td>
                <td><?= h($users->facebook_link) ?></td>
                <td><?= h($users->twitter_link) ?></td>
                <td><?= h($users->linkedin_link) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
