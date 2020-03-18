<div class="well">
    <?php $attributes = array("class" => "form-horizontal","name" => "contactform");
    echo form_open("/contact",$attributes);?>
    <fieldset>
        <legend><h2>Контакты</h2></legend>
        <p id="cont">Отправьте ваш отзыв о портале КиноМонстр</p>
        <div class="form-group">
            <input type="text" name="name" placeholder="Ваше имя" value="<?php echo set_value('name');?>" class="form_control">
            <span class="text-danger"><?php echo form_error('name');?></span>
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="Ваше email" value="<?php echo set_value('email');?>" class="form_control">
            <span class="text-danger"><?php echo form_error('email');?></span>
        </div>
        <div class="form-group">
            <input type="text" name="subject" placeholder="Тема" value="<?php echo set_value('subject');?>" class="form_control">
            <span class="text-danger"><?php echo form_error('subject');?></span>
        </div>
        <div class="form-group">
            <input type="text" name="message" row="4" placeholder="Ваше отзыв" value="<?php echo set_value('message');?>" class="form_control">
            <span class="text-danger"><?php echo form_error('message');?></span>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-lg btn-warning pull-right" value="отправить">
        </div>
    </fieldset>
    <?php echo form_close();?>
    <?php echo $this->session->flashdata('msg'); ?>
</div>