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
        $__internal_81801b075395479baec30c3e0a252641482d1f7a71478b9d0482b42f504071c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81801b075395479baec30c3e0a252641482d1f7a71478b9d0482b42f504071c3->enter($__internal_81801b075395479baec30c3e0a252641482d1f7a71478b9d0482b42f504071c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5d7d9b2fb149a6538ffb973bd91980255ffaa64b5ef6e10fee6fd866b6d7a32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7d9b2fb149a6538ffb973bd91980255ffaa64b5ef6e10fee6fd866b6d7a32a->enter($__internal_5d7d9b2fb149a6538ffb973bd91980255ffaa64b5ef6e10fee6fd866b6d7a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_81801b075395479baec30c3e0a252641482d1f7a71478b9d0482b42f504071c3->leave($__internal_81801b075395479baec30c3e0a252641482d1f7a71478b9d0482b42f504071c3_prof);

        
        $__internal_5d7d9b2fb149a6538ffb973bd91980255ffaa64b5ef6e10fee6fd866b6d7a32a->leave($__internal_5d7d9b2fb149a6538ffb973bd91980255ffaa64b5ef6e10fee6fd866b6d7a32a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2caf2599bc2115baec405456ab8609662f5411a9c8ab00070bbb12011d393fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2caf2599bc2115baec405456ab8609662f5411a9c8ab00070bbb12011d393fab->enter($__internal_2caf2599bc2115baec405456ab8609662f5411a9c8ab00070bbb12011d393fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c6b5f467738d29aa230c9d5326e21e1a024307b9abf56aca236a0c2fcf65f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6b5f467738d29aa230c9d5326e21e1a024307b9abf56aca236a0c2fcf65f2a->enter($__internal_5c6b5f467738d29aa230c9d5326e21e1a024307b9abf56aca236a0c2fcf65f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c6b5f467738d29aa230c9d5326e21e1a024307b9abf56aca236a0c2fcf65f2a->leave($__internal_5c6b5f467738d29aa230c9d5326e21e1a024307b9abf56aca236a0c2fcf65f2a_prof);

        
        $__internal_2caf2599bc2115baec405456ab8609662f5411a9c8ab00070bbb12011d393fab->leave($__internal_2caf2599bc2115baec405456ab8609662f5411a9c8ab00070bbb12011d393fab_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6de06655c783aa84bfdc82a5515fb4a58d89d52809b939ee804eb793a06f456a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de06655c783aa84bfdc82a5515fb4a58d89d52809b939ee804eb793a06f456a->enter($__internal_6de06655c783aa84bfdc82a5515fb4a58d89d52809b939ee804eb793a06f456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1be44932c1072f49a74a403c5059708784dad338f2f5fb37141feb6b93112850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be44932c1072f49a74a403c5059708784dad338f2f5fb37141feb6b93112850->enter($__internal_1be44932c1072f49a74a403c5059708784dad338f2f5fb37141feb6b93112850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1be44932c1072f49a74a403c5059708784dad338f2f5fb37141feb6b93112850->leave($__internal_1be44932c1072f49a74a403c5059708784dad338f2f5fb37141feb6b93112850_prof);

        
        $__internal_6de06655c783aa84bfdc82a5515fb4a58d89d52809b939ee804eb793a06f456a->leave($__internal_6de06655c783aa84bfdc82a5515fb4a58d89d52809b939ee804eb793a06f456a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_350086e50a84258baafcad8fad03d6c5e33e8b093b865cedcf6872888f537b76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350086e50a84258baafcad8fad03d6c5e33e8b093b865cedcf6872888f537b76->enter($__internal_350086e50a84258baafcad8fad03d6c5e33e8b093b865cedcf6872888f537b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e04ea20045c8318e09042ccf7501a1044dec0e43660f5602b51dfb3283836468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04ea20045c8318e09042ccf7501a1044dec0e43660f5602b51dfb3283836468->enter($__internal_e04ea20045c8318e09042ccf7501a1044dec0e43660f5602b51dfb3283836468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e04ea20045c8318e09042ccf7501a1044dec0e43660f5602b51dfb3283836468->leave($__internal_e04ea20045c8318e09042ccf7501a1044dec0e43660f5602b51dfb3283836468_prof);

        
        $__internal_350086e50a84258baafcad8fad03d6c5e33e8b093b865cedcf6872888f537b76->leave($__internal_350086e50a84258baafcad8fad03d6c5e33e8b093b865cedcf6872888f537b76_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fbcd6afed40ebbfce87961be4bc3fdc512b141fbefb2aa61a58e2fc12e719ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fbcd6afed40ebbfce87961be4bc3fdc512b141fbefb2aa61a58e2fc12e719ca->enter($__internal_5fbcd6afed40ebbfce87961be4bc3fdc512b141fbefb2aa61a58e2fc12e719ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_df6274c2b51cbdda557f042b91c3e16ede1111d4fae7fe6f973537863a59a1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6274c2b51cbdda557f042b91c3e16ede1111d4fae7fe6f973537863a59a1ab->enter($__internal_df6274c2b51cbdda557f042b91c3e16ede1111d4fae7fe6f973537863a59a1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df6274c2b51cbdda557f042b91c3e16ede1111d4fae7fe6f973537863a59a1ab->leave($__internal_df6274c2b51cbdda557f042b91c3e16ede1111d4fae7fe6f973537863a59a1ab_prof);

        
        $__internal_5fbcd6afed40ebbfce87961be4bc3fdc512b141fbefb2aa61a58e2fc12e719ca->leave($__internal_5fbcd6afed40ebbfce87961be4bc3fdc512b141fbefb2aa61a58e2fc12e719ca_prof);

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
