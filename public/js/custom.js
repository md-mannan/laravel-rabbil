function SendData() {
    var UserName = document.getElementById("name").value;
    var UserEmail = document.getElementById("email").value;
    var UserPhone = document.getElementById("phone").value;

    var url = "insert";
    var data = { name: UserName, email: UserEmail, phone: UserPhone };

    axios
        .post("/insert", data)
        .then(function (response) {
            if (response.data) {
                window.location.replace("http://127.0.0.1:8000/userdata");
            }
        })
        .catch(function (error) {
            alert("Somthing Error : " + error);
        });
}
