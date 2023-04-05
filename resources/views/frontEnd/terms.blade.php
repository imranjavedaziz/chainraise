@extends('layouts.master')
@section('page_head')
    <style>
        .lernbtn:hover {
            background: #fff !important;
            color: #4b1dff !important;
        }
        ul{
            list-style-type: square;
            margin-left: 3rem;
        }
        ul li{
            color:#fff;
        }
        p{
            color:#fff
        }
        
    </style>
@endsection
@section('title', 'Home')
@section('content')
    <div class="container-fluid header-sec py-3">
        <div class="row ">
            <div class="col-lg-12 d-flex justify-content-center align-items-center py-4">
                <img src="{{ asset('media/logo/logo-h.jpg') }}" alt="logo" width="80" height="60">
                <h2>Build an <span style="color:#4b1dff">Ambitious</span> Portfolio.</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-image ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>
                        Privacy Policy
                    </h3>
                        <p> 
                        This Privacy Policy specifies the personal information that we ask you to provide and how we treat
                        this information. This Privacy Policy is part of our Terms of Use, and all the terms and conditions
                        set forth in the Terms of Use also apply to this Privacy Policy. Capitalized terms that are not
                        otherwise defined in this Privacy Policy have the meanings given to them in the Terms of Use.
                        <br>
                        IF YOU DO NOT UNDERSTAND OR DO NOT AGREE WITH THE TERMS OF THIS

                        PRIVACY POLICY PLEASE DO NOT USE THE SITE
                        </p>
                        <h4>
                            Your Consent
                        </h4>   
                        <p>
                        You will be deemed to have consented to the terms of this Privacy Policy by using the Site in any
                        way, even just browsing. We may also ask you to indicate your consent more formally by checking a
                        box or otherwise taking an affirmative action.
                        </p>
                        <h4>
                         Changes to Privacy Policy
                        </h4>
                        <p>     
                        We might change this Privacy Policy from time to time. If you have consented merely by using the
                        Site, then we will not necessarily notify you of the changes. If you have consented more formally,
                        as described above, then the changes will not become effective until we have asked you for, and
                        obtained, your consent.
                        </p>
                        <h4>
                            Personal Information We Collect
                        </h4>      
                        <p> We collect a variety of personal information to operate the Site and provide the Service, including:
                        </p>
                        <ul>
                            <li>
                                Your name, address, phone number, email address, birth date, and other personal information.
                            </li>
                            <li>
                                Financial information, including your social security number, income, and net worth.
                            </li>
                            <li>
                                Copies of your tax returns, brokerage statements, W-2 forms, and other financial documents.
                            </li>
                            <li>
                                Your username and password.
                            </li>
                            <li>
                                Information to confirm your identity, such as a completed electronic check transaction or a credit  report.
                            </li>
                            <li>
                                Your W-9 form.
                            </li>
                            <li>
                                Information to confirm your place of residence.
                            </li>
                            <li>
                                Information about your use of the Site.
                            </li>
                            <li>
                                Information about your computer configuration.
                            </li>
                            <li>
                                Information to confirm your relationship with other parties associated with the Site.
                            </li>
                             <li>
                                Information about your bank accounts or other sources of payment.
                            </li> <li>
                                Your IP address.
                            </li>
                           

                        </ul>
                        
                        <h4>
                            How We Use Your Personal Information
                        </h4>
                        <p>We use your personal information to:</p>
                        <ul>
                            <li>
                                Verify that you are permitted to use and invest through the Site.
                            </li>
                            <li> Keep track of your investments.</li>
                            <li> Guard against fraud.</li>
                            <li> Comply with applicable law.</li>
                            <li> Answer your questions.</li>
                            <li> Protect our rights.</li>
                            <li> Send to third parties at your request.</li>
                            <li> Process your transactions at the Site.</li>
                            <li>Determine whether your computer information is compatible with the Site.</li>
                            <li> Keep track of your use of the Site.</li>
                            <li>  Send you information about your investments.</li>
                            <li>  Notify you of other possible investments in which you might have an interest.</li>
                            <li>  Analyze use of the Site.</li>
                            <li>  Improve the Site.</li>
                            <li>  Send you information about the Site.</li>
                            <li>  Send you materials about us.</li>
                            <li>  Other purposes we disclose to you.</li>
                        </ul>
                       <h4>
                        What We Provide To Third Parties
                       </h4>
                       <p>
                        We do not provide any third party with any of your personal information except in these situations:
                       </p>
                       <ul>
                            
                        <li>We use third parties to perform services for the Site, such as hosting services, electronic
                        signature providers, electronic payment service providers, and services that verify the
                        qualification of investors. Each of these third parties will need some of your personal and/or
                        </li>
                        <li>financial information to perform their services.</li>
                        <li>If you invest, we will identify you on tax returns and other government forms.</li>
                        <li>We will provide information if we believe we are required to do so by law.</li>
                        <li>If our company is sold, all information will be transferred to our successor.</li>
                        <li>If you choose to participate in discussions or messages boards at the Site, other users will be able
                        to see your name (but not any other personal information) and any other information you voluntarily
                        provide to be seen.</li>
                       </ul>
                       
                        
                       
                       
                       
                    
                    
                        
                       

                         

                       
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
