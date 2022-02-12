<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_6e506fd2c024ed1d1d6dc0df6d13cc0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'home' => [$this, 'block_home'],
            'story' => [$this, 'block_story'],
            'team' => [$this, 'block_team'],
            'movies' => [$this, 'block_movies'],
            'studies' => [$this, 'block_studies'],
            'news' => [$this, 'block_news'],
            'support' => [$this, 'block_support'],
            'contact' => [$this, 'block_contact'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"description\" content=\"Low Production est une association de production audiovisuelle libre, collaborative et engagée dans la transition environnementale.\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"tabthemes\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/favicon/site.webmanifest"), "html", null, true);
        echo "\">

\t\t";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 43
        echo "  </head>

\t<!-- Start Body -->
  <body class=\"homepage_slider\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\" data-offset=\"100\">

    <!-- Preloader -->
    <div id=\"preloader\">
        <div id=\"spinner\"></div>
    </div>
    <!-- End Preloader-->

    <!-- Start Navigation -->
    <header class=\"nav-solid\" id=\"home\">
        <nav class=\"navbar navbar-fixed-top\">
            <div class=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"logo-container\">
                                <div class=\"logo-wrap local-scroll\">
                                  <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">
                                    <img class=\"logo\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/img/logo/logo_light.svg"), "html", null, true);
        echo "\" alt=\"logo\" data-rjs=\"2\">
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-xs-12 nav-wrap\">
                            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 78
        $this->displayBlock('home', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        $this->displayBlock('story', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("story");
        echo "\">Histoire</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 80
        $this->displayBlock('team', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("team");
        echo "\">L'équipe</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 81
        $this->displayBlock('movies', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movies");
        echo "\">Films</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 82
        $this->displayBlock('studies', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("studies");
        echo "\">Études</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 83
        $this->displayBlock('news', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("news");
        echo "\">Actualités</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        $this->displayBlock('support', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("support");
        echo "\">Soutenir</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        $this->displayBlock('contact', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navigation -->

\t\t<!-- Start Body -->
\t\t";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "\t\t<!-- End Body -->

    <!-- Start Footer -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <small class=\"copyright pull-left\"><a data-toggle=\"modal\" data-target=\"#mentions\">Mentions légales</a><br>Copyrights © 2022 Low Production - Made by <a target=\"_blank\" href=\"https://www.halima-gueye.online/\">Halima</a> & inspired by <a target=\"_blank\" href=\"http://www.tabthemes.com/\">tabthemes</a>.</small>
            <div class=\"social-icon pull-right\">
              <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
              <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Mentions -->
    <div class=\"modal fade\" id=\"mentions\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mentions\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h2 class=\"modal-title\">Mentions légales</h2>
          </div>
          <div class=\"modal-body\">
            <h5>Éditeur</h5>
            <ul>
              <li><b>Dénomination :</b> Low Production</li>
              <li><b>Forme juridique :</b> Association de loi 1901</li>
              <li><b>Président :</b> William Boffy</li>
              <li><b>Trésorière et vice-présidente :</b> Claire Monchauzou</li>
              <li><b>Siège :</b> 11 r<!-- antispam -->ue de<!-- antispam --> la Pier<!-- antispam -->re Dieu, 0<!-- antispam -->2600 Largny-sur-A<!-- antispam -->utomn<!-- antispam -->e, Fr<!-- antispam -->ance métropolitaine</li>
              <li><b>Téléphone :</b> +262 &#54; 93 &#52;&#54; 47 46</li>
              <li><b>Courriel :</b> co<!-- anti-spam -->ntact<!-- @spam.org --><span class=\"aro\"></span>&#108;&#111;&#119;-production<span class=\"pt\"></span>rg</li>
            </ul>

            <h5>Hébergement</h5>
            <ul>
              <li><b>Dénomination :</b> XXX</li>
              <li><b>Adresse :</b> XXX</li>
            </ul>

            <h5>Design et développement</h5>
            <ul>
              <li><b>Réalisé par :</b> Halima GUEYE</li>
              <li><b>Site internet :</b> <a href='https://www.halima-gueye.online/'>https://www.halima-gueye.online/</a></li>
              <li><b>Inspiration de départ :</b> </li>
              <li><b>Site internet :</b> <a href='http://www.tabthemes.com/'>http://www.tabthemes.com/</a></li>
            </ul>

            <h5>Identité visuelle</h5>
            <ul>
              <li><b>Réalisée par :</b> William BOFFY</li>
            </ul>

            <h5>Conditions d’accès et d’utilisation</h5>
            <ul>
              <li>Toute consultation et utilisation du site <a href=\"www.low-production.org\">www.low-production.org</a> implique l’acceptation sans restriction des termes de la réglementation présente dans les mentions légales ci-dessous. Par conséquent, tout accès au site <a href=\"www.low-production.org\">www.low-production.org</a> est soumis à cette réglementation ainsi qu’aux lois en vigueur.</li>
            </ul>

            <h5>Contenu</h5>
            <ul>
              <li>Le site <a href=\"www.low-production.org\">www.low-production.org</a> contient des informations relatives à Low Production.</li>
              <li>Toute information fournie sur ce site l’est exclusivement à titre indicatif. L’information contenue sur ce site est conçue pour être aussi exhaustive que possible.</li>
              <li>Low Production se réserve le droit d’apporter, à tout moment et sans préavis, des modifications.</li>
            </ul>

            <h5>Données personnelles</h5>
            <ul>
              <li>Conformément aux dispositions de la loi numéro 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, le traitement automatisé des données nominatives réalisé à partir de ce site Internet a fait l'objet d'une déclaration auprès de la Commission nationale de l’informatique et des libertés (CNIL) sous le numéro XXX.</li>
              <li>Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent (art. 34 de la loi « Informatique et libertés » du 6 janvier 1978). Vous pouvez exercer ce droit en remplissant le formulaire de contact.</li>
            </ul>

            <h5>Copyright, avis de propriété intellectuelle et industrielle</h5>
            <ul>
              <li>La présentation et le contenu de ce site sont intégralement protégés par la réglementation relative à la protection des droits de propriété intellectuelle et industrielle. Les informations, textes, images ou graphiques ne peuvent être utilisés qu’à titre strictement personnel et dans un but non commercial, sauf si cela est explicitement mentionné. Toute forme de reproduction, de modification, de transmission, d’attribution de licence ou de publication de tout ou partie de ce matériel, à quelque fin que ce soit, est interdite sans l’autorisation écrite préalable à Low Production, sauf pour être visionné.</li>
            </ul>

            <h5>Hyperliens</h5>
            <ul>
              <li>Le site <a href=\"www.low-production.org\">www.low-production.org</a> peut contenir des liens hypertextes menant à d’autres sites Internet totalement indépendants du site <a href=\"www.low-production.org\">www.low-production.org</a>. Dès lors, tout accès à un autre site Internet lié au site <a href=\"www.low-production.org\">www.low-production.org</a> s’effectue sous la propre responsabilité, pleine et entière, de l’utilisateur.</li>
            </ul>

            <h5>Responsabilité limitée</h5>
            <ul>
              <li>Low Production décline spécifiquement toute responsabilité pour les éventuels préjudices directs, indirects, accidentels, consécutifs ou spéciaux liés à l’accès ou à l’utilisation du site <a href=\"www.low-production.org\">www.low-production.org</a> ou subis en conséquence de ceux-ci, y compris, mais sans s’y limiter, à toute perte ou dommage provoqués par des virus affectant l’équipement informatique de l’utilisateur ou résultant du crédit accordé à une information obtenue par le biais du site <a href=\"www.low-production.org\">www.low-production.org</a>.</li>
              <li>De même, l’éditeur du présent site ne peut être tenu responsable en cas de mauvaise utilisation du site par l’utilisateur ou en cas d’indisponibilité temporaire du site (cas de force majeure, de période de maintenance ou d’incident technique, quel qu’il soit).</li>
              <li>L’utilisateur est le seul et unique responsable de l’usage des informations figurant sur le présent site et des conséquences qui pourraient en découler, notamment quant aux décisions prises et aux actions entreprises sur la base de ces informations.</li>
            </ul>

            <h5>Mise à jour de la réglementation du site</h5>
            <ul>
              <li>Low Production pourra, en fonction de ses impératifs commerciaux, modifier les mentions légales de son site. Chaque internaute est donc invité à visiter la présente page lors de chaque consultation du site afin de prendre connaissance de ladite réglementation.</li>
            </ul>

            <h5>Utilisation des cookies</h5>
            <ul>
              <li>Ce site internet n'utilise pas de cookie.</li>
              <li>Si c'était le cas, les utilisateurs du présent site seraient informés que, lors de l’accès à ce site, des informations peuvent être temporairement conservées en mémoire ou sur leur disque dur afin de faciliter la navigation sur le site. Les utilisateurs du présent site reconnaitraient alors avoir été informés de cette pratique et des moyens dont ils disposent pour s’y opposer.</li>
            </ul>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-main\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Mentions -->

    <!-- Back to top -->
    <a href=\"#\" id=\"back-to-top\" title=\"Back to top\"><i class=\"fa fa-angle-up\"></i></a>
    <!-- /Back to top -->

\t\t";
        // line 209
        $this->displayBlock('js', $context, $blocks);
        // line 220
        echo "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Low Production";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 21
        echo "\t    <!-- Bootstrap CSS -->
\t    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t    <!-- CSS Files For Plugin -->
\t    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/owlcarousel/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/owlcarousel/css/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/inc/revolution/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t    <!-- Custom CSS -->
\t    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 78
    public function block_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 79
    public function block_story($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_team($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_movies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "movies"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "movies"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_studies($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "studies"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "studies"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_news($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "news"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "news"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_support($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "support"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "support"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_contact($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contact"));

        echo "<li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 209
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 210
        echo "\t    <!-- jQuery -->
\t    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Bootstrap -->
\t    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Custom Plugin -->
\t    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/js/custom.js"), "html", null, true);
        echo "\"></script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  606 => 217,  600 => 214,  594 => 211,  591 => 210,  581 => 209,  563 => 97,  544 => 85,  525 => 84,  506 => 83,  487 => 82,  468 => 81,  449 => 80,  430 => 79,  411 => 78,  392 => 34,  386 => 31,  382 => 30,  378 => 29,  374 => 28,  370 => 27,  366 => 26,  362 => 25,  356 => 22,  353 => 21,  343 => 20,  324 => 8,  312 => 220,  310 => 209,  197 => 98,  195 => 97,  178 => 85,  172 => 84,  166 => 83,  160 => 82,  154 => 81,  148 => 80,  142 => 79,  136 => 78,  125 => 70,  121 => 69,  93 => 43,  91 => 20,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  64 => 8,  55 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Low Production{% endblock %}</title>

    <meta name=\"description\" content=\"Low Production est une association de production audiovisuelle libre, collaborative et engagée dans la transition environnementale.\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"author\" content=\"tabthemes\">

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('bundles/web/img/favicon/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('bundles/web/img/favicon/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('bundles/web/img/favicon/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('bundles/web/img/favicon/site.webmanifest') }}\">

\t\t{% block css %}
\t    <!-- Bootstrap CSS -->
\t    <link href=\"{{ asset('bundles/web/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

\t    <!-- CSS Files For Plugin -->
\t    <link href=\"{{ asset('bundles/web/css/animate.css')}}\" rel=\"stylesheet\">
\t    <link href=\"{{ asset('bundles/web/css/font-awesome/font-awesome.min.css')}}\" rel=\"stylesheet\">
\t    <link href=\"{{ asset('bundles/web/inc/owlcarousel/css/owl.carousel.min.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('bundles/web/inc/owlcarousel/css/owl.theme.default.min.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('bundles/web/inc/revolution/css/settings.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('bundles/web/inc/revolution/css/layers.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('bundles/web/inc/revolution/css/navigation.css')}}\" rel=\"stylesheet\" />

\t    <!-- Custom CSS -->
\t    <link href=\"{{ asset('bundles/web/css/style.css')}}\" rel=\"stylesheet\">

\t    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t    <!--[if lt IE 9]>
\t      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t    <![endif]-->
\t\t{% endblock %}
  </head>

\t<!-- Start Body -->
  <body class=\"homepage_slider\" data-spy=\"scroll\" data-target=\".navbar-fixed-top\" data-offset=\"100\">

    <!-- Preloader -->
    <div id=\"preloader\">
        <div id=\"spinner\"></div>
    </div>
    <!-- End Preloader-->

    <!-- Start Navigation -->
    <header class=\"nav-solid\" id=\"home\">
        <nav class=\"navbar navbar-fixed-top\">
            <div class=\"navigation\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                            <div class=\"logo-container\">
                                <div class=\"logo-wrap local-scroll\">
                                  <a href=\"{{url(\"home\")}}\">
                                    <img class=\"logo\" src=\"{{ asset('bundles/web/img/logo/logo_light.svg') }}\" alt=\"logo\" data-rjs=\"2\">
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-xs-12 nav-wrap\">
                            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block home %}<li>{% endblock %}<a href=\"{{url(\"home\")}}\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block story %}<li>{% endblock %}<a href=\"{{url(\"story\")}}\">Histoire</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block team %}<li>{% endblock %}<a href=\"{{url(\"team\")}}\">L'équipe</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block movies %}<li>{% endblock %}<a href=\"{{url(\"movies\")}}\">Films</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block studies %}<li>{% endblock %}<a href=\"{{url(\"studies\")}}\">Études</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block news %}<li>{% endblock %}<a href=\"{{url(\"news\")}}\">Actualités</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block support %}<li>{% endblock %}<a href=\"{{url(\"support\")}}\">Soutenir</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% block contact %}<li>{% endblock %}<a href=\"{{url(\"contact\")}}\">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Navigation -->

\t\t<!-- Start Body -->
\t\t{% block body %}{% endblock %}
\t\t<!-- End Body -->

    <!-- Start Footer -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <small class=\"copyright pull-left\"><a data-toggle=\"modal\" data-target=\"#mentions\">Mentions légales</a><br>Copyrights © 2022 Low Production - Made by <a target=\"_blank\" href=\"https://www.halima-gueye.online/\">Halima</a> & inspired by <a target=\"_blank\" href=\"http://www.tabthemes.com/\">tabthemes</a>.</small>
            <div class=\"social-icon pull-right\">
              <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
              <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>
              <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Mentions -->
    <div class=\"modal fade\" id=\"mentions\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mentions\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h2 class=\"modal-title\">Mentions légales</h2>
          </div>
          <div class=\"modal-body\">
            <h5>Éditeur</h5>
            <ul>
              <li><b>Dénomination :</b> Low Production</li>
              <li><b>Forme juridique :</b> Association de loi 1901</li>
              <li><b>Président :</b> William Boffy</li>
              <li><b>Trésorière et vice-présidente :</b> Claire Monchauzou</li>
              <li><b>Siège :</b> 11 r<!-- antispam -->ue de<!-- antispam --> la Pier<!-- antispam -->re Dieu, 0<!-- antispam -->2600 Largny-sur-A<!-- antispam -->utomn<!-- antispam -->e, Fr<!-- antispam -->ance métropolitaine</li>
              <li><b>Téléphone :</b> +262 &#54; 93 &#52;&#54; 47 46</li>
              <li><b>Courriel :</b> co<!-- anti-spam -->ntact<!-- @spam.org --><span class=\"aro\"></span>&#108;&#111;&#119;-production<span class=\"pt\"></span>rg</li>
            </ul>

            <h5>Hébergement</h5>
            <ul>
              <li><b>Dénomination :</b> XXX</li>
              <li><b>Adresse :</b> XXX</li>
            </ul>

            <h5>Design et développement</h5>
            <ul>
              <li><b>Réalisé par :</b> Halima GUEYE</li>
              <li><b>Site internet :</b> <a href='https://www.halima-gueye.online/'>https://www.halima-gueye.online/</a></li>
              <li><b>Inspiration de départ :</b> </li>
              <li><b>Site internet :</b> <a href='http://www.tabthemes.com/'>http://www.tabthemes.com/</a></li>
            </ul>

            <h5>Identité visuelle</h5>
            <ul>
              <li><b>Réalisée par :</b> William BOFFY</li>
            </ul>

            <h5>Conditions d’accès et d’utilisation</h5>
            <ul>
              <li>Toute consultation et utilisation du site <a href=\"www.low-production.org\">www.low-production.org</a> implique l’acceptation sans restriction des termes de la réglementation présente dans les mentions légales ci-dessous. Par conséquent, tout accès au site <a href=\"www.low-production.org\">www.low-production.org</a> est soumis à cette réglementation ainsi qu’aux lois en vigueur.</li>
            </ul>

            <h5>Contenu</h5>
            <ul>
              <li>Le site <a href=\"www.low-production.org\">www.low-production.org</a> contient des informations relatives à Low Production.</li>
              <li>Toute information fournie sur ce site l’est exclusivement à titre indicatif. L’information contenue sur ce site est conçue pour être aussi exhaustive que possible.</li>
              <li>Low Production se réserve le droit d’apporter, à tout moment et sans préavis, des modifications.</li>
            </ul>

            <h5>Données personnelles</h5>
            <ul>
              <li>Conformément aux dispositions de la loi numéro 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, le traitement automatisé des données nominatives réalisé à partir de ce site Internet a fait l'objet d'une déclaration auprès de la Commission nationale de l’informatique et des libertés (CNIL) sous le numéro XXX.</li>
              <li>Vous disposez d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent (art. 34 de la loi « Informatique et libertés » du 6 janvier 1978). Vous pouvez exercer ce droit en remplissant le formulaire de contact.</li>
            </ul>

            <h5>Copyright, avis de propriété intellectuelle et industrielle</h5>
            <ul>
              <li>La présentation et le contenu de ce site sont intégralement protégés par la réglementation relative à la protection des droits de propriété intellectuelle et industrielle. Les informations, textes, images ou graphiques ne peuvent être utilisés qu’à titre strictement personnel et dans un but non commercial, sauf si cela est explicitement mentionné. Toute forme de reproduction, de modification, de transmission, d’attribution de licence ou de publication de tout ou partie de ce matériel, à quelque fin que ce soit, est interdite sans l’autorisation écrite préalable à Low Production, sauf pour être visionné.</li>
            </ul>

            <h5>Hyperliens</h5>
            <ul>
              <li>Le site <a href=\"www.low-production.org\">www.low-production.org</a> peut contenir des liens hypertextes menant à d’autres sites Internet totalement indépendants du site <a href=\"www.low-production.org\">www.low-production.org</a>. Dès lors, tout accès à un autre site Internet lié au site <a href=\"www.low-production.org\">www.low-production.org</a> s’effectue sous la propre responsabilité, pleine et entière, de l’utilisateur.</li>
            </ul>

            <h5>Responsabilité limitée</h5>
            <ul>
              <li>Low Production décline spécifiquement toute responsabilité pour les éventuels préjudices directs, indirects, accidentels, consécutifs ou spéciaux liés à l’accès ou à l’utilisation du site <a href=\"www.low-production.org\">www.low-production.org</a> ou subis en conséquence de ceux-ci, y compris, mais sans s’y limiter, à toute perte ou dommage provoqués par des virus affectant l’équipement informatique de l’utilisateur ou résultant du crédit accordé à une information obtenue par le biais du site <a href=\"www.low-production.org\">www.low-production.org</a>.</li>
              <li>De même, l’éditeur du présent site ne peut être tenu responsable en cas de mauvaise utilisation du site par l’utilisateur ou en cas d’indisponibilité temporaire du site (cas de force majeure, de période de maintenance ou d’incident technique, quel qu’il soit).</li>
              <li>L’utilisateur est le seul et unique responsable de l’usage des informations figurant sur le présent site et des conséquences qui pourraient en découler, notamment quant aux décisions prises et aux actions entreprises sur la base de ces informations.</li>
            </ul>

            <h5>Mise à jour de la réglementation du site</h5>
            <ul>
              <li>Low Production pourra, en fonction de ses impératifs commerciaux, modifier les mentions légales de son site. Chaque internaute est donc invité à visiter la présente page lors de chaque consultation du site afin de prendre connaissance de ladite réglementation.</li>
            </ul>

            <h5>Utilisation des cookies</h5>
            <ul>
              <li>Ce site internet n'utilise pas de cookie.</li>
              <li>Si c'était le cas, les utilisateurs du présent site seraient informés que, lors de l’accès à ce site, des informations peuvent être temporairement conservées en mémoire ou sur leur disque dur afin de faciliter la navigation sur le site. Les utilisateurs du présent site reconnaitraient alors avoir été informés de cette pratique et des moyens dont ils disposent pour s’y opposer.</li>
            </ul>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-main\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Mentions -->

    <!-- Back to top -->
    <a href=\"#\" id=\"back-to-top\" title=\"Back to top\"><i class=\"fa fa-angle-up\"></i></a>
    <!-- /Back to top -->

\t\t{% block js %}
\t    <!-- jQuery -->
\t    <script src=\"{{ asset('bundles/web/js/jquery.min.js')}}\"></script>

\t    <!-- Bootstrap -->
\t    <script src=\"{{ asset('bundles/web/bootstrap/js/bootstrap.min.js')}}\"></script>

\t    <!-- Custom Plugin -->
\t    <script src=\"{{ asset('bundles/web/js/custom.js')}}\"></script>

\t\t{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\base.html.twig");
    }
}
