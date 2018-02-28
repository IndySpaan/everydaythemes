<?php
// The front page template.
get_header(); ?>
<body>

<?php get_template_part( '/template-parts/navigation/navigation', 'top' ); ?>
<div class="container">
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
    <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</div>

</body>

<?php get_footer();
