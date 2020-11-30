<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('about') ?>"><img src="<?php echo base_url('img/header about.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 
    <h1>Contact</h1>
    <p>Send your feedback, suggestions or questions here.</p>
    <?php echo form_open() ?>
        <label>Name</label><br>
        <input type="text" name="name" value="<?php echo set_value('name') ?>">
        <?php echo form_error('name') ?><br>
        <label>Email (optional)</label><br>
        <input type="text" name="email" value="<?php echo set_value('email') ?>">
        <br>
        <label>Message</label><br>
        <textarea name="message" rows="5"><?php echo set_value('message') ?></textarea>
        <?php echo form_error('message') ?><br>
        <label>Captcha</label><br>
        <?php echo $captcha['image'] ?><br>
        <input type="text" name="captcha" value="" />
        <?php echo form_error('captcha') ?><br><br>
        <input type="submit" value="Send">
    <?php echo form_close() ?>
</section>

<?php $this->load->view('footer') ?>