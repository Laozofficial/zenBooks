    {{--  banning project lead modal  --}}
      <div class="modal fade" id="banProjectLeadModal" tabindex="-1" role="dialog" aria-labelledby="banProjectLeadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        <div class="modal-header">
            <h6 class="modal-title warning" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4 warning">You should read this!</h4>
            <p class="warning">Do you want to ban the project lead ? <br><br>He/She wont be able to make any kind of changes </p>
            <p class="success"></p>
            </div>
        </div>
        <div class="modal-footer">
            <div class="approval"></div>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>



{{--  activate project leads  --}}
  <div class="modal fade" id="activateProjectLeadModal" tabindex="-1" role="dialog" aria-labelledby="activateProjectLeadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-success">
        <div class="modal-header">
            <h6 class="modal-title activation-warning" id="modal-title-notification">We are so glad</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="py-3 text-center">
            <i class="ni ni-satisfied ni-3x"></i>
            <h4 class="heading mt-4 activation-warning">Hello There !</h4>
            <p class="activation-warning">Do you want to activate the project lead ? <br><br>He/She will now be able to make any kind of changes assignd to their roles </p>
            <p class="activation-success"></p>
            </div>
        </div>
        <div class="modal-footer">
            <div class="active-approval"></div>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


{{--  edit brand modal  --}}
<div class="modal fade" id="editBrandModal" tabindex="-1" role="dialog" aria-labelledby="editBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Make Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="updateBrand">
            <div class="success-response" style="display:none">
                <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 10px">
                    <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                        <span class="alert-text success-response-text"></span>
                    </p>
                </div>
            </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Make Update:</label>
            <input type="text" class="form-control" id="brand-name" name="brand_name">
          </div>
          <div class="form-group" style="display:none">
            <label for="message-text" class="col-form-label">Message:</label>
            <input type="text" class="form-control" id="brand-id">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submit" class="btn btn-primary">Update Brand</button>
         </form>
      </div>
    </div>
  </div>
</div>

{{--  deleting a brand modal  --}}
      <div class="modal fade" id="deleteBrandModal" tabindex="-1" role="dialog" aria-labelledby="deleteBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="py-3 text-center">
            <i class="ni ni-bell-55 ni-3x"></i>
            <h4 class="heading mt-4 warning">You should read this!</h4>
            <p class="warning">Do you want to delete the item ?  </p>
            <p class="success"></p>
            </div>
        </div>
        <div class="modal-footer">
            <div class="delete"></div>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

{{-- creating a brand modal --}}
<div class="modal fade" id="addBrandModal" tabindex="-1" role="dialog" aria-labelledby="addBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="CreateBrand">
            <div class="success-response" style="display:none">
                <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 10px">
                    <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                        <span class="alert-text create-response-text"></span>
                    </p>
                </div>
            </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Brand Name:</label>
            <input type="text" class="form-control create_brand_new_name" name="name" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="create-brand" class="btn btn-primary">Create Brand</button>
         </form>
      </div>
    </div>
  </div>
</div>

{{-- creating a channel modal --}}
<div class="modal fade" id="addNewChannel" tabindex="-1" role="dialog" aria-labelledby="addNewChannelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Channel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="CreateChannel">
            <div class="success-response" style="display:none">
                <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 10px">
                    <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                        <span class="alert-text create-channel-response-text"></span>
                    </p>
                </div>
            </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Channel Name:</label>
            <input type="text" class="form-control create_channel_new_name" name="name" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="create-channel" class="btn btn-primary">Create Channel</button>
         </form>
      </div>
    </div>
  </div>
</div>



{{-- add products modal --}}
<div class="modal fade" id="addProductsToCampaign" tabindex="-1" role="dialog" aria-labelledby="addProductsToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="success-response" style="display:none">
                <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 10px">
                    <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                        <span class="alert-text success-response-text"></span>
                    </p>
                </div>
            </div>
        <form class="add_products_to_campaign">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name:</label>
            <input type="text" class="form-control Productname" id="Productname" name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Units:</label>
            <input type="text" class="form-control Productunits" id="Productunits" name="units">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="submitForm" class="btn btn-primary" id="saveCampaignProduct">Create Product</button>
      </div>
        </form>
    </div>
  </div>
</div>


{{--  edit product modal  --}}
<div class="modal fade" id="editProductsToCampaign" tabindex="-1" role="dialog" aria-labelledby="addProductsToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="success-response" style="display:none">
                <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 10px">
                    <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                        <span class="alert-text success-response-text"></span>
                    </p>
                </div>
            </div>
        <form class="add_products_to_campaign">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name:</label>
            <input type="text" class="form-control EditProductname" id="EditProductname" name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Units:</label>
            <input type="text" class="form-control EditProductunits" id="EditProductunits" name="units">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary updateProductLoading" id="saveCampaignProduct">Update Product</button>
      </div>
        </form>
    </div>
  </div>
</div>


{{--  add partners to a campaign  --}}
<div class="modal fade" id="addPartnersToCampaign" tabindex="-1" role="dialog" aria-labelledby="addPartnersToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="addPartners">
               <div class="partnerResponse" style="display:none">
                     <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 7px;">
                        <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                            <span class="alert-text success-response-text"></span>
                        </p>
                    </div>
                </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Partners Name</label>
            <input type="text" class="form-control partner-name" id="partner-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Partners Address</label>
            <input type="text" class="form-control partner-address" id="partner-address">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary addPartnerLoading">Add Partner</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- add partners --}}
<div class="modal fade" id="editPartnersToCampaign" tabindex="-1" role="dialog" aria-labelledby="editPartnersToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="editPartners">
               <div class="partnerResponse" style="display:none">
                     <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 7px;">
                        <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                            <span class="alert-text success-response-text"></span>
                        </p>
                    </div>
                </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Partners Name</label>
            <input type="text" class="form-control edit-partner-name" id="Edit-partner-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Partners Address</label>
            <input type="text" class="form-control edit-partner-address" id="Edit-partner-address">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary editPartnerLoading">Add Partner</button>
        </form>
      </div>
    </div>
  </div>
</div>


{{-- add targets --}}
<div class="modal fade" id="addTargetsToCampaign" tabindex="-1" role="dialog" aria-labelledby="addTargetsToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Targets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="addTarget">
               <div class="targetResponse" style="display:none">
                     <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 7px;">
                        <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                            <span class="alert-text target-response-text"></span>
                        </p>
                    </div>
                </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name</label>
            <input type="text" class="form-control add-target-name" id="add-target-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Target Units</label>
            <input type="text" class="form-control add-target-unit" id="add-target-unit">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary addTargetLoading">Add Target</button>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- Edit the target --}}
<div class="modal fade" id="editTargetsToCampaign" tabindex="-1" role="dialog" aria-labelledby="addTargetsToCampaignLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Targets</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="editTarget">
               <div class="targetResponse" style="display:none">
                     <div class="bg-gradient-success mt-3" style="border-radius:5px;padding: 7px;">
                        <p class="text-neutral pl-2 pr-2 pb-2 pt-2">
                            <span class="alert-text target-response-text"></span>
                        </p>
                    </div>
                </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Product Name</label>
            <input type="text" class="form-control edit-target-name" id="edit-target-name">
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Target Units</label>
            <input type="text" class="form-control edit-target-unit" id="edit-target-unit">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary editTargetLoading">Update Target</button>
        </form>
      </div>
    </div>
  </div>
</div>


{{-- banning and activating the project lead --}}
 <div class="modal fade" id="salesrep" tabindex="-1" role="dialog" aria-labelledby="activateProjectLeadModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-info">
        <div class="modal-header">
            <h6 class="modal-title activation-warning" id="modal-title-notification">Attention is needed</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="py-3 text-center">
            <i class="fas fa-exclamation-triangle fa-4x"></i>
            <h4 class="heading mt-4 activation-warning">Hello There !</h4>
            <p class="pop_question"></p>
            <p class="activation-success"></p>
            </div>
        </div>
        <div class="modal-footer">
            <div class="pop_action"></div>
            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


{{-- assigning sale rep --}}
<div class="modal fade " id="assignSalesRep" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Sales Rep <div style="display:none" class"assignment-spinner"><i class="fa  fa-sync fa-spin"></i></div></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
          <div class="result">
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light emptiness">
                      <tr>
                        <th scope="col" class="sort" data-sort="name">Name</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <span class="alert-info" style="background-color:white;color: green"></span>
                    <tbody class="sales_rep_list">
                        <div class="fa-6x text-center check_spinner"><i class="fas fa-spinner fa-pulse"></i></div>
                    </tbody>
                  </table>
                </div>
          </div>
       </div>
    </div>
  </div>
</div>


{{-- VIEW report comments --}}
<div class="modal fade" id="reportCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



{{--  updating the whole report  --}}
    <div class="modal fade" id="updateReportModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">update Report</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="" method="">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                      </div>
                      <div class="form-group">
                      <label for="exampleFormControlTextarea1">Comments</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
              </div>
              </div>
          </div>
        </div>