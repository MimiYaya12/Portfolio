<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css'rel='stylesheet'>
  <title>weather</title>
</head>
<body>
  <div class="wrapper">
    <header><i class="bx bx-left-arrow-alt"></i>Weather App</header>
    <section class="input-part">
      <p class="info-txt pending">Please entre a valid city name</p>
      <input type="text" placeholder="Entre city name" spellcheck="false" required>
      <div class="separator"></div>
      <button>Get Device Location</button>
    </section>
    <section class="weather-part">
     <img src="WeatherIcons/cloud.svg" alt=" WeatherIcons"> 
      <div class="temp">
        <span class="numb">13</span>
        <span class="deg">°</span>C
      </div>
      <div class="weather">Broken Clouds</div>
      <div class="location">
        <i class="bx bx-map"></i>
        <span>Paris</span>
      </div>
      <div class="bottom-details">
        <div class="column feels">
         <i class="bx bxs-thermometer"></i> 
         <div class="details">
          <div class="temp">
            <span class="numb-2">17</span>
            <span class="deg">°</span>C
          </div>
          <p>Feels like</p>
         </div>
        </div>   
        <div class="column humiidity">
          <i class="bx bxs-droplet-half"></i> 
          <div class="details">
            <span>84%</span>
            <p>Humidity</p>
           </div> 
          </div>
         </div>    
         <a href=""></a>

      </div>
    </section> 

   </div>
  <script src="script.js"></script>
</body>
</html>