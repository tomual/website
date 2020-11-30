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
<h1>Edit Post</h1>

<?php if($this->input->method() == 'post' && $this->session->flashdata('error')): ?>
    <div class="alert alert-error" role="alert">
        <?php echo $this->session->flashdata('error') ?>
    </div>
<?php endif ?>

<?php echo form_open() ?>

    <div class="<?php if(form_error('title')) echo 'has-error' ?>">
        <label>Post Title</label><br>
        <input type="text" name="title" value="<?php echo set_value('title') ? set_value('title') : $post->title ?>"><br>
        <?php echo form_error('title'); ?>
    </div>

    <div class="<?php if(form_error('content')) echo 'has-error' ?>">
        <label>Post Content</label><br>
        <textarea name="content" class="tinymce <?php echo form_error('title') ? 'input-error' : '' ?>"><?php echo set_value('content') ? set_value('content') : $post->content ?></textarea><br>
        <?php echo form_error('content'); ?>
    </div>

    <div class="<?php if(form_error('tags')) echo 'has-error' ?>">
        <label>Post Tags</label><br>
        <input type="text" name="tags" value="<?php echo set_value('tags') ? set_value('tags') : $post->tags ?>"><br>
        <?php echo form_error('tags'); ?>
    </div>

    <input type="submit" value="Post">
    <a href="<?php echo base_url("posts/view/{$post->post_id}") ?>">
        <button type="button" class="link">Cancel</button>
    </a>
<?php echo form_close() ?>

<?php $this->load->view('footer') ?>