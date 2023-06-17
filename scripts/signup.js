const telBtn = document.querySelector(".tel_btn");

const sendSMS = async () => {
    const tel = document.querySelector("#tel").value;

    const res = await fetch("http://localhost/user/sendSMS.php", {
        method: "post",
        headers: {
            "Content-Type": "application/json",
        },
        body: {
            phone_num: tel
        }
    })

    console.log(res);
}


telBtn.addEventListener("click", sendSMS);