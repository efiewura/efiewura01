 <div id="locationForm" class="card-block" style="display: none">
                        <!-- Form Name -->
                    <div class="card-title "><h3>Enter Location Details</h3></div>
                        <!-- Region Input -->
                    <div class="form-group">
                        <select id="region" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" class="custom-select" name="region" required="">
                            <option disabled="disabled" selected>REGION</option>
                            <option value="AS">Ashanti</option>
                            <option value="BA">Brong-Ahafo</option>
                            <option value="CE">Central</option>
                            <option value="EA">Eastern</option>
                            <option value="GA">Greater Accra</option>
                            <option value="NO">Northern</option>
                            <option value="UE">Upper East</option>
                            <option value="UW">Upper West</option>
                            <option value="VO">Volta</option>
                            <option value="WE">Western</option>
                        </select>
                        <div id="regionAlert" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Required!</strong> Choose a region..
                        </div>
                    </div>
                    <!-- District Input -->
                    <div class="form-group">
                        <input type="text" id="district" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" class="custom-select" name="district" onkeyup="autoCom(this)" />
                          <div class="district list-group" style="width:80%; height: 100px;margin:0 10% 0 10%; border-width:1px !important; font-size: 2em;display: none">
                          </div> 
                    </div>
                    <!-- City/Town ..-->
                    <div class="form-group">
                        <input  name="city" type="text" placeholder="City/Town..." class="form-control input-md" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" onkeyup="" id="city" value="" >
                        <div id="cityAlert" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Required!</strong> Enter you city or town name...
                        </div>
                    </div>
                    <!-- location ..-->
                    <div class="form-group">
                       <div class="custom-control custom-switch">
    <input class="custom-control-input input-md" id="switch1" type="checkbox" name="enable" onchange="if(!this.checked){document.getElementById('location').disabled=true;document.getElementById('location').style.display='none';}else{document.getElementById('location').disabled=false;document.getElementById('location').style.display='inline';}" checked>
    <label class="custom-control-label" for="switch1">Enable Map Feature</label>
  </div>
                        <input type="text" placeholder="Google Map Location" class="form-control input-md" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" onkeyup="" id="location" value="" onselect="setCaretPosition(this, Number(document.getElementById('test-input').value.length)+1)" onkeydown="maintainLoc(this,event)" data-strlength="" >
                    </div>
                    <!-- Button -->
                    <div class="spanel spanel-info stext-info">
                     <!-- <strong>Center</strong> <p id="loc"></p> -->
                    </div>
                    <input id="lng" type="hidden" name="lng" value="">
                    <input id="lat" type="hidden" name="lat" value="">
                </div>