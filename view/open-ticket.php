<form action="" method="post">
<div class="col-sm-6">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nombre </label>
    
        <div class="col-sm-12">
            <input type="text" disabled="disabled" id="name" name="name" class="col-xs-10 col-sm-10" value="<?php echo $_SESSION["ClientStaff"] ?>" />
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
    
        <div class="col-sm-12">
            <input type="text" disabled="disabled" id="email" name="email" class="col-xs-10 col-sm-10" value="<?php echo $_SESSION["email"] ?>" />
        </div>
    </div>
</div>
<div class="col-sm-10">
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Asunto </label>
    
        <div class="col-sm-12">
            <input type="text" id="title" name="title" placeholder="" class="col-xs-10 col-sm-10" required="required" />
        </div>
    </div>
</div>
<div class="col-sm-4">
	<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-select-1">Departamento</label>
    
        <div class="col-sm-12">
            <select class="col-xs-10 col-sm-10 form-control " id="did" name="did">
                <option value="1">Soporte</option>
                <option value="1">Ventas</option>
            </select>
        </div>
	</div>
</div>

<hr />
<div class="col-sm-11">
    <h4 class="header green">Mensaje</h4>

    <div class="widget-box widget-color-blue">
        <div class="widget-header widget-header-small">  </div>

        <div class="widget-body">
            <div class="widget-main no-padding">
                <textarea name="message" id="message" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
            </div>
            
        </div>
    </div>


</div>
<div class="col-sm-11">
    <div class="widget-toolbox padding-4 clearfix">
        <div class="btn-group pull-left">
            <button class="btn btn-sm btn-info">
                <i class="ace-icon fa fa-times bigger-125"></i>
                Cancelar
            </button>
        </div>
    
        <div class="btn-group pull-right">
            <button class="btn btn-sm btn-purple" type="submit" name="submitticket">
                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                Enviar
            </button>
        </div>
    </div>
</div>
</form>