/*
Get event ID first
Then set an array to hold the IDs
 */

const authorID = "OL30250A";
//Authors_Olid = [OL9096427A]
//console.log(Authors_Olid)
var authorsImg = document.getElementById("authors-pic");
var authorsName = document.getElementById("authors-name");
var authorsBio = document.getElementById("authors-bio");
var authorsDob = document.getElementById("authors-dob");
var popularWork = document.getElementById("popular-work");
var otherWork = document.getElementById("other-work");

//get basic info
fetch (`https://openlibrary.org/authors/${authorID}.json`)
  .then(res => res.json())
  .then(data => displayData(data));

  function photoURL(photoID) {
    return `https://covers.openlibrary.org/b/id/${photoID}-L.jpg`
  }


  function displayData(data) {
    console.log(data)

    //get data
    const photoID = data.photos[0];
    console.log(photoID);
    let url = photoURL(photoID);
    console.log(url);

    const name = data.name;

    const bio = data.bio;
    const dob = data.birth_date;
   
    //const otherWork = data.top_work;

    //display
    authorsName.textContent = name;
    authorsBio.textContent = bio;
    authorsImg.src = url;

    if (dob) {
      authorsDob.textContent = dob;
    } else {
      authorsDob.classList.add("hidden");
    }
}
  


//seperating the author's name
 /* Name = data.name;
 let splitName = Name.split(", ");
 console.log*/

//
//fetch top work
fetch ("https://openlibrary.org/search/authors.json?q=E.%20B.%20White")
  .then(res => res.json())
  .then(tp => displayTopWork(tp));

  function displayTopWork(tp) {
    console.log(tp);

    // top work
     const popWork = tp.docs[0].top_work;
     console.log(popWork);

     //display
     popularWork.textContent = popWork;
  }


  //I cant find a way to change the author in this link
  //fetching 3 other works
fetch (`https://openlibrary.org/authors/${authorID}/works.json?limit=3&include_editions=false`)
  .then(res => res.json())
  .then(ow => displayWorks(ow));

  workTitles = "";

  function displayWorks(ow) {
    console.log(ow);

    for (i in ow.entries) {

      console.log(i);
      let works = ow.entries[i];
      console.log(works.title);

      let titles = document.createElement("li");
      titles.textContent = works.title;

      otherWork.appendChild(titles);
      
      
      
    }

 

  
    
    
  }

 

