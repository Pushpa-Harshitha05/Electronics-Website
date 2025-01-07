document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("pass1").addEventListener("input", () => {
        let p1 = document.getElementById("pass1").value;
        let p2 = document.getElementById("pass2").value;

        if ((p1.length) < 5) {
            document.getElementById("msg").style.display = 'block';
            document.getElementById("msg").innerHTML = "Password should contain atleast 5 letters";
            document.getElementById("msg").style.backgroundColor = 'rgb(248, 118, 118)';
        }
        else{
            if(p1 === p2){
                document.getElementById("msg").style.display = 'block';
                document.getElementById("msg").innerHTML = "Passwords Match";
                document.getElementById("msg").style.backgroundColor = 'rgb(106, 218, 106)';
            }
            else{
                document.getElementById("msg").style.display = 'none';
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("pass2").addEventListener("input", () => {
        let password1 = document.getElementById('pass1').value;
        let password2 = document.getElementById("pass2").value;

        if (((password1.length) < 5)) {
            document.getElementById("msg").style.display = 'block';
            document.getElementById("msg").innerHTML = "Password should contain atleast 5 letters";
            document.getElementById("msg").style.backgroundColor = 'rgb(248, 118, 118)';
        }

        else if(password1 === password2){
            document.getElementById("msg").style.display = 'block';
            document.getElementById("msg").innerHTML = "Passwords Match";
            document.getElementById("msg").style.backgroundColor = 'rgb(106, 218, 106)';
        }
        else{
            document.getElementById("msg").style.display = 'block';
            document.getElementById("msg").innerHTML = "Passwords do not Match!";
            document.getElementById("msg").style.backgroundColor = 'rgb(248, 118, 118)';
        }
    });
});