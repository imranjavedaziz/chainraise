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
 
   
<div class="container-fluid header-sec  py-4">
  <div class="row ">
      <div class="col-lg-12 text-center pt-lg-4">
          <h1 class="text-white">Contact us</h1>
      </div>
  </div>
</div>
<!-- Heading End -->
<!--Section: Contact v.2-->
<div class="container-fluid bg-image ">
  <div class="container py-lg-4">
      <div class="row">

          <!--Grid column-->
          <div class="col-md-7 mb-md-0 mb-5 pt-3">
              <h5 class="pb-lg-3" style="font-weight: 500;">Do you have any questions?
                  Please do not hesitate to contact us directly. Our team will come back to you within
                  a matter of hours to help you.</h5>
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                  <!--Grid row-->
                  <div class="row pt-2">

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="name" name="name" class="form-control contact-form">
                              <label for="name" class="text-white">Your name</label>
                          </div>
                      </div>
                      <!--Grid column-->

                      <!--Grid column-->
                      <div class="col-md-6">
                          <div class="md-form mb-0">
                              <input type="text" id="email" name="email" class="form-control contact-form">
                              <label for="email" class="text-white">Your email</label>
                          </div>
                      </div>
                      <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">
                      <div class="col-md-12">
                          <div class="md-form mb-0">
                              <input type="text" id="subject" name="subject" class="form-control contact-form">
                              <label for="subject" class="text-white">Subject</label>
                          </div>
                      </div>
                  </div>
                  <!--Grid row-->

                  <!--Grid row-->
                  <div class="row">

                      <!--Grid column-->
                      <div class="col-md-12">

                          <div class="md-form">
                              <textarea type="text" id="message" name="message" rows="2"
                                  class="form-control md-textarea text-white contact-form"></textarea>
                              <label for="message" class="text-white">Your message</label>
                          </div>

                      </div>
                  </div>
                  <!--Grid row-->

              </form>

              <div class=" text-md-left">
                  <a class="btn btn-primary btn-contact"
                      onclick="document.getElementById('contact-form').submit();">Send</a>
              </div>
              <div class="status"></div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5  text-center ">
              <ul class="list-unstyled mb-0">

                  <lord-icon src="https://cdn.lordicon.com/elzslyvl.json" trigger="hover"
                  colors="primary:#4030e8,secondary:#3080e8"
                      style="width:100px;height:100px">
                  </lord-icon>
                  <p>Miami, Florida, US</p>
                  </li>


                  <lord-icon src="https://cdn.lordicon.com/abxptjcw.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8"
                      style=" width:100px;height:100px">
                  </lord-icon>
                  <p>+ 01 234 567 89</p>
                  </li>


                  <lord-icon src="https://cdn.lordicon.com/sdhhsgeg.json" trigger="hover"
                      colors="primary:#4030e8,secondary:#3080e8" 
                      style="width:100px;height:100px">
                  </lord-icon>
                  <p> info@chainraise.io</p>
                  </li>
              </ul>
          </div>
          <!--Grid column-->

      </div>
  </div>
</div>
<!--Section: Contact v.2-->
<div class="container-fluid header-sec  py-4">
  <div class="row ">
      <div class="col-lg-12 text-center p-3">
          <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.38943762257!2d-80.29949880163777!3d25.78254531149221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20FL%2C%20USA!5e0!3m2!1sen!2s!4v1671642344453!5m2!1sen!2s"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
  </div>
</div>

@endsection
