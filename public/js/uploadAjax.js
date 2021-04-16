// ajax upload vido cv.....
/***** required **** *****/
  Object.prototype.required = function(notRequiredClassName, callBack = null){
    this.onsubmit = function(e){
                let return_r = null
                this.index, this.return_, this.isRequired, this.input_value;
                for(this.index  = 0; this.index <= this.length -1 ; this.index++){
                    this.tag = this.children[this.index];
                    if(this[this.index].tagName == "INPUT" || this[this.index].tagName == "SELECT" ||  this[this.index].tagName == "TEXTAREA"){
                        this.isRequired = this[this.index].required;
                        this.input_value = this[this.index].value  ;
                        if(this.isRequired == false ||this.input_value == false &&  this.tag.className.indexOf(notRequiredClassName) < 0){
                            this[this.index].required = true;
                            return_r = false;
                        }else{
                           callBack== null ?" ":callBack();
                        }
                    }
                }  
                return return_r;     
       }
    }
function uploadVideo(){
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
        success: function(){
        }
    }); 
}

let formVideo = document.querySelector("#formVideo");
formVideo.required("notRequired",uploadVideo);


/*formVideo.onsubmit = function(){
  
  //return false;
} 
*/
   // show the studio video 
    var annonceId = null;
    $("#studioAnnonceButton").click(function(){
      $("#studioAnnonce").css({
         "width":" 400px",
         "right": "0"});
      $("#full").css({
        "background-color":" #070707",
      })
    });
     $("#closeButtonAnnonce").click(function(){
      $("#studioAnnonce").css({
         "width":" 0px",
         "right": "100%"
      });
    });
     // show the studio video cv
       $("#studioVideoCvButton").click(function(){
        $("#studioVideoCv").css({
         "width":" 400px",
         "left": "0"
      });
    });
     $("#closeVideoCv").click(function(){
      $("#studioVideoCv").css({
         "width":" 0px",
         "left": "100%"
      });
    });
    
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



// get the value of all input for studio annonce
        var entreprise,tel,contrat,
        title, city,codePostal,
        adress,salaire,mission,
        profil,input, res, textarea,url, res_b;
        var timer = 0;
    

/*
 $("#publier").click(()=>{
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
    
    for (var i = 0; i <= input.length -1; i++)
    {
         if(input[i].value ==" "
         ||input[i].value == false){
        console.log(i);
         res ="*Type:"+ input[i].name +" *";   
        }else{
            res_b ="100";
        }
    }
      for (var i = 0; i <= textarea.length -1; i++)
      {
       if(textarea[i].value ==" "
       ||textarea[i].value == false){
        res ="*Type:"+ textarea[i].name +" *";  
       }else{
        res_b ="200";
       }
      }
      if(res == null && res_b =="200"||res_b =="100" ){
          $.post( 
             url,
             {
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
           function(result,status, states){
              // the data was send
              if(status == "success" && states.readyState ==4){
                $("#stutioAnnonceA").hide("10");
                let intervalSet = setInterval(imgProcessing
                  ,1000);
                  annonceId= result;    
                //interval
                function imgProcessing(){
                  timer++;
                  $("#studioAnnonceB").html("<img src='/img/processing.gif' class='imgAjax'><p class='text-center'>processing ... </p>");
                    console.log(timer);
                     if(timer == 2){
                      clearInterval(intervalSet);
                      //show the done image
                      $('#studioAnnonceB').hide();
                      $("#done").show();
                    }
                }
              }
           });
      }
      console.log(res);
  });

 $("#back").click(function(){
   $("#done").hide();
   $("#stutioAnnonceA").show();
 });
 // voir les annonce
 // check if the url is right and the annonceId also 
   $("#seeAnnonce").click(()=>{
      var inputUrlAnnonce = $("#seeAnnonce").val();
      document.location="/infojob?id="+annonceId;
   });

   //modal 
*/