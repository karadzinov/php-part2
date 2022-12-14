<?php require_once "header.php"; ?>


<?php

$errors = $_GET;


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form class="needs-validation" method="post" action="/process/form.php">

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="firstName">
                        <div style="color: red;">
                            <?php
                            if(isset($errors['firstName'])) {
                                echo $errors['firstName'];
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02"   name="lastName">
                        <div style="color: red;">
                            <?php
                            if(isset($errors['lastName'])) {
                                echo $errors['lastName'];
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Email</label>
                        <input type="text" class="form-control" id="validationCustom01"  name="email">
                        <div style="color: red;">
                        <?php
                        if(isset($errors['email'])) {
                            echo $errors['email'];
                        }
                        ?>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Password</label>
                        <input type="password" class="form-control" id="validationCustom02"   name="password">
                        <div style="color: red;">
                            <?php
                            if(isset($errors['password'])) {
                                echo $errors['password'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">City</label>
                        <input type="text" class="form-control" id="validationCustom03"  name="city">
                        <div style="color: red;">
                            <?php
                            if(isset($errors['city'])) {
                                echo $errors['city'];
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">State</label>
                        <select class="custom-select" id="validationCustom04"  name="state">
                            <option></option>
                            <option>Macedonia</option>
                            <option>Serbia</option>
                        </select>

                        <div style="color: red;">
                            <?php
                            if(isset($errors['state'])) {
                                echo $errors['state'];
                            }
                            ?>
                        </div>

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05"  name="zip">
                        <div style="color: red;">
                            <?php
                            if(isset($errors['zip'])) {
                                echo $errors['zip'];
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="invalidCheck" name="iagree">
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div style="color: red;">
                            <?php
                            if(isset($errors['iagree'])) {
                                echo $errors['iagree'];
                            }
                            ?>
                        </div>

                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>


        </div>
    </div>
</div>


<?php require_once "footer.php"; ?>