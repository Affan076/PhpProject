<?php include('header.php') ?>
<div class="container" style="margin-top:20px">
<h1>Add Article</h1>
<?php echo form_open('Admin/insert'); ?>
<?php echo form_hidden('user_id',$this->session->userdata('id')); ?>

<div class="row">
    <div class="col-lg-6">
<div class="form-group">
<!-- <input type="email" class="form-control" placeholder="Enter Email"   id="email" >       -->
<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Title','name'=>'article_name']); ?>               
</div> 
</div>
<div class="col-lg-6">
<?php echo form_error('uname'); ?> 
</div>
</div>
<div class="row">
    <div class="col-lg-6">
<div class="form-group">
<!-- <input type="password" class="form-control"   placeholder="********"   id="pwd"  > -->
<?php echo form_textarea(['class'=>'form-control','placeholder'=>'Title Body','name'=>'article_body']); ?>    
</div> 
 </div>
 <div class="col-lg-6">
<?php echo form_error('pass'); ?> 
</div>
</div>
 <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>    
 <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']); ?>       
 <?php echo anchor('Admin/register/','Sign up?','class="link-class"'); ?>          
</div>
<?php include('footer.php') ?>