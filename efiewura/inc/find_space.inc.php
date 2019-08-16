<main class="container">
    <div class="row">
        <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-2">
            <form class="animated fadeIn delay-1s" id="custom-form" action="<?php echo $dir ?>/" method="GET" >
                <h2>Find a home in your preferred location</h2>

                <div style="margin: 50px 0;" class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="town-name">Town Name</label>
                    <input type="text" class="form-control" id="town-name" name="q">
                </div>


                <h4 style="font-weight: bold;">Filters : </h4>

                <h4 style="font-weight: bold;">Property type</h4>
                <div class="form-check form-check-radio">
                    <label for="house" class="form-check-label">
                        <input class="form-check-input" type="radio" name="type" id="house"
                               value="house">
                        House
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label for="hotel" class="form-check-label">
                        <input class="form-check-input" type="radio" name="type" id="hotel"
                               value="hotel">
                        Hotel
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label for="guest-house" class="form-check-label">
                        <input class="form-check-input" type="radio" name="type" id="guest-house"
                               value="guest-house">
                        Guest House
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label for="hostel" class="form-check-label">
                        <input class="form-check-input" type="radio" name="type" id="hostel"
                               value="hostel">
                        Hostel Room
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>

<div class="form-group" style="margin-top: 30px;">
    <h4 style="font-weight: bold;">Region</h4>
    <select id="region" class="custom-select rounded-0" name="rg">
    <option value disabled>Select an option</option>
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
    <option style="display: none" disabled="">N/A</option>
  </select>
  </div>
  <div class="form-group" style="margin-top: 30px;">
                    <h4 style="font-weight: bold;">District</h4>
                    <input list="district" class="form-control" id="district-input" name="ds" autocomplete="off">
                    <datalist id="district">
                        <option>Select an option</option>
                    </datalist>
                </div>
                <div id="custom-form-buttons">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</main>