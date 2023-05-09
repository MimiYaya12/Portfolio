  const wrapper = document.querySelector(".wrapper"),
  inputPart = wrapper.querySelector(".input-part"),
  infoTxt = inputPart.querySelector(".info-txt"),
  inputField = inputPart.querySelector(".input");

  inputField.addEventListener("keyup", e =>{
   // if user pressed enter btn and input value is not empty
  if(e.key == "Enter" && inputField.value !=""){
       requestApi(inputField.value);
  }
 });

 function requestApi(city){
   let api = `https://api.openweathermap.org/data/2.5/weather?lat={lat}&lon={lon}&appid={API key}}`;
   fetch(api).then(response => console.log(response.json()) );
 }
