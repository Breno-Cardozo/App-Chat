const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-txt");


form.onsubmit = (e) => {
    e.preventDefault();
}

continueBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = str_replace("    ", "", xhr.response);
                console.log(data);
                if (data == "Sucesso!"){
                    location.href = 'users.php';
                }
                else{
                    console.log('caiu no else')
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData); 
}