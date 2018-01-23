<div>
    <?php echo form_open('administration/profil'); ?>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="first_name">Prénom</label>
            <input type="input" class="form-control" name="first_name" id="first_name" value="<?php echo set_value('first_name', $profil->first_name); ?>">
            <?php echo form_error('first_name'); ?>
        </div>
        <div class="col-sm-6 form-group">
            <label for="last_name">Nom</label>
            <input type="input" class="form-control" name="last_name" id="last_name" value="<?php echo set_value('last_name', $profil->last_name); ?>">
            <?php echo form_error('last_name'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="birth_date">Date de naissance</label>
            <input type="date" class="form-control" name="birth_date" id="birth_date" value="<?php echo set_value('birth_date', $profil->birth_date); ?>">
            <?php echo form_error('birth_date'); ?>
        </div>
        <div class="col-sm-6 form-group">
            <label for="phone">Téléphone</label>
            <input type="input" class="form-control" name="phone" id="phone" value="<?php echo set_value('phone', $profil->phone); ?>">
            <?php echo form_error('phone'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo set_value('email', $profil->email); ?>">
        <?php echo form_error('email'); ?>
    </div>

    <div class="form-group">
        <label for="url_github">GitHub</label>
        <input type="input" class="form-control" name="url_github" id="url_github" value="<?php echo set_value('url_github', $profil->url_github); ?>">
        <?php echo form_error('url_github'); ?>
    </div>

    <div class="form-group">
        <label for="url_linkedin">Linkedin</label>
        <input type="input" class="form-control" name="url_linkedin" id="url_linkedin" value="<?php echo set_value('url_linkedin', $profil->url_linkedin); ?>">
        <?php echo form_error('url_linkedin'); ?>
    </div>

    <div class="form-group">
        <label for="adress">Adresse</label>
        <input type="input" class="form-control" name="adress" id="adress" value="<?php echo set_value('adress', $profil->adress); ?>">
        <?php echo form_error('adress'); ?>
    </div>

    <div class="row">
        <div class="col-sm-6 form-group">
            <label for="zip">Code postal</label>
            <input type="input" class="form-control" name="zip" id="zip" value="<?php echo set_value('zip', $profil->zip); ?>">
            <?php echo form_error('zip'); ?>
        </div>
        <div class="col-sm-6 form-group">
            <label for="city">Ville</label>
            <input type="input" class="form-control" name="city" id="city" value="<?php echo set_value('city', $profil->city); ?>">
            <?php echo form_error('city'); ?>
        </div>
    </div>
    <input type="submit" class="btn btn-outline-primary float-right" value="Modifier">
    </form>
</div>