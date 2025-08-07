<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MCA Sem - 3 Project</title>
  <style>
    /* General Styles */
    * {
      margin: 0;
      padding: 0;
      /* box-sizing: border-box; */
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: #ffffff; /* Plain white background */
      color: #333; /* Darker text color for better contrast */
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1, h2, h3, p {
      margin-bottom: 10px;
    }

    a {
      text-decoration: none;
      color: red;
    }

    /* Header Section */
    .header {
      text-align: center;
      margin-top: 50px;
      padding: 20px;
      background: rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      animation: slideIn 1.5s ease-out;
    }

    .header h1 {
      font-size: 3em;
      font-weight: bold;
      color: #1E90FF; /* Bright accent color */
    }

    .header h2 {
      font-size: 1.8em;
      color: #555; /* Subtle gray for subtitle */
    }

    /* Logo Section */
    .logo-container {
      display: flex;
      justify-content: center;
      gap: 50px;
      margin: 30px 0;
      animation: fadeIn 2s ease-in-out;
    }

    .logo-container img {
      width: 150px;
      height: auto;
      transition: transform 0.3s ease;
    }

    .logo-container img:hover {
      transform: scale(1.2) rotate(10deg);
    }

    /* Content Section */
    .content {
      max-width: 800px;
      text-align: center;
      padding: 20px;
      background: rgba(0, 0, 0, 0.05);
      border-radius: 10px; */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      animation: fadeIn 3s ease-in-out;
    }

    .content h3 {
      font-size: 2em;
      margin-bottom: 20px;
      color: #1E90FF;
    }

    .content ul {
      list-style: none;
      margin: 20px 0;
      padding: 0;
    }

    .content ul li {
      font-size: 1.2em;
      margin: 10px 0;
      background: rgba(0, 0, 0, 0.05);
      padding: 10px;
      border-radius: 5px;
    }

    .content p {
      font-size: 1.2em;
      line-height: 1.6;
    }

    /* Footer */
    .footer {
      margin-top: 50px;
      padding: 10px;
      font-size: 0.9em;
      background: rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      text-align: center;
      animation: fadeIn 4s ease-in-out;
    }

    /* Animations */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    @keyframes slideIn {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <h1>MCA 3rd Sem Project</h1>
    <h2>LJ University</h2>
  </div>

  <!-- Logos -->
  <div class="logo-container">
    <img src="admin/images/logo_f.png" alt="Krn News">
    <img src="admin/images/lj.png" alt="Lj University">
  </div>

  <!-- Content -->
  <div class="content">
    <h3>Welcome to Just In Time</h3>
    <p>Provided by :</p>
    <ul><b>
      <li>Vegda Krunal</li>
      <li></li>
      <li></li></b>
    </ul>
    
    <h3>Key Features:</h3>
    <ul>
      <li><b>Dynamic Content:</b> Stay updated with real-time news updates.</li>
      <li><b>Authentication & Authorization:</b> Secure user login and role-based access.</li>
      <li><b>Pagination:</b> Seamlessly navigate through articles with organized pages.</li>
      <li><b>SMTP Integration:</b> Receive reset password links via email.</li>
      <li><b>Reset Password:</b> Recover your account securely through email verification.</li>
      <li><b>REST API:</b> Efficient and scalable API integration for data management.</li>
      <li><b>SEO :</b> Optimized headers and meta tags for better search engine ranking. </li>
      <li><b>Category-wise News:</b> Browse articles based on your interests.</li>
      <li><b>File Validation & Error Handling:</b> Ensure smooth and error-free uploads.</li>
    </ul>
  </div><br>
    <h1>Click to redirect :<a href="index.php"> Just In Time</a></h1>
  <!-- Footer -->
  <div class="footer">
    &copy; 2025 Just In Time | Developed for MCA 3rd Semester Project
  </div>
</body>
</html>
