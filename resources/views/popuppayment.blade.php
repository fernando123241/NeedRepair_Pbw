<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Confirm</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: #59C2AF;
    user-select: none;
}

.center,
.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

#click {
    display: none;
}

.click-me {
    display: block;
    width: 160px;
    height: 50px;
    background: #27ae60;
    border: 1px solid #26a65b;
    color: white;
    text-align: center;
    font-size: 22px;
    line-height: 50px;
    border-radius: 3px;
    cursor: pointer;
    transition: .5s;
}

.click-me:hover {
    background: #219150;
}

.content {
    opacity: 0;
    visibility: hidden;
    width: 400px;
    height: 350px;
    background: white;
    border-radius: 3px;
    transition: .3s ease-in;
    box-shadow: 0 2px 12px 0 rgba(0, 0, 0, .4);
}

#click:checked~.content {
    opacity: 1;
    visibility: visible;
}

.header {
    height: 68px;
    background: #27ae60;
    overflow: hidden;
    border-radius: 3px 3px 0 0;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .2);
}

.header h2 {
    color: white;
    padding-left: 32px;
    font-weight: normal;
}

.fa-times {
    position: absolute;
    right: 20px;
    top: 20px;
    color: #e8f7fc;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
}

.fa-check {
    font-size: 50px;
    color: #27ae60;
    font-weight: bold;
    height: 80px;
    width: 80px;
    border: 2px solid #27ae60;
    text-align: center;
    padding-top: 13px;
    border-radius: 50%;
    box-sizing: border-box;
    margin: 30px 0 0 160px;
}

p {
    padding-top: 10px;
    font-size: 19px;
    color: #1a1a1a;
    text-align: center;
}

.line {
    position: absolute;
    bottom: 65px;
    width: 100%;
    height: 1px;
    background: silver;
}

.close-btn {
    position: absolute;
    bottom: 12px;
    right: 25px;
    border: 1px solid #27ae60;
    border-radius: 3px;
    color: #27ae60;
    padding: 8px 10px;
    font-size: 18px;
    cursor: pointer;
}

.close-btn:hover {
    background: #27ae60;
    color: white;
    transition: .5s;
}
    </style>
</head>

<body>
    <div class="center">
        <input type="checkbox" id="click">
        <label for="click" class="click-me">Confirm</label>
        <div class="content">
            <div class="header">
                <h2>Confirm</h2>
                <label for="click" class="fas fa-times"></label>
            </div>
            <label for="click" class="fas fa-check"></label>
            <p>Terima kasih sudah menggunakan NeedRepair!! Silahkan menunggu konfirmasi tukang </p>
            <div class="line"></div>
            <!-- <label for="click" class="close-btn">Close</label> -->
            <button class="close-btn"><a href="/dashboard" style="color:#27ae60; text-decoration:none;">Close</a></button>
        </div>
    </div>

</body>

</html>