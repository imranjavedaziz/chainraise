<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Chain Raised Flow chart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      body {
  overflow-x: hidden;
}
#diamond {
  width: 0;
  height: 0;
  border: 50px solid transparent;
  border-bottom-color: rgb(0, 0, 0);
  position: relative;
  top: -50px;
}
#diamond:after {
  content: '';
  position: absolute;
  left: -50px;
  top: 50px;
  width: 0;
  height: 0;
  border: 50px solid transparent;
  border-top-color: rgb(0, 0, 0);
}
span.abc {
      font-size: 12px !important;;
      position: absolute;
      top: 23px;
      color: white;
      font-style: normal;
      right: -25px;
      text-align: center;
      z-index: 999;
      font-weight: 600;
  }
  .rotate-text{
    transform: rotate(-90deg);
  }
  .bg-color{
    background-color: #D7DDFD;
  }
  .btn-primary {
     background-color: #3F53D9 !important;
  }
  .btn-info{
    background-color: #EF949E !important;
    border: 0px !important;
  }
  .btn-success{
    background-color: #12CDD4 !important;
    border: 0px !important;
    border-radius: 0px !important;
  }
  .btn-danger{
    background-color: #8FD14F !important;
    border: 0px !important;
    border-radius: 0px !important;
  }
  .btn-grey{
    background-color: #E6E6E6 !important;
    border: 0px !important;
    border-radius: 0px !important;
  }
  .bg-color-2{
    background-color: #e1ffe6;
  }
  .bg-color-3{
    background-color: #FBE8A3;
  }
  .bg-color-4{
    background-color: #F1D3D3;
  }
  span.abcz {
    font-size: 10px !important;
    position: absolute;
    top: 35px;
    color: white;
    font-style: normal;
    right: -24px;
    text-align: center;
    z-index: 999;
    font-weight: 600;
}
  span.abcx {
    font-size: 10px !important;
    position: absolute;
    top: 29px;
    color: white;
    font-style: normal;
    right: -13px;
    text-align: center;
    z-index: 999;
    font-weight: 600;
}
  span.abcd {
    font-size: 12px !important;
    position: absolute;
    top: 40px;
    color: white;
    font-style: normal;
    right: -9px;
    text-align: center;
    z-index: 999;
    font-weight: 600;
}

  
    </style>
  </head>
  <body>
    <h1 class="text-center py-3">Chain Raised Flow chart</h1>
    <!-- Investor Start -->
    <div class="row align-items-center">
      <div class="col-1 rotate-text text-center">
        <h2>Investor</h2>
      </div>
      <div class="col-11 bg-color">
          <div class="row align-items-center p-5">
            <div class="col-2">
              <button type="button" class="btn btn-primary p-3">SIGNUP</button>
            </div>
            <div class="col-2">
              <div class="row g-3">
                <div class="col-12"><button type="button" class="btn btn-primary px-3">GOOGLE</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary">FACBOOK</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary px-4">EMAIL</button></div>
              </div>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED ?</span></div>
              </div>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-primary p-3">ACTIVATE ACCOUNT</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-primary p-3">SIGNUP</button>
            </div>
            <div class="col-2">
              <div class="row g-3">
                <div class="col-12"><button type="button" class="btn btn-primary px-3">GOOGLE</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary">FACBOOK</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary px-4">EMAIL</button></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-info p-4">Dashboard</button>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
              </div>
            </div>
       </div>
      </div>
    </div>
    <!-- Investor End -->
    <!-- ISSUER Start -->
    <div class="row align-items-center mt-3">
      <div class="col-1 rotate-text text-center">
        <h2>ISSUER</h2>
      </div>
      <div class="col-11 bg-color-2">
          <div class="row align-items-center px-5 pt-5">
            <div class="col-2">
              <button type="button" class="btn btn-primary">SIGNUP</button>
            </div>
            <div class="col-2">
              <div class="row g-3">
                <div class="col-12"><button type="button" class="btn btn-primary px-3">GOOGLE</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary">FACBOOK</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary px-4">EMAIL</button></div>
              </div>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED ?</span></div>
              </div>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-primary">ACTIVATE ACCOUNT</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-primary">SIGNUP</button>
            </div>
            <div class="col-2">
              <div class="row g-3">
                <div class="col-12"><button type="button" class="btn btn-primary px-3">GOOGLE</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary">FACBOOK</button></div>
                <div class="col-12"><button type="button" class="btn btn-primary px-4">EMAIL</button></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-info p-4">Dashboard</button>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
              <button type="button" class="btn btn-success">Profile Creation</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-success">KYC/AML</button>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abcd fs-6">Yes</span></div>
              </div>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abcz fs-6">RUN FORTRESS</span></div>
              </div>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-success">Users</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-success">Documents</button>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abcd fs-6">NO</span></div>
              </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-2">
              
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abcx fs-6">RUN E-SIGN</span></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
              <button type="button" class="btn btn-danger">CREATE OFFERING</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger">BASIC INFO</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger">OFFERING VALUE</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-danger">INVESTOR FLOW</button>
            </div>
            <div class="col-1">
              <button type="button" class="btn btn-danger">DISPLAY</button>
            </div>
            <div class="col-1">
              <button type="button" class="btn btn-danger">VIDEO</button>
            </div>
            <div class="col-1">
              <button type="button" class="btn btn-danger">CONTACT</button>
            </div>
          </div>
          <div class="row align-items-center p-5">
            <div class="col-2">
              <button type="button" class="btn btn-grey">TRANSACTIONS</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-grey">LIST TRANSACTION</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-grey">EXPORT DATA</button>
            </div>
            <div class="col-2">
              <button type="button" class="btn btn-grey">VIEW DETAIL</button>
            </div>
            <div class="col-2">
              
            </div>
            <div class="col-2">
              
            </div>
          </div>
      </div>
    </div>
    <!-- ISSUER End -->
    <!-- Super Admin Start -->
    <div class="row align-items-center mt-3">
      <div class="col-1 rotate-text text-center">
        <h2>SUPER ADMIN</h2>
      </div>
      <div class="col-11 bg-color-3">
          <div class="row align-items-center text-center px-5 pt-5">
            <div class="col-5">
              <button type="button" class="btn btn-primary p-3">LOGIN</button>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
              </div>
            </div>
            <div class="col-5"><button type="button" class="btn btn-info p-4">Dashboard</button></div>
          </div>
          <div class="row  text-center p-5">
            <div class="col-4">
              <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
              <div class="row">
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">INVESTOR</button>
                  <button type="button" class="btn btn-success mt-4">Profile Creation</button>
                  <button type="button" class="btn btn-success mt-4">KYC/AML</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">ISSUER</button>
                  <button type="button" class="btn btn-success mt-4">Profile Creation</button>
                  <button type="button" class="btn btn-success mt-4">KYC/AML</button>
                </div>
                <div class="col-12" style=" margin-left: 10rem; margin-top: 2rem">
                  <div class="shape">
                    <div id="diamond"><span class="abc fs-6">RUN FORTRESS</span></div>
                  </div>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4 px-4 mx-2">Users</button>
                  <button type="button" class="btn btn-success mt-4">Documents</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4 px-4 mx-2">Users</button>
                  <button type="button" class="btn btn-success mt-4">Documents</button>
                </div>
                <div class="col-12" style=" margin-left: 10rem; margin-top: 2rem">
                  <div class="shape">
                    <div id="diamond"><span class="abc fs-6">RUN 
                      E-SIGN</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="row">
                <div class="col-3">
                  <button type="button" class="btn btn-danger p-3 mb-4">OFFERINGS</button>
                 <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-danger mt-4 px-4">ISSUER</button>
                      <button type="button" class="btn btn-danger mt-4 ">BASIC INFO</button>
                      <button type="button" class="btn btn-danger mt-4 ">OFFERING VALUE</button>
                      <button type="button" class="btn btn-danger mt-4 ">INVESTOR FLOW</button>
                      <button type="button" class="btn btn-danger mt-4 px-5">DISPLAY</button>
                      <button type="button" class="btn btn-danger mt-4 px-5">VIDEO</button>
                      <button type="button" class="btn btn-danger mt-4 px-4">SUMMARY</button>
                      <button type="button" class="btn btn-danger mt-4 px-4">CONTACT</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-grey p-3 mb-4">TRANSACTIONS</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-grey mt-4">LIST TRANSACTION</button>
                      <button type="button" class="btn btn-grey mt-4">EXPORT DATA</button>
                      <button type="button" class="btn btn-grey mt-4">VIEW DETAIL</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-info p-3 mb-4">ENGAGEMENTS</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-info mt-4">ENGAGEMENT LIST</button>
                      <button type="button" class="btn btn-info mt-4">EXPORT DATA</button>
                      <button type="button" class="btn btn-info mt-4">VIEW DETAIL</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-success p-3 mb-4">PLATFORM</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-success mt-4">CMS PAGES</button>
                      <button type="button" class="btn btn-success mt-4 px-5">MENU</button>
                      <button type="button" class="btn btn-success mt-4">EMAIL TEMPLATES</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
     <!-- Super Admin End -->
     <!-- Super Admin Start -->
    <div class="row align-items-center mt-3">
      <div class="col-1 rotate-text text-center">
        <h2>MASTER ADMIN</h2>
      </div>
      <div class="col-11 bg-color-4">
          <div class="row align-items-center text-center px-5 pt-5">
            <div class="col-5">
              <button type="button" class="btn btn-primary p-3">LOGIN</button>
            </div>
            <div class="col-2">
              <div class="shape">
                <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
              </div>
            </div>
            <div class="col-5"><button type="button" class="btn btn-info p-4">Dashboard</button></div>
          </div>
          <div class="row  text-center p-5">
            <div class="col-4">
              <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
              <div class="row">
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                </div>
                <div class="col-12" style=" margin-left: 10rem; margin-top: 2rem">
                  <div class="shape">
                    <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
                  </div>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                </div>
                <div class="col-6">
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                  <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                </div>
                <div class="col-12" style=" margin-left: 10rem; margin-top: 2rem">
                  <div class="shape">
                    <div id="diamond"><span class="abc fs-6">IS VERIFIED</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="row">
                <div class="col-3">
                  <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
                 <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <button type="button" class="btn btn-success p-3 mb-4">ACCOUNTS</button>
                  <div class="row">
                    <div class="col-12">
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                      <button type="button" class="btn btn-success mt-4">ACCOUNTS</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
     <!-- Super Admin End -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>