<?php $this->load->view('header')?>
<nav id="side">
	<a href="<?php echo base_url('notes') ?>"><img src="<?php echo base_url('img/header notes.png') ?>"></a>
	<img src="<?php echo base_url('img/footer.png') ?>" class="back-to-bg">
	<a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" class="back-to-text"></a>
</nav>
<section>
	<img src="<?php echo base_url('img/sectiontop.png') ?>" class="section-top">
	<img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;">
	<h1>ACPI Error: Method parse/execution failed</h1>
	<p>Upon installing Linux you may find this error spamming yoursyslog, messages and kern.log:</p>
	<textarea class="code" rows="5" cols="40">
		ACPI Error: Method parse/execution failed [\_GPE._L06] (Node ffff8802270cdf50), AE_NOT_FOUND (20150930/psparse-542)

	ACPI Exception: AE_NOT_FOUND, while evaluating GPE method [_L06] (20150930/evgpe-592)</textarea>
	<a href="<?php echo base_url('img/extra/acpi-error-spam-linux.png') ?>" class="thumbnail"><img src="<?php echo base_url('img/extra/acpi-error-spam-linux.png') ?>" class="border" alt="ACPI Error Spamming in logs on Linux"/></a>
	<p>This error seems to be harmless - it was mistaken as the cause of boot problems when I tried some incompatible distributions like Debian, but later found out the error happens anyway on working distributions.</p>
	<p>Left alone, these errors will quickly take up disk space.</p>
	<p>The error can vary in the two letters after the 'L' in the brackets - for me it was "L06". You can look in /sys/firmware/acpi/interrupts/ for the possible variations (00, 02, 03 ... 1D, 1F etc.).</p>
	<p>If you have an error for [\_GPE._L06], you will want to disable the message for 'gpe06'. If you get [\_GPE._L6F], it would be 'gpe6F'.</p>
	<p>After finding out which to disable (replace the 'XX'), put this line in your /etc/rc.local file:</p>
	<textarea class="code" rows="1" cols="40">echo "disable" > /sys/firmware/acpi/interrupts/gpeXX</textarea>
	<p>After a reboot, the errors should no longer appear in your logs.</p>
	<a href="<?php echo base_url('material') ?>" class="back-link">&laquo; Back to Material</a>
</section>
<?php $this->load->view('footer')?>