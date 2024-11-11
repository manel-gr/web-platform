const username = document.getElementById('namecomp');
const mail = document.getElementById('emailcomp');
const password = document.getElementById('passwrd2');
const confirmpassword = document.getElementById('cpasswrd2');
const num = document.getElementById('nbrcomp');
const loc = document.getElementById('location');

function form_verify(){
    if(username.value ==="" ){
        alert(' nom est obligatoire')
          return false ;
    }
    else if( (!username.value.match(/^[a-z]+$/)))
       {
            alert("nom est alphapitique");
            return false;
        }
       
       else if(mail.value ==="" ){
            alert(' champ est obligatoire');
            mail.focus(); 
              return false ;
        }

        else if( (!mail.value.match(/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/)))
       {
            alert("mail non valide");
            return false;
        }
       
       else if (password.value == "")                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false;
    }   
    else if (!password.length > 8) {
        alert("mot de passe invalide");
        return false; 
      }
      else if (confirmpassword.value == "")                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false;
    }   
    else if (!( confirmpassword != password)) {
        alert("mot de passe invalide");
        return false; }
      else if (num.value == "")                        
    { 
        alert("Saisissez votre numéro du téléphone"); 
       
        return false;
    }  
   
       
      else if (loc.value == "")                        
      { 
          alert("Saisissez votre adresse"); 
        
          return false;
      }   
}
