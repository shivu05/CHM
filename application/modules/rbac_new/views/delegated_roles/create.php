<div class="col-sm-12">
 <?php $form_attribute = array(
                "name" => "delegated_role",
                "id" => "delegated_role",
                "method" => "POST"
            );
$form_action= "/rbac_new/delegated_roles/create";
 echo form_open($form_action, $form_attribute); ?>
<div class = 'form-group row'>
                                <label for = 'role_id' class = 'col-sm-2 col-form-label'>Role id</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"role_id",
                "id" => "role_id",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
); $role_id=(isset($data['role_id']))?$data['role_id']:'';echo form_error("role_id");echo form_dropdown($attribute,$role_id_list,$role_id); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'role_code' class = 'col-sm-2 col-form-label'>Role code</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"role_code",
                "id" => "role_code",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
"type"=>"text", 
"value" => (isset($data["role_code"]))?$data["role_code"]:""
); 
echo form_error("role_code"); echo form_input($attribute); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'user_id' class = 'col-sm-2 col-form-label'>User id</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"user_id",
                "id" => "user_id",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
"type"=>"number", 
"value" => (isset($data["user_id"]))?$data["user_id"]:""
); 
echo form_error("user_id"); echo form_input($attribute); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'delegated_by' class = 'col-sm-2 col-form-label'>Delegated by</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"delegated_by",
                "id" => "delegated_by",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
); $delegated_by=(isset($data['delegated_by']))?$data['delegated_by']:'';echo form_error("delegated_by");echo form_dropdown($attribute,$delegated_by_list,$delegated_by); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'created' class = 'col-sm-2 col-form-label'>Created</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"created",
                "id" => "created",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
"type"=>"datetime ", 
"value" => (isset($data["created"]))?$data["created"]:""
); 
echo form_error("created"); echo form_input($attribute); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'modified' class = 'col-sm-2 col-form-label'>Modified</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"modified",
                "id" => "modified",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
"type"=>"datetime ", 
"value" => (isset($data["modified"]))?$data["modified"]:""
); 
echo form_error("modified"); echo form_input($attribute); ?>
                                </div>
                           </div>
<div class = 'form-group row'>
                                <label for = 'status' class = 'col-sm-2 col-form-label'>Status</label>
                                <div class = 'col-sm-3'>
                                    <?php $attribute=array(
                "name" =>"status",
                "id" => "status",
                "class" => "form-control",
                "title" => "",
"required"=>"", 
); $status=(isset($data['status']))?$data['status']:'';echo form_error("status");echo form_dropdown($attribute,$status_list,$status); ?>
                                </div>
                           </div>

<div class = 'form-group row'>
<div class = 'col-sm-1'>
<a class="text-right btn btn-default" href="<?=APP_BASE?>rbac_new/delegated_roles/index">
<span class="glyphicon glyphicon-th-list"></span> Cancel
</a>
</div>
<div class = 'col-sm-1'>
<input type="submit" id="submit" value="Save" class="btn btn-primary">
</div>
</div>
 <?= form_close() ?>
</div>