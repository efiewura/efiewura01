<div id="finalForm" class="card-block" style="display: none">
                        <!-- Form Name -->
                    <div class="card-title "><h3>Enter Price Details</h3></div>
                    <div class="form-group"> 
                          <input id="price" name="price" type="number" placeholder="Price of listing" class="form-control input-md" required="" style="width:80%; height: 100px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" step="0.01">
                          <div id="priceAlert" class="alert alert-warning" style="display: none">
                              <button type="button" class="close" data-dismiss="alert">&times;</button>
                              <strong>Invalide!</strong> price not valid
                          </div>
                    </div>
                    <div class="form-group"> 
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="negotiation-status" id="negotiable"
                                           value="negotiable">
                                    Negotiable
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="form-check form-check-radio">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="negotiation-status" id="non-negotiable"
                                           value="non-negotiable">
                                    Non-negotiable
                                    <span class="circle">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                    </div>
                </div>