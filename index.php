```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muna | My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2 class="logo">MUNA<span>.</span></h2>

        <nav>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="home">
        <div class="home-content">
            <div class="profile-image">
    <img src="myphoto.jpg" alt="Muna's Profile Picture">
</div>
            <h1>Hello, I'm <span>Muna</span></h1>
            <h3>Welcome to My Portfolio</h3>
            <p>I'm passionate about technology, creativity, and learning new things.</p>
            <a href="#about" class="btn">Discover More</a>
        </div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <p>Hello! I'm Muna. Welcome to my personal portfolio website.</p>
    </section>

    <section id="skills">
        <h2>My Skills</h2>
        <p>HTML | CSS | JavaScript | PHP</p>
    </section>

    <section id="projects">
        <h2>My Projects</h2>
        <p>Here are some of my creative works.</p>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2026 Muna. All Rights Reserved.</p>
    </footer>

</body>
</html>
```