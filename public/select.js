var select = document.querySelector("#userCountry");
fetch("https://restcountries.eu/rest/v2/all")
.then(function(response){
 return response.json();
})
.then(function(data){
 for (pais of data) {
   var option = '<option value="' + pais.name + '">' + pais.name + '</option>';
   select.innerHTML += option;
 }
})

select.onchange = function() {
 if (select.value == 'Argentina') {
   fetch("https://dev.digitalhouse.com/api/getProvincias")
   .then(function(response){
     return response.json();
   })
   .then(function(data){
     var select2 = document.querySelector("#provincia");
     select2.innerHTML = '<select id="provincias" name="province" ></select>';
     var select3 = document.querySelector("#provincias");
     for (provincia of data) {

       var option2 = '<option value="' + provincia.state + '">' + provincia.state + '</option>';
       select3.innerHTML += option2;
     }
   })
 }
}
