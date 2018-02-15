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
        $__internal_2ca6fb01db768b16a4f921e1db9d94c86b29d8ea486bf0a5a5351ca20985bd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca6fb01db768b16a4f921e1db9d94c86b29d8ea486bf0a5a5351ca20985bd4f->enter($__internal_2ca6fb01db768b16a4f921e1db9d94c86b29d8ea486bf0a5a5351ca20985bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c3efd4940a1f074287759e203a36a156c328396d6ef45e0029747c5df5121f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3efd4940a1f074287759e203a36a156c328396d6ef45e0029747c5df5121f6b->enter($__internal_c3efd4940a1f074287759e203a36a156c328396d6ef45e0029747c5df5121f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2ca6fb01db768b16a4f921e1db9d94c86b29d8ea486bf0a5a5351ca20985bd4f->leave($__internal_2ca6fb01db768b16a4f921e1db9d94c86b29d8ea486bf0a5a5351ca20985bd4f_prof);

        
        $__internal_c3efd4940a1f074287759e203a36a156c328396d6ef45e0029747c5df5121f6b->leave($__internal_c3efd4940a1f074287759e203a36a156c328396d6ef45e0029747c5df5121f6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abc2017e220319f2c76c3d7169cee4cb9a9420a142de7ff4fd581b1876eb7cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc2017e220319f2c76c3d7169cee4cb9a9420a142de7ff4fd581b1876eb7cea->enter($__internal_abc2017e220319f2c76c3d7169cee4cb9a9420a142de7ff4fd581b1876eb7cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_acfbc5aee4df97e16ba2e6af4d7b3353d21ee179256a373a4be99a07300ee53b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfbc5aee4df97e16ba2e6af4d7b3353d21ee179256a373a4be99a07300ee53b->enter($__internal_acfbc5aee4df97e16ba2e6af4d7b3353d21ee179256a373a4be99a07300ee53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_acfbc5aee4df97e16ba2e6af4d7b3353d21ee179256a373a4be99a07300ee53b->leave($__internal_acfbc5aee4df97e16ba2e6af4d7b3353d21ee179256a373a4be99a07300ee53b_prof);

        
        $__internal_abc2017e220319f2c76c3d7169cee4cb9a9420a142de7ff4fd581b1876eb7cea->leave($__internal_abc2017e220319f2c76c3d7169cee4cb9a9420a142de7ff4fd581b1876eb7cea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f63af38a52f46b572cc04fa3a71365c5516a834e4c64835a165712dd81db474f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63af38a52f46b572cc04fa3a71365c5516a834e4c64835a165712dd81db474f->enter($__internal_f63af38a52f46b572cc04fa3a71365c5516a834e4c64835a165712dd81db474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ed9206a70cd247f3947e08e275c24f87a716dbd03cda144cbfd227d7d50a1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed9206a70cd247f3947e08e275c24f87a716dbd03cda144cbfd227d7d50a1ce->enter($__internal_7ed9206a70cd247f3947e08e275c24f87a716dbd03cda144cbfd227d7d50a1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ed9206a70cd247f3947e08e275c24f87a716dbd03cda144cbfd227d7d50a1ce->leave($__internal_7ed9206a70cd247f3947e08e275c24f87a716dbd03cda144cbfd227d7d50a1ce_prof);

        
        $__internal_f63af38a52f46b572cc04fa3a71365c5516a834e4c64835a165712dd81db474f->leave($__internal_f63af38a52f46b572cc04fa3a71365c5516a834e4c64835a165712dd81db474f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bee772faeef6a9b7c5f0b2cea463bdfa0237890ec88af6aa5102a75630b7f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bee772faeef6a9b7c5f0b2cea463bdfa0237890ec88af6aa5102a75630b7f5e->enter($__internal_6bee772faeef6a9b7c5f0b2cea463bdfa0237890ec88af6aa5102a75630b7f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73d07c5b18f3ac2b4964c59329ec2ea3b48d6f6e27e324d15cb1c4f541372372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d07c5b18f3ac2b4964c59329ec2ea3b48d6f6e27e324d15cb1c4f541372372->enter($__internal_73d07c5b18f3ac2b4964c59329ec2ea3b48d6f6e27e324d15cb1c4f541372372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73d07c5b18f3ac2b4964c59329ec2ea3b48d6f6e27e324d15cb1c4f541372372->leave($__internal_73d07c5b18f3ac2b4964c59329ec2ea3b48d6f6e27e324d15cb1c4f541372372_prof);

        
        $__internal_6bee772faeef6a9b7c5f0b2cea463bdfa0237890ec88af6aa5102a75630b7f5e->leave($__internal_6bee772faeef6a9b7c5f0b2cea463bdfa0237890ec88af6aa5102a75630b7f5e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62c82e14964887176cc56f7c2fc46c54f400627b342be8ed0485b8f61522f3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c82e14964887176cc56f7c2fc46c54f400627b342be8ed0485b8f61522f3d0->enter($__internal_62c82e14964887176cc56f7c2fc46c54f400627b342be8ed0485b8f61522f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9a1ccf4102405dda2fce748ad52b51095e80a50c6735bfc65eb238d9bb98f524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1ccf4102405dda2fce748ad52b51095e80a50c6735bfc65eb238d9bb98f524->enter($__internal_9a1ccf4102405dda2fce748ad52b51095e80a50c6735bfc65eb238d9bb98f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a1ccf4102405dda2fce748ad52b51095e80a50c6735bfc65eb238d9bb98f524->leave($__internal_9a1ccf4102405dda2fce748ad52b51095e80a50c6735bfc65eb238d9bb98f524_prof);

        
        $__internal_62c82e14964887176cc56f7c2fc46c54f400627b342be8ed0485b8f61522f3d0->leave($__internal_62c82e14964887176cc56f7c2fc46c54f400627b342be8ed0485b8f61522f3d0_prof);

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
