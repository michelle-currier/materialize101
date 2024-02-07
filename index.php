<?php if(isset($_POST["submit"])) {

$to = "mushel@gmail.com";
$subject = "Testing";
$email = $_POST["email"];
$name = $_POST["name"];
$msg = $_POST["msg"];

$headers = "From: CSS Framework Tut";
$mailBody="Name: $name\nEmail: $email\n\n$msg";

mail($to,$subject,$mailBody,$headers);
$thankYou="Your message has been sent.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Terminal, Git, npm, Framework with Materialize + SASS</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Quicksand:400,700&display=swap" rel="stylesheet">
  

</head>
<body>
  <ul id="slide-out" class="sidenav">
    <li><a href="../localWp/">Local Wordpress db</a></li>
		<li><a href="../aws-deploy.html">AWS cloud deploy</a></li>
		<li><a href="index.php">Framework Starter</a></li>
    <li><a href="../docker.html">Docker and mongo</a></li>  
    <li><a href="../lazy.php">Lazy load</a></li>
  </ul>  
  <div class="section">
    <div class="row">
      <div class="col s3">
        <h5><a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">add_circle</i> More Tuts</a></h5>
      </div>
      <div class="col s9">
        <h1 class="right"><a id="logo-container" href="#">Materialize 101</a> </h1>
      </div>
    </div> 
  </div> 
  
      
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br class="hide-on-med-and-down"><br>
        <h1 class="header center">Terminal, Git, npm, Framework with Materialize + SASS Tutorial</h1>
        <div class="row center">
          <h5 class="header col s12 light hide-on-med-and-down">Framework tut using the terminal, npm, github, materialize, all while implementing a design with material design components.</h5>
        </div>
        <div class="row center">
          <a href="#two" id="download-button" class="btn-large waves-effect waves-light teal">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="nerd.jpg" alt="80s Nerd"></div>
  </div>
  <div id="one" class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center pink-text text-darken-3"><i class="material-icons">code</i></h2>
            <h5 class="center pink-text text-darken-3">Why Terminal</h5>
            <p>Deep knowledge and understanding of the system will come from using this. It's super user level ish yo!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center indigo-text text-darken-3"><i class="material-icons">open_in_browser</i></h2>
            <h5 class="center indigo-text text-darken-3">Github</h5>
            <p>GitHub tools to streamline your workflow. Set up a repo to improve the way you store your projects.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text text-darken-2"><i class="material-icons">palette</i></h2>
            <h5 class="center teal-text text-darken-2">Materialize</h5>
            <p>Utilize a rad framework that will speed up your development time.</p>
          </div>
        </div>
      </div>
    <div class="section">
      <div class="row">
        <div class="col s12">
          <p>This is for mac<br>
          Lets learn how to fire up the terminal and navigate around that.
          <b>Cmd + spacebar</b> type in <b>terminal</b> and hit enter
          </p>
          <h6>Where do you keep your projects?</h6>
          <p>File structure - you start out at x location and you need to navigate to where you want to create your project folder.
          </p>
          <p>When you launch terminal it starts you in macintosh HD > Users > YourName So we need to navigate to where you would like to put your project folder. There’s some basic terminal commands that we should discuss.
          </p>

        </div>
        <div class="col offset-s1 s10">
          <p><b>ls</b> shows a list of what is in the directory<br>
          <b>mkdir</b> creates a new directory<br>
          <b>cd</b> changes the directory so you can move around the computer<br>
          <b>mv</b> is for moving a file around<br>
          <b>rm</b> deletes <br>
          <b>ctrl + c</b> exits the process</p>
        </div>
        <div class="col s12">
          <p>So now we wanna move up to the Applications(there are two so make sure you go up two folders) folder. 
          Type in <code>cd ..</code> and hit enter(push enter to execute the commands) to move jump up a folder.
          Type in <code>ls</code> it should list </p>
          <div class="code-head">
          terminal
          </div>
          <code>Applications   <br>
          Creative Cloud Files <br>
          Desktop <br>
          Documents <br>
          Downloads
          </code>
        </div>
        <div class="col s12">
          <p>type <code>cd ..</code> again to go up to the location you want to put your project. 
          </p>
          <p>
          It's gonna need to go into the spot with your local host projects. If you need to get a local server on your laptop download and install this one. <a href="https://www.mamp.info/en/downloads/" target="_blank">MAMP</a> Then install it. Now navigate to the Mamp folder inside of the applications folder.
          Do this by hitting <code>cd mamp/htdocs</code></p>  
          <p>Let's create the location for the project. Type <code>mkdir frameworkStarter</code>
          </p>
          <h5>Git initializing and cloning:</h5>
          <p>Change directory to the frameworkStarter folder you just created <code>cd frameworkStarter</code>In that folder you just created type <code>git init</code> </p>
          <p>Now we are cloning the the github repo!!! Type into the terminal</p>
          <div class="code-head">
          terminal
          </div>
          <div class="code-head">
          terminal
          </div>
          <code>git clone https://github.com/mushel/materialize101.git</code>
          <p>There's gonna be a <i>materialize101</i> directory with all the files from that repo that will appear in the directory</p>
          <p>Start mamp double click on the icon or start it by hitting <b>command spacebar</b> and typing in mamp and enter then hit start servers button. Now you can navigate to the page with the repo we just cloned in your browser.</p>
          <p>Navigate to your localhost <b>localhost:8888/frameworkstarter/materialize101</b><br>
          The repo is nested within another folder that I had you create b/c I wanted you to learn how to do that and then move a folder as well.</p>
          <div class="code-head">
          terminal
          </div>
          <code>mv /Applications/MAMP/htdocs/frameworkStarter/materialize101 /Applications/MAMP/htdocs</code> 
          <p>Now you can delete that other directory that we made with the name <i>frameworkStarter</i> and now you know how to move stuff with terminal.</p>

          <p>Here is the npm page that we are gonna snag off github</p>

          <a href="https://www.npmjs.com/package/materialize-css" target="_blank">npmjs materialize</a>
        </div>

      </div>
      <div class="row">
        
      </div>
      
      

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
        <h2 class="header col s12 light">Install a CSS preposessor (Sass) with npm </h2>      
        </div>      
      </div>
    </div>
    <div class="parallax"><img class="grayscale" src="terminal.png" alt="terminal code"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col s12">
        <p><a href="https://webdesign.tutsplus.com/tutorials/watch-and-compile-sass-in-five-quick-steps--cms-28275" target="_blank">SASS Watch and Compile Tut</a>
        <p>Install Sass to really get saucy with yah css preprosessing.</p>
        <p>Run the command</p>
        <div class="code-head">
          terminal
        </div>
        <code>
        npm init</code>

        <p>You will be prompted to answer several questions about your project, after which npm will generate a <b>package.json</b> file in your folder. 
        <p>Then run this to install the npm for sass</p>
        <div class="code-head">
          terminal
        </div>
        <code>npm install node-sass</code>  
        <p>Pop that package.json file open and insert this code to the "scripts section". * Add a comma at the end of the test line too.</p>
        <div class="code-head">
          terminal
        </div>
        <code>"scss": "node-sass --watch sass -o css"</code>
        <div class="row">
          <div class="col s6">
          
          <p>Then just run this code and change a sass file to see things happen.</p>
          <div class="code-head">
          terminal
          </div>
          <code>npm run scss</code>
          <p> You will want to open up the sass folder and then in the components open up a folder and change something in the _globals.scss. ex: on the <i>html</i> selector add <i>background: #f0c;</i> it should be bright pink now and you can watch the compiler do its work too in the terminal. Have a look at this if you wanna know more about css <a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/CSS_basics" target="_blank">css basics</a></p> 
          </div>
          <div class="col s6">
            <p>It will look like this: </p>  
            <img src="jsonfile.png" class="responsive-img">
          </div>
        </div>
        
        
      </div>
    
    </div>
   
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header">I hope this tutorial shed light on some basics.</h3>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="hacker.jpg" alt="you did it" class="hue-rotate"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1> how to style your actual design</h1>
        <h4>1) Colors</h4>
        <div class="code-head">
          scss
        </div>
        <code>
        // usage: color("name_of_color", "type_of_color")<br>
        $primary-color: color("materialize-red", "lighten-2") !default;<br>
        $primary-color-light: false !default;<br>
        $primary-color-dark: false !default;
        </code>
        <h4>2) Grid</h4>
        <p>The way this framework works is on a grid type layout. Your content will live inside a <i>.row>.col</i> Your code will end up looking like this:</p>
        <div class="code-hand">
          html
        </div>
        <code>
          &ltdiv class="row"&gt <br>
          &nbsp; &ltdiv class="col"&gt <br>
          &nbsp; &nbsp; content goes here <br>
          &nbsp;  &lt/div&gt<br>
          &lt/div&gt
        </code>
        <p>There will be 12 columns that you can divide your row into.</p>
      </div>
      
      <div class="col s1 red">1</div>
      <div class="col s1 pink">2</div>
      <div class="col s1 purple">3</div>
      <div class="col s1 deep-purple">4</div>
      <div class="col s1 indigo">5</div>
      <div class="col s1 blue">6</div>
      <div class="col s1 light-blue">7</div>
      <div class="col s1 cyan">8</div>
      <div class="col s1 teal">9</div>
      <div class="col s1 green">10</div>
      <div class="col s1 light-green">11</div>
      <div class="col s1 lime">12</div>
      <div class="col s6 yellow">1/2</div>
      <div class="col s6 amber">1/2</div>
      <div class="col s4 orange">1/3</div>
      <div class="col s4 deep-orange">1/3</div>
      <div class="col s4 brown">1/3</div>
      <div class="col s3 grey">1/4</div>
      <div class="col s3 light-blue">1/4</div>
      <div class="col s3 light-green">1/4</div>
      <div class="col s3 blue-grey">1/4</div>

      <div class="col s2 white">1/6</div>
      <div class="col s10 black">10</div>
    
    </div>
  </div>
  <div class="container">
    <div id="two" class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="teal-text text-darken-4">Contact Us</h4>
          <form action="#" id="form" method="post">
              <div class="row">
              
              </div>
              <div class="row">
                 
                    <div class="input-field col m6 s12">
                        <input name="name" type="text" class="validate">
                        <label for="name">Full Name</label>
                    </div>
                    <div class="input-field col m6 s12">
                        <input name="email" type="email" class="validate">
                        <label for="email">Email</label>   
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m9 s12">
                      <textarea name="msg" class="materialize-textarea"></textarea>
                      <label for="msg">Message</label>
                      <?=$thankYou?>
                    </div>
                    <div class="input-field col m3 s12">
                      <button class="btn waves-effect waves-light wine" type="submit" name="submit" value="submit" id="send">Submit
                      </button>    
                    </div> 
                                     
                </div>
              </form>             
        </div>
      </div>

    </div>
  </div>
  
  <footer class="page-footer indigo">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">m. currier designs</h5>
          <p class="grey-text text-lighten-4">tutorials project.</p>


        </div>
        <div class="col l3 s12">
          
          <ul>
            <li><a class="white-text" href="mailto:yourname@gmail.com">Email me</a></li>
            <li><a class="white-text" href="#two">Contact</a></li>
            <li><a class="white-text" href="#one">About</a></li>
          
          </ul>
        </div>
        <div class="col l3 s12">
          <h5>Important Links</h5>
          <ul>
            <li><a class="indigo-text text-lighten-3" href="http://github.com" target="_blank">github</a></li>
            <li><a class="indigo-text text-lighten-3" href="https://www.mamp.info/en/downloads/">MAMP</a></li>
            <li><a class="indigo-text text-lighten-3" href="https://webdesign.tutsplus.com/tutorials/watch-and-compile-sass-in-five-quick-steps--cms-28275" target="_blank">SASS Watch and Compile Tut</a></li>
            <li><a class="indigo-text text-lighten-3" href="https://code.visualstudio.com/download" target="_blank">VS Code</a></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col s12">
            Made by <a class="indigo-text text-lighten-3" href="http://mcurrier.com">m. currier designs</a> with <a class="indigo-text text-lighten-3" href="https://materializecss.com/">Materialize</a>

          </div>
        </div>
      
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script>
  // sidenav
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
  </script>
  </body>
</html>