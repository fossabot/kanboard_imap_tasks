<h3><img src="<?= $this->url->dir() ?>plugins/Imap/imap-icon.png"/>&nbsp;Imap</h3>
<div class="listing">

    <?= $this->form->label(t('IMAP Server'), 'imap_server') ?>
    <?= $this->form->text('imap_server', $values) ?>

    <?= $this->form->label(t('IMAP Server Port'), 'imap_server_port') ?>
    <?= $this->form->text('imap_server_port', $values) ?>

    <?= $this->form->label(t('IMAP Server Requires SSL'), 'imap_server_requires_ssl') ?>
    <?= $this->form->text('imap_server_requires_ssl', $values) ?>

    <?= $this->form->label(t('IMAP Username'), 'imap_username') ?>
    <?= $this->form->text('imap_username', $values) ?>

    <?= $this->form->label(t('IMAP Password'), 'imap_password') ?>
    <?= $this->form->password('imap_password', $values) ?>

    <?= $this->form->label(t('Mail prefix'), 'imap_mail_prefix') ?>
    <?= $this->form->text('imap_mail_prefix', $values) ?>

    <?= $this->form->label(t('Application URL or Localhost Application URL'), 'imap_application_url') ?>
    <?= $this->form->text('imap_application_url', $values) ?>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue">
    </div>
</div>
