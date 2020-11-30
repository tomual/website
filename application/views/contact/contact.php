<?php $this->load->view('header') ?>

<section class="contact">
    <h1>Contact</h1>
    <p>Send your feedback, suggestions or questions here.</p>
    <?php echo form_open() ?>
        <label>Name</label>
        <input type="text" name="name" value="<?php echo set_value('name') ?>">
        <?php echo form_error('name') ?>
        <label>Email <small>(optional)</small></label>
        <input type="text" name="email" value="<?php echo set_value('email') ?>">
        <label>Message</label>
        <textarea name="message" rows="5"><?php echo set_value('message') ?></textarea>
        <?php echo form_error('message') ?>        
        <label>Captcha</label>
        <?php echo $captcha['image'] ?>
        <input type="text" name="captcha" value="" />
        <?php echo form_error('captcha') ?>
        <input type="submit" value="Send">
    <?php echo form_close() ?>
</section>

<?php $this->load->view('footer') ?>