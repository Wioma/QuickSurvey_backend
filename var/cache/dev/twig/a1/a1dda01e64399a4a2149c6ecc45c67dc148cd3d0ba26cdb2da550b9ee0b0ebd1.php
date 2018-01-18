<?php

/* TplmBundle:Default:index.html.twig */
class __TwigTemplate_4f02de91fc83ad742d40d7be1c48a463cd75917d6d7c9af7ad89182d44c052f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce378e1cfdd99a5f664185ae3e7e73e5502fa32b6cb0e6454cf1c3145808473c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce378e1cfdd99a5f664185ae3e7e73e5502fa32b6cb0e6454cf1c3145808473c->enter($__internal_ce378e1cfdd99a5f664185ae3e7e73e5502fa32b6cb0e6454cf1c3145808473c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        $__internal_ca06b40b9f88882eb28226c7603fcdc3a040b740318748ed986e1b0d3d0f975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca06b40b9f88882eb28226c7603fcdc3a040b740318748ed986e1b0d3d0f975f->enter($__internal_ca06b40b9f88882eb28226c7603fcdc3a040b740318748ed986e1b0d3d0f975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ce378e1cfdd99a5f664185ae3e7e73e5502fa32b6cb0e6454cf1c3145808473c->leave($__internal_ce378e1cfdd99a5f664185ae3e7e73e5502fa32b6cb0e6454cf1c3145808473c_prof);

        
        $__internal_ca06b40b9f88882eb28226c7603fcdc3a040b740318748ed986e1b0d3d0f975f->leave($__internal_ca06b40b9f88882eb28226c7603fcdc3a040b740318748ed986e1b0d3d0f975f_prof);

    }

    public function getTemplateName()
    {
        return "TplmBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "TplmBundle:Default:index.html.twig", "C:\\wamp\\www\\QuickSurvey_backend\\src\\TplmBundle/Resources/views/Default/index.html.twig");
    }
}
