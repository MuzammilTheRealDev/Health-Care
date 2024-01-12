          <!DOCTYPE html>
          <html lang="en">

          <head>

          <title>Health - Medical Website Template</title>
          <!--

          Template 2098 Health

          http://www.tooplate.com/view/2098-health

          -->
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=Edge">
          <meta name="description" content="">
          <meta name="keywords" content="">
          <meta name="author" content="Tooplate">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

          <link rel="stylesheet" href="{{ asset('Website/css/bootstrap.min.css') }}">
          <link rel="stylesheet" href="{{ asset('Website/css/font-awesome.min.css') }}">
          <link rel="stylesheet" href="{{ asset('Website/css/animate.css') }}">
          <link rel="stylesheet" href="{{ asset('Website/css/owl.carousel.css') }}">
          <link rel="stylesheet" href="{{ asset('Website/css/owl.theme.default.min.css') }}">

          <link rel="stylesheet" href="{{ asset('Website/css/tooplate-style.css') }}">

          </head>

          <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

          <!-- PRE LOADER -->
          {{-- <section class="preloader">
                    <div class="spinner">

                         <span class="spinner-rotate"></span>
                         
                    </div>
               </section> --}}


          <!-- HEADER -->
          <header>
               <div class="container">
                    <div class="row">

                         <div class="col-md-4 col-sm-5">
                              <p>Welcome to a Professional Health Care</p>
                         </div>

                         <div class="col-md-8 col-sm-7 text-align-right">
                              <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                              <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM
                              (Mon-Fri)</span>
                              <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                   href="#">info@company.com</a></span>
                         </div>

                    </div>
               </div>
          </header>

          <!-- MENU -->
          <section class="navbar navbar-default navbar-static-top" role="navigation">
               <div class="container">

                    <div class="navbar-header">
                         <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="icon icon-bar"></span>
                              <span class="icon icon-bar"></span>
                              <span class="icon icon-bar"></span>
                         </button>

                         <!-- LOGO TEXT HERE -->
                         <a href="" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
                    </div>

                    <!-- MENU LINKS -->
                    <div class="collapse navbar-collapse">
                         <ul class="nav navbar-nav navbar-right">
                              <li><a href="#top" class="smoothScroll">Home</a></li>
                              <li><a href="#about" class="smoothScroll">About Us</a></li>
                              <li><a href="#team" class="smoothScroll">Doctors</a></li>
                              <li><a href="#news" class="smoothScroll">News</a></li>
                              <li><a href="#google-map" class="smoothScroll">Contact</a></li>

                              @if (Route::has('login'))
                              @auth
                                   <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                             aria-haspopup="true" aria-expanded="false">
                                             {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                             <li>
                                                  <a href="{{ route('profile.edit') }}">Profile</a>
                                             </li>
                                             <li>
                                                  <form method="POST" action="{{ route('logout') }}">
                                                  @csrf
                                                  <button type="submit" class="btn btn-link">Logout</button>
                                                  </form>
                                             </li>
                                        </ul>
                                   </li>
                              @else
                                   <li>
                                        <a href="{{ route('login') }}"
                                             class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 smoothScroll">
                                             Log in
                                        </a>
                                   </li>
                                   <li>
                                        @if (Route::has('register'))
                                             <a href="{{ route('register') }}"
                                                  class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 smoothScroll">
                                                  Register
                                             </a>
                                        @endif
                                   </li>
                              @endauth
                              @endif
                              <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                         </ul>
                    </div>
               </div>
          </section>

          <!-- HOME -->
          <section id="home" class="slider" data-stellar-background-ratio="0.5">
               <div class="container">
                    <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Let's make your life happier</h3>
                                        <h1>Healthy Living</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our
                                             Doctors</a>
                                   </div>
                              </div>
                              </div>

                              <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Aenean luctus lobortis tellus</h3>
                                        <h1>New Lifestyle</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More
                                             About Us</a>
                                   </div>
                              </div>
                              </div>

                              <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Pellentesque nec libero nisi</h3>
                                        <h1>Your Health Benefits</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read
                                             Stories</a>
                                   </div>
                              </div>
                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- ABOUT -->
          <section id="about">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-6">
                              <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i
                                        class="fa fa-h-square"></i>ealth Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur
                                        lacinia nisi vitae velit volutpat venenatis.</p>
                                   <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis.
                                        Ut placerat, diam a tempus vehicula.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="Website/images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Neil Jackson</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- TEAM -->
          <section id="team" data-stellar-background-ratio="1">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-6">
                              <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                              </div>
                         </div>

                         <div class="clearfix"></div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="Website/images/team-image1.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Nate Baston</h3>
                                   <p>General Principal</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="Website/images/team-image2.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Jason Stewart</h3>
                                   <p>Pregnancy</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">pregnancy@company.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        <li><a href="#" class="fa fa-flickr"></a></li>
                                   </ul>
                              </div>

                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="Website/images/team-image3.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Miasha Nakahara</h3>
                                   <p>Cardiology</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">cardio@company.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- NEWS -->
          <section id="news" data-stellar-background-ratio="2.5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-12 col-sm-12">
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <!-- NEWS THUMB -->
                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="Website/images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2018</span>
                                   <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                                   <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                                   <div class="author">
                                        <img src="Website/images/author-image.jpg" class="img-responsive"
                                             alt="">
                                        <div class="author-info">
                                             <h5>Jeremie Carlson</h5>
                                             <p>CEO / Founder</p>
                                        </div>
                                   </div>
                              </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <!-- NEWS THUMB -->
                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="Website/images/news-image2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>February 20, 2018</span>
                                   <h3><a href="news-detail.html">Introducing a new healing process</a></h3>
                                   <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                                   <div class="author">
                                        <img src="Website/images/author-image.jpg" class="img-responsive"
                                             alt="">
                                        <div class="author-info">
                                             <h5>Jason Stewart</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-6">
                              <!-- NEWS THUMB -->
                              <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="Website/images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2018</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                                   <div class="author">
                                        <img src="Website/images/author-image.jpg" class="img-responsive"
                                             alt="">
                                        <div class="author-info">
                                             <h5>Andrio Abero</h5>
                                             <p>Online Advertising</p>
                                        </div>
                                   </div>
                              </div>
                              </div>
                         </div>

                    </div>
               </div>
          </section>


          <!-- MAKE AN APPOINTMENT -->
          <section id="appointment" data-stellar-background-ratio="3">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-6">
                              <img src="Website/images/appointment-image.jpg" class="img-responsive" alt="">
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <!-- CONTACT FORM HERE -->
                              <form id="appointment-form" role="form" method="post"
                              action="{{ route('store.appointment') }}">
                              @csrf
                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name"
                                             value="{{ old('name') }}" name="name" placeholder="Full Name">
                                        <p class="text-danger">
                                             @error('name')
                                                  {{ $message }}
                                             @enderror
                                        </p>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                             value="{{ old('email') }}"placeholder="Your Email">
                                        <p class="text-danger">
                                             @error('email')
                                                  {{ $message }}
                                             @enderror
                                        </p>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="date" value="{{ old('date') }}"
                                             class="form-control">
                                        <p class="text-danger">
                                             @error('date')
                                                  {{ $message }}
                                             @enderror
                                        </p>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control"
                                             id="phone"value="{{ old('number') }}" name="number"
                                             placeholder="Phone">
                                        <p class="text-danger">
                                             @error('number')
                                                  {{ $message }}
                                             @enderror
                                        </p>



                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="select">Select doctor</label>
                                        
                                        <select name="doctor" value="{{ old('doctor') }}" class="form-control">
                                             <option>Select</option>
                                             @foreach ($doc as $doctor )
                                             <option value="{{$doctor->name}}">{{$doctor->name}} --Speciality--{{$doctor->speciality}}</option>
                                             @endforeach
                                        </select>
                                        <p class="text-danger">
                                             @error('doctor')
                                                  {{ $message }}
                                             @enderror
                                        </p>
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message"value="{{ old('name') }}"
                                             placeholder="Message"></textarea>
                                        <p class="text-danger">
                                             @error('phone')
                                                  {{ $message }}
                                             @enderror
                                        </p>
                                        <button type="submit" class="form-control" id="cf-submit"
                                             name="submit">Submit Button</button>
                                   </div>
                              </div>
                              </form>
                         </div>

                    </div>
               </div>
          </section>


          <!-- GOOGLE MAP -->
          <section id="google-map">
               <!-- How to change your own map point
                    1. Go to Google Maps
                    2. Click on your location point
                    3. Click "Share" and choose "Embed map" tab
                    4. Copy only URL and paste it within the src="" field below
               -->
               <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945"
                    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
          </section>


          <!-- FOOTER -->
          <footer data-stellar-background-ratio="5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-4 col-sm-4">
                              <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu
                                   elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                              </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="Website/images/news-image.jpg"
                                                  class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>Amazing Technology</h5>
                                        </a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="Website/images/news-image.jpg"
                                                  class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>New Healing Process</h5>
                                        </a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                              </div>
                         </div>

                         <div class="col-md-12 col-sm-12 border-top">
                              <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2018 Your Company

                                        | Design: Tooplate</p>
                              </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                              </div>
                              <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                              </div>
                         </div>

                    </div>
               </div>
          </footer>

          <!-- SCRIPTS -->
          <script src="{{ asset('Website/js/jquery.js') }}"></script>
          <script src="{{ asset('Website/js/bootstrap.min.js') }}"></script>
          <script src="{{ asset('Website/js/jquery.sticky.js') }}"></script>
          <script src="{{ asset('Website/js/jquery.stellar.min.js') }}"></script>
          <script src="{{ asset('Website/js/wow.min.js') }}"></script>
          <script src="{{ asset('Website/js/smoothscroll.js') }}"></script>
          <script src="{{ asset('Website/js/owl.carousel.min.js') }}"></script>
          <script src="{{ asset('Website/js/custom.js') }}"></script>

          </body>

          </html>
