<?php include('header.php') ?>


<div class="container" style="margin-top:50px">
<div class="row">
<a href="addarticle" class="btn btn-primary">Add article</a>
</div>
</div>

<div class="container" style="margin-top:50px">
<div class="table">
<table>
<thead>
<tr>
<th>Article Title</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<thead>
<tbody>
<?php foreach($articles as $art):?>
<tr>
<td><?php echo $art->article_name; ?></td>
<td><a href="#" class="btn btn-primary">Edit</a></td>
<td>
<?=
form_open('Admin/del'),
form_hidden('id',$art->id),
form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
form_close();
?>
</td>
</tr>
<?php endforeach;?>
</tbody>
<table>

</div>
</div>

<?php include('footer.php') ?>