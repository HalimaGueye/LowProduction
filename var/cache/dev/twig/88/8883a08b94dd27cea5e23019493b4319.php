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

/* gentle_chef/team.html.twig */
class __TwigTemplate_b57a651ba0342b12e475188cf39e190a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'team' => [$this, 'block_team'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gentle_chef/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gentle_chef/team.html.twig", 1);
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
        echo " | L'équipe
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_team($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "team"));

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
        echo "
<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>L'équipe</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tPour certains de nos <b>bénévoles</b>, l'association a véritablement joué un rôle de <b>tremplin</b>. Pour d'autres, il s'agissait simplement d'une parenthèse. Quelque soit la place de l'audiovisuel dans leur vie actuelle, leurs divers talents <b>ont participé à la construction</b> et au <b>rayonnement</b> de Low Production.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Retrouvez ci-dessous tous les bénévoles qui sont passés par l'association et n'hésitez pas <b>à suivre</b> leurs travaux !
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".mt";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"iso-button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a data-filter=\".p\" class=\"iso-button\">Projets documentaires</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t\t<a data-filter=\".p";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" class=\"iso-button\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-4 gutter\">
\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 49
            echo "\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["member"], "projects", [], "any", true, true, false, 50) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "projects", [], "any", false, false, false, 50)) > 0))) {
                echo "p ";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["member"], "memberType", [], "any", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, $context["member"], "memberType", [], "any", false, false, false, 50)))) {
                echo "mt";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "memberType", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
                echo " ";
            }
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["member"], "projects", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "project", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
                echo " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "portfolios", [], "any", false, false, false, 53)) != 0)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["member"], "portfolios", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["portfolio"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["portfolio"], "url", [], "any", false, false, false, 57), "html", null, true);
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["portfolio"], "portfolioType", [], "any", false, false, false, 57), "icone", [], "any", false, false, false, 57), "html", null, true);
                    echo "\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['portfolio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, $context["member"], "picture", [], "any", false, false, false, 62), "imageFile")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "picture", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["member"], "description", [], "any", false, false, false, 69);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "\t\t\t\t</div>

\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez en faire partie ?</h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("support");
        echo "\" class=\"btn btn-main btn-theme wow fadeInUp\" data-wow-delay=\"0.5s\">En savoir plus</a>
\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t</div>  <!-- /.row -->
\t\t</div> <!-- /.container -->
</section>
<!-- End Call to Action -->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 102
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 103
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/"), "html", null, true);
        echo "js/isotope.pkgd.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gentle_chef/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 105,  320 => 104,  315 => 103,  305 => 102,  285 => 91,  267 => 75,  255 => 69,  249 => 66,  239 => 62,  234 => 59,  223 => 57,  219 => 56,  215 => 54,  213 => 53,  188 => 50,  185 => 49,  181 => 48,  172 => 41,  161 => 39,  157 => 38,  151 => 34,  140 => 32,  136 => 31,  113 => 10,  103 => 9,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}} | L'équipe
{% endblock %}

{% block team %}<li class=\"active\">{% endblock %}

{% block body %}

<!-- Start Portfolio -->
<section id=\"portfolio\" class=\"p-top-40 p-bottom-80\">
\t\t<div class=\"container\">

\t\t\t\t<div class=\"row p-bottom-40\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t\t\t\t<div class=\"section-title text-center m-bottom-40\">
\t\t\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"><strong>L'équipe</strong></h2>
\t\t\t\t\t\t\t\t\t\t<div class=\"divider-center-small wow zoomIn\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"section-subtitle wow fadeInUp\" data-wow-duration=\"1s\" data-wow-delay=\"0.6s\">
\t\t\t\t\t\t\t\t\t\t\tPour certains de nos <b>bénévoles</b>, l'association a véritablement joué un rôle de <b>tremplin</b>. Pour d'autres, il s'agissait simplement d'une parenthèse. Quelque soit la place de l'audiovisuel dans leur vie actuelle, leurs divers talents <b>ont participé à la construction</b> et au <b>rayonnement</b> de Low Production.
\t\t\t\t\t\t\t\t\t\t\t<br><br>Retrouvez ci-dessous tous les bénévoles qui sont passés par l'association et n'hésitez pas <b>à suivre</b> leurs travaux !
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Portfolio-filter -->
\t\t\t\t<ul class=\"pf-filter pf-filter-gray text-center list-inline\">
\t\t\t\t\t\t<li><a href=\"#\" data-filter=\"*\" class=\"iso-active iso-button\">Tous</a></li>
\t\t\t\t\t\t{% for c in categories %}
\t\t\t\t\t\t\t\t<li><a href=\"#\" data-filter=\".mt{{c.id}}\" class=\"iso-button\">{{c.name}}</a></li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t<a data-filter=\".p\" class=\"iso-button\">Projets documentaires</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t{% for p in projects %}
\t\t\t\t\t\t\t\t\t\t\t<a data-filter=\".p{{p.id}}\" class=\"iso-button\">{{p.name}}</a>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>

\t\t\t\t<!-- Portfolio -->
\t\t\t\t<div class=\"portfolio portfolio-isotope col-4 gutter\">
\t\t\t\t\t\t{% for member in members %}
\t\t\t\t\t\t<!-- === Item === -->
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 p-bottom-30 pf-item {% if member.projects is defined and member.projects|length > 0 %}p {% endif %} {% if member.memberType is defined and member.memberType is not null %}mt{{member.memberType.id}} {% endif %} {% for p in member.projects %}p{{p.project.id}} {% endfor %}\">
\t\t\t\t\t\t\t\t<div class=\"team-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if member.portfolios|length != 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-icons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for portfolio in member.portfolios %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{portfolio.url}}\"><i class=\"{{portfolio.portfolioType.icone}}\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(vich_uploader_asset(member.picture, 'imageFile'))}}\" alt=\"{{member.picture.name}}\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-info\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{member.name}}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"team-item-position\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{member.description|raw}}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t</div>
</section>
<!-- End Portfolio -->

<!-- Start Call to Action -->
<section class=\"light-bg p-top-60 p-bottom-60\">
\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 c2a-content text-center\">
\t\t\t\t\t\t\t\t<!-- Text -->
\t\t\t\t\t\t\t\t<h2 class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">Vous aimeriez en faire partie ?</h2>
\t\t\t\t\t\t\t\t<p class=\"m-bottom-30 wow fadeInDown\" data-wow-delay=\"0.4s\">Il y a plusieurs moyens de s'investir dans l'association.</p>
\t\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t\t<a href=\"{{url(\"support\")}}\" class=\"btn btn-main btn-theme wow fadeInUp\" data-wow-delay=\"0.5s\">En savoir plus</a>
\t\t\t\t\t\t</div> <!-- /.col -->

\t\t\t\t</div>  <!-- /.row -->
\t\t</div> <!-- /.container -->
</section>
<!-- End Call to Action -->


{% endblock %}

{% block js %}
\t{{parent()}}
\t<script src=\"{{asset('web/')}}js/imagesloaded.pkgd.min.js\"></script>
\t<script src=\"{{asset('web/')}}js/isotope.pkgd.min.js\"></script>
{% endblock %}
", "gentle_chef/team.html.twig", "C:\\wamp64\\www\\lp\\LowProduction\\templates\\gentle_chef\\team.html.twig");
    }
}
