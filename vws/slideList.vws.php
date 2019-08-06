<!--<?php echo $region->Name; ?> Region-->
<div style="margin-top: 100px;" class="container-fluid">
    <div class="row">
        <div class="workspace-head-wrapper" style="margin-bottom: 20px;">
            <h2 class="workspace-head"><span class="first-word">Homes</span> in <?php echo $region->Name; ?> Region</h2>
            <p class="workspace-paragraph">Find yourself a home that suits your exact needs</p>
        </div>
        <div class="owl-carousel owl-theme">
        	<?php foreach ($spaces as $val) {
        		//put variables require for item values
        		include './vws/slideList.item.vws.php';
        	} ?>
        </div>
    </div>
</div>
<!-- <?php echo $region->Name; ?> END-->