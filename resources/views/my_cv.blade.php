<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV</title>
    <link rel="stylesheet" href="{{ asset('raw.css') }}">
</head>

<body>
    <div class="container">
        <div class="left-section">
            <div class="photo">
                <img src="photo.jpg" alt="My Photo">
            </div>
            <div class="contact-info">
                <h2>Contact Info</h2>
                <p>Email: example@example.com</p>
                <p>Phone: 123-456-7890</p>
                <p>Address: 123 Main St, City, Country</p>
            </div>
            <div class="skills">
                <h2>Skills</h2>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Python</li>
                </ul>
            </div>
        </div>
        <div class="right-section">
            <div class="about-me">
                <h2>About Me</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non ligula a nisi consequat vehicula.
                </p>
            </div>
            <div class="experience">
                <h2>Experience</h2>
                <div class="job">
                    <h3>Company 1</h3>
                    <p>Position: Developer</p>
                    <p>Duration: 2020-2022</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="job">
                    <h3>Company 2</h3>
                    <p>Position: Developer</p>
                    <p>Duration: 2018-2020</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="job">
                    <h3>Company 3</h3>
                    <p>Position: Developer</p>
                    <p>Duration: 2016-2018</p>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="education">
                <h2>Education</h2>
                <p>Bachelor of Science in Computer Science, University Name, 2012-2016</p>
            </div>
            <div class="hobbies">
                <h2>Hobbies</h2>
                <p>Reading, Traveling, Coding, Music</p>
            </div>
        </div>
    </div>
</body>

</html>
