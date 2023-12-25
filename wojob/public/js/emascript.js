
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

