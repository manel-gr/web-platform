document.getElementById("name").addEventListener('input' , function(){
    var nom = document.getElementById("name").value;
    var user = document.getElementById("username");
    if(nom.value == ""){ 
        user.innerHTML = "remplir le champ";
       user.style.color = "#00ff00"
     }
     else if(!nom.match(/^[a-z]+$/))
     {
       user.innerHTML = "alphabetical name ";
        user.style.color = "red"
      }
})



document.getElementById("email").addEventListener('input' , function()
{   
     
    var email = document.getElementById("email").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if  (email.match(pattern)){
        text.innerHTML = "your email address is valid  ";
        text.style.color = "#00ff00"
    } else {
        text.innerHTML = "your email address is invalid " ;
        text.style.color = "red"
    }
})
document.getElementById("message").addEventListener('input' , function()
{   
     
    var message = document.getElementById("message").value;
    var msg = document.getElementById("msg");
    if  (!message.match(/^[a-z]+$/)){
        msg.innerHTML = "fill the field        ";
        msg.style.color = "red"
    } else {
        msg.innerHTML = "your message has been written        " ;
        msg.style.color = "#00ff00"
    }
})
