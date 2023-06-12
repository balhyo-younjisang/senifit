const categorys = document.getElementsByClassName("category");

const toggleCategory = (i) => {
    categorys[i].classList.toggle("active"); // toggle category

    const selectCategory = document.getElementsByClassName("active");
    const url = "http://localhost/exercise/my_exercise.php?";
    let requestUrl = "";

    for (let i = 0; i < selectCategory.length; i++) {
        requestUrl += `category=${selectCategory[i].innerText}&`
    }

    location.href = `${url}` + `${requestUrl}`;
}

const getCategory = () => {
    const seleted = new Array(); // 선택된 카테고리들을 담는 배열

    const url = decodeURIComponent(location.href); // 현재 페이지의 url
    let params = url.substring(url.indexOf('?') + 1, url.length); // ? 문자 이후의 문자열까지 자르기
    params = params.split("&"); // & 문자로 분리

    for (let i = 0; i < params.length; i++) { // = 문자로 구분
        let value = params[i].split("=")[1];

        seleted[i] = value; // 배열에 value 담기
    }

    for (let i = 0; i < seleted.length; i++) {
        for (let j = 0; j < categorys.length; j++) {
            if (categorys[j].innerText === seleted[i]) {
                categorys[j].classList.add("active");
            }
        }
    }
}

for (let i = 0; i < categorys.length; i++) {
    categorys[i].addEventListener("click", () => toggleCategory(i));
}

getCategory();