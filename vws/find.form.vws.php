<form method="GET" action="<?php echo $dir ?>">
<div class="row" style="">
<div class="col-md-3 form-group">
  <select id="region"  class="custom-select rounded-0" style="width: 100%;padding-bottom: 0px;margin-top: 5px;height: 60px;" name="rg">
    <option value="0"  disabled selected>REGIONS</option>
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
<div class="col-md-3 form-group">
                    <input list="district" class="custom-select rounded-0" style="width: 100%;margin-top: 5px;height: 60px; padding: 20px 30px;font-size: 1.1em;" id="district-input" name="ds" autocomplete="off" placeholder="District">
                    <datalist id="district">
                        <option>Select an option</option>
                    </datalist>
</div>
<div class="col-md-6 form-group" style="">
  <input id="q" type="tesxt" name="q" class="form-control input-md" placeholder="Search Town: Eg, Accra, Cape" name="q" <?php echo isset($_GET['q'])? "value=\"".$_GET['q']."\"":"" ?> >
</div>
</div>

<div class="row" style="">
 <div style="display: flex; flex-direction: row;justify-content: center;" class="form-group col-12">
                <button id="next" type="submit" class="btn btn-primary" style="padding: 10px 30px;font-size: 1.3em;">
                    Search
                </button>
            </div>
</div>
            </form>
