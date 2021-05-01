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

// require function 
Object.prototype.required = function(){
    var el, response = null ;
    this.onsubmit = function(event){
      event.preventDefault();
       for(this.index  = 0; this.index <= this.childElementCount -1 ; this.index++)
       {   // get the form children >>>>>>>>>>>>>>>>>>>>>>>>>>>>>
           el = this[this.index];
           if( el.tagName == "INPUT" || el.tagName == "TEXTAREA" || 
               el.tagName == "SELECT") 
           {
            // don't allow user to submit a empty input >>>>>>>>>>
              el.value == false ? el.value = "" :el.value = el.value;
              el.value == "" ? el.required = true: el.required = true;
           }
        } 
        alert(el.value); 
      }
      return "hoi";
}
