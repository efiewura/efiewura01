<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="material-icons">clear</i>
                        </button>
                        <h5 style="text-align: left;" class="card-title">Payment Form</h5>
                    </div>
                </div>
                <div class="modal-body">
                    <form id="payModalForm" class="form" action="" style="">
                        <div class="card-body">
                            <p class="description text-center">Uploading a listing attracts a fee of 10 Ghana Cedis</p>
                            <p class="description text-center">The listing will be online for 3 months</p>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">face</i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="material-icons">call</i></div>
                                    </div>
                                    <input id="payNum" type="tel" class="form-control" placeholder="Number">
                                </div>
                            </div>
                        </div>
                    </form> 
                    <div id="pendSt" style="display: none">
                        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status"></div>
                          <span class="text-uppercase text-monospace">Pending...</span>
                        
                    </div>
                <div id="doneSt" style="display: none">
                    <span class="text-uppercase text-monospace text-success">Done</span>
                </div>
                <div class="modal-footer justify-content-center">
                    <button id="makePay" type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Make Payment</button>
                    <button type="button" class="btn btn-primary btn-link btn-wd btn-lg" data-dismiss="modal">Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>