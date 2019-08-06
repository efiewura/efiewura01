<!--SEARCH RESULTS-->
<main class="container">

    <h2 style="margin-top:50px ">Search Results</h2>
    <?php include './inc/search.inc.php'; ?>
    <h3>We found the following listings for you</h3>
    <p style="font-weight: bold; font-size: 1em;"><?php echo count($searchArr) ?> result<?php echo (count($searchArr)!=1)?'s':'';  ?> found</p>
    <?php include './inc/list.inc.php'; ?>
</main>
<!--SEARCH RESULTS END-->