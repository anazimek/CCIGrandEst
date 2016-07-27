
    <table cellpadding="0" cellspacing="0">

        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->company_name) ?></td>
                <td><?= h($user->address) ?></td>
                <td><?= $this->Number->format($user->zipcode) ?></td>
                <td><?= h($user->city) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->website_link) ?></td>
                <td><?= h($user->facebook_link) ?></td>
                <td><?= h($user->twitter_link) ?></td>
                <td><?= h($user->linkedin_link) ?></td>
                <td >
                    <?= $this->Html->link(__('Voir le profil'), ['action' => 'view', str_replace(" ", "-",$user->company_name)]) ?>
                    <?= $this->Html->link(__('Editer le profil'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer le profil'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
