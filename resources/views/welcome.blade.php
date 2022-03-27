@include("partials.head")
<title>Home</title>
<!--HOMEPAGE-->
<section id="home-page">
    <!--NAVBAR-->
    <nav class="navbar ">
        <div class="container">
            <a class="navbar-brand align-middle" href="/">
                dag's tech
            </a>
        </div>
    </nav>
    <h1>Choose us for your formation</h1>
    <a class="btn button btn-lg" href="#form">Sign Up</a>
    <ion-icon name="chevron-down-outline" class="down"></ion-icon>
</section>
<!--STORY-->
<section id="story">
  <h1>Our Story</h1>
  <div class="story-img-div">
  <img src="assets/img/skyscraper.jpg" alt="SkyScraper" class="story-img">
  </div>
  <p>Our company was founded in 2015 to meet people’s need to learn the skills they need to make a career in the web world. Our founder, teacher Morrison, has decades of experience in web development and web application management. Our goal, in addition to teaching skills, is to bring people together to help each other in their work.</p>
</section>
<!--EXPERIENCE-->
<section id="experience">
  <h1>An experience that changes your life</h1>
  <div class="list">
    <div class="list-item">
      <ion-icon name="laptop-outline" class="icon"></ion-icon> <p>Thanks to our courses, which will give you a solid foundation, you can aim for positions as a Junior Developer.</p>
    </div>
    <div class="list-item">
      <ion-icon name="briefcase-outline"class="icon"></ion-icon >
      <p>Our courses and related projects are job-oriented that will make you more attractive to companies.</p>
    </div>
    <div class="list-item">
      <ion-icon name="videocam-outline" class="icon"></ion-icon>
      <p>At the end of the course, there will be a special course for alumni that will consist in finding a job suitable for the skills developed and the goals of the person.</p>
    </div>
  </div>

</section>
<section id="discover">
  @include('partials.flash')
  <h2>Discover all about our courses</h2>
  <form method="POST" action="/news">
    @csrf
    <p>Subscribe to our newsletter! </p>
    <input class="form" type="email" required>
    <p>
    <button class="btn" type="submit">Submit</button>
    </p>
  </form>
</section>
<!--COURSES-->
<section class="courses">
    <h1>Our Courses</h1>
    <div class="cards">
    <div class="card" >
        <div class="card-img-top" id="first-image">
        </div>
        <div class="card-body">
            <h5 class="card-title"><b>HTML & CSS</b></h5>
            <p class="card-text"><strong>WHAT ARE HTML & CSS? </strong> <br>
            They are the basis of the internet, everything you can find on the sites has been done with them. If you want to learn these superpowers, you are in the right place! They are the basis of the internet, everything you can find on the sites has been done with them.<br>
            <strong>3 REASON TO LEARN HTML & CSS</strong>
            <ul>
                <li>Web development is one of the most future-proof and highest-paying industries in the world. And HTML and CSS is the entry point to this world!</li>
                <li>Used in every sites of every Companies.</li>
                <li>Creative Work with them and their framework such as Bootstrap.</li>

            </ul>
            <a class="btn" href="/roadmap/1">Course's Roadmap</a>
        </p>

        </div>
    </div>
    <div class="card">
        <div class="card-img-top" id="second-image">
        </div>
        <div class="card-body">
        <h5 class="card-title"><b>JavaScript Basics</b></h5>
            <p class="card-text"><strong>WHAT IS JAVASCRIPT? </strong><br>JavaScript is one of the most popular programming languages in the world, and growing faster than any other programming language. As a developer, you can use JavaScript to build web and mobile apps, real-time networking apps, command-line tools, and games.<br>
            <strong>4 REASONS TO LEARN JAVASCRIPT </strong>
            <ul>
                <li>JavaScript is a key tool for front-end, back-end, and full-stack developers.</li>
                <li>The average annual salary for a JavaScript developer is $72,000.</li>
                <li>Companies like Walmart, Netflix, and PayPal run big internal applications around JavaScript.</li>
                <li>Having strong JavaScript knowledge will help you land your dream job.</li>
            </ul>

        </p>
        <a class="btn" href="/roadmap/2">Course's roadmap</a>
        </div>
    </div>
    </div>
</section>
<!--TEACHER-->
<section id="teacher">
    <h1>Meet the teacher</h1>
    <div class="teacher">
        <img class="teacher-img" src="assets/img/teacher.jpg" alt="Warren Morrison">
        <h1>Warren Morrison</h1>
        <p class="teacher-p">Warren Morrison was born in 7/5/1970 in London.
            He discovered a passion for programming when he was 13. He attended Computer Science and got a job at Centure Inc. At the age of 25 he became Senior Full Stack Developer at the Renesas Company and thanks to this work he was able to find new stimuli, so much so that he could register a course.</p>
            <!-- Calendly badge widget begin -->
            <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
            <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
            <script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/notics-pro?primary_color=ff7f3f', text: 'Book a call with Mr. Morrison!', color: '#ff7f3f', textColor: '#ffffff',  }); }</script>
<!-- Calendly badge widget end -->
    </div>
</section>
<!--FAQ-->
<section id="faq-home">
<section id="modules">
<h1>Frequently Asked Question</h1>
<div class="accordion-div">
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Who should take an online course?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Students join our online courses for a variety of reasons and come from diverse backgrounds, professions, and age groups. With online courses, you can:
        <ul>
            <li>Advance your skill-set or begin a career change.
            </li>
            <li>Take the next step in your formal education.</li>
            <li>Ease the transition before entering a full-time academic program.</li>
            <li>Enjoy learning a new topic.</li>
        </ul></p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Are there prerequisites or language requirements?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>There are no prerequisites. Our courses are open to students of all backgrounds who are 18 years of age and older.
        All courses are conducted in English.Discussion boards are a critical component of each of our courses; therefore, we suggest students have a conversational knowledge of English when pursuing a Certificate of Completion. For any of the art writing courses, students need to be 100% proficient in written English.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Can I take more than one course at a time?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <p>If you are new to online learning, we recommend that you begin with one course. As our courses are offered frequently throughout the year, you can always come back and continue your studies with one or more topics.</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</section>
 
<!--FORM-->
<section id="form">
    <h1>Subscribe to our platform </h1>
    @include("partials.flash")
    <div class="form-div">
        <form action="/api/register" method="POST">
            @csrf
            <p>
            <label>
                <h5>Name</h5>
                <input type="text" name="name" class="form"required>
            </label>
            </p>
            <p>
            <label>
                <h5>Email</h5>
                <input type="email" name="email" class="form"required>
            </label>
            </p>
            <p>
            <label>
                <h5>Password</h5>
                <input type="password" name="password" class="form" required>
            </label>
            
            </p>
            <p>
            <label>
                <h5>Password Confirmation</h5>
                <input type="password" name="password_confirmation" class="form" required>
            </label>
            </p>
            <div class="buttons">
            <p>
            <button type="submit" class="btn">Sign Up</button>
            <p>or</p>
            <a href="/login">Login</a>
            </p>
            </div>
        </form>
    </div>
</section>
@include("partials.footer")
<script src="/assets/js/index.js"></script>