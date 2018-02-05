<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4b0d8ce8d9ce092d6e9e8b3386693d653cf02c890884173412694653b2e536fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e913463f6e1d38ce0c303c0e2788103a4e47fe019b19f3922b38273eba918b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e913463f6e1d38ce0c303c0e2788103a4e47fe019b19f3922b38273eba918b7->enter($__internal_5e913463f6e1d38ce0c303c0e2788103a4e47fe019b19f3922b38273eba918b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_00000df72ffe82abf7f9dcd41fcc984bbd045fb58849206c6cc0c9bbb1c8e29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00000df72ffe82abf7f9dcd41fcc984bbd045fb58849206c6cc0c9bbb1c8e29b->enter($__internal_00000df72ffe82abf7f9dcd41fcc984bbd045fb58849206c6cc0c9bbb1c8e29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e913463f6e1d38ce0c303c0e2788103a4e47fe019b19f3922b38273eba918b7->leave($__internal_5e913463f6e1d38ce0c303c0e2788103a4e47fe019b19f3922b38273eba918b7_prof);

        
        $__internal_00000df72ffe82abf7f9dcd41fcc984bbd045fb58849206c6cc0c9bbb1c8e29b->leave($__internal_00000df72ffe82abf7f9dcd41fcc984bbd045fb58849206c6cc0c9bbb1c8e29b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_686c2d836ed3896175c81d737954a5c195b5a5dcbaac4cdc502b0258a1b44b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_686c2d836ed3896175c81d737954a5c195b5a5dcbaac4cdc502b0258a1b44b90->enter($__internal_686c2d836ed3896175c81d737954a5c195b5a5dcbaac4cdc502b0258a1b44b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3a4c76b3ebd609deacbf6158ffc4b5e83724476449bdfd0a7d4cafecb447a6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4c76b3ebd609deacbf6158ffc4b5e83724476449bdfd0a7d4cafecb447a6f3->enter($__internal_3a4c76b3ebd609deacbf6158ffc4b5e83724476449bdfd0a7d4cafecb447a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3a4c76b3ebd609deacbf6158ffc4b5e83724476449bdfd0a7d4cafecb447a6f3->leave($__internal_3a4c76b3ebd609deacbf6158ffc4b5e83724476449bdfd0a7d4cafecb447a6f3_prof);

        
        $__internal_686c2d836ed3896175c81d737954a5c195b5a5dcbaac4cdc502b0258a1b44b90->leave($__internal_686c2d836ed3896175c81d737954a5c195b5a5dcbaac4cdc502b0258a1b44b90_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f87aa6a1b50dea6563c3b1b5f8d97e257b7d6e4bb01aa38e112353405759374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f87aa6a1b50dea6563c3b1b5f8d97e257b7d6e4bb01aa38e112353405759374->enter($__internal_3f87aa6a1b50dea6563c3b1b5f8d97e257b7d6e4bb01aa38e112353405759374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9858db576c59ffdbf6c64c60ecc36842b898a48191fa576611a4f452a88a4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9858db576c59ffdbf6c64c60ecc36842b898a48191fa576611a4f452a88a4cb->enter($__internal_b9858db576c59ffdbf6c64c60ecc36842b898a48191fa576611a4f452a88a4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b9858db576c59ffdbf6c64c60ecc36842b898a48191fa576611a4f452a88a4cb->leave($__internal_b9858db576c59ffdbf6c64c60ecc36842b898a48191fa576611a4f452a88a4cb_prof);

        
        $__internal_3f87aa6a1b50dea6563c3b1b5f8d97e257b7d6e4bb01aa38e112353405759374->leave($__internal_3f87aa6a1b50dea6563c3b1b5f8d97e257b7d6e4bb01aa38e112353405759374_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
