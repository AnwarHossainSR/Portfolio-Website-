<?php 
    require_once 'assets/php/header.php';
 ?>
<!DOCTYPE html>

    
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Portfo<span>lio.</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
                    Hello, my name is
                </div>
                <div class="text-2" id="fullname"><?= $cfullname; ?></div>
                <div class="text-3">
                    And I'm a <span class="typing"></span>
                </div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
</section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                     <img src="<?= 'admin/assets/php/'. $cphoto; ?>" class="img-thumbnail img-fluid" style="width: 480px;">
                </div>
                <div class="column right">
                    <div class="text">
                        I'm <span id="name"><?= $cusername; ?></span> and I'm a <span class="typing-2"></span>
                    </div>
                    <p id="aboutme"><?= $cabout; ?></p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <?php foreach ($service as $key => $value): ?>
                    <div class="card">
                        <div class="box">
                            <?= $value['icon']; ?>
                            <div class="text"><?= $value['heading']; ?></div>
                            <p><?= $value['details']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript & Jquery</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Ajax</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>React</span>
                            <span>60%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title"> My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="https://images.unsplash.com/photo-1549876576-cb8e5b2fc5af?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=564&q=80" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://images.unsplash.com/photo-1509305717900-84f40e786d82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=704&q=80" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <div class="text">Someone name</div>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="https://images.unsplash.com/photo-1563351672-62b74891a28a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head"> Name</div>
                                <div class="sub-title"> <?= $cfullname; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">
                                    <?= $caddress; ?>
                                </div>
                            </div>
                         </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><?= $cemail; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone</div>
                                <div class="sub-title"><?= $cphone; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#" method="post" class="px-3" id="contact-form">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" name="message" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" id="contact-btn"><span id="value">Send message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <!-- footer section start -->
    <footer>
        <span>Copy Right | <a href="#"><?= $cusername ?></a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="assets/js/script.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#contact-btn').click(function(e) {
                if ($('#contact-form')[0].checkValidity()){
                    e.preventDefault();
                    $('#value').val('Please wait...');
                    $.ajax({
                        url: 'assets/php/process.php',
                        type: 'POST',
                        data: $('#contact-form').serialize()+'&action=contact',
                        success:function(response){
                            $('#value').val('Send message');
                            $('input,textarea').val('');
                            var answer = JSON.parse(response);
                        switch ( answer.status_response ) {
                        case 'success' :
                            Swal.fire({
                              title: 'Successfull!!',
                              html: 'Click Ok to close alert box',
                              showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                              },
                              hideClass: {
                                    popup: 'animate__animated animate__fadeOutUp'
                                  },
                              icon: 'success',
                              confirmButtonText: `OK`,
                            })                
                            break;
                        case 'error' :
                            Swal.fire({
                              title: 'Opps!!<br><br>',
                              icon: 'error',
                              html: '<b>Something is wrong!</b>',
                              showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                              },
                              hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                              }
                            }) 
                            break;
                        }
                        }
                    }); 
                }
            });
        });
    </script>
</body>
</html>
