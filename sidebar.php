<!-- begin sidebar -->
<div id="sidebar">
<ul>
	<li id="portrait">
           <img src="/images/me_small2.jpg" width="120" height="120"/>
	</li>
	<li id="search"><?php _e('Search'); ?>
   		<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
				<input type="text" name="s" id="s" size="15" /><br />
				<? /*<input type="submit" value="<?php _e('Search'); ?>" />*/?>
			</div>
		</form>
	</li>

	<li id="flickr"><?php _e('Flickr'); ?>
<embed bgcolor="#ffffff" src="/flash/badgr2.swf?displaytime=2&framescaling=1.05,1.01,1.12,1.04&userid=84921507@N00&limit=25&framecolors=ffffff,535353,000000,ffffff,000000&framealphas=0,0,0,100,100&badgrmode=1&rows=5&waittime=3&columns=3&rolling=no&bgcolor=ffffff" width="114" height="190" /><br/>
                <a href="http://www.flickr.com/photos/markmorga" title="My Photos on Flickr">My Photography</a><br/>
<a href="http://vimeo.com/markmorga" title="My Videos on Vimeo">My Videos</a>
	</li>
 
	<!--<li id="twitter"><?php _e('Twitter Updates'); ?>
<div id="twitter_div">
<ul id="twitter_update_list"></ul></div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/mmorga.json?callback=twitterCallback2&count=5"></script>
</li>-->
	<li id="search"><?php _e('Professional Info'); ?>
		<ul><li><a href="http://markmorga.com/resume/markmorgaresume.html" title="My R&eacute;sum&eacute;"> R&eacute;sum&eacute;</a></li></ul>
	</li>

	<?php wp_list_pages(); ?>
	<li id="categories"><?php _e('Categories'); ?>
		<ul>
			<?php wp_list_cats(); ?>
		</ul>
 	</li>

        <li id="recently"><script type="text/javascript" src="http://www.google.com/reader/ui/publisher.js"></script>
<script type="text/javascript" src="http://www.google.com/reader/public/javascript/user/07993520239194405806/state/com.google/broadcast?n=8&callback=GRC_p(%7Bc%3A'-'%2Ct%3A'Mark%5C047s%20shared%20items'%2Cs%3A'false'%7D)%3Bnew%20GRC"></script>
        </li>

	<li id="archives"><?php _e('Archives'); ?>
 		<ul>
	 		<?php wp_get_archives('type=monthly'); ?>
 		</ul>
 	</li>
 	<li id="feeds"><?php _e('Feeds'); ?>
 		<ul>
			<li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr> Contents'); ?></a></li>
			<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		</ul>
	</li>

	<?php get_links_list(); ?>
        <li id="subscribe"><?php _e('Subscribe'); ?>
                <ul>
<form Method="POST" action="http://www.feedblitz.com/f/f.fbz?AddNewUserDirect">
<li>Enter your Email<br><input name="EMAIL" maxlength="255" type="text" size="15" value=""><br>
<input name="FEEDID" type="hidden" value="140721">
<input type="submit" value="Subscribe me!">
<br><a href="http://www.feedblitz.com/f?previewfeed=140721">Preview</a> | Powered by <a href="http://www.feedblitz.com">FeedBlitz</a></form>
                </ul>
        </li>
 	<li id="meta"><?php _e('Meta'); ?>
 		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<?php /*
			<li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>'); ?></a></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
			*/?>
 			<?php wp_meta(); ?>
		</ul>
 	</li>
        <li id="kaboodle">
<a href="http://www.kaboodle.com/mmorga/mmorgas-wish-list.html">My Wish List</a>
 	</li>

        <li id="technorati">
<a href="http://technorati.com/faves?sub=addfavbtn&amp;add=http://markmorga.com"><img src="http://static.technorati.com/pix/fave/tech-fav-1.png" alt="Add to Technorati Favorites" /></a>
 	</li>


</ul>
</div>
<!-- end sidebar -->
