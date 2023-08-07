
function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const passwordToggle = document.getElementById("password-toggle");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
  } else {
    passwordInput.type = "password";
    passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
  }
}

function box() {
  const passwordInput = document.getElementById("test");
  const passwordToggle = document.getElementById("test-toggle");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
  } else {
    passwordInput.type = "password";
    passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
  }
}

// var submitbtn=document.getElementById("submitbtn");
// alert(submitbtn)
// submitbtn.addEventListener('click',submitdata)

// submitbtn.addEventListener('click',(e)=>{
//     e.preventDefault();
//     var password=document.getElementById("password").value
//     var cpass=document.getElementById("test").value

//     if(password==cpass){

//     }else{
//         alert("password and confirm password does not match")
//     }

// });

const submitdata=(e)=>{
    e.preventDefault();
    var password=document.getElementById("password").value
    var cpass=document.getElementById("test").value
    if(password==cpass){
        document.getElementById("addfrom").submit()
    }else{
        alert("password and confirm password does not match")
    }


}
