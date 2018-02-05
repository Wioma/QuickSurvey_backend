<?php

/* ::base.html.twig */
class __TwigTemplate_92a084c639da6409a96c2f56ab8ac9a176eda146674fd2c94011d99b3bc662ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_239950fed382a5bef07114c2c81e76c2c45ee4197a79839fc7891b293164bad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239950fed382a5bef07114c2c81e76c2c45ee4197a79839fc7891b293164bad9->enter($__internal_239950fed382a5bef07114c2c81e76c2c45ee4197a79839fc7891b293164bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6f237c58d14c0b579206bb7cdc3f381a54680a9497545a5dfcc600b074c93f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f237c58d14c0b579206bb7cdc3f381a54680a9497545a5dfcc600b074c93f01->enter($__internal_6f237c58d14c0b579206bb7cdc3f381a54680a9497545a5dfcc600b074c93f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_239950fed382a5bef07114c2c81e76c2c45ee4197a79839fc7891b293164bad9->leave($__internal_239950fed382a5bef07114c2c81e76c2c45ee4197a79839fc7891b293164bad9_prof);

        
        $__internal_6f237c58d14c0b579206bb7cdc3f381a54680a9497545a5dfcc600b074c93f01->leave($__internal_6f237c58d14c0b579206bb7cdc3f381a54680a9497545a5dfcc600b074c93f01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_782aaafcf730cca96e4e28d2ca6fd66e9e36f6a4b04bf98db4e20a0c0df10a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782aaafcf730cca96e4e28d2ca6fd66e9e36f6a4b04bf98db4e20a0c0df10a1a->enter($__internal_782aaafcf730cca96e4e28d2ca6fd66e9e36f6a4b04bf98db4e20a0c0df10a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b6b87fd790c423b6aeb9889cdf46991ac69f877d07721e43dc9016cf04e6eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6b87fd790c423b6aeb9889cdf46991ac69f877d07721e43dc9016cf04e6eab->enter($__internal_9b6b87fd790c423b6aeb9889cdf46991ac69f877d07721e43dc9016cf04e6eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9b6b87fd790c423b6aeb9889cdf46991ac69f877d07721e43dc9016cf04e6eab->leave($__internal_9b6b87fd790c423b6aeb9889cdf46991ac69f877d07721e43dc9016cf04e6eab_prof);

        
        $__internal_782aaafcf730cca96e4e28d2ca6fd66e9e36f6a4b04bf98db4e20a0c0df10a1a->leave($__internal_782aaafcf730cca96e4e28d2ca6fd66e9e36f6a4b04bf98db4e20a0c0df10a1a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_306dbcc4c2c199896d326824d6bbbe409a2e32095f7cffe63df23f5de662b3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306dbcc4c2c199896d326824d6bbbe409a2e32095f7cffe63df23f5de662b3b1->enter($__internal_306dbcc4c2c199896d326824d6bbbe409a2e32095f7cffe63df23f5de662b3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1a5d9764c93450ba08fd7686a13b4f58b69aea598c34d13197bcf0c692059f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5d9764c93450ba08fd7686a13b4f58b69aea598c34d13197bcf0c692059f4c->enter($__internal_1a5d9764c93450ba08fd7686a13b4f58b69aea598c34d13197bcf0c692059f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a5d9764c93450ba08fd7686a13b4f58b69aea598c34d13197bcf0c692059f4c->leave($__internal_1a5d9764c93450ba08fd7686a13b4f58b69aea598c34d13197bcf0c692059f4c_prof);

        
        $__internal_306dbcc4c2c199896d326824d6bbbe409a2e32095f7cffe63df23f5de662b3b1->leave($__internal_306dbcc4c2c199896d326824d6bbbe409a2e32095f7cffe63df23f5de662b3b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_628897e9d438ae51eabd47cbbff5367604e593132e9f11f82111785016e9bb49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_628897e9d438ae51eabd47cbbff5367604e593132e9f11f82111785016e9bb49->enter($__internal_628897e9d438ae51eabd47cbbff5367604e593132e9f11f82111785016e9bb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85d9f179bc3130b88d65dd92171bbfdbe566be38f947481d5e1ffbc260566683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d9f179bc3130b88d65dd92171bbfdbe566be38f947481d5e1ffbc260566683->enter($__internal_85d9f179bc3130b88d65dd92171bbfdbe566be38f947481d5e1ffbc260566683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_85d9f179bc3130b88d65dd92171bbfdbe566be38f947481d5e1ffbc260566683->leave($__internal_85d9f179bc3130b88d65dd92171bbfdbe566be38f947481d5e1ffbc260566683_prof);

        
        $__internal_628897e9d438ae51eabd47cbbff5367604e593132e9f11f82111785016e9bb49->leave($__internal_628897e9d438ae51eabd47cbbff5367604e593132e9f11f82111785016e9bb49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83d34dd4be758b7056b6f04a9a71b17457f30f6bc62f55f2161bdab07432ded6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d34dd4be758b7056b6f04a9a71b17457f30f6bc62f55f2161bdab07432ded6->enter($__internal_83d34dd4be758b7056b6f04a9a71b17457f30f6bc62f55f2161bdab07432ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_72a114aba93aada5441979b05f82f797e7c3dcdbf0765cec02e0664eec3806b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a114aba93aada5441979b05f82f797e7c3dcdbf0765cec02e0664eec3806b7->enter($__internal_72a114aba93aada5441979b05f82f797e7c3dcdbf0765cec02e0664eec3806b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_72a114aba93aada5441979b05f82f797e7c3dcdbf0765cec02e0664eec3806b7->leave($__internal_72a114aba93aada5441979b05f82f797e7c3dcdbf0765cec02e0664eec3806b7_prof);

        
        $__internal_83d34dd4be758b7056b6f04a9a71b17457f30f6bc62f55f2161bdab07432ded6->leave($__internal_83d34dd4be758b7056b6f04a9a71b17457f30f6bc62f55f2161bdab07432ded6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\app/Resources\\views/base.html.twig");
    }
}
