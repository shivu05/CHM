<div class="col-sm-12">
    <?php
    $form_attribute = array(
        "name" => "rbac_users",
        "id" => "rbac_users",
        "method" => "POST"
    );
    $form_action = "/rbac_new/rbac_users/edit";
    echo form_open($form_action, $form_attribute);
    ?>
    <?php
    $attribute = array(
        "name" => "user_id",
        "id" => "user_id",
        "class" => "form-control",
        "title" => "",
        "required" => "",
        "type" => "hidden",
        "value" => (isset($data["user_id"])) ? $data["user_id"] : ""
    );
    echo form_error("user_id");
    echo form_input($attribute);
    ?><div class = 'form-group row'>
        <label for = 'first_name' class = 'col-sm-2 col-form-label'>First name</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "first_name",
                "id" => "first_name",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["first_name"])) ? $data["first_name"] : ""
            );
            echo form_error("first_name");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    <div class = 'form-group row'>
        <label for = 'last_name' class = 'col-sm-2 col-form-label'>Last name</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "last_name",
                "id" => "last_name",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["last_name"])) ? $data["last_name"] : ""
            );
            echo form_error("last_name");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    <div class = 'form-group row'>
        <label for = 'login_id' class = 'col-sm-2 col-form-label'>Login id</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "login_id",
                "id" => "login_id",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["login_id"])) ? $data["login_id"] : ""
            );
            echo form_error("login_id");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    <div class = 'form-group row'>
        <label for = 'email' class = 'col-sm-2 col-form-label'>Email</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["email"])) ? $data["email"] : ""
            );
            echo form_error("email");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    <div class = 'form-group row'>
        <label for = 'password' class = 'col-sm-2 col-form-label'>Password</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "password",
                "id" => "password",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["password"])) ? $data["password"] : ""
            );
            echo form_error("password");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    
    <div class = 'form-group row'>
        <label for = 'mobile' class = 'col-sm-2 col-form-label'>Mobile</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "mobile",
                "id" => "mobile",
                "class" => "form-control",
                "title" => "",
                "required" => "",
                "type" => "text",
                "value" => (isset($data["mobile"])) ? $data["mobile"] : ""
            );
            echo form_error("mobile");
            echo form_input($attribute);
            ?>
        </div>
    </div>
    
    <div class = 'form-group row'>
        <label for = 'status' class = 'col-sm-2 col-form-label'>Status</label>
        <div class = 'col-sm-3'>
            <?php
            $attribute = array(
                "name" => "status",
                "id" => "status",
                "class" => "form-control",
                "title" => "",
                "required" => "",
            );
            $status_list=array('active','inactive');
            $status = (isset($data['status'])) ? $data['status'] : '';
            echo form_error("status");
            echo form_dropdown($attribute, $status_list, $status);
            ?>
        </div>
    </div>

    <div class = 'form-group row'>
        <div class = 'col-sm-1'>
            <a class="text-right btn btn-default" href="<?= APP_BASE ?>rbac_new/rbac_users/index">
                <span class="glyphicon glyphicon-th-list"></span> Cancel
            </a>
        </div>
        <div class = 'col-sm-1'>
            <input type="submit" id="submit" value="Update" class="btn btn-primary">
        </div>
    </div>
    <?= form_close() ?>
</div>