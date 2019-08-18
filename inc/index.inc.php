<!-- INTRODUCTION-->
<?php include './vws/introduction.vws.php'; ?>
<!-- INTRODUCTION END -->
<!-- HOMES  -->
<?php 
$regions = json_decode('{"AS":{"Name":"Ashanti"},"BA":{"Name":"Brong-Ahafo"},"CE":{"Name":"Central"},"EA":{"Name":"Eastern"},"GA":{"Name":"Greater Accra"},"NO":{"Name":"Northern"},"UE":{"Name":"Upper East"},"UW":{"Name":"Upper West"},"VO":{"Name":"Volta"},"WE":{"Name":"Western"}}');
foreach ($regions as $key=>$region) {
    //variables required for each SlideList
        $spaces = space::getspacesbyArr(array('region'=>$key));
        if (empty($spaces)) {
            continue;
        }
    include './vws/slideList.vws.php';
} ?>
<!-- HOMES END -->