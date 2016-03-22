<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/Public/css/style.css">
    <link type="text/css" rel="stylesheet" href="/Public/css/style(2).css">
    <link type="text/css" rel="stylesheet" href="/Public/css/style_wp.css">
    <!--<link type="text/css" rel="stylesheet" href="/Public/css/font-awesome.min.css">-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/Public/js/jquery-2.1.4.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>文本分析成果
                    <small>简版</small>
                </h1>
                <small style="color: red;">本网站内容只用于学习，未经允许不得用作他途</small>
            </div>

        </div>
        <div class="col-md-12">
            <nav>
                <ul class="nav nav-pills nav-justified" style="font-size: 17px;">
                    <li class="active"><a href="#">经济学人</a></li>
                    <li><a href="#">海词</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-9">
            <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><article id="post-31" class="post-31 post type-post status-publish format-standard hentry category-2">
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="/index.php/Home/Index/showpage/id/<?php echo ($new["file_id"]); ?>" rel="bookmark" target="_blank"><?php echo ($new["title"]); ?></a>
                        </h2>

                        <div class="entry-meta">
                            <span class="posted-on">
                                <i class="fa fa-calendar"></i>
                                <a href="/index.php/Home/Index/showpage/id/<?php echo ($new["file_id"]); ?>" rel="bookmark" target="_blank">
                                    <time class="entry-date published" datetime="<?php echo ($new["time"]); ?>">
                                        <?php echo ($new["time"]); ?>
                                    </time>
                                </a>
                            </span>
                            <span class="edit-link">
                                <!--<i class="fa fa-edit"></i>&nbsp;-->
                                <a class="post-edit-link" href="/index.php/Home/Index/showpage/id/<?php echo ($new["file_id"]); ?>"
                                   target="_blank"><?php echo ($new["fenlei"]); ?></a>
                            </span>
                            <span class="comments-link">
                                <!--<i class="fa fa-comment"></i>&nbsp;-->
                                <a href="http://<?php echo ($new["from"]); ?>" target="_blank">文章来源</a>
                            </span>
                        </div>
                    </header>
                    <div class="entry-summary">
                        <p><?php echo (substr($new["body"],0,240)); ?>[…]</p>
                        <span class="read-more">
                            <span class="read-more-icon">
                                <a href="/index.php/Home/Index/showpage/id/<?php echo ($new["file_id"]); ?>" target="_blank">
                                    <i class="fa fa-plus"></i>
                                    <!--<span class="glyphicon glyphicon-search" aria-hidden="true"></span>-->
                                </a>
                            </span>
                        </span>
                    </div>
                </article>
                <!--<div class="panel panel-success">-->
                <!--<div class="panel-heading">-->
                <!--<h2 class="panel-title">-->
                <!--<?php echo ($new["title"]); ?>-->

                <!--</h2>-->

                <!--</div>-->
                <!--<div class="panel-body"-->
                <!--style="line-height:1.6;text-align:justify;font-size: 1.6rem;line-height: 2.5rem;text-indent: 3em;-->
                <!--font-weight: normal;font-family: Arial,sans-serif;">-->
                <!--<div align="center" style="font-size: 14px; text-indent: 0;margin-bottom: 20px;">-->
                <!--<h3 style="margin-top: 2px;margin-bottom: 10px;font-size: 22px;"><?php echo ($new["subtitle"]); ?></h3>-->
                <!--<strong>出版时间：<?php echo ($new["time"]); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;-->
                <!--<strong>文章分类：<?php echo ($new["fenlei"]); ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;-->
                <!--文章来源：<a href="http://<?php echo ($new["from"]); ?>" target="_blank"><?php echo ($new["title"]); ?></a>-->
                <!--</div>-->
                <!--&lt;!&ndash;<?php echo (substr($new["body"],0,300)); ?> ...&ndash;&gt;-->
                <!--<?php echo ($new["body"]); ?>-->
                <!--</div>-->
                <!--</div>--><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    文章归档
                </div>
                <div class="panel-body" style="padding: 0;">
                    <ul class="list-group" style="margin-bottom: 0px;">
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    文章分类
                </div>
                <div class="panel-body" style="padding: 0;">
                    <ul class="list-group" style="margin-bottom: 0px;">
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            建设中。。。
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="foot">
        <div class="col-md-9">
            <footer>
                <div class="Page"><?php echo ($page); ?></div>
            </footer>
        </div>
    </div>
</div>
</body>
</html>