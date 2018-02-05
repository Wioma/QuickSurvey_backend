<?php

/* base.html.twig */
class __TwigTemplate_08fc77992067245379648c13baa1d9937a61140bc3b660268d02bc59d5982ee5 extends Twig_Template
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
        $__internal_729d001a997fc6e342538b49564e7ec7e724610db19e07b56d6292153b6f9cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729d001a997fc6e342538b49564e7ec7e724610db19e07b56d6292153b6f9cbc->enter($__internal_729d001a997fc6e342538b49564e7ec7e724610db19e07b56d6292153b6f9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f2bfa781a1f4317956af46af9be25af1bab40c1647ff3bac7878ad455722296e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bfa781a1f4317956af46af9be25af1bab40c1647ff3bac7878ad455722296e->enter($__internal_f2bfa781a1f4317956af46af9be25af1bab40c1647ff3bac7878ad455722296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_729d001a997fc6e342538b49564e7ec7e724610db19e07b56d6292153b6f9cbc->leave($__internal_729d001a997fc6e342538b49564e7ec7e724610db19e07b56d6292153b6f9cbc_prof);

        
        $__internal_f2bfa781a1f4317956af46af9be25af1bab40c1647ff3bac7878ad455722296e->leave($__internal_f2bfa781a1f4317956af46af9be25af1bab40c1647ff3bac7878ad455722296e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4096ddafbbdbb56f1c1893aa61818f64feab21d5081384ec63c2f897fa7af036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4096ddafbbdbb56f1c1893aa61818f64feab21d5081384ec63c2f897fa7af036->enter($__internal_4096ddafbbdbb56f1c1893aa61818f64feab21d5081384ec63c2f897fa7af036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_234119c244b0576116ed25ffd917b7af76d2997a9d170fee3b6070e4f8d77278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234119c244b0576116ed25ffd917b7af76d2997a9d170fee3b6070e4f8d77278->enter($__internal_234119c244b0576116ed25ffd917b7af76d2997a9d170fee3b6070e4f8d77278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_234119c244b0576116ed25ffd917b7af76d2997a9d170fee3b6070e4f8d77278->leave($__internal_234119c244b0576116ed25ffd917b7af76d2997a9d170fee3b6070e4f8d77278_prof);

        
        $__internal_4096ddafbbdbb56f1c1893aa61818f64feab21d5081384ec63c2f897fa7af036->leave($__internal_4096ddafbbdbb56f1c1893aa61818f64feab21d5081384ec63c2f897fa7af036_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34d95b9eaa93ce7c28bfc20209b07793c4fdcf77b6eb21a2fcb51f23344384bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d95b9eaa93ce7c28bfc20209b07793c4fdcf77b6eb21a2fcb51f23344384bc->enter($__internal_34d95b9eaa93ce7c28bfc20209b07793c4fdcf77b6eb21a2fcb51f23344384bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c5b615834f37f6e862c625ffbd981bc0ae8d88894575d207a624bb1c0891345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5b615834f37f6e862c625ffbd981bc0ae8d88894575d207a624bb1c0891345->enter($__internal_1c5b615834f37f6e862c625ffbd981bc0ae8d88894575d207a624bb1c0891345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c5b615834f37f6e862c625ffbd981bc0ae8d88894575d207a624bb1c0891345->leave($__internal_1c5b615834f37f6e862c625ffbd981bc0ae8d88894575d207a624bb1c0891345_prof);

        
        $__internal_34d95b9eaa93ce7c28bfc20209b07793c4fdcf77b6eb21a2fcb51f23344384bc->leave($__internal_34d95b9eaa93ce7c28bfc20209b07793c4fdcf77b6eb21a2fcb51f23344384bc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8834bb11e059ffc293908299d32315d0bc0458b401a2e967fbc0701786c2a8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8834bb11e059ffc293908299d32315d0bc0458b401a2e967fbc0701786c2a8e3->enter($__internal_8834bb11e059ffc293908299d32315d0bc0458b401a2e967fbc0701786c2a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0c91138e986ef1cc45697e1487b8f83ead233980d0665f658f4cc66d171e3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c91138e986ef1cc45697e1487b8f83ead233980d0665f658f4cc66d171e3a9->enter($__internal_d0c91138e986ef1cc45697e1487b8f83ead233980d0665f658f4cc66d171e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0c91138e986ef1cc45697e1487b8f83ead233980d0665f658f4cc66d171e3a9->leave($__internal_d0c91138e986ef1cc45697e1487b8f83ead233980d0665f658f4cc66d171e3a9_prof);

        
        $__internal_8834bb11e059ffc293908299d32315d0bc0458b401a2e967fbc0701786c2a8e3->leave($__internal_8834bb11e059ffc293908299d32315d0bc0458b401a2e967fbc0701786c2a8e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f306e5623db5f2933303b482896c04ac2b00a60ba27545cb4e5ee79a4518db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f306e5623db5f2933303b482896c04ac2b00a60ba27545cb4e5ee79a4518db9->enter($__internal_6f306e5623db5f2933303b482896c04ac2b00a60ba27545cb4e5ee79a4518db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cfba56a68326016382f5d31844104b3b7a12bc1d1d2655331699da82c9978d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfba56a68326016382f5d31844104b3b7a12bc1d1d2655331699da82c9978d9a->enter($__internal_cfba56a68326016382f5d31844104b3b7a12bc1d1d2655331699da82c9978d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cfba56a68326016382f5d31844104b3b7a12bc1d1d2655331699da82c9978d9a->leave($__internal_cfba56a68326016382f5d31844104b3b7a12bc1d1d2655331699da82c9978d9a_prof);

        
        $__internal_6f306e5623db5f2933303b482896c04ac2b00a60ba27545cb4e5ee79a4518db9->leave($__internal_6f306e5623db5f2933303b482896c04ac2b00a60ba27545cb4e5ee79a4518db9_prof);

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
", "base.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\app\\Resources\\views\\base.html.twig");
    }
}
