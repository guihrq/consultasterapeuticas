<?php
// Template Name: Formulário 
?>

<?php get_header(); ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="formulario" id="coletivo">
        <div class="container">
            <div class="row text-center"> 
                <div class="col-sm-8 mx-auto pt-5 mb-4">
                    <iframe style="border: none; max-width: 100%; max-height: 100%;" src="https://forms.office.com/Pages/ResponsePage.aspx?id=ywWLYRx-7EOAF8JacWBsbYlLyKKjOHNGo5C2IXzzuQBURVJHRUhDMzA5RzE5Wk1INjNJQ0dNVlBJWS4u&amp;embed=true" width="1440px" height="2950px" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen="allowfullscreen"> </iframe>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>