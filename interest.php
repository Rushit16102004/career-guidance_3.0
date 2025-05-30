<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Career Guidance</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!--Custom CSS-->
        <link rel="stylesheet" href="CSS/interest.css" type="text/css">
        <link rel="stylesheet" href="css/all.css" type="text/css">

    
    
        <!--Google Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@700&display=swap" rel="stylesheet">
    </head>
<body>

    
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Career <span class="brand">Guidance</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <div class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#contact">CONTACTS</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="login.php">SIGN IN</a>
                </div>
            </div>
        </div>
    </div>
</nav>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/pexels-photo-39811.jpeg" alt="image" height="100" width="100"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Guiding you all the way</h2>
                        <p>Make career decisions that will change your life😉</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#par">Learn More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/pexels-photo-2080963.jpeg" alt="imge" />
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Helpful Resources</h2>
                        <p>Your career matters so choose your course wisely</p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#par">Learn More</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Images/pexels-photo-1008739.jpeg" alt="image" />
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Promoting career guidance to the fullest</h2>
                        <p>
                            Don't worry about trying to please everyone. Focus on yourself..
                        </p>
                        <p>
                            <a class="btn btn-lg btn-primary" href="#par">Learn More</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="reveal">
                        Career interests are your preferences regarding work activities
                        and environment. Identifying your career interest helps you make
                        a well-informed and more strategic decision on your career
                        path.
                    </p>
                    <p class="reveal">
                        Following your career interest means you are pursuing a career
                        that uses your talents and aligns with your passion and
                        preferences. Understanding and being able to determine your
                        passion helps you find fulfillment and success in your chosen
                        profession.
                    </p>
                    <p class="reveal">
                        In this webpage, we provide tools that will enable you to make the
                        right career decisions.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="header reveal">
                        <h2 id="one">
                            Let us know  about your interests....
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mycourse">
        <div class="container" id="table">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <!-- <div class="business"> -->
                            <!-- <h3 id="one">Non-Technical Field</h3>              hardware as a Non-Technical Field -->
                            <!-- <div id="course1"> -->
                                <!-- <button class="btn" id="hardware_1" onclick="calculate_1_avg()">1</button>
                                <button class="btn" id="hardware_2" onclick="calculate_2_avg()">2</button>
                                <button class="btn" id="hardware_3" onclick="calculate_3_avg()">3</button>
                                <button class="btn" id="hardware_4" onclick="calculate_4_avg()">4</button>
                                <button class="btn" id="hardware_5" onclick="calculate_5_avg()">5</button>
                            </div>
                        </div> -->
                        <hr />
                        <div class="tech">
                            <h3 id="two">Technical Field</h3>                    <!--software as a Technical Field-->
                            <div id="course2">
                                <button class="btn" id="software_1" onclick="calculate_6_avg()">1.Fullstack development</button>
                                <button class="btn" id="software_2" onclick="calculate_7_avg()">2.artificial intelligence</button>
                                <button class="btn" id="software_3" onclick="calculate_8_avg()">3.Data science</button>
                                <button class="btn" id="software_4" onclick="calculate_9_avg()">4.Cloud computing</button>
                                <button class="btn" id="software_5" onclick="calculate_10_avg()">5.Game development</button>
                                <button class="btn" id="software_6" onclick="calculate_11_avg()">6.Automation</button>
                                <button class="btn" id="software_7" onclick="calculate_12_avg()">7.Data mining</button>
                                <button class="btn" id="software_8" onclick="calculate_13_avg()">8.Cyber security</button>
                                <button class="btn" id="software_9" onclick="calculate_14_avg()">9.Data scientist</button>
                                <button class="btn" id="software_10" onclick="calculate_15_avg()">10.Machine learning</button>
                            </div>
                        </div>
                        <hr />
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </section> 


    <!-- Centered Search Form -->
<div class="search-container">
    <form action="https://www.google.com/search" method="get" class="search-form" target="_blank">
        <input type="text" name="q" placeholder="Search Google..." required>
        <input type="submit" value="Search">
    </form>
</div>




    <!--Information Technology section-->
    <section id="1">                                         <!-- softwer two -->
        <section class="courses">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="start">
                            <div class="card-header">
                                COURSE DETAILS:
                                <span id="specific">INFORMATION TECHNOLOGY</span>
                            </div>
                            <div class="card-body">
                                <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofhardware1">0</span>%</div>
                                <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                                <p class="card-text">
                                    Information technology (IT) involves the use of computers, storage and networking devices to create, process, store, share and secure electronic data. It is a fast-growing field, due largely to the high demand for IT services across all industries. IT degree programs prepare students to earn potentially lucrative salaries while working for IT departments and consulting firms. The median annual wage for IT careers was $81,430 in May 2015, according to the U.S. Bureau of Labor Statistics, considerably higher than that for all occupations. Read more to learn how to get started in the field of IT, from the various types of careers available to the degrees necessary to secure employment.
                                </p>
                                <p>
                                    Information technology degree programs vary widely depending on the institution issuing the credential. From traditional colleges and universities to accredited online and distance learning degree programs, educational opportunities are available to suit nearly any budget or schedule. Some schools offer certificate courses in specialized areas of information technology. Others offer associate, bachelor's, or master's degree programs designed to produce well-rounded students with broad-based knowledge in many different areas of information technology.
                                </p>
                                <p>
                                    If you are looking for information technology degree programs, you'll find both on-campus and distance-based choices. An online program could be a good choice if you want to enroll in a school that is far away, but not move from where you live. In fact, online information technology degrees come in many different shapes and sizes. These include hybrid programs, which are a blend of campus-based and distance learning courses, fully online programs, accelerated online options and even joint degree programs. Most online information technology degree programs also use an interactive learning management system that allows you to submit assignments, ask questions and have discussions with other students.
                                </p>
                                <p>
                                    If you are looking for information technology degree programs, you'll find both on-campus and distance-based choices. An online program could be a good choice if you want to enroll in a school that is far away, but not move from where you live. In fact, online information technology degrees come in many different shapes and sizes. These include hybrid programs, which are a blend of campus-based and distance learning courses, fully online programs, accelerated online options and even joint degree programs. Most online information technology degree programs also use an interactive learning management system that allows you to submit assignments, ask questions and have discussions with other students.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="last">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">                    <!-- option -->
                        <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                            <div class="card-header" id="hh">
                                Branch related course
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>
                                        <a href="https://www.google.com" target="_blank">
                                            <h5 class="card-title">course 1</h5>
                                        </a>                   
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <h5 class="card-title">course 2</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <h5 class="card-title">course 3</h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <h5 class="card-title">course 4</h5>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                            <div class="card-header" id="hh">External Resources</div>
                            <div class="card-body">
                                <ol>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=uxfTmqyeiro" target="self">
                                            <h5 class="card-title">
                                                Why study Information Technology
                                            </h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=2WB6RcY0MPc" target="self">
                                            <h5 class="card-title">
                                                Things to know before venturing into it
                                            </h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=D4AnFvwJ-eA" target="self">
                                            <h5 class="card-title">
                                                What is Information Technology?
                                            </h5>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/watch?v=QwNgzAgm6hY" target="self">
                                            <h5 class="card-title">
                                                IT in general
                                            </h5>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--Closing IT section-->


      <!--Business Administration Section-->
      <section id="2">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">BUSINESS ADMINISTRATION</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofhardware2">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      <em>Bachelor of Business Administration (BBA) degree</em> is designed to provide in-depth knowledge of a wide-range of aspects related to business operations. The program's core curriculum typically covers topics, such as accounting, marketing, finance, and more. The degree degree can take up to four years or more to cover at a traditional college, but can be earned much faster in an accelerated program. As a graduate, you could possess critical thinking skills and practical knowledge of one or more areas of specialty. The program aims to provide you with an opportunity to learn from instructors with extensive experience in business administration. Additionally, the course gives you a chance to connect with like-minded individuals from various walks of life.
                    </p>
                    <h4>Career Objectives</h4>
                    <p>
                      Enrolling in the BBA program you can learn more about business theory and its real-world applications. In the end, you could gain an understanding of various aspects of business administration, including:
                    </p>
                    <ul>
                      <li>Developing strategic plans using marketing information</li>
                      <li>Understand the role of information technology systems (IT) in supporting business operations</li>
                      <li>Learn how to solve organizational problems using human resources and management principles</li>
                      <li>Understand how to use data tools to gather business intelligence. Proceed to use the information to make key operational decisions</li>
                      <li>Learn to apply critical thinking concepts</li>
                      <li>Develop the ability to apply financial management principles to ensure viability</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Complimentary Cerfifications
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.google.com" target="_blank">
                          <h5 class="card-title">course 1</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 2</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 3</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 4</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.youtube.com/watch?v=T46zV_k4Ato" target="self">
                          <h5 class="card-title">
                            What are the benefits of studying Business Administration
                          </h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/watch?v=UtbfATNSePk" target="self">
                          <h5 class="card-title">What is Business Administration</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/watch?v=jMIa9SJiFb8" target="self">
                          <h5 class="card-title">Complete Career Guide and Career Insight</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/watch?v=O0-jJJF6WBo" target="self">
                          <h5 class="card-title">Thoughts On a Business Administration Degree</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing BA section-->

      
      <!--Geospatial section-->
      <section id="3">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">LAND SURVEY</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofhardware3">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      <em> Bachelor of Business Administration (BBA) degree </em> The Geospatial Sciences (Building Information Modelling) MSc teaches students the theory, tools and techniques for working with geospatial data, from acquisition to processing to analysis. Students have the opportunity to engage and work with academics and industrial partners on cutting-edge research through seminars and a dissertation. The specialist Building Information Modelling (BIM) programme will educate students in the geometric and semantic aspects of BIM and the integrated management of geospatial and BIM-related data. This includes principles of surveying, 3D reality capture, a general overview of technologies related to mapping sciences, geo-information science and 3D geometric modelling.
                      <br />
                      <strong>Careers</strong>
                      <br />
                      Students graduating with a degree in Geospatial Sciences (Building Information Modelling) will be equipped for a diverse range of roles, including BIM or surveying manager, geospatial data scientist, geospatial software developer and consultant. Graduates go on to work for a variety of organisations including major infrastructure projects, engineering consultancies, geospatial software companies and national mapping agencies. Our students establish strong links with industry through the industrial seminar series and industrial research projects. Additionally, many graduates from our programmes go on to PhD research at UCL or elsewhere.
                      <br />
                      <strong>Employability</strong>
                      <br />
                      Students will gain a range of technical skills in geospatial science that are highly valued by employers, including the use of specialist software for surveying, Reality Capture, BIM and GIS (e.g. Cyclone, PhotoScan, Revit, QGIS, FME); programming, web and software development (e.g. Python, R, MATLAB); geospatial data processing and management; geospatial data visualisation and analysis.
                    </p>
                    <h4>Career Objectives</h4>
                    <p>
                      The areas in which the knowledge and technology of Surveyin are today applied include:
                    </p>
                    <ul>
                      <li>
                        Precise determination of the figure of the earth and of other planets in the solar system
                      </li>
                      <li>Measurement and mapping of topography</li>
                      <li>
                        Measurement and determination of orbits of artificial satellites
                      </li>
                      <li>
                        Measurement and determination of the dynamics of the earths crust
                      </li>
                      <li>
                        Determination and analysis of the earths gravity field
                      </li>
                      <li>
                        Precise positioning on, or near, the earths surface using both terrestrial and satellite technology techniques
                      </li>
                      <li>
                        Navigation and guidance of craft using satellite and inertial navigation systems technology
                      </li>
                      <li>
                        Vehicle tracking and intelligent transport systems (ITS)
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem" >
                  <div class="card-header" id="hh">
                    Complimentary Cerfifications
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.google.com" target="_blank">
                          <h5 class="card-title">course 1</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 2</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 3</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 4</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem" >
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.youtube.com/watch?v=Zgsi2bTKEV8" target="self" ><h5 class="card-title">
                            Geospatial Information Career Video
                          </h5></a>
                      </li>
                      <li>
                        <ahref= href="https://www.youtube.com/watch?v=pHr1uDXlQtM" target="self" ><h5 class="card-title">
                            What is Geospatial Engineering
                          </h5></a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/watch?v=krQmas719fg" target="self"><h5 class="card-title">
                            Complete Career Guide and Career Insight
                          </h5></a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing LA section-->
  

      <!--Accounting section-->
      <section id="4">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">ACCOUNTING</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofhardware4">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN ACCOUNTING CAREER ENTAIL?</h4>
                    <p class="card-text">
                      An accounting course will teach, besides accounting focused subjects, business mathematics, management theory and business economics and law. An accounting graduate will be able to work in different fields of accounting such as managerial accounting, financial accounting, taxation and auditing. A Bachelor in accounting provides an understanding of perspectives that form the context for business and financial management. It is a rigorous programme that prepares students for profesional accountancy roles and business & public sector management roles.
                    </p>
                    <p>
                      It includes a strong international element and considers the essential, underlying theory and concepts that are involved in the accounting sector on a global level, exploring accounting procedures in organizations around the world. As the world's economy keep growing there wil be an ever-increasing need for quality accounting and auditing of private sector and public sector institutions and their activities, with this you are assured of the many opportunities you are going to have once you complete your learning.
                    </p>
                    <p>
                      The aim of the Bachelor of Science in Accounting is to prepare students for entry into a variety of fields in accountancy, including corporate accounting, accounting information systems, and governmental accounting. Graduates will gain detailed knowledge of financial accounting and financial reporting.
                    </p>
                    <p>
                      If you are planning for to pursue a course in accounting it as advisable to consider to pertaking the accounting certifications which increases your career opportunities, qualifies you for more positions and also increase your earing potential. If you consider obtaining an accounting certification, expoloring some of the more popular ones can help you determine which is the best fit for you.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div
                  class="card text-white mb-3"
                  id="third"
                  style="max-width: 35rem"
                >
                  <div class="card-header" id="hh">
                    Complimentary Cerfifications
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.google.com" target="_blank">
                          <h5 class="card-title">course 1</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 2</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 3</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 4</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="card text-white mb-3"
                  id="third"
                  style="max-width: 35rem"
                >
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href=""
                          ><h5 class="card-title">www.accountingcoach.com</h5></a
                        >
                      </li>
                      <li>
                        <a href=""
                          ><h5 class="card-title">www.accaglobal.com</h5></a
                        >
                      </li>
                      <li>
                        <a href=""
                          ><h5 class="card-title">
                            www.onlineaccountreading.blogspot.com
                          </h5></a
                        >
                      </li>
                      <li>
                        <a href=""
                          ><h5 class="card-title">
                            www.corporatefinanceinsitute.com
                          </h5></a
                        >
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--End of accounting section-->
  

      <!--Mechatronic section-->
      <section id="5">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS:
                    <span id="specific">MECHATRONICS ENGINEERING</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofhardware5">0</span>%</div>
                    <h4 class="card-title">WHAT IS IT ABOUT ENGINEERING?</h4>
                    <p class="card-text">
                      Engineering is the application of science and maths to solve problems. Engineers figure out how things work and use for scientific discoveries. Scientists and inventors often get credit for innovations that advance human condition, but it is the engineers who are instrumental in making these innovatons available to the global population. Engineering is one of the corner stones of STEM(science, technology, engineering, mathematics) education, an interdisciplinary curriculum designed to motivate students to learn about the evolving world. A career in engineering requires continual professional development to remain relevant and effective in today's rapidly changing global society. There are currently more than 15 million engineers across various disciplines worldwide and with the surge in technological advancements and preparedness, anyone can be a part of it.
                    </p>
                    <p>
                      Engineering spreads over multiple fields such as bio-engineering to the more common mechanical engineering courses. Engineering is a hands-on course that relies more on practicality and not theory based studies. However, engineering optons such as software engineering offer the rare pleasure of being a mind based field where traditional college institutions as well as highly-acclaimed online programmes strive to provide high grade content and knowledge. All is not lost though, since engineering favours both the active and passive. An engineering degree takes upto tho 5 years to acquire whereas the masters and PhDs take 2 years each.
                    </p>
                    <p>
                      To successfully design and engineer solutions for today's and tomorrow's rapidly changing and expanding global contexts, in which people are confronted with new opportunities and challenges each day, engineering programs should be training their students to become broad based professionals, who are aware of the actual needs, values and behaviors of the people that use their solutions in their everyday life, work or play. This paper argues that in order to built such an awareness, engineering students should acquire direct, first-hand experiences of real people in real contexts. It presents a number of techniques that can be used to gain such experiences.
                    </p>
                    <p>
                      Engineering opens a learner up to greater heights with the right skills and mindset. It is important to point out that engieering experiences an influx of aspiring students each and every year making it a highly competitive field where the resilient and committed survive to emerge on top. However, don not forget to have fun while you are at it. The field enables you to interact with new technology and people with various banks of knowledge to offer in your journey from an amateur aspirant to a fully-fledged engineer and put you well above most in the job market, let alone equip you with skills to solve some of the world's problems.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div
                  class="card text-white mb-3"
                  id="third"
                  style="max-width: 35rem"
                >
                  <div class="card-header" id="hh">
                    Complimentary Cerfifications
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.google.com" target="_blank">
                          <h5 class="card-title">course 1</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 2</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 3</h5>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <h5 class="card-title">course 4</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="card text-white mb-3"
                  id="third"
                  style="max-width: 35rem"
                >
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a
                          href="https://www.youtube.com/channel/UCaC97sX6xzQKvPLkZ9AbC-A"
                          target="_blank"
                        >
                          <h5 class="card-title">Engineering Today</h5>
                        </a>
                      </li>
                      <li>
                        <a
                          href="https://ebk.or.ke/accredited-engineering-programs/"
                          target="_blank"
                        >
                          <h5 class="card-title">Accredited Programs</h5>
                        </a>
                      </li>
                      <li>
                        <a
                          href="https://news.mit.edu/school/engineering"
                          target="_blank"
                        >
                          <h5 class="card-title">Explore Inventions</h5>
                        </a>
                      </li>
                      <li>
                        <a
                          href="https://students.kuccps.net/programmes/search/?group=cert_eng"
                          target="_blank"
                        >
                          <h5 class="card-title">Placement</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--End of Mechatronic section-->
  

      <!--WD section-->
      <section id="6">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Fullstack development</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware1">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      <B>Increased demand</B><br>
                      The demand for full-stack developers has been growing at a rate of 35% per year since 2015. The US Bureau of Labor Statistics predicts that the number of jobs for full-stack developers will increase from 135,000 to over 853,000 by 2024.
                    </p>
                    <p>
                      <B>Integration of Artificial Intelligence and Machine Learning</B>
                      The integration of AI and machine learning technologies into web applications is on the rise. Businesses are leveraging AI-powered chatbots, recommendation systems, and data analytics to enhance user experiences. Full stack developers who possess skills in integrating AI and machine learning into web applications will be in high demand as companies seek to harness the power of these technologies to stay competitive.
                    </p>
                    <p>
                      1. Front-End Development (Average Salary: 4-7 LPA)
                      Full stack developers are responsible for creating user interfaces and ensuring seamless user experiences. They use HTML, CSS, and JavaScript to design visually appealing and responsive web pages.
                      <BR>2. Back-End Development (Average Salary: 5-8 LPA)
                      They handle server-side programming and database management to ensure the smooth functioning of web applications.
                      <BR>3. Database Management (Average Salary: 4-7 LPA)
                      Full stack developers design, implement, and optimize databases to store and retrieve data efficiently.
                      <BR>4. API Integration (Average Salary: 5-9 LPA)
                      They integrate APIs (Application Programming Interfaces) to connect different software systems and enable data exchange.
                      <BR>5. Version Control (Average Salary: 4-7 LPA)
                      Full stack developers use version control systems like Git to track changes in code and collaborate with other team members effectively.
                      <BR>6. Security Implementation (Average Salary: 5-8 LPA)
                      Full stack developers implement security measures to protect web applications from potential cyber threats and data breaches.
                      <BR>7. Collaboration with Designers (Average Salary: 4-7 LPA)
                      They collaborate with UI/UX designers to bring visually appealing designs to life and ensure a seamless user interface.
                      pamphlets, placards, cookbooks, etc.
                    </p>
                    <P>
                      <B>Top 3 Skills for Future Full Stack Developers</B>
                      1. Cross-Platform Development Skills<BR>
                      2. Cloud Computing Expertise<BR>
                      3. Data Security and Privacy Knowledge<BR>
                    </P>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.guvi.in/zen-class/java-full-stack-development-course/?utm_source=blog&utm_medium=zen_carousal&utm_campaign=the-future-scope-of-full-stack-developers-in-india&utm_content=full-stack-development&_gl=1*bs2oz5*_gcl_au*MTA3Mjc0NTg2Ny4xNzM2NDg5Mzcz" target="_blank">
                          <h5 class="card-title">Java full stack development course</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="https://www.guvi.in/zen-class/mern-full-stack-development-course-august/?utm_source=blog&utm_medium=zen_carousal&utm_campaign=the-future-scope-of-full-stack-developers-in-india&utm_content=full-stack-development&_gl=1*kuxbym*_gcl_au*MTA3Mjc0NTg2Ny4xNzM2NDg5Mzcz" target="_blank">
                          <h5 class="card-title">MERN full stack developer course free</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.udemy.com/topic/full-stack-web-development/" target="_blank">
                          <h5 class="card-title">Udemy full stack developer course</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.guvi.in/blog/the-future-scope-of-full-stack-developers-in-india/" target="self">
                          <h5 class="card-title">Guvi Blog</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing wd section-->
  

      <!--AI section-->
      <section id="7">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Artificial intelligence</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware2">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p>
                      The field of Artificial Intelligence (AI) has witnessed remarkable growth over the past decade, transforming industries and creating new career opportunities. As organizations increasingly adopt AI technologies, the demand for skilled professionals in this domain is expected to surge. According to the U.S. Bureau of Labor Statistics, employment in AI-related fields is projected to grow by 31% from 2019 to 2029, significantly faster than the average for all occupations.
                    </p>
                    <p>
                      Artificial intelligence (AI) is a promising career path with a high demand for qualified professionals. The field offers many opportunities for growth and flexibility, and the skills you learn can be applied across many industries.
                    </p>
                    <p class="card-text">
                      AI roles can command high salaries, averaging over $100,000. The median salary for an AI researcher is $128,560, according to April 2024 Payscale data
                    </p>
                    <p>
                      AI is everywhere around us, and its capabilities are sought-after by almost every industry. It's no surprise, therefore, that research from Gartner suggests that the demand for workers with specialist AI skills and machine learning knowledge tripled between 2015 and 2019.  
                    </p>
                    <p>
                      <b>Whatever Artificial Intelligence career you're looking to pursue developing a strong knowledge of programming languages is a key skill that you need to harness.</b>
                      <br>Machine learning engineer
                      <br>Algorithm developer
                      <br>Computer vision engineer
                      <br>SLAM engineer
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://youtu.be/mEsleV16qdo?si=klooa3ALofMYkx1Y" target="_blank">
                          <h5 class="card-title">FreeCodeCamp</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="https://pll.harvard.edu/catalog?keywords=ai&url=" target="_blank">
                          <h5 class="card-title">HARDWARD University</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.coursera.org/in/articles/artificial-intelligence-jobs" target="self">
                          <h5 class="card-title">Coursera blog</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://youtu.be/aPObz17OyH8?si=Z7lWggAMngCzW2KW" target="self">
                          <h5 class="card-title">AI Career Opportunities | Career in AI with Salaries</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing AI section-->
  

      <!--DS section-->
      <section id="8">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Data science</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware3">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      Data scientists and analysts are predicted to be highly sought after professionals. Emphasis on the importance of skills in AI, ML, and big data technologies. Continuous learning and experience are crucial for career advancement in data science. Enhancing skills can lead to better earning potential. Data science offers significant career opportunities across various industries.
                      Healthcare, Finance, Technology, Research Methodology, Machine learning, Data privacy, and so on.
                    </p>
                    <p>
                      <b>What are the most important skills for a data scientist?</b>
                      <br>1. Programming:- Programming languages, such as Python, R, SAS, and SQL, are necessary for data scientists to sort, analyze, and manage large amounts of data.                    
                      <br>2. Data Analysis and Data Visualization:- Data scientist must have the strong skills of Data analysis and visualization techniques. 
                      <br>3. Machine learning and deep learning:- This role is generally focused on algorithms and data sets, and this profession is directly linked to machine learning science.
                      <br>4. Big Data Technology:- If you have practical data visualization skills, you can use Seaborn, Tableau, and Matplotlib tools to help your business become more effective. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://youtu.be/ua-CiDNNj30?si=1Wpa9rLXS6G9MzkV" target="_blank">
                          <h5 class="card-title">Learn Data Science for Beginners</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="https://www.udemy.com/course/data-science-real-world-projects-in-python-x/?couponCode=IND21PM" target="_blank">
                          <h5 class="card-title">Data Science Real World Projects in Python</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.geeksforgeeks.org/courses/data-science-live?utm_campaign=405_10_best_data_science_courses_online_2024&utm_medium=gfgcontent_cp&utm_source=geeksforgeeks" target="_blank">
                          <h5 class="card-title">Complete Machine Learning & Data Science Program</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://youtu.be/VGhZ4f2UggM?si=-sNFPOWlyoV3eZ34" target="self">
                          <h5 class="card-title">What is Data Science? Complete Roadmap</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.birchwoodu.org/what-is-the-future-of-a-data-science-career/#:~:text=Likewise%2C%20the%20future%20of%20data,edge%20through%20data%2Ddriven%20strategies." target="self">
                          <h5 class="card-title">Birchwoodu University Blog</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--End of DS section-->
  

      <!--CC section-->
      <section id="9">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Cloud computing</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware4">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      According to current trends, the future of the cloud computing job field looks very promising, with high demand for skilled professionals due to the rapid adoption of cloud technologies across industries, constant innovation in areas like edge computing, AI/ML integration, and quantum computing, leading to a dynamic and future-proof career path with competitive salaries and diverse roles across various sectors
                    </p>
                    <p>
                      <b>Cloud computing job outlook</b>
                      <br>Cloud computing is a fast-growing field. According to Grand View Research, the cloud computing market was estimated at $602.31 billion in 2023, with a CAGR of 21.2 percent from 2024 to 2030 [1]. This quick growth indicates the field can expect similarly positive growth in the coming years
                    </p>
                    <p>The future of cloud computing is poised to undergo transformative changes in the coming years. As a veteran in the IT industry, I have seen the initial growth phase of cloud technology, and the forthcoming developments are both exciting and significant.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://attariclasses.in/microsoft-azure-certification-training-online?utm_source=google&utm_medium=cpc&utm_campaign=azure-Stan&utm_term=cloud%20training&gad_source=2&gclid=Cj0KCQiAyoi8BhDvARIsAO_CDsAi1iFV4waK4-ma7hwzYdxHOofgmC0uidQBB-T-KTeFmugGO_jJJ2gaAoy8EALw_wcB" target="_blank">
                          <h5 class="card-title">Attari Classes</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="https://www.upgrad.com/professional-certificate-in-cloud-computing-and-devops-program/?utm_source=GOOGLE&utm_medium=PMAX&utm_campaign=IND_ACQ_WEB_GOOGLE_PMAX_TV_UPG_PCPCCD_T1&utm_content=Cloud_PAID&gad_source=2&gclid=Cj0KCQiAyoi8BhDvARIsAO_CDsDWMRo6cuT-gXUbo74Uwuc4mwKcKgDsrY7v2eU61a9xKexN6JOBk3oaAi8cEALw_wcB" target="_blank">
                          <h5 class="card-title">upGard</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.coursera.org/articles/cloud-computing-career-path" target="self">
                          <h5 class="card-title">coursera blog</h5>
                        </a>
                      </li>
                      <li>
                        <a href=https://youtu.be/70oYrSnRgoI?si=WHrMIYlByDfsGGrd" target="self">
                          <h5 class="card-title">Cloud Computing RoadMap </h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--End of CC section-->
  

      <!--Home GD section-->
      <section id="10">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Game development</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware5">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      The future of the Game Development job field is incredibly promising, driven by the rapid growth of the gaming industry. With advancements in technology, the demand for skilled game developers is expected to rise significantly.
                    </p>
                    <p>
                      As gaming becomes more mainstream, opportunities are expanding beyond traditional gaming companies. Industries such as education, healthcare, and marketing are increasingly utilizing gamification techniques to engage users and enhance learning experiences.
                    </p>
                    <p>
                      Emerging technologies like virtual reality (VR) and augmented reality (AR) are reshaping the gaming landscape. Developers with expertise in these areas will be in high demand as companies seek to create immersive experiences that captivate players.
                    </p>
                    <p>
                      Additionally, the rise of mobile gaming continues to create a wealth of opportunities. With millions of users worldwide, mobile game development is a lucrative field, requiring developers to adapt to different platforms and devices.
                    </p>
                    <p>
                      The integration of artificial intelligence (AI) in games is another trend that is set to grow. AI can enhance gameplay by creating more realistic and responsive environments, leading to a need for developers who understand AI programming and implementation.
                    </p>
                    <p>
                      Furthermore, the eSports industry is booming, with competitive gaming gaining massive popularity. This growth opens up various career paths, including game design, event management, and marketing, specifically tailored to the eSports sector.
                    </p>
                    <p>
                      As the gaming community becomes more diverse, there is a growing emphasis on inclusive game design. Developers who can create games that cater to a wide range of audiences, including underrepresented groups, will find themselves at a competitive advantage.
                    </p>
                    <p>
                      Continuous learning and skill development are crucial in this fast-paced industry. Game developers should stay updated with the latest tools, programming languages, and design principles to remain relevant in the job market.
                    </p>
                    <p>
                      Networking within the gaming community is also essential. Attending industry events, participating in game jams, and engaging with online forums can help developers build connections and discover job opportunities.
                    </p>
                    <p>
                      In conclusion, the future of the Game Development job field is bright, with numerous opportunities for growth and innovation. Aspiring developers should focus on honing their skills, embracing new technologies, and understanding market trends to thrive in this dynamic industry.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.backstagepass.co.in/courses/bachelors-in-computer-science-and-game-development/#Course-Overview" target="_blank">
                          <h5 class="card-title">Bachelor's in Computer Science & Game Development</h5>
                        </a>                   
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.geeksforgeeks.org/top-game-development-trends/" target="self">
                          <h5 class="card-title">Geeksforgeeks</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://youtu.be/qPxvmrtTQ_4?si=Ar7EgQQtK5tb3v6Z" target="self">
                          <h5 class="card-title"> Roadmap for Game Development</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing GD section-->
  

      <!--Home AUTOMATION section-->
      <section id="11">
        <section class="courses">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" id="start">
                      <div class="card-header">
                        COURSE DETAILS: <span id="specific">Automation</span>
                      </div>
                      <div class="card-body">
                        <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware6">0</span>%</div>
                        <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                        <br><b>The Future of Automation in Computer Engineering</b><br>
                        Automation is rapidly transforming the landscape of computer engineering, creating a wealth of opportunities for professionals in the field. As industries increasingly adopt automated systems, the demand for skilled engineers who can design, implement, and maintain these technologies is on the rise. This blog explores the future job requirements in the automation branch of computer engineering, as well as the growth trends that have shaped this dynamic field.
                        <br><b>Past Growth in Automation</b><br>
                        Historically, automation has played a crucial role in enhancing productivity and efficiency across various sectors. The introduction of programmable logic controllers (PLCs) in the 1960s marked a significant milestone, allowing engineers to automate complex processes in manufacturing. Over the decades, advancements in robotics, artificial intelligence (AI), and machine learning have further propelled the automation industry, leading to increased adoption in sectors such as automotive, healthcare, and logistics.
                        The past decade has witnessed a surge in automation technologies, driven by the need for cost reduction and improved operational efficiency. According to a report by McKinsey, automation could raise productivity growth globally by 0.8 to 1.4 percent annually. This growth has resulted in a significant shift in job roles, with many traditional positions evolving to require a blend of technical and analytical skills.
                        <br><b>Future Job Requirements</b><br>
                        As we look to the future, the job requirements in the automation branch of computer engineering are expected to evolve significantly. Here are some key skills and qualifications that will be essential for aspiring professionals:
                        <br>1. Programming Proficiency:- Knowledge of programming languages such as Python, C++, and Java will be crucial for developing automation scripts and software.
                        <br>2. Understanding of AI and Machine Learning:- Familiarity with AI algorithms and machine learning techniques will enable engineers to create intelligent automation systems that can learn and adapt over time.
                        <br>3. Robotics Knowledge:- A solid understanding of robotics, including sensor integration and control systems, will be vital for designing automated solutions in various industries.
                        <br>4. Data Analysis Skills:- The ability to analyze large datasets and derive actionable insights will be essential for optimizing automated processes and improving decision-making.
                        <br>5. Cybersecurity Awareness:- As automation systems become more interconnected, knowledge of cybersecurity principles will be critical to protect against potential threats and vulnerabilities.
                        <br>6. Project Management:- Strong project management skills will be necessary to oversee automation projects from conception to implementation, ensuring they are completed on time and within budget.
                        <br><b>The Future Landscape</b>                      
                        The future of automation in computer engineering looks promising, with projections indicating continued growth in the sector. According to the World Economic Forum, automation could create 133 million new jobs globally by 2022, while displacing 75 million existing roles. This shift will require professionals to adapt and upskill to remain competitive in the job market
                        <br>In conclusion, the automation branch of computer engineering is poised for significant growth, driven by technological advancements and the increasing demand for efficiency across industries. By acquiring the necessary skills and staying abreast of industry trends, aspiring engineers can position themselves for success in this exciting and evolving field.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section class="last">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">
                        Courses
                      </div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://youtu.be/iLo2aBw0AV8?si=zZvv41qC5EuBTS0x" target="_blank">
                              <h5 class="card-title">Automation Free Course For Beginners</h5>
                            </a>                   
                          </li>
                          <li>
                            <a href="https://youtu.be/yh2Rd8To58s?si=G9VYfhMDrujPcRg4" target="_blank">
                              <h5 class="card-title">Automation with AI</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.udemy.com/course/selenium-automation-testing-for-beginners/" target="_blank">
                              <h5 class="card-title">Selenium Automation Testing for Beginners</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">External Resources</div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://youtu.be/U-Y1eNF2PlA?si=wIQhgnbRTxWRxEgB" target="self">
                              <h5 class="card-title">Roadmap for Automation Tester</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.guvi.in/blog/the-future-scope-of-automation-testing/" target="self">
                              <h5 class="card-title">Guvi blog</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
      </section>
      <!--Closing AUTOMATION section-->
  

      <!--Home DM section-->
      <section id="12">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Data mining</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware7">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      Data mining is a rapidly evolving field within computer engineering, driven by the increasing need for organizations to extract valuable insights from vast amounts of data. As businesses continue to generate and collect data at an unprecedented rate, the demand for skilled data mining professionals is expected to grow significantly.
                    </p>
                    <p>
                      <b>Past Growth in Data Mining</b><br>
                      Over the past decade, data mining has transformed from a niche area of expertise into a critical component of business strategy. The rise of big data technologies and advancements in machine learning have enabled organizations to analyze complex datasets more effectively. This growth has led to the emergence of various roles, including data analysts, data scientists, and machine learning engineers, all of which require a solid understanding of data mining techniques.
                    </p>
                    <p>
                      <b>Future Job Requirements</b><br>
                      As the field of data mining continues to expand, several key skills and qualifications will be essential for aspiring professionals:
                    </p>
                    <ul>
                      <li><b>Programming Skills:</b> Proficiency in programming languages such as Python, R, and SQL is crucial for developing data mining algorithms and processing large datasets.</li>
                      <li><b>Statistical Analysis:</b> A strong foundation in statistics is necessary to interpret data accurately and make informed decisions based on the findings.</li>
                      <li><b>Machine Learning Knowledge:</b> Familiarity with machine learning techniques will enable data miners to build predictive models and improve data-driven decision-making.</li>
                      <li><b>Data Visualization:</b> The ability to present data insights through effective visualization tools is essential for communicating findings to stakeholders.</li>
                      <li><b>Domain Expertise:</b> Understanding the specific industry in which one works can enhance the relevance and applicability of data mining efforts.</li>
                    </ul>
                    <p>
                      <b>The Future Landscape</b><br>
                      The future of data mining looks promising, with projections indicating continued growth in job opportunities. According to industry reports, the demand for data professionals is expected to increase by over 28% in the next five years. As organizations increasingly rely on data-driven strategies, professionals who can effectively mine and analyze data will be at the forefront of this transformation.
                    </p>
                    <p>
                      In conclusion, data mining is a dynamic and essential branch of computer engineering. By acquiring the necessary skills and staying updated with industry trends, aspiring data miners can position themselves for success in this exciting and evolving field.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://www.udemy.com/course/datascience/?utm_source=adwords&utm_medium=udemyads&utm_campaign=Search_Keyword_Beta_Prof_la.DE_cc.ROW-German&campaigntype=Search&portfolio=ROW-German&language=DE&product=Course&test=&audience=Keyword&topic=DataMining&priority=Beta&utm_content=deal4584&utm_term=_._ag_165153686139_._ad_706237975911_._kw_data+mining+kurs_._de_c_._dm__._pl__._ti_kwd-1930138217024_._li_9303312_._pd__._&matchtype=b&gad_source=1&gclid=Cj0KCQiAyoi8BhDvARIsAO_CDsCC18nBYjFrVm76pNN6UlAQei5nuADQhssePYj86CM5lXL5pPxiY2AaAhJVEALw_wcB&couponCode=IND21PM" target="_blank">
                          <h5 class="card-title">Data Science A-Z: Hands-On Exercises & ChatGPT Prize</h5>
                        </a>                   
                      </li>
                      <li>
                        <a href="https://www.udemy.com/course/data-mining/?utm_source=adwords&utm_medium=udemyads&utm_campaign=Search_DSA_GammaCatchall_NonP_la.EN_cc.India&campaigntype=Search&portfolio=India&language=EN&product=Course&test=&audience=DSA&topic=&priority=Gamma&utm_content=deal4584&utm_term=_._ag_166578677881_._ad_700948726517_._kw__._de_c_._dm__._pl__._ti_dsa-1456167871416_._li_9303312_._pd__._&matchtype=&gad_source=2&gclid=Cj0KCQiAyoi8BhDvARIsAO_CDsBPot4TmQFzHM3203fg4lE9SWSuSKSWFI2ftoXFMaxCUUBCq1NkIncaAs3eEALw_wcB&couponCode=IND21PM" target="_blank">
                          <h5 class="card-title">Data Mining</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://youtu.be/7rs0i-9nOjo?si=_-KpL5IlUy6FbDZ5" target="self">
                          <h5 class="card-title">What is Data Mining? (IBM)</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.naukri.com/code360/library/scope-of-data-mining" target="self">
                          <h5 class="card-title">code360</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing DM section-->
  

      <!--Home CS section-->
      <section id="13">
        <section class="courses">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" id="start">
                      <div class="card-header">
                        COURSE DETAILS: <span id="specific">Cyber security</span>
                      </div>
                      <div class="card-body">
                        <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware8">0</span>%</div>
                        <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                        <p class="card-text">
                          Cybersecurity is an increasingly vital field within computer engineering, driven by the growing need to protect sensitive information and systems from cyber threats. As technology evolves, so do the tactics employed by cybercriminals, making cybersecurity professionals essential in safeguarding data integrity and privacy.
                        </p>
                        <p>
                          The past decade has seen significant growth in the cybersecurity sector, largely due to the rise in data breaches and cyberattacks. Organizations across all industries have recognized the importance of investing in robust cybersecurity measures to protect their assets. According to a report by Cybersecurity Ventures, global spending on cybersecurity is expected to exceed $1 trillion from 2017 to 2021, highlighting the increasing demand for skilled professionals in this field.
                        </p>
                        <p>
                          As we look to the future, the job requirements in the cybersecurity branch of computer engineering are expected to evolve significantly. Here are some key skills and qualifications that will be essential for aspiring professionals:
                        </p>
                        <ul>
                          <li><b>Technical Proficiency:</b> A strong foundation in networking, operating systems, and programming languages is crucial for understanding how to protect systems from vulnerabilities.</li>
                          <li><b>Knowledge of Security Protocols:</b> Familiarity with security protocols, encryption methods, and firewalls will be essential for implementing effective security measures.</li>
                          <li><b>Incident Response Skills:</b> The ability to respond quickly and effectively to security breaches is critical. Professionals must be trained in incident response planning and execution.</li>
                          <li><b>Risk Assessment:</b> Understanding how to assess and manage risks associated with cybersecurity threats will be vital for developing comprehensive security strategies.</li>
                          <li><b>Continuous Learning:</b> The cybersecurity landscape is constantly changing, so professionals must stay updated on the latest threats, technologies, and best practices through ongoing education and training.</li>
                        </ul>
                        <p>
                          The future of cybersecurity looks promising, with projections indicating continued growth in job opportunities. According to the U.S. Bureau of Labor Statistics, employment in the cybersecurity field is expected to grow by 31% from 2019 to 2029, much faster than the average for all occupations. This growth is driven by the increasing reliance on technology and the need for organizations to protect their data from evolving cyber threats.
                        </p>
                        <p>
                          In conclusion, the cybersecurity branch of computer engineering is poised for significant growth, driven by technological advancements and the increasing demand for data protection. By acquiring the necessary skills and staying abreast of industry trends, aspiring cybersecurity professionals can position themselves for success in this dynamic and essential field.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section class="last">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">
                        Courses
                      </div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://www.youtube.com/live/lpa8uy4DyMo?si=nj7U8SNAbuEsL7af" target="_blank">
                              <h5 class="card-title">Cyber Security Training For Beginners</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://www.udemy.com/topic/cyber-security/?utm_source=adwords&utm_medium=udemyads&utm_campaign=Search_DSA_Gamma_NonP_la.EN_cc.India&campaigntype=Search&portfolio=India&language=EN&product=Course&test=&audience=DSA&topic=&priority=Gamma&utm_content=deal4584&utm_term=_._ag_160270536905_._ad_696202838553_._kw__._de_c_._dm__._pl__._ti_dsa-1677053913968_._li_9303312_._pd__._&matchtype=&gad_source=2&gclid=Cj0KCQiAyoi8BhDvARIsAO_CDsCozKw5n1XWDDpdpXaQuTzpC8ywXCvtBCngCrGPAxNvWnhmtuHoXukaAvqUEALw_wcB" target="_blank">
                              <h5 class="card-title">Cybersecurity Courses</h5>
                            </a>                   
                          </li>
                          <li>
                            <a href="https://youtu.be/hXSFdwIOfnE?si=D27RDDTVzgb1lXa0" target="_blank">
                              <h5 class="card-title">Cyber Security Course Training For Beginners (Simplilearn)</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">External Resources</div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://youtu.be/vK4Mno4QYqk?si=jTdRnqva4t2h9oQ4" target="self">
                              <h5 class="card-title">CYBERSECURITY RoadMap</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://youtu.be/jtFUs_BGsH8?si=kDMRl6pe2fWfNQ9S" target="self">
                              <h5 class="card-title">Future of Cyber Security</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://blog.networkbulls.com/future-scope-of-cyber-security-and-job-opportunities" target="self">
                              <h5 class="card-title">Future Scope of Cyber Security and Job Opportunities in India - 2024</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
      </section>
      <!--Closing CS section-->
  

      <!--Home DS section-->
      <section id="14">
        <section class="courses">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card" id="start">
                  <div class="card-header">
                    COURSE DETAILS: <span id="specific">Data scientist</span>
                  </div>
                  <div class="card-body">
                    <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware9">0</span>%</div>
                    <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                    <p class="card-text">
                      <b>Past Growth in Data Scientist Careers</b>
                      <br>Over the past decade, the field of Data Science has witnessed exponential growth. Initially, the role of a Data Scientist was often misunderstood, with many organizations viewing it as a niche position. However, as businesses began to recognize the value of data-driven decision-making, the demand for Data Scientists surged. According to a report by the U.S. Bureau of Labor Statistics, employment in this field has grown by over 30% since 2010, making it one of the fastest-growing job sectors.
                      <br>The rise of big data technologies and advancements in machine learning have played a significant role in this growth. Companies across various industries, from finance to healthcare, have started leveraging data analytics to gain insights and improve their operations. This shift has led to the emergence of various roles, including data analysts, machine learning engineers, and business intelligence specialists, all of which require a solid understanding of data science principles.
                    <p>
                      <b>Future Job Requirements for Data Scientists</b>
                      <br>As the field continues to evolve, the job requirements for Data Scientists are also changing. Here are some key skills and qualifications that will be essential for aspiring professionals:
                      <br>1. Programming Proficiency: Knowledge of programming languages such as Python, R, and SQL is crucial for developing data models and processing large datasets.
                      <br>2. Statistical Analysis: A strong foundation in statistics is necessary to interpret data accurately and make informed decisions based on the findings.
                      <br>3. Machine Learning Knowledge: Familiarity with machine learning algorithms will enable Data Scientists to build predictive models and improve data-driven decision-making.
                      <br>4. Data Visualization Skills: The ability to present data insights through effective visualization tools is essential for communicating findings to stakeholders.
                      <br>5. Domain Expertise: Understanding the specific industry in which one works can enhance the relevance and applicability of data science efforts.
                    </p>
                    <p>
                      <b>The Future Landscape</b>
                      <br>Looking ahead, the future of Data Scientist careers appears promising. Projections indicate that the demand for data professionals will continue to grow, with estimates suggesting a 28% increase in job opportunities over the next five years. As organizations increasingly rely on data-driven strategies, professionals who can effectively analyze and interpret data will be at the forefront of this transformation.
                      <br>In conclusion, the Data Scientist branch is poised for significant growth, driven by technological advancements and the increasing demand for data analysis. By acquiring the necessary skills and staying updated with industry trends, aspiring Data Scientists can position themselves for success in this dynamic and essential field.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="last">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">
                    Courses
                  </div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://intellipaat.com/?post_type=course&s=Data+scientist" target="_blank">
                          <h5 class="card-title">intellipaat</h5>
                        </a>                   
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                  <div class="card-header" id="hh">External Resources</div>
                  <div class="card-body">
                    <ol>
                      <li>
                        <a href="https://youtu.be/ax_NNtpSb0c?si=bGUH532drYMDV5U1" target="self">
                          <h5 class="card-title">Is Data Science a Good Career?</h5>
                        </a>
                      </li>
                      <li>
                        <a href="https://365datascience.com/career-advice/data-scientist-job-market/" target="self">
                          <h5 class="card-title">The Data Scientist Job Market in 2024</h5>
                        </a>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
      <!--Closing DS section-->
  

      <!--Home ML section-->
      <section id="15">
        <section class="courses">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card" id="start">
                      <div class="card-header">
                        COURSE DETAILS: <span id="specific">Machine learning</span>
                      </div>
                      <div class="card-body">
                        <div id="averageDisplay" class="average-display">according to the test results your skill in this field is :  <span id="Skillofsoftware10">0</span>%</div>
                        <h4 class="card-title">WHAT DOES AN IT CAREER ENTAIL?</h4>
                        <p class="card-text">
                          <b>The Future of Machine Learning: Growth and Job Requirements</b>
                          <br>Machine learning (ML) has emerged as a transformative force across various industries, revolutionizing how we analyze data and make decisions. Over the past decade, the field has witnessed exponential growth, driven by advancements in algorithms, increased computational power, and the availability of vast amounts of data. According to a report by the U.S. Bureau of Labor Statistics, employment in machine learning and related fields has grown by over 40% since 2015, making it one of the fastest-growing sectors in technology.
                          <br>The rise of big data has played a crucial role in this growth. Organizations are now collecting and storing more data than ever before, leading to a demand for professionals who can extract meaningful insights from this information. Machine learning enables businesses to automate processes, enhance customer experiences, and improve decision-making, making it an invaluable asset in today's data-driven world.
                        </p>
                        <p>
                          <br><b>As we look to the future, the job requirements in the machine learning branch are evolving. Here are some key skills and qualifications that aspiring professionals should focus on:</b>
                          <br>1. Programming Proficiency: Knowledge of programming languages such as Python, R, and Java is essential for developing machine learning models and algorithms.
                          <br>2. Statistical Analysis: A strong foundation in statistics is necessary to interpret data accurately and make informed decisions based on the findings.
                          <br>3. Machine Learning Algorithms: Familiarity with various machine learning algorithms, including supervised and unsupervised learning, is crucial for building effective models.
                          <br>4. Data Preprocessing: Understanding how to clean and preprocess data is vital for ensuring the accuracy and reliability of machine learning models.
                          <br>5. Deep Learning: Knowledge of deep learning frameworks such as TensorFlow and PyTorch is increasingly important as organizations seek to leverage neural networks for complex tasks.
                          <br>6. Domain Expertise: Understanding the specific industry in which one works can enhance the relevance and applicability of machine learning efforts.
                          <br>7. Continuous Learning: The machine learning landscape is constantly evolving, so professionals must stay updated on the latest trends, technologies, and best practices through ongoing education and training.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
        <section class="last">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">
                        Courses
                      </div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://youtu.be/NWONeJKn6kc?si=9ojirKmwwFUfaNsa" target="_blank">
                              <h5 class="card-title">Machine Learning Course for Beginners</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://youtu.be/i_LwzRVP7bg?si=VoWo7d52wivzuTwx" target="_blank">
                              <h5 class="card-title">Machine Learning for Everybody</h5>
                            </a>                   
                          </li>
                          <li>
                            <a href="https://youtu.be/GwIo3gDZCVQ?si=BAkjUn5YSQb7vNll" target="_blank">
                              <h5 class="card-title">Machine Learning Full Course</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card text-white mb-3" id="third" style="max-width: 35rem">
                      <div class="card-header" id="hh">External Resources</div>
                      <div class="card-body">
                        <ol>
                          <li>
                            <a href="https://youtu.be/7IgVGSaQPaw?si=NWN3ywxp4t3sSx1T" target="self">
                              <h5 class="card-title">The Complete Machine Learning Roadmap</h5>
                            </a>
                          </li>
                          <li>
                            <a href="https://intellipaat.com/blog/future-scope-of-machine-learning/" target="self">
                              <h5 class="card-title">Future Scope of Machine Learnin</h5>
                            </a>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
      </section>
      <!--Closing ML section-->



      <footer class="footer">
        <div class="container1">
          <div class="footer-logo">
            <h2>MyWebsite</h2>
          </div>
      
          <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Contact</a>
          </div>
      
          <!-- Social Media Icons -->
          <div class="social-icons">
            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></a>
          </div>

      
          <p class="footer-text">&copy; 2025 MyWebsite | All Rights Reserved</p>
          <button class="back-to-top" onclick="scrollToTop()">↑</button>
        </div>
      </footer>      




<!-- FontAwesome Icons (Add to your <head> or before closing-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="js/interest.js"></script>
</body>
</html>