<?php include('header.php') ?>
<div class="container" style="margin-top:20px">
<h1>Admin Form</h1>
<?php if($error=$this->session->flashdata('Login Failed')): ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-danger">
    <?php echo $error;?>
    </div>
    </div>
    </div>
<?php endif; ?>
<?php echo form_open('Admin/index'); ?>
<div class="row">
    <div class="col-lg-6">
<div class="form-group">
<!-- <input type="email" class="form-control" placeholder="Enter Email"   id="email" >       -->
<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Name','name'=>'uname']); ?>               
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
<?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass']); ?>    
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