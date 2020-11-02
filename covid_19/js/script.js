	  		//Get The Button 
	  		myButton = document.getElementById("myBtn");

	  		// When the user srcolldown 20px from the top of document , show the button
	  		window.onscroll = function() {scrollFunction()};

	  		function scrollFunction(){
	  			if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
	  				myButton.style.display = "block";
	  				
	  			}else{
	  				myButton.style.display = "none";

	  			}
	  		}

	  		// When the user click on the button  scroll to the top of button

	  		function topFnct(){
	  			document.body.scrollTop = 0; // for safari
	  			document.documentElement.scrollTop = 0;  // other brower like crome firefox opere etc
	  		}


// live data fetch by corona api code

	  		function fetch(){
	  			$.get("https://api.covid19api.com/summary",

	  				function(data){
	  					//console.log(data['Countries'].length);
	  					var tbvle = document.getElementById("tbvle");
	  					//alert(tbvle);
	  					for(var i = 1; i<(data['Countries'].length); i++){
	  						var x = tbvle.insertRow();
	  						x.insertCell(0);
	  						tbvle.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
	  						tbvle.rows[i].cells[0].style.background = '#7a4b91';
	  						tbvle.rows[i].cells[0].style.color = '#fff';
	  						
	  						x.insertCell(1);
	  						tbvle.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
	  						tbvle.rows[i].cells[1].style.background = '#4bb7d8';
	  						
	  						x.insertCell(2);
	  						tbvle.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
	  						tbvle.rows[i].cells[2].style.background = '#c6e2ff';
	  						
	  						x.insertCell(3);
	  						tbvle.rows[i].cells[3].innerHTML = data['Countries'][i-1]['NewDeaths'];
	  						tbvle.rows[i].cells[3].style.background = '#4bb7d8';
	  						
	  						x.insertCell(4);
	  						tbvle.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
	  						tbvle.rows[i].cells[4].style.background = '#c6e2ff';
	  						
	  						x.insertCell(5);
	  						tbvle.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
	  						tbvle.rows[i].cells[5].style.background = '#4bb7d8';
	  						
	  						x.insertCell(6);
	  						tbvle.rows[i].cells[6].innerHTML = data['Countries'][i-1]['TotalRecovered'];
	  						tbvle.rows[i].cells[6].style.background = '#c6e2ff';
	  						
	  					}
	  				}
	  			)
	  		}


