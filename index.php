<!DOCTYPE html>
<html>
  <head>
    <title>My Responsive Webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      /* Add a responsive design to the container element */
.container {
    max-width: 1200px; /* Set a maximum width for the container */
    margin: 0 auto; /* Center the container on the page */
}

/* Make images responsive */
img {
    max-width: 100%; /* Set the maximum width of images to 100% of the container */
    height: auto; /* Keep the original aspect ratio of the image */
}

/* Use media queries to change the layout of the webpage based on the screen size */
@media (max-width: 600px) {
    /* Styles for screens smaller than 600px */
    .container {
        max-width: 100%; /* Set the container to take up the full width of the screen */
    }
    /* Change the font size for smaller screens */
    body {
        font-size: 16px;
    }
    /* Change the layout of the navigation menu for smaller screens */
    nav {
        display: none; /* Hide the navigation menu */
    }
}
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
    </header>
    <main>
      <h1>Welcome to my webpage!</h1>
      <p>This is a simple responsive webpage created using HTML, CSS, and JavaScript.</p>
    </main>
    <footer>
      <p>Copyright ©️ 2021 My Webpage</p>
    </footer>
    <script>
      // JavaScript code goes here
    </script>
  </body>
</html>