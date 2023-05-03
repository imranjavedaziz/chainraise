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
@endsection
@section('title', 'Home')
@section('content')
<div class="container-fluid header-sec  py-3">
    <div class="row ">
      <div class="col-lg-12 text-center py-4">
        <h5 style="color:#4b1dff">For Investors</h5>
        <h2>Frequently Asked Questions</h2>
      </div>
    </div>
  </div>
  <!-- Heading End -->
  <!-- Faq for investor -->
  <div class="container-fluid bg-image">
    <div class="container  ">
      <div class="row">
        <div class="col-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What Is Chain Raise
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">ChainRaise is a digital asset platform, that raises money for real estate
                    opportunities and businesses. Using blockchain technology, we make startup investment and
                    fundraising safe and secure for everyone involved.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Who can invest via ChainRaise?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">If you’re over 18, you can invest with us! (If you’re younger, good for you for
                    getting an early start! You’ll need a parent to set up a trust, or something equivalent, so that
                    they can invest in your name.) The SEC <a
                      href="https://www.sec.gov/oiea/investor-alerts-bulletins/ib_crowdfunding-.html">Investor
                      Bulletin</a>, linked here, will give you some additional information about how much money you can
                    or should invest using platforms like ChainRaise. Because of the risks involved, there are some
                    limitations in place contingent on your annual income and net worth.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  What is investing in alternative securities?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">For more than two hundred years investors have publicly traded stocks and bonds.
                    But those types of investments have their limitations, leading investors to alternative securities
                    for the purpose of generating income, diversifying portfolios, boosting returns, or raising funds
                    for other projects.</p>
                  <p class="black-font">These alternatives include real estate, stock or membership units in
                    privately-held businesses, private equity, commodities, venture capital, farmland/timberland,
                    mineral rights, tax lien certificates, hedge funds, annuities, art and collectibles, or even wine
                    collections or antique coins. In short, a multitude of investment options are available beyond the
                    floor of the New York Stock Exchange.</p>
                  <p class="black-font">Why do people invest in alternative securities? Some of the most prevalent
                    reasons include favorable economic conditions, less dependence on typical market fluctuations,
                    leveraging specific knowledge or skills, tax advantages, illiquid investments, higher fees, and
                    market volatility.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                  Are there investing limits?
                </button>
              </h2>
              <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body ">
                  <p class="black-font">
                  <p class="black-font">Title III limits how much you can invest each year – not only in any one
                    company, or through any Funding Portal, but in all companies through all Funding Portals. These
                    limits apply only to your investments under Title III (Regulation Crowdfunding). ChainRaise’ portal
                    will calculate your annual investment limit based on your net worth and income. Investment limits
                    are calculated on a rolling 12-month interval, and every investment in a Regulation Crowdfunding
                    offering on any portal will count toward your annual limit.</p>
                  <p class="black-font">For non-accredited investors, the maximum amount you can invest in all Title III
                    offerings during a 12-month period is:</p>
                  <p class="black-font">If your annual income or net worth is less than $107,000, you may invest the
                    greater of:</p>
                  <ul class="ps-3" style="list-style: disc;">
                    <li>$2,200; or</li>
                    <li>5% of the greater of your annual income or net worth.</li>
                  </ul>
                  <p class="black-font">If your annual income and net worth are both at least $107,000, you can invest
                    the lesser of:</p>
                  <ul class="ps-3"
                    style="list-style: disc;><li>$107,000; or</li><li>10% of the greater of your annual income or net worth.</li></ul class="
                    ps-3" style="list-style: disc;">
                    <p class="black-font">There are no investment limits for accredited investors. Once you are verified
                      as an accredited investor, you are free to invest without limits.</p>
                    <p class="black-font">You and your spouse may choose to combine your incomes and assets to invest,
                      in which case you will both be treated as a single investor when determining how much you can
                      invest.</p>
                    </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                  What is my net worth?
                </button>
              </h2>
              <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">To calculate your net worth, add up all of your assets and subtract all
                    liabilities. For purposes of crowdfunding, the value of your primary residence is not included in
                    your net worth calculation.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingsix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                  How do I start investing?
                </button>
              </h2>
              <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">First, create and verify an account on the ChainRaise Portal. chainRaise may or
                    may not ask for your proof of income to determine your investment limit. You can then browse
                    listings and think about which offering to choose for your investment. You should strongly consider
                    consulting a lawyer or professional advisor prior to investing to understand and assess any and all
                    risks that come with a particular offering. You can then choose to invest in your selected offer(s)
                    and pledge a dollar amount to the offer(s). By choosing to invest in an offer, you acknowledge the
                    risks that come with investing on a Funding Portal and are able to afford losing your entire
                    investment should the issuing company file for bankruptcy.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                  What Happens if an Offering’s Terms Change?
                </button>
              </h2>
              <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">The SEC requires any amendment to an offering be reconfirmed with outstanding
                    investment commitments within 5 business days; if an issuer fails to do so, or you as an investor
                    fail to reconfirm your commitment, your commitment will be considered canceled. An issuer must also
                    file Form C/A to disclose changes or updates with the SEC.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingeight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                  Can I cancel commitment and obtaining a refund?
                </button>
              </h2>
              <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">You can cancel an investment commitment at any time up to 48 hours before the
                    offering deadline. If you make an investment commitment within 48 hours before the offering
                    deadline, you cannot cancel your investment even if you have just made your commitment.

                    If you successfully cancel your commitment, ChainRaise will refund the investment amount to you.
                    This refund process can take as many as 14 days.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingnine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsenine" aria-expanded="false" aria-controls="flush-collapsenine">
                  Can I Buy Crowdfunding Securities Directly from An Issuing Company?
                </button>
              </h2>
              <div id="flush-collapsenine" class="accordion-collapse collapse" aria-labelledby="flush-headingnine"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">Can I Buy Crowdfunding Securities Directly from An Issuing Company?</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingten">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseten" aria-expanded="false" aria-controls="flush-collapseten">
                  What If an issuing company reaches its investment target early?
                </button>
              </h2>
              <div id="flush-collapseten" class="accordion-collapse collapse" aria-labelledby="flush-headingten"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">If an offering has more investors than needed or an issuing company reaches its
                    target early, said issuing company will prioritize investors with a larger investment amount. While
                    rare, the company may choose to reject or cancel your investment.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingelev">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseelev" aria-expanded="false" aria-controls="flush-collapseelev">
                  Do issuers on the portal have third-party credit ratings?
                </button>
              </h2>
              <div id="flush-collapseelev" class="accordion-collapse collapse" aria-labelledby="flush-headingelev"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">A third-party credit rating is not required for issuers on the ChainRaise
                    Portal. Investors, therefore, have little to no objective measures to gauge an issuing company’s
                    creditworthiness. You are strongly advised to conduct due diligence prior to making an investment
                    commitment and to consult with a professional advisor to understand and assess all the risks
                    associated with making a particular investment commitment.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingtwe">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsetwe" aria-expanded="false" aria-controls="flush-collapsetwe">
                  Can I invest if I’m not a U.S. citizen?
                </button>
              </h2>
              <div id="flush-collapsetwe" class="accordion-collapse collapse" aria-labelledby="flush-headingtwe"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">Yes, unless your country’s regulations forbid you from doing so.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingthr">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsethr" aria-expanded="false" aria-controls="flush-collapsethr">
                  How long until I see a return?
                </button>
              </h2>
              <div id="flush-collapsethr" class="accordion-collapse collapse" aria-labelledby="flush-headingthr"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">It could be a short time, a long time, or never. Investing in issuing companies
                    on a Funding Portal, especially startups, involves high amounts of risk. ChainRaise therefore
                    strongly recommends investors consult with a professional advisor prior to making an investment
                    commitment. You must understand and assess the risks involved with your investment. There is no
                    guarantee any companies in which you invest will make a profit. You might lose your entire
                    investment if a company files for bankruptcy.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingforthteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseforthteen" aria-expanded="false" aria-controls="flush-collapseforthteen">
                  Can an offering close early?
                </button>
              </h2>
              <div id="flush-collapseforthteen" class="accordion-collapse collapse" aria-labelledby="flush-headingforthteen"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font">A fundraising round may close earlier than its published deadline on the
                    offering. In this case, you will receive a notice of the new deadline at least 5 business days prior
                    to the new deadline. The SEC requires that if an issuing company fails to reconfirm investors’
                    investment commitment within 5 business days of an offering’s changes, the investment commitment is
                    considered canceled.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What are common risks with crowdfunded investments?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p class="black-font"></p>Speculative. Investments in startups and early-stage ventures are
                  speculative and these enterprises often fail. Unlike an investment in a mature business where there is
                  a track record of revenue and income, the success of a startup or early-stage venture often relies on
                  the development of a new product or service that may or may not find a market. You should be able to
                  afford and be prepared to lose your entire investment.<p class="black-font">Illiquidity. You will be
                    limited in your ability to resell your investment for the first year and may need to hold your
                    investment for an indefinite period of time. Unlike investing in companies listed on a stock
                    exchange where you can quickly and easily trade securities on a market, you may have to locate an
                    interested buyer when you do seek to resell your crowdfunded investment.</p>
                  <p class="black-font">Cancellation restrictions. Once you make an investment commitment for a
                    crowdfunding offering, you will be committed to make that investment (unless you cancel your
                    commitment within a specified period of time). As detailed in the box below for Changing your mind,
                    the ability to cancel your commitment is limited.</p>
                  <p class="black-font">Valuation and capitalization. Your crowdfunding investment may purchase an
                    equity stake in a startup. Unlike listed companies that are valued publicly through market-driven
                    stock prices, the valuation of private companies, especially startups, is difficult and you may risk
                    overpaying for the equity stake you receive. In addition, there may be additional classes of equity
                    with rights that are superior to the class of equity being sold through crowdfunding.</p>
                  <p class="black-font">Limited disclosure. The company must disclose information about the company, its
                    business plan, the offering, and its anticipated use of proceeds, among other things. An early-stage
                    company may be able to provide only limited information about its business plan and operations
                    because it does not have fully developed operations or a long history to provide</p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
    

@endsection
