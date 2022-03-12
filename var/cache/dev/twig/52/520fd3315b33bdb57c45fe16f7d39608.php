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
        echo "<!-- Start Story -->
<section id=\"bd\" class=\"p-top-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>.
\t\t\t\t\t\t\t<center style=\"padding:20px;\"><img class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\" alt=\"illustration activité associative\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/img/story-illustration.png"), "html", null, true);
        echo "\"></img></center>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Story -->

";
        // line 25
        if (((array_key_exists("comics", $context) &&  !(null === (isset($context["comics"]) || array_key_exists("comics", $context) ? $context["comics"] : (function () { throw new RuntimeError('Variable "comics" does not exist.', 25, $this->source); })()))) && (twig_length_filter($this->env, (isset($context["comics"]) || array_key_exists("comics", $context) ? $context["comics"] : (function () { throw new RuntimeError('Variable "comics" does not exist.', 25, $this->source); })())) > 0))) {
            // line 26
            echo "\t\t<!-- Start BD -->
\t\t<section id=\"bd\" class=\"p-top-20 p-bottom-20\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Bande dessinée</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tAfin de vous raconter l'histoire de l'association, des bénévoles ont travaillé sur une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End BD -->

\t\t<!-- BDs -->
\t\t<section id=\"bds\" class=\"p-top-20 p-bottom-80\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">
\t\t\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comics"]) || array_key_exists("comics", $context) ? $context["comics"] : (function () { throw new RuntimeError('Variable "comics" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comic"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pf-item wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "url", [], "any", false, false, false, 45), "html", null, true);
                echo "\" target=\"_blank\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["comic"], "picture", [], "any", false, false, false, 47), "imageFile")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comic"], "picture", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 53
                if (((twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", true, true, false, 53) &&  !(null === twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 53))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 53)) > 0))) {
                    echo "<p><b>Par :</b> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 53));
                    foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["w"], "name", [], "any", false, false, false, 53), "html", null, true);
                        if (($context["w"] != twig_last($this->env, twig_get_attribute($this->env, $this->source, $context["comic"], "writers", [], "any", false, false, false, 53)))) {
                            echo ", ";
                        }
                        echo " ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</p>";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- BDs -->
";
        }
        // line 67
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 71
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "

\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
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
        return array (  245 => 73,  239 => 71,  229 => 70,  218 => 67,  211 => 62,  198 => 54,  180 => 53,  176 => 52,  166 => 47,  161 => 45,  158 => 44,  154 => 43,  135 => 26,  133 => 25,  124 => 19,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | Histoire
{% endblock %}

{% block story %}<li class=\"active\">{% endblock %}

{% block body %}
<!-- Start Story -->
<section id=\"bd\" class=\"p-top-50\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Notre histoire</h2>
\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\tLow Production a été fondée en 2022 à la suite un premier projet <b>documentaire</b> (<em>Berr(k)e</em>, 2021) dont l'exercice soulevait une question : <b>comment conter l'environnement sans l'impacter ?</b> Afin d'y répondre l'association cherche, depuis sa création, à <b>expérimenter</b> et documenter de manière <b>transparente</b> de <b>nouvelles manières</b> de produire et réaliser des documentaires. À partir de ses travaux, elle cherche à <b>transformer</b> et <b>sensibiliser</b> le milieu audiovisuel aux techniques de <em>Low Production</em>.
\t\t\t\t\t\t\t<br><br>Avant d'être une association, Low Production est un projet personnel et une <b>revanche</b> sur le <b>rêve abandonné</b> de son fondateur. Finalement, il s'agit de <b>rencontres</b>, de réflexions, de déceptions, de joies et d'<b>idées</b> qui ont abouti à la <b>création</b> d'un projet <b>collectif</b>, <b>libre</b> et qui tend à être respectueux de l'<b>environnement</b>.
\t\t\t\t\t\t\t<center style=\"padding:20px;\"><img class=\"wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\" alt=\"illustration activité associative\" src=\"{{asset('web/img/story-illustration.png')}}\"></img></center>
\t\t\t\t</div>
\t\t</div>
</section>
<!-- End Story -->

{% if comics is defined and comics is not null and comics|length > 0 %}
\t\t<!-- Start BD -->
\t\t<section id=\"bd\" class=\"p-top-20 p-bottom-20\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-50\">
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">Bande dessinée</h2>
\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\tAfin de vous raconter l'histoire de l'association, des bénévoles ont travaillé sur une bande dessinée. Nous vous invitons à <b>plonger</b> dans les <b>fondements</b> et les <b>origines</b> de l'association.</p>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- End BD -->

\t\t<!-- BDs -->
\t\t<section id=\"bds\" class=\"p-top-20 p-bottom-80\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"portfolio portfolio-isotope col-3\">
\t\t\t\t\t\t\t\t{% for comic in comics %}
\t\t\t\t\t\t\t\t\t\t<div class=\"pf-item wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{comic.url}}\" target=\"_blank\" class=\"pf-style\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(vich_uploader_asset(comic.picture, 'imageFile'))}}\" alt=\"{{comic.picture.name}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-caption\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overlay-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pf-info white-color\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"pf-title\">{{comic.name}}</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if comic.writers is defined and comic.writers is not null and comic.writers|length > 0 %}<p><b>Par :</b> {% for w in comic.writers %} {{w.name}}{% if w != comic.writers|last %}, {% endif %} {% endfor %}</p>{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</section>
\t\t<!-- BDs -->
{% endif %}

{% endblock %}

{% block js %}
\t{{parent()}}

\t<script src=\"{{ asset('web/')}}js/lazyload.min.js\"></script>

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
