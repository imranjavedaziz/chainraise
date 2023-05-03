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
        .black-font{
            color:#000;
        }
        
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
@section('title', 'Home')
@section('content')
  
  <div class="container-fluid header-sec  py-3">
    <div class="container-fluid header-sec  py-3">
      <div class="row ">
          <div class="col-lg-12 text-center py-4">
              <h5 style="color:#4b1dff">For Business</h5>
              <h2>Frequently Asked Questions</h2>
          </div>
      </div>
  </div>
  <!-- Heading End -->
  <!-- Faq for investor -->
  <div class="container-fluid bg-image">
      <div class="container py-4 ">
          <div class="row">
              <div class="col-12">
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseOne" aria-expanded="false"
                                  aria-controls="flush-collapseOne">
                                  What Is Chain Raise
                              </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">ChainRaise is a digital asset platform, that raises money for
                                      real estate
                                      opportunities and businesses. Using blockchain technology, we make startup
                                      investment and
                                      fundraising safe and secure for everyone involved.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingTwo">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                  aria-controls="flush-collapseTwo">
                                  Why raise funds via ChainRaise?
                              </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">ChainRaise offers a fast, agile platform that empowers your
                                      startup to seek new investments using a peer-to-peer approach. </p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingThree">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseThree" aria-expanded="false"
                                  aria-controls="flush-collapseThree">
                                  How does ChainRaise make money?
                              </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">Issuers pay ChainRaise a fee to use the ChainRaise
                                      communication Portal for Reg CF offerings. This fee may be paid as a flat fee,
                                      commission based on the amount of money issuers raise, or in other ways. Issuers
                                      may pay additional fees for specified services ChainRaise provides, including
                                      reimbursement of any expenses ChainRaise incurs on their behalf. ChainRaise
                                      discloses its compensation for each offering in which an issuer invests. If an
                                      issuer pays ChainRaise in whole or in part with its own issuing securities,
                                      these securities will always be the same class offered to investors on the
                                      ChainRaise Portal</p>
                                  <p class="black-font">ChainRaise does not charge a fee to investors for offerings
                                      via Reg CF.</p>
                                  <p class="black-font">ChainRaise charges a flat fee for Reg D and Reg A+ offerings.
                                  </p>
                                  <p class="black-font">Private investment funds offered by ChainRaise may be managed
                                      by an affiliated entity. These affiliated companies may be entitled to:</p>
                                  <ul class="ps-5" style="list-style: disc;">
                                      <li>Management Fee: a stated percentage of the gross proceeds sold in an
                                          offering of a private investment fund</li>
                                      <li>Carried Interest: affiliated companies may receive a percentage of any
                                          profit realized when a cash distribution takes place.</li>
                                      <li>Distribution Fee: a stated percentage of any distribution made in
                                          conjunction with a private fund investment</li>
                                      <li>Cost Reimbursement: legal, banking, and accounting fees</li>
                                  </ul>
                                  <p class="black-font">Any fees related to an investment in a private investment fund
                                      will vary. Fee details are listed in the Private Placement Memorandum. Investors
                                      should carefully read these documents prior to making an investment. Fees paid
                                      are not contingent upon the financial performance of each company. Fees are due
                                      regardless of whether investors make or lose money on their investments. Fees
                                      and expenses will result in a reduction of the amount of money one can make on
                                      investments over time. Investors must understand what fees and costs they are
                                      paying.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingfour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapsefour" aria-expanded="false"
                                  aria-controls="flush-collapsefour">
                                  What are the communication channels?
                              </button>
                          </h2>
                          <div id="flush-collapsefour" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body ">

                                  <p class="black-font">After issuers have prepared and filed SEC Form C, Form C and
                                      other issuer offering documents will be publicly available on the ChainRaise
                                      Portal. The Portal also provides publicly viewable communications channels, or
                                      chat rooms, where investors can communicate with each other as well as
                                      representatives of the issuers listed on our Portal. These channels allow
                                      investors to discuss and converse with each other, as well as communicating with
                                      issuers’ representatives about investment opportunities or any other questions.
                                  </p>
                                  <p class="black-font">While ChainRaise will generally not participate in these
                                      channels, ChainRaise reserves the right to establish guidelines and moderate the
                                      channels to remove potentially abusive, hateful, fraudulent, or otherwise
                                      concern-raising content.</p>

                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingfive">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapsefive" aria-expanded="false"
                                  aria-controls="flush-collapsefive">
                                  When will ChainRaise cancel an offering?
                              </button>
                          </h2>
                          <div id="flush-collapsefive" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">Rule 301(c)(2) requires an intermediary such as a Funding
                                      Portal to cancel an offer if it has a reasonable basis to believe that the
                                      issuer or the offering presents a potential for fraud or otherwise raises
                                      concerns about investor protection.</p>
                                  <p class="black-font">Rule 402(b)(10) permits a Funding Portal to deny access to its
                                      platform to, or cancel an offering of an issuer, pursuant to Rule 301(c)(2). An
                                      intermediary may also cancel an offering at any time in accordance with Rules
                                      301 and 402, regardless of the status of the offering.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingsix">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapsesix" aria-expanded="false"
                                  aria-controls="flush-collapsesix">
                                  What is ChainRaises' relationships with issuers?
                              </button>
                          </h2>
                          <div id="flush-collapsesix" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">ChainRaise provides a platform for issuers to find potential
                                      investors. In exchange, issuers pay a service fee. Issuers may also pay for
                                      specified services. ChainRaise therefore has a financial interest in its
                                      issuers: they pay to be on the ChainRaise Portal; pay for additional specified
                                      services; and reimburse expenses ChainRaise incurs on their half. In certain
                                      Regulation CF offerings, ChainRaise will accept securities paid by issuers as
                                      compensation, but they will always be the same class of securities offered to
                                      investors.</p>
                                  <p class="black-font">Issuers may or may not have an ongoing relationship with
                                      ChainRaise after an offering is complete. Issuers may or may not continue using
                                      the Portal to raise money or use services provided by and pay compensation to
                                      entities affiliated with ChainRaise.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-heading7">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapse7" aria-expanded="false"
                                  aria-controls="flush-collapse7">
                                  How are issuers screened?
                              </button>
                          </h2>
                          <div id="flush-collapse7" class="accordion-collapse collapse"
                              aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">According to Rule 301(a), intermediaries must conduct due
                                      diligence to have a reasonable basis to believe an issuer will comply with the
                                      requirements of Section 4A(b) and Regulation Crowdfunding. An issuer must also
                                      have established means of keeping accurate records of the holders of securities.
                                      ChainRaise reserves the right to question or request additional materials to
                                      establish the reliability of issuers’ representations. According to Rule
                                      301(c)(1), ChainRaise bears anti-fraud responsibilities and therefore must
                                      conduct background and securities enforcement regulatory history checks on
                                      issuers and their officers, directors, and beneficial owners of 20% or more of
                                      the issuer’s outstanding voting equity securities–calculated based on voting
                                      power.</p>
                                  <p class="black-font">Rule 301(c)(2) requires that if after allowing an issuer to
                                      use ChainRaise platform, ChainRaise acquires additional information indicating
                                      an issuer or its potential offering might have a risk of fraud or lack of
                                      investor protection, ChainRaise must promptly remove said issuer’s offering,
                                      cancel it, and return or direct the return of any committed funds.</p>
                                  <p class="black-font">Issuers and certain other people may be the subject of certain
                                      disqualifying events during the last 10 years, in which case Title III may not
                                      be used. “Certain other people” includes any predecessor of the issuer; any
                                      director, officer, general partner, or manager of the issuer; a person owning
                                      20% or more of the Issuer’s voting power; any promoter associated with the
                                      issuer; any person who will be paid for soliciting investors; and any general
                                      partner, director, officer, or manager of such a solicitor. “Certain
                                      disqualifying events” involves improper actions in the securities business such
                                      as the conviction of a felony or misdemeanor in connection with the purchase or
                                      sale of any security or the loss of license of a securities broker for
                                      misconduct, among other “bad actor” incidents.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingeight">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseeight" aria-expanded="false"
                                  aria-controls="flush-collapseeight">
                                  What information are issuers are required to provide?
                              </button>
                          </h2>
                          <div id="flush-collapseeight" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">What types of financial information issuers must make
                                      available depends on three factors:</p>
                                  <ul class="ps-5" style="list-style: disc;">
                                      <li>How much capital an issuer is trying to raise with its current offering</li>
                                      <li>Whether this is an issuer’s first offering using Title III</li>
                                      <li>If this is not an issuer’s first offering, how much the issuer has raised in
                                          other Title III offerings during the last 12 months</li>
                                  </ul>
                                  <p class="black-font">If an issuer’s amount of Title III offerings totals $107,000
                                      within the last 12 months, the issuer must provide:</p>
                                  <ul class="ps-5" style="list-style: disc;">
                                      <li>Its total income, tax income, and total tax as reported on the</li>
                                      <li>Issuer’s Federal tax return, certified by an issuer’s principal executive
                                          offer</li>
                                      <li>Financial statements certified by an issuer’s principal executive officer
                                      </li>
                                      <li>If available, financial statements reviewed or audited by a public
                                          accountant independent of an issuer</li>
                                  </ul>

                                  <p class="black-font">If an issuer’s amount of Title III offerings total more than
                                      $107,000 but less than $535,000 within the last 12 months, the issuer must
                                      provide:</p>
                                  <ul class="ps-lg-5" style="list-style: disc;">
                                      <li>Financial statements reviewed by a public accountant independent of the
                                          issuer</li>
                                      <li>If available, financial statements audited by a public accountant
                                          independent of the issuer</li>
                                  </ul>
                                  <p class="black-font">If an issuer’s amount of Title III offerings totals more than
                                      $535,000 within the last 12 months, the issuer must provide:</p>
                                  <ul class="ps-lg-5" style="list-style: disc;">
                                      <li>If this is an issuer’s first offering under Title III, financial statements
                                          reviewed by a public accountant independent of the issuer</li>
                                      <li>If this not an issuer’s first offering under Title III, financial statements
                                          audited by a public accountant independent of the issuer</li>
                                  </ul>
                                  <p class="black-font">All financial statements must be prepared in accordance with
                                      the United States government’s “generally accepted accounting principles.”
                                      Financial statement reviews must be conducted in accordance with the Statements
                                      on Standards for Accounting and Review Services issued by the Accounting and
                                      Review Services Committee of the AICPA. Financial statement audits must be
                                      conducted in accordance with either auditing standards of the AICPA or standards
                                      of the Public Company Accounting Oversight Board.</p>
                                  <p class="black-font">After one invests in an issuer, the issuer is generally
                                      required to file annual reports with the SEC and make them available online
                                      within 120 days after the end of the fiscal year. An annual report will
                                      typically include:</p>
                                  <ul class="ps-lg-5" style="list-style: disc;">
                                      <li>Information included on Form C</li>
                                      <li>Updated financial statements certified by an issuer’s executive office
                                          (while reviewed or audited financial statements are not required, if
                                          reviewed or audited financial statements are available then they must be
                                          provided)</li>
                                      <li>Disclosure and updates about the issuer’s financial condition</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingnine">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapsenine" aria-expanded="false"
                                  aria-controls="flush-collapsenine">
                                  What the frequency of issuers’ annual reports?
                              </button>
                          </h2>
                          <div id="flush-collapsenine" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingnine" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">At the very least, investors will receive current information
                                      about an issuer once a year in its annual report. The issuer, however, may be
                                      allowed to stop filing annual reports, in which case investors will have no
                                      current financial information about the issuer. An issuer can choose to stop
                                      filing annual reports on the date the issuer has filed at least one annual
                                      report and has fewer than 300 shareholders of record, the date the issuer has
                                      filed at least three annual reports and has total assets no greater than $10
                                      million, the date the issuer or someone else buys all of the securities issued
                                      in the Title III offering, the date the issuer registers its securities and is
                                      required to file reports under the Securities Exchange Act of 1934, or the date
                                      the Issuer is dissolved under state law.</p>
                              </div>
                          </div>
                      </div>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingten">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                  data-bs-target="#flush-collapseten" aria-expanded="false"
                                  aria-controls="flush-collapseten">
                                  What is Form C filing?
                              </button>
                          </h2>
                          <div id="flush-collapseten" class="accordion-collapse collapse"
                              aria-labelledby="flush-headingten" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">
                                  <p class="black-font">Before investing, an issuer must provide investors information
                                      on Form C. This information includes the issuer’s name, address, and website;
                                      the issuer’s principals, executive officers, and directors; the principal
                                      occupation and employment for the last three years of each director and officer;
                                      the names of each person owning 20% or more of the issuer’s voting power; the
                                      specific investment’s risk factors, the issuer’s business and business plan; in
                                      what ways any proceeds of the offering will be used; the issuer’s ownership and
                                      capital structure; how rights exercised by the issuer’s principals can affect
                                      investors; compensation paid to ChainRaise’ Portal for each offering; a
                                      description of previous offerings issued by the issuer; whether the issuer has
                                      previously failed to file any reports required by law; transactions with
                                      officers, directors, and other “insiders;” whether the issuer would be
                                      disqualified from offering securities under Title III under the “bad actor”
                                      rules, if the effective date of those rules were different; the issuer’s
                                      financial condition: how over-subscriptions will be handled; where and when
                                      annual reports are posted; financial information about the Issuer, and any other
                                      necessary information.</p>
                              </div>
                          </div>
                      </div>


                  </div>

              </div>
          </div>
      </div>
  </div>
  <!-- Faq for investor End -->
  <!-- Before Footer Section Start -->
  <div class="container-fluid bfs">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/vpzjmdjv.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Align with Your Community</h5>
                  <p>Allow your customers to succeed with you! Why not make them rich alongside you?</p>
              </div>
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/yrxnwkni.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Build a network
                      of Support</h5>
                  <p>Your cap table becomes your ally. They can bring you sales, new hires, and more!</p>
              </div>
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/alnsmmtf.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Keep Control of
                      Your Vision</h5>
                  <p>If a board room at Apple was able to fire Steve Jobs, they can fire anyone. Maintain control!</p>
              </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/wgydzbzz.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Marketing
                      and Sales</h5>
                  <p>Each investor is a marketing and sales channel, happier than ever to help!</p>
              </div>
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/uutnmngi.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Spend Less Time
                      Raising of Support</h5>
                  <p>Our system will automate the raising of capital, bringing in investors 24/7. No distractions for
                      you!</p>
              </div>
              <div class="col-lg-4 text-center px-3">
                  <lord-icon src="https://cdn.lordicon.com/awteodmg.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" style="width:120px;height:120px">
                  </lord-icon>
                  <h5 class="mt-2">Don’t Allow
                      VC’s to Bully</h5>
                  <p>VC firms will use their leverage, telling you 20% equity is standard. Not around here!</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Before Footer Section End -->
  <!-- Before Footer Section Start -->
  <div class="container-fluid bg-image pb-5">
      <div class="container border border-white p-5  ">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="mb-2">Looking to have your business funded?</h2>
                  <p>At ChainRaise, we are passionate about helping startups succeed. We know that it takes more than
                      just a great idea to create a successful business. It takes hard work, dedication, and access to
                      capital. That’s why we’ve made it our mission to connect startups with the funding they need to
                      grow and thrive. And we’re not alone in this endeavor.</p>
                  <button class="btn" style="background-color: #4b1dff; color: white; padding: 10px 25px;"
                      type="submit">RAISE CAPITAL</button>
              </div>
          </div>
      </div>
  </div>

  </div>
    

@endsection
