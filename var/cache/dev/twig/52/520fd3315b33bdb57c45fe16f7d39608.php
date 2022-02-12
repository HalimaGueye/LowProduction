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

/* gentle_chef/story.html.twig */
class __TwigTemplate_c4b6af2b7188e60ecd0408f7a1f2c71b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'story' => [$this, 'block_story'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/story.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/story.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/story.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Histoire
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_story($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "story"));

        echo "<li class=\"active\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<!-- Start BD -->
<section id=\"bd\" class=\"p-top-50 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur William Boffy. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>. Afin de vous raconter cette histoire, le talentueux <a target=\"_blank\" href='#'>Gaëtan Richard</a> en a réalisé une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t\t\t<p class=\"wow fadeInDown m-top-20\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" style=\"background-color:#5DA4B3; color:white;\"> /!\\ PAGE EN COURS DE CONSTRUCTION - RÉALISÉE À PARTIR DU STORY BOARD /!\\</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"bd\" class=\"row row-flex\">
\t\t\t\t\t\t<div id=\"cover-touch-protection\"></div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/1.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Naître dans les années 90,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/2.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">c’est naître dans un monde...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">...où tout est possible.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/3.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">1996 en est un parfait exemple.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/4.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Internet fait ses grands débuts,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/5.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">c’est la première fois qu’une française</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\"> s’envole dans l’espace,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/6.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">une marque de soda s’offre un concorde et puis...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je suis né !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/7.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Bon, pour vous, ce n’est pas grand chose…<br>Mais imaginez pour moi !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je suis né à Soissons.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/8.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\"> Là-bas, on trouve des haricots</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">et un vase coupé en deux.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/9.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Grandir en Picardie, ça fait pas rêver.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Pourtant,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/10.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">j’en garde un magnifique souvenir.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ainsi qu’un attachement profond,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/11.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">à la vallée de l’Automne.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/12.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je connais ses forêts par cœur.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J’y vagabonde seul depuis tout gamin...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/13.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">…et parfois, entre copains.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'ai eu la plus belle des enfances.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/14.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Malgré les apparences,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">on avait la télévision en Picardie.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/15.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'en étais émerveillé.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/16.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'avais les forêts du bout du monde</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">dans mon salon.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/17.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Très vite,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/18.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">je rêvais de faire moi-même les documentaires</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">que je regardais.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/19.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Pas tant pour filmer mais plutôt pour avoir un métier<p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qui consiste à s'émerveiller.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/20.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Une sorte de prétexte social...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour vivre heureux quoi !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/21.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C'était décidé, je serai reporter.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/22.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Fier de mon idée, j’achetais un carnet dauphin.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/23.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J’avais tout en dauphin à la maison.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/24.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'y ai écrit quelque chose que j'aime bien relire,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/25.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">les jours où l'on oublie un peu trop...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qu'on a été enfant.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/26.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Un jour, mon père a acheté une caméra.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/27.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C’était un super modèle (à cassette).</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/28.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je passais des après-midi dans ma chambre,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à donner vie à mes legos.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/29.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Petit à petit, je découvrais un domaine</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qui ne me quitterait pas !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/30.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Enfin… c’est ce que je croyais parce que,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">au fil des années, l’école s’imposait.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/31.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J’étais un bon élève mais je passais mon temps</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à regarder par-dessus la fenêtre.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/32.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je rêvais d’autres choses que</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">de passer mon enfance assis.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/33.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Et puis, à force d’habitude,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">j’ai oublié mes rêves...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/34.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">…pour ceux de la société.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>



\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/35.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">La routine s'installait...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/36.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand un jour, en faisant du tri,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je suis retombé sur mon petit carnet dauphin.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/37.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je devais rattraper mes rêves. Direction ?</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Euh... les boîtes de nuit !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/38.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Engagé comme vidéaste, je filmais des DJ supers connus.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'avais un peu honte de ne pas les connaître et d'écouter davantage du Michel Delpech.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/39.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C'était un super job et tout l'argent que je gagnais,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je l'investissais dans du très bon matériel audiovisuel.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/40.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je continuais d'entretenir cette idée de pouvoir,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">un jour, réaliser des documentaires.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/41.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À moi les dunes de Namibie, à moi les peubles d'Amazonie, à moi les glaciers du Groenland, à moi...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Oh non. Non... ça, je ne veux pas.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/42.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À moi... la conscience écologique.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Du jour au lendemain, mon rêve devenait réalité.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/43.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">L'idée de prendre l'avion tous les quatre matins me semble alors folle.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je m'autocensure dans une société qui ne me le demande pourtant pas.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/44.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Que j'en veux à notre époque. Nous faire grandir avec l'idée de tout avoir, tout rêver, tout envisager pour finalement...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">tout abandonner.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/45.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'avais l'impression qu'on me volait mon rêve d'enfant.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Alors j'ai repris une ligne plus conventionnelle avec deux stages dans l'environnement.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/46.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'étais à la fois heureux d'oeuvrer pour mes convictions</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">et triste de le faire derrière un écran.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/47.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand la Covid-19 a frappé à notre porte,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">j'étais extenué par le virtuel.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/48.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Alors j'ai pris une année sabbatique pour retrouver un copain.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Julien est un peu fou. Il a acheté un gros bateau à 24 ans.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/49.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">On s'était rencontrés au Maroc, autour d'un feu de camps...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/50.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai rejoint son bateau comme média.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">L'idée était de m'évader et de progresser en vidéo.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/51.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je ne pensais pas découvrir une passion pour la voile.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/52.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">On allait de plage en plage pour ramasser des déchets.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'adorais ça... La vie en communauté,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/53.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">les déplacements au gré du vent,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">filmer...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/54.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Dans cet élan de joie, je décide de réaliser mon premier documentaire !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je n'étais pas encore prêt mais,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/55.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">à rester dans ma chambre, je ne l'aurais jamais été.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">De mon amateurisme, je voulais faire une force : un documentaire sincère.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/56.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai alors filmé les copains et découvert l'exercice</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">ainsi que la collaboration.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/57.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Alors que je filmais, mon travail suscitait de la curiosité.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Très vite, un bénévole de l'association proposa de m'aider.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/58.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Puis un autre. Et encore un autre...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Les bénévoles commençaient à se réunir pour découvrir la vidéo et contribuer au projet.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/59.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quant à moi, je m'éveillais à cette nouvelle manière de travailler</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à plusieurs et dans le partage.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/60.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Après des semaines de montage,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/61.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je suis allé présenter mon documentaire en ciné-débat !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'étais si heureux...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/62.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Les gens échangeaient librement. Je découvrais mon projet dans d'autres bouches et d'autres yeux.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ils se l'appropriaient et je devenais moi-même spectateur de mon travail.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/63.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Enfin... plutôt de ce qu'il devenait en prenant vie chez eux.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Il germait comme une graine.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/64.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je retrouvais ce que le petit William voulait faire.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je partageais mes idées et mes sentiments.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/65.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Et puis, le bénévole que j'étais percuta un second mur à pleine vitesse : le manque d'argent.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/66.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je suis alors retourné travailler</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">dans un précédent stage, sur l'île de La Réunion.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/67.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai dû reprendre l'avion.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ça m'embêtait après autant d'efforts.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/68.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand le premier film dont on se souvient au cinéma est La Marche de l'Empereur,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">travailler aux Terres australes et antarctiques françaises est un immense privilège.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/69.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Pourtant, jour après jour, je quittais à nouveau l'écran des yeux...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour retrouver une fenêtre.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "img/bd/70.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À La Réunion, le soleil tape fort. Les fenêtres éblouissent de lumière</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour former des toiles blanches.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br><p class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" style=\"background-color: #5DA4B3;color:white;text-align:center;\"> /!\\ PAGE EN COURS DE CONSTRUCTION - À SUIVRE... /!\\</p>
\t\t</div>
</section>
<!-- End BD -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 435
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 436
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/web/"), "html", null, true);
        echo "js/lazyload.min.js\"></script>

\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(function() {
\t\t\t \$(\"img.lazy\").lazyload({
\t\t\t\t\t effect : \"fadeIn\"
\t\t\t });

\t\t});
\t</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/story.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 438,  766 => 436,  756 => 435,  735 => 423,  726 => 417,  717 => 411,  708 => 405,  699 => 399,  691 => 394,  682 => 388,  673 => 382,  664 => 376,  655 => 370,  647 => 365,  638 => 359,  629 => 353,  620 => 347,  611 => 341,  602 => 335,  593 => 329,  584 => 323,  575 => 317,  567 => 312,  558 => 306,  550 => 301,  541 => 295,  532 => 289,  523 => 283,  514 => 277,  505 => 271,  496 => 265,  487 => 259,  478 => 253,  469 => 247,  460 => 241,  451 => 235,  442 => 229,  433 => 223,  425 => 218,  414 => 210,  405 => 204,  396 => 198,  387 => 192,  378 => 186,  369 => 180,  360 => 174,  352 => 169,  344 => 164,  335 => 158,  327 => 153,  319 => 148,  311 => 143,  303 => 138,  294 => 132,  285 => 126,  276 => 120,  268 => 115,  259 => 109,  251 => 104,  242 => 98,  233 => 92,  224 => 86,  216 => 81,  207 => 75,  198 => 69,  189 => 63,  180 => 57,  171 => 51,  162 => 45,  154 => 40,  146 => 35,  137 => 29,  129 => 24,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Histoire
{% endblock %}

{% block story %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Start BD -->
<section id=\"bd\" class=\"p-top-50 p-bottom-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur William Boffy. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>. Afin de vous raconter cette histoire, le talentueux <a target=\"_blank\" href='#'>Gaëtan Richard</a> en a réalisé une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t\t\t<p class=\"wow fadeInDown m-top-20\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" style=\"background-color:#5DA4B3; color:white;\"> /!\\ PAGE EN COURS DE CONSTRUCTION - RÉALISÉE À PARTIR DU STORY BOARD /!\\</p>
\t\t\t\t</div>
\t\t\t\t<div id=\"bd\" class=\"row row-flex\">
\t\t\t\t\t\t<div id=\"cover-touch-protection\"></div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/1.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Naître dans les années 90,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/2.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">c’est naître dans un monde...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">...où tout est possible.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/3.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">1996 en est un parfait exemple.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/4.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Internet fait ses grands débuts,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/5.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">c’est la première fois qu’une française</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\"> s’envole dans l’espace,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/6.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">une marque de soda s’offre un concorde et puis...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je suis né !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/7.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Bon, pour vous, ce n’est pas grand chose…<br>Mais imaginez pour moi !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je suis né à Soissons.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/8.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\"> Là-bas, on trouve des haricots</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">et un vase coupé en deux.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/9.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Grandir en Picardie, ça fait pas rêver.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Pourtant,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/10.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">j’en garde un magnifique souvenir.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ainsi qu’un attachement profond,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/11.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">à la vallée de l’Automne.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/12.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je connais ses forêts par cœur.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J’y vagabonde seul depuis tout gamin...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/13.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">…et parfois, entre copains.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'ai eu la plus belle des enfances.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/14.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Malgré les apparences,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">on avait la télévision en Picardie.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/15.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'en étais émerveillé.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/16.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'avais les forêts du bout du monde</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">dans mon salon.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/17.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Très vite,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/18.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">je rêvais de faire moi-même les documentaires</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">que je regardais.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/19.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Pas tant pour filmer mais plutôt pour avoir un métier<p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qui consiste à s'émerveiller.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/20.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Une sorte de prétexte social...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour vivre heureux quoi !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/21.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C'était décidé, je serai reporter.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/22.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Fier de mon idée, j’achetais un carnet dauphin.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/23.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J’avais tout en dauphin à la maison.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/24.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'y ai écrit quelque chose que j'aime bien relire,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/25.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">les jours où l'on oublie un peu trop...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qu'on a été enfant.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/26.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Un jour, mon père a acheté une caméra.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/27.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C’était un super modèle (à cassette).</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/28.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je passais des après-midi dans ma chambre,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à donner vie à mes legos.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/29.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Petit à petit, je découvrais un domaine</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">qui ne me quitterait pas !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/30.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Enfin… c’est ce que je croyais parce que,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">au fil des années, l’école s’imposait.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/31.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J’étais un bon élève mais je passais mon temps</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à regarder par-dessus la fenêtre.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/32.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je rêvais d’autres choses que</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">de passer mon enfance assis.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/33.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Et puis, à force d’habitude,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">j’ai oublié mes rêves...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/34.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">…pour ceux de la société.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>



\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/35.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">La routine s'installait...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/36.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand un jour, en faisant du tri,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je suis retombé sur mon petit carnet dauphin.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/37.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je devais rattraper mes rêves. Direction ?</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Euh... les boîtes de nuit !</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/38.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Engagé comme vidéaste, je filmais des DJ supers connus.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'avais un peu honte de ne pas les connaître et d'écouter davantage du Michel Delpech.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/39.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">C'était un super job et tout l'argent que je gagnais,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">je l'investissais dans du très bon matériel audiovisuel.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/40.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je continuais d'entretenir cette idée de pouvoir,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">un jour, réaliser des documentaires.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-8 col-md-8 col-sm-8 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/41.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À moi les dunes de Namibie, à moi les peubles d'Amazonie, à moi les glaciers du Groenland, à moi...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Oh non. Non... ça, je ne veux pas.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/42.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À moi... la conscience écologique.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Du jour au lendemain, mon rêve devenait réalité.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/43.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">L'idée de prendre l'avion tous les quatre matins me semble alors folle.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je m'autocensure dans une société qui ne me le demande pourtant pas.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/44.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Que j'en veux à notre époque. Nous faire grandir avec l'idée de tout avoir, tout rêver, tout envisager pour finalement...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">tout abandonner.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/45.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'avais l'impression qu'on me volait mon rêve d'enfant.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Alors j'ai repris une ligne plus conventionnelle avec deux stages dans l'environnement.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/46.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'étais à la fois heureux d'oeuvrer pour mes convictions</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">et triste de le faire derrière un écran.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/47.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand la Covid-19 a frappé à notre porte,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">j'étais extenué par le virtuel.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/48.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Alors j'ai pris une année sabbatique pour retrouver un copain.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Julien est un peu fou. Il a acheté un gros bateau à 24 ans.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/49.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">On s'était rencontrés au Maroc, autour d'un feu de camps...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/50.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai rejoint son bateau comme média.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">L'idée était de m'évader et de progresser en vidéo.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/51.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je ne pensais pas découvrir une passion pour la voile.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/52.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">On allait de plage en plage pour ramasser des déchets.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'adorais ça... La vie en communauté,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/53.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">les déplacements au gré du vent,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">filmer...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/54.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Dans cet élan de joie, je décide de réaliser mon premier documentaire !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je n'étais pas encore prêt mais,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/55.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">à rester dans ma chambre, je ne l'aurais jamais été.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">De mon amateurisme, je voulais faire une force : un documentaire sincère.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/56.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai alors filmé les copains et découvert l'exercice</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">ainsi que la collaboration.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/57.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Alors que je filmais, mon travail suscitait de la curiosité.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Très vite, un bénévole de l'association proposa de m'aider.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/58.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Puis un autre. Et encore un autre...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Les bénévoles commençaient à se réunir pour découvrir la vidéo et contribuer au projet.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/59.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quant à moi, je m'éveillais à cette nouvelle manière de travailler</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">à plusieurs et dans le partage.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/60.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Après des semaines de montage,</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-3 col-md-3 col-sm-3 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/61.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je suis allé présenter mon documentaire en ciné-débat !</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">J'étais si heureux...</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/62.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Les gens échangeaient librement. Je découvrais mon projet dans d'autres bouches et d'autres yeux.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ils se l'appropriaient et je devenais moi-même spectateur de mon travail.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-5 col-md-5 col-sm-5 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/63.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Enfin... plutôt de ce qu'il devenait en prenant vie chez eux.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Il germait comme une graine.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/64.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je retrouvais ce que le petit William voulait faire.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Je partageais mes idées et mes sentiments.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/65.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Et puis, le bénévole que j'étais percuta un second mur à pleine vitesse : le manque d'argent.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/66.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Je suis alors retourné travailler</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">dans un précédent stage, sur l'île de La Réunion.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/67.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">J'ai dû reprendre l'avion.</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">Ça m'embêtait après autant d'efforts.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/68.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Quand le premier film dont on se souvient au cinéma est La Marche de l'Empereur,</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">travailler aux Terres australes et antarctiques françaises est un immense privilège.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/69.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">Pourtant, jour après jour, je quittais à nouveau l'écran des yeux...</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour retrouver une fenêtre.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bd-case col-lg-4 col-md-4 col-sm-4 col-xs-12 col-equal\">
\t\t\t\t\t\t\t<img class=\"lazy\" data-original=\"{{asset('bundles/web/')}}img/bd/70.png\" alt=\"\">
\t\t\t\t\t\t\t\t<p class=\"bd-text top-left\">À La Réunion, le soleil tape fort. Les fenêtres éblouissent de lumière</p>
\t\t\t\t\t\t\t\t<p class=\"bd-text bottom-right\">pour former des toiles blanches.</p>
\t\t\t\t\t\t\t</img>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br><p class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"1s\" style=\"background-color: #5DA4B3;color:white;text-align:center;\"> /!\\ PAGE EN COURS DE CONSTRUCTION - À SUIVRE... /!\\</p>
\t\t</div>
</section>
<!-- End BD -->
{% endblock %}

{% block js %}
\t{{parent()}}

\t<script src=\"{{ asset('bundles/web/')}}js/lazyload.min.js\"></script>

\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\$(function() {
\t\t\t \$(\"img.lazy\").lazyload({
\t\t\t\t\t effect : \"fadeIn\"
\t\t\t });

\t\t});
\t</script>

{% endblock %}
", "gentle_chef/story.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\story.html.twig");
    }
}
