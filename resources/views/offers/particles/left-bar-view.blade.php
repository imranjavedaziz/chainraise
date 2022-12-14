<div class="col-lg-3 pt-4">
    
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
                        <select name="issuer" aria-label="Select Issuer Account "
                            data-control="select2" data-placeholder="Select Issuer Account*" id="issuer_account"
                            class="form-select form-select-lg" required >
                            <option value="" selected disabled > Select Issuer Account </option>
                                @foreach($issuers as $issuer)    
                                     <option @if( $issuer->id ==  $offer->issuer_id) selected @endif value="{{ $issuer->id }}"> {{ $issuer->name }} </option>
                                @endforeach
                        </select>
                        @error('issuer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="offer_name" placeholder="Offer Name *" id="offer_name"  value="{{ $offer->name }}" required>
                        @error('offer_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="short_description" id="short_description" value="{{ $offer->short_description }}"  placeholder="Short Description (Optional)">
                        @error('short_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <select  name="offer_tags" aria-label="Offer Tags (filters assets in marketplace)"
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
                            @error('offer_tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
                            @error('security_type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="symbol" value="{{ $offer->symbol }}" id="symbol" placeholder="Offer Symbol *">
                            @error('symbol')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <select  name="offer_tags" aria-label="Offer Tags (filters assets in marketplace)"
                            data-control="select2"
                            multiple
                            data-placeholder="Offer Tags (filters assets in marketplace)"
                            class="form-select  form-select-lg"  id="offer_tags">
                            <option value="Blockchain"> Blockchain </option>
                            <option value="360 Sportsx"> 360 Sportsx </option>
                            <option value="CR"> CR </option> 
                        </select>
                            @error('offer_tags')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="size"  id="offer_size" value="{{ $offer->size }}">
                         @error('size')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    
                    <div class="col-lg-12">
                        <input type="text" class="form-control" name="size_label" value="{{ $offer->size_label }}" placeholder="Offer Size Label (default: offering size)">
                            @error('size_label')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="col-lg-12">
                        <select name="base_currency"
                        aria-label="Base Currency"
                        data-control="select2"
                        data-placeholder="Base Currency"
                        class="form-select  form-select-lg"> 
                        <option @if($offer->base_currency == 'USD') selected @endif value="USD">USD</option>
                        <option @if($offer->base_currency == 'GBP') selected @endif value="GBP">GBP</option>
                        <option @if($offer->base_currency == 'EUR') selected @endif value="EUR">EUR</option>
                        </select>
                            @error('base_currency')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="price_per_unit" value="{{ $offer->price_per_unit }}" placeholder="Price per share/unit (if applicable)?">
                        @error('price_per_unit')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="share_unit_label"  placeholder="Share/Unit Label (default: shares)">
                        @error('share_unit_label')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-lg-12">
                        <input type="number" class="form-control" name="total_valuation"  value="{{ $offer->total_valuation }}"  placeholder="Total Valuation / NAV (if applicable)?">
                        @error('total_valuation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                    <div class="col-lg-12">
                        <div class="position-relative d-flex">
                            <input type="date" class="form-control  ps-12" placeholder="Commencement Date?" value="{{ $offer->commencement_date }}" name="commencement_date" />
                            @error('commencement_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="position-relative d-flex">
                            <input type="date" class="form-control  ps-12"  placeholder="Funding end date?" value="{{ $offer->funding_end_date }}" name="funding_end_date" />
                            @error('funding_end_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
                <!--end::Svg Icon-->
            </div>
            <div id="investor_flow" class="collapse mb-3">
                <div class="row">
                    <div class="col-lg-12  text-center mb-3">
                        <div class="overflow-auto" data-toggle="collapse" data-target="#investment_steps">
                            <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                Investment Steps
                            </div>
                        </div>
                        <div class="row collapse" id="investment_steps">
                            <div class="col-lg-12 pt-3 mb-3 text-center">
                                <button type="button" class="btn-sm btn btn-lg btn-dark me-3" id="kt_create_new_custom_fields_add" style="width: 100%;border-radius:0">
                                    Add An Investment Setup
                                </button>
                            </div>

                            <div class="col-lg-12  text-center">
                                <div class="overflow-auto pb-1">
                                    <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                       <span > 1  -  </span>
                                        Select Account Type
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-12  text-center">
                                <div class="overflow-auto pb-1">
                                    <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                       <span > 2  -  </span>
                                       Complete Account Form
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-12  text-center">
                                <div class="overflow-auto pb-1">
                                    <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                       <span > 3 -  </span>
                                        Accreditation
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-12  text-center">
                                <div class="overflow-auto pb-1">
                                    <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                       <span > 4  -  </span>
                                       E-Sign Document
                                    </div>
                                </div> 
                            </div>
                            <div class="col-lg-12  text-center">
                                <div class="overflow-auto pb-1">
                                    <div  class="d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                                       <span > 5  -  </span>
                                        Payment Method
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
                                <input type="number" class="form-control" name="price_per_share" style="font-size:12px!important"   placeholder="Minimum investment (USD)">
                            </div>
                            <div class="col-lg-12 mt-3 mb-3 text-center">
                                <input type="number" class="form-control" name="price_per_share" style="font-size:12px!important"  placeholder="Maximum investment (USD)">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="d-flex flex-stack"> 
                                    <div class="me-5">
                                        <label class="required ">Allow fractional shares</label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" type="checkbox" value="phone"  name="details_notifications[]"> 
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
                                            <input class="form-check-input h-13px w-13px" type="checkbox" value="phone"  name="details_notifications[]"> 
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
                                <input type="text" class="form-control" name="price_per_share" style="font-size:12px!important"   placeholder="Review Documents Button Text">
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="number" class="form-control" name="price_per_share" style="font-size:12px!important"  placeholder="Invest Button Text">
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="number" class="form-control" name="price_per_share" style="font-size:12px!important"  placeholder="Contact Us Button Text">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="d-flex flex-stack p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Send me a notification when clicked </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" type="checkbox" value="phone"  name="details_notifications[]"> 
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
                                            <input class="form-check-input h-13px w-13px" type="checkbox" value="phone"  name="details_notifications[]"> 
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
                                            <input class="form-check-input h-13px w-13px" type="checkbox" value="phone"  name="details_notifications[]"> 
                                        </label> 
                                    </div> 
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3 text-center">
                                <input type="text" class="form-control custom_input" name="price_per_share"  placeholder="Contact Us External URL">
                            </div>
                            <div class="col-lg-12 mt-3  text-center">
                                <input type="text" class="form-control custom_input" name="price_per_share"  placeholder="Addtl. Contact Emails (comma delimited list)">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder=" Alternate Notification Button">
                            </div>
                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-2"> 
                                    <div class="me-5">
                                        <label class="required "> Allow User to Send Custom Message </label> 
                                    </div> 
                                    <div class="d-flex"> 
                                        <label class="form-check form-check-custom "> 
                                            <input class="form-check-input h-11px w-11px" type="checkbox" value="phone"  name="details_notifications[]"> 
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
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder=" Confirm Investment Button Text">
                            </div>
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share"  placeholder=" Transaction Confirmation Message">
                            </div>

                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-1"> 
                                     <small> <b> Transaction Created Messages </b></small>
                                </div>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Addtl. Created Emails (comma delimited list)">
                            </div> 
                            

                            <div class="col-lg-12  mt-3">
                                <div class="d-flex flex-stack  p-1"> 
                                     <small> <b> Marketplace Call To Action Buttons </b></small>
                                </div>
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Learn More Button">
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Sign In Button">
                            </div> 
                            <div class="col-lg-12 mt-3">
                                <input type="text" class="form-control custom_input" name="price_per_share" placeholder="External URL">
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
                        <select name="offer_tags" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Offer Visibility</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id">Active</option>
                            <option data-kt-flag="flags/malaysia.svg" value="msa"> Public (Allow Anonymous Access) </option>
                            <option data-kt-flag="flags/canada.svg" value="ca">Preview</option>
                            <option data-kt-flag="flags/canada.svg" value="ca">Invite Only (Hidden)</option>
                            <option data-kt-flag="flags/canada.svg" value="ca">Coming Soon</option>
                            <option data-kt-flag="flags/canada.svg" value="ca">Not Active</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="offer_tags" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Offer Status</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id">Open</option>
                            <option data-kt-flag="flags/malaysia.svg" value="msa"> Close </option> 
                        </select>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b>Allow Lists: Only allow these investors</b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="offer_tags" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Select a list</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id">ChainRaise Capital Raise</option> 
                        </select>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                         <small class=" p-1">   <b> Deny Lists: Disallow these investors </b> </small>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <select name="offer_tags" class="form-control custom_input" style="border-radius: 0">
                            <option value="" disabled selected >Select a list</option>
                            <option data-kt-flag="flags/indonesia.svg" value="id">ChainRaise Capital Raise</option> 
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
                                    <input class="form-check-input h-13px w-13px" type="checkbox" value="phone" name="details_notifications[]"> 
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
                                    <input class="form-check-input h-13px w-13px" type="checkbox" value="phone" name="details_notifications[]"> 
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
                                    <input class="form-check-input h-13px w-13px" type="checkbox" value="phone" name="details_notifications[]"> 
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
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Enable Question & Answer Forum </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Show Funding Progress </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Show Funding End Date Countdown</span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Show Blockchain Info </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Swap Issuer and Offer Name </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Hide Logo Container </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Hide Logo in Details </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                    <span class="form-check-label fw-semibold"> Hide Logo in Marketplace </span>
                                </label> 
                            </div> 
                        </div>
                    </div> 
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-stack">  
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
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
                        <input type="text" class="form-control" name="price_per_share" placeholder="Offer Details Tab Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <small> <b>Page Tabs</b></small>
                        <hr>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Offer Details Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Videos Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Document Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Updates Tab Name">
                    </div>

                    <div class="col-lg-12 mt-3">
                        <input type="text" class="form-control custom_input" name="price_per_share" placeholder="Q & A Tab Name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <div class="d-flex flex-stack p-2"> 
                            <div class="d-flex"> 
                                <label class="form-check form-check-custom "> 
                                    <input class="form-check-input h-13px w-13px" type="checkbox" value="phone" name="details_notifications[]"> 
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