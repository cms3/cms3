<h1><a href="http://kohanaphp.com/home">Kohana (2.3)</a> OpenID Module - Installation Instructions And Demo</h1>

<p>The latest version of this module is available from the kohanamodules repository on google code via svn : http://kohanamodules.googlecode.com/svn/trunk/openid</p>

<p>There are just a couple of openid config settings that you need to edit in the file config/openid.php</p>

<p>Then the following tables must be installed in your database: <code>users</code>, <code>user_identities</code> and <code>user_tokens</code>.</p>

<p>If you have not already installed these tables, please run the installation query below.</p>

<p>After you've edited the config and the tables have been set up in your database, you can <?php echo html::anchor('openid/register', 'register') ?> then <?php echo html::anchor('openid/login', 'login') ?>.</p>

<p><em>Note:</em> See Openid_Extension_Sreg.php for a list of the other user attributes supported by most OpenID providers. Openid_Extension_Ax.php can potentially support arbitrary attributes but the Ax Extension is not yet widely supported by OpenID providers.</p>

<?php
	if ($db_installed):?>

<p><strong>[You're good to go. Your database already contains the tables defined in the sql below.]</strong></p>

<?php
	else:?>

<p><em>This query is MySQL-specific, but should be easy to adapt to a database that supports foreign keys.</em></p>

<?php
	endif;

	echo form::open('openid');

	if (is_object($result) AND $result instanceof Exception): ?>

<ul class="errors">

	<li><?php echo $result->getMessage() ?></li>

</ul>

<?php
	endif ?>

<fieldset>

	<legend>Installation SQL</legend>

	<?php echo form::textarea(array('name' => 'query', 'style' => 'width:90%;height:30em;padding:0.5em'), $sql) ?>

</fieldset>

<?php
	if ( ! $db_installed):?>

<fieldset class="submit"><?php echo form::button(NULL, 'Run Query') ?></fieldset>

<?php
	endif;

	echo form::close();?>

<h3>Optional Aditional setup</h3>

<p>Openid 2.0 provides a way for OpenID Providers to verify a return_to url sent by a Relying Party (that's us!). For security reasons this is a good thing!</p>

<p>Also, from a user experience point of view it means that anyone signing up to your site/service with a yahoo openid will not see the worrying "this is not a trusted relying party" message. And that's got to be a good thing!</p>

<p>To enable the Providers to verify the return_to urls specified in each of your authentication requests you need to edit and upload to your server the yadis.xrdf file found in the root of this module.</p>

<p>Edit the URIs in the two service nodes to match the the return_to urls your application will use during authentication.</p>

<p>Next you just need to add this rewrite condition to your htaccess file.</p>

<pre>
# Turn on URL rewriting
RewriteEngine On

# -- for openID Relying Party discovery so the Provider can verify the return_to url
AddType application/xrds+xml .xrdf

RewriteCond %{HTTP_ACCEPT} application/xrds\+xml
RewriteCond %{HTTP_ACCEPT} !application/xrds\+xml\s*;\s*q\s*=\s*0(\.0{1,3})?\s*(,|$)
RewriteRule ^$ yadis.xrdf [L]
# --
</pre>

<p><em>NOTE:</em> If you have a rewrite condition limiting which files on your server are accessible don't forget to add the yadis.xrdf file to the list of 'allowed' files!</p>

<h4>One final thing...</h4>

<p>When asking for user attributes from the OpenID Provider using the SREG extension you are obliged to include the url to your privacy policy.</p>

<p>The policy url is set in the openid config file.</p>

<p>There are a number of free privacy policy generators online - one can be found <a href="http://www.dmaresponsibility.org/PPG/">here</a>.</p>
