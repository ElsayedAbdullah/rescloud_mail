<?php

  // check if the user is get from request method
  if($_SERVER['REQUEST_METHOD'] == "POST") {

		// assign variables
		$user  	    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$company  	= filter_var($_POST['company'], FILTER_SANITIZE_STRING);
		$phone    	= filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
		$email      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $business  	= filter_var($_POST['business'], FILTER_SANITIZE_STRING);
		$msg      	= filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
    
    $formErrors = array();
		if(empty($user)) {
      $formErrors[] = "<strong>Username!</strong> can't be <strong>Empty</strong>";
    }
		if(empty($company)) {
      $formErrors[] = "<strong>Company!</strong> can't be <strong>Empty</strong>";
    }
		if(empty($phone)) {
      $formErrors[] = "<strong>Phone Number!</strong> can't be <strong>Empty</strong>";
    }
    if(empty($email)) {
      $formErrors[] = "<strong>Email!</strong> can't be <strong>Empty</strong>";
    }
    if(empty($business)) {
      $formErrors[] = "<strong>Business!</strong> can't be <strong>Empty</strong>";
    }
		if(empty($msg)) {
			$formErrors[] = "<strong>Message!</strong> can't be <strong>Empty</strong>";
    }
    
    // if no errors send the email
    $headers = "From: " . $email . '\r\n';
    $myEmail = "sayedaladway@gmail.com";
    $subject = "Contact Form";
    if(empty($formErrors)) {
      mail($myEmail, $subject , $msg, $headers);
    }

	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@400;700&family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>resCloud</title>
  </head>
  <body>
    <div class="hero-wrapper">
      <header>
        <nav class="navbar navbar-expand-lg sticky-top navbar-light">
          <div class="container">
            <a class="logo" href="index.html">
              <img src="imgs/logo.png" alt="logo" />
            </a>
            <div
              class="toggler"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
            >
              <div class="bar1"></div>
              <div class="bar3"></div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a data-scroll="features" class="nav-link" href="#"
                    >FEATURES</a
                  >
                </li>
                <li class="nav-item">
                  <a data-scroll="faq" class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                  <a data-scroll="contact" class="nav-link last" href="#"
                    >CONTACT</a
                  >
                </li>
              </ul>
              <ul class="navbar-nav login-btns ml-auto">
                <li>
                  <a data-scroll="contact" href="#" class="login-btn btn"
                    >LOG IN</a
                  >
                </li>
                <li>
                  <a data-scroll="contact" class="primary--btn btn" href="#"
                    >SIGN UP</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="hero-section">
        <div class="container">
          <h3 class="section-subtitle">A UNIQUE APPROACH TO THE CLOUD</h3>
          <h1 class="section-title">
            Simple Scaling For The Residential Cloud
          </h1>
          <a data-scroll="contact" href="#" class="primary--btn btn"
            >DISCOVER MORE</a
          >
        </div>
      </div>

      <div class="our-services">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="left-side">
                <img
                  class="img-fluid"
                  src="imgs/services-img.png"
                  draggable="false"
                  alt="services-img"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-side">
                <h4 class="section-subtitle">OUR SERVICES</h4>
                <h2 class="section-title">Scalable Cloud Computing</h2>
                <p>
                  Our scalable virtual machines come with add-on storage,
                  security, and monitoring capabilities to easily setup and
                  manage your production needs.
                </p>
                <p>
                  Deploy a VM using any distribution from our wide selection of
                  auto-install images. Begin using our infrastructure within
                  minutes.
                </p>
                <a data-scroll="contact" href="#" class="primary--btn"
                  >contact us</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="features" class="benefits-wrapper">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
              <div class="benefits-content">
                <h4 class="section-subtitle">
                  BENEFITS OF RESIDENTIAL IP NETWORKING
                </h4>
                <h2 class="section-title">
                  Used in various ways by various types of business
                </h2>
                <div class="desc">
                  <p>
                    Our platform has been used by many internet privacy and
                    computer security companies around the world. Our network
                    has proven to be very effective when detecting malware,
                    phising pages and more. While being very useful for security
                    purposes. It is also beneficial for online shopping networks
                    that are looking to have the best pricing accross the
                    internet and can only do so by performing price comparasion
                    through the use of residential IP networks.
                  </p>
                  <p>
                    Marketing companies have also featured our product in
                    various case studies over the pas 2 years due to our ability
                    to enhance the ad verification process. This has saved
                    millions of dollars for marketing agencies and their
                    clients.
                  </p>
                </div>
                <div class="benefits-btns">
                  <a data-scroll="contact" href="#" class="primary--btn"
                    >GET STARTED</a
                  >
                  <a href="#">
                    <span>SEE PRICING</span>
                    <img src="imgs/arrow-right.svg" alt="arrow-right" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-8 m-md-auto col-lg-5 order-1 order-lg-2">
              <div class="benefits-img">
                <img
                  class="img-fluid"
                  draggable="false"
                  src="imgs/benefits.png"
                  alt="benefits img"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="rescloud-panel">
      <div class="container">
        <div class="rescloud-content">
          <h2 class="text-md-center section-title rescloud-title">
            The ResCloud Panel
          </h2>
          <p class="subtitle text-md-center">
            As a Rescloud client, you will get access to our virtualization
            panel, where you can build, destory, and manage your residential
            cloud environment
          </p>
          <p class="text-md-center text">
            The Rescloud panel brings forth a transparent approach to cloud
            infrastructure and ensures that clients can have end-to-end access
            to their virtual environment.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img src="imgs/remote-access.svg" alt="remote-access icon" />
              </div>
              <div class="desc">
                <h4>Remote Console Access</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img src="imgs/loading.svg" alt="Custom ISO Loading icon" />
              </div>
              <div class="desc">
                <h4>Custom ISO Loading</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img
                  src="imgs/installation.svg"
                  alt="Unattended OS Installation icon"
                />
              </div>
              <div class="desc">
                <h4>Unattended OS Installation</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img src="imgs/quick-vm.svg" alt="Quick VM Deployment icon" />
              </div>
              <div class="desc">
                <h4>Quick VM Deployment</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img src="imgs/upgrade.svg" alt="upgrade icon" />
              </div>
              <div class="desc">
                <h4>Upgrade/Downgrade On The Fly</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="box">
              <div class="icon">
                <img
                  src="imgs/password.svg"
                  alt="VM Password Management icon"
                />
              </div>
              <div class="desc">
                <h4>VM Password Management</h4>
                <p>
                  Cras hendrerit consequat mi, et facilisis mauris viverra
                  iaculis. Mauris vitae urna eget ante porta malesuada.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-10 m-auto">
            <div class="compatible">
              <h3>Our Panel is compatible with</h3>
              <ul class="list-unstyled">
                <li>
                  <svg
                    class="mac"
                    width="17"
                    height="20"
                    viewBox="0 0 17 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.4933 15.5866C16.1908 16.2853 15.8328 16.9285 15.418 17.5198C14.8526 18.326 14.3896 18.884 14.0329 19.1939C13.4798 19.7025 12.8872 19.963 12.2527 19.9778C11.7971 19.9778 11.2478 19.8482 10.6083 19.5852C9.96669 19.3235 9.37709 19.1939 8.83797 19.1939C8.27256 19.1939 7.66616 19.3235 7.01754 19.5852C6.36793 19.8482 5.84461 19.9852 5.4445 19.9988C4.83601 20.0247 4.22948 19.7568 3.62407 19.1939C3.23767 18.8568 2.75435 18.2791 2.17536 17.4606C1.55414 16.5865 1.04342 15.573 0.643311 14.4175C0.214807 13.1693 0 11.9607 0 10.7907C0 9.45032 0.28962 8.29431 0.869723 7.32557C1.32563 6.54745 1.93216 5.93364 2.69127 5.48304C3.45038 5.03243 4.27059 4.80281 5.1539 4.78812C5.63721 4.78812 6.27102 4.93762 7.05865 5.23144C7.84405 5.52625 8.34836 5.67575 8.56946 5.67575C8.73476 5.67575 9.29499 5.50094 10.2447 5.15243C11.1428 4.82923 11.9008 4.69541 12.5218 4.74812C14.2045 4.88392 15.4686 5.54723 16.3093 6.74226C14.8044 7.65408 14.06 8.9312 14.0748 10.5695C14.0884 11.8457 14.5514 12.9076 15.4612 13.7508C15.8735 14.1422 16.334 14.4446 16.8463 14.6594C16.7352 14.9816 16.6179 15.2903 16.4933 15.5866ZM12.6341 0.400602C12.6341 1.40083 12.2687 2.33474 11.5403 3.19916C10.6614 4.22678 9.59819 4.82059 8.44527 4.72689C8.43057 4.60689 8.42206 4.4806 8.42206 4.34789C8.42206 3.38767 8.84007 2.36005 9.58239 1.51983C9.95299 1.09441 10.4243 0.740678 10.9959 0.458501C11.5663 0.180534 12.1058 0.0268124 12.6131 0.000488281C12.628 0.134203 12.6341 0.267926 12.6341 0.400589V0.400602Z"
                      fill="white"
                    />
                  </svg>
                  <span>Mac & iOS</span>
                </li>
                <li>
                  <svg
                    class="android"
                    width="22"
                    height="13"
                    viewBox="0 0 22 13"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.3681 3.71457L18.1918 0.555345C18.2948 0.378238 18.2325 0.153264 18.0578 0.0503499C17.8831 -0.0525627 17.6557 0.00726908 17.5552 0.184377L15.7076 3.38428C14.2979 2.74047 12.7111 2.38147 11.0046 2.38147C9.29817 2.38147 7.71138 2.74047 6.3017 3.38428L4.45404 0.184377C4.35113 0.00726908 4.12615 -0.0525627 3.94905 0.0503499C3.77194 0.153264 3.7121 0.378238 3.81502 0.555345L5.63875 3.71457C2.49389 5.41863 0.363815 8.60178 0.0119934 12.3282H21.9973C21.6454 8.60178 19.5154 5.41863 16.3681 3.71457ZM5.95706 9.24081C5.44728 9.24081 5.03562 8.82676 5.03562 8.31937C5.03562 7.80959 5.44967 7.39793 5.95706 7.39793C6.46684 7.39793 6.8785 7.81198 6.8785 8.31937C6.8809 8.82676 6.46684 9.24081 5.95706 9.24081ZM16.0498 9.24081C15.54 9.24081 15.1284 8.82676 15.1284 8.31937C15.1284 7.80959 15.5424 7.39793 16.0498 7.39793C16.5596 7.39793 16.9712 7.81198 16.9712 8.31937C16.9736 8.82676 16.5596 9.24081 16.0498 9.24081Z"
                      fill="white"
                    />
                  </svg>
                  <span>Android</span>
                </li>
                <li>
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 20 20"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M0 2.81864L8.11068 1.71405L8.11423 9.53746L0.00740909 9.58362L0 2.81864ZM8.10682 10.4389L8.11311 18.2691L0.00629545 17.1545L0.00584091 10.3863L8.10682 10.4389ZM9.09002 1.56955L19.8441 0V9.43795L9.09002 9.52333V1.56955ZM19.8466 10.5125L19.8441 19.908L9.09 18.3901L9.07493 10.4949L19.8466 10.5125Z"
                      fill="white"
                    />
                  </svg>
                  <span>Windows</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="support">
          <div class="row">
            <div class="col-lg-6">
              <div class="left">
                <h2 class="section-title">Managed Support</h2>
                <p class="support-text">
                  ResCloud takes a unique approach to managed support services.
                  Not only do we provide a simple to use ticketing siystem, but
                  we make ourselves available for consulting & support via many
                  methods of communication across multiple timezones.
                </p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right">
                <div class="row">
                  <div class="col-md-6">
                    <div class="support-box">
                      <div class="box-icon">
                        <img src="imgs/mail.svg" alt="mail icon" />
                      </div>
                      <div class="detail">
                        <p>Send your message to</p>
                        <a href="mailto:info@rescloud.com">info@rescloud.com</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="support-box">
                      <div class="box-icon">
                        <img src="imgs/slack.svg" alt="slack icon" />
                      </div>
                      <div class="detail">
                        <p>Request Invite from</p>
                        <a href="mailto:info@rescloud.com">info@rescloud.com</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cards">
                  <div class="imgs order-2 order-md-1">
                    <img src="imgs/visa.svg" alt="visa" />
                    <img src="imgs/mastercard.svg" alt="mastercard" />
                  </div>
                  <a
                    data-scroll="contact"
                    href="#"
                    class="primary--btn order-1 order-md-2"
                    >SIGN UP & GET STARTED</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="support-countries">
          <h2 class="section-title text-md-center">
            Support over <span>8</span> countries across the world
          </h2>
          <div class="countries">
            <div class="country">
              <img src="imgs/canada.svg" alt="canada flag" />
              <span>Canada</span>
            </div>
            <div class="country">
              <img src="imgs/unitedStates.svg" alt="United States flag" />
              <span>United States</span>
            </div>
            <div class="country">
              <img src="imgs/uk.svg" alt="United Kingdom flag" />
              <span>United Kingdom</span>
            </div>
            <div class="country">
              <img src="imgs/australia.svg" alt="Australia flag" />
              <span>Australia</span>
            </div>
            <div class="country">
              <img src="imgs/india.svg" alt="India flag" />
              <span>India</span>
            </div>
            <div class="country">
              <img src="imgs/japan.svg" alt="Japan flag" />
              <span>Japan</span>
            </div>
            <div class="country">
              <img src="imgs/germany.svg" alt="Germany flag" />
              <span>Germany</span>
            </div>
            <div class="country">
              <img src="imgs/france.svg" alt="France flag" />
              <span>France</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="faq" class="faq">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <ul class="nav nav-tabs d-none d-md-flex" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link active"
                  id="general-tab"
                  data-toggle="tab"
                  href="#general"
                  role="tab"
                  aria-controls="general"
                  aria-selected="true"
                  >General</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="networking-tab"
                  data-toggle="tab"
                  href="#networking"
                  role="tab"
                  aria-controls="networking"
                  aria-selected="false"
                  >Networking</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="support-tab"
                  data-toggle="tab"
                  href="#support"
                  role="tab"
                  aria-controls="support"
                  aria-selected="false"
                  >Support</a
                >
              </li>
              <li class="nav-item" role="presentation">
                <a
                  class="nav-link"
                  id="custom-tab"
                  data-toggle="tab"
                  href="#custom"
                  role="tab"
                  aria-controls="custom"
                  aria-selected="false"
                  >Custom</a
                >
              </li>
            </ul>
            <div class="dropdown d-block d-md-none">
              <button
                class="btn dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                General
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li data-content=".content-one" class="dropdown-item active">
                  General
                </li>
                <li data-content=".content-two" class="dropdown-item">
                  Networking
                </li>
                <li data-content=".content-three" class="dropdown-item">
                  Support
                </li>
                <li data-content=".content-four" class="dropdown-item">
                  Custom
                </li>
              </ul>
            </div>

            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active content-one"
                id="general"
                role="tabpanel"
                aria-labelledby="general-tab"
              >
                <div class="accordion" id="accordionExampleOne">
                  <div class="question">
                    <div class="question-header" id="headingOne">
                      <h2
                        data-toggle="collapse"
                        data-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                      >
                        <span>What is ResCloud?</span>
                      </h2>
                    </div>

                    <div
                      id="collapseOne"
                      class="collapse show"
                      aria-labelledby="headingOne"
                      data-parent="#accordionExampleOne"
                    >
                      <div class="question-body">
                        ResCloud was created with the well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering. We have
                        been servicing internet security and computer secutiry
                        for over 2 years through our private residential IP
                        services. With ResCloud our goal is to bring our latest
                        infrastructure to the market for end-consumers and
                        smaller businesses to take advantage & enhance their
                        services.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingTwo">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseTwo"
                        aria-expanded="true"
                        aria-controls="collapseTwo"
                      >
                        <span
                          >What makes ResCloud different from other cloud
                          service providers?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseTwo"
                      class="collapse"
                      aria-labelledby="headingTwo"
                      data-parent="#accordionExampleOne"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingThree">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseThree"
                        aria-expanded="true"
                        aria-controls="collapseThree"
                      >
                        <span
                          >How does ResCloud keep the network safe from
                          malicious behavior?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseThree"
                      class="collapse"
                      aria-labelledby="headingThree"
                      data-parent="#accordionExampleOne"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering. We have
                        been servicing internet security and computer secutiry
                        for over 2 years through our private residential IP
                        services.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingFour">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseFour"
                        aria-expanded="true"
                        aria-controls="collapseFour"
                      >
                        <span
                          >What does ResCloud have planned for the near
                          future?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseFour"
                      class="collapse"
                      aria-labelledby="headingFour"
                      data-parent="#accordionExampleOne"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade content-two"
                id="networking"
                role="tabpanel"
                aria-labelledby="networking-tab"
              >
                <div class="accordion" id="accordionExampleTwo">
                  <div class="question">
                    <div class="question-header" id="headingFive">
                      <h2
                        data-toggle="collapse"
                        data-target="#collapseFive"
                        aria-expanded="true"
                        aria-controls="collapseFive"
                      >
                        <span
                          >How does ResCloud keep the network safe from
                          malicious behavior?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseFive"
                      class="collapse show"
                      aria-labelledby="headingFive"
                      data-parent="#accordionExampleTwo"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering. We have
                        been servicing internet security and computer secutiry
                        for over 2 years through our private residential IP
                        services.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingSix">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseSix"
                        aria-expanded="true"
                        aria-controls="collapseSix"
                      >
                        <span
                          >What does ResCloud have planned for the near
                          future?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseSix"
                      class="collapse"
                      aria-labelledby="headingSix"
                      data-parent="#accordionExampleTwo"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade content-three"
                id="support"
                role="tabpanel"
                aria-labelledby="support-tab"
              >
                <div class="accordion" id="accordionExampleThree">
                  <div class="question">
                    <div class="question-header" id="headingSeven">
                      <h2
                        data-toggle="collapse"
                        data-target="#collapseSeven"
                        aria-expanded="true"
                        aria-controls="collapseSeven"
                      >
                        <span
                          >What makes ResCloud different from other cloud
                          service providers?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseSeven"
                      class="collapse show"
                      aria-labelledby="headingSeven"
                      data-parent="#accordionExampleThree"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingEight">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseEight"
                        aria-expanded="true"
                        aria-controls="collapseEight"
                      >
                        <span
                          >What does ResCloud have planned for the near
                          future?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseEight"
                      class="collapse"
                      aria-labelledby="headingEight"
                      data-parent="#accordionExampleThree"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade content-four"
                id="custom"
                role="tabpanel"
                aria-labelledby="custom-tab"
              >
                <div class="accordion" id="accordionExampleFour">
                  <div class="question">
                    <div class="question-header" id="headingNine">
                      <h2
                        data-toggle="collapse"
                        data-target="#collapseNine"
                        aria-expanded="true"
                        aria-controls="collapseNine"
                      >
                        <span
                          >What does ResCloud have planned for the near
                          future?</span
                        >
                      </h2>
                    </div>

                    <div
                      id="collapseNine"
                      class="collapse show"
                      aria-labelledby="headingNine"
                      data-parent="#accordionExampleFour"
                    >
                      <div class="question-body">
                        ResCloud was created with thte well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering.
                      </div>
                    </div>
                  </div>
                  <div class="question">
                    <div class="question-header" id="headingTen">
                      <h2
                        class="collapsed"
                        data-toggle="collapse"
                        data-target="#collapseTen"
                        aria-expanded="true"
                        aria-controls="collapseTen"
                      >
                        <span>What is ResCloud?</span>
                      </h2>
                    </div>

                    <div
                      id="collapseTen"
                      class="collapse"
                      aria-labelledby="headingTen"
                      data-parent="#accordionExampleFour"
                    >
                      <div class="question-body">
                        ResCloud was created with the well known cloud platform
                        model in mind, but with the twist of residential IP
                        networking built in to the service offering. We have
                        been servicing internet security and computer secutiry
                        for over 2 years through our private residential IP
                        services. With ResCloud our goal is to bring our latest
                        infrastructure to the market for end-consumers and
                        smaller businesses to take advantage & enhance their
                        services.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="faq-content">
              <h2 class="section-title">Frequently Asked Questions</h2>
              <p>
                We compiled a list of questions which you may have about to
                ResCloud, the services we provide, and the support that
                accompanies our platform.
              </p>
              <p>Didn’t find the answer you looking for?</p>
              <a href="#" class="primary--btn">SUBMIT TICKET</a>
              <div class="social">
                <div class="social-icon">
                  <a href="#">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z"
                        stroke="#233258"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M3 7L12 13L21 7"
                        stroke="#233258"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </div>
                <div class="social-icon">
                  <a href="#">
                    <svg
                      width="22"
                      height="19"
                      viewBox="0 0 22 19"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M21 2.01001C20 2.50001 19.02 2.69901 18 3.00001C16.879 1.73501 15.217 1.66501 13.62 2.26301C12.023 2.86101 10.977 4.32301 11 6.00001V7.00001C7.755 7.08301 4.865 5.60501 3 3.00001C3 3.00001 -1.182 10.433 7 14C5.128 15.247 3.261 16.088 1 16C4.308 17.803 7.913 18.423 11.034 17.517C14.614 16.477 17.556 13.794 18.685 9.77501C19.0218 8.55268 19.189 7.28987 19.182 6.02201C19.18 5.77301 20.692 3.25001 21 2.00901V2.01001Z"
                        stroke="#233258"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="contact" class="contact-us">
      <div class="container">
        <h2 class="section-title text-md-center">Contact Us & Get Started</h2>
        <form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
          <?php
			if(!empty($formErrors)) { ?>
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<?php
					foreach ($formErrors as $error) {
						echo $error . "<br/>";
					} ?>
				</div>
			<?php }	?>
          <div class="row">
            <div class="col-md-6">
              <div class="info">
                <div class="input-group">
                  <input
                    id="fullName"
                    type="text"
                    name="name"
                    placeholder="Full Name"
                    value="<?php if(isset($user)) { echo $user; } ?>"
                  />
                  <div class="custom-alert">*Error Message</div>
                </div>
                <div class="input-group">
                  <input
                    id="company"
                    type="text"
                    name="company"
                    placeholder="Company"
                    value="<?php if(isset($company)) { echo $company; } ?>"
                  />
                  <div class="custom-alert">*Error Message</div>
                </div>
              </div>
              <div class="info">
                <div class="input-group">
                  <input
                    id="phone"
                    type="tel"
                    name="phone"
                    placeholder="Phone Number"
                    value="<?php if(isset($phone)) { echo $phone; } ?>"
                  />
                  <div class="custom-alert">*Error Message</div>
                </div>
                <div class="email-container input-group">
                  <input
                    id="emailInput"
                    type="email"
                    name="email"
                    placeholder="Email Address"
                    value="<?php if(isset($email)) { echo $email; } ?>"
                  />
                  <div class="custom-alert">*Error Message</div>
                </div>
              </div>
              <div class="business input-group">
                <input
                  id="business"
                  type="text"
                  placeholder="Business Type"
                  name="business"
                  value="<?php if(isset($business)) { echo $business; } ?>"
                />
                <div class="custom-alert">*Error Message</div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group">
                <textarea
                  id="msg"
                  name="msg"
                  placeholder="Your Message"
                ><?php if(isset($msg)) { echo $msg; } ?></textarea>
                <div class="custom-alert">*Error Message</div>
              </div>
            </div>
          </div>
          <div class="submit">
            <button type="submit" class="primary--btn">SEND MESSAGE</button>
          </div>
        </form>
        <footer>
          <div class="logo">
            <a href="index.html">
              <img src="imgs/logo.png" alt="logo" />
            </a>
          </div>
          <ul class="footer-links list-unstyled">
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </footer>
      </div>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
