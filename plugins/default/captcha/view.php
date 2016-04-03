<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
	$token = captcha_generate_token();
?>
<div class="margin-top-10">
	<img src="<?php echo ossn_site_url("captcha/{$token}");?>" />
	<input type="text" name="captcha_text" class="margin-top-10" placeholder="<?php echo ossn_print('captcha:text');?>" />
</div>
<input type="hidden" name="captcha" value="<?php echo $token;?>" />

