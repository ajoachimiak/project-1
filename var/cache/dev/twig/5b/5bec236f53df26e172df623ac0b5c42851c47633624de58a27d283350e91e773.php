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

/* report/index.html.twig */
class __TwigTemplate_71ae848189f77f06ac85b3122a96e83a30ab62c7008406a6a2220d4914341c00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Podgląd";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <table class=\"table float-left w-25\">
        <tbody>
            <tr>
                <td>
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 11, $this->source); })()), "place", [], "any", false, false, false, 11), 'widget');
        echo "
                        <div class=\"input-group input-daterange\">
                            <div>
                                Od: ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 14, $this->source); })()), "creationDateStart", [], "any", false, false, false, 14), 'widget');
        echo "
                            </div>
                            <div>
                                Do: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 17, $this->source); })()), "creationDateEnd", [], "any", false, false, false, 17), 'widget');
        echo "
                            </div>
                        </div>
                    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reportForm"]) || array_key_exists("reportForm", $context) ? $context["reportForm"] : (function () { throw new RuntimeError('Variable "reportForm" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
                </td>
            </tr>
        </tbody>
    </table>
    <table class=\"table float-left w-75\">
        <thead>
            <tr>
                <th scope=\"col\">Nazwa</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Godzina</th>
                <th scope=\"col\">Użytkownik</th>
                <th scope=\"col\">Lokal</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entityExportMade"]) || array_key_exists("entityExportMade", $context) ? $context["entityExportMade"] : (function () { throw new RuntimeError('Variable "entityExportMade" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exportMade"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exportMade"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exportMade"], "creationDate", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exportMade"], "creationDate", [], "any", false, false, false, 40), "H:i"), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exportMade"], "userName", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exportMade"], "place", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exportMade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "report/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  140 => 37,  136 => 36,  117 => 20,  111 => 17,  105 => 14,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ parent() }} - Podgląd{% endblock %}

{% block body %}
    <table class=\"table float-left w-25\">
        <tbody>
            <tr>
                <td>
                    {{ form_start(reportForm) }}
                        {{ form_widget(reportForm.place) }}
                        <div class=\"input-group input-daterange\">
                            <div>
                                Od: {{ form_widget(reportForm.creationDateStart) }}
                            </div>
                            <div>
                                Do: {{ form_widget(reportForm.creationDateEnd) }}
                            </div>
                        </div>
                    {{ form_end(reportForm) }}
                </td>
            </tr>
        </tbody>
    </table>
    <table class=\"table float-left w-75\">
        <thead>
            <tr>
                <th scope=\"col\">Nazwa</th>
                <th scope=\"col\">Data</th>
                <th scope=\"col\">Godzina</th>
                <th scope=\"col\">Użytkownik</th>
                <th scope=\"col\">Lokal</th>
            </tr>
        </thead>
        <tbody>
            {% for exportMade in entityExportMade %}
                <tr>
                    <td>{{ exportMade.name }}</td>
                    <td>{{ exportMade.creationDate|date('Y-m-d') }}</td>
                    <td>{{ exportMade.creationDate|date('H:i') }}</td>
                    <td>{{ exportMade.userName }}</td>
                    <td>{{ exportMade.place }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "report/index.html.twig", "/var/www/html/project-1/templates/report/index.html.twig");
    }
}
