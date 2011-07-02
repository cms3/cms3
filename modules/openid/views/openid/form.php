		<h1><?php echo $title; ?></h1>

		<?php echo form::open(); ?>


			<label for="email" >Your OpenID</label>

			<input type="text" id="openid_identifier" name="openid_identifier" value="<?php echo (isset($_POST['openid_identifier']))? $_POST['openid_identifier'] : '';?>"  />
<?php
	if (isset($formerrors['openid_identifier'])): ?>

			<p class="error"><?php echo $formerrors['openid_identifier'];?></p>
<?php
	endif;?>

			<input type="checkbox" id="remember" name="remember" value="1" checked="checked"  />

			<label for="remember" >remember me on this computer?</label>

			<input type="submit" id="submit" name="submit" value="Submit"  />

		</form>
