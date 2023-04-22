

function test(){
    document.getElementById("reviews").value;
    let review1 = "Used for the first time, highly recommend, good price and workmanship. Definitely be back again.Will be Back, Mr W"
    let review2 = "Sorted my daughters bike with great work and professionalism. Explained problems well and gave great confidence that they were genuine in their diagnosis and the repairs required. Very pleased she has a local garage we can trust.Professional, Mr W";
    let review3 = "I do not usually write reviews, but this is the best cycle repairs shop in Bristol that provides an excellent service. All staff have a good knowledge of the industry, and they are friendly! I would highly recommend to all.Highly Recommended, Mr M"
    let review4="Never patronising and you always feel like they’ve been honest and done you the best deal. Trust them implicitly.Excellent, Mrs B"
    
    /*setTimeout(document.getElementById("reviews-box").innerHTML=review1), 2000;
    
    document.getElementById("reviews-box").style.backgrounscolor="red";
    document.getElementsByClassName("reviews-box").style.color= "green"
    console.log(review1)
    setTimeout(document.getElementById("reviews").innerHTML=review2), 2000
    console.log(review2)
    setTimeout(document.getElementById("reviews").innerHTML=review3), 2000
    console.log(review3)
    */
    
    // Run anonymous function after 5,000 milliseconds (5 seconds)
    setInterval(() => {
        // Run code
        document.getElementById("reviews").innerHTML=review1
        document.getElementById("reviews").style.color= "brown";
        document.getElementById("reviews").style.opacity= "20%";
        document.getElementById("reviews").style.transitionDuration="8s";
        document.getElementById("reviews").style.opacity= "100%";
        console.log("part 2"+review1)
    }, 5000);
    setInterval(() => {
        // Run code
        document.getElementById("reviews").innerHTML=review2;
        document.getElementById("reviews").style.opacity= "20%";
        document.getElementById("reviews").style.transitionDuration="8s";
        document.getElementById("reviews").style.opacity= "100%";
        console.log("part 2"+review2)
    }, 10000);
    setInterval(() => {
        // Run code
        document.getElementById("reviews").innerHTML=review3
        document.getElementById("reviews").style.opacity= "20%";
        document.getElementById("reviews").style.transitionDuration="8s";
        document.getElementById("reviews").style.opacity= "20%";
        console.log("part 2"+review3)
    }, 15000);
    }
    