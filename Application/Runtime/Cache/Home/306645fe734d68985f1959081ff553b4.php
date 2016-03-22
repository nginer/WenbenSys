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
                <h1>经济学人
                    <small>简版</small>
                </h1>
                <small style="color: red;">本网站内容只用于学习，未经允许不得用作他途</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <main id="main" class="site-main" role="main">
                <article id="post-31" class="post-31 post type-post status-publish format-standard hentry category-2">

                    <header class="entry-header">
                        <h1 class="entry-title">
                            <?php echo ($content["title"]); ?>
                                <span style="float: right;font-size: 16px;margin-top:15px; text-decoration-color: red;">
                                    <a href="/index.php/Home/Index/export/id/<?php echo ($content["file_id"]); ?>">导出</a>
                                </span>
                        </h1>

                        <div class="entry-meta">
                                <span class="posted-on">
                                    <!--<i class="fa fa-calendar"></i>-->
                                        <time class="entry-date published" datetime="<?php echo ($content["time"]); ?>">
                                            <?php echo ($content["time"]); ?>
                                        </time>
                                </span>
                                <span class="edit-link">
                                    <!--<i class="fa fa-edit"></i>&nbsp;-->
                                    <?php echo ($content["fenlei"]); ?>
                                </span>
                                <span class="comments-link">
                                    <!--<i class="fa fa-comment"></i>&nbsp;-->
                                    <a href="http://<?php echo ($content["from"]); ?>" target="_blank">文章来源</a>
                                </span>
                        </div>
                        <!-- .entry-meta -->
                    </header>
                    <!-- .entry-header -->

                    <div class="entry-content clearfix">
                        <?php echo ($content["body"]); ?>
                    </div>
                    <!-- .entry-content -->
                    <!--<footer class="entry-footer">-->
                        <!--<span><i class="fa fa-link"></i><a href="http://192.168.56.102/?p=31" rel="bookmark">-->
                            <!--固定链接</a></span>-->
                        <!--<span class="edit-link"><i class="fa fa-edit"></i>&nbsp;<a class="post-edit-link"-->
                                                                                   <!--href="http://192.168.56.102/wp-admin/post.php?post=31&amp;action=edit">Edit</a></span>-->
                    <!--</footer>-->
                    <!-- .entry-footer -->
                </article>
                <!-- #post-## -->


                <!--<nav class="navigation post-navigation clearfix" role="navigation">-->
                    <!--<h1 class="screen-reader-text">Post navigation</h1>-->
                    <!--<div class="nav-links">-->
                        <!--<div class="nav-previous"><a href="http://192.168.56.102/?p=29" rel="prev"><i-->
                                <!--class="fa fa-long-arrow-left"></i> 癌症病人吃什么好：胃癌患者饮食的宜与忌</a></div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; .nav-links &ndash;&gt;-->
                <!--</nav>-->
                <!-- .navigation -->

            </main>
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
                版权所有，翻版必究
            </footer>
        </div>
    </div>
</div>
</body>
</html>