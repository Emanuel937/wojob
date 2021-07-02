/**
 * *******************************************************
   ****************show make annonce studio***************
 *********************************************************
 */
 var annonceId      = null,
     formForAnnonce =  document.querySelector("#studioAnnonceForm"),
     inputTyped     = document.querySelectorAll("input"),
     ap_s_e         = document.getElementById("ap_s_e"),
     formVideo      = document.getElementById("formVideo"),
     entreprise,
     tel,
     contrat,
     title, 
     city,
    codePostal,
    adress,
    salaire,
    mission,
    profil,
    input,
    res,
    textarea,
    url,
    res_b,
    timer = 0,
    studio;

 $("#studioAnnonceButton").click(function(){
   $("#studioAnnonce").css({
      "width":" 400px",
      "right": "0"});
      $(".form_pos").css({
        "bottom":"0"
       });
 });

  $("#closeButtonAnnonce").click(function(){
   $("#studioAnnonce").css({
      "width":" 0px",
      "right": "100%"
   });
   $(".form_pos").css({
    "bottom":"100%"
   });
   $(".wojob-alert").css({
    "top":"100%"
  });
 });
  // show the studio video cv
    $("#studioVideoCvButton").click(function(){
     $("#studioVideoCv").css({
      "width":" 400px",
      "left": "0"
   });
   $(".form_pos").css({
    "bottom":"0"
   });
 });
  $("#closeVideoCv").click(function(){
   $("#studioVideoCv").css({
      "width":" 0px",
      "left": "100%"
   });
   $(".form_pos").css({
    "bottom":"100%"
   });
   $(".wojob-alert").css({
    "top":"100%"
  });
 });
 /**
 *  set required attribute if the 
 *  user remove from the inspecter 
 *  use the function required from emascript.js
 */
let form_annonce_child =  document.querySelector("#studioAnnonceForm");
requiredFnc(form_annonce_child);
/**
 * 
 * *******************************
  *  check if the user if login *
 * *******************************
 * 
 */
const isLogin = ()=>{

     let ap_s_time    = 0,
      response     = null;
  for(let i = 0; i < inputTyped.length; i++)
  {
    inputTyped[i].onkeydown = ()=>
    { 
      if((ap_s_e.value == false || ap_s_e.value == " " 
         || ap_s_e.value == "") && ap_s_time  < 1
      ){
        $(".wojob-alert").css({
          "top":"20%"
        });
        response = "not login";
      }else{
        response = "login";
      }
      ap_s_time++;
    }
  }
  return response ;
}
isLogin();

// close the alert pop 
const closeAlert  =()=> {
  $(".wojob-alert").css({
    "top":"100%"
  }); 
}

// subscribe input from the footer 
    var subscribe_button = document.querySelector(".subscribe_button");
    subscribe_button.addEventListener('click', function(){
      var subscribing = document.querySelector(".subscribing");
      var thanks = document.querySelector(".thanks");
      var login = document.querySelector(".login");

      subscribing.classList.add("subscribing_active");
      subscribe_button.classList.add("subscribe_button_active");
      setTimeout(function(){
        login.classList.add("login_active");
      }, 1200);
      setTimeout(function(){
        thanks.classList.add("thanks_active");
      }, 1400);

      setTimeout(function(){
        thanks.classList.remove("thanks_active");
        login.classList.remove("login_active");
        subscribing.classList.remove("subscribing_active");
        subscribe_button.classList.remove("subscribe_button_active");
      }, 4000);
    });

/*******************************
 ***********make annonce *******
 *******************************/

//get the value of all input for studio annonce
$("#publier").click((e)=>{
  e.preventDefault();
  res = null;
  input = document.querySelectorAll("#studioAnnonce input");
  textarea = document.querySelectorAll("textarea");
  entreprise=$("input[name='entreprise']").val();
  tel = $("input[name='tel']").val();
  contrat = $("select[name='contrat']").val();
  title = $("input[name='title']").val();
  city = input[3].value;
  codePostal=$("input[name='codePostal']").val();
  adress =$("input[name='adress']").val();
  salaire = $("input[name='salaire']").val();
  mois =$("select[name='mois']").val();
  mission = $("textarea[name='mission']").val();
  profil = $("textarea[name='profil']").val();
  url = $("input[name='annonceUrl']").val();
  timer = 0;
  studio =  document.getElementById("stutioAnnonceA");

  if(ap_s_e.value == false || ap_s_e.value == " " 
      || ap_s_e.value == "" )
    {
      $(".wojob-alert").css({
        "top":"20%"
      });
    }else{

      requiredFnc(form_annonce_child);
      if(psxesodopdohpaeoi == 1){
        $.ajax({
        // set data
        url:url,
        type:"post",
        data:{
          entreprise:entreprise,
          title:title,
          contrat:contrat,
          tel:tel,
          salaire:salaire,
          mission:mission,
          profil:profil,
          city:city,
          mois:mois,
          codePostal:codePostal,
          adress:adress
        },
        success:function(data){
          if(data !="wobojb-4" && data != "wojob200"){
            studio.style.display ="none";
            let intervalSet = setInterval(imgProcessing
              ,1000);
              
              function imgProcessing(){
                timer++;
                $("#studioAnnonceB").html("<img src='/img/processing.gif' class='imgAjax'><p class='text-center'>processing ... </p>");
                if(timer == 3){
                  clearInterval(intervalSet);
                  //show the done image
                  $('#studioAnnonceB').hide();
                  $("#done").show();
                  $("#annonceLink").attr("href","infojob?id="+data);
                  $("#back").click(function(){
                    $("#done").hide();
                    studio.style.display ="block";
                  })
                }
            }}else{
              console.log(data);
            }
          }
        });  
     }else{
      $(".wojob-alert").css({
        "top":"20%"
      });
    }
  }
});

function money(e){
  $("#money").html(new Number(e.target.value).toFixed(2) +"$/");
}

/**
 * 
 * upload function 
 * that upload video cv 
 * 
 */
function uploadVideo(e){
  e.preventDefault();
  if(ap_s_e.value == false || ap_s_e.value == " " 
  || ap_s_e.value == "" )
  {
    $(".wojob-alert").css({
      "top":"20%"});
      
  }else{
  // continue later with required
    var file_data = $("#sortpicture").prop("files")[0];   
    var form_data = new FormData();
    var uploadUrl = $("#uploadUrl").val();
    // get the information 
    let title = $("#title_v").val();
    let tel = $("#tel_v").val();
    let city = $("#city_v").val(); 
    let codePostal = $("#codePostal_v").val();
    // append value to form 
    form_data.append("file", file_data);
    form_data.append("title", title);
    form_data.append("city", city);
    form_data.append("postal", codePostal); 
    form_data.append("tel", tel);
    //ajax
    $.ajax({
        url: uploadUrl,
        dataType: 'script',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success:function(data){
           console.log(data);
        }
    }); 
  }
}
