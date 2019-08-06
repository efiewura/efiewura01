<form method="GET" action="./?pg=find">
<div class="row" style="">
<div class="col-md-2 form-group">
  <select id="region"  class="custom-select rounded-0 input-md" style="width: 100%;padding-bottom: 0px;margin-top: 5px;height: 60px;" name="rg">
    <option  disabled selected>REGIONS</option>
    <option value="AS" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='AS'): ?>
      selected
    <?php endif ?>>Ashanti</option>
    <option value="BA" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='BA'): ?>
      selected
    <?php endif ?>>Brong-Ahafo</option>
    <option value="CE" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='CE'): ?>
      selected
    <?php endif ?>>Central</option>
    <option value="EA" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='EA'): ?>
      selected
    <?php endif ?>>Eastern</option>
    <option value="GA" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='GA'): ?>
      selected
    <?php endif ?>>Greater Accra</option>
    <option value="NO" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='NO'): ?>
      selected
    <?php endif ?>>Northern</option>
    <option value="UE" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='UE'): ?>
      selected
    <?php endif ?>>Upper East</option>
    <option value="UW" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='UW'): ?>
      selected
    <?php endif ?>>Upper West</option>
    <option value="VO" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='VO'): ?>
      selected
    <?php endif ?>>Volta</option>
    <option value="WE" <?php if ((isset($_GET['rg']))&&$_GET['rg']=='WE'): ?>
      selected
    <?php endif ?>>Western</option>
    <option style="display: none" disabled="">N/A</option>
  </select>
</div>
<!--<div class="col-2 form-group" style="">
  <input type="text" id="district" name="" class="custom-select rounded-0 align-middle" placeholder="DISTRICT" style="padding-top:25px;margin-top: 5px;height: 60px;vertical-align: middle;">
                          <div class="district list-group" style="width:80%; height: 100px;margin:0 10% 0 10%; border-width:1px !important; font-size: 2em;display: none">
                          </div> 
</div>-->
<div class="col-md-8 form-group" style="">
  <input id="q" type="tesxt" name="q" class="form-control input-md" placeholder="Search Town: Eg, Accra, Cape" name="q">
</div>
                </div>

<div class="row" style="">
  <div class="form-group col-md-4 offset-md-4">
    <button id="next" class="btn btn-primary" value="find" style="width:100%; height: 100%;border-radius:0px;font-size: 2em;border-radius:60px 2px;background: #777">Find</button>
</div>
</div>
            </form>