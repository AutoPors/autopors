<html>
 <head>
	<title>
		Kunal Mishra | PortFolio
		</title>
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="assets/autopors.png"/>
	</head>

<body>
<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href = "example.html" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <span class="ml-3 text-xl"><font color = "orange">Kunal</font><font color = "blue">Mishra</font></span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href = "example.html "class="mr-5 hover:text-gray-900">Home</a>
      <a href= "#skill" class="mr-5 hover:text-gray-900">Skills</a>
      <a href = "#about" class="mr-5 hover:text-gray-900">About me</a>
      <a href = "#contact" class="mr-5 hover:text-gray-900">Contact Me</a>
    </nav>
  </div>
</header>


<section class="text-gray-700 body-font" id = "skill">
  <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-1 text-red-500">Kunal Mishra</h1>
        <div class="flex flex-wrap w-full mb-0 flex-col items-center text-center">
      <p class="lg:w-1/2 w-full leading-relaxed text-blue-500">Intrested in learning new thing. Can do stuff related to Hardware as well as Sofware. <br>My mul mantra<strong> "Tension nahi lene ka, qki usse kuch hone nahi wala, only kaam aur karm karneka !"</strong></p>
    </div>
    </div>
  <div class="container px-5 py-1 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
           <img src ="assets/kunal.jpg" border-radius="50%">
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Kunal Mishra</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base text-gray-600">Skills</p>
          </div>
        </div>
           <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl">Skill</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Score (out of 10)</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Number of projects regarding Skills</th>
            <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tr rounded-br"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="px-4 py-3">Java</td>
            <td class="px-4 py-3">8</td>
            <td class="px-4 py-3">5</td>
            
            <td class="w-10 text-center">
              <input name="plan" type="checkbox" checked>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">HTML</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">8</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25</td>
          
            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="checkbox" checked>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-gray-200 px-4 py-3">CSS</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">7</td>
            <td class="border-t-2 border-gray-200 px-4 py-3">25</td>

            <td class="border-t-2 border-gray-200 w-10 text-center">
              <input name="plan" type="checkbox" checked>
            </td>
          </tr>
          <tr>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">PHP</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">5</td>
            <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">2</td>

            <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
              <input name="plan" type="checkbox" checked>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-700 body-font relative" id = "contact">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We are 24\7 available to solve your query.</p>
    </div>
 <form method="post" action='action.php'>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text" id='name' name='name'>
        </div>
        <div class="p-2 w-1/2">
          <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" name ='email' id ='email'>
        </div>
        <div class="p-2 w-full">
          <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" placeholder="Message" name ='message' id ='message'></textarea>
        </div>
        <div class="p-2 w-full">
          <button class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
        </div>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">kunalrajatkool@gmail.com</a>
          <p class="leading-normal my-5">Kailashpuram, Govindpuram
            <br>Ghaziabad, India
          </p>
        </div>
      </div>
    </div>
</form>
  </div>
</section>
	<footer class="text-gray-700 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a href = "example.html" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <span class="ml-3 text-xl"><font color = "orange">Kunal</font><font color = "blue">Mishra</font></span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">Webiste Powered By <a href ="https://autopors.com">AutoPors</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a href ="contact.html" class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a href ="contact.html" class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a href ="contact.html" class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a href ="contact.html" class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

</body>
</html>