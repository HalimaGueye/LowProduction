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
            'description' => [$this, 'block_description'],
            'og_type' => [$this, 'block_og_type'],
            'og_img' => [$this, 'block_og_img'],
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

    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('description', $context, $blocks);
        echo "\">
    <meta name=\"author\" content=\"Low Production\">

    <!-- Balises OG -->
    <meta property=\"og:title\" content=\"";
        // line 14
        $this->displayBlock("title", $context, $blocks);
        echo "\"/>
    <meta property=\"og:type\" content=\"";
        // line 15
        $this->displayBlock('og_type', $context, $blocks);
        echo "\"/>
    <meta property=\"og:url\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "uri", [], "any", false, false, false, 16), "html", null, true);
        echo "\" />
    <meta property=\"og:image\" content=\"";
        // line 17
        $this->displayBlock('og_img', $context, $blocks);
        echo "\"/>
    <meta property=\"og:site_name\" content=\"";
        // line 18
        $this->displayBlock("title", $context, $blocks);
        echo "\"/>

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/favicon/site.webmanifest"), "html", null, true);
        echo "\">

\t\t";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 49
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
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">
                                    <img class=\"logo\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/logo/logo_light.svg"), "html", null, true);
        echo "\" alt=\"logo\" data-rjs=\"2\">
                                  </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-xs-12 nav-wrap\">
                            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 84
        $this->displayBlock('home', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">Accueil</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        $this->displayBlock('story', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("story");
        echo "\">Histoire</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 86
        $this->displayBlock('team', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("team");
        echo "\">L'équipe</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        $this->displayBlock('movies', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("movies");
        echo "\">Films</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ";
        // line 88
        $this->displayBlock('studies', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("studies");
        echo "\">Études</a></li> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 89
        $this->displayBlock('news', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("news");
        echo "\">Actualités</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 90
        $this->displayBlock('support', $context, $blocks);
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("support");
        echo "\">Soutenir</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
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
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "\t\t<!-- End Body -->

    <!-- Start Footer -->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <small class=\"copyright pull-left\"><a data-toggle=\"modal\" data-target=\"#mentions\">Mentions légales</a><br>Copyrights © ";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Low Production.</small>
            <div class=\"social-icon pull-right\">
              <a target=\"_blank\" href=\"https://www.facebook.com/AssociationLowProduction\"><i class=\"fa fa-facebook\"></i></a>
              <a target=\"_blank\" href=\"https://www.linkedin.com/company/low-production/\"><i class=\"fa fa-linkedin\"></i></a>
              <a target=\"_blank\" href=\"https://www.instagram.com/lowproduction.asso/\"><i class=\"fa fa-instagram\"></i></a>
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
              <li><b>Dénomination : </b>IKOULA</li>
              <li><b>Adresse : </b>175/177 rue d'Aguesseau, 92100, Boulogne Billancourt, FRANCE</li>
            </ul>

            <h5>Design et développement</h5>
            <ul>
              <li><b>Réalisé par :</b> William BOFFY & Halima GUEYE (<a target=\"_blank\" href='https://www.halima-gueye.online/'>https://www.halima-gueye.online/</a>)</li>
              <li><b>Inspiration de départ :</b> TabThemes (<a target=\"_blank\" href='http://www.tabthemes.com/'>http://www.tabthemes.com/</a>)</li>
            </ul>

            <h5>Identité visuelle</h5>
            <ul>
              <li><b>Réalisée par :</b> William BOFFY</li>
            </ul>

            <h5>Conditions d’accès et d’utilisation</h5>
            <ul>
              <li>Toute consultation et utilisation du site <a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> implique l’acceptation sans restriction des termes de la réglementation présente dans les mentions légales ci-dessous. Par conséquent, tout accès au site <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> est soumis à cette réglementation ainsi qu’aux lois en vigueur.</li>
            </ul>

            <h5>Contenu</h5>
            <ul>
              <li>Le site <a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> contient des informations relatives à Low Production.</li>
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
              <li>Le site <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> peut contenir des liens hypertextes menant à d’autres sites Internet totalement indépendants du site <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a>. Dès lors, tout accès à un autre site Internet lié au site <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> s’effectue sous la propre responsabilité, pleine et entière, de l’utilisateur.</li>
            </ul>

            <h5>Responsabilité limitée</h5>
            <ul>
              <li>Low Production décline spécifiquement toute responsabilité pour les éventuels préjudices directs, indirects, accidentels, consécutifs ou spéciaux liés à l’accès ou à l’utilisation du site <a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a> ou subis en conséquence de ceux-ci, y compris, mais sans s’y limiter, à toute perte ou dommage provoqués par des virus affectant l’équipement informatique de l’utilisateur ou résultant du crédit accordé à une information obtenue par le biais du site <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home");
        echo "\">www.low-production.org</a>.</li>
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
        // line 213
        $this->displayBlock('js', $context, $blocks);
        // line 231
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

    // line 10
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo "Low Production est une association de production audiovisuelle libre, collaborative et engagée dans la transition environnementale.";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 15
    public function block_og_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_type"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_type"));

        echo "website";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_og_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_img"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "og_img"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/og.JPG"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 27
        echo "\t    <!-- Bootstrap CSS -->
\t    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t    <!-- CSS Files For Plugin -->
\t    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/owlcarousel/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/owlcarousel/css/owl.theme.default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t    <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/inc/revolution/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t    <!-- Custom CSS -->
\t    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/css/style.css"), "html", null, true);
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

    // line 84
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

    // line 85
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

    // line 86
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

    // line 87
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

    // line 88
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

    // line 89
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

    // line 90
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

    // line 91
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

    // line 103
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

    // line 213
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 214
        echo "\t    <!-- jQuery -->
\t    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Bootstrap -->
\t    <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t    <!-- Custom Plugin -->
\t    <script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/js/custom.js"), "html", null, true);
        echo "\"></script>

\t\t\t<!-- Components Plugin -->
\t\t\t<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/smooth-scroll.js\"></script>
\t\t\t<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/jquery.appear.js\"></script>
\t\t\t<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/jquery.stellar.min.js\"></script>
\t\t\t<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/wow.min.js\"></script>
\t\t\t<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "inc/owlcarousel/js/owl.carousel.min.js\"></script>

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
        return array (  733 => 228,  729 => 227,  725 => 226,  721 => 225,  717 => 224,  711 => 221,  705 => 218,  699 => 215,  696 => 214,  686 => 213,  668 => 103,  649 => 91,  630 => 90,  611 => 89,  592 => 88,  573 => 87,  554 => 86,  535 => 85,  516 => 84,  497 => 40,  491 => 37,  487 => 36,  483 => 35,  479 => 34,  475 => 33,  471 => 32,  467 => 31,  461 => 28,  458 => 27,  448 => 26,  429 => 17,  410 => 15,  391 => 10,  372 => 8,  360 => 231,  358 => 213,  325 => 185,  313 => 180,  292 => 162,  282 => 157,  231 => 109,  224 => 104,  222 => 103,  205 => 91,  199 => 90,  193 => 89,  187 => 88,  181 => 87,  175 => 86,  169 => 85,  163 => 84,  152 => 76,  148 => 75,  120 => 49,  118 => 26,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  79 => 14,  72 => 10,  67 => 8,  58 => 1,);
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

    <meta name=\"description\" content=\"{% block description %}Low Production est une association de production audiovisuelle libre, collaborative et engagée dans la transition environnementale.{% endblock %}\">
    <meta name=\"author\" content=\"Low Production\">

    <!-- Balises OG -->
    <meta property=\"og:title\" content=\"{{block('title')}}\"/>
    <meta property=\"og:type\" content=\"{% block og_type %}website{% endblock %}\"/>
    <meta property=\"og:url\" content=\"{{app.request.uri}}\" />
    <meta property=\"og:image\" content=\"{% block og_img %}{{asset('web/img/og.JPG')}}{% endblock %}\"/>
    <meta property=\"og:site_name\" content=\"{{block('title')}}\"/>

    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('web/img/favicon/apple-touch-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('web/img/favicon/favicon-32x32.png') }}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('web/img/favicon/favicon-16x16.png') }}\">
    <link rel=\"manifest\" href=\"{{ asset('web/img/favicon/site.webmanifest') }}\">

\t\t{% block css %}
\t    <!-- Bootstrap CSS -->
\t    <link href=\"{{ asset('web/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />

\t    <!-- CSS Files For Plugin -->
\t    <link href=\"{{ asset('web/css/animate.css')}}\" rel=\"stylesheet\">
\t    <link href=\"{{ asset('web/css/font-awesome/font-awesome.min.css')}}\" rel=\"stylesheet\">
\t    <link href=\"{{ asset('web/inc/owlcarousel/css/owl.carousel.min.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('web/inc/owlcarousel/css/owl.theme.default.min.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('web/inc/revolution/css/settings.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('web/inc/revolution/css/layers.css')}}\" rel=\"stylesheet\" />
\t    <link href=\"{{ asset('web/inc/revolution/css/navigation.css')}}\" rel=\"stylesheet\" />

\t    <!-- Custom CSS -->
\t    <link href=\"{{ asset('web/css/style.css')}}\" rel=\"stylesheet\">

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
                                    <img class=\"logo\" src=\"{{ asset('web/img/logo/logo_light.svg') }}\" alt=\"logo\" data-rjs=\"2\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- {% block studies %}<li>{% endblock %}<a href=\"{{url(\"studies\")}}\">Études</a></li> -->
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
            <small class=\"copyright pull-left\"><a data-toggle=\"modal\" data-target=\"#mentions\">Mentions légales</a><br>Copyrights © {{ 'now' | date('Y') }} - Low Production.</small>
            <div class=\"social-icon pull-right\">
              <a target=\"_blank\" href=\"https://www.facebook.com/AssociationLowProduction\"><i class=\"fa fa-facebook\"></i></a>
              <a target=\"_blank\" href=\"https://www.linkedin.com/company/low-production/\"><i class=\"fa fa-linkedin\"></i></a>
              <a target=\"_blank\" href=\"https://www.instagram.com/lowproduction.asso/\"><i class=\"fa fa-instagram\"></i></a>
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
              <li><b>Dénomination : </b>IKOULA</li>
              <li><b>Adresse : </b>175/177 rue d'Aguesseau, 92100, Boulogne Billancourt, FRANCE</li>
            </ul>

            <h5>Design et développement</h5>
            <ul>
              <li><b>Réalisé par :</b> William BOFFY & Halima GUEYE (<a target=\"_blank\" href='https://www.halima-gueye.online/'>https://www.halima-gueye.online/</a>)</li>
              <li><b>Inspiration de départ :</b> TabThemes (<a target=\"_blank\" href='http://www.tabthemes.com/'>http://www.tabthemes.com/</a>)</li>
            </ul>

            <h5>Identité visuelle</h5>
            <ul>
              <li><b>Réalisée par :</b> William BOFFY</li>
            </ul>

            <h5>Conditions d’accès et d’utilisation</h5>
            <ul>
              <li>Toute consultation et utilisation du site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> implique l’acceptation sans restriction des termes de la réglementation présente dans les mentions légales ci-dessous. Par conséquent, tout accès au site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> est soumis à cette réglementation ainsi qu’aux lois en vigueur.</li>
            </ul>

            <h5>Contenu</h5>
            <ul>
              <li>Le site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> contient des informations relatives à Low Production.</li>
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
              <li>Le site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> peut contenir des liens hypertextes menant à d’autres sites Internet totalement indépendants du site <a href=\"{{url(\"home\")}}\">www.low-production.org</a>. Dès lors, tout accès à un autre site Internet lié au site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> s’effectue sous la propre responsabilité, pleine et entière, de l’utilisateur.</li>
            </ul>

            <h5>Responsabilité limitée</h5>
            <ul>
              <li>Low Production décline spécifiquement toute responsabilité pour les éventuels préjudices directs, indirects, accidentels, consécutifs ou spéciaux liés à l’accès ou à l’utilisation du site <a href=\"{{url(\"home\")}}\">www.low-production.org</a> ou subis en conséquence de ceux-ci, y compris, mais sans s’y limiter, à toute perte ou dommage provoqués par des virus affectant l’équipement informatique de l’utilisateur ou résultant du crédit accordé à une information obtenue par le biais du site <a href=\"{{url(\"home\")}}\">www.low-production.org</a>.</li>
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
\t    <script src=\"{{ asset('web/js/jquery.min.js')}}\"></script>

\t    <!-- Bootstrap -->
\t    <script src=\"{{ asset('web/bootstrap/js/bootstrap.min.js')}}\"></script>

\t    <!-- Custom Plugin -->
\t    <script src=\"{{ asset('web/js/custom.js')}}\"></script>

\t\t\t<!-- Components Plugin -->
\t\t\t<script src=\"{{ asset('web/')}}js/smooth-scroll.js\"></script>
\t\t\t<script src=\"{{ asset('web/')}}js/jquery.appear.js\"></script>
\t\t\t<script src=\"{{ asset('web/')}}js/jquery.stellar.min.js\"></script>
\t\t\t<script src=\"{{ asset('web/')}}js/wow.min.js\"></script>
\t\t\t<script src=\"{{ asset('web/')}}inc/owlcarousel/js/owl.carousel.min.js\"></script>

\t\t{% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\base.html.twig");
    }
}
