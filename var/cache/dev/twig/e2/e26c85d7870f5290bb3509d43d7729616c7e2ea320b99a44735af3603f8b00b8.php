<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f25a7ac1e0668f0390da2afc6baadde712745547e31ac2c33913d6139bfe733a extends Twig_Template
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
        $__internal_132daebdb9dc4fa607c0851289749c49a705846edd26194c8a093568afefc9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132daebdb9dc4fa607c0851289749c49a705846edd26194c8a093568afefc9d5->enter($__internal_132daebdb9dc4fa607c0851289749c49a705846edd26194c8a093568afefc9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0b746e5751679bc54236b8f7e3eb6b723db1bf7d93d5a75a428690fdf12af32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b746e5751679bc54236b8f7e3eb6b723db1bf7d93d5a75a428690fdf12af32b->enter($__internal_0b746e5751679bc54236b8f7e3eb6b723db1bf7d93d5a75a428690fdf12af32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_132daebdb9dc4fa607c0851289749c49a705846edd26194c8a093568afefc9d5->leave($__internal_132daebdb9dc4fa607c0851289749c49a705846edd26194c8a093568afefc9d5_prof);

        
        $__internal_0b746e5751679bc54236b8f7e3eb6b723db1bf7d93d5a75a428690fdf12af32b->leave($__internal_0b746e5751679bc54236b8f7e3eb6b723db1bf7d93d5a75a428690fdf12af32b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
