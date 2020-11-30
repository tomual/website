<?php $this->load->view('header') ?>

<h1>"Unsupported value type" Error on Linux</h1>

<p>When using Linux, you may come across an error similar to this spamming your system logs:</p>

<textarea class="code" rows="2" cols="40">[drm:drm_wait_vblank [drm]] *ERROR* Unsupported type value 0x8f, supported mask 0x7400003f</textarea>

<p>Though seemingly harmless, it can take up a lot of disk space if left alone.</p>

<p>This appears to be a graphics issue, and I've found a couple ways to reproduce this error-spamming:</p>

<h2>1. GNOME 3 and GNOME Compiz</h2>

<p>Certain desktop environments can cause this error - for me, it was GNOME 3 and GNOME Classic (Compiz).</p>

<p>With this cause, the error would just be a constant spam no matter what was happening on the computer.</p>

<img src="<?php echo base_url('images/extra/unsupported-value-type-error-linux.png') ?>" alt="Unsupported Value Type Error Linux" />

<p>The solution in my case was to use Unity (Ubuntu) or GNOME Classic (Metacity). If those do not solve it I would recommend checking others out too.</p>

<p>You can get the classic GNOME environments (it comes with both Compiz and Metacity versions) from the gnome-session-flashback package.</p>

<h2>2. Certain GUI Applications</h2>

<p>Another way the error could spam is when using some GUI applications.</p>

<p>The error appeared for me when I was using the browser <i>Brave</i>. I found (using tail -f /var/log/systemlog) The error would spam when making mouse movements over page elements.</p>

<img src="<?php echo base_url('images/extra/unsupported-error-spam-when-moving-mouse.gif') ?>" alt="Unsupported Value Type Error on Cursor Move" />

<p>It's assumed this was because of the custom UI that Brave has - I could not find a way to stop it, and used an alternative browser.</p>

<a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

<?php $this->load->view('footer') ?>