<div id="contactForm" class="card-block" style="">

                        <!-- Form Name -->
                    <div class="card-title"><h3>Enter Contact Details</h3></div>
                        <!-- Text input-->
                        <div class="form-group"> 
                          <input id="name" name="name" type="text" placeholder="Efiewura Name" class="form-control input-md" required="" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em">
                          <div id="nameAlert" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Required!</strong> Name required to move on
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                             <input id="number" name="number" type="tel" placeholder="Phone Number" class="form-control input-md" required="" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px" >
                          <div id="numberAlert" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Required!</strong> Phone number required to move on
                          </div>
                          <div id="numberError" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Error!</strong> Phone number error e.g. '0559876543'...
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                          <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px">
                        </div>
                        <!-- Multiple Radios (inline) -->
                        <div class="form-group"> 
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="gender-0" value="M" checked="checked" >
                              Male
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="gender" id="gender-1" value="F" >
                              Female
                                        <span class="circle">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                        </div>
                </div>