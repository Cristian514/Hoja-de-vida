<?php
$projects = [
    [
        'name' => 'Proyecto1',
        'description' => 'Este proyecto fue elaborado con PHP, HTML, CSS, BOOSTRAP.'
    ],
    [
        'name' => 'Proyecto2',
        'description' => 'Proyecto elaborado con angular.'
    ],
    [
        'name' => 'Proyecto3',
        'description' => 'Echo en JAVA.'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de vida </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Peddana&display=swap" rel="stylesheet">


</head>

<body>


    <section class="container">
        <article class="row">
            <div class="col-3">
                <img class="img-fluid rounted-circle" src="hojadevida.jpg.jpg" alt="">
            </div>
            <div class="col-7">
                <h1 class="font1">Cristian Lopez</h1>
                <hr>
                <h6>Técnico en sistemas</h6>
                <h6>Soyl-23@gmail.com</h6>
                <h6>315556554</h6>
                <h5>https://www.facebook.com/</h6>
            </div>
        </article>
    </section>
    <section class="container">
        <article class="row">
            <div class="">
                <h3 class="h5">Carrer sumary</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae harum porro ratione. Ut maiores
                    nemo optio, nihil placeat voluptatibus beatae cum provident quos quibusdam perspiciatis tempore
                    veritatis tenetur necessitatibus sed?</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae nemo iure nostrum temporibus
                    veritatis est maxime provident ipsa officiis harum voluptas sapiente ea commodi esse quas unde
                    pariatur, adipisci praesentium?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias facere beatae consequatur mollitia
                    aliquam rerum molestiae, nisi natus facilis quo voluptates, aut laborum est nesciunt. Perferendis
                    optio est deleniti eius!</p>

            </div>
        </article>
    </section>
    <section class="container">

        <h5>Projects</h5>
        <article class="card-columns">
            <?php
            $size = count($projects);
            for ($i = 0; $i < count($projects); $i++) {
                echo '<div class="card bg-dark text-white">';
                echo '    <div class="card-header text-center">';
                echo '        <h5 class="crad-title font3">' . $projects[$i]['name'] . '</h5>';
                echo '    </div>';
                echo '    <div class="card-body">';
                echo '        <img src="hojadevida.jpg.jpg" alt="" class="img-fluid rounted-circle">';
                echo '    </div>';
                echo '    <div class="card-footer">';
                echo '     <p>' . $projects[$i]['description'] . '</p>';
                echo '        <a href="index.html" class="btn btn-outline-info btn-block">View Projects</a>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
        </article>
    </section>

    <section class="container pt-5 pb-5">
        <h5> Skills and techologies</h5>
        <article class="row">
            <ul>
                <li>
                    <h5>PHP</h5>
                    <H6>Three years</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
                <li>
                    <h5>JAVA</h5>
                    <H6>Three years</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
                <li>
                    <h5>CSS3</h5>
                    <H6>Three years</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
            </ul>
        </article>
    </section>

    
    <section class="container pt-5 pb-5">
        <h5> Referencias personales</h5>
        <article class="row">
            <ul>
                <li>
                    <h5>Jua jose</h5>
                    <H6>54989455123</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
                <li>
                    <h5>Erick Estrada</h5>
                    <H6>78979844</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
                <li>
                    <h5>Fernanda olivas</h5>
                    <H6>8789744</H6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, iure. Totam deleniti, libero molestias consequatur doloribus in dolorum, repellat maxime eligendi minima, necessitatibus perferendis id obcaecati hic praesentium esse ad?</p>
                </li>
            </ul>
        </article>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

<footer class="page-footer font-small stylish-color-dark pt-4">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CONTACTA A CRISTIAN</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto atque quis temporibus magni! Est expedita consequatur ex error distinctio non quaerat, dolores dicta aliquam, optio repudiandae exercitationem, rerum illum maxime.</p>

            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">NUMERO</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="www.skype.com">32222217813</a>
                    </li>
                    <li>
                        <a href="#!">7888745454</a>
                    </li>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Correo</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Mailito.80@gmail.com</a>
                    </li>
                    <li>
                        <a href="#!">Cristya.0@gmail.com</a>
                    </li>
                    <li>
                        <a href="#!">Cristian.lopez@nuevaamerica.ed.</a> <br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">GOOGLE+</h5>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="btn btn-danger btn-rounded">Google!</a>
        </li>
    </ul>
    <hr>
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
</footer>

</html>