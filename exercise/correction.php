<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENFIT</title>
    <link rel="stylesheet" href="../css/correction.css">
</head>

<body>
    <header>
        <nav class="gnb">
            <a href="index.php"><img src="../imgs/logo.svg" alt="SENFIT 로고"></a>
            <div class="navigation">

                <a href="#" id="search">
                    <img src="../imgs/search.svg" alt="검색">
                </a>
                <a href="/user/profile.php" id="profile">
                    <img src="../imgs/user.svg" alt="프로필">
                </a>
            </div>
        </nav>
    </header>
    <main>
        <!-- how to use -->
        <article class="use_load">
            <h4>사용 방법</h4>
            <h5>컴퓨터(웹)인 경우, 웹캠 연결을 통해 운동 하는 모습을 보여 주세요. 스마트폰(모바일)인 경우, 스마트폰의 카메라를 통해 운동하는 모습을 보여주세요.</h5>
            <div style="margin-left: 10px;">
                <h5>1. 카메라를 연결해주세요.</h5>
                <h5>2. 도움을 받고 싶은 운동을 선택해주세요.</h5>
                <h5>3. 운동하는 모습을 카메라를 통해 실시간으로 촬영해주세요.</h5>
            </div>

        </article>

        <!-- choice health type -->
        <article class="type">
            <a href="#">
                <h6>윗몸 일으키기</h6>
            </a>
            <a href="#">
                <h6>팔굽혀 펴기</h6>
            </a>
            <a href="#">
                <h6>스쿼트</h6>
            </a>
        </article>

        <!-- web cam -->
        <article class="web_cam">
            <video id="webCam"></video>
            <div class="cam_background" style="display: none;">
                <img src="../img/camera_img.png" alt="카메라 이미지">
                <p>카메라가 연결되어 있지 않습니다.</p>
            </div>
        </article>

    </main>
    <script>
    const openCam = () => {
        let All_mediaDevices = navigator.mediaDevices;
        if (!All_mediaDevices || !All_mediaDevices.getDisplayMedia) { // 웹캠을 사용할 수 없다면
            document.querySelector(".cam_background").style.display = "block";
        }

        All_mediaDevices.getUserMedia({
            video: true
        }).then((videoStream) => {
            let video = document.querySelector("#webCam");

            if ("srcObject" in video) {
                video.srcObject = videoStream;
            } else {
                video.src = window.URL.createObjectURL(videoStream);
            }
            video.onloadedmetadata = (e) => {
                video.play();
            };
        }).catch((e) => {
            console.log(e.name + " " + e.message);
        })
    }

    window.onload(openCam());
    </script>
</body>

</html>