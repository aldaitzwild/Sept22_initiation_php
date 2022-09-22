<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild Template</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<?php include("_header.php"); ?>


<section class="hero is-info is-medium is-bold">
    <div class="hero-body header-image">
        <div class="container has-text-centered">
            <h1 class="title shadow">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed eiusmod tempor
                incididunt ut labore et dolore magna aliqua</h1>
        </div>
    </div>
</section>

<main class="container">
    <div class="column is-8 is-offset-2">
        <div class="articles">

            <article class="card article" id="learn">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content has-text-centered">
                            <h2 class="title article-title">Learn with pleasure</h2>
                            <div class="tags has-addons level-item">
                                <span class="tag is-rounded is-info">@tic</span>
                                <span class="tag is-rounded"><?php echo date('M d, Y'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="content article-body">
                        <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere
                            sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                        <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse
                            platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis
                            volutpat. Non sodales neque sodales ut etiam.
                            Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                        <figure class="image has-image-centered">
                            <img src="https://picsum.photos/400/200" alt="">
                        </figure>
                    </div>
                </div>
            </article>

            <article class="card article" id="skills">
                <div class="card-content">
                    <div class="media">
                        <div class="media-content has-text-centered">
                            <h2 class="title article-title">Increase your skills</h2>
                            <div class="tags has-addons level-item">
                                <span class="tag is-rounded is-info">@tac</span>
                                <span class="tag is-rounded">Aug 14, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="content article-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Accumsan lacus vel facilisis volutpat est velit egestas.
                            Sapien eget mi proin sed. Sit amet mattis vulputate enim.
                        </p>
                        <p>
                            Commodo ullamcorper a lacus vestibulum sed arcu. Fermentum leo vel orci porta non. Proin
                            fermentum leo vel orci porta non pulvinar. Imperdiet proin fermentum leo vel. Tortor posuere
                            ac ut consequat semper viverra. Vestibulum lectus mauris ultrices eros.
                        </p>
                        <figure class="image has-image-centered">
                            <img src="https://picsum.photos/400/180" alt="">
                        </figure>
                        <h3 class="has-text-centered">Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi.
                            Cras tincidunt lobortis feugiat vivamus.</h3>
                        <p>
                            In eu mi bibendum neque egestas congue quisque egestas diam. Enim nec dui nunc mattis enim
                            ut tellus. Ut morbi tincidunt augue interdum velit euismod in. At in tellus integer feugiat
                            scelerisque varius morbi enim nunc. Vitae suscipit tellus mauris a diam.
                            Arcu non sodales neque sodales ut etiam sit amet.
                        </p>
                    </div>
                </div>
            </article>
        </div>

        <aside class="hero is-info is-bold is-small promo-block" id="picture">
            <div class="hero-body picture">
                <div class="container">
                    <h2 class="title">
                        <i class="fa fa-bell-o"></i> Nemo enim ipsam voluptatem quia.
                    </h2>
                    <span class="tag is-black is-medium is-rounded">
                        Natus error sit voluptatem
                    </span>
                </div>
            </div>
        </aside>

        <section class="card contact" id="contact">
            <div class="card-content">
                <div class="media">
                    <div class="media-content has-text-centered">
                        <h2 class="title article-title">Contact-Us</h2>
                    </div>
                </div>
                <div class="content article-body">
                    <form action="form.php">
                        <div class="field">
                            <label for="firstname" class="label">First Name</label>
                            <div class="control">
                                <input id="firstname" name="firstname" class="input" type="text">
                            </div>
                        </div>
                        <div class="field">
                            <label for="lastname" class="label">Last Name</label>
                            <div class="control">
                                <input id="lastname" name="lastname" class="input" type="text">
                            </div>
                        </div>
                        <div class="field">
                            <label for="campus" class="label">Campus</label>
                            <div class="control">
                                <input id="campus" name="campus" class="input" type="text">
                            </div>
                        </div>
                        <div class="field">
                            <label for="message" class="label">Message</label>
                            <div class="control">
                                <textarea id="message" name="message" class="textarea"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control has-text-centered">
                                <button class="button is-link has-background-alt">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include("_footer.php"); ?>

</body>
</html>