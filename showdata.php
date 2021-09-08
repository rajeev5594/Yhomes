<?php 
include('dbcon.php');
    $sql="SELECT * FROM contact_info ";
	$run=mysqli_query($con,$sql);
	?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Y DEVELOPERS & HOMES</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<style>
		body{
			background: lightgreen;
		}
		table{
			width:800px;
			margin:auto;
			//table-layout: fixed;
			text-align: center;
			margin-top: 50px;
			font-family: Arial;
		}
table,th,td{
	border:1px dotted black;
	border-collapse: collapse;
	padding:5px;
	font-size: 20px;
}
th{
	
	padding:10px;
	text-transform: uppercase;

}


	</style>
</head>
<body >
<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src=image/Pics.png width="60px" height="60px"></a>
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      <span class="ml-3 text-xl"><b>Y DEVELOPERS & HOMES</b></span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
    <!--  <a href="index.html" class="mr-5 hover:text-gray-900">Homes</a>
      <a href="services.html" class="mr-5 hover:text-gray-900">Services</a>
      <a href="vision.html" class="mr-5 hover:text-gray-900">Vision & Mission</a>
      <a href="about.html" class="mr-5 hover:text-gray-900">About</a>-->
    </nav>
  </div>
</header>

<section class="text-gray-700 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Lets get ready for interior & exterior design of your homes
        <br class="hidden lg:inline-block">
      </h1>
      <p class="mb-8 leading-relaxed">Welcome To <b>Y Developers & Homes</b>. The company established in the year 2020 under a very young and dynamic leadership of <b>Durgesh Kumar </b>started its journey working under various Homes Designing & construction development schemes. Company grew substantially extending its development Project in nearby developing cities by successfully completing construction of buildings and Apartments as well as interior designing of Homes.
     </p>
      <div class="flex justify-center">
        <!--<button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button>-->
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://source.unsplash.com/720x600/?construction,building">
    </div>
  </div>
</section>

<section>

	<table >
		<tr >
		<th colspan="6" style="background:red">List Of All Our Client Contact Details.</th>
		</tr>
		<tr >
			<th >Id</th>
			<th >Full Name</th>
			<th >Email </th>
            <th >Address</th>
            <th >Contact Number</th>
			<th>Messages</th>
         </tr>
	<?php
	    while($rows=mysqli_fetch_assoc($run))
	    {
	    	?>
	    	<tr>
	    	<td align="center"><?php echo $rows['id'];?></td>
			<td align="center"><?php echo $rows['uname'];?></td>
			<td align="center"><?php echo $rows['uemail'];?></td>
            <td align="center"><?php echo $rows['address'];?></td>
            <td align="center"><?php echo $rows['contactnumber'];?></td>
	    	<td align="center"><?php echo $rows['umessage'];?></td>
	        </tr>
	        <?php
	    }	
	  ?>
    </table>
</section>

<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Team</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">A Dedicated Team: Our Greatest Asset <br><b>Y developers & homes </b>takes great pride in its outstanding team of experts. Our team is made up of Proprietor, designers, architects, and a wonderful troop of supporting staff.


</p>
    </div>
    <div class="flex flex-wrap -m-2">
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Sachin kumar</h2>
            <p class="text-gray-500">architect</p>
          </div>
        </div>
      </div>
     <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="image/d_pic_resize.jpg">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">K.N.Roy</h2>
            <p class="text-gray-500">Civil Engineer</p>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="image/k_pic_resize.jpg">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Durgesh Kumar&K.N.Roy</h2>
            <p class="text-gray-500">Proprietor&Founder</p>
          </div>
        </div>
      </div>
  </div>
</div>
</section>

<section>
        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
          <a class="text-indigo-500">yhomesrnc@gmail.com</a><br>
          <a class="text-indigo-500">Phone:+91 7004585700</a><br>
          <a class="text-indigo-500">+91 9835838004</a>
          <p class="leading-normal my-5">Don Bosco Road
            <br>Hesag Hatia Ranchi 834003
          </p>
          <span class="inline-flex">
            <a href="https://www.facebook.com/pages/category/Real-Estate/Y-Developers-Homes-103926558063647/" class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a href="https://vymaps.com/IN/Y-Developers-Homes-103928341396802/" class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
        </div>
</section>


    </body>
    </html>

