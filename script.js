var nbt_init=0
/* to detecting screensize changes start */
$(window).resize(function() {
  
 if(document.documentElement.clientWidth+15<=767 && nbt_init==0){
  console.log(document.documentElement.clientWidth)
  $('.cards .swiper_projects .cards').each(function() {
    $(this).addClass('swiper-wrapper');
    $(this).removeClass('cards')
});

  $('.cards .swiper_projects .swiper-wrapper .swiper-slidee').each(function() {
    $(this).addClass('swiper-slide');
    $(this).removeClass('swiper-slidee')
});
this.swiper_proj()
nbt_init=1;
 }
//  else{
//   $('.cards .swiper_projects .swiper-wrapper').each(function() {
//     $(this).removeClass();
//     $(this).addClass('cards'); 
// } );

// $('.cards .swiper_projects .cards .swiper-slide').each(function() {

//   $(this).removeClass();
//   $(this).attr("style","")
//   $(this).addClass('swiper-slidee');
// });
 
//  }

}).resize()
/* to detecting screensize changes end */


 function swiper_proj  (){ new Swiper('.swiper_projects', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 1,
  loop: false,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: "fraction"
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});}



var swiperdistinctions = new Swiper('.distinctions-swiper', {
  slidesPerView: 3,
  spaceBetween: 5,
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  loopedSlides: 5,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },


  
});


/* for DropDown challenge menu Start */

   // this is the function caller for click into drop down menu
   $(document).ready(function() {
    $(".select-menu:has(#select-btn)").click(function(event) { // Added 'event' parameter
      if (!$(this).hasClass("locked")) {
        $(".select-menu .options-menu").not($(this).children(".options-menu")).removeClass("active");
        $(this).children(".options-menu").toggleClass("active");
      }
      event.stopPropagation();
    });
  });
  
  

//this script closes menu when clicked outside of drop down menu.
$(document).click(function(event){
    var $triggerOn = $(".select-menu");
    if($triggerOn !== event.target && $triggerOn.has(event.target)){
        $(".select-menu .options-menu").removeClass("active");

    }// END: if statement            
});// END: .on  

/* for DropDown challenge menu end*/
$('.list-menu-check').click(()=>{
  
    $(".list-menu").toggleClass( "active" );

  
})


var TrandingSlider = new Swiper('.tranding-slider', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  speed:10,
  loop: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 2.5,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {
    init: function () {
      gameswipperchange();
    },
  }
});


TrandingSlider.on('transitionEnd', function() {
  gameswipperchange();

});

function gameswipperchange(){
  $("#game-description").html($(".swiper-slide-active .desc-game").html())
}



// const profbtn = document.getElementById("prof-btn");
// const fleshbtn = document.getElementById("flesh-btn");
// const dropdownMenu = document.getElementById("dropdown");

// const projcard = document.getElementById("project-card");
// const cardstate=  document.getElementById("card-num"); 





// // Toggle dropdown function
// const toggleDropdown = function () {
//   dropdownMenu.classList.toggle("show");

// };


// // Toggle dropdown open/close when dropdown button is clicked
// if(profbtn){

// profbtn.addEventListener("click", function (e) {
//   e.stopPropagation();
//   toggleDropdown();
// });

// }

// if(profbtn){

// fleshbtn.addEventListener("click", function (e) {
//   e.stopPropagation();
//   toggleDropdown();
// });

// }
// // Close dropdown when dom element is clicked

// document.documentElement.addEventListener("click", function () {
//   if (dropdownMenu.classList.contains("show") && !dropdownMenu.contains( event.target )) {
//     toggleDropdown();
//   }

//   if (dropdownMenu.classList.contains("show") && !dropdownMenu.contains( event.target )) {
//     toggleDropdown();
//   }
// });

// Close dropdown when dom element is clicked End

$("#comminautes").on('click',()=>{

  if($("#com-menu").css('display')==="none"){
    $("#com-menu").css("display","flex");
  }else{
    $("#com-menu").css("display","none");
  }
  }
  )
  
  $(document).mouseup(function(e)
  {
  var container = $("#com-menu");
  if (!container.is(e.target) && container.has(e.target).length === 0)
  {
  container.hide ();
  }
  });

let gift_image = document.getElementById("gift-img");
let gift_images = ["jeu1.png","cars2.png","cars3.png"]
let i=0;
let giftinterval;

if(gift_image){


gift_image.addEventListener("mouseover",function(e){
  giftinterval=setInterval(()=>{
    gift_image.style.backgroundImage= "url('/img/"+gift_images[i]+"')";
    i++;
    if(i==gift_images.length){
      i=1;
    }
    console.log("i is "+i)
  },1300)

})

}


if(gift_image){
gift_image.addEventListener("mouseout", function () {

    clearInterval(giftinterval);
    gift_image.style.backgroundImage= "url('/img/gift-car.svg')";
});
}
// gift images End

// dates info start

let datepart = document.getElementById("datepart");
let dategame = document.getElementById("dategame");
let part = document.getElementById("part");
let tirage = document.getElementById("tirage");

if(datepart){
  datepart.classList.toggle("date-show");
}

if(datepart){
  datepart.addEventListener("click",function(e){
    console.log("clicke1")
    
    if(!datepart.classList.contains("date-show")){


      e.stopPropagation();
      datepart.classList.toggle("date-show");
      if(part && tirage){
        part.classList.toggle("hide");
        tirage.classList.toggle("hide");
      }
      if(dategame){
      dategame.classList.toggle("date-show");
      }

    }
  
  })
}

if(dategame){
  
  dategame.addEventListener("click",function(e){
    
    if(!dategame.classList.contains("date-show")){
      
    e.stopPropagation();
    dategame.classList.toggle("date-show");
    if(part && tirage){
      part.classList.toggle("hide");
      tirage.classList.toggle("hide");
    }
    if(datepart){
      datepart.classList.toggle("date-show");
    }
  }
  })

  
}

// dates info end


// project details start
let details = document.getElementById("details");
let moredetails = document.getElementById("more-details");
let detailstab = document.getElementById("details-tab");
let moredetailstab = document.getElementById("more-details-tab");
if(detailstab){

detailstab.addEventListener("click",function(e){
  console.log("clicked1")
  if(detailstab.classList.contains("hide-after")){
    e.stopPropagation();
    
    detailstab.classList.toggle("hide-after");
    detailstab.classList.toggle("opacity");
    if(moredetailstab){
      moredetailstab.classList.toggle("hide-after");
      moredetailstab.classList.toggle("opacity");
    }
    if(moredetails && details ){
      details.classList.toggle("hide");
      moredetails.classList.toggle("hide");
    }
  }


})
}

if(moredetailstab){
  moredetailstab.addEventListener("click",function(e){
 
    console.log("clicked2")
    if(moredetailstab.classList.contains("hide-after")){
      e.stopPropagation();
      moredetailstab.classList.toggle("hide-after");
      moredetailstab.classList.toggle("opacity");
      if(detailstab){
        detailstab.classList.toggle("hide-after");
        detailstab.classList.toggle("opacity");
      }
      if(moredetails && details ){
        details.classList.toggle("hide");
        moredetails.classList.toggle("hide");
      }
    }
   
    })
}

let swiper_slide_active = document.getElementsByClassName("swiper");


if(swiper_slide_active[0]){
  swiper_slide_active[0].addEventListener("change",()=>{
    console.log("swiper_slide_active")
  
  })
  
}



var ils = document.querySelectorAll(".swiper-slide-active .select_ul li");
var def_option =document.querySelectorAll(".swiper-slide")



function onchangeoption(){

 

    default_option = document.querySelectorAll(".default_option");

    default_option.forEach((option1) => {
      option1.addEventListener("click",function(e){

        e.stopPropagation();
        this.parentElement.classList.toggle("active");
      })

    });

      ils = document.querySelectorAll(".select_ul li");
      ils.forEach((option2) => {
        option2.addEventListener('click',(e)=>{
          e.stopPropagation();
  
          e.currentTarget.parentElement.parentElement.getElementsByClassName('default_option')[0].innerHTML = "<li>"+e.currentTarget.innerHTML+"</li>";
          console.log( default_option[0])
          e.currentTarget.parentElement.parentElement.classList.toggle("active");
        });
      
      })
  

      
   
  
  

}

onchangeoption()



var react_popup = document.querySelectorAll(".react")

if(react_popup){
react_popup.forEach((react) => {
  react.addEventListener('click',(e)=>{
    e.stopPropagation();
    e.currentTarget.getElementsByClassName('images')[0].classList.toggle("hide");
  });

})

}















/* survey start */
let survey_questions=[
  {
      question:"qazea 1 ?",
      question_type:"single",
      response:[{
          content:"rep1",
          img_url:"./img/01.svg",
      },{
          content:"rep2",
          img_url:"./img/04.svg"
      }]
  },
  {
      question:"question 2 ?",
      question_type:"multiple",
      response:[{
          content:"rep1",
          img_url:"./img/02.svg"
      },{
          content:"rep2",
          img_url:"./img/01.svg"
      },
      {
          content:"rep3",
          img_url:"./img/02.svg"
      }
  ]
  },
  {
      question:"qazea 3 ?",
      question_type:"single",
      response:[{
          content:"rep1",
          img_url:"./img/01.svg"
      },{
          content:"rep2",
          img_url:"./img/03.svg"
      }]
  }
]

var current_question;
var current_question_number=0;
let close = document.getElementById("close");
let survey_intro = document.getElementById('intro')
let survey_outro = document.getElementById('outro')
let survey_questions_bloc = document.getElementById('survey_questions')
let survey_control = document.getElementById('survey_control')
let survey_progress = document.getElementById('survey_progress')
let survy_content=document.getElementById('sondage-content');
let sondage_footer=document.getElementById("sondage-footer");
let end_survey =document.getElementById("end_survey"); 
function getcheckbox(){
  
  let checkboxs=document.querySelectorAll(".response input[type='checkbox']")
  if(checkboxs && checkboxs.length>0){
      checkboxs.forEach((e)=>{
          e.addEventListener('change',(e1)=>{
              
              e.parentElement.classList.toggle("checkbox-color");
          })
      })
  }
}
getcheckbox()
function translatesurveyleft(){
  let sondage=document.getElementById('sondage');
  sondage.classList.toggle('slideleft')
  setTimeout(()=>{
      sondage.classList.toggle('slideleft')
  },1000)


  if(current_question_number<survey_questions.length+1  ){
      current_question_number=current_question_number+1;
  }
  verifyblocdisplay()
  generateQuestion();

  let progress_bar = document.getElementsByClassName("bar_serv")[0];
  progress_bar.style.width=(current_question_number*100)/survey_questions.length+"%"
}

function translatesurveyright(){
  
  let sondage=document.getElementById('sondage');
  sondage.classList.toggle('slideright')
  setTimeout(()=>{
      sondage.classList.toggle('slideright')
  },1000)
 
  if(current_question_number>1 ){
      current_question_number=current_question_number-1;
  }
  verifyblocdisplay()

  generateQuestion();

  let progress_bar = document.getElementsByClassName("bar_serv")[0];
  progress_bar.style.width=(current_question_number*100)/survey_questions.length+"%"

}

function generateQuestion(){
  
  let question = document.getElementById('title')
  let subtitle = document.getElementById('subtitle')
  document.getElementsByClassName('multi_questions')[0].innerHTML=""
  document.getElementsByClassName('single_questions')[0].innerHTML=""

  question.textContent=survey_questions[current_question_number-1].question;
  if(survey_questions[current_question_number-1].question_type=="multiple"){

      subtitle.textContent=" Plusieurs réponses possibles";
      survey_questions[current_question_number-1].response.forEach((res)=>{
         let question_div=document.createElement('div')
          question_div.classList.add('response')

          var x = document.createElement("INPUT");
          x.setAttribute("type", "checkbox");
          var y = document.createElement("label");
          y.textContent=res.content;
          question_div.appendChild(x);
          question_div.appendChild(y);
          document.getElementsByClassName('multi_questions')[0].appendChild(question_div)
      })

  }else  if(survey_questions[current_question_number-1].question_type=="single"){
      subtitle.textContent="Une seule réponse possible";
      survey_questions[current_question_number-1].response.forEach((res)=>{
          let question_div=document.createElement('div')
           question_div.classList.add('response')

           var x = document.createElement("INPUT");
           x.setAttribute("type", "radio");
           x.setAttribute("name", "radio");

           var y = document.createElement("label");
           var img =document.createElement("img")
           img.setAttribute('src',res.img_url)
           y.textContent=res.content;
           question_div.appendChild(img);
           question_div.appendChild(x);
           question_div.appendChild(y);
           document.getElementsByClassName('single_questions')[0].appendChild(question_div)
       })
  }
  questions_indicator = document.getElementsByClassName('questions_indicator')[0].innerHTML='Question '+(current_question_number)+"/"+survey_questions.length
  getcheckbox()

}


function verifyblocdisplay(){
  if(survey_questions_bloc && survey_outro && survey_intro && survey_control && survey_progress ){
  if(current_question_number==0){
    survey_questions_bloc.style.display="none";
    survey_outro.style.display="none";
    survey_intro.style.display="flex";
    survey_control.style.display="none";
    survey_progress.style.display="none";
  }else if(current_question_number == survey_questions.length+1){
    survey_questions_bloc.style.display="none";
    survey_outro.style.display="flex";
    survey_intro.style.display="none";
    survey_control.style.display="none";
    survey_progress.style.display="none";
  }else{
    survey_questions_bloc.style.display="initial";
    survey_outro.style.display="none";
    survey_intro.style.display="none";
    survey_control.style.display="flex";
    survey_progress.style.display="flex";
  }
}
}
verifyblocdisplay()
if(close){
close.addEventListener("click",()=>{
  survy_content.classList.toggle('hide')
  current_question_number=0
})
}
if(end_survey){
end_survey.addEventListener("click",()=>{
  survy_content.classList.toggle('hide')
  current_question_number=0
})
}
if(sondage_footer){


sondage_footer.addEventListener('click',()=>{
  survy_content.classList.toggle('hide')
  verifyblocdisplay()
})
}

/* survey end */


/* login/register start */
  
function translateloginleft(element){

  element.classList.toggle('slideleft')
  setTimeout(()=>{
      element.classList.toggle('slideleft')
  },1000)
}


//for test 
function emailExist(email){
  if(email==="fanvoicetest@fanvoice.com"){
      return true
  }else{
      return false
  } 
}
// for test

function veriflogin(){
  let login=document.getElementById('login')
  let email_field = document.getElementById('login_field')
  let password_field= document.getElementById('password_field')
  let verified_mail = document.getElementById("verified_mail")
  if(email_field && email_field.lastElementChild.value.length>0 ){
    if(emailExist(email_field.lastElementChild.value)){
      console.log(email_field)
      email_field.style.display="none";
     
      if(password_field && verified_mail){
          verified_mail.getElementsByTagName("p")[0].innerHTML=email_field.lastElementChild.value;
          verified_mail.style.display="initial"
          password_field.style.display="initial"
          translateloginleft(login)
      }
    }
      else{
        let registeremail=document.getElementById('register-email')
        if(registeremail){
            registeremail.value= email_field.lastElementChild.value;
        }
        registerdisplay()
       }
  }
}


function translateloginright(){
  let login=document.getElementsByClassName('sondage')[0]

  login.classList.toggle('slideright')
  setTimeout(()=>{
      login.classList.toggle('slideright')
  },1000)

}
function registerdisplay(){
  let login=document.getElementById('login')
  let login_content =document.getElementById('login-content')
  let register_content=document.getElementById('register-content')

  login_content.classList.toggle('hide')
  register_content.classList.toggle('hide')
  translateloginleft(login)
}

function verifSignup(){
  let login=document.getElementById('login')
  let form_signup=document.getElementById('form-signup')
  let rules_signup=document.getElementById('rules-signup')
  form_signup.classList.toggle('hide')
  rules_signup.classList.toggle('hide')
  translateloginleft(login)
}

function verifRules(){
  let login=document.getElementById('login')
  let confirm_signup=document.getElementById('confirm-signup')
  let rules_signup=document.getElementById('rules-signup')
  confirm_signup.classList.toggle('hide')
  rules_signup.classList.toggle('hide')
  translateloginleft(login)
}


function endSignup(){
  let login_wrapper = document.getElementById('login-wrapper')
  login_wrapper.classList.toggle('hide')
}
function open_close_Signup(){
  let login_wrapper = document.getElementById('login-wrapper')
  console.log(login_wrapper)
  login_wrapper.classList.toggle('hide')
}



/* login/register End */




/* Edit Profile Page BEGIN */

/* profile page navigation start (challenge/badge/history) */

// Event handler for the "defis-btn" click event
$("#defis-btn").on('click', (el) => {
  // Check if the "page-defis" element is currently hidden
  if ($("#page-defis").css('display') === "none") {
    navigate(el); // Call the navigate function
  }
});

// Event handler for the "badge-btn" click event
$("#badge-btn").on('click', (el) => {
  // Check if the "page-badge" element is currently hidden
  if ($("#page-badge").css('display') === "none") {
    navigate(el); // Call the navigate function
  }
});

// Event handler for the "history-btn" click event
$("#history-btn").on('click', (el) => {
  // Check if the "page-histo" element is currently hidden
  if ($("#page-histo").css('display') === "none") {
    navigate(el); // Call the navigate function
  }
});

// Function to handle navigation and display of pages
function navigate(element) {
  // Check if the clicked button is the "defis-btn"
  if (element.currentTarget.id == "defis-btn") {
    $("#page-defis").css("display", "block"); // Show the "page-defis" element
    $("#defis-btn").addClass('active'); // Add the "active" class to the "defis-btn" button
  } else {
    $("#page-defis").css("display", "none"); // Hide the "page-defis" element
    $("#defis-btn").removeClass('active'); // Remove the "active" class from the "defis-btn" button
  }

  // Check if the clicked button is the "badge-btn"
  if (element.currentTarget.id == "badge-btn") {
    $("#page-badge").css("display", "block"); // Show the "page-badge" element
    $("#badge-btn").addClass('active'); // Add the "active" class to the "badge-btn" button
  } else {
    $("#page-badge").css("display", "none"); // Hide the "page-badge" element
    $("#badge-btn").removeClass('active'); // Remove the "active" class from the "badge-btn" button
  }

  // Check if the clicked button is the "history-btn"
  if (element.currentTarget.id == "history-btn") {
    $("#page-histo").css("display", "block"); // Show the "page-histo" element
    $("#history-btn").addClass('active'); // Add the "active" class to the "history-btn" button
  } else {
    $("#page-histo").css("display", "none"); // Hide the "page-histo" element
    $("#history-btn").removeClass('active'); // Remove the "active" class from the "history-btn" button
  }
}


// Historique de participation buttons //

$(document).ready(function() {
  var lastClickedElement = $("#btn-all"); // Initialize with the "#btn-all" element

  // Add click event listener to buttons with specified IDs
  $("#btn-all, #btn-contribution, #btn-reponse, #btn-reaction, #btn-badge").click(function() {
    // Remove the highlighted class from the last clicked element
    if (lastClickedElement !== null) {
      lastClickedElement.removeClass("highlighted");
    }

    // Add the highlighted class to the currently clicked element
    $(this).addClass("highlighted");

    // Store the reference to the currently clicked element
    lastClickedElement = $(this);
  });
});


// Statut
$(document).ready(function() {
  // Select the image element within the "statut" class under the "information-statut" class
  var statutImgElement = $('.information-statut .statut img');
  // Select the "statut" element within the "information-statut" class
  var statutElement = $('.information-statut .statut');

  // Attach a click event handler to the statutImgElement
  statutImgElement.on('click', function() {
    // Get the current text content of the statutElement and remove any leading/trailing whitespace
    var currentStatut = statutElement.text().trim();

    // Create a new input element with type "text" and set its value to the currentStatut
    var inputElement = $('<input>').attr({
      'type': 'text',
      'value': currentStatut
    });

    // Clear the contents of the statutElement
    statutElement.empty();

    // Append the inputElement to the statutElement
    statutElement.append(inputElement);
    // Append the statutImgElement back to the statutElement
    statutElement.append(statutImgElement);

    // Attach a blur event handler to the inputElement
    inputElement.on('blur', function() {
      // Get the new value entered in the inputElement
      var newStatut = inputElement.val();

      // Remove the inputElement from the DOM
      inputElement.remove();

      // Set the text content of the statutElement to the newStatut
      statutElement.text(newStatut);
      // Append the statutImgElement back to the statutElement
      statutElement.append(statutImgElement);
    });
  });
});



var prenomImgElement = document.querySelector('.information-firstname .firstname img');
var prenomElement = document.querySelector('.information-firstname .firstname');

prenomImgElement.addEventListener('click', function() {
  // Get the current text content of the prenomElement and remove any leading/trailing whitespace
  var currentPrenom = prenomElement.textContent.trim();

  // Create a new input element
  var inputElement = document.createElement('input');
  inputElement.type = 'text';
  inputElement.value = currentPrenom;

  // Clear the contents of the prenomElement
  prenomElement.textContent = '';

  // Append the inputElement to the prenomElement
  prenomElement.appendChild(inputElement);
  // Append the prenomImgElement back to the prenomElement
  prenomElement.appendChild(prenomImgElement);

  // Attach a blur event handler to the inputElement
  inputElement.addEventListener('blur', function() {
    // Get the new value entered in the inputElement
    var newPrenom = inputElement.value;

    // Remove the inputElement from the prenomElement
    prenomElement.removeChild(inputElement);

    // Set the text content of the prenomElement to the newPrenom
    prenomElement.textContent = newPrenom;
    // Append the prenomImgElement back to the prenomElement
    prenomElement.appendChild(prenomImgElement);
  });
});

//Nom de famille
var surnameImgElement = document.querySelector('.information-surname .surname img');
var surnameElement = document.querySelector('.information-surname .surname');

surnameImgElement.addEventListener('click', function() {
  // Get the current text content of the surnameElement and remove any leading/trailing whitespace
  var currentSurname = surnameElement.textContent.trim();

  // Create a new input element
  var inputElement = document.createElement('input');
  inputElement.type = 'text';
  inputElement.value = currentSurname;

  // Clear the contents of the surnameElement
  surnameElement.textContent = '';

  // Append the inputElement to the surnameElement
  surnameElement.appendChild(inputElement);
  // Append the surnameImgElement back to the surnameElement
  surnameElement.appendChild(surnameImgElement);

  // Attach a blur event handler to the inputElement
  inputElement.addEventListener('blur', function() {
    // Get the new value entered in the inputElement
    var newSurname = inputElement.value;

    // Remove the inputElement from the surnameElement
    surnameElement.removeChild(inputElement);

    // Set the text content of the surnameElement to the newSurname
    surnameElement.textContent = newSurname;
    // Append the surnameImgElement back to the surnameElement
    surnameElement.appendChild(surnameImgElement);
  });
});


//Proffesion
var professionImgElement = document.querySelector('.information-profession .profession img');
var professionElement = document.querySelector('.information-profession .profession');

professionImgElement.addEventListener('click', function() {
  // Get the current text content of the professionElement and remove any leading/trailing whitespace
  var currentProfession = professionElement.textContent.trim();

  // Create a new input element
  var inputElement = document.createElement('input');
  inputElement.type = 'text';
  inputElement.value = currentProfession;

  // Clear the contents of the professionElement
  professionElement.textContent = '';

  // Append the inputElement to the professionElement
  professionElement.appendChild(inputElement);
  // Append the professionImgElement back to the professionElement
  professionElement.appendChild(professionImgElement);

  // Attach a blur event handler to the inputElement
  inputElement.addEventListener('blur', function() {
    // Get the new value entered in the inputElement
    var newProfession = inputElement.value;

    // Remove the inputElement from the professionElement
    professionElement.removeChild(inputElement);

    // Set the text content of the professionElement to the newProfession
    professionElement.textContent = newProfession;
    // Append the professionImgElement back to the professionElement
    professionElement.appendChild(professionImgElement);
  });
});

// Profstats
var profstatsImgElement = document.querySelector('.information-profstats .profstats img');
var profstatsElement = document.querySelector('.information-profstats .profstats');

profstatsImgElement.addEventListener('click', handleProfstatsClick);

function handleProfstatsClick() {
  // Get the current text content of the profstatsElement and remove any leading/trailing whitespace
  var currentProfstats = profstatsElement.textContent.trim();

  // Create a select element with options
  var selectElement = createSelectElement([
    'Etudiant',
    'CDD',
    'CDI privé',
    'CDI fonctionnaire',
    'Sans emploi',
    'Retraité',
    'Chef d\'entreprise',
    'Artisan',
    'Profession libérale'
  ], currentProfstats);

  // Replace the profstatsElement with the selectElement and profstatsImgElement
  replaceElementWithSelect(profstatsElement, selectElement, profstatsImgElement);
}

// City
var cityImgElement = document.querySelector('.information-city .city img');
var cityElement = document.querySelector('.information-city .city');

cityImgElement.addEventListener('click', handleCityClick);

function handleCityClick() {
  // Get the current text content of the cityElement and remove any leading/trailing whitespace
  var currentCity = cityElement.textContent.trim();

  // Create a select element with options
  var selectElement = createSelectElement([
    'Auvergne-Rhône-Alpes',
    'Bourgogne-Franche-Comté',
    'Bretagne',
    'Centre-Val de Loire',
    'Corse',
    'Grand Est',
    'Guadeloupe',
    'Guyane',
    'Hauts-de-France',
    'Ile-de-France',
    'Martinique',
    'Mayotte',
    'Normandie',
    'Nouvelle-Aquitaine',
    'Occitanie',
    'Pays de la Loire',
    'Provence-Alpes-Côte d\'Azur',
    'La réunion',
    'Andere',
    'Autre'
  ], currentCity);

  // Replace the cityElement with the selectElement and cityImgElement
  replaceElementWithSelect(cityElement, selectElement, cityImgElement);
}

// House Area
var houseAreaImgElement = document.querySelector('.information-house-area .house-area img');
var houseAreaElement = document.querySelector('.information-house-area .house-area');

houseAreaImgElement.addEventListener('click', handleHouseAreaClick);

function handleHouseAreaClick() {
  // Get the current text content of the houseAreaElement and remove any leading/trailing whitespace
  var currentHouseArea = houseAreaElement.textContent.trim();

  // Create radio elements for the options
  var nonUrbaineRadio = createRadioElement('house-area-option', ' Non urbaine', 'Non-urbaine');
  var urbaineRadio = createRadioElement('house-area-option', ' Urbaine', 'Urbaine');

  // Check the appropriate radio button based on the current value
  if (currentHouseArea === ' Non urbaine') {
    nonUrbaineRadio.querySelector('input').checked = true;
  } else if (currentHouseArea === ' Urbaine') {
    urbaineRadio.querySelector('input').checked = true;
  }

  // Replace the houseAreaElement with the radio elements and houseAreaImgElement
  replaceElementWithRadios(houseAreaElement, [nonUrbaineRadio, urbaineRadio], houseAreaImgElement);
}


function replaceElementWithRadios(element, radioElements, imgElement) {
  // Clear the contents of the element
  element.textContent = '';

  // Append each radio element to the element
  radioElements.forEach(function (radio) {
    element.appendChild(radio);
  });

  // Append the imgElement back to the element
  element.appendChild(imgElement);

  // Attach change event listeners to the radio elements
  radioElements.forEach(function (radio) {
    radio.addEventListener('change', function () {
      // Get the selected value from the radio input
      var selectedValue = radio.querySelector('input').value;

      // Set the text content of the element to the selected value
      element.textContent = selectedValue;

      // Append the imgElement back to the element
      element.appendChild(imgElement);
    });
  });
}


function createRadioElement(name, label, value) {
  // Create a container element for the radio input and label
  var radioContainer = document.createElement('div');

  // Create the radio input element
  var radioInput = document.createElement('input');
  radioInput.type = 'radio';
  radioInput.name = name;
  radioInput.value = value;

  // Create the label element
  var radioLabel = document.createElement('label');
  radioLabel.textContent = label;

  // Append the radio input and label to the container
  radioContainer.appendChild(radioInput);
  radioContainer.appendChild(radioLabel);

  // Return the container element
  return radioContainer;
}

// House Type
var houseTypeImgElement = document.querySelector('.information-house-type .house-type img');
var houseTypeElement = document.querySelector('.information-house-type .house-type');

houseTypeImgElement.addEventListener('click', handleHouseTypeClick);

function handleHouseTypeClick() {
  // Get the current text content of the houseTypeElement and remove any leading/trailing whitespace
  var currentHouseType = houseTypeElement.textContent.trim();

  // Create radio elements for the options
  var maisonRadio = createRadioElement('house-type-option', ' Maison', 'maison');
  var appartementRadio = createRadioElement('house-type-option', ' Appartement', 'appartement');

  // Check the appropriate radio button based on the current value
  if (currentHouseType === ' Maison') {
    maisonRadio.querySelector('input').checked = true;
  } else if (currentHouseType === ' Appartement') {
    appartementRadio.querySelector('input').checked = true;
  }

  // Replace the houseTypeElement with the radio elements and houseTypeImgElement
  replaceElementWithRadios(houseTypeElement, [maisonRadio, appartementRadio], houseTypeImgElement);
}
//Situation familiale
var maritalStatusImgElement = document.querySelector('.information-maritalstatus .maritalstatus img');
var maritalStatusElement = document.querySelector('.information-maritalstatus .maritalstatus');

maritalStatusImgElement.addEventListener('click', handleMaritalStatusClick);

function handleMaritalStatusClick() {
  // Get the current text content of the maritalStatusElement and remove any leading/trailing whitespace
  var currentMaritalStatus = maritalStatusElement.textContent.trim();

  // Create a select element with options
  var selectElement = createSelectElement(
    ['Marié', 'Célibataire', 'En concubinage', 'Pacsé'],
    currentMaritalStatus
  );

  // Replace the maritalStatusElement with the select element and maritalStatusImgElement
  replaceElementWithSelect(maritalStatusElement, selectElement, maritalStatusImgElement);
}

// with child or no
var familySituationImgElement = document.querySelector('.information-familysituation .familysituation img');
var familySituationElement = document.querySelector('.information-familysituation .familysituation');

familySituationImgElement.addEventListener('click', handleFamilySituationClick);

function handleFamilySituationClick() {
  // Get the current text content of the familySituationElement and remove any leading/trailing whitespace
  var currentFamilySituation = familySituationElement.textContent.trim();

  // Create radio elements for the options
  var avecEnfantsRadio = createRadioElement('family-situation-option', ' Avec enfant(s)', 'Avec enfant(s)');
  var sansEnfantRadio = createRadioElement('family-situation-option', ' Sans enfant', 'Sans enfant');

  // Check the appropriate radio button based on the current value
  if (currentFamilySituation === ' Avec enfant(s)') {
    avecEnfantsRadio.querySelector('input').checked = true;
  } else if (currentFamilySituation === ' Sans enfant') {
    sansEnfantRadio.querySelector('input').checked = true;
  }

  // Replace the familySituationElement with the radio elements and familySituationImgElement
  replaceElementWithRadios(familySituationElement, [avecEnfantsRadio, sansEnfantRadio], familySituationImgElement);
}
//Child live with you or no ?
var childLiveImgElement = document.querySelector('.information-childlive .childlive img');
var childLiveElement = document.querySelector('.information-childlive .childlive');

childLiveImgElement.addEventListener('click', handleChildLiveClick);

function handleChildLiveClick() {
  // Get the current text content of the childLiveElement and remove any leading/trailing whitespace
  var currentChildLive = childLiveElement.textContent.trim();

  // Create radio elements for the options
  var ouiRadio = createRadioElement('child-live-option', ' Oui', 'oui');
  var nonRadio = createRadioElement('child-live-option', ' Non', 'non');

  // Check the appropriate radio button based on the current value
  if (currentChildLive === ' Oui') {
    ouiRadio.querySelector('input').checked = true;
  } else if (currentChildLive === ' Non') {
    nonRadio.querySelector('input').checked = true;
  }

  // Replace the childLiveElement with the radio elements and childLiveImgElement
  replaceElementWithRadios(childLiveElement, [ouiRadio, nonRadio], childLiveImgElement);
}

//Child number
var childNumberImgElement = document.querySelector('.information-childnumber .childnumber img');
var childNumberElement = document.querySelector('.information-childnumber .childnumber');

childNumberImgElement.addEventListener('click', handleChildNumberClick);

function handleChildNumberClick() {
  // Get the current text content of the childNumberElement and remove any leading/trailing whitespace
  var currentChildNumber = childNumberElement.textContent.trim();

  // Create a number input element with the current value
  var numberInput = createNumberInput(currentChildNumber);

  // Replace the childNumberElement with the number input element and childNumberImgElement
  replaceElementWithInput(childNumberElement, numberInput, childNumberImgElement);
}

function createNumberInput(value) {
  // Create an input element of type "number"
  var inputElement = document.createElement('input');
  inputElement.type = 'number';
  inputElement.value = value;
  inputElement.min = 0;
  inputElement.step = 1; // Set the step value to 1 to allow only integers

  // Add an input event listener to handle negative values
  inputElement.addEventListener('input', function() {
    if (inputElement.value < 0) {
      inputElement.value = 0; // If a negative number is entered, set it to 0
    }
  });

  return inputElement;
}



function replaceElementWithInput(element, inputElement, imgElement) {
  // Clear the content of the element
  element.textContent = '';

  // Append the input element and the image element to the element
  element.appendChild(inputElement);
  element.appendChild(imgElement);

  // Add a change event listener to the input element
  inputElement.addEventListener('change', function() {
    // Get the new value from the input element
    var newValue = inputElement.value;

    // Remove the input element from the element
    element.removeChild(inputElement);

    // Set the text content of the element to the new value
    element.textContent = newValue;

    // Append the image element to the element
    element.appendChild(imgElement);
  });
}

// Age Range
var ageRangeImgElement = document.querySelector('.information-age-range .age-range img');
var ageRangeElement = document.querySelector('.information-age-range .age-range');

// Civility
var civilityImgElement = document.querySelector('.information-civility .civility img');
var civilityElement = document.querySelector('.information-civility .civility');

// Additional element
var additionalImgElement = document.querySelector('.information-additional .age-range img');
var additionalElement = document.querySelector('.information-additional .age-range');

// Add event listener to age range, civility, and additional elements
ageRangeImgElement.addEventListener('click', handleAgeRangeClick);
civilityImgElement.addEventListener('click', handleCivilityClick);

function handleAgeRangeClick() {
  var currentAgeRange = ageRangeElement.textContent.trim();

  var selectElement = createSelectElement([
    'Moins de 25 ans',
    '26-34 ans',
    '35-44 ans',
    '45-54 ans',
    '55-64 ans',
    '65 ans ou plus'
  ], currentAgeRange);

  replaceElementWithSelect(ageRangeElement, selectElement, ageRangeImgElement);
}

function handleCivilityClick() {
  var currentCivility = civilityElement.textContent.trim();

  var selectElement = createSelectElement(['Mr', 'Mrs', 'Ms', 'Dr'], currentCivility);

  replaceElementWithSelect(civilityElement, selectElement, civilityImgElement);
}

function handleAdditionalClick() {
  var currentAdditional = additionalElement.textContent.trim();

  var selectElement = createSelectElement([
    'Option 1',
    'Option 2',
    'Option 3',
    'Option 4'
  ], currentAdditional);

  replaceElementWithSelect(additionalElement, selectElement, additionalImgElement);
}

function createSelectElement(options, currentValue) {
  var selectElement = document.createElement('select');

  var placeholderOption = document.createElement('option');
  placeholderOption.value = '';
  placeholderOption.text = 'Sélectionnez votre choix';
  placeholderOption.disabled = true;
  placeholderOption.selected = true;
  selectElement.appendChild(placeholderOption);

  for (var i = 0; i < options.length; i++) {
    var optionElement = document.createElement('option');
    optionElement.value = options[i];
    optionElement.text = options[i];
    if (options[i] === currentValue) {
      optionElement.selected = true;
    }
    selectElement.appendChild(optionElement);
  }

  return selectElement;
}
function replaceElementWithSelect(element, selectElement, imgElement) {
  element.textContent = '';
  element.appendChild(selectElement);
  element.appendChild(imgElement);

  selectElement.addEventListener('change', function() {
    var newValue = selectElement.value;
    element.removeChild(selectElement);
    element.textContent = newValue;
    element.appendChild(imgElement);
  });
}


//------------------


$(document).ready(function() {
  // Click event handler for the "Edit Profile" button
  $("#edit-profile-btn").click(function() {
    // Show the "Edit Profile" page and hide other elements
    $("#page-edit-profile").css("display", "block");
    $("#page-histo, #page-badge, #page-defis, #tableuser").css("display", "none");
  });

  // Click event handler for other pages
  $("#history-btn, #badge-btn, #defis-btn").click(function() {
    // Show the clicked page and hide the "Edit Profile" page
    $("#page-edit-profile").css("display", "none");
    $(this).css("display", "flex");
    $("#tableuser").css("display", "block");
  });
});



$(document).ready(function() {
  // Click event handler for the "Back" button
  $("#backbutton").click(function() {
    // Show the "Defis" page and "Table User" and hide the "Edit Profile" page
    $("#page-defis, #tableuser").css("display", "block");
    $("#page-edit-profile").css("display", "none");
  });
});

$(document).ready(function() {
  // Click event handler for the "Submit" button
  $("#submitbutton").click(function() {
    // Show the "Defis" page and "Table User" and hide the "Edit Profile" page
    $("#page-defis, #tableuser").css("display", "block");
    $("#page-edit-profile").css("display", "none");
  });
});


$(document).ready(function() {
  // Click event handler for elements with the class "toggle-password"
  $(".toggle-password").click(function() {
    // Get the previous sibling input element
    var input = $(this).prev("input");

    // Check the current type of the input field
    if (input.attr("type") === "password") {
      // If it's a password field, change the type to text
      input.attr("type", "text");
      // Add the class "active" to the clicked element
      $(this).addClass("active");
    } else {
      // If it's a text field, change the type to password
      input.attr("type", "password");
      // Remove the class "active" from the clicked element
      $(this).removeClass("active");
    }
  });
});


$('#change-icon').click(function() {
  $('#profile-picture-input').click();
});

$(document).ready(function() {
  // Trigger file input click when "change-picture" element is clicked
  $('.change-picture').click(function() {
    $('#file-input').click();
  });

  // Handle file input change event
  $('#file-input').change(function(e) {
    // Get the selected file
    var file = e.target.files[0];
    var reader = new FileReader();

    // Read the file and process it when loaded
    reader.onload = function(e) {
      // Create an image element and set its source to the loaded file
      var image = new Image();
      image.src = e.target.result;

      // When the image is loaded, create a canvas, draw the image on it, and resize it
      image.onload = function() {
        var canvas = document.createElement('canvas');
        var ctx = canvas.getContext('2d');
        canvas.width = image.width;
        canvas.height = image.height;
        ctx.drawImage(image, 0, 0, canvas.width, canvas.height);

        // Convert the canvas content to a data URL (resized image)
        var resizedImage = canvas.toDataURL('image/png');

        // Set the source of the "profile-picture" element to the resized image
        $('.profile-picture').attr('src', resizedImage);
      };
    };

    // Read the file as a data URL
    reader.readAsDataURL(file);
  });
});


$(document).ready(function() {
  // Flag to track if the image popup is open or closed
  var isPopupOpen = false;

  // Handle click event on the profile picture
  $('.profile-picture').click(function(e) {
    e.stopPropagation();

    // If the popup is already open, return
    if (isPopupOpen) {
      return;
    }

    // Get the image URL from the profile picture
    var imageUrl = $(this).attr('src');

    // Create the image popup element
    var $popup = $('<div class="image-popup"><span class="close-btn">&times;</span><img src="' + imageUrl + '" alt="" class="popup-image"></div>');

    // Append the popup to the body and fade it in
    $('body').append($popup);
    $popup.fadeIn('fast');

    // Update the flag to indicate that the popup is open
    isPopupOpen = true;
  });

  // Handle click event on the document to close the popup
  $(document).on('click', function(e) {
    // Check if the clicked element is not inside the image popup
    if (!$(e.target).closest('.image-popup').length) {
      // Fade out and remove the image popup
      $('.image-popup').fadeOut('fast', function() {
        $(this).remove();
        // Update the flag to indicate that the popup is closed
        isPopupOpen = false;
      });
    }
  });

  // Handle click event on the close button within the image popup
  $(document).on('click', '.close-btn', function() {
    // Find the parent image popup and fade it out
    var $popup = $(this).parent('.image-popup');
    $popup.fadeOut('fast', function() {
      $popup.remove();
      // Update the flag to indicate that the popup is closed
      isPopupOpen = false;
    });
  });
});
   


    $("#profile-picture").on("change", function(event) {
      // Get the input element
      var input = event.target;
    
      // Check if a file is selected
      if (input.files && input.files[0]) {
        // Create a FileReader object
        var reader = new FileReader();
    
        // Set up the onload event handler for the FileReader
        reader.onload = function(e) {
          // Set the source of the profile picture preview element to the FileReader result
          $("#profile-picture-preview").attr("src", e.target.result);
        };
    
        // Read the selected file as a data URL
        reader.readAsDataURL(input.files[0]);
      }
    });
    

    $("#submit").on("click", function(event) {
      event.preventDefault(); // Prevent form submission
    
      // Get the selected file from the file input
      var fileInput = $("#file-input")[0];
      var selectedFile = fileInput.files[0];
    
      if (selectedFile) {
        // Create a FileReader object
        var reader = new FileReader();
    
        // Set up the onload event handler for the FileReader
        reader.onload = function(e) {
          // Set the source of the profile picture element to the FileReader result
          $("#profile-picture").attr("src", e.target.result);
        };
    
        // Read the selected file as a data URL
        reader.readAsDataURL(selectedFile);
      }
    });
    
/* Edit Profile Page END */