<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 

<h1>0 Disk Space Remaining on Linux</h1>

<p>In your first minutes/hours of using Linux, or during the install of Linux, you may come across this message which pops up:</p>

<a href="<?php echo base_url('img/extra/volume-filesystem-root-has-only-0.png') ?>" class="thumbnail"><img src="<?php echo base_url('img/extra/volume-filesystem-root-has-only-0.png') ?>" class="border" alt="" /></a>

<p>Having a disk space of 0 will cause all kinds of unwanted inconveniences - and can cause Linux to not boot up at all upon next restart.</p>

<p>If you are sure that you gave your Linux enough space for install, it may be that the error logs are filling up the disk space.</p>

<a href="<?php echo base_url('img/extra/linux-df-100-disk-space.png') ?>" class="thumbnail"><img src="<?php echo base_url('img/extra/linux-df-100-disk-space.png') ?>" class="border" alt="" /></a>

<p>We will go to the folder where most logs are located - /var/logs.</p>

<a href="<?php echo base_url('img/extra/linux-large-syslog-kern-log.png') ?>" class="thumbnail"><img src="<?php echo base_url('img/extra/linux-large-syslog-kern-log.png') ?>" class="border" alt="" /></a>

<p>Look at the size of each file using "ll /var/logs/".</p>

<p>We can see that syslog and kern.log are very large, at 45GB each. Remove them ("sudo rm syslog"), and reboot.</p>

<p>Now, we view the syslog file to see what errors are causing the log file to be so large so quickly.</p>

<textarea name="name" class="code" rows="1" cols="40">tail -f /var/log/syslog</textarea>

<a href="<?php echo base_url('img/extra/acpi-error-spam-linux.png') ?>" class="thumbnail"><img src="<?php echo base_url('img/extra/acpi-error-spam-linux.png') ?>" class="border" alt="" /></a>

<p>If you don't immediately see it scrolling with errors, you may need to have it open on the side and keep an eye on it as you use your computer - it may be caused by specific programs.</p>

<p>Now that you have hopefully found your problem errors, you are able to start finding out how to suppress or solve it.</p>

<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>


</section>