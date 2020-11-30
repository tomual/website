<?php $this->load->view('header') ?>

    <a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a>

    <h1>Toybox</h1>
    <div class="toybox">
        <div class="menu">
            <p>These graphics is free for personal and commercial use of any kind other than redistribution</p>
            <ul>
                <li><a href="<?php echo base_url('stuff/toybox/cats') ?>">Cats</a></li>
                <li><a href="<?php echo base_url('stuff/toybox/books') ?>">Books</a></li>
                <li><a href="<?php echo base_url('stuff/toybox/plants') ?>">Plants</a></li>
                <li><a href="<?php echo base_url('stuff/toybox/couches') ?>">Couches</a></li>
                <li><a href="<?php echo base_url('stuff/toybox/drinks') ?>">Drinks</a></li>
            </ul>
        </div>
        <div class="display">
            <?php if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <img src="<?php echo base_url('img/toybox/' . $this->uri->segment(3) . '/' . basename($image)) ?>" alt="">
                <?php endforeach ?>
            <?php endif ?>
        </div>
    </div>

    <!-- <a href="<?php echo base_url('stuff') ?>" class="back-link">&laquo; Back to Stuff</a> -->

<?php $this->load->view('footer') ?>