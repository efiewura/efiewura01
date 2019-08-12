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
                            <p class="description text-center">Note: Please note that for now, we only recieve MTN for security reasons. </p>
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
                                    <input id="payNum" type="tel" class="form-control" placeholder="Number: 0245555555" onkeyup="if(/^(([0]){1}[2,3,5]{1}(?:\d[ ]*){8}){1}$/.test(this.value)){$('#makePay').removeClass('disabled');}else{$('#makePay').addClass('disabled');}document.getElementById('payNumError').style.display='none';" style="display: block;margin-bottom: 10px" style="display: block">
                                    <div id="payNumError" class="alert alert-danger" style="display: none" >
                                             <button type="button" class="close" data-dismiss="alert">&times;</button>
                                             <strong>Wrong Format!</strong> Number format error
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                    <div id="pendSt" style="display: none">
                        <div  class="row">
                            <div class="col-md-6" style="padding: 1em;text-align: center;">
                                <div class="circle-loader">
                                  <div class="checkmark draw"></div>
                                </div>                            
                            </div>
                            <div class="col-md-6">
                                <span class="text text-monospace">
                                    <ol>
                                        <li>Dial *170# </li>
                                        <li>Select option 10) Wallet </li>
                                        <li>Select 3) My Approvals </li>
                                        <li>Enter Mobile Money PIN </li>
                                        <li>Select the transaction from the list </li>
                                        <li>Confirm the transaction. </li>
                                    </ol>
                                </span>
                            </div>
                        </div>
                        
                    </div>
                <div class="modal-footer justify-content-center">
                    <button id="makePay" type="submit" class="btn btn-primary btn-link btn-wd btn-lg disabled" onfocus="if(/^(([0]){1}[2,3,5]{1}(?:\d[ ]*){8}){1}$/.test(document.getElementById('payNum').value)){document.getElementById('payNumError').style.display='none'}else{document.getElementById('payNumError').style.display='inline'}">Make Payment</button>
                    <button type="button" class="btn btn-primary btn-link btn-wd btn-lg" data-dismiss="modal">Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>