<h2>Новые фильмы <?php if($this->dx_auth->is_admin())
{
    echo '<a href="/movies/"><button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>';
    

}?>

</h2>
<hr>
<div class="row">
    <?php foreach($movie as $key => $value): ?>
        <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <a href="/movies/view/<?php echo $value['slug'];?>"><img src="<?php echo $value['poster']; ?>" alt="<?php echo $value['name']; ?>"></a>
            <div class="film_label"><a href="/movies/view/<?php echo $value['slug'];?>"><?php echo $value['name'];?> </a></div>
            <?php endforeach ?>
        </div>
</div>