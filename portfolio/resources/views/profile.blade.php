<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/profile.css">
    <title>Portfolio</title>
</head>

<body>
    <section class="header">
        <nav class="navbar navbar-expand-sm navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand text-white" href="#">Portfo<span class="text-danger">lio</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ml-auto">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#">Home</a>
                            <a class="nav-item nav-link" href="#">About</a>
                            <a class="nav-item nav-link" href="#">Skills</a>
                            <a class="nav-item nav-link" href="#">Work</a>
                            <a class="nav-item nav-link" href="#">Contact</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- *************************************End navbar********************** -->

    <section class="home">
        <div class="back">
            <div class="container">
                <div class="row">
                    <div class="col-md-12  paragraph">
                        <h4>Hello, My name is</h4>
                        <h2>Mahbubul Alam Pavel</h2>
                        <h5>And I'm a <span class="text-danger"> Software Developer</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ******************************End Home***************************** -->


    <section class="about">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">About me</h2>
            <h5 class="text-center text-danger">--Who I am--</h5>
            <div class="row">
                <div class="col-md-5 profile">
                    <img src="../img/picture.jpg" class="img-fluid" alt="" />
                </div>
                <div class="col-md-7 about-me">
                    <h4 class="font-weight-bold">I'm Pavel and I'm a <span class="text-danger">Software Developer</span>
                    </h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum</p>
                    <a href="" type="button" class="btn btn-danger btn-lg">Download CV</a>
                </div>

            </div>
        </div>
    </section>
    <!-- *******************End About section******************* -->

    <section class="work">
        <div class="container">
            <h2 class="text-center text-white font-weight-bold">My Works</h2>
            <h5 class="text-center text-danger">--What I have done--</h5>
            <!-- <div class="row"> -->
            <div class="card-deck">
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title text-center font-weight-bold">Online CV Maker</h5>
                            <p class="card-text text-justify">This is a longer card with supporting text below as a
                                natural
                                lead-in
                                to additional content. This content is a little bit longer.</p>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title text-center font-weight-bold">Restaurant Gallery</h5>
                            <p class="card-text text-justify">This card has supporting text below as a natural lead-in
                                to
                                additional
                                content.</p>
                        </a>

                    </div>
                </div>
                <div class="card">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body">
                        <a href="#">
                            <h5 class="card-title text-center font-weight-bold">Air Quality Monitoring</h5>
                            <p class="card-text text-justify">This is a wider card with supporting text below as a
                                natural
                                lead-in to
                                additional content. This card has even longer content than the first to show that equal
                                height action.</p>
                        </a>

                    </div>
                </div>

            </div>


            <!-- </div> -->
        </div>
    </section>
    <!-- ******************End Work section********************** -->

    <section class="skill">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">My Skills</h2>
            <h5 class="text-center text-danger">--What I know--</h5>
            <div class="row">

                <div class="col-md-6  skill-text">
                    <h4 class="font-weight-bold">My Creative <span class="text-danger">Skills</span> & <span
                            class="text-danger">Experiences</span>
                    </h4>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                        only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                        including versions of Lorem Ipsum</p>
                    <a href="" type="button" class="btn btn-danger btn-lg">Read more</a>
                </div>
                <div class="col-md-6 skill-lang">
                        <h6>C Programming</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">80%</div>
                        </div>

                        <h6 class="heading">Java</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">80%</div>
                        </div>

                        <h6 class="heading">JavaScript</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">60%</div>
                        </div>

                        <h6 class="heading">PHP</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-warning"
                                role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">70%</div>
                        </div>

                        <h6 class="heading">Laravel8</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">60%</div>
                        </div>

                        <h6 class="heading">HTML5</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                aria-valuemax="100">90%</div>
                        </div>

                        <h6 class="heading">CSS3</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated progress-bar-animated bg-warning"
                                role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                aria-valuemax="100">85%</div>
                        </div>

                        <h6 class="heading">Bootstrap4</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0"
                                aria-valuemax="100">80%</div>
                        </div>

                        <h6 class="heading">Jquery</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                aria-valuemax="100">60%</div>
                        </div>

                        <h6 class="heading">MySql</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
                                aria-valuemax="100">70%</div>
                        </div>
                </div>

            </div>
        </div>
    </section>
    <!-- **********************End Skills section*********************** -->


    <section class="contact">
        <div class="container">
            <h2 class="text-center text-black font-weight-bold">Contact me</h2>
            <h5 class="text-center text-danger">--Get in touch--</h5>
            <div class="row">
                <div class="col-md-6 profile">
                    
                </div>
                <div class="col-md-6 contact-me">
                    
                </div>

            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>