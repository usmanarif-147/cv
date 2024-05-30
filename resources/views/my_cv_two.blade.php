<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume/CV</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('cv.css') }}">


</head>

<body>
    <section id="app" class="container-fluid">
        <header class="header position-relative">
            <div class="headLine position-absolute"></div>
            <div class="row">
                <div class="col">
                    <h1 class="firstName text-break">
                        firstName
                    </h1>
                    <h2 class="lastName text-break">
                        lastName
                    </h2>
                    <p class="jobTitle">
                        <i class="bi bi-circle-fill"></i>
                        <span class="text-break">
                            jobTitle
                        </span>
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block d-print-block">
                    <img src="photo" class="photo border border-2 border-dark rounded-circle img-fluid float-end">
                </div>
            </div>
            <div class="middleLine position-absolute"></div>
        </header>
        <section class="content">
            <div class="row">
                <div class="col personal-details me-4">
                    <div class="row list-item me-5">
                        <div class="col-auto">
                            <div class="icon d-flex justify-content-center">
                                <i class="bi bi-geo-alt-fill" role="img" aria-label="Location"></i>
                            </div>
                        </div>
                        <div class="col" style="white-space: pre-line;">
                            <p>address</p>
                        </div>
                    </div>
                    <div class="row list-item me-5">
                        <div class="col-auto align-self-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="bi bi-telephone-fill" role="img" aria-label="Telephone"></i>
                            </div>
                        </div>
                        <div class="col">
                            <a href="'tel:'+ phone" class="text-decoration-none white-space-pre">
                                <p>phone</p>
                            </a>
                        </div>
                    </div>
                    <div class="row list-item me-5">
                        <div class="col-auto align-self-center">
                            <div class="icon d-flex justify-content-center">
                                <i class="bi bi-envelope-fill" role="img" aria-label="Email"></i>
                            </div>
                        </div>
                        <div class="col">
                            <a href="'mailto:'+ email" class="text-decoration-none">
                                <p>email</p>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Education</p>
                        </div>
                    </div>
                    <div class="row record">
                        <div class="col-auto bullet">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p class="fw-bold text-uppercase">
                                degree
                            </p>
                            <p class="fw-bold text-uppercase">
                                school,graduationDate
                            </p>
                            <p>e . description</p>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Links</p>
                        </div>
                    </div>
                    <div class="row record me-5">
                        <div class="col-auto bullet mb-5">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p>
                                l . label:
                                <a class="text-reset" href.prop="l.link">
                                    l . link
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Skills</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li class="pb-2">skill</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-5 me-5">
                        <div class="col p-0">
                            <p class="title">Languages</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li class="pb-2">language</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-8">
                    <div class="row bullet">
                        <div class="col-auto pt-2">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        <div class="col">
                            <p class="title">About Me</p>
                        </div>
                    </div>
                    <div class="row record bullet">
                        <div class="col-auto">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p style="white-space: pre-line;">professionalSummary</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-auto bullet pt-2">
                            <i class="bi bi-circle-fill"></i>
                        </div>
                        <div class="col">
                            <p class="title">Work Experience</p>
                        </div>
                    </div>
                    <div class="row record mb-4 bullet">
                        <div class="col-auto">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <div class="col">
                            <p class="text-uppercase fw-bold position-relative">
                                employment . jobTitle
                                <span>&nbsp;|&nbsp;employment . startDate - employment . endDate</span>
                            </p>
                            <p class="text-lowercase fst-italic fw-bold">
                                employment . employer, employment . city
                            </p>
                            <p class="mb-0">
                                • achievement
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


    <script src="https://unpkg.com/es6-promise@4/dist/es6-promise.auto.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jspdf@latest/dist/jspdf.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@latest/dist/html2canvas.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cv = this.document.getElementById('app');
            console.log(cv);
            opt = {
                margin: [0, 0.3, 0, 0.3],
                filename: 'usman_cv.pdf',
                image: {
                    type: 'jpeg, png',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2
                },
                jsPDF: {
                    unit: 'in',
                    format: 'letter',
                    orientation: 'portrait'
                },
                pagebreak: {
                    mode: ['avoid-all'],
                }
            };
            html2pdf().set(opt).from(cv).save();
        });

        const resume = {
            firstName: 'Valentina',
            lastName: 'Morato',
            jobTitle: 'Frontend Developer, Chemical Engineer',
            photo: 'https://avatars.githubusercontent.com/u/47432636?s=460&u=0dd359fdfa1689afcfd1ea9ece1487293ee7c193&v=4',
            city: 'Medellin',
            postalCode: '050023',
            country: 'Colombia',
            phone: `+573156208581 \n+573113101122`,
            email: 'vmorato1205@hotmail.com',
            education: [{
                school: 'Universidad Pontificia Bolivariana',
                degree: 'Bachelor',
                graduationDate: '2016',
                description: 'Chemical Engineering'
            }],
            links: [{
                    label: 'GitHub',
                    link: 'https://github.com/vmoratog'
                },
                {
                    label: 'LinkedIn',
                    link: 'https://www.linkedin.com/in/vmoratog'
                },
                {
                    label: 'Website',
                    link: 'https://vmoratog.github.io'
                }
            ],
            skills: [
                'HTML',
                'JavaScript',
                'CSS',
                'Ionic',
                'Angular',
                'Sass',
                'Vue',
            ],
            languages: ['English', 'Spanish'],
            professionalSummary: `Front-end developer with 2 years of experience, I have a background in web and hybrid mobile development using technologies such as HTML5, CSS3, JavaScript, Ionic (Angular), Vue and version control systems such as Git/GitHub and BitBucket, as well as using Scrum and Kanban methodologies. In addition to my technical skills, I am a team-oriented and organized individual with a passion for continuous learning and the development of optimal solutions. I hold a degree in Chemical Engineering and have 2 years of experience in that field.`,
            employmentHistory: [{
                    jobTitle: 'Software Engineer',
                    startDate: 'Jun 2021',
                    endDate: 'Present',
                    employer: 'Growth Acceleration Partners',
                    city: 'Medellein - Remote',
                    achievements: [
                        `Develop responsive, mobile-first layouts and ensure accessibility`,
                        `Implement user-facing features using front-end technologies and frameworks, such as HTML, CSS, JavaScript, and Vue/Vuetify`,
                        `Migrated an old app built in Backbone.js to Vue.js, improving performance and scalability while maintaining functionality`,
                        `Provided maintenance to the old applications`,
                        `Stay up-to-date with emerging technologies and industry trends, and continually improve your skills and knowledge`,
                        `Participate in agile development methodologies, including stand-ups, sprint planning, and code reviews`,
                        `Communicate effectively with team members and stakeholders to discuss project progress and requirements.`,

                    ]
                },
                {
                    jobTitle: 'Freelancer - Front-End Developer',
                    startDate: 'Oct 2019',
                    endDate: 'Oct 2020',
                    employer: 'InLabs',
                    city: 'Remote',
                    achievements: [
                        `I created an hybrid mobile application for android, ios and web, using technologies such
as HTML5, CSS (SASS), Ionic Framework, Angular, PhoneGap/Cordova.`,
                        `I implemented an Admin Dashboard for the administration of the application, applying
Responsive Design to be used from web and mobile.`,
                    ]
                },
                {
                    jobTitle: 'Freelancer - Front-End Developer',
                    startDate: 'Mar 2019',
                    endDate: 'Apr 2019',
                    employer: 'Crowdswap',
                    city: 'Remote',
                    achievements: [
                        `I redesigned the new responsive website for Crowdswap using React with Gatsby for
static pages generation.`
                    ]
                },
                {
                    jobTitle: 'Research and Development Engineer',
                    startDate: 'Feb 2017',
                    endDate: 'Aug 2018',
                    employer: 'Senco Colombiana',
                    city: 'Medellín',
                    achievements: [
                        'Evaluate the quality of raw materials and product in production line.',
                        'Study of different materials and its possible inclusion to the process as raw materials or as additives.'
                    ]
                }
            ]
        }

        const formatResume = (r) => ({
            ...r,
            address: [
                r.country,
                r.city,
                r.postalCode
            ].filter(Boolean).join(', ')
        })

        // new Vue({
        //     el: "#app",
        //     data: formatResume(resume),
        //     methods: {
        //         print() {
        //             window.print()
        //         }
        //     }
        // });
    </script>

</body>

</html>
