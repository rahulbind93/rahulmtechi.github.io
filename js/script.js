	  		$('.count').counterUp({
	  			delay:10,
	  			time:3000
	  		})	
	  		
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

	  		$(document).ready(function(){
	  			setTimeout(function(){
	  				$('#popUpMain').css('display','block');
	  			}, 5000);
	  		});

	  		$('.submitId').click(function(){
	  				$('#popUpMain').css('display','none');
	  		});

	  		// loader start //


	  		var preloader = document.getElementById('loader');

	  		function myFunction(){
	  			preloader.style.display = 'none';
	  		}


// *********** live quotation script starts *************
	
		const quotes = document.getElementById("quotes");
		const author = document.getElementById("author");
		const tweet = document.getElementById("tweetMe");
		let realData = "";
		let quotesData = "";

	//  tweet function starts 

		const tweenNow = () => {
			let tweetPost = `https://twitter.com/intent/tweet?text=${quotesData.text}`;
			window.open(tweetPost);
		};

	//  tweet function ends 


		const getNewQuotes = () => {
			let rnum = Math.floor(Math.random() * 20);
			// console.log(realData[rnum].author);
			// console.log(realData[rnum].text);
			quotesData = realData[rnum];
			quotes.innerText = `${quotesData.text}`;
			quotesData.author == null
				? (author.innerText = "unKnown") : 
				author.innerText = `${quotesData.author}`;

			// quotes.innerText = `${quotesData.text}`;
			// author.innerText = `${quotesData.author}`;
		};
		const getQuotes = async () => {
			const api = "https://type.fit/api/quotes";	
			try {
				let data = await fetch(api);
				realData = await data.json();
				getNewQuotes();
				// console.log(realData[10].author);
				// console.log(realData[10].text);

			} catch(error) {}
		};
		tweet.addEventListener("click",tweenNow);
		newQ.addEventListener("click",getNewQuotes);
		getQuotes();
	
// *********** live quotation script starts *************
