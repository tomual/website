<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('material') ?>"><img src="<?php echo base_url('img/header material.png') ?>"></a>
    <nav id="guide">
        <br>
        <h1><a href="<?php echo base_url('material') ?>">MATERIAL</a></h1>
        <a href="<?php echo base_url('material') ?>">
        </a>
        <ul>
            <a href="<?php echo base_url('material') ?>">
            </a>
            <li><a href="<?php echo base_url('material') ?>"></a><a href="background">Backgrounds</a></li>
            <li><a href="bullet">Bullets</a></li>
            <li><a href="emoticon">Emoticons</a></li>
            <li><a href="sign">Sign</a></li>
        </ul>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<div class="container"> 
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <h1>Settings</h1>
            <?php alerts() ?>
            <form method="post">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" value="<?php echo set_value('email', $this->user->email) ?>" class="form-control <?php echo is_valid('email') ?>">
                    <?php echo form_error('email') ?>
                </div>
                <div class="form-group">
                    <label for="password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" value="<?php echo set_value('current_password') ?>" class="form-control <?php echo is_valid('current_password') ?>">
                    <?php echo form_error('current_password') ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo set_value('password') ?>" class="form-control <?php echo is_valid('password') ?>">
                    <?php echo form_error('password') ?>
                </div>
                <div class="form-group">
                    <label for="password2">Password (again)</label>
                    <input type="password" name="password2" id="password2" value="<?php echo set_value('password2') ?>" class="form-control <?php echo is_valid('password2') ?>">
                    <?php echo form_error('password2') ?>
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>  
<?php $this->load->view('footer') ?>
