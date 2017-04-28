<?php use Roots\Sage\Titles; ?>

<div class="page-header">
    <h1><?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->nickname; ?></h1>
</div>
