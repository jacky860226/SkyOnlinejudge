<?php
if(!defined('IN_TEMPLATE'))
{
  exit('Access denied');
}
?>
</head>
<body>
<div id="wrap"> 
    <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><?php echo($_E['site']['name']);?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="rank.php">Stats</a></li>
                    <li><a href="index.php?old">Dev Message</a></li>
                    <li><a href="http://forum.tfcis.org/forum.php?mod=group&fid=107" target="_new">Discuss</a></li>
                </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if( !$_G['uid']): ?>
                <li><a href="user.php?mod=login">LOGIN</a></li>
                <?php else: ?>
                <li><a href="user.php?mod=view"><?php echo(htmlspecialchars($_G['nickname']));?></a></li>
                <li><a href="user.php?mod=logout">LOGOUT</a></li>
                <?php endif;?>
            </ul>
        </div>
    </nav>
    <?php if($_E['template']['alert']):?>
    <div class="alert alert-danger fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Oh! My GOD</strong> <?php echo($_E['template']['alert']); ?>
    </div>
    <?php endif;?>
    <?php if($_E['template']['error']):?>
    <div class="alert alert-danger fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <strong>Oh! System error</strong>
        <ul>
        <?php foreach($_E['template']['error'] as $list){ ?>
            <li>(<?=$list['namespace']?>)<?=$list['msg']?></li>
        <?php }?>
        </ul>
    </div>
    <?php endif;?>