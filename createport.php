<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strip_tags(trim($_POST["fname"]));
                $name = str_replace(array("\r","\n"),array(" "," "),$name); //First name
        $lname = strip_tags(trim($_POST["lname"]));
                $lname = str_replace(array("\r","\n"),array(" "," "),$lname); //last name
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $plink = trim($_POST["plink"]); //profile photo link
        $aboutyou = trim($_POST["aboutyou"]);
 
        $address = trim($_POST["address"]);
        //About You
        $message = trim($_POST["extra"]); //message for admins

        //Skills
        $skill1  = trim($_POST["skill1"]); // Skill name
        $nskill1 = trim($_POST["nskill1"]); // how much skill he knows out of 10 rating
        $rskill1 = trim($_POST["rskill1"]); // Projects done by using that skill

        $skill2  = trim($_POST["skill2"]);
        $nskill2 = trim($_POST["nskill2"]);        
        $rskill2 = trim($_POST["rskill2"]);

        $skill3  = trim($_POST["skill3"]);
        $nskill3 = trim($_POST["nskill3"]);
        $rskill3 = trim($_POST["rskill3"]);

        $skill4  = trim($_POST["skill4"]);
        $nskill4 = trim($_POST["nskill4"]);
        $rskill4 = trim($_POST["rskill4"]);

        $skill5 = trim($_POST["skill5"]);
        $nskill5 = trim($_POST["nskill5"]);
        $rskill5 = trim($_POST["rskill5"]);        

        //Website theme
       // $color = trim($_POST["tcolor1"]);
       // $color2 = trim($_POST["tcolor2"]);

        $tcolor =  trim($_POST["tcolor"]);
        $tcolor2 =  trim($_POST["tcolor2"]);


        if ( empty($name) OR empty($lname) OR empty($plink) OR empty($plink) OR empty($aboutyou) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        }
        $recipient = "support@autopors.tech";

        $subject = "New portfolio website from $email";

        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Message:\n$message\n";
       
        //Create Website
        $email_content .= "Website Content : \n\n"; 

    if(empty($skill2) AND empty($skill3) AND empty($skill4) AND empty($skill5)){
                $email_content .= "
                <html>
   \r\n 
   <head>
      \r\n\t
      <title>\r\n\t\t$name $lname | PortFolio\r\n\t\t</title>
      \r\n\t\t
      <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
      \r\n    
      <link rel=\"icon\" href=\"$plink\"/>
      \r\n\t
   </head>
   \r\n\r\n
   <body>
      \r\n
      <header class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <nav class=\"md:ml-auto flex flex-wrap items-center text-base justify-center\">\r\n      <a href = \"index.html \"class=\"mr-5 hover:text-gray-900\">Home</a>\r\n      <a href= \"#skill\" class=\"mr-5 hover:text-gray-900\">Skills</a>\r\n      <a href = \"#about\" class=\"mr-5 hover:text-gray-900\">About me</a>\r\n      <a href = \"#contact\" class=\"mr-5 hover:text-gray-900\">Contact Me</a>\r\n    </nav>
            \r\n  
         </div>
         \r\n
      </header>
      \r\n\r\n\r\n
      <section class=\"text-gray-700 body-font\" id = \"skill\">
         \r\n  
         <div class=\"flex flex-col text-center w-full mb-20\">
            \r\n        
            <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-1 text-$tcolor-500\">$name $lname</h1>
            \r\n        
            <div class=\"flex flex-wrap w-full mb-0 flex-col items-center text-center\">
               \r\n      
               <p class=\"lg:w-1/2 w-full leading-relaxed text-$tcolor2-500\"> $aboutyou </p>
               \r\n    
            </div>
            \r\n    
         </div>
         \r\n  
         <div class=\"container px-5 py-1 mx-auto flex flex-col\">
            \r\n    
            <div class=\"lg:w-4/6 mx-auto\">
               \r\n      
               <div class=\"flex flex-col sm:flex-row mt-10\">
                  \r\n        
                  <div class=\"sm:w-1/3 text-center sm:pr-8 sm:py-8\">
                     \r\n          
                     <div class=\"w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400\">\r\n           <img src =\"$plink\" border-radius=\"50%\">\r\n          </div>
                     \r\n          
                     <div class=\"flex flex-col items-center text-center justify-center\">
                        \r\n            
                        <h2 class=\"font-medium title-font mt-4 text-gray-900 text-lg\">$name $lname</h2>
                        \r\n            
                        <div class=\"w-12 h-1 bg-indigo-500 rounded mt-2 mb-4\"></div>
                        \r\n            
                        <p class=\"text-base text-gray-600\">Skills</p>
                        \r\n          
                     </div>
                     \r\n        
                  </div>
                  \r\n           
                  <div class=\"lg:w-2/3 w-full mx-auto overflow-auto\">
                     \r\n      
                     <table class=\"table-auto w-full text-left whitespace-no-wrap\">
                        \r\n        
                        <thead>
                           \r\n          
                           <tr>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl\">Skill</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Score (out of 10)</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Number of projects regarding Skills</th>
                              \r\n            
                              <th class=\"w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br\"></th>
                              \r\n          
                           </tr>
                           \r\n        
                        </thead>
                        \r\n        
                        <tbody>
                           \r\n          
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill1</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n 
                                            <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>         
                           \r\n        
                        </tbody>
                        \r\n      
                     </table>
                     \r\n    
                  </div>
                  \r\n      
               </div>
               \r\n    
            </div>
            \r\n  
         </div>
         \r\n
      </section>
      \r\n
      <section class=\"text-gray-700 body-font relative\" id = \"contact\">
         \r\n  
         <div class=\"container px-5 py-24 mx-auto\">
            \r\n    
            <div class=\"flex flex-col text-center w-full mb-12\">
               \r\n      
               <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900\">Contact Us</h1>
               \r\n      
               <p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">We are 24\\7 available to solve your query.</p>
               \r\n    
            </div>
            \r\n 
            <form method=\"post\" action='action.php'>
               \r\n    <div class=\"lg:w-1/2 md:w-2/3 mx-auto\">\r\n      <div class=\"flex flex-wrap -m-2\">\r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Name\" type=\"text\" id='name' name='name'>\r\n        
         </div>
         \r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Email\" type=\"email\" name ='email' id ='email'>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <textarea class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block\" placeholder=\"Message\" name ='message' id ='message'></textarea>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <button class=\"flex mx-auto text-white bg-$tcolor-500 border-0 py-2 px-8 focus:outline-none hover:bg-$tcolor-600 rounded text-lg\">Submit</button>\r\n        </div>\r\n        <div class=\"p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center\">\r\n          <a class=\"text-indigo-500\">$email</a>\r\n          <p class=\"leading-normal my-5\"> $address\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</form>\r\n  </div>\r\n
      </section>
      \r\n\t
      <footer class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center md:justify-start justify-center text-gray-900\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <p class=\"text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4\">Webiste Powered By <a href =\"https://autopors.com\">AutoPors</a>\r\n    </p>
            \r\n    
            <span class=\"inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start\">
               \r\n      <a href =\"contact.html\" class=\"text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>\r\n        </svg>\r\n      </a>\r\n      <a href =\"contact.html\" class=\"ml-3 text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>\r\n        </svg>\r\n      </a>\r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          
                  <rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"></rect>
                  \r\n          <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01\"></path>\r\n        </svg>\r\n      
               </a>
               \r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"currentColor\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"0\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path stroke=\"none\" d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z\"></path>\r\n          
                  <circle cx=\"4\" cy=\"4\" r=\"2\" stroke=\"none\"></circle>
                  \r\n        </svg>\r\n      
               </a>
               \r\n    
            </span>
            \r\n  
         </div>
         \r\n
      </footer>
      \r\n\r\n
   </body>
   \r\n
</html>";
    } 
elseif (empty($skill3) AND empty($skill4) AND empty($skill5)){
 $email_content .= "<html>
   \r\n 
   <head>
      \r\n\t
      <title>\r\n\t\t$name $lname | PortFolio\r\n\t\t</title>
      \r\n\t\t
      <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
      \r\n    
      <link rel=\"icon\" href=\"$plink\"/>
      \r\n\t
   </head>
   \r\n\r\n
   <body>
      \r\n
      <header class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"     $tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <nav class=\"md:ml-auto flex flex-wrap items-center text-base justify-center\">\r\n      <a href = \"index.html \"class=\"mr-5 hover:text-gray-900\">Home</a>\r\n      <a href= \"#skill\" class=\"mr-5 hover:text-gray-900\">Skills</a>\r\n      <a href = \"#about\" class=\"mr-5 hover:text-gray-900\">About me</a>\r\n      <a href = \"#contact\" class=\"mr-5 hover:text-gray-900\">Contact Me</a>\r\n    </nav>
            \r\n  
         </div>
         \r\n
      </header>
      \r\n\r\n\r\n
      <section class=\"text-gray-700 body-font\" id = \"skill\">
         \r\n  
         <div class=\"flex flex-col text-center w-full mb-20\">
            \r\n        
            <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-1 text-$tcolor-500\">$name $lname</h1>
            \r\n        
            <div class=\"flex flex-wrap w-full mb-0 flex-col items-center text-center\">
               \r\n      
               <p class=\"lg:w-1/2 w-full leading-relaxed text-$tcolor2-500\"> $aboutyou </p>
               \r\n    
            </div>
            \r\n    
         </div>
         \r\n  
         <div class=\"container px-5 py-1 mx-auto flex flex-col\">
            \r\n    
            <div class=\"lg:w-4/6 mx-auto\">
               \r\n      
               <div class=\"flex flex-col sm:flex-row mt-10\">
                  \r\n        
                  <div class=\"sm:w-1/3 text-center sm:pr-8 sm:py-8\">
                     \r\n          
                     <div class=\"w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400\">\r\n           <img src =\"$plink\" border-radius=\"50%\">\r\n          </div>
                     \r\n          
                     <div class=\"flex flex-col items-center text-center justify-center\">
                        \r\n            
                        <h2 class=\"font-medium title-font mt-4 text-gray-900 text-lg\">$name $lname</h2>
                        \r\n            
                        <div class=\"w-12 h-1 bg-indigo-500 rounded mt-2 mb-4\"></div>
                        \r\n            
                        <p class=\"text-base text-gray-600\">Skills</p>
                        \r\n          
                     </div>
                     \r\n        
                  </div>
                  \r\n           
                  <div class=\"lg:w-2/3 w-full mx-auto overflow-auto\">
                     \r\n      
                     <table class=\"table-auto w-full text-left whitespace-no-wrap\">
                        \r\n        
                        <thead>
                           \r\n          
                           <tr>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl\">Skill</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Score (out of 10)</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Number of projects regarding Skills</th>
                              \r\n            
                              <th class=\"w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br\"></th>
                              \r\n          
                           </tr>
                           \r\n        
                        </thead>
                        \r\n        
                        <tbody>
                           \r\n          
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill1</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n               <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n   
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill2</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>                                  
                           \r\n        
                        </tbody>
                        \r\n      
                     </table>
                     \r\n    
                  </div>
                  \r\n      
               </div>
               \r\n    
            </div>
            \r\n  
         </div>
         \r\n
      </section>
      \r\n
      <section class=\"text-gray-700 body-font relative\" id = \"contact\">
         \r\n  
         <div class=\"container px-5 py-24 mx-auto\">
            \r\n    
            <div class=\"flex flex-col text-center w-full mb-12\">
               \r\n      
               <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900\">Contact Us</h1>
               \r\n      
               <p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">We are 24\\7 available to solve your query.</p>
               \r\n    
            </div>
            \r\n 
            <form method=\"post\" action='action.php'>
               \r\n    <div class=\"lg:w-1/2 md:w-2/3 mx-auto\">\r\n      <div class=\"flex flex-wrap -m-2\">\r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Name\" type=\"text\" id='name' name='name'>\r\n        
         </div>
         \r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Email\" type=\"email\" name ='email' id ='email'>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <textarea class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block\" placeholder=\"Message\" name ='message' id ='message'></textarea>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <button class=\"flex mx-auto text-white bg-$tcolor-500 border-0 py-2 px-8 focus:outline-none hover:bg-$tcolor-600 rounded text-lg\">Submit</button>\r\n        </div>\r\n        <div class=\"p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center\">\r\n          <a class=\"text-indigo-500\">$email</a>\r\n          <p class=\"leading-normal my-5\"> $address\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</form>\r\n  </div>\r\n
      </section>
      \r\n\t
      <footer class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center md:justify-start justify-center text-gray-900\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <p class=\"text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4\">Webiste Powered By <a href =\"https://autopors.com\">AutoPors</a>\r\n    </p>
            \r\n    
            <span class=\"inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start\">
               \r\n      <a href =\"contact.html\" class=\"text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>\r\n        </svg>\r\n      </a>\r\n      <a href =\"contact.html\" class=\"ml-3 text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>\r\n        </svg>\r\n      </a>\r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          
                  <rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"></rect>
                  \r\n          <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01\"></path>\r\n        </svg>\r\n      
               </a>
               \r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"currentColor\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"0\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path stroke=\"none\" d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z\"></path>\r\n          
                  <circle cx=\"4\" cy=\"4\" r=\"2\" stroke=\"none\"></circle>
                  \r\n        </svg>\r\n      
               </a>
               \r\n    
            </span>
            \r\n  
         </div>
         \r\n
      </footer>
      \r\n\r\n
   </body>
   \r\n
</html>";       
    }
elseif (empty($skill4) AND empty($skill5)){
 $email_content .= "<html>
   \r\n 
   <head>
      \r\n\t
      <title>\r\n\t\t$name $lname | PortFolio\r\n\t\t</title>
      \r\n\t\t
      <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
      \r\n    
      <link rel=\"icon\" href=\"$plink\"/>
      \r\n\t
   </head>
   \r\n\r\n
   <body>
      \r\n
      <header class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"     $tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <nav class=\"md:ml-auto flex flex-wrap items-center text-base justify-center\">\r\n      <a href = \"index.html \"class=\"mr-5 hover:text-gray-900\">Home</a>\r\n      <a href= \"#skill\" class=\"mr-5 hover:text-gray-900\">Skills</a>\r\n      <a href = \"#about\" class=\"mr-5 hover:text-gray-900\">About me</a>\r\n      <a href = \"#contact\" class=\"mr-5 hover:text-gray-900\">Contact Me</a>\r\n    </nav>
            \r\n  
         </div>
         \r\n
      </header>
      \r\n\r\n\r\n
      <section class=\"text-gray-700 body-font\" id = \"skill\">
         \r\n  
         <div class=\"flex flex-col text-center w-full mb-20\">
            \r\n        
            <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-1 text-$tcolor-500\">$name $lname</h1>
            \r\n        
            <div class=\"flex flex-wrap w-full mb-0 flex-col items-center text-center\">
               \r\n      
               <p class=\"lg:w-1/2 w-full leading-relaxed text-$tcolor2-500\"> $aboutyou </p>
               \r\n    
            </div>
            \r\n    
         </div>
         \r\n  
         <div class=\"container px-5 py-1 mx-auto flex flex-col\">
            \r\n    
            <div class=\"lg:w-4/6 mx-auto\">
               \r\n      
               <div class=\"flex flex-col sm:flex-row mt-10\">
                  \r\n        
                  <div class=\"sm:w-1/3 text-center sm:pr-8 sm:py-8\">
                     \r\n          
                     <div class=\"w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400\">\r\n           <img src =\"$plink\" border-radius=\"50%\">\r\n          </div>
                     \r\n          
                     <div class=\"flex flex-col items-center text-center justify-center\">
                        \r\n            
                        <h2 class=\"font-medium title-font mt-4 text-gray-900 text-lg\">$name $lname</h2>
                        \r\n            
                        <div class=\"w-12 h-1 bg-indigo-500 rounded mt-2 mb-4\"></div>
                        \r\n            
                        <p class=\"text-base text-gray-600\">Skills</p>
                        \r\n          
                     </div>
                     \r\n        
                  </div>
                  \r\n           
                  <div class=\"lg:w-2/3 w-full mx-auto overflow-auto\">
                     \r\n      
                     <table class=\"table-auto w-full text-left whitespace-no-wrap\">
                        \r\n        
                        <thead>
                           \r\n          
                           <tr>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl\">Skill</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Score (out of 10)</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Number of projects regarding Skills</th>
                              \r\n            
                              <th class=\"w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br\"></th>
                              \r\n          
                           </tr>
                           \r\n        
                        </thead>
                        \r\n        
                        <tbody>
                           \r\n          
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill1</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n               <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n   
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill2</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>   
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill3</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr> 
                           \n                                                          
                           \r\n        
                        </tbody>
                        \r\n      
                     </table>
                     \r\n    
                  </div>
                  \r\n      
               </div>
               \r\n    
            </div>
            \r\n  
         </div>
         \r\n
      </section>
      \r\n
      <section class=\"text-gray-700 body-font relative\" id = \"contact\">
         \r\n  
         <div class=\"container px-5 py-24 mx-auto\">
            \r\n    
            <div class=\"flex flex-col text-center w-full mb-12\">
               \r\n      
               <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900\">Contact Us</h1>
               \r\n      
               <p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">We are 24\\7 available to solve your query.</p>
               \r\n    
            </div>
            \r\n 
            <form method=\"post\" action='action.php'>
               \r\n    <div class=\"lg:w-1/2 md:w-2/3 mx-auto\">\r\n      <div class=\"flex flex-wrap -m-2\">\r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Name\" type=\"text\" id='name' name='name'>\r\n        
         </div>
         \r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Email\" type=\"email\" name ='email' id ='email'>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <textarea class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block\" placeholder=\"Message\" name ='message' id ='message'></textarea>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <button class=\"flex mx-auto text-white bg-$tcolor-500 border-0 py-2 px-8 focus:outline-none hover:bg-$tcolor-600 rounded text-lg\">Submit</button>\r\n        </div>\r\n        <div class=\"p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center\">\r\n          <a class=\"text-indigo-500\">$email</a>\r\n          <p class=\"leading-normal my-5\"> $address\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</form>\r\n  </div>\r\n
      </section>
      \r\n\t
      <footer class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center md:justify-start justify-center text-gray-900\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <p class=\"text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4\">Webiste Powered By <a href =\"https://autopors.com\">AutoPors</a>\r\n    </p>
            \r\n    
            <span class=\"inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start\">
               \r\n      <a href =\"contact.html\" class=\"text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>\r\n        </svg>\r\n      </a>\r\n      <a href =\"contact.html\" class=\"ml-3 text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>\r\n        </svg>\r\n      </a>\r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          
                  <rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"></rect>
                  \r\n          <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01\"></path>\r\n        </svg>\r\n      
               </a>
               \r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"currentColor\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"0\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path stroke=\"none\" d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z\"></path>\r\n          
                  <circle cx=\"4\" cy=\"4\" r=\"2\" stroke=\"none\"></circle>
                  \r\n        </svg>\r\n      
               </a>
               \r\n    
            </span>
            \r\n  
         </div>
         \r\n
      </footer>
      \r\n\r\n
   </body>
   \r\n
</html>";       
    }
    elseif (empty($skill5)){
 $email_content .= "<html>
   \r\n 
   <head>
      \r\n\t
      <title>\r\n\t\t$name $lname | PortFolio\r\n\t\t</title>
      \r\n\t\t
      <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
      \r\n    
      <link rel=\"icon\" href=\"$plink\"/>
      \r\n\t
   </head>
   \r\n\r\n
   <body>
      \r\n
      <header class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"     $tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <nav class=\"md:ml-auto flex flex-wrap items-center text-base justify-center\">\r\n      <a href = \"index.html \"class=\"mr-5 hover:text-gray-900\">Home</a>\r\n      <a href= \"#skill\" class=\"mr-5 hover:text-gray-900\">Skills</a>\r\n      <a href = \"#about\" class=\"mr-5 hover:text-gray-900\">About me</a>\r\n      <a href = \"#contact\" class=\"mr-5 hover:text-gray-900\">Contact Me</a>\r\n    </nav>
            \r\n  
         </div>
         \r\n
      </header>
      \r\n\r\n\r\n
      <section class=\"text-gray-700 body-font\" id = \"skill\">
         \r\n  
         <div class=\"flex flex-col text-center w-full mb-20\">
            \r\n        
            <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-1 text-$tcolor-500\">$name $lname</h1>
            \r\n        
            <div class=\"flex flex-wrap w-full mb-0 flex-col items-center text-center\">
               \r\n      
               <p class=\"lg:w-1/2 w-full leading-relaxed text-$tcolor2-500\"> $aboutyou </p>
               \r\n    
            </div>
            \r\n    
         </div>
         \r\n  
         <div class=\"container px-5 py-1 mx-auto flex flex-col\">
            \r\n    
            <div class=\"lg:w-4/6 mx-auto\">
               \r\n      
               <div class=\"flex flex-col sm:flex-row mt-10\">
                  \r\n        
                  <div class=\"sm:w-1/3 text-center sm:pr-8 sm:py-8\">
                     \r\n          
                     <div class=\"w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400\">\r\n           <img src =\"$plink\" border-radius=\"50%\">\r\n          </div>
                     \r\n          
                     <div class=\"flex flex-col items-center text-center justify-center\">
                        \r\n            
                        <h2 class=\"font-medium title-font mt-4 text-gray-900 text-lg\">$name $lname</h2>
                        \r\n            
                        <div class=\"w-12 h-1 bg-indigo-500 rounded mt-2 mb-4\"></div>
                        \r\n            
                        <p class=\"text-base text-gray-600\">Skills</p>
                        \r\n          
                     </div>
                     \r\n        
                  </div>
                  \r\n           
                  <div class=\"lg:w-2/3 w-full mx-auto overflow-auto\">
                     \r\n      
                     <table class=\"table-auto w-full text-left whitespace-no-wrap\">
                        \r\n        
                        <thead>
                           \r\n          
                           <tr>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl\">Skill</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Score (out of 10)</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Number of projects regarding Skills</th>
                              \r\n            
                              <th class=\"w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br\"></th>
                              \r\n          
                           </tr>
                           \r\n        
                        </thead>
                        \r\n        
                        <tbody>
                           \r\n          
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill1</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n               <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n   
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill2</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>   
                           \n
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill3</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n 
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill4</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill4</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill4</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>                                                                                    
                           \r\n        
                        </tbody>
                        \r\n      
                     </table>
                     \r\n    
                  </div>
                  \r\n      
               </div>
               \r\n    
            </div>
            \r\n  
         </div>
         \r\n
      </section>
      \r\n
      <section class=\"text-gray-700 body-font relative\" id = \"contact\">
         \r\n  
         <div class=\"container px-5 py-24 mx-auto\">
            \r\n    
            <div class=\"flex flex-col text-center w-full mb-12\">
               \r\n      
               <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900\">Contact Us</h1>
               \r\n      
               <p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">We are 24\\7 available to solve your query.</p>
               \r\n    
            </div>
            \r\n 
            <form method=\"post\" action='action.php'>
               \r\n    <div class=\"lg:w-1/2 md:w-2/3 mx-auto\">\r\n      <div class=\"flex flex-wrap -m-2\">\r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Name\" type=\"text\" id='name' name='name'>\r\n        
         </div>
         \r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Email\" type=\"email\" name ='email' id ='email'>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <textarea class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block\" placeholder=\"Message\" name ='message' id ='message'></textarea>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <button class=\"flex mx-auto text-white bg-$tcolor-500 border-0 py-2 px-8 focus:outline-none hover:bg-$tcolor-600 rounded text-lg\">Submit</button>\r\n        </div>\r\n        <div class=\"p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center\">\r\n          <a class=\"text-indigo-500\">$email</a>\r\n          <p class=\"leading-normal my-5\"> $address\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</form>\r\n  </div>\r\n
      </section>
      \r\n\t
      <footer class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center md:justify-start justify-center text-gray-900\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <p class=\"text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4\">Webiste Powered By <a href =\"https://autopors.com\">AutoPors</a>\r\n    </p>
            \r\n    
            <span class=\"inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start\">
               \r\n      <a href =\"contact.html\" class=\"text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>\r\n        </svg>\r\n      </a>\r\n      <a href =\"contact.html\" class=\"ml-3 text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>\r\n        </svg>\r\n      </a>\r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          
                  <rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"></rect>
                  \r\n          <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01\"></path>\r\n        </svg>\r\n      
               </a>
               \r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"currentColor\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"0\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path stroke=\"none\" d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z\"></path>\r\n          
                  <circle cx=\"4\" cy=\"4\" r=\"2\" stroke=\"none\"></circle>
                  \r\n        </svg>\r\n      
               </a>
               \r\n    
            </span>
            \r\n  
         </div>
         \r\n
      </footer>
      \r\n\r\n
   </body>
   \r\n
</html>";       
    }
else{
 $email_content .= "<html>
   \r\n 
   <head>
      \r\n\t
      <title>\r\n\t\t$name $lname | PortFolio\r\n\t\t</title>
      \r\n\t\t
      <link href=\"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css\" rel=\"stylesheet\">
      \r\n    
      <link rel=\"icon\" href=\"$plink\"/>
      \r\n\t
   </head>
   \r\n\r\n
   <body>
      \r\n
      <header class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"     $tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <nav class=\"md:ml-auto flex flex-wrap items-center text-base justify-center\">\r\n      <a href = \"index.html \"class=\"mr-5 hover:text-gray-900\">Home</a>\r\n      <a href= \"#skill\" class=\"mr-5 hover:text-gray-900\">Skills</a>\r\n      <a href = \"#about\" class=\"mr-5 hover:text-gray-900\">About me</a>\r\n      <a href = \"#contact\" class=\"mr-5 hover:text-gray-900\">Contact Me</a>\r\n    </nav>
            \r\n  
         </div>
         \r\n
      </header>
      \r\n\r\n\r\n
      <section class=\"text-gray-700 body-font\" id = \"skill\">
         \r\n  
         <div class=\"flex flex-col text-center w-full mb-20\">
            \r\n        
            <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-1 text-$tcolor-500\">$name $lname</h1>
            \r\n        
            <div class=\"flex flex-wrap w-full mb-0 flex-col items-center text-center\">
               \r\n      
               <p class=\"lg:w-1/2 w-full leading-relaxed text-$tcolor2-500\"> $aboutyou </p>
               \r\n    
            </div>
            \r\n    
         </div>
         \r\n  
         <div class=\"container px-5 py-1 mx-auto flex flex-col\">
            \r\n    
            <div class=\"lg:w-4/6 mx-auto\">
               \r\n      
               <div class=\"flex flex-col sm:flex-row mt-10\">
                  \r\n        
                  <div class=\"sm:w-1/3 text-center sm:pr-8 sm:py-8\">
                     \r\n          
                     <div class=\"w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400\">\r\n           <img src =\"$plink\" border-radius=\"50%\">\r\n          </div>
                     \r\n          
                     <div class=\"flex flex-col items-center text-center justify-center\">
                        \r\n            
                        <h2 class=\"font-medium title-font mt-4 text-gray-900 text-lg\">$name $lname</h2>
                        \r\n            
                        <div class=\"w-12 h-1 bg-indigo-500 rounded mt-2 mb-4\"></div>
                        \r\n            
                        <p class=\"text-base text-gray-600\">Skills</p>
                        \r\n          
                     </div>
                     \r\n        
                  </div>
                  \r\n           
                  <div class=\"lg:w-2/3 w-full mx-auto overflow-auto\">
                     \r\n      
                     <table class=\"table-auto w-full text-left whitespace-no-wrap\">
                        \r\n        
                        <thead>
                           \r\n          
                           <tr>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl\">Skill</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Score (out of 10)</th>
                              \r\n            
                              <th class=\"px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200\">Number of projects regarding Skills</th>
                              \r\n            
                              <th class=\"w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br\"></th>
                              \r\n          
                           </tr>
                           \r\n        
                        </thead>
                        \r\n        
                        <tbody>
                           \r\n          
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill1</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill1</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n 
                                            <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n   
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill2</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill2</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>   
                           \n
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill3</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill3</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>  
                           \n 
                           <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill4</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill4</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill4</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">              <input name=\"plan\" type=\"checkbox\" checked>\r\n            </td>
                              \r\n          
                           </tr>   
                            \n
                             <tr>
                              \r\n            
                              <td class=\"px-4 py-3\">$skill5</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$rskill5</td>
                              \r\n            
                              <td class=\"px-4 py-3\">$nskill5</td>
                              \r\n            \r\n            
                              <td class=\"w-10 text-center\">\r\n <td class=\"border-t-2 border-gray-200 w-10 text-center\">  
                              <td class=\"border-t-2 border-gray-200 w-10 text-center\">            
                              <input name=\"plan\" type=\"checkbox\" checked>\r\n            
                              </td>
                              \r\n          
                           </tr>           
                           \r\n        
                        </tbody>
                        \r\n      
                     </table>
                     \r\n    
                  </div>
                  \r\n      
               </div>
               \r\n    
            </div>
            \r\n  
         </div>
         \r\n
      </section>
      \r\n
      <section class=\"text-gray-700 body-font relative\" id = \"contact\">
         \r\n  
         <div class=\"container px-5 py-24 mx-auto\">
            \r\n    
            <div class=\"flex flex-col text-center w-full mb-12\">
               \r\n      
               <h1 class=\"sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900\">Contact Us</h1>
               \r\n      
               <p class=\"lg:w-2/3 mx-auto leading-relaxed text-base\">We are 24\\7 available to solve your query.</p>
               \r\n    
            </div>
            \r\n 
            <form method=\"post\" action='action.php'>
               \r\n    <div class=\"lg:w-1/2 md:w-2/3 mx-auto\">\r\n      <div class=\"flex flex-wrap -m-2\">\r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Name\" type=\"text\" id='name' name='name'>\r\n        
         </div>
         \r\n        <div class=\"p-2 w-1/2\">\r\n          <input class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2\" placeholder=\"Email\" type=\"email\" name ='email' id ='email'>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <textarea class=\"w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block\" placeholder=\"Message\" name ='message' id ='message'></textarea>\r\n        </div>\r\n        <div class=\"p-2 w-full\">\r\n          <button class=\"flex mx-auto text-white bg-$tcolor-500 border-0 py-2 px-8 focus:outline-none hover:bg-$tcolor-600 rounded text-lg\">Submit</button>\r\n        </div>\r\n        <div class=\"p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center\">\r\n          <a class=\"text-indigo-500\">$email</a>\r\n          <p class=\"leading-normal my-5\"> $address\r\n          </p>\r\n        </div>\r\n      </div>\r\n    </div>\r\n</form>\r\n  </div>\r\n
      </section>
      \r\n\t
      <footer class=\"text-gray-700 body-font\">
         \r\n  
         <div class=\"container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col\">
            \r\n    <a href = \"index.html\" class=\"flex title-font font-medium items-center md:justify-start justify-center text-gray-900\">\r\n      <span class=\"ml-3 text-xl\"><font color = \"$tcolor\">$name</font><font color = \"$tcolor2\">$lname</font></span>\r\n    </a>\r\n    
            <p class=\"text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4\">Webiste Powered By <a href =\"https://autopors.com\">AutoPors</a>\r\n    </p>
            \r\n    
            <span class=\"inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start\">
               \r\n      <a href =\"contact.html\" class=\"text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z\"></path>\r\n        </svg>\r\n      </a>\r\n      <a href =\"contact.html\" class=\"ml-3 text-gray-500\">\r\n        <svg fill=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path d=\"M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z\"></path>\r\n        </svg>\r\n      </a>\r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          
                  <rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"></rect>
                  \r\n          <path d=\"M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01\"></path>\r\n        </svg>\r\n      
               </a>
               \r\n      
               <a href =\"contact.html\" class=\"ml-3 text-gray-500\">
                  \r\n        <svg fill=\"currentColor\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"0\" class=\"w-5 h-5\" viewBox=\"0 0 24 24\">\r\n          <path stroke=\"none\" d=\"M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z\"></path>\r\n          
                  <circle cx=\"4\" cy=\"4\" r=\"2\" stroke=\"none\"></circle>
                  \r\n        </svg>\r\n      
               </a>
               \r\n    
            </span>
            \r\n  
         </div>
         \r\n
      </footer>
      \r\n\r\n
   </body>
   \r\n
</html>";       
    }
        $email_headers = "From: $name <$email>";

        if (mail($recipient, $subject, $email_content, $email_headers)) {
            http_response_code(200);
            header("Location: successful.html");
        } else {
            http_response_code(500);
            header("Location: error.html");
        }

    } else {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

function utf8_urldecode($str) {
        return html_entity_decode(preg_replace("/%u([0-9a-f]{3,4})/i", "&#x\\1;", urldecode($str)), null, 'UTF-8');
}

?>