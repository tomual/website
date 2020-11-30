<?php $this->load->view('header') ?>
<nav id="side">
    <a href="<?php echo base_url('material') ?>"><img src="<?php echo base_url('img/header material.png') ?>"></a>
    <nav id="guide">
        <br>
        <h1><a href="<?php echo base_url('material') ?>">MATERIAL</a></h1>
        <a href="<?php echo base_url('material') ?>">
        </a>
        <ul>
            <a href="<?php echo base_url('material') ?>">
            </a>

            <li><a href="<?php echo base_url('material/toybox') ?>">Graphics</a></li>
            <li><a href="<?php echo base_url('material/backgrounds') ?>">Backgrounds</a></li>
            <li><a href="<?php echo base_url('material/bullets') ?>">Bullets</a></li>
            <li><a href="<?php echo base_url('material/emoticons') ?>">Emoticons</a></li>
            <li><a href="<?php echo base_url('material/blog-layouts') ?>">HTML Layouts</a></li>
        </ul>
    </nav>
    <img src="<?php echo base_url('img/footer.png') ?>" style="position: fixed; bottom: 30px; left: 50px;">
    <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('img/footerhref.png') ?>" style="position: fixed; bottom: 29px; left: 48px;"></a>
</nav>
<section>
    <img src="<?php echo base_url('img/sectiontop.png') ?>" style="position: absolute; top: -1px; left: 218px;">
    <img src="<?php echo base_url('img/pick.png') ?>" style="padding-top: 50px;"> 


<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>

<h1>Hyperion</h1>
<br />
<img src="<?php echo base_url('img/material/layout/hyperion.png') ?>" class="border">
<p>
<br />
Minimalistic small layout. Title on to left, navigation on top right. A meteor moves in the top center. Page links in the bottom right.
</p>
<p class="center">
<a href="<?php echo base_url('demo/material/layout/hyperion/demo.html') ?>">Preview</a>
</p>
<h2>HTML</h2>
<textarea class="code" rows="10" spellcheck="false">	&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
&lt;head&gt;
&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
&lt;title&gt;H Y P E R I O N&lt;/title&gt;
&lt;style type="text/css"&gt;
body {
	background-image: url(bg.png);
}
section {
	width: 410px;
	margin: auto;
	padding-top: 100px;
	text-align: center;
}
article {
	width: 370px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	text-align:left;
	color: #333;
	line-height: 20px;
	background-color: #FFF;
	padding: 20px;
	padding-top: 30px;
	padding-bottom: 30px;
	float: left;
}
h1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	text-transform: uppercase;
	font-weight: normal;
	margin: 0px;
	float: left;
	padding: 0px;
}
h2 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size: 10px;
	font-weight: normal;
	color: #CCC;
	float: right;
	margin: 0px;
	padding: 0px;
}
header {
	font-family: "Courier New", Courier, monospace;
	color: #FFF;
	font-weight: normal;
	font-variant: normal;
	text-transform: uppercase;
	float: left;
	font-size: 11px;
	letter-spacing: 1px;
	opacity: 0.8;
}

nav {
	font-family: "Courier New", Courier, monospace;
	color: #FFF;
	float: right;
}

nav a{
	font-family: "Courier New", Courier, monospace;
	color: #FFF;
	float: right;
	text-decoration:none;
	opacity: 0.7;
}
footer {
	font-family: "Courier New", Courier, monospace;
	color: #FFF;
	font-weight: normal;
	font-variant: normal;
	text-transform: uppercase;
	float: right;
	font-size: 12px;
	letter-spacing: 1px;
}
footer a{
	font-family: "Courier New", Courier, monospace;
	color: #FFF;
	text-decoration:none;
	opacity: 0.7;
}
a:hover {
	opacity: 1;
}
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
&lt;section&gt;
&lt;img src="meteor.gif" width="36" height="37" /&gt;&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;
&lt;header&gt;
  Hyperion 
&lt;/header&gt;
&lt;nav&gt;
&lt;a href="index.html" title="home"&gt;•&lt;/a&gt; &lt;a href="archive.html" title="archive"&gt;•&lt;/a&gt; &lt;a href="info.html" title="info"&gt;•&lt;/a&gt; &lt;/nav&gt;
&lt;article&gt;
&lt;h1&gt;• Tranformation&lt;/h1&gt;&lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
&lt;p&gt;&lt;br /&gt;
  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;
&lt;/article&gt;
&lt;article&gt;
  &lt;h1&gt;• Tranformation&lt;/h1&gt;
  &lt;h2&gt;12/03/12 23:00&lt;/h2&gt;
  &lt;p&gt;&lt;br /&gt;
  OLD MANX SAILOR. I wonder whether those jolly lads bethink them of what they are dancing over. I'll dance over your grave, I will—that's the bitterest threat of your night-women, that beat head-winds round corners. O Christ! to think of the green navies and the green-skulled crews! Well, well; belike the whole world's a ball, as you scholars have it; and so 'tis right to make one ballroom of it. Dance on, lads, you're young; I was once.&lt;/p&gt;
&lt;/article&gt;

&lt;footer&gt;&lt;a href=""&gt;&lt;&lt;/a&gt; &lt;a href=""&gt;&gt;&lt;/a&gt;&lt;/footer&gt;
&lt;/section&gt;

&lt;/body&gt;
&lt;/html&gt;

	</textarea>

<h2>Blogger</h2>
<textarea class="code" rows="10" spellcheck="false">&lt;!DOCTYPE html&gt;
&lt;html b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'&gt;
  &lt;head&gt;
    &lt;title&gt;
      &lt;data:blog.pageTitle/&gt;
    &lt;/title&gt;
    &lt;b:skin&gt;
      &lt;![CDATA[
body {
background-image: url(bg.png);
}
section {
width: 410px;
margin: auto;
padding-top: 100px;
text-align: center;
}
article {
width: 370px;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 10px;
text-align:left;
color: #333;
line-height: 20px;
background-color: #FFF;
padding: 20px;
padding-top: 30px;
padding-bottom: 30px;
float: left;
}
h1 {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 10px;
text-transform: uppercase;
font-weight: normal;
margin: 0px;
float: left;
padding: 0px;
}
h2 {
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 10px;
font-weight: normal;
color: #CCC;
float: right;
margin: 0px;
padding: 0px;
}
header {
font-family: "Courier New", Courier, monospace;
color: #FFF;
font-weight: normal;
font-variant: normal;
text-transform: uppercase;
float: left;
font-size: 11px;
letter-spacing: 1px;
opacity: 0.8;
}
nav {
font-family: "Courier New", Courier, monospace;
color: #FFF;
float: right;
}
nav a{
font-family: "Courier New", Courier, monospace;
color: #FFF;
float: right;
text-decoration:none;
opacity: 0.7;
}
footer {
font-family: "Courier New", Courier, monospace;
color: #FFF;
font-weight: normal;
font-variant: normal;
text-transform: uppercase;
float: right;
font-size: 12px;
letter-spacing: 1px;
position: relative;
top: 47px;
left: 35px;
}
footer a{
font-family: "Courier New", Courier, monospace;
color: #FFF;
text-decoration:none;
opacity: 0.7;
}
a:hover {
opacity: 1;
}
h1 a {
text-decoration: none;
color: #000;
}
]]&gt;
    &lt;/b:skin&gt;
    &lt;b:if cond='data:blog.pageType == "static_page"'&gt;
    &lt;/b:if&gt;
    &lt;b:template-skin/&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;section&gt;
      &lt;img height='37' src='meteor.gif' width='36'/&gt;
      &lt;br/&gt;
      &lt;br/&gt;
      &lt;br/&gt;
      &lt;header&gt;
        Hyperion 
      &lt;/header&gt;
      &lt;nav&gt;
        &lt;a href='index.html' title='home'&gt;
          •
        &lt;/a&gt;
        &lt;a href='archive.html' title='archive'&gt;
          •
        &lt;/a&gt;
        &lt;a href='info.html' title='info'&gt;
          •
        &lt;/a&gt;
      &lt;/nav&gt;
      &lt;article&gt;
        &lt;b:section id='main'&gt;
          &lt;b:widget id='Blog1' locked='true' title='Blog Posts' type='Blog'&gt;
            &lt;b:includable id='main' var='top'&gt;
              &lt;b:if cond='data:mobile == "false"'&gt;
                &lt;!-- posts --&gt;
                &lt;div class='blog-posts hfeed'&gt;
                  &lt;b:include data='top' name='status-message'/&gt;
                  &lt;data:defaultAdStart/&gt;
                  &lt;b:loop values='data:posts' var='post'&gt;
                    &lt;div class='post-outer'&gt;
                      &lt;b:include data='post' name='post'/&gt;
                      &lt;b:if cond='data:blog.pageType == "static_page"'&gt;
                        &lt;b:include data='post' name='comment_picker'/&gt;
                      &lt;/b:if&gt;
                      &lt;b:if cond='data:blog.pageType == "item"'&gt;
                        &lt;b:include data='post' name='comment_picker'/&gt;
                      &lt;/b:if&gt;
                    &lt;/div&gt;
                    &lt;b:if cond='data:post.includeAd'&gt;
                      &lt;b:if cond='data:post.isFirstPost'&gt;
                        &lt;data:defaultAdEnd/&gt;
                        &lt;b:else/&gt;
                        &lt;data:adEnd/&gt;
                      &lt;/b:if&gt;
                      &lt;div class='inline-ad'&gt;
                        &lt;data:adCode/&gt;
                      &lt;/div&gt;
                      &lt;data:adStart/&gt;
                    &lt;/b:if&gt;
                  &lt;/b:loop&gt;
                  &lt;b:if cond='data:numPosts != 0'&gt;
                    &lt;/div&gt;&lt;/div&gt;
                  &lt;/b:if&gt;
                  &lt;data:adEnd/&gt;
                &lt;/div&gt;
                &lt;!-- navigation --&gt;
                &lt;b:include name='nextprev'/&gt;
                &lt;!-- feed links --&gt;
                &lt;b:include name='feedLinks'/&gt;
                &lt;b:if cond='data:top.showStars'&gt;
                  &lt;script src='//www.google.com/jsapi' type='text/javascript'/&gt;
                  &lt;script type='text/javascript'&gt;
                    google.load("annotations", "1", {"locale": "&lt;data:top.languageCode/&gt;"});
                    function initialize() {
                      google.annotations.setApplicationId(&lt;data:top.blogspotReviews/&gt;);
                      google.annotations.createAll();
                      google.annotations.fetch();
                    }
                    google.setOnLoadCallback(initialize);
                  &lt;/script&gt;
                &lt;/b:if&gt;
                &lt;b:else/&gt;
                &lt;b:include name='mobile-main'/&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showDummy'&gt;
                &lt;data:top.dummyBootstrap/&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='backlinkDeleteIcon' var='backlink'&gt;
              &lt;span expr:class='"item-control " + data:backlink.adminClass'&gt;
                &lt;a expr:href='data:backlink.deleteUrl' expr:title='data:top.deleteBacklinkMsg'&gt;
                  &lt;img src='//www.blogger.com/img/icon_delete13.gif'/&gt;
                &lt;/a&gt;
              &lt;/span&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='backlinks' var='post'&gt;
              &lt;a name='links'/&gt;
              &lt;h4&gt;
                &lt;data:post.backlinksLabel/&gt;
              &lt;/h4&gt;
              &lt;b:if cond='data:post.numBacklinks != 0'&gt;
                &lt;dl class='comments-block' id='comments-block'&gt;
                  &lt;b:loop values='data:post.backlinks' var='backlink'&gt;
                    &lt;div class='collapsed-backlink backlink-control'&gt;
                      &lt;dt class='comment-title'&gt;
                        &lt;span class='backlink-toggle-zippy'&gt;
                          &nbsp;
                        &lt;/span&gt;
                        &lt;a expr:href='data:backlink.url' rel='nofollow'&gt;
                          &lt;data:backlink.title/&gt;
                        &lt;/a&gt;
                        &lt;b:include data='backlink' name='backlinkDeleteIcon'/&gt;
                      &lt;/dt&gt;
                      &lt;dd class='comment-body collapseable'&gt;
                        &lt;data:backlink.snippet/&gt;
                      &lt;/dd&gt;
                      &lt;dd class='comment-footer collapseable'&gt;
                        &lt;span class='comment-author'&gt;
                          &lt;data:post.authorLabel/&gt;
                          &lt;data:backlink.author/&gt;
                        &lt;/span&gt;
                        &lt;span class='comment-timestamp'&gt;
                          &lt;data:post.timestampLabel/&gt;
                          &lt;data:backlink.timestamp/&gt;
                        &lt;/span&gt;
                      &lt;/dd&gt;
                    &lt;/div&gt;
                  &lt;/b:loop&gt;
                &lt;/dl&gt;
              &lt;/b:if&gt;
              &lt;p class='comment-footer'&gt;
                &lt;a class='comment-link' expr:href='data:post.createLinkUrl' expr:id='data:widget.instanceId + "_backlinks-create-link"' target='_blank'&gt;
                  &lt;data:post.createLinkLabel/&gt;
                &lt;/a&gt;
              &lt;/p&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='comment-form' var='post'&gt;
              &lt;div class='comment-form'&gt;
                &lt;a name='comment-form'/&gt;
                &lt;b:if cond='data:mobile'&gt;
                  &lt;h4 id='comment-post-message'&gt;
                    &lt;a expr:id='data:widget.instanceId + "_comment-editor-toggle-link"' href='javascript:void(0)'&gt;
                      &lt;data:postCommentMsg/&gt;
                    &lt;/a&gt;
                  &lt;/h4&gt;
                  &lt;p&gt;
                    &lt;data:blogCommentMessage/&gt;
                  &lt;/p&gt;
                  &lt;data:blogTeamBlogMessage/&gt;
                  &lt;a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/&gt;
                  &lt;iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/&gt;
                  &lt;b:else/&gt;
                  &lt;h4 id='comment-post-message'&gt;
                    &lt;data:postCommentMsg/&gt;
                  &lt;/h4&gt;
                  &lt;p&gt;
                    &lt;data:blogCommentMessage/&gt;
                  &lt;/p&gt;
                  &lt;data:blogTeamBlogMessage/&gt;
                  &lt;a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/&gt;
                  &lt;iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/&gt;
                &lt;/b:if&gt;
                &lt;data:post.friendConnectJs/&gt;
                &lt;data:post.cmtfpIframe/&gt;
                &lt;script type='text/javascript'&gt;
                  BLOG_CMT_createIframe('&lt;data:post.appRpcRelayPath/&gt;', '&lt;data:post.communityId/&gt;');
                &lt;/script&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='commentDeleteIcon' var='comment'&gt;
              &lt;span expr:class='"item-control " + data:comment.adminClass'&gt;
                &lt;b:if cond='data:showCmtPopup'&gt;
                  &lt;div class='goog-toggle-button'&gt;
                    &lt;div class='goog-inline-block comment-action-icon'/&gt;
                  &lt;/div&gt;
                  &lt;b:else/&gt;
                  &lt;a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:top.deleteCommentMsg'&gt;
                    &lt;img src='//www.blogger.com/img/icon_delete13.gif'/&gt;
                  &lt;/a&gt;
                &lt;/b:if&gt;
              &lt;/span&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='comment_count_picker' var='post'&gt;
              &lt;b:if cond='data:post.commentSource == 1'&gt;
                &lt;span class='cmt_count_iframe_holder' expr:data-count='data:post.numComments' expr:data-onclick='data:post.addCommentOnclick' expr:data-post-url='data:post.url' expr:data-url='data:post.canonicalUrl'&gt;
                &lt;/span&gt;
                &lt;b:else/&gt;
                &lt;a class='comment-link' expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'&gt;
                  &lt;data:post.commentLabelFull/&gt;
                  :
                &lt;/a&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='comment_picker' var='post'&gt;
              &lt;b:if cond='data:post.commentSource == 1'&gt;
                &lt;b:include data='post' name='iframe_comments'/&gt;
                &lt;b:else/&gt;
                &lt;b:if cond='data:post.showThreadedComments'&gt;
                  &lt;b:include data='post' name='threaded_comments'/&gt;
                  &lt;b:else/&gt;
                  &lt;b:include data='post' name='comments'/&gt;
                &lt;/b:if&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='comments' var='post'&gt;
              &lt;div class='comments' id='comments'&gt;
                &lt;a name='comments'/&gt;
                &lt;b:if cond='data:post.allowComments'&gt;
                  &lt;h4&gt;
                    &lt;data:post.commentLabelFull/&gt;
                    :
                  &lt;/h4&gt;
                  &lt;b:if cond='data:post.commentPagingRequired'&gt;
                    &lt;span class='paging-control-container'&gt;
                      &lt;b:if cond='data:post.hasOlderLinks'&gt;
                        &lt;a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'&gt;
                          &lt;data:post.oldestLinkText/&gt;
                        &lt;/a&gt;
                        &nbsp;
                        &lt;a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'&gt;
                          &lt;data:post.olderLinkText/&gt;
                        &lt;/a&gt;
                        &nbsp;
                      &lt;/b:if&gt;
                      &lt;data:post.commentRangeText/&gt;
                      &lt;b:if cond='data:post.hasNewerLinks'&gt;
                        &nbsp;
                        &lt;a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'&gt;
                          &lt;data:post.newerLinkText/&gt;
                        &lt;/a&gt;
                        &nbsp;
                        &lt;a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'&gt;
                          &lt;data:post.newestLinkText/&gt;
                        &lt;/a&gt;
                      &lt;/b:if&gt;
                    &lt;/span&gt;
                  &lt;/b:if&gt;
                  &lt;div expr:id='data:widget.instanceId + "_comments-block-wrapper"'&gt;
                    &lt;dl expr:class='data:post.avatarIndentClass' id='comments-block'&gt;
                      &lt;b:loop values='data:post.comments' var='comment'&gt;
                        &lt;dt expr:class='"comment-author " + data:comment.authorClass' expr:id='data:comment.anchorName'&gt;
                          &lt;b:if cond='data:comment.favicon'&gt;
                            &lt;img expr:src='data:comment.favicon' height='16px' style='margin-bottom:-2px;' width='16px'/&gt;
                          &lt;/b:if&gt;
                          &lt;a expr:name='data:comment.anchorName'/&gt;
                          &lt;b:if cond='data:blog.enabledCommentProfileImages'&gt;
                            &lt;data:comment.authorAvatarImage/&gt;
                          &lt;/b:if&gt;
                          &lt;b:if cond='data:comment.authorUrl'&gt;
                            &lt;a expr:href='data:comment.authorUrl' rel='nofollow'&gt;
                              &lt;data:comment.author/&gt;
                            &lt;/a&gt;
                            &lt;b:else/&gt;
                            &lt;data:comment.author/&gt;
                          &lt;/b:if&gt;
                          &lt;data:commentPostedByMsg/&gt;
                        &lt;/dt&gt;
                        &lt;dd class='comment-body' expr:id='data:widget.instanceId + data:comment.cmtBodyIdPostfix'&gt;
                          &lt;b:if cond='data:comment.isDeleted'&gt;
                            &lt;span class='deleted-comment'&gt;
                              &lt;data:comment.body/&gt;
                            &lt;/span&gt;
                            &lt;b:else/&gt;
                            &lt;p&gt;
                              &lt;data:comment.body/&gt;
                            &lt;/p&gt;
                          &lt;/b:if&gt;
                        &lt;/dd&gt;
                        &lt;dd class='comment-footer'&gt;
                          &lt;span class='comment-timestamp'&gt;
                            &lt;a expr:href='data:comment.url' title='comment permalink'&gt;
                              &lt;data:comment.timestamp/&gt;
                            &lt;/a&gt;
                            &lt;b:include data='comment' name='commentDeleteIcon'/&gt;
                          &lt;/span&gt;
                        &lt;/dd&gt;
                      &lt;/b:loop&gt;
                    &lt;/dl&gt;
                  &lt;/div&gt;
                  &lt;b:if cond='data:post.commentPagingRequired'&gt;
                    &lt;span class='paging-control-container'&gt;
                      &lt;a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'&gt;
                        &lt;data:post.oldestLinkText/&gt;
                      &lt;/a&gt;
                      &lt;a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'&gt;
                        &lt;data:post.olderLinkText/&gt;
                      &lt;/a&gt;
                      &nbsp;
                      &lt;data:post.commentRangeText/&gt;
                      &nbsp;
                      &lt;a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'&gt;
                        &lt;data:post.newerLinkText/&gt;
                      &lt;/a&gt;
                      &lt;a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'&gt;
                        &lt;data:post.newestLinkText/&gt;
                      &lt;/a&gt;
                    &lt;/span&gt;
                  &lt;/b:if&gt;
                  &lt;p class='comment-footer'&gt;
                    &lt;b:if cond='data:post.embedCommentForm'&gt;
                      &lt;b:if cond='data:post.allowNewComments'&gt;
                        &lt;b:include data='post' name='comment-form'/&gt;
                        &lt;b:else/&gt;
                        &lt;data:post.noNewCommentsText/&gt;
                      &lt;/b:if&gt;
                      &lt;b:else/&gt;
                      &lt;b:if cond='data:post.allowComments'&gt;
                        &lt;a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'&gt;
                          &lt;data:postCommentMsg/&gt;
                        &lt;/a&gt;
                      &lt;/b:if&gt;
                    &lt;/b:if&gt;
                  &lt;/p&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:showCmtPopup'&gt;
                  &lt;div id='comment-popup'&gt;
                    &lt;iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'&gt;
                    &lt;/iframe&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
                &lt;div id='backlinks-container'&gt;
                  &lt;div expr:id='data:widget.instanceId + "_backlinks-container"'&gt;
                    &lt;b:if cond='data:post.showBacklinks'&gt;
                      &lt;b:include data='post' name='backlinks'/&gt;
                    &lt;/b:if&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='feedLinks'&gt;
              &lt;b:if cond='data:blog.pageType != "item"'&gt;
                &lt;!-- Blog feed links --&gt;
                &lt;b:if cond='data:feedLinks'&gt;
                &lt;/b:if&gt;
                &lt;b:else/&gt;
                &lt;!--Post feed links --&gt;
                &lt;div class='post-feeds'&gt;
                  &lt;b:loop values='data:posts' var='post'&gt;
                    &lt;b:if cond='data:post.allowComments'&gt;
                      &lt;b:if cond='data:post.feedLinks'&gt;
                      &lt;/b:if&gt;
                    &lt;/b:if&gt;
                  &lt;/b:loop&gt;
                &lt;/div&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='feedLinksBody' var='links'&gt;
              &lt;div class='feed-links'&gt;
                &lt;data:feedLinksMsg/&gt;
                &lt;b:loop values='data:links' var='f'&gt;
                  &lt;a class='feed-link' expr:href='data:f.url' expr:type='data:f.mimeType' target='_blank'&gt;
                    &lt;data:f.name/&gt;
                    (
                    &lt;data:f.feedType/&gt;
                    )
                  &lt;/a&gt;
                &lt;/b:loop&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='iframe_comments' var='post'&gt;
              &lt;b:if cond='data:post.allowIframeComments'&gt;
                &lt;script expr:src='data:post.iframeCommentSrc' type='text/javascript'/&gt;
                &lt;div class='cmt_iframe_holder' expr:data-href='data:post.canonicalUrl' expr:data-viewtype='data:post.viewType'/&gt;
                &lt;b:if cond='data:post.embedCommentForm == "false"'&gt;
                  &lt;a expr:href='data:post.addCommentUrl' expr:onclick='data:post.addCommentOnclick'&gt;
                    &lt;data:postCommentMsg/&gt;
                  &lt;/a&gt;
                &lt;/b:if&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='mobile-index-post' var='post'&gt;
              &lt;div class='mobile-date-outer date-outer'&gt;
                &lt;b:if cond='data:post.dateHeader'&gt;
                  &lt;div class='date-header'&gt;
                    &lt;span&gt;
                      &lt;data:post.dateHeader/&gt;
                    &lt;/span&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
                &lt;div class='mobile-post-outer'&gt;
                  &lt;a expr:href='data:post.url'&gt;
                    &lt;h3 class='mobile-index-title entry-title' itemprop='name'&gt;
                      &lt;data:post.title/&gt;
                    &lt;/h3&gt;
                    &lt;div class='mobile-index-arrow'&gt;
                      &amp;rsaquo;
                    &lt;/div&gt;
                    &lt;div class='mobile-index-contents'&gt;
                      &lt;b:if cond='data:post.thumbnailUrl'&gt;
                        &lt;div class='mobile-index-thumbnail'&gt;
                          &lt;div class='Image'&gt;
                            &lt;img expr:src='data:post.thumbnailUrl'/&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/b:if&gt;
                      &lt;div class='post-body'&gt;
                        &lt;b:if cond='data:post.snippet'&gt;
                          &lt;data:post.snippet/&gt;
                        &lt;/b:if&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div style='clear: both;'/&gt;
                  &lt;/a&gt;
                  &lt;div class='mobile-index-comment'&gt;
                    &lt;b:if cond='data:blog.pageType != "static_page"'&gt;
                      &lt;b:if cond='data:post.allowComments'&gt;
                        &lt;b:if cond='data:post.numComments != 0'&gt;
                          &lt;b:include data='post' name='comment_count_picker'/&gt;
                        &lt;/b:if&gt;
                      &lt;/b:if&gt;
                    &lt;/b:if&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='mobile-main' var='top'&gt;
              &lt;!-- posts --&gt;
              &lt;div class='blog-posts hfeed'&gt;
                &lt;b:include data='top' name='status-message'/&gt;
                &lt;b:if cond='data:blog.pageType == "index"'&gt;
                  &lt;b:loop values='data:posts' var='post'&gt;
                    &lt;b:include data='post' name='mobile-index-post'/&gt;
                  &lt;/b:loop&gt;
                  &lt;b:else/&gt;
                  &lt;b:loop values='data:posts' var='post'&gt;
                    &lt;b:include data='post' name='mobile-post'/&gt;
                  &lt;/b:loop&gt;
                &lt;/b:if&gt;
              &lt;/div&gt;
              &lt;b:include name='mobile-nextprev'/&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='mobile-nextprev'&gt;
              &lt;div class='blog-pager' id='blog-pager'&gt;
                &lt;b:if cond='data:newerPageUrl'&gt;
                  &lt;div class='mobile-link-button' id='blog-pager-newer-link'&gt;
                    &lt;a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + "_blog-pager-newer-link"' expr:title='data:newerPageTitle'&gt;
                      &amp;lsaquo;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:olderPageUrl'&gt;
                  &lt;div class='mobile-link-button' id='blog-pager-older-link'&gt;
                    &lt;a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + "_blog-pager-older-link"' expr:title='data:olderPageTitle'&gt;
                      &amp;rsaquo;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
                &lt;div class='mobile-link-button' id='blog-pager-home-link'&gt;
                  &lt;a class='home-link' expr:href='data:blog.homepageUrl'/&gt;
                &lt;/div&gt;
                &lt;div class='mobile-desktop-link'&gt;
                  &lt;a class='home-link' expr:href='data:desktopLinkUrl'&gt;
                    &lt;data:desktopLinkMsg/&gt;
                  &lt;/a&gt;
                &lt;/div&gt;
              &lt;/div&gt;
              &lt;div class='clear'/&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='mobile-post' var='post'&gt;
              &lt;div class='date-outer'&gt;
                &lt;b:if cond='data:post.dateHeader'&gt;
                  &lt;h2 class='date-header'&gt;
                    &lt;span&gt;
                      &lt;data:post.dateHeader/&gt;
                    &lt;/span&gt;
                  &lt;/h2&gt;
                &lt;/b:if&gt;
                &lt;div class='date-posts'&gt;
                  &lt;div class='post-outer'&gt;
                    &lt;div class='post hentry uncustomized-post-template' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'&gt;
                      &lt;b:if cond='data:post.thumbnailUrl'&gt;
                        &lt;meta expr:content='data:post.thumbnailUrl' itemprop='image_url'/&gt;
                      &lt;/b:if&gt;
                      &lt;meta expr:content='data:blog.blogId' itemprop='blogId'/&gt;
                      &lt;meta expr:content='data:post.id' itemprop='postId'/&gt;
                      &lt;a expr:name='data:post.id'/&gt;
                      &lt;b:if cond='data:post.title'&gt;
                        &lt;h3 class='post-title entry-title' itemprop='name'&gt;
                          &lt;b:if cond='data:post.link'&gt;
                            &lt;a expr:href='data:post.link'&gt;
                              &lt;data:post.title/&gt;
                            &lt;/a&gt;
                            &lt;b:else/&gt;
                            &lt;b:if cond='data:post.url'&gt;
                              &lt;b:if cond='data:blog.url != data:post.url'&gt;
                                &lt;a expr:href='data:post.url'&gt;
                                  &lt;data:post.title/&gt;
                                &lt;/a&gt;
                                &lt;b:else/&gt;
                                &lt;data:post.title/&gt;
                              &lt;/b:if&gt;
                              &lt;b:else/&gt;
                              &lt;data:post.title/&gt;
                            &lt;/b:if&gt;
                          &lt;/b:if&gt;
                        &lt;/h3&gt;
                      &lt;/b:if&gt;
                      &lt;div class='post-header'&gt;
                        &lt;div class='post-header-line-1'/&gt;
                      &lt;/div&gt;
                      &lt;div class='post-body entry-content' expr:id='"post-body-" + data:post.id' itemprop='articleBody'&gt;
                        &lt;data:post.body/&gt;
                        &lt;div style='clear: both;'/&gt;
                        &lt;!-- clear for photos floats --&gt;
                      &lt;/div&gt;
                      &lt;div class='post-footer'&gt;
                        &lt;div class='post-footer-line post-footer-line-1'&gt;
                          &lt;span class='post-author vcard'&gt;
                            &lt;b:if cond='data:top.showAuthor'&gt;
                              &lt;b:if cond='data:post.authorProfileUrl'&gt;
                                &lt;span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'&gt;
                                  &lt;meta expr:content='data:post.authorProfileUrl' itemprop='url'/&gt;
                                  &lt;a expr:href='data:post.authorProfileUrl' rel='author' title='author profile'&gt;
                                    &lt;span itemprop='name'&gt;
                                      &lt;data:post.author/&gt;
                                    &lt;/span&gt;
                                  &lt;/a&gt;
                                &lt;/span&gt;
                                &lt;b:else/&gt;
                                &lt;span class='fn' itemprop='author' itemscope='itemscope' itemtype='http://schema.org/Person'&gt;
                                  &lt;span itemprop='name'&gt;
                                    &lt;data:post.author/&gt;
                                  &lt;/span&gt;
                                &lt;/span&gt;
                              &lt;/b:if&gt;
                            &lt;/b:if&gt;
                          &lt;/span&gt;
                          &lt;span class='post-timestamp'&gt;
                            &lt;b:if cond='data:top.showTimestamp'&gt;
                              &lt;data:top.timestampLabel/&gt;
                              &lt;b:if cond='data:post.url'&gt;
                                &lt;meta expr:content='data:post.canonicalUrl' itemprop='url'/&gt;
                                &lt;a class='timestamp-link' expr:href='data:post.url' rel='bookmark' title='permanent link'&gt;
                                  &lt;abbr class='published' expr:title='data:post.timestampISO8601' itemprop='datePublished'&gt;
                                    &lt;data:post.timestamp/&gt;
                                  &lt;/abbr&gt;
                                &lt;/a&gt;
                              &lt;/b:if&gt;
                            &lt;/b:if&gt;
                          &lt;/span&gt;
                          &lt;span class='post-comment-link'&gt;
                            &lt;b:if cond='data:blog.pageType != "item"'&gt;
                              &lt;b:if cond='data:blog.pageType != "static_page"'&gt;
                                &lt;b:if cond='data:post.allowComments'&gt;
                                  &lt;b:include data='post' name='comment_count_picker'/&gt;
                                &lt;/b:if&gt;
                              &lt;/b:if&gt;
                            &lt;/b:if&gt;
                          &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class='post-footer-line post-footer-line-2'&gt;
                          &lt;b:if cond='data:top.showMobileShare'&gt;
                            &lt;div class='mobile-link-button goog-inline-block' id='mobile-share-button'&gt;
                              &lt;a href='javascript:void(0);'&gt;
                                &lt;data:shareMsg/&gt;
                              &lt;/a&gt;
                            &lt;/div&gt;
                          &lt;/b:if&gt;
                          &lt;b:if cond='data:top.showDummy'&gt;
                            &lt;div class='goog-inline-block dummy-container'&gt;
                              &lt;data:post.dummyTag/&gt;
                            &lt;/div&gt;
                          &lt;/b:if&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;b:if cond='data:blog.pageType == "static_page"'&gt;
                      &lt;b:include data='post' name='comment_picker'/&gt;
                    &lt;/b:if&gt;
                    &lt;b:if cond='data:blog.pageType == "item"'&gt;
                      &lt;b:include data='post' name='comment_picker'/&gt;
                    &lt;/b:if&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='nextprev'&gt;
              &lt;footer&gt;
                &lt;b:if cond='data:newerPageUrl'&gt;
                  &lt;span id='blog-pager-newer-link'&gt;
                    &lt;a class='blog-pager-newer-link' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + "_blog-pager-newer-link"' expr:title='data:newerPageTitle'&gt;
                      &lt;&nbsp;
                    &lt;/a&gt;
                  &lt;/span&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:olderPageUrl'&gt;
                  &lt;span id='blog-pager-older-link'&gt;
                    &lt;a class='blog-pager-older-link' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + "_blog-pager-older-link"' expr:title='data:olderPageTitle'&gt;
                      &gt;
                    &lt;/a&gt;
                  &lt;/span&gt;
                &lt;/b:if&gt;
                &lt;a class='home-link' expr:href='data:blog.homepageUrl'/&gt;
                &lt;b:if cond='data:mobileLinkUrl'&gt;
                  &lt;div class='blog-mobile-link'&gt;
                    &lt;a expr:href='data:mobileLinkUrl'&gt;
                      &lt;data:mobileLinkMsg/&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
              &lt;/footer&gt;
              &lt;div class='clear'/&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='post' var='post'&gt;
              &lt;div class='post hentry uncustomized-post-template' itemprop='blogPost' itemscope='itemscope' itemtype='http://schema.org/BlogPosting'&gt;
                &lt;b:if cond='data:post.firstImageUrl'&gt;
                  &lt;meta expr:content='data:post.firstImageUrl' itemprop='image_url'/&gt;
                &lt;/b:if&gt;
                &lt;meta expr:content='data:blog.blogId' itemprop='blogId'/&gt;
                &lt;meta expr:content='data:post.id' itemprop='postId'/&gt;
                &lt;a expr:name='data:post.id'/&gt;
                &lt;b:if cond='data:post.title'&gt;
                  &lt;h1 class='post-title entry-title' itemprop='name'&gt;
                    • 
                    &lt;b:if cond='data:post.link'&gt;
                      &lt;a expr:href='data:post.link'&gt;
                        &lt;data:post.title/&gt;
                      &lt;/a&gt;
                      &lt;b:else/&gt;
                      &lt;b:if cond='data:post.url'&gt;
                        &lt;b:if cond='data:blog.url != data:post.url'&gt;
                          &lt;a expr:href='data:post.url'&gt;
                            &lt;data:post.title/&gt;
                          &lt;/a&gt;
                          &lt;b:else/&gt;
                          &lt;data:post.title/&gt;
                        &lt;/b:if&gt;
                        &lt;b:else/&gt;
                        &lt;data:post.title/&gt;
                      &lt;/b:if&gt;
                    &lt;/b:if&gt;
                  &lt;/h1&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:post.isDateStart'&gt;
                  &lt;b:if cond='data:post.isFirstPost == "false"'&gt;
                    &lt;/div&gt;&lt;/div&gt;
                  &lt;/b:if&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:post.isDateStart'&gt;
                  &lt;div class="date-outer"&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:post.dateHeader'&gt;
                  &lt;h2&gt;
                    &lt;data:post.dateHeader/&gt;
                    &lt;data:post.timestamp/&gt;
                  &lt;/h2&gt;
                  &lt;br/&gt;
                  &lt;br/&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:post.isDateStart'&gt;
                  &lt;div class="date-posts"&gt;
                &lt;/b:if&gt;
                &lt;div class='post-header'&gt;
                  &lt;div class='post-header-line-1'/&gt;
                &lt;/div&gt;
                &lt;b:if cond='data:blog.metaDescription == ""'&gt;
                  &lt;data:post.body/&gt;
                  &lt;br /&gt;
                  &lt;br /&gt;
                  &lt;br /&gt;
                  &lt;b:else/&gt;
                  &lt;data:post.body/&gt;
                  &lt;br /&gt;
                  &lt;br /&gt;
                  &lt;br /&gt;
                &lt;/b:if&gt;
                &lt;b:if cond='data:post.hasJumpLink'&gt;
                  &lt;div class='jump-link'&gt;
                    &lt;a expr:href='data:post.url + "#more"' expr:title='data:post.title'&gt;
                      &lt;data:post.jumpText/&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='postQuickEdit' var='post'&gt;
              &lt;b:if cond='data:post.editUrl'&gt;
                &lt;span expr:class='"item-control " + data:post.adminClass'&gt;
                  &lt;a expr:href='data:post.editUrl' expr:title='data:top.editPostMsg'&gt;
                    &lt;img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/&gt;
                  &lt;/a&gt;
                &lt;/span&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='shareButtons' var='post'&gt;
              &lt;b:if cond='data:top.showEmailButton'&gt;
                &lt;a class='goog-inline-block share-button sb-email' expr:href='data:post.sharePostUrl + "&amp;target=email"' expr:title='data:top.emailThisMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.emailThisMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showBlogThisButton'&gt;
                &lt;a class='goog-inline-block share-button sb-blog' expr:href='data:post.sharePostUrl + "&amp;target=blog"' expr:onclick='"window.open(this.href, \"_blank\", \"height=270,width=475\"); return false;"' expr:title='data:top.blogThisMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.blogThisMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showTwitterButton'&gt;
                &lt;a class='goog-inline-block share-button sb-twitter' expr:href='data:post.sharePostUrl + "&amp;target=twitter"' expr:title='data:top.shareToTwitterMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.shareToTwitterMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showFacebookButton'&gt;
                &lt;a class='goog-inline-block share-button sb-facebook' expr:href='data:post.sharePostUrl + "&amp;target=facebook"' expr:onclick='"window.open(this.href, \"_blank\", \"height=430,width=640\"); return false;"' expr:title='data:top.shareToFacebookMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.shareToFacebookMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showOrkutButton'&gt;
                &lt;a class='goog-inline-block share-button sb-orkut' expr:href='data:post.sharePostUrl + "&amp;target=orkut"' expr:title='data:top.shareToOrkutMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.shareToOrkutMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showPinterestButton'&gt;
                &lt;a class='goog-inline-block share-button sb-pinterest' expr:href='data:post.sharePostUrl + "&amp;target=pinterest"' expr:title='data:top.shareToPinterestMsg' target='_blank'&gt;
                  &lt;span class='share-button-link-text'&gt;
                    &lt;data:top.shareToPinterestMsg/&gt;
                  &lt;/span&gt;
                &lt;/a&gt;
              &lt;/b:if&gt;
              &lt;b:if cond='data:top.showDummy'&gt;
                &lt;div class='goog-inline-block dummy-container'&gt;
                  &lt;data:post.dummyTag/&gt;
                &lt;/div&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='status-message'&gt;
              &lt;b:if cond='data:navMessage'&gt;
                &lt;div class='status-msg-wrap'&gt;
                  &lt;div class='status-msg-body'&gt;
                    &lt;data:navMessage/&gt;
                  &lt;/div&gt;
                  &lt;div class='status-msg-border'&gt;
                    &lt;div class='status-msg-bg'&gt;
                      &lt;div class='status-msg-hidden'&gt;
                        &lt;data:navMessage/&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;div style='clear: both;'/&gt;
              &lt;/b:if&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='threaded-comment-form' var='post'&gt;
              &lt;div class='comment-form'&gt;
                &lt;a name='comment-form'/&gt;
                &lt;b:if cond='data:mobile'&gt;
                  &lt;p&gt;
                    &lt;data:blogCommentMessage/&gt;
                  &lt;/p&gt;
                  &lt;data:blogTeamBlogMessage/&gt;
                  &lt;a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/&gt;
                  &lt;iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' style='display: none' width='100%'/&gt;
                  &lt;b:else/&gt;
                  &lt;p&gt;
                    &lt;data:blogCommentMessage/&gt;
                  &lt;/p&gt;
                  &lt;data:blogTeamBlogMessage/&gt;
                  &lt;a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/&gt;
                  &lt;iframe allowtransparency='true' class='blogger-iframe-colorize blogger-comment-from-post' frameborder='0' height='410' id='comment-editor' name='comment-editor' src='' width='100%'/&gt;
                &lt;/b:if&gt;
                &lt;data:post.friendConnectJs/&gt;
                &lt;data:post.cmtfpIframe/&gt;
                &lt;script type='text/javascript'&gt;
                  BLOG_CMT_createIframe('&lt;data:post.appRpcRelayPath/&gt;', '&lt;data:post.communityId/&gt;');
                &lt;/script&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='threaded_comment_js' var='post'&gt;
              &lt;script async='async' expr:src='data:post.commentSrc' type='text/javascript'/&gt;
              &lt;script type='text/javascript'&gt;
                (function() {
                  var items = &lt;data:post.commentJso/&gt;;
                  var msgs = &lt;data:post.commentMsgs/&gt;;
                  var config = &lt;data:post.commentConfig/&gt;;
                  // &lt;![CDATA[
                  var cursor = null;
                  if (items &amp;&amp; items.length &gt; 0) {
                    cursor = parseInt(items[items.length - 1].timestamp) + 1;
                  }
                  var bodyFromEntry = function(entry) {
                    if (entry.gd$extendedProperty) {
                      for (var k in entry.gd$extendedProperty) {
                        if (entry.gd$extendedProperty[k].name == 'blogger.contentRemoved') {
                          return '
                          &lt;span class="deleted-comment"&gt;
                            ' + entry.content.$t + '
              &lt;/span&gt;';
                        }
                      }
                    }
                    return entry.content.$t;
                  }
                  var parse = function(data) {
                    cursor = null;
                    var comments = [];
                    if (data &amp;&amp; data.feed &amp;&amp; data.feed.entry) {
                      for (var i = 0, entry; entry = data.feed.entry[i]; i++) {
                        var comment = {};
                        // comment ID, parsed out of the original id format
                        var id = /blog-(\d+).post-(\d+)/.exec(entry.id.$t);
                        comment.id = id ? id[2] : null;
                        comment.body = bodyFromEntry(entry);
                        comment.timestamp = Date.parse(entry.published.$t) + '';
                        if (entry.author &amp;&amp; entry.author.constructor === Array) {
                          var auth = entry.author[0];
                          if (auth) {
                            comment.author = {
                              name: (auth.name ? auth.name.$t : undefined),
                              profileUrl: (auth.uri ? auth.uri.$t : undefined),
                              avatarUrl: (auth.gd$image ? auth.gd$image.src : undefined)
                            };
                          }
                        }
                        if (entry.link) {
                          if (entry.link[2]) {
                            comment.link = comment.permalink = entry.link[2].href;
                          }
                          if (entry.link[3]) {
                            var pid = /.*comments\/default\/(\d+)\?.*/.exec(entry.link[3].href);
                            if (pid &amp;&amp; pid[1]) {
                              comment.parentId = pid[1];
                            }
                          }
                        }
                        comment.deleteclass = 'item-control blog-admin';
                        if (entry.gd$extendedProperty) {
                          for (var k in entry.gd$extendedProperty) {
                            if (entry.gd$extendedProperty[k].name == 'blogger.itemClass') {
                              comment.deleteclass += ' ' + entry.gd$extendedProperty[k].value;
                            } else if (entry.gd$extendedProperty[k].name == 'blogger.displayTime') {
                              comment.displayTime = entry.gd$extendedProperty[k].value;
                            }
                          }
                        }
                        comments.push(comment);
                      }
                    }
                    return comments;
                  };
                  var paginator = function(callback) {
                    if (hasMore()) {
                      var url = config.feed + '?alt=json&amp;v=2&amp;orderby=published&amp;reverse=false&amp;max-results=50';
                      if (cursor) {
                        url += '&amp;published-min=' + new Date(cursor).toISOString();
                      }
                      window.bloggercomments = function(data) {
                        var parsed = parse(data);
                        cursor = parsed.length 
                        &lt; 50 ? null
                        : parseInt(parsed[parsed.length - 1].timestamp) + 1
                        callback(parsed);
                        window.bloggercomments = null;
                      }
                      url += '&amp;callback=bloggercomments';
                      var script = document.createElement('script');
                      script.type = 'text/javascript';
                      script.src = url;
                      document.getElementsByTagName('head')[0].appendChild(script);
                    }
                  };
                  var hasMore = function() {
                    return !!cursor;
                  };
                  var getMeta = function(key, comment) {
                    if ('iswriter' == key) {
                      var matches = !!comment.author
                      &amp;&amp; comment.author.name == config.authorName
                      &amp;&amp; comment.author.profileUrl == config.authorUrl;
                      return matches ? 'true' : '';
                    } else if ('deletelink' == key) {
                      return config.baseUri + '/delete-comment.g?blogID='
                      + config.blogId + '&amp;postID=' + comment.id;
                    } else if ('deleteclass' == key) {
                      return comment.deleteclass;
                    }
                    return '';
                  };
                  var replybox = null;
                  var replyUrlParts = null;
                  var replyParent = undefined;
                  var onReply = function(commentId, domId) {
                    if (replybox == null) {
                      // lazily cache replybox, and adjust to suit this style:
                      replybox = document.getElementById('comment-editor');
                      if (replybox != null) {
                        replybox.height = '250px';
                        replybox.style.display = 'block';
                        replyUrlParts = replybox.src.split('#');
                      }
                    }
                    if (replybox &amp;&amp; (commentId !== replyParent)) {
                      document.getElementById(domId).insertBefore(replybox, null);
                      replybox.src = replyUrlParts[0]
                      + (commentId ? '&amp;parentID=' + commentId : '')
                      + '#' + replyUrlParts[1];
                      replyParent = commentId;
                    }
                  };
                  var hash = (window.location.hash || '#').substring(1);
                  var startThread, targetComment;
                  if (/^comment-form_/.test(hash)) {
                    startThread = hash.substring('comment-form_'.length);
                  } else if (/^c[0-9]+$/.test(hash)) {
                    targetComment = hash.substring(1);
                  }
                  // Configure commenting API:
                  var configJso = {
                    'maxDepth': config.maxThreadDepth
                  };
                  var provider = {
                    'id': config.postId,
                    'data': items,
                    'loadNext': paginator,
                    'hasMore': hasMore,
                    'getMeta': getMeta,
                    'onReply': onReply,
                    'rendered': true,
                    'initComment': targetComment,
                    'initReplyThread': startThread,
                    'config': configJso,
                    'messages': msgs
                  };
                  var render = function() {
                    if (window.goog &amp;&amp; window.goog.comments) {
                      var holder = document.getElementById('comment-holder');
                      window.goog.comments.render(holder, provider);
                    }
                  };
                  // render now, or queue to render when library loads:
                  if (window.goog &amp;&amp; window.goog.comments) {
                    render();
                  } else {
                    window.goog = window.goog || {};
                    window.goog.comments = window.goog.comments || {};
                    window.goog.comments.loadQueue = window.goog.comments.loadQueue || [];
                    window.goog.comments.loadQueue.push(render);
                  }
                })();
                // ]]&gt;
              &lt;/script&gt;
            &lt;/b:includable&gt;
            &lt;b:includable id='threaded_comments' var='post'&gt;
              &lt;div class='comments' id='comments'&gt;
                &lt;a name='comments'/&gt;
                &lt;h4&gt;
                  &lt;data:post.commentLabelFull/&gt;
                  :
                &lt;/h4&gt;
                &lt;div class='comments-content'&gt;
                  &lt;b:if cond='data:post.embedCommentForm'&gt;
                    &lt;b:include data='post' name='threaded_comment_js'/&gt;
                  &lt;/b:if&gt;
                  &lt;div id='comment-holder'&gt;
                    &lt;data:post.commentHtml/&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                &lt;p class='comment-footer'&gt;
                  &lt;b:if cond='data:post.allowNewComments'&gt;
                    &lt;b:include data='post' name='threaded-comment-form'/&gt;
                    &lt;b:else/&gt;
                    &lt;data:post.noNewCommentsText/&gt;
                  &lt;/b:if&gt;
                &lt;/p&gt;
                &lt;b:if cond='data:showCmtPopup'&gt;
                  &lt;div id='comment-popup'&gt;
                    &lt;iframe allowtransparency='true' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'&gt;
                    &lt;/iframe&gt;
                  &lt;/div&gt;
                &lt;/b:if&gt;
                &lt;div id='backlinks-container'&gt;
                  &lt;div expr:id='data:widget.instanceId + "_backlinks-container"'&gt;
                    &lt;b:if cond='data:post.showBacklinks'&gt;
                      &lt;b:include data='post' name='backlinks'/&gt;
                    &lt;/b:if&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/b:includable&gt;
          &lt;/b:widget&gt;
        &lt;/b:section&gt;
      &lt;/article&gt;
    &lt;/section&gt;
  &lt;/body&gt;
&lt;/html&gt;</textarea>
<p>Copy and paste the code above to your HTML file, or the template/theme edit text box.</p>

<h2>Images</h2>

<br />
<img src="<?php echo base_url('img/material/layout/hyperion/meteor.gif') ?>">
<br /><br />
<img src="<?php echo base_url('img/material/layout/hyperion/bg.png') ?>">
<a href="<?php echo base_url('material/blog-layouts') ?>" class="back-link">&laquo; Back to Layouts</a>
<?php $this->load->view('footer') ?>
