const chat_text = document.getElementById("msg"),
      send_btn  = $("#send_btn"),
      selector  = $("select"),
      url       = $("#url_input").val(),
      texts_url = $("#texts").val(),
      ibox_infos = document.querySelectorAll(".ibox_infos");
let      to_id   = null;
send_btn.click(
    ()=>
    {
        // check it the input is void
        // if the input is empty it 
        // return 404 code 
        // if is ok , return 200 code 
        let msg_status = chat_text.value == false || chat_text.value == " " ? 404 : 200;
        sendMsg(msg_status);

    }
);
const updateMsgContent = ()=>{
 // this function update
 // the msg content
 // every one second ...
 setInterval(
     ()=>{
        let data = {
            to_id:to_id,
        }
        //search for the text ...
        ajaxData(texts_url,data,"post",true);
     },
     1000
 )
}
const ajaxData = (url, data , type,task )=>{
      // make the ajax request
        // to send mensage to dabatase
        $.ajax({
            url: url,
            dataType: 'script',
            data:data,                         
            type: type,
            success:function(data){
               if(task == true){
                   $("#insert_text").html(data);
               }
            }
        }); 
}
//set class 
function iboxFunction(id,prenom){
    $("#to_name").text(prenom);
    $(".to_id_set").attr("id", id);
    to_id = id;
    let data = {
        to_id:id,
    }
    //search for the text ...
    ajaxData(texts_url,data,"post",true);
}
// send mensage 
const sendMsg = (isOk)=>{
    if(isOk === 200){
        // make the ajax request
        // to send mensage to dabatase
        let data = {
            to_id:$(".to_id_set").attr("id"),
            chat_text:chat_text.value,
        }
        //make ajax request
        //for send the mensage
        ajaxData(url, data, "post", null);
        chat_text.value = " ";
    }
}

//update the msg box every 1 second
//updateMsgContent();