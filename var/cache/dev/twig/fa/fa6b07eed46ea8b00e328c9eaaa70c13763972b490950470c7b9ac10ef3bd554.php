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
        $__internal_1fba95d1cc0c0a382dd3d44a8e2375d9efc732053b0298574776a1d200bc6020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fba95d1cc0c0a382dd3d44a8e2375d9efc732053b0298574776a1d200bc6020->enter($__internal_1fba95d1cc0c0a382dd3d44a8e2375d9efc732053b0298574776a1d200bc6020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_247e377ef5999312b1ca10102f1ebedad4770c1ca7b5b3011321270d96370097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247e377ef5999312b1ca10102f1ebedad4770c1ca7b5b3011321270d96370097->enter($__internal_247e377ef5999312b1ca10102f1ebedad4770c1ca7b5b3011321270d96370097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1fba95d1cc0c0a382dd3d44a8e2375d9efc732053b0298574776a1d200bc6020->leave($__internal_1fba95d1cc0c0a382dd3d44a8e2375d9efc732053b0298574776a1d200bc6020_prof);

        
        $__internal_247e377ef5999312b1ca10102f1ebedad4770c1ca7b5b3011321270d96370097->leave($__internal_247e377ef5999312b1ca10102f1ebedad4770c1ca7b5b3011321270d96370097_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b620ce10b6d0be5c8a45d8f562e76578501cca685272b69637b51c1c5fb2f6f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b620ce10b6d0be5c8a45d8f562e76578501cca685272b69637b51c1c5fb2f6f2->enter($__internal_b620ce10b6d0be5c8a45d8f562e76578501cca685272b69637b51c1c5fb2f6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a66be49f12417e1d795d65d496ec8efe9a8de8f3e9adecb0efdf08a0e43a885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66be49f12417e1d795d65d496ec8efe9a8de8f3e9adecb0efdf08a0e43a885a->enter($__internal_a66be49f12417e1d795d65d496ec8efe9a8de8f3e9adecb0efdf08a0e43a885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a66be49f12417e1d795d65d496ec8efe9a8de8f3e9adecb0efdf08a0e43a885a->leave($__internal_a66be49f12417e1d795d65d496ec8efe9a8de8f3e9adecb0efdf08a0e43a885a_prof);

        
        $__internal_b620ce10b6d0be5c8a45d8f562e76578501cca685272b69637b51c1c5fb2f6f2->leave($__internal_b620ce10b6d0be5c8a45d8f562e76578501cca685272b69637b51c1c5fb2f6f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_307a652c4c884d0cbccd8831ea18dadae551f1e2038d8f0d7b915d55bf815f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307a652c4c884d0cbccd8831ea18dadae551f1e2038d8f0d7b915d55bf815f39->enter($__internal_307a652c4c884d0cbccd8831ea18dadae551f1e2038d8f0d7b915d55bf815f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_265439afce0a9c0878a1199d22ec7af7dcbf5c0333fdb93615596a31f9dc4ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265439afce0a9c0878a1199d22ec7af7dcbf5c0333fdb93615596a31f9dc4ea2->enter($__internal_265439afce0a9c0878a1199d22ec7af7dcbf5c0333fdb93615596a31f9dc4ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_265439afce0a9c0878a1199d22ec7af7dcbf5c0333fdb93615596a31f9dc4ea2->leave($__internal_265439afce0a9c0878a1199d22ec7af7dcbf5c0333fdb93615596a31f9dc4ea2_prof);

        
        $__internal_307a652c4c884d0cbccd8831ea18dadae551f1e2038d8f0d7b915d55bf815f39->leave($__internal_307a652c4c884d0cbccd8831ea18dadae551f1e2038d8f0d7b915d55bf815f39_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e712578c1e61969672f3340cbbf60cc12cf779801c99d235d92718482359d8c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e712578c1e61969672f3340cbbf60cc12cf779801c99d235d92718482359d8c7->enter($__internal_e712578c1e61969672f3340cbbf60cc12cf779801c99d235d92718482359d8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_32c8726ebea9255898a246489149cfcd8184da9fc64166dbbe0faceb38f2d0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c8726ebea9255898a246489149cfcd8184da9fc64166dbbe0faceb38f2d0bf->enter($__internal_32c8726ebea9255898a246489149cfcd8184da9fc64166dbbe0faceb38f2d0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_32c8726ebea9255898a246489149cfcd8184da9fc64166dbbe0faceb38f2d0bf->leave($__internal_32c8726ebea9255898a246489149cfcd8184da9fc64166dbbe0faceb38f2d0bf_prof);

        
        $__internal_e712578c1e61969672f3340cbbf60cc12cf779801c99d235d92718482359d8c7->leave($__internal_e712578c1e61969672f3340cbbf60cc12cf779801c99d235d92718482359d8c7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_872d0bcc68c957e023df3992b867dc661439d7ec1db887add4f5cf4a05e5ef60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872d0bcc68c957e023df3992b867dc661439d7ec1db887add4f5cf4a05e5ef60->enter($__internal_872d0bcc68c957e023df3992b867dc661439d7ec1db887add4f5cf4a05e5ef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a3f2e035dba41f9ed159e232507e3bce89708dad9e1edd634dc361cfde31fbac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f2e035dba41f9ed159e232507e3bce89708dad9e1edd634dc361cfde31fbac->enter($__internal_a3f2e035dba41f9ed159e232507e3bce89708dad9e1edd634dc361cfde31fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3f2e035dba41f9ed159e232507e3bce89708dad9e1edd634dc361cfde31fbac->leave($__internal_a3f2e035dba41f9ed159e232507e3bce89708dad9e1edd634dc361cfde31fbac_prof);

        
        $__internal_872d0bcc68c957e023df3992b867dc661439d7ec1db887add4f5cf4a05e5ef60->leave($__internal_872d0bcc68c957e023df3992b867dc661439d7ec1db887add4f5cf4a05e5ef60_prof);

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
