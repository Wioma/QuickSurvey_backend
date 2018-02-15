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
        $__internal_fde78d86d364c38692609655be187c72cf7e24aa6dc9b240a96cc06cd453134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde78d86d364c38692609655be187c72cf7e24aa6dc9b240a96cc06cd453134f->enter($__internal_fde78d86d364c38692609655be187c72cf7e24aa6dc9b240a96cc06cd453134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        $__internal_2e05040aeffbdb0e3f6a781427d3eaf27a29129b9ce8b7770aa9d9b4fbaa6a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e05040aeffbdb0e3f6a781427d3eaf27a29129b9ce8b7770aa9d9b4fbaa6a65->enter($__internal_2e05040aeffbdb0e3f6a781427d3eaf27a29129b9ce8b7770aa9d9b4fbaa6a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TplmBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fde78d86d364c38692609655be187c72cf7e24aa6dc9b240a96cc06cd453134f->leave($__internal_fde78d86d364c38692609655be187c72cf7e24aa6dc9b240a96cc06cd453134f_prof);

        
        $__internal_2e05040aeffbdb0e3f6a781427d3eaf27a29129b9ce8b7770aa9d9b4fbaa6a65->leave($__internal_2e05040aeffbdb0e3f6a781427d3eaf27a29129b9ce8b7770aa9d9b4fbaa6a65_prof);

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
