<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Efiewura <?php echo ($title!=' ')? '-':''; echo $title ?></title>
    <meta name="description" content="">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap/material-kit.min.css">
    <?php if ($pg == 'home'||$pg=='soon') {
        ?>
    <link rel="stylesheet" href="assets/css/main/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/main/owl.theme.default.css">
        <?php
    } ?>
    <link rel="stylesheet" href="assets/css/main/animate.css">
    <link rel="stylesheet" href="assets/css/main/style.css">
    <?php if ($pg=='done'): ?>
    <link rel="stylesheet" href="assets/css/main/done.animate.css">
    <?php endif ?>
</head>