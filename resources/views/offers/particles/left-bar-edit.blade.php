<div class="col-lg-3 pt-4">
    <div class="row">
        <div class="col-lg-12 text-center">
            <button type="submit" class="btn btn-sm btn-dark no-radius" id="submit_offer"> UPDATE CHANGES</button>
        </div>
    </div>
    <div class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
        <div class="w-100 mb-3"> 
            <div class="d-flex align-items-center mb-5" data-toggle="collapse" data-target="#basic_info" >
                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3 fw-bold fs-6 text-gray-800"> Basic Info </span>
                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <div id="basic_info" class="collapse mb-3">
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12 ">
                        <select name="issuer"  id="issuer_account" class="form-select form-select-lg" required >
                            <option value="" selected disabled > Select Issuer Account </option>
                                @foreach($issuers as $issuer)    
                                     <option @if($issuer->id == $offer->issuer_id) selected @else @endif value="{{ $issuer->id }}"> {{ $issuer->name }} </option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="offer_name" value="{{ $offer->name }}" id="offer_name" required>
                    </div>
                </div>
                
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="short_description" value="{{ $offer->short_description }}" id="short_description" placeholder="Short Description (Optional)">
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <select name="offer_tags" aria-label="Offer Tags (filters assets in marketplace)"
                                     data-control="select2" data-placeholder="Offer Tags (filters assets in marketplace)"
                                     class="form-select form-select-lg"  id="offer_tags">
                                <option value="Reg D 506 B"> Reg D 506 B </option>
                                <option value="Reg D 506 C"> Reg D 506 C </option>
                                <option value="Reg D CF"> Reg D CF </option>
                                <option value="Reg D A, Tier 1"> Reg D A, Tier 1 </option>
                                <option value="Reg D A, Tier 2"> Reg D A, Tier 2 </option>
                                <option value="Reg S"> Reg S </option>
                                <option value="Other"> Other </option> 
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <select name="security_type" aria-label="Security Type (Optional)"
                                data-control="select2" data-placeholder="Security Type (Optional)" 
                                class="form-select form-select-lg"  id="security_type"> 
                                <option value="equity"> Equity </option>
                                <option value="debt"> Debt </option>
                                <option value="cash"> Cash </option>
                            </select>
                    </div>
                    <div class="col-lg-12 d-none">
                        <input type="text" class="form-control"  name="symbol"  id="symbol" placeholder="Offer Symbol *" value="{{ $offer->symbol}}">
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <select  name="offer_tags " aria-label="Offer Tags (filters assets in marketplace)"
                                    data-control="select2"
                                    multiple
                                    data-placeholder="Offer Tags (filters assets in marketplace)"
                                    class="form-select  form-select-lg"
                                    id="offer_tags">
                                    <option value="Blockchain"> Blockchain </option>
                                    <option value="360 Sportsx"> 360 Sportsx </option>
                                    <option value="CR"> CR </option> 
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="size"  id="offer_size" value="{{ $offer->size}}" required>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="size_label" id="size_label"
                        value="{{ $offer->size_label}}"
                        placeholder="Offer Size Label (default: offering size)">
                    </div>

                    <div class="col-lg-12">
                        <select name="base_currency" id="base_currency"
                        class="form-select  form-select-md" required> 
                        <option value="USD">USD</option>
                        <option value="GBP">GBP</option>
                        <option value="EUR">EUR</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="price_per_unit"
                        value="{{ $offer->price_per_unit}}"
                        placeholder="Price per share/unit (if applicable)?">
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="share_unit_label"
                        value="{{ $offer->share_unit_label}}"
                        placeholder="Share/Unit Label (default: shares)">
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="total_valuation" 
                        value="{{ $offer->total_valuation}}"
                        placeholder="Total Valuation / NAV (if applicable)?">
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <label for=""> Commencement Date </label>
                        <div class="position-relative d-flex">
                            <input type="date" class="form-control"
                            value="{{ $offer->commencement_date}}"
                            placeholder="Commencement Date?" name="commencement_date" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label for=""> Funding end date</label>
                        <div class="position-relative d-flex">
                            <input type="date" class="form-control" 
                            value="{{ $offer->funding_end_date}}"
                            placeholder="Funding end date?" name="funding_end_date" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 mb-3"> 
            <div class="d-flex align-items-center mb-5" data-toggle="collapse" data-target="#investor_flow " >
                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3"> Investor Flow </span>
                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                    </svg>
                </span>
            </div>
            <div id="investor_flow" class="collapse mb-3">
                <div class="row">
                    <div class="col-lg-12  text-center mb-3">
                        <div class="overflow-auto" data-toggle="collapse" data-target="#investment_steps">
                            <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                Investment Steps
                            </div>
                        </div>
                        <div class="row collapse p-5" id="investment_steps">
                            <div class="col-lg-12 pt-3 mb-3 text-center">
                                <button type="button" class="btn-sm btn btn-lg btn-dark me-3"
                                id="add_new_investment_step" style="width: 100%;border-radius:0"
                                data-bs-toggle="modal" data-bs-target="#modal_investment_setup">
                                    Add An Investment Setup
                                </button>
                            </div>
                            <div class="col-lg-12">
                                <div class="row investment_step_button_row">
                                    <div class="col-lg-12  text-center button_row_wrapper">
                                        <div class="overflow-auto pb-1">
                                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                               <span class="col-lg-10 text-left"> Select Account Type  </span>
                                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                                            </div>
                                        </div> 
                                        <input type="hidden" name="investment_setup[]" value="Select Account Type">
                                    </div>
                                    <div class="col-lg-12  text-center button_row_wrapper">
                                        <div class="overflow-auto pb-1">
                                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                               <span class="col-lg-10 text-left"> Complete Account Form   </span>
                                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="investment_setup[]" value="Complete Account Form">
                                    </div>
                                    <div class="col-lg-12  text-center button_row_wrapper">
                                        <div class="overflow-auto pb-1">
                                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                               <span class="col-lg-10 text-left"> Accreditation  </span>
                                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                                            </div>
                                        </div> 
                                        <input type="hidden" name="investment_setup[]" value="Accreditation">
                                    </div>
                                    <div class="col-lg-12  text-center button_row_wrapper">
                                        <div class="overflow-auto pb-1">
                                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                               <span class="col-lg-10 text-left">  E-Sign Document  </span>
                                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="investment_setup[]" value="E-Sign Document">
                                    </div>
                                    <div class="col-lg-12  text-center button_row_wrapper">
                                        <div class="overflow-auto pb-1">
                                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                               <span class="col-lg-10 text-left">  Payment Method  </span>
                                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="investment_setup[]" value="Payment Method">
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <div class="col-lg-12  text-center mb-3">
                        <div class="overflow-auto" data-toggle="collapse" data-target="#investment_restrictions">
                            <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                Investment Restrictions
                            </div>
                        </div>
                        <div class="row collapse" id="investment_restrictions">
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="number" class="form-control" id="min_invesment" 
                                name="min_invesment" style="font-size:12px!important" 
                                value="{{ $offer->investmentRestrictions->min_invesment }}"
                                placeholder="Minimum investme nt (USD) *">
                            </div>
                            <div class="col-lg-12 mt-3 mb-3 text-center">
                                <input type="number" class="form-control"  
                                id="max_invesment" name="max_invesment" 
                                value="{{ $offer->investmentRestrictions->max_invesment }}"
                                style="font-size:12px!important" placeholder="Maximum investment (USD) *">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="d-flex flex-stack"> 
                                    <div class="me-5">
                                        <label class="required ">Allow fractional shares</label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" 
                                            type="checkbox" 
                                            
                                            @if($offer->investmentRestrictions->allow_fractional_shares == 1)
                                            
                                            checked

                                            @endif
                                             
                                            name="allow_fractional_shares"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="d-flex flex-stack"> 
                                    <div class="me-5">
                                        <label class="required "> Require investing by units </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-13px w-13px" 
                                            type="checkbox" 
                                            @if($offer->investmentRestrictions->require_investing_units)
                                               checked
                                            @endif
                                            name="require_investing_units"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-12  text-center mb-3">
                        <div class="overflow-auto" data-toggle="collapse" data-target="#call_to_action_button">
                            <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                               Call To Action Buttons
                            </div>
                        </div>
                        <div class="row collapse" id="call_to_action_button">
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="text" class="form-control" 
                                name="review_documents" style="font-size:12px!important"   
                                @if($offer->callToAction) value="{{ $offer->callToAction->review_documents}}" @endif
                                placeholder="Review Documents Button Text">
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="text" class="form-control" name="invest_button_text" 
                                @if($offer->callToAction) value="{{ $offer->callToAction->invest_button_text}}" @endif
                                style="font-size:12px!important"  placeholder="Invest Button Text">
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="text" class="form-control" name="contact_us_button_text" 
                                @if($offer->callToAction) value="{{ $offer->callToAction->contact_us_button_text}}" @endif
                                style="font-size:12px!important"  placeholder="Contact Us Button Text">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="d-flex flex-stack p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Send me a notification when clicked </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" 
                                            type="checkbox"  name="send_notification_when_clicked"
                                            @if($offer->callToAction)
                                                @if($offer->callToAction->send_notification_when_clicked)
                                                    checked
                                                @endif
                                            @endif> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="d-flex flex-stack p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Hide Contact Us Button </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-13px w-13px" type="checkbox" 
                                            @if($offer->callToAction)
                                            @if($offer->callToAction->hide_contact_button)
                                                checked
                                            @endif
                                            @endif
                                            name="hide_contact_button"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="d-flex flex-stack p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Use Calendly meeting scheduling </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-13px w-13px" type="checkbox" 
                                            @if($offer->callToAction)
                                            @if($offer->callToAction->calendly_meeting_link)
                                                checked
                                            @endif
                                            @endif
                                            name="calendly_meeting_link"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="text" class="form-control custom_input" 
                                name="contact_us_external_url"  placeholder="Contact Us External URL"
                                @if($offer->callToAction) value="{{ $offer->callToAction->contact_us_external_url}}" @endif
                                >
                            </div>
                            <div class="col-lg-12 mt-3  text-center">
                                <input type="text" class="form-control custom_input" name="alternate_notification_button" 
                                @if($offer->callToAction) value="{{ $offer->callToAction->alternate_notification_button}}" @endif
                                placeholder="Alternate Notification Button">
                            </div>
                            
                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Allow User to Send Custom Message </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" 
                                            type="checkbox"
                                            @if($offer->callToAction)
                                                @if($offer->callToAction->allow_user_to_send_message)
                                                    checked
                                                @endif
                                            @endif
                                            name="allow_user_to_send_message"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-1"> 
                                     <small> <b>Complete Transaction Buttons / Messages</b></small>
                                </div>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="confirm_invesment_button_text" 
                                @if($offer->callToAction)
                                    value="{{ $offer->callToAction->confirm_invesment_button_text }}"
                                @endif
                                placeholder=" Confirm Investment Button Text">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="transaction_confirmation_message" 
                                @if($offer->callToAction)
                                value="{{ $offer->callToAction->transaction_confirmation_message }}"
                                @endif
                                placeholder=" Transaction Confirmation Message">
                            </div>

                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-1"> 
                                     <small> <b> Transaction Created Messages </b></small>
                                </div>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input"
                                name="addtl_created_emails" placeholder="Addtl. Created Emails (comma delimited list)"
                                @if($offer->callToAction)
                                value="{{ $offer->callToAction->addtl_created_emails }}"
                                @endif
                                >
                            </div> 
                            

                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-1"> 
                                     <small> <b> Marketplace Call To Action Buttons </b></small>
                                </div>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" 
                                name="learn_more_button" placeholder="Learn More Button"
                                 @if($offer->callToAction) value="{{ $offer->callToAction->learn_more_button }}" @endif>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="sign_in_button" 
                                placeholder="Sign In Button"   @if($offer->callToAction) value="{{ $offer->callToAction->sign_in_button }}" @endif>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input"
                                 @if($offer->callToAction) value="{{ $offer->callToAction->external_url }}" @endif
                                name="external_url" placeholder="External URL">
                            </div> 
                            
                        </div> 
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-100 mb-3"> 
            <div class="d-flex align-items-center mb-5" data-toggle="collapse" data-target="#access" >
                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3"> Access </span>
                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <div id="access" class="collapse mb-3">
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <select name="visiblity"  id="visiblity" class="form-control custom_input" style="border-radius: 0">
                            <option  value="active">Active</option>
                            <option  value="public"> Public (Allow Anonymous Access) </option>
                            <option  value="preview">Preview</option>
                            <option  value="invite">Invite Only (Hidden)</option>
                            <option  value="coming_soon">Coming Soon</option>
                            <option  value="no-active">Not Active</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="offer_status" id="offer_status" class="form-control custom_input" style="border-radius: 0">
                            <option value="closed"> Closed </option>
                            <option value="open"> open </option> 
                        </select>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b>Allow Lists: Only allow these investors</b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="allow_list" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Select a list</option>
                        </select>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b> Deny Lists: Disallow these investors </b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="deny_list" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Select a list</option> 
                        </select>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b>Invites </b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-stack p-2"> 
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-13px w-13px"
                                    type="checkbox" name="allow_referrals"
                                    @if($offer->callToAction)
                                        @if($offer->callToAction->allow_referrals)
                                            checked
                                        @endif
                                    @endif
                                    > 
                                </label> 
                            </div> 
                            <div class="">
                                <label class=" "> Allow referrals of users who have access </label> 
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b>Accreditation </b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-stack p-2"> 
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-13px w-13px" type="checkbox"
                                    @if($offer->callToAction)
                                        @if($offer->callToAction->allow_non_accredited_investors)
                                            checked
                                        @endif
                                    @endif
                                    name="allow_non_accredited_investors"> 
                                </label> 
                            </div> 
                            <div class="">
                                <label class=" "> Allow non-accredited investors </label> 
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b>Editing </b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-stack p-2"> 
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-13px w-13px" type="checkbox" 
                                    @if($offer->callToAction)
                                        @if($offer->callToAction->allow_editing)
                                            checked
                                        @endif
                                    @endif
                                    name="allow_editing"> 
                                </label> 
                            </div> 
                            <div class="">
                                <label class=" "> Allow issuer to edit this offer </label> 
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="w-100 mb-3"> 
            <div class="d-flex align-items-center mb-5" data-toggle="collapse" data-target="#display" >
                <span class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3"> Display </span>
                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-success">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                        <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <div id="display" class="collapse mb-3">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <small> <b> Display Settings </b></small>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" 
                                    type="checkbox" name="enable_questions"
                                    @if($offer->display)
                                        @if($offer->display->enable_questions)
                                            checked
                                        @endif
                                    @endif
                                    >
                                    <span class="form-check-label fw-semibold" > Enable Question & Answer Forum </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" 
                                    @if($offer->display)
                                        @if($offer->display->funding_process)
                                            checked
                                        @endif
                                    @endif
                                    name="funding_process">
                                    <span class="form-check-label fw-semibold"> Show Funding Progress </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="true" 
                                    @if($offer->display)
                                        @if($offer->display->show_funding_end_countdown)
                                            checked
                                        @endif
                                    @endif
                                    name="show_funding_end_countdown">
                                    <span class="form-check-label fw-semibold"> Show Funding End Date Countdown</span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" 
                                    @if($offer->display)
                                        @if($offer->display->show_blockchain_info)
                                            checked
                                        @endif
                                    @endif
                                    name="show_blockchain_info">
                                    <span class="form-check-label fw-semibold"> Show Blockchain Info </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                     value="phone"
                                     @if($offer->display)
                                        @if($offer->display->swap_issuer)
                                            checked
                                        @endif
                                     @endif
                                     name="swap_issuer">
                                    <span class="form-check-label fw-semibold"> Swap Issuer and Offer Name </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" 
                                    @if($offer->display)
                                        @if($offer->display->hide_logo_container)
                                            checked
                                        @endif
                                     @endif
                                    value="phone" name="hide_logo_container">
                                    <span class="form-check-label fw-semibold"> Hide Logo Container </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px"
                                    @if($offer->display) 
                                     @if($offer->display->hide_logo_details)
                                        checked
                                     @endif
                                     @endif
                                    type="checkbox" value="phone" name="hide_logo_details">
                                    <span class="form-check-label fw-semibold"> Hide Logo in Details </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px"
                                    @if($offer->display) 
                                        @if($offer->display->hide_logo_marketplace)
                                            checked
                                        @endif
                                    @endif
                                    type="checkbox" value="phone" name="hide_logo_marketplace">
                                    <span class="form-check-label fw-semibold"> Hide Logo in Marketplace </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" 
                                    @if($offer->display)  
                                     @if($offer->display->remove_hero_image_mask)
                                        checked
                                     @endif
                                     @endif
                                    type="checkbox" value="phone" name="remove_hero_image_mask">
                                    <span class="form-check-label fw-semibold"> Remove Hero Image Mask </span>
                                </label> 
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <small> <b>Page Tabs</b></small>
                        <hr>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <input type="text" class="form-control"   placeholder="Offer Details Tab Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <small> <b>Page Tabs</b></small>
                        <hr>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" @if($offer->display) value="{{ $offer->display->offer_tab_name}}" @endif name="offer_tab_name" placeholder="Offer Details Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" @if($offer->display) value="{{ $offer->display->video_tab_name}}" @endif name="video_tab_name" placeholder="Videos Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" @if($offer->display) value="{{ $offer->display->document_tab_name}}" @endif name="document_tab_name" placeholder="Document Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" @if($offer->display) value="{{ $offer->display->update_tab_name}}" @endif name="update_tab_name" placeholder="Updates Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" @if($offer->display) value="{{ $offer->display->qa_tab_name}}" @endif name="qa_tab_name" placeholder="Q & A Tab Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-stack p-2"> 
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-13px w-13px" type="checkbox" 
                                    @if($offer->display) 
                                        @if($offer->display->hide_contact_us_from)
                                            checked
                                        @endif
                                    @endif
                                    value="phone" name="hide_contact_us_from"> 
                                </label> 
                            </div> 
                            <div class="">
                                <label class=" ">  Hide Contact Us Tab </label> 
                            </div>  
                        </div>
                    </div>
                </div>
                
                 
            </div>
        </div> 
    </div>
</div>