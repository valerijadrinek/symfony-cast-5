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

/* question/homepage.html.twig */
class __TwigTemplate_8daf85e1c91044ddfd3c66f76499efd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "question/homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "question/homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"jumbotron-img jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <p class=\"lead\">And even answers for those questions you didn't think to ask!</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tisha.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"#\"><h2>Reversing a Spell</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"#\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>

        <div class=\"col-12 mt-3\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/magic-photo.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\">
                        <div class=\"d-block mt-3 vote-arrows\">
                            <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <a class=\"q-title\" href=\"#\"><h2>Pausing a Spell</h2></a>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">I mastered the floating card, but now how do I get it back to the ground?</p>
                            <p class=\"pt-4\"><strong>--Jerry</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"#\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> 15 answers
                </p>
            </a>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "question/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"jumbotron-img jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h1 class=\"display-4\">Your Questions Answered</h1>
        <p class=\"lead\">And even answers for those questions you didn't think to ask!</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row mb-3\">
        <div class=\"col\">
            <button class=\"btn btn-question\">Ask a Question</button>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <div style=\"box-shadow: 2px 3px 9px 4px rgba(0,0,0,0.04);\">
                <div class=\"q-container p-4\">
                    <div class=\"row\">
                        <div class=\"col-2 text-center\">
                            <img src=\"{{ asset('images/tisha.png') }}\" width=\"100\" height=\"100\">
                            <div class=\"d-block mt-3 vote-arrows\">
                                <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                                <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                            </div>
                        </div>
                        <div class=\"col\">
                            <a class=\"q-title\" href=\"#\"><h2>Reversing a Spell</h2></a>
                            <div class=\"q-display p-3\">
                                <i class=\"fa fa-quote-left mr-3\"></i>
                                <p class=\"d-inline\">I've been turned into a cat, any thoughts on how to turn back? While I'm adorable, I don't really care for cat food.</p>
                                <p class=\"pt-4\"><strong>--Tisha</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"answer-link\" href=\"#\" style=\"color: #fff;\">
                    <p class=\"q-display-response text-center p-3\">
                        <i class=\"fa fa-magic magic-wand\"></i> 6 answers
                    </p>
                </a>
            </div>
        </div>

        <div class=\"col-12 mt-3\">
            <div class=\"q-container p-4\">
                <div class=\"row\">
                    <div class=\"col-2 text-center\">
                        <img src=\"{{ asset('images/magic-photo.png') }}\" width=\"100\" height=\"100\">
                        <div class=\"d-block mt-3 vote-arrows\">
                            <a class=\"vote-up\" href=\"#\"><i class=\"far fa-arrow-alt-circle-up\"></i></a>
                            <a class=\"vote-down\" href=\"#\"><i class=\"far fa-arrow-alt-circle-down\"></i></a>
                        </div>
                    </div>
                    <div class=\"col\">
                        <a class=\"q-title\" href=\"#\"><h2>Pausing a Spell</h2></a>
                        <div class=\"q-display p-3\">
                            <i class=\"fa fa-quote-left mr-3\"></i>
                            <p class=\"d-inline\">I mastered the floating card, but now how do I get it back to the ground?</p>
                            <p class=\"pt-4\"><strong>--Jerry</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class=\"answer-link\" href=\"#\" style=\"color: #fff;\">
                <p class=\"q-display-response text-center p-3\">
                    <i class=\"fa fa-magic magic-wand\"></i> 15 answers
                </p>
            </a>
        </div>
    </div>
</div>
{% endblock %}", "question/homepage.html.twig", "F:\\zadaci\\cauldron_overflow\\templates\\question\\homepage.html.twig");
    }
}
