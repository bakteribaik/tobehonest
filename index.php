<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5b7e08bb94.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>To Be Honest</title>
</head>
<body>
    <div class="content-container">
        <div class="content">
            <!-- <form action="" method="post"> -->
                <div class="content-card">
                    <div class="content-header">
                        <div class="content-avatar"></div>
                        <div class="content-detail">
                            <div class="detail-title">@<?=$_GET['user']?></div>
                            <div class="detail-subtitle">send me an anonymouse message</div>
                        </div>
                    </div>
                    <hr>
                    <div class="content-input">
                        <input type="text" name="input-pesan" id="input-pesan" placeholder="Write something...">
                    </div>
                </div>
                <div class="foot-note">
                    <button type="submit" onclick="sendMessage();">Send that message 💖</button>
                    <div class="foot-subtitle">
                        🔐 This message was sent anonymously
                    </div>
                </div>
            <!-- </form> -->
            <div class="footer">
                made with 💘 - build author <a href="https://www.instagram.com/zulfikaralwilubis/"><i class="fa-brands fa-instagram"></i> zulfikaralwilubis</a>
            </div>
        </div>
    </div>
</body>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
<script>
    const firebaseConfig = {
        apiKey: "AIzaSyAxiLakYhgTniuqboXlmvkfZ1axD6FbHTo",
        authDomain: "tobehonest-eed84.firebaseapp.com",
        projectId: "tobehonest-eed84",
        storageBucket: "tobehonest-eed84.appspot.com",
        messagingSenderId: "997192068054",
        appId: "1:997192068054:web:2bc34bc3267501cf6c5277",
        measurementId: "G-G0VGC0BY30"
    };
    firebase.initializeApp(firebaseConfig);
</script>
<script src="index.js"></script>
</html>