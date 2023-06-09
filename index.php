<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">xxxxxxxxx -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="images/new-logo-prosmyle.png" type="image/x-icon">
    <link rel="stylesheet" href="">
    <title>Prosmyle</title>
</head>

<body>
    <div class="mycontainer">
        <div class="custom_container">
            <div class="background-img">
                <nav class="desktop_view_navbar">
                    <div class="logo-img-div">
                        <a href="#homepage">
                            <img class="logo-img" src="images/periodontic.png" alt="logoImage">
                            <p class="prosmyle_logo_text">Prosmyle</p>
                        </a>
                    </div>
                    <div class="navbar_unorder_list ham">
                        <ul>
                            <!-- <li><a href="#home-page">Home</a></li> -->
                            <li><a href="#contect-form"><span class="book_appointment">Book an Appointment</span></a>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Our Services</a></li>
                            <li><a href="#our_team">Our Team</a></li>
                            <!-- <li><a href="#why">Why Us</a></li> -->
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#awards">Awards & Recognition</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            </li>
                            <!-- <li><a href="https://blog.drchawladentals.com/">Blogs</a></li> -->
                            <!-- <li><a href="#footer">Footer</a></li> -->
                        </ul>
                    </div>
                </nav>
                <nav class="phone_view_navbar">
                    <div class="phone_view_navbar_logo_icons">
                        <div class="logo-img-div">
                            <a href="#homepage">
                                <img class="logo-img" src="images/periodontic.png" alt="logoImage">
                                <p class="prosmyle_logo_text">ProSmyle</p>
                            </a>
                        </div>
                        <div class="phone_view_navbar_icon_ham-and-cross">
                            <i onclick="open_hamburger()" class="fa fa-solid fa-bars hamburger_bar_icon"></i>
                            <i onclick="close_hamburger()" class="fa fa-solid fa-xmark close_hamburger_icon"></i>
                        </div>
                    </div>
                    <ul class="phone_view_unorderlist">
                        <li class="phone-view-navigation-item"><a href="#contect-form">Book an Appointment</a></li>
                        <li class="phone-view-navigation-item"><a href="#about">About Us</a></li>
                        <li class="phone-view-navigation-item"><a href="#services">Our Services</a></li>
                        <li class="phone-view-navigation-item"><a href="#our_team">Our Team</a></li>
                        <li class="phone-view-navigation-item"><a href="#testimonials">Testimonials</a></li>
                        <li class="phone-view-navigation-item"><a href="#awards">Awards & Recognition</a></li>
                        <li class="phone-view-navigation-item"><a href="#gallery">Gallery</a></li>
                        <!-- <li class="phone-view-navigation-item"><a href="https://blog.drchawladentals.com/">Blogs</a></li> -->
                    </ul>
                </nav>
                <div class="banner_content_div" id="homepage">
                    <h1 class="banner_heading">GATEWAY TO <br />
                        <span class="banner_heading_span">DIGITAL <br> DENTISTRY</span>
                    </h1>
                    <a href="#contect-form" class="Book_Appointment_btn_link">
                        <button class="Book_Appointment_btn"><i class="fa-solid fa-arrow-right book_arrow"></i> Book an
                            Appointment</button>
                    </a>
                    <!-- <div class="youtube_video">
                        <iframe class="introduction_video_ifram" src="/images/banner.mp4" frameborder="0"></iframe>
                    </div> -->
                </div>
            </div>
            <?php include 'contact.php';?>
            <div class="about_us_page" id="about">
                <div class="child_about">
                    <div class="about_div">
                        <div>
                            <h1>About <span class="highlight_sub_heading">Us</span></h1>
                            <p>We ensure that your appointment is the most positive experience possible. We are
                                committed to delivering comprehensive oral health care service ensuring the highest
                                level of quality excellence, offering treatment at affordable prices, implementing
                                advanced therapies with state-of-the-art equipment and facilities. Our motto is to
                                provide you quality and safety, offering flexible appointment timings and modern
                                dentistry.
                            </p>
                        </div>
                        <div>
                            <h1><span class="highlight_sub_heading">Why </span>Choose Us?</h1>
                            <div class="why-section_child">
                                <div class="why-us_children">
                                    <h2>Comfort</h2>
                                    <i class="fa fa-thin fa-heart whyUsIcon"></i>
                                    <p>Relax and enjoy your time at the dentist. Our entire staff is dedicated to
                                        delivering a pleasant and high-comfort experience unlike any other dentist in
                                        the Rogue Valley!</p>
                                </div>

                                <div class="why-us_children">
                                    <h2>Relationships</h2>
                                    <i class="fa fa-thin fa-comments whyUsIcon"></i>
                                    <p>Experience a personalized approach. We focus on establishing long-term
                                        relationships by designing a care and prevention plan meant just for you.</p>
                                </div>

                                <div class="why-us_children">
                                    <h2>Results</h2>
                                    <i class="fa fa-thin fa-thumbs-up whyUsIcon"></i>
                                    <p>Modern, high-tech treatments ensure every tooth in your mouth is healthy and
                                        beautiful! We offer proven dental technologies to ensure you achieve dental
                                        health.</p>
                                </div>

                                <div class="why-us_children">
                                    <h2>Expertise & Experience</h2>
                                    <i class="fa-solid fa-user whyUsIcon"></i>
                                    <p>Modern, high-tech treatments ensure every tooth in your mouth is healthy and
                                        beautiful! We offer proven dental technologies to ensure you achieve dental
                                        health.</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <h1>Medical <span class="highlight_sub_heading">Tourism</span></h1>
                            <p>We believe in changing your life by taking care of your smile. It's no good gambling with
                                your future when we here facilitate you with best dental serves. Thus to encourage
                                medical tourism we provide our visitors from across the world with pick & drop services
                                from airport, stay and complete treatment facilities.</p>
                        </div> -->
                    </div>
                    <!-- <div class="about_img_parent_div">
                        <div class="img_and_content_facilities">
                            <div class="about_img_div">
                                <img src="/images/icon/i3.png" alt="">
                            </div>
                            <h2>Pick & Drop</h2>
                        </div>
                        <div class="img_and_content_facilities">
                            <div class="about_img_div">
                                <img src="/images/icon/i2.png" alt="">
                            </div>
                            <h2>Hotel Stay</h2>
                        </div>
                        <div class="img_and_content_facilities">
                            <div class="about_img_div">
                                <img src="/images/icon/i1.png" alt="">
                            </div>
                            <h2>Treatment Facilities</h2>
                        </div>
                    </div> -->
                </div>
            </div>
            <h2 class="services_heading"><span class="highlight_sub_heading">Our </span>Services</h2>
            <section id="services" class="services text-center overlay-white ">
                <div class="back-img">
                    <div class="container-fluid myimgcontainer">
                        <div class="row align-items-top  pt-md-2 pb-md-3">
                            <div class="col-12 col-sm-3 pt-4 pt-md-0 high-light-services">
                                <div class="ser-icon">
                                    <img src="images/icon/cosmetic.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal8">
                                    <span>Cosmetic Dentistry</span>
                                    <p>Whitening gel is applied...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal8" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0 high-light-services">
                                <div class="ser-icon">
                                    <img src="images/icon/dentalimplant.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal10">
                                    <span>Dental Implants</span>
                                    <p>While a missing tooth ...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal10" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0 high-light-services">
                                <div class="ser-icon ">
                                    <img src="images/icon/ortho.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal12">
                                    <span>Orthodontics</span>
                                    <p>Straightening your teeth ...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal12" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="ser-icon ">
                                    <img src="images/icon/dentalchkup.png" alt="icon">
                                </div>
                                <div class="text">
                                    <span>Dental Checkups & Exams</span>
                                    <p>A review of your medical...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal1" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-top  pt-md-3 pb-md-3">
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/periodontic.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal5">
                                    <span>Periodontics</span>
                                    <p>Gum disease is a...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal5" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/dentalxray.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal2">
                                    <span>Dental X-rays</span>
                                    <p>Digital radio-graphs are...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal2" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/filling.png" alt="icon">
                                </div>
                                <div class="text">
                                    <span>Fillings</span>
                                    <p>Any Dark spots or...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal3" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/endodontics.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal4">
                                    <span>Endodontics</span>
                                    <p>The core of each tooth...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal4" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-top  pb-5 pt-md-3 pb-md-5">
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/paeditric.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal9">
                                    <span>Paediatric dentistry</span>
                                    <p>Just like adults, children ...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal9" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/dentofacial.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal11">
                                    <span>Dentofacial Aesthetics:<br> Smile Makeover</span>
                                    <p>Smooth out wrinkles and ...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal11" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/crown.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal6">
                                    <span>Crowns and bridges</span>
                                    <p>They are usually made...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal6" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                            <div class="col-12 col-sm-3 pt-4 pt-md-0">
                                <div class="ser-icon">
                                    <img src="images/icon/denture.png" alt="icon">
                                </div>
                                <div class="text" data-toggle="modal" data-target="#modal7">
                                    <span>Dentures </span>
                                    <p>Dentures can also be ...</p>
                                    <button class="popup-btn" data-toggle="modal" data-target="#modal7" type="button"
                                        name="button">Read more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-wrapper">
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Dental Checkups and Exams</h5>
                                        <p>A review of your medical and dental health history, so that we can understand
                                            your dental problem.
                                            Digital X-rays may be taken if necessary. In order to ensure the good health
                                            of your teeth and gums,
                                            by preventing cavities and gum disease, we recommend that you should
                                            schedule a check up and oral hygiene at least once in every six months.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Dental X-rays</h5>
                                        <p>Digital radio-graphs are one of the most important diagnostic tool With
                                            digital dental X-rays we are able to immediately
                                            see your teeth and jaw bones. This means that assessment and diagnosis is
                                            virtually instantaneous. We use digital dental X-rays,
                                            which have many benefits over conventional x rays
                                        </p>
                                        <br>
                                        <ul class="period">
                                            <li>A reduction in the amount of radiation exposure.<br></li>
                                            <li>The elimination of chemicals and disposable films.<br></li>
                                            <li>Instantaneous ability to see the images.<br></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Fillings</h5>
                                        <p>Any Dark spots or noticeable holes on teeth or Sensitivity when eating or
                                            drinking warrants a filling.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Endodontics</h5>
                                        <p>The core of each tooth contains a soft mass of tissue called the pulp. In a
                                            healthy tooth, the pulp
                                            contains nerves, arterioles, venules, lymphatic tissue and fibrous tissue
                                            extending into the root(s)
                                            through the root canal(s). Decay and injury can destroy the living pulp.
                                            There is a lack of adequate
                                            blood supply in a dead pulp and as a result, it becomes more prone to
                                            infection, leading to abscess
                                            and toothache. When the pulp becomes diseased or injured, endodontic
                                            treatment is essential to save
                                            the tooth. Root canals are one of the most common procedures in endodontics.
                                            It involves removing the
                                            damaged or dead pulp and filling the resultant space left. A local
                                            anaesthetic is given and an opening
                                            is made through the top of the tooth down to the pulp. The dead pulp is then
                                            removed from the core of
                                            the tooth and root canals by means of narrow files. The cavity remaining on
                                            the top of the tooth is then
                                            filled and if necessary, a crown is placed on top of the tooth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5> Periodontics </h5>
                                        <p>Periodontics Gum disease is a common dental disease which has the ability to
                                            greatly impact your oral health and overall
                                            wellbeing. Not only do they affect the way soft tissues and bone structures
                                            connected to and support your teeth, but as
                                            the disease worsens, it has the potential to cause so much bone loss that
                                            teeth become mobile and fall out.Gum disease begins
                                            as gingivitis, a common condition that is caused when plaque biofilm is left
                                            along the gum lines for a long period. This is when
                                            gum disease is in its earliest and most treatable stages. As the condition
                                            worsens, however, the plaque which isn’t properly removed
                                            hardens, turning into what is known as tartar (calcified plaque). When this
                                            tartar is further left within the mouth, the gum disease
                                            continues to spread, resulting in more complex concerns such as gum
                                            detachment and bone loss.In order to treat gum disease in its
                                            early stages, it is vital that you’re aware of the disease’s warning signs
                                            and symptoms. These include:
                                        </p>
                                        <br>
                                        <ul class="period">
                                            <li>Bad breath (also known as halitosis)<br></li>
                                            <li>Loose teeth or tooth mobility<br></li>
                                            <li>Gum recession<br></li>
                                            <li>Swollen,bleeding gums (particularly while brushing or flossing)<br></li>
                                            <li>Pain and discomfort when biting and chewing<br></li>
                                        </ul>
                                        <p>active gum disease can severely affect your body’s immune system, increasing
                                            your risk of potentially life-threatening health problems
                                            such as cardiovascular disease (including heart attack and stroke),
                                            diabetes, infertility, and pneumonia. Periodontal disease can also
                                            affect your unborn child, as it has been linked to premature birth and low
                                            birth weight in the past. routine check ups and cleaning are
                                            vital for preventing such conditions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Crowns and bridges</h5>
                                        <p>They are usually made from ceramic or ceramic over a metal base and aim to
                                            restore and protect a tooth that has been subject to
                                            A weakened tooth structure, Trauma from injury, Large cavities or decay
                                            Bridges differ from crowns in the sense that they are
                                            designed to replace either a single tooth or several missing teeth at once.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Dentures</h5>
                                        <p>Dentures can also be secured using dental implant. Using as little as two to
                                            four implants.
                                            This is a great option for those who currently have dentures which are
                                            loose.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Cosmetic Dentistry</h5>
                                        <br>
                                        <h6 class="text-left">1). Teeth Whitening</h6>
                                        <P class="text-left "> whitening gel is applied to the teeth for a few hours.
                                        </p>
                                        <h6 class="text-left pt-md-4 pt-2">2). Porcelain Veneers</h6>
                                        <p class="text-left">Veneers and laminates are a thin shell of porcelain that is
                                            bonded to the
                                            surface of the teeth. This can change their shape, shade and position to
                                            improve the cosmetics of
                                            your smile in a short period of time. Veneers often provide the opportunity
                                            to dramatically transform
                                            the aesthetics of your teeth and smile. Since they are very thin, veneers
                                            are considered one of the
                                            most conservative cosmetic treatments available. A chip in a front tooth,
                                            some worn edges, or shallow
                                            pits or grooves in the tooth enamel are all minor issues, but they do stand
                                            in the way of having a
                                            perfect smile. If you suffer from one or more of these they all can be fixed
                                            using veneers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5> Paediatric dentistry</h5>
                                        <p>Just like adults, children should also attend the dentist regularly for
                                            check-ups and cleans. It is always best
                                            to treat oral health issues before they develop into more complex problems
                                            Regular dental check-ups for children
                                            also works to prevent dental anxiety from developing at a young age. As a
                                            general rule, your child should begin
                                            regular, annual dental check-ups.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Dental Implants</h5>
                                        <p>While a missing tooth may seem harmless to some, it can cause complex
                                            problems for the function and health of your other teeth.
                                            When a secondary tooth is extracted or falls out, the bone in this
                                            particular area of your jaw begins to resorb and gradually
                                            break down. Not only can this cause the surrounding teeth to collapse into
                                            this space, but it also has the potential to lead to
                                            the opposite tooth erupting further. If an implant is placed soon after the
                                            removal or loss of a tooth, it can immediately halt
                                            this bone loss and allow you to maintain your natural bite. They are the
                                            longest lasting when compared to other dental restorations.
                                            Implants use safe and trusted biocompatible materials which allow them to
                                            permanently fuse with the jaw, resulting in a lifelong solution.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Dentofacial Aesthetics: Smile Makeover</h5>
                                        <p>Smooth out wrinkles and fill in the facial folds. All this can be done while
                                            boosting the white colour of your teeth, filling the
                                            gaps between them, or restoring functionality that may have been lost to
                                            your smile. We use safe, minimally invasive techniques and
                                            materials to quickly, easily and painlessly restore a more youthful
                                            appearance in a holistic way.<br>
                                        <h5 class="text-left pt-md-2 pt-2">Dermal Fillers</h5>
                                        <p> Dermal fillers offer a temporary treatment approach that incorporate
                                            fast-acting and clinically proven compounds to eliminate facial lines.</p>
                                        <h5 class="text-left pt-md-2 pt-2"> Lip Augmentation</h5>
                                        <p>For patients after a little more lip definition or fill, lip augmentation can
                                            replenish volume and a youthful shape to your smile.</p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </button>
                                <div class="modal-body">
                                    <div class="text">
                                        <h5>Orthodontics</h5>
                                        <p class="pt-md-2 pt-2">Straightening your teeth or correcting your bite can
                                            easily enhance the appearance and
                                            comfort of your smile. We have a few different orthodontic treatment options
                                            to help you feel confident about your smile.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="our_team_section" id="our_team">
                <div class="our_team_child_section">
                    <h1><span class="highlight_sub_heading">Our </span>Team</h1>
                    <div class="treatment_team">
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="images/amitchawla2.png" alt="">
                            </div>
                            <p class="team_name">Dr. Amit Chawla MDS</p>
                            <p class="team_content">M.D.S., B.D.S.(Ex-PGIMS, Rohtak) Cosmetic Dentist</p>
                        </div>
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="images/payalchawla2.png" alt="">
                            </div>
                            <p class="team_name">Dr. Payal chawla BDS, FICOI, PGDCC</p>
                            <p class="team_content">B.D.S. F.I.C.O.I., (U.S.A.) Oral Implantologist</p>
                        </div>
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="images/satyavratarya.jpg" alt="">
                            </div>
                            <p class="team_name">Dr. Satyavrat Arya BDS, MDS </p>
                            <p class="team_content">(Oral Surgeon) Jaw Surgery Specialist M.D.S. (Ex-AIIMS)</p>
                        </div>
                        <!-- <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="/images/ankitsrivatsava.jpg" alt="">
                            </div>
                            <p class="team_name">Dr. Ankit Srivatsava BDS, MDS </p>
                            <p class="team_content">(Pedodontics)</p>
                        </div>
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="/images/nehachopra.jpg" alt="">
                            </div>
                            <p class="team_name">Dr. Neha Copra BDS, MDS</p>
                            <p class="team_content">(Specialize in Prosthodontics and Implantology)</p>
                        </div> -->
                    </div>
                    <div class="treatment_team">

                        <!-- <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="/images/himanshibharadwaj.jpg" alt="">
                            </div>
                            <p class="team_name">Dr. Himanshi Bharadwaj BDS</p>
                            <p class="team_content">(Cert. Implantologist)</p>
                        </div>
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="/images/rupaliyadav.jpg" alt="">
                            </div>
                            <p class="team_name">Dr. Rupali Yadav BDS, MDS (KGMC LUCKNOW) </p>
                            <p class="team_content">(Consultant Prosthodontist)</p>
                        </div>
                        <div class="our_team_card_div">
                            <div class="our_team_img_div">
                                <img src="/images/ankitarora2.png" alt="">
                            </div>
                            <p class="team_name">Dr. Ankit Arora BDS, MDS </p>
                            <p class="team_content"> (Oral and Maxillofacial Surgeon, also Specializes in Hair
                                Transplants, AIIMS)</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="testimonials" id="testimonials">
                <h5>Testimonials</h5>
                <h3>What <span class="font-light">They Say</span></h3>
                <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true"
                    space-between="30" centered-slides="true" autoplay-delay="3500"
                    autoplay-disable-on-interaction="true" loop="true">
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with doctor's friendliness, treatment satisfaction,
                                            value for money, wait time & their caring attitude.
                                            He explained every thing before doing treatment. He has always
                                            showcased positive attitude and was very co-operative throughout the
                                            treatment.”
                                            <div class="author">-Mrs. Kanika saha</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with doctor's friendliness. He is very kind and takes
                                            full care of his patients. He gives his best and attends the patient
                                            very well.”
                                            <div class="author">-Mrs. Sarita</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "Dr Payal is very experienced dentist. I have been visiting her from
                                            last 2 years and have found her to be very professional. She is
                                            available during non business hours for any emergency or critical
                                            cases. Always reachable on phone to guide you during the treatment.
                                            The facility is also very hygienic and usually with prior
                                            appointments you don't have to wait. I would highly recommend her
                                            for your
                                            dental related problems”
                                            <div class="author">-Mr. Parveen jain</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with doctor's friendliness, explanation of the health
                                            issue, treatment satisfaction & value for money. I have been
                                            associated with many doctors in past because of my serious dental
                                            problems & now since last couple of years not only me but my
                                            entire family have build a trust & feel safe with Dr. Chawla. She is
                                            a very caring and experienced doctor. Trust me, anybody who
                                            is scared of dental treatment must visit her. I highly recommend
                                            her.”
                                            <div class="author">-Mr. Rajiv Satwah</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with explanation of the health issue, treatment
                                            satisfaction & value for money. Dr Payal is really sweet &
                                            works very well. She is very good in her work & you can feel that by
                                            her treatment.”
                                            <div class="author">-Mrs. Pratigya</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "There is good coordination between the two doctors . I needed
                                            dentures for long time . I am satisfied with treatment I got .
                                            All the best for doctor duo . Thank you”
                                            <div class="author">-Mr. Ali</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with doctor's friendliness, explanation of the health
                                            issue, treatment satisfaction, value for money & wait time.
                                            The visit and treatment was fine. Fully satisfied with hygiene,
                                            equipment and staff at the clinic. Qwerty.”
                                            <div class="author">-Mr. Yashpal Raghava</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="slider_parent_div">
                            <div class="slider_child_div">
                                <div class=" quote">
                                    <div class="">
                                        <div class="text-left testimonials_content">
                                            "I was happy with doctor's friendliness, explanation of the health
                                            issue, treatment satisfaction & value for
                                            money. I am very much satisfied with the treatment. His approach to
                                            treat the problem is very appreciable. He treats his
                                            patients as his friend. He is very much accommodating and is of
                                            helpful nature. I wish for a bright future.”
                                            <div class="author">-Mr. C.S.Jaiswal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
            <div class="awards_section" id="awards">
                <div class="awards_section_child">
                    <h2 class="">Awards <span class="highlight_sub_heading">and Recognition</span></h2>
                    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true"
                        centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                        coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                        coverflow-effect-slide-shadows="false" centered-slides="true" autoplay-delay="3500"
                        autoplay-disable-on-interaction="true" pagination-clickable="true" navigation="true"
                        loop="true">
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/achivement.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/amit-chawla.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/covid-safe.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/green-park.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/honour.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/indian.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/international.jpeg"
                                alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/safety.jpeg" alt="">
                        </swiper-slide>
                        <swiper-slide class="slide_img_div">
                            <img class="award_img_slider" src="images/awards-and-recongnition/society.jpeg" alt="">
                        </swiper-slide>
                    </swiper-container>
                </div>
            </div>
            <div class="gallery" id="gallery">
                <div class="gallery_child">
                    <h1>Gallery</h1>
                    <div class="img_parent_div">
                        <div>
                            <div class="img_div">
                                <a href="images/gallery/p1.jpg" data-toggle="modal" data-target="#exampleModal">
                                    <img src="images/gallery/p1.jpg" alt="">
                                </a>
                            </div>
                            <h3>Clinic</h3>
                        </div>
                        <div>
                            <div class="img_div">
                                <a href="images/gallery/s/s1.jpeg">
                                    <img src="images/gallery/s/s1.jpeg" alt="">
                                </a>
                            </div>
                            <h3>School Camp</h3>
                        </div>
                        <div>
                            <div class="img_div">
                                <a href="images/gallery/f/f9.jpeg">
                                    <img src="images/gallery/f/f9.jpeg" alt="">
                                </a>
                            </div>
                            <h3>Dental Facts</h3>
                        </div>
                        <div>
                            <div class="img_div">
                                <a href="images/gallery/i/ip1.jpeg">
                                    <img src="images/gallery/i/ip1.jpeg" alt="">
                                </a>
                            </div>
                            <h3>International Patients</h3>
                        </div>
                        <div>
                            <div class="img_div">
                                <a href="images/gallery/f/f14.jpeg">
                                    <img src="images/gallery/f/f14.jpeg" alt="">
                                </a>
                            </div>
                            <h3>Dental Communication</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parent_location-section">
                <!-- <h1>Clinic Address</h1> -->
                <div class="child_location-section">
                    <div class="location_sections">
                        <h1>Signature Clinic</h1>
                        <a href="https://www.google.com/maps/place/28%C2%B028'03.7%22N+77%C2%B005'24.9%22E/@28.4676981,77.0880502,17z/data=!3m1!4b1!4m4!3m3!8m2!3d28.4676981!4d77.0902389?hl=en"
                            target="_blank" class="address_icons">
                            <i class="fa fa-solid fa-location-dot"></i>
                            <p>191, Sector 27, Gurgaon</p>
                            <!-- <p>Clinic1:- F-06, Baani Square near Hotel Hilton,Sector 50 Mayfield Gardens, ggn </p> -->
                        </a>
                    </div>
                    <div class="location_sections">
                        <h1>Network Clinic</h1>
                        <a href="https://www.google.com/maps/place/Eros+City+Square/@28.4124764,77.0531874,17z/data=!3m2!4b1!5s0x390d22881504fc9d:0xab420e612b2dbea3!4m6!3m5!1s0x390d22626d58c223:0x73ccb7811917d8d!8m2!3d28.4124717!4d77.0553761!16s%2Fg%2F11fzf5rvrm" target="_blank" class="address_icons">
                            <i class="fa fa-solid fa-location-dot"></i>
                            <p>F-186, Eros City Square above Mc. Donald's</p>
                        </a>
                        <a href="https://www.google.com/maps/place/Baani+Square/@28.4256662,77.0549584,18.39z/data=!4m10!1m2!2m1!1sBaani+Square!3m6!1s0x390d23d6b567b0df:0xd9e2b22f50ab85f8!8m2!3d28.4257225!4d77.0577849!15sCgxCYWFuaSBTcXVhcmVaDiIMYmFhbmkgc3F1YXJlkgEScmVhbF9lc3RhdGVfYWdlbmN54AEA!16s%2Fg%2F1yg6c_6tf" target="_blank" class="address_icons">
                            <i class="fa fa-solid fa-location-dot"></i>
                            <p>F-06, Baani Square near Hotel Hilton</p>
                        </a>
                    </div>
                </div>
            </div>
            <footer class="footer" id="footer">
                <div class="footer_first_child">
                    <div class="footer_details">
                        <div class="logo-img-div logo_footer_img">
                            <a href="#homepage">
                                <img class="logo-img" src="images/periodontic.png" alt="logoImage">
                                <p class="prosmyle_logo_text">Prosmyle</p>
                            </a>
                        </div>
                        <div class="footer_navigation">
                            <h3 class="footer_navigation_links_heading">Navigation</h3>
                            <ul class="">
                                <li><a class="footer_book_appointment" href="#contect-form">Book an Appointment</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#services">Our Services</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <!-- <li><a href="https://blog.drchawladentals.com/">Blogs</a></li> -->
                            </ul>
                        </div>
                        <div class="follow_us">
                            <div class="follow_section_contact_info">
                                <h3>Contact</h3>
                                <div>
                                    <a href="tel:+91-9717032555">
                                        <i class="fa-solid fa-phone emial_no"></i>: +91-97170 32555
                                    </a>
                                </div>
                                <div>
                                    <a href="tel:+91-7428522191">
                                        <i class="fa-solid fa-phone emial_no"></i>: +91-74285 22191
                                    </a>
                                </div>
                                <div>
                                    <a href="mailto:prosmyledantal@outlook.com">
                                        <i class="fa-solid fa-envelope emial_no"></i>: prosmyledantal@outlook.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer_address">
                            <h3 class="follow">Follow Us</h3>
                            <div class="social_icons">
                                <a href="">
                                    <i class="fa fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-brands fa-instagram"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-brands fa-facebook-f"></i>
                                </a>
                                <!-- <a href="">
                                        <i class="fa fa-brands fa-twitter"></i>
                                    </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- <div class="phone_view_button">
                <a href="#contect-form">
                    <button>Appointment</button>
                </a>
                <a href="tel:+917428522191">
                    <button>Call</button>
                </a>
            </div> -->
            <div class="sticky-nav-wrapper">
                <ul class="sticky-nav">
                    <li><a href="tel:+917428522191"><i class="fa fa-phone animated"></i><span>Call Now</span></a></li>
                    <li><a href="#contect-form"><i class="fa fa-envelope"></i><span>Drop an Enquiry</span></a></li>
                </ul>
            </div>
            <div class="reach_top_button">
                <a href="#homepage">
                    <button><i class="fa-solid fa-angle-up"></i></button>
                </a>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body" style="position: relative;">
                        <button type="button" class="close btn-close-cls" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true"
                            navigation="true" space-between="30" centered-slides="true" autoplay-delay="3500"
                            autoplay-disable-on-interaction="true" loop="true">
                            <swiper-slide>
                                <img class="clinic_img" src="images/clinic_img/IMG_0910.JPG" alt="">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="clinic_img" src="images/clinic_img/IMG_0915.JPG" alt="">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="clinic_img" src="images/clinic_img/IMG_0919.JPG" alt="">
                            </swiper-slide>
                            <swiper-slide>
                                <img class="clinic_img" src="images/clinic_img/IMG_0920.JPG" alt="">
                            </swiper-slide>
                        </swiper-container>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</body>

</html>