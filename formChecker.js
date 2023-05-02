function verify()
{
  //email check
  let testEmail = document.getElementById("pass1").value
  if(!emailIsValid(testEmail))
  {
    alert("Email is not valid")
    return false;
  }
  //password check
  let testPass = document.getElementById("pass2").value;
  if(testPass == '')
  {
    alert("Password cannot be left empty!");
    return false;
  }

  //check quantities
  let qt1 = document.getElementById("base1").value;
  let qt2 = document.getElementById("base2").value;
  let qt3 = document.getElementById("pcb1").value;
  let qt4 = document.getElementById("pcb2").value;
  let qt5 = document.getElementById("plate1").value;
  let qt6 = document.getElementById("plate2").value;
  let qt7 = document.getElementById("plate3").value;
  let qt8 = document.getElementById("plate4").value;
  

  if(qt1 == '' || qt2 == '' || qt3 == '' || qt4 == '' || qt5 == '' || qt6 == '' || qt7 == '' || qt8 == '')
  {
    alert("Quantity can't be empty");
    return false;
  }
  else if(qt1 < 0 || qt2 < 0 || qt3 < 0 || qt4 < 0 || qt5 < 0 || qt6 < 0 || qt7 < 0 || qt8 < 0 || qt1 < 0)
  {
    alert("Quantity can't be negative")
    return false;
  }
  if((qt1 == 0 && qt1.length >1) || (qt2 == 0 && qt2.length >1) || (qt3 == 0 && qt3.length >1) || (qt4 == 0 && qt4.length >1) || (qt5 == 0 && qt5.length >1) || (qt6 == 0 && qt6.length >1) || (qt7== 0 && qt7.length >1) || (qt8 == 0 && qt8.length >1))
  {
    alert("Invalid input")
    return false;
  }

  //shipping check
  if(document.getElementById("ship1").checked || document.getElementById('ship2').checked || document.getElementById("ship3").checked)
  {
    
  }
  else {
    alert("You didn't pick a shipping option");
    return false;
  }

}

function emailIsValid(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}