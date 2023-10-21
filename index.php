<!DOCTYPE html>
<html>
<head>
  <title style="color: lightblue">Lucid Technology Innovations</title>
  <meta name="title" content="lucid tech innovations">
  <meta name="description" content="lucid tech innovations is a lorenz miguel gracia page or website that research on web development technology and newer and updated script to programming languages. site provides information into lorenz miguel gracia">
  <meta name="keywords" content="lorenz, miguel, gracia">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="revisit-after" content="1 days">
  <meta name="author" content="lorenz miguel gracia">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    [class~=card-container],[class~=container]{display:flex;}[class~=container]{flex-direction:column;}[class~=container]{align-items:center;}[class~=container]{justify-content:center;}[class~=container]{height:100vh;}[class~=card] img{width:100%;}[class~=container]{color:green;}[class~=card-container]{flex-wrap:wrap;}[class~=card-container]{justify-content:space-between;}[class~=profile-picture]{background:radial-gradient(circle,lightblue,lightgreen);}.card,footer{text-align:center;}[class~=profile-picture]{margin-top:15pt;}[class~=profile-picture]{margin-bottom:19.999999968px;}.card{border-radius:10.000000032px;}footer{background-color:lightgray;}.card{box-shadow:0 .041666667in .083333333in 0 rgba(0,0,0,.2);}.card{margin-left:.625pc;}.card{margin-bottom:.625pc;}.card{margin-right:.625pc;}.card{margin-top:.625pc;}.card{background-color:white;}.card{padding-left:.208333333in;}.card{padding-right:15pt;}.card{padding-top:20px;}[class~=card] img{max-width:2.083333333in;}.card{padding-bottom:20px;}.card{flex:0 0 calc(33.33% - 20px);}[class~=card-title]{font-size:20px;}[class~=card-title]{font-weight:bold;}[class~=card-content]{font-size:16px;}@media (max-width: 1200px){.card{}}@media (max-width: 576px){[class~=card-container]{flex-direction:column;}}
  </style>
</head>
<body style="background-color: black;">
  <div class="container">
    <h1>lucid tech innovations</h1>
    <br>
    <font>lorenz miguel gracia</font>
    <div class="profile-picture rounded-circle overflow-hidden shadow">
      <img src="pdx.jpg" alt="Profile Picture" class="w-100 h-100 object-fit-cover">
    </div>
    <my-element></my-element>
  </div>
  <script>
    class MyElement extends HTMLElement {
      constructor() {
        super();
        const shadowRoot = this.attachShadow({ mode: 'open' });
        const template = document.createElement('template');
        template.innerHTML = `
          <style>
            div {
              border: 1px solid;
              padding: 10px;
              box-shadow: 5px 5px pink, 5px 5px yellow, 5px 5px green;
              background-color: white;
              margin-bottom: 10px;
            }
            .horizontal-button {
              display: inline-block;
              background-color: white;
              color: black;
              padding: 5px 10px;
              border-radius: 5px;
              text-decoration: none;
              box-shadow: 0px 4px 8px black;
              margin: 5px;
            }
            .horizontal-button:hover {
              background-color: lightgreen;
            }
          </style>
          <div>
            <a href="https://github.com/lorenz-MotionGraphics?fbclid=IwAR1si-x2wUc2AQWDSrdLO43nxU3H0EpTi94XcnMAICI3uzFfbcf6SgZhm6g" target="_blank" class="horizontal-button">Github</a>
            <a href="https://twitter.com/LorenzComputerT?fbclid=IwAR0vXNACTBNExUfCAFi6Ev4HJZT5SZQ7BRERaS6hccN_X0s8iVZQQZ4-nQg" target="_blank" class="horizontal-button">Twitter/x</a>
            <a href="https://www.facebook.com/lorenztechpilot/" target="_blank" class="horizontal-button">Facebook</a>
            <a href="https://www.linkedin.com/in/lorenztechpilot/" target="_blank" class="horizontal-button">LinkedIn</a>
          </div>
        `;
        shadowRoot.appendChild(template.content.cloneNode(true));
      }
    }
    customElements.define('my-element', MyElement);
  </script>
  <footer>
    <hr />
    <div class="card-container">
      <?php
      $jsonData = file_get_contents('suzume.json');
      $data = json_decode($jsonData, true);
      foreach ($data as $item) {
        echo '<div class="card">';
        echo '<img src="uploads/' . basename($item['image']) . '" alt="Card Image" width="100">';
        echo '<h2 class="card-title">' . $item['title'] . '</h2>';
        echo '<p class="card-content">' . $item['description'] . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </footer>
</body>
</html>
