<nav>
    <ul>
        <li><?= $this->Html->link(__('Mentions légales'), ['controller' => 'Infos', 'action' => 'Mentions']) ?></li>
        <li><?= $this->Html->link(__('Conditions générales de vente'), ['controller' => 'Infos', 'action' => 'Cvg']) ?></li>
        <li><?= $this->Html->link(__('Partenaires'), ['controller' => 'Partenaires', 'action' => 'index']) ?></li>

    </ul>
</nav>