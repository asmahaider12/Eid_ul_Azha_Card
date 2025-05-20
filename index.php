<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Eid Wish Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      background: url('images (2).jpg') center center / cover no-repeat fixed;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .form {
      position: relative;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding: 50px 30px;
      background: url('download (3).jpg') no-repeat center center;
      background-size: cover;
      border-radius: 10px;
      overflow: hidden;
      perspective: 1000px;
      transform-style: preserve-3d;
      transform: rotateX(-10deg);
      transition: all 0.3s ease-in-out;
      box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
        rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
        rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
      width: 100%;
      max-width: 450px;
      color: black; /* text color adjust as needed */
    }

    .form::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(74, 211, 97, 0.4); /* transparent white layer */
      z-index: 0;
    }

    /* Make sure form content appears above the overlay */
    .form * {
      position: relative;
      z-index: 1;
    }

    .form h2 {
      color: #ffffff;
      text-align: center;
      margin-bottom: 20px;
    }

    .input {
      padding: 15px 10px;
      border-radius: 5px;
      background-color: transparent;
      transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      color: #fff;
      border: 4px solid rgb(4, 95, 19);
      box-shadow: #ffb347 2px 4px 6px,
        rgb(233, 148, 29) 0px 7px 13px -3px,
        greenyellow 0px -3px 0px inset;
      font-size: 16px;
    }

    .input::placeholder {
      color: #ffffff;
    }

    .input:hover,
    .input:focus {
      border-color: #ffb347;
      background-color: transparent;
      transform: scale(1.05) rotateY(20deg);
      box-shadow: 0px 2px 4px green;
      outline: none;
    }

    button {
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      background-color: rgb(236, 146, 20);
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transform-style: preserve-3d;
      backface-visibility: hidden;
      transform: rotateX(-10deg);
      transition: all 0.3s ease-in-out;
      box-shadow: green 4px 6px 8px,
        green 0px 7px 13px -3px,
        greenyellow 0px -3px 0px inset;
    }

    button:hover {
      background-color: rgb(4, 95, 19);
      font-size: 17px;
      transform: scale(1.05) rotateY(20deg) rotateX(10deg);
      box-shadow: #ffb347 0px 2px 4px,
        #ffb347 0px 7px 13px -3px,
        #ffb347 0px -3px 0px inset;
    }

    #eidCard {
      width: 100%;
      max-width: 450px;
      border-radius: 15px;
      
      position: relative;
      padding: 20px 30px 40px 30px;
      box-sizing: border-box;
      display: none;
      text-align: center;
      animation: fadeInScale 0.8s ease forwards;
      overflow: hidden;
      z-index: 1;
    }

    /* Gradient border scroll effect like glitter */
    #eidCard::before {
      content: "";
      position: absolute;
      top: -5px;
      left: -5px;
      right: -5px;
      bottom: -5px;
      background: linear-gradient(45deg,rgb(192, 70, 127),rgb(214, 189, 66),rgb(53, 207, 189),rgb(60, 106, 179),rgb(209, 73, 136));
      background-size: 400% 400%;
      z-index: 0;
      opacity: 0;
      border-radius: 20px;
      animation: rotateBorder 5s linear infinite;
      transition: opacity 0.4s ease;
    }

    /* Show border on hover */
    #eidCard:hover::before {
      opacity: 1;
    }

    /* Content remains above the glowing border */
    #eidCard * {
      position: relative;
      z-index: 1;
    }

    /* Border rotation animation */
    @keyframes rotateBorder {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 100% 50%;
      }
    }

    @keyframes fadeInScale {
      0% {
        opacity: 0;
        transform: scale(0.7);
      }
      100% {
        opacity: 1;
        transform: scale(1);
      }
    }

    .sender-img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #fff;
      position: absolute;
      top: -10px;
      right: 20px;
      background: white;
    }
    .card-header {
      background-color: rgb(11, 185, 40);
      border-radius: 20%;
      font-size: 1.8rem;
      font-weight: bold;
      margin-bottom: 10px;
      color: #EAEBD0; /* darker orange */
      text-shadow: 2px 2px 3px rgb(180, 110, 11);
    }
    .message {
      font-size: 1.2rem;
      margin: 15px 0;
      font-style: italic;
      color: #EAEBD0; /* richer brown */
    }
    .from {
      font-weight: bold;
      color: #EAEBD0;
      text-align: right;
      margin-top: 25px;
      font-size: 1rem;
    }
    .eid-image-container {
  display: flex;
  justify-content: center; /* Horizontally center */
  align-items: center;     /* Vertically center (optional) */
  margin: 30px;
}

.eid-image {
  max-width: 150px;
  animation: float 3s ease-in-out infinite;
}

    @keyframes float {
      0%,
      100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
    #backBtn, #viewGalleryLink {
      margin-top: 15px;
      width: 48%;
    }
    #backBtn {
      background-color: #6c757d;
      border-color: #6c757d;
      color: white;
    }
    #viewGalleryLink {
      background-color: #28a745;
      border: none;
      color: white;
      text-decoration: none;
      display: inline-block;
      padding: 12px 0;
      text-align: center;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      box-shadow: green 4px 6px 8px,
        green 0px 7px 13px -3px,
        greenyellow 0px -3px 0px inset;
      transition: all 0.3s ease-in-out;
    }
    #viewGalleryLink:hover {
      background-color: rgb(4, 95, 19);
      font-size: 17px;
      box-shadow: #ffb347 0px 2px 4px,
        #ffb347 0px 7px 13px -3px,
        #ffb347 0px -3px 0px inset;
      text-decoration: none;
    }
    .btn-group {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }
    #timerMessage {
      display: none;
      font-size: 1.5rem;
      color: white;
      background: rgba(0,0,0,0.6);
      padding: 15px 20px;
      border-radius: 10px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <!-- Form for input -->
    <form id="wishForm" method="POST" enctype="multipart/form-data" class="form">
      <h2>Create Your Eid Wish Card</h2>

      <input type="text" name="receiver" placeholder="Receiver's Name" required class="input" />

      <input type="text" name="sender" placeholder="Your Name" required class="input" />

      <input type="file" name="sender_img" accept="image/*" required class="input" />

      <button type="submit">Click to Reveal Your Eid Wish</button>
    </form>

    <!-- Timer message -->
    <div id="timerMessage">Please wait... Your Eid Wish will appear in <span id="countdown">5</span> seconds</div>

    <!-- Eid card -->
    <div id="eidCard">
      <img id="senderPreview" src="" class="sender-img" alt="Sender Image" />
      <div class="card-header">Eid Mubarak!</div>
      <div class="eid-image-container">
  <img src="download.jpg" class="eid-image" alt="Eid Image">
</div>

      <div class="message">
        May this Eid bring you and your family abundant blessings and happiness!
      </div>
      <div class="from" id="fromText"></div>

      <div class="btn-group">
        <button id="backBtn">Back</button>
        <a id="viewGalleryLink" href="" target="_blank" rel="noopener noreferrer">View in Gallery</a>
      </div>
    </div>
  </div>

  <script>
    const form = document.getElementById('wishForm');
    const eidCard = document.getElementById('eidCard');
    const senderPreview = document.getElementById('senderPreview');
    const fromText = document.getElementById('fromText');
    const backBtn = document.getElementById('backBtn');
    const viewGalleryLink = document.getElementById('viewGalleryLink');
    const timerMessage = document.getElementById('timerMessage');
    const countdownEl = document.getElementById('countdown');

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      const receiver = form.receiver.value.trim();
      const sender = form.sender.value.trim();
      const senderImgFile = form.sender_img.files[0];

      if (!receiver || !sender || !senderImgFile) {
        alert('Please fill all fields and select an image.');
        return;
      }

      // Hide form, show timer message
      form.style.display = 'none';
      timerMessage.style.display = 'block';

      let countdown = 5;
      countdownEl.textContent = countdown;

      // Timer interval
      const timerInterval = setInterval(() => {
        countdown--;
        countdownEl.textContent = countdown;
        if (countdown <= 0) {
          clearInterval(timerInterval);
          timerMessage.style.display = 'none';
          showEidCard(sender, senderImgFile);
        }
      }, 1000);
    });

    function showEidCard(sender, senderImgFile) {
      eidCard.style.display = 'block';
      fromText.textContent = `From: ${sender}`;

      const reader = new FileReader();
      reader.onload = function(event) {
        senderPreview.src = event.target.result;
      };
      reader.readAsDataURL(senderImgFile);

      viewGalleryLink.href = 'download.jpg';
    }

    backBtn.addEventListener('click', () => {
      eidCard.style.display = 'none';
      form.style.display = 'flex';

      form.reset();
      senderPreview.src = '';
      fromText.textContent = '';
      timerMessage.style.display = 'none';
    });
  </script>
</body>
</html>