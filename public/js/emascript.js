
/*
Object.prototype.sendRequest = function(interval = 1000, repeat = 1, callBack){
    let url       =  this.url,
        data      =  this.data,
        type      =  this.type,
        objstKeys =  null,
        thisObj   =  this,
        setInt    =  1,
        setIntervalFn = null,
        xmlHttp   =  new XMLHttpRequest();   
        // data function 
        function setData(){
          let response  = '';
          if(data){
        // convert data to object 
            objstKeys = Object.keys(data);
            for(let i = 0; i < objstKeys.length ; i++){
        // send value for get method
              response +=objstKeys[i] +"="+data[objstKeys[i]] + "&";
            }
            type == "get"? response ="?"+response : response = response;
            return response;
          }else{
            return "";
          }
        }
        // get method
        function getMethod(){
           let setUrl = url + setData();
           xmlHttp.open(type,setUrl);
           xmlHttp.send();

    
        }
        // post method
        function postMethod(){
            let setUrl = setData();
            xmlHttp.open(type, url);
            xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlHttp.send(setUrl);
        }
        // initilize the request
        setIntervalFn = setInterval(() => {
            thisObj.url == undefined ?console.error("You must set the url key and value for ajax request"):
            true;

            xmlHttp.onreadystatechange = function(){
                if(this.readyState == 4  && this.status == 200){
                // send the data to 
                    thisObj.find == undefined ?true:
                    thisObj.find(xmlHttp.responseText);
                // for stop interval 
                setInt++;
                //call back function 
                callBack(this);
                }else if(this.status < 4 ){
                    thisObj.processing == undefined ?true:
                    thisObj.processing(this.status);
                 
                }else if(this.status != 200 ){
                    thisObj.fail == undefined ?true:
                    thisObj.fail(this.status, this.readyState);
                }
              
            }
            type == undefined ? type = "get": type = type;
            type.toLowerCase() == "get" ? getMethod():postMethod();

            // stop interval or clean it 
            if(setInt == repeat){
                clearInterval(setIntervalFn);
            }
         }, interval);
}
*/
// js code come here 
// require function 
var psxesodopdohpaeoi = null;
function requiredFnc(formTag){
    let el ;
    let checkor = function(){
        for(let index  = 0; index <= formTag.length -1 ; index++)
        {   // get the form children >>>>>>>>>>>>>>>>>>>>>>>>>>>>>
            el = formTag[index];
            if(el != undefined){
                if( el.tagName == "INPUT" || el.tagName == "TEXTAREA" || 
                    el.tagName == "SELECT") 
                {
                // don't allow user to submit a empty input >>>>>>>>>>
                el.value == false ? el.value = "" :el.value = el.value;
                el.value == "" ? el.required = true: el.required = true;
                    // if the user send the value , and the input has true required
                    psxesodopdohpaeoi =  el.required ==true && el.value !="" ? 1:null;
                }
           }
         }
    }
      formTag.onsubmit = function(e){
       e.preventDefault();
       checkor();
      }
      checkor();
    }

/**
 * 
 * //get the value of all input for studio annonce
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
      // continue later with required
     requiredFnc(form_annonce_child);
    
      
      /*$.ajax({
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
      
      
  }
});
 */

    
