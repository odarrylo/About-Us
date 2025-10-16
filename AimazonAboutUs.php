<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="AimazonAboutUs.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

   

    <!-- 🔹 Hero Section -->
    <section class="about-hero">
        <h1><img src="AimAzonLogo.jpg" alt="Logo"></h1>
        <p>	Welcome to AIMAZON!
			We’re a group of Computer Science students who developed this website as part of our E-commerce and Web Development Project.
			Our goal is to apply what we’ve learned in class by building a realistic online shopping platform,
			improving our technical and design skills, and promoting responsible knowledge about firearms in a digital setting.	</p>
    </section>

    <!-- 🔹 Vision, Mission, Who We Are, What We Do -->
    <div class="content">
        
            <div class="box">
                <h2>VISION</h2>
                <p>	➤ To become a model student that inspires others to learn, create, and 
					innovate through hands-on experience in web development and digital commerce.</p>
            </div>
			
			<br>
			
			
            <div class="box">
                <h2>MISSION</h2>
                <p>➤ To build an educational e-commerce platform that demonstrates how 
					online shopping systems work while encouraging safe and responsible use of technology.</p>
            </div>
		
			<br>
			
		
            <div class="box">
                <h2>WHO WE ARE</h2>
                <p>	➤ Through AIMAZON, we combine creativity, teamwork, and coding skills to develop 
					a functional website that reflects the real-world E-commerce experience.</p>
            </div>
			<br>
            <div class="box">
                <h2>WHAT WE DO</h2>
                <p>AIMAZON serves as a practice e-commerce website where users can:
				<p>	➤ Explore different gun categories and accessories (for display only)
				<p>	➤ Experience how online shopping systems work.
				<p>	➤ Understand how products, carts, and databases connect behind the scenes.
				<p>	➤ This project helps us gain hands-on experience in web design and database management.</p>
            </div>
				
        

        <!-- 🔹 Meet the Team Carousel -->
        <div class="team-section box">
            <h2>MEET THE TEAM</h2>

            <div class="carousel-container">
                <button class="prev">&#10094;</button>
                <div class="carousel">
                    <div class="member"><img src="icon.jpg" alt="Kervy"><h4>Deejay Kervy Garcia</h4><p>Team Leader</p></div>
                    <div class="member"><img src="icon.jpg" alt="Darryl"><h4>Darryl Salumag</h4><p>Backend Developer</p></div>
                    <div class="member"><img src="icon.jpg" alt="Abigail"><h4>Abigail Castelo</h4><p>Frontend Developer</p></div>
                    <div class="member"><img src="icon.jpg" alt="Reden"><h4>Reden Camarillo</h4><p>UI/UX Designer</p></div>
                    <div class="member"><img src="icon.jpg" alt="Raiche"><h4>Raiche Nicole Pantaleon</h4><p>Documentation</p></div>
                    <div class="member"><img src="icon.jpg" alt="Arthur"><h4>John Arthur Tuliao</h4><p>Researcher</p></div>
                    <div class="member"><img src="icon.jpg" alt="Steven"><h4>Steven Andrei Barcibal</h4><p>Database Manager</p></div>
                    <div class="member"><img src="icon.jpg" alt="Izzy"><h4>Izzy Ignacio</h4><p>QA Tester</p></div>
                    <div class="member"><img src="icon.jpg" alt="Zander"><h4>Zander Ace Rodica</h4><p>Assistant Dev</p></div>
                    <div class="member"><img src="icon.jpg" alt="Arjay"><h4>Arjay Vergara</h4><p>Marketing</p></div>
                    <div class="member"><img src="icon.jpg" alt="Renuel"><h4>Renuel Palada</h4><p>Content Creator</p></div>
                </div>
                <button class="next">&#10095;</button>
            </div>
        </div>
    </div>

    <!-- 🔹 Footer -->
    <footer>
        <div class="footer-links">
			
			<div class="social-link">
				<h3>Connect With Our Journey!</h3>
				<p>Follow our project development and updates on social media.</p>
				<a href="https://facebook.com/AimAzonProject" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com/AimAzonDev" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/AimAzonIT" target="_blank" aria-label="X (Twitter)"><i class="fab fa-twitter"></i></a>
			
			</div>
			<br>
            <div class="policies">
                <a href="#">Privacy Policy</a>
				
				<br>
                <a href="#">Terms of Service</a>
            </div>
        </div>

        <div class="disclaimer">
            Disclaimer: This website is a student project only.
All images, descriptions, and products are for educational use.
No real firearms, ammunition, or related items are being sold or distributed.

        </div>
    </footer>

    <!-- 🔹 Carousel Script -->
    <script>
        const carousel = document.querySelector('.carousel');
        const nextBtn = document.querySelector('.next');
        const prevBtn = document.querySelector('.prev');
        let scrollAmount = 0;
        const scrollStep = 250;

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: scrollStep, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: -scrollStep, behavior: 'smooth' });
        });

        // Auto-scroll loop
        setInterval(() => {
            carousel.scrollBy({ left: scrollStep, behavior: 'smooth' });
            scrollAmount += scrollStep;
            if (scrollAmount >= carousel.scrollWidth - carousel.clientWidth) {
                scrollAmount = 0;
                carousel.scrollTo({ left: 0, behavior: 'smooth' });
            }
        }, 3000);
    </script>

</body>
</html>